<?php

namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class uaDefaultController extends Controller
{
    public function indexAction()
    {
        //traer todos los generos
        $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll();
        //para ordenarlos
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:Default:index.html.twig',
                array('allGenders' =>$allGenders));
    }
   
    public function searchAction($page, $moviesNum){
        
        $keyword = $_POST['txtKeyword'];
        $moviesToShow = $page * $moviesNum;//para la paginacion
        
        if(strlen($keyword) > 0){ //el usuario ingreso texto
            
            $em = $this->getDoctrine()->getEntityManager();
            
            //hacemos busqueda de peliculas
            $qb = $em->createQueryBuilder('m');
            $allMovies = $qb->select('m')->from('uaUCRuaProject2Bundle:Movie', 'm')
                    ->where( $qb->expr()->like('m.title', $qb->expr()->literal('%' . $keyword . '%')) )
                    ->getQuery()->getResult();
            
            //hacemos busqueda de actores
            $allActors = $qb->select('a')->from('uaUCRuaProject2Bundle:Actor', 'a')
            ->where( $qb->expr()->like('a.name', $qb->expr()->literal('%' . $keyword . '%')))
            ->orWhere( $qb->expr()->like('a.lastname', $qb->expr()->literal('%' . $keyword . '%')))
            ->getQuery()->getResult();
            
            //hacer paginacion 
            $movies = [];//arreglo con las peliculas para la paginacion
            for ($i = ($moviesToShow-$moviesNum); $i < $moviesToShow; $i++) {
                if($i < count($allMovies)){
                    array_push($movies, $allMovies[$i]);
                }else{
                    break;
                }
            }//end for
            
            //traer los generos
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
            
            return $this->render('uaUCRuaProject2Bundle:Default:ua_search_results.html.twig',
              array('allMovies' => $allMovies,
                  'allActors' => $allActors,
                  'totalMovies' => count($allMovies),
                  'totalPages' => ceil(count($allMovies)/6),
                  'moviesNumber' => 6,
                  'allGenders' =>$allGenders));
           
            
        }else{
            //traer todos los generos
            $em = $this->getDoctrine()->getEntityManager();
            //para ordenarlos
            $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);

            return $this->render('uaUCRuaProject2Bundle:Default:index.html.twig',
                    array('allGenders' =>$allGenders));
        }//end if/else
    }//end searchAction

    public function aboutAction(){
         return $this->render('uaUCRuaProject2Bundle:Default:ua_about.html.twig');
    }
    public function contactAction(){
         return $this->render('uaUCRuaProject2Bundle:Default:ua_contact.html.twig');
    }
    
    public function faqAction() {
        return $this->render('uaUCRuaProject2Bundle:Default:ua_faq.html.twig');
    }
    public function categoriesAction(){
        
         //traer todos los generos
        $em = $this->getDoctrine()->getEntityManager();
       
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
         return $this->render('uaUCRuaProject2Bundle:Default:ua_categories.html.twig',
                 array('allGenders' =>$allGenders));
    }
      public function update_information_formAction() {
        //traer todos los generos
        $em = $this->getDoctrine()->getEntityManager();

       $blockBusterEmails = $em->getRepository('uaUCRuaProject2Bundle:Blockbusteremails')->findAll();
        $blockBusterTelephones = $em->getRepository('uaUCRuaProject2Bundle:Blockbustertelephones')->findAll();
       // $blockBuster= $em->getRepository('uaUCRuaProject2Bundle:Blockbuster')->findOneBy(array('id' => 1));
       
        return $this->render('uaUCRuaProject2Bundle:Default:ua_blockbuster.html.twig', array( 
            'emails' => $blockBusterEmails,
            'telephones' => $blockBusterTelephones));
    }
    
   public function update_informationAction() {
             $em = $this->getDoctrine()->getEntityManager();
            //codigo para insertar
           
            $em = $this->getDoctrine()->getEntityManager();
            
            $telResult = $em->getRepository('uaUCRuaProject2Bundle:Blockbustertelephones')->findAll();
            $emailResult = $em->getRepository('uaUCRuaProject2Bundle:Blockbusteremails')->findAll();

            foreach ($telResult as $tel) {
                $a=$_POST['txtTel'];
                $tel->setTelephone($a);
                $em->flush();
            }
            foreach ($emailResult as $email) {
                $email->setEmail($_POST['txtImail'.$email.getEmail()]);
                $em->flush();
            }
            
            $em->flush();
             return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
      
    }
    
}
