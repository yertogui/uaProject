<?php

namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use uaUCR\uaProject2Bundle\Entity\Gender;

class uaGenderController extends Controller
{
   public function insert_gender_formAction() {
        return $this->render('uaUCRuaProject2Bundle:uaGender:ua_insert_gender.html.twig');
    }

    public function insert_genderAction() {
        $genderName = $_POST['txtGender'];
        if (strlen($genderName) > 0) {
            $em = $this->getDoctrine()->getEntityManager();
            //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
            //para ordenarlos
            $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findAll();

            //para controlar si existe o no
            $existsGender = false;
            foreach ($allGenders as $gender1) {

                //verifica si el actor ya existe para no insertarlo de nuevo
                if ($gender1->getName() == $genderName) {
                    $existsGender = true;
                    break;
                }//end if
            }//end foreach
            //Entra si no existe para insertarlo
            if ($existsGender == false) {
                //crear el objeto
                $gender = new Gender();
                $gender->setName($genderName);

                //insertar el objeto
                $em->persist($gender); //pone el objeto en una cola para insertarlo
                $em->flush();
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
            } else {
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
            }
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
        }
    }
    
    
     public function update_gender_formAction(){
        //traer todos las peliculas
                $em = $this->getDoctrine()->getEntityManager();
                //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
                //para ordenarlos
                $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);

        
        return $this->render('uaUCRuaProject2Bundle:uaGender:ua_update_gender.html.twig',
                 array('allGenders' =>$allGenders));
    }
    
    
    public function update_gender_pageAction($code){
         //traer todos las peliculas
                $em = $this->getDoctrine()->getEntityManager();
                //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
                //para ordenarlos
               $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($code);
               
                return $this->render('uaUCRuaProject2Bundle:uaGender:ua_update_gender_page.html.twig',
                 array('allGenders' =>$allGenders));

        
    }//update_movie_pageAction

    public function update_genderAction($code){
        //obtener la informacion
  $genderName = $_POST['txtGender'];
        if (strlen($genderName) > 0) {
            $em = $this->getDoctrine()->getEntityManager();
            //codigo para insertar
            //traer el genero
            $em = $this->getDoctrine()->getEntityManager();
            
            $genderResult = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($code);

            //actualizar el objeto
            $genderResult->setName($genderName);
            //actualizar el objeto
            $em->flush();
             return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
        }//end if/else
   }//update_movieAction
   public function delete_gender_pageAction($codGender){
         //traer todos las peliculas
                $em = $this->getDoctrine()->getEntityManager();
                //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
                //para ordenarlos
               $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($codGender);
               
                return $this->render('uaUCRuaProject2Bundle:uaGender:ua_delete_gender_page.html.twig',
                 array('allGenders' =>$allGenders));

        
    }//update_movie_pageAction
    public function delete_genderAction($codGender){
       
       
            //traer el Actor
            $em = $this->getDoctrine()->getEntityManager();
            
            $genderResult = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($codGender);
            $moviesResult = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findAll();
           // $moviesResult = $genderResult->getCodgender();
            
            //eliminar el objeto de movie          
            foreach ($moviesResult as $movie) {
                if($movie->getCodgender()== $codGender){
                  $movie->setCodgender($genderResult->getId());
                }//end if
            }//emd foreach
            
            
             //eliminar el objeto
            $em->remove($genderResult);
            //actualizar el objeto
            $em->flush();
             return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
        
   }//update_movieAction
}

    
?>
