<?php


namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use uaUCR\uaProject2Bundle\Entity\Actor;
class uaActorController extends Controller
{
    
    public function insert_actor_formAction(){
         return $this->render('uaUCRuaProject2Bundle:uaActor:ua_insert_actor.html.twig');
   
    }
    public function insert_actorAction(){
        $name = $_POST['txtName'];
        $last = $_POST['txtLastName'];
        
         if (strlen($name) > 0 && strlen($last) > 0 ) {
            
            $em = $this->getDoctrine()->getEntityManager();
            //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
            //para ordenarlos
            $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->findAll();

            //para controlar si existe o no
            $existsActor = false;
            foreach ($allActors as $actor1) {
                //verifica si el actor ya existe para no insertarlo de nuevo
             if ($actor1->getName() == $name && $actor1->getlastname() == $last ) {
                    $existsActor = true;
                    break;
                }//end if
            }//end foreach
            //Entra si no existe para insertarlo
            if ($existsActor == false) {
                //crear el objeto
                $actor = new Actor();
                $actor->setName($name);
                $actor->setLastname($last);

                //insertar el objeto
                $em->persist($actor); //pone el objeto en una cola para insertarlo
                $em->flush();
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
            } else {
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
            }
        }else {
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
            }
        
    }
    public function update_actor_formAction() {
        //traer todos las peliculas
        $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
        //para ordenarlos
        $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->findBy([], ['name' => 'ASC']);


        return $this->render('uaUCRuaProject2Bundle:uaActor:ua_update_actor.html.twig', array('allActors' => $allActors));
    }

    public function update_actor_pageAction($code) {
        //traer todos las peliculas
        $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
        //para ordenarlos
        $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->find($code);

        return $this->render('uaUCRuaProject2Bundle:uaActor:ua_update_actor_page.html.twig', array('allActors' => $allActors));
    }

//update_movie_pageAction

    public function update_actorAction($code) {
        //obtener la informacion
        $actorName = $_POST['txtActor'];
        $actorLast = $_POST['txtLast'];

        if (strlen($actorName) > 0 && strlen($actorLast) > 0) {
            $em = $this->getDoctrine()->getEntityManager();
            //codigo para insertar
            //traer el Actor
            $em = $this->getDoctrine()->getEntityManager();

            $actorResult = $em->getRepository('uaUCRuaProject2Bundle:Actor')->find($code);

            //actualizar el objeto
            $actorResult->setName($actorName);
            $actorResult->setLastname($actorLast);
            //actualizar el objeto
            $em->flush();
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
        }//end if/else
    }

//update_movieAction

    public function delete_actor_pageAction($codActor) {
        //traer todos las peliculas
        $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
        //para ordenarlos
        $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->find($codActor);

        return $this->render('uaUCRuaProject2Bundle:uaActor:ua_delete_actor_page.html.twig', array('allActors' => $allActors));
    }

//update_movie_pageAction

    public function delete_actorAction($codActor) {

        //traer el Actor
        $em = $this->getDoctrine()->getEntityManager();

        $actorsResult = $em->getRepository('uaUCRuaProject2Bundle:Actor')->find($codActor);
        $moviesResult = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findAll();
        // $moviesResult = $genderResult->getCodgender();
        //eliminar el objeto de movie_actor          
        foreach ($moviesResult as $movie) {
            if ($movie->getIdactor() == $codActor) {
                $movie->removeIdactor($actorsResult->getId());
                $actorsResult->removeCodmovie($movie->getCodmovie());
            }//end if
        }//emd foreach
        //eliminar el objeto
        $em->remove($actorsResult);
        //actualizar el objeto
        $em->flush();
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
    }//end delete

}
?>
