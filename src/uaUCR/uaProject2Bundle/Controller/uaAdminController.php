<?php

namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use uaUCR\uaProject2Bundle\Entity\Administrator;

class uaAdminController extends Controller
{
    public function index_adminAction(Request $request)
    {
        $session = $request->getSession();
        
        if($session->get('email')){
            return $this->render('uaUCRuaProject2Bundle:uaAdmin:ua_index_admin.html.twig');
        }else{
            return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig', 
                    array('error' =>'Not Logged In'));
        }
        
    }//end index_adminAction
    
    public function insert_admin_formAction(){
        return $this->render('uaUCRuaProject2Bundle:uaAdmin:ua_insert_admin.html.twig');
   
    }
    
    public function insert_adminAction(){
        $name = $_POST['txtName'];
        $telephone = $_POST['txtTelephone'];
        $email = $_POST['txtEmail'];
        $address = $_POST['txtAddress'];
        $country = $_POST['selCountry'];
        $password= $_POST['txtpassword'];

        if (strlen($name) > 0 && strlen($telephone) > 0 &&
                strlen($email) > 0 && strlen($address) > 0 &&
                strlen($country) > 0 && strlen($password) > 0) {
            
            $em = $this->getDoctrine()->getEntityManager();
            //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
            //para ordenarlos
            $allAdmins = $em->getRepository('uaUCRuaProject2Bundle:Administrator')->findAll();

            //para controlar si existe o no
            $existsAdmin = false;
            foreach ($allAdmins as $admin1) {
                //verifica si el actor ya existe para no insertarlo de nuevo
             if ($admin1->getEmail() == $email) {
                    $existsAdmin = true;
                    break;
                }//end if
            }//end foreach
            //Entra si no existe para insertarlo
            if ($existsAdmin == false) {
                //crear el objeto
                $admin = new Administrator();
                $admin->setName($name);
                $admin->setAddress($address);
                $admin->setCountry($country);
                $admin->setEmail($email);
                $admin->setPassword($password);
                $admin->setTelephone($telephone);

                //insertar el objeto
                $em->persist($admin); //pone el objeto en una cola para insertarlo
                $em->flush();
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
            } else {
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
            }
        }else {
                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
            }
        
    }
}

?>
