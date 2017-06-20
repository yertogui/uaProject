<?php

namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;


use uaUCR\uaProject2Bundle\Entity\Administrator;
use uaUCR\uaProject2Bundle\Entity\Customer;
use uaUCR\uaProject2Bundle\Entity\Cart;

class uaAccountController extends Controller{
    
    public function showLoginFormAction(){
         return $this->render('uaUCRuaProject2Bundle:Default:ua_login.html.twig');
    }
    
    public function loginAction(){
         //recuperar las variables
         $email = $_POST['txtEmail'];
         $password = $_POST['txtPassword'];
         
         //verificar que esten llenas
         if(strlen($email) > 0 && strlen($password) > 0){
             
             //buscar la cuenta en Administrator
             $em = $this->getDoctrine()->getEntityManager();
             $account = $em->getRepository('uaUCRuaProject2Bundle:Administrator')->findOneBy(array('email' => $email));
             
             if($account){//significa que el login es de Administrator
                 if($account->getPassword() == $password){//verificar que los datos sean correctos
                    //codigo de session 
                    $session = new Session();
                    $session->start();

                     // establece y obtiene atributos de sesión
                     $session->set('email', $email);
                     $session->set('type', 'admin');
                     
                     if($session->get('email')==$email){
                         return $this->render('uaUCRuaProject2Bundle:uaAdmin:ua_index_admin.html.twig');
                     }else{
                         return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                                 array('error' =>'Something is wrong'));
                     }//end if/else
                     
                 }else{//los datos son incorrectos
                     return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                             array('error' =>'Email or Password Incorrect'));
                 }//end if/else
             }else{//no es administrator, puede ser un Customer
                 //buscar el Customer
                 $account = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneBy(array('email' => $email));
                 
                 if($account){//si se encuentra en la tabla Customer
                     if($account->getPassword() == $password){//verificar los datos
                         
                        //codigo de session 
                        $session = new Session();
                        $session->start();

                        // establece y obtiene atributos de sesión
                        $session->set('email', $email);
                        $session->set('type', 'customer');

                        if($session->get('email')==$email){
                            
                            //traer todos los generos
                            $em = $this->getDoctrine()->getEntityManager();
                            //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll();
                            //para ordenarlos
                            $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);

                            return $this->render('uaUCRuaProject2Bundle:Default:index.html.twig',
                            array('allGenders' =>$allGenders));
                         }else{
                             return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                                     array('error' =>'Something is wrong'));
                         }//end if/else
                        
                     }else{ //los datos son incorrectos
                        return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                                array('error' =>'Password or Email incorrect'));
                    }//end if/else
                 }else{//no se encontro en Customer
                      return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                              array('error' =>'We do not have any Customer or Admin with this email. Please Registrer Account'));
                 }//end if/else
            }//end if/else
         }else{//campos vacios
             return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                     array('error' =>'Type email and password'));
         }//end if/else
         
        
    }//end loginAction
    
    public function createAccountAction(){
        try{
            //obtener la informacion
            $accountType = $_POST['selAccountType'];
            $name = $_POST['txtName'];
            $email = $_POST['txtEmail'];
            $password = $_POST['txtPassword'];
            $country = $_POST['selCountry'];
            $address = $_POST['txtAddress'];
            $phone = $_POST['txtPhone'];
            
            
            
            if($accountType == "admin"){
                          
                //crear el objeto
                $admin = new Administrator();
                $admin->setName($name);
                $admin->setEmail($email);
                $admin->setPassword($password);
                $admin->setAddress($address);
                $admin->setCountry($country);
                $admin->setTelephone((int)$phone);
                
                $em = $this->getDoctrine()->getEntityManager();
                
                //insertar el objeto
                $em->persist($admin); //pone el objeto en una cola para insertarlo
                $em->flush();
                
                return $this->render('uaUCRuaProject2Bundle:Default:ua_login.html.twig');
            }else if($accountType == "customer"){
                
                $card = $_POST['txtCard'];
                
                $customer = new Customer();
                $customer->setName($name);
                $customer->setEmail($email);
                $customer->setPassword($password);
                $customer->setAddress($address);
                $customer->setCountry($country);
                $customer->setTelephone((int)$phone);
                $customer->setCard((int)$card);
                
                 $em = $this->getDoctrine()->getEntityManager();
                
                //insertar el objeto
                $em->persist($customer); //pone el objeto en una cola para insertarlo
                $em->flush();
                
                 return $this->render('uaUCRuaProject2Bundle:Default:ua_login.html.twig');
            }//end if/else
            
           
        }catch(Exception $e){
            
        }//end try/catch
        
    }//end createAccountAction
    
    public function shoppingCartAction(Request $request){
        
        $session = $request->getSession();
        
        if($session->get('email')){
            
            $em = $this->getDoctrine()->getEntityManager();
            //traer el codigo del Cliente
            $customer = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneByemail($session->get('email')); //traer la pelicula
            
            //buscar las peliculas del carrito
            $cartItems = $em->getRepository('uaUCRuaProject2Bundle:Cart')->findByIdcustomer($customer); //traer la pelicula
            
            $movies = array();
            foreach ($cartItems as $item){
                $movie = $item->getCodmovie();
                array_push($movies, $movie);
                
            }//end for

            return $this->render('uaUCRuaProject2Bundle:uaCustomer:ua_show_shopping_cart.html.twig',
                    array('cartItems' => $movies));
        }else{
            return $this->render('uaUCRuaProject2Bundle:uaCustomer:ua_cart_error.html.twig');
        }//end if/else
        
        
    }//end shoppingCartAction
    
    public function addToCartAction($codMovie, Request $request){
        
        $session = $request->getSession();
        
        if($session->get('email')){
            
            //traer el Cliente
            $em = $this->getDoctrine()->getEntityManager();
            $customer = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneByEmail($session->get('email')); //traer el cliente
            
            //traer la pelicula
            $movie = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie); //traer la pelicula
            
            //traer la cantidad de objetos en el carrito
            $cartItems = $em->getRepository('uaUCRuaProject2Bundle:Cart')->findAll(); 
            //crear el objeto en la tabla Cart
            $cartItem = new Cart();
            $cartItem->setCodmovie($movie);
            $cartItem->setIdcustomer($customer);
            $cartItem->setIdcart(count($cartItems)+1);
           
            //insertar en la tabla
            $em->persist($cartItem); //pone el objeto en una cola para insertarlo
            $em->flush();
            
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success_view.html.twig',
                    array('result' =>'Movie inserted into the Cart'));
        }else{
            return $this->forward('uaUCRuaProject2Bundle:uaDefault:index'); 
        }
        
    }//end addToCartAction

    public function removeItemAction($codMovie, Request $request){
        
         $session = $request->getSession();
         
         if($session->get('email')){
            
            
            $em = $this->getDoctrine()->getEntityManager();
          
            //traer el item que se va a borrar
            $cartItem = $em->getRepository('uaUCRuaProject2Bundle:Cart')->findOneByCodmovie($codMovie); 
            
            $em->remove($cartItem);
            $em->flush();
            
            return $this->forward('uaUCRuaProject2Bundle:uaAccount:shoppingCart');
        }else{
            return $this->forward('uaUCRuaProject2Bundle:uaDefault:index'); 
        }
    }//end removeItemAction

    public function purchaseFormAction(Request $request){
        
        $session = $request->getSession();
        
        if($session->get('email')){
            
            $total = 0;;
            $em = $this->getDoctrine()->getEntityManager();
            //traer el codigo del Cliente
            $customer = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneByemail($session->get('email')); //traer la pelicula
            
            //buscar las peliculas del carrito
            $cartItems = $em->getRepository('uaUCRuaProject2Bundle:Cart')->findByIdcustomer($customer); //traer la pelicula
            
            $movies = array();
            foreach ($cartItems as $item){
                $movie = $item->getCodmovie();
                array_push($movies, $movie);
                $total+= $movie->getPrice();
            }//end for

            return $this->render('uaUCRuaProject2Bundle:uaCustomer:ua_purchase_form.html.twig',
                    array('total' => $total,
                        'creditCard' => $customer->getCard()));
        }else{
            return $this->forward('uaUCRuaProject2Bundle:uaDefault:index'); 
        }//end if/else
    }//end purchaseAction

    public function purchaseAction(Request $request){
        
        $session = $request->getSession();
        
        
        if($session->get('email')){
            
            $total = 0;;
            $em = $this->getDoctrine()->getEntityManager();
            //traer el codigo del Cliente
            $customer = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneByemail($session->get('email')); //traer la pelicula
            
            //buscar las peliculas del carrito
            $cartItems = $em->getRepository('uaUCRuaProject2Bundle:Cart')->findByIdcustomer($customer); //traer la pelicula
            
            $movies = array();
            foreach ($cartItems as $item){
                $movie = $item->getCodmovie();
                array_push($movies, $movie);
                $total+= $movie->getPrice();
                
                //actualizar la cantidad de peliculas de la BD
                $movie->setQuantity($movie->getQuantity()-1);
                        
                $em->flush();
                
                //insertar en la tabla compra
                $movie->addIdcustomer($customer);
                $customer->addCodmovie($movie);
                
                //borrarlos de la BD
                $em->remove($item);
                $em->flush();
                
                
            }//end for
            
            //generar la factura
            $fpdf = new \fpdf\FPDF_EXTENDED();
            $fpdf->AddPage();
            $fpdf->Header($fpdf->SetXY(15, 1), $fpdf->Image('../web/bundles/uaucr_uaproyect2_app/images/logo.png'));
            $fpdf->Ln();
            //titulo de la factura 
            $fpdf->SetFont('Arial', 'B', 18);
            $fpdf->SetTextColor(150,150,150);
            $fpdf->Cell(0, 14, 'Purchase Invoice Movies', 0, 0, 'C', false);

            //nombre del cliente
            $fpdf->SetFont('Arial', 'B', 14);
            $fpdf->SetTextColor(0);
            $fpdf->SetXY(4, 50);
            $fpdf->Cell(0, 14, 'Customer: ' . $customer->getName(), 0, 0, 'L', false);
            $fpdf->SetXY(4, 55);
            $fpdf->Cell(0, 14, 'Email: ' . $customer->getEmail(), 0, 0, 'L', false);
            
            //titulos de las columnas
            //ENCABEZADO
            $header = array('Movie', 'Price');
            $fpdf->SetFont('Arial', 'B', 12);
            $fpdf->SetXY(4, 70);
            $fpdf->SetFillColor(104,27,117);
            $fpdf->SetTextColor(255);
            $fpdf->SetDrawColor(0, 0, 0);
            $fpdf->SetLineWidth(0.3);
            $w = array(100, 50);

            for ($i = 0; $i < count($header); $i++) 
                $fpdf->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
            $fpdf->Ln();

            $fpdf->SetFont('Arial', '', 10);
            $fpdf->SetFillColor(255, 255, 255);
            $fpdf->SetTextColor(0);
            $fpdf->SetDrawColor(0, 0, 0);
            
            //Datos de las columnas
            foreach ($movies as $movie) {
                $fpdf->Cell(50,7,$movie->getTitle(),0,0,'LR',true);
                $fpdf->SetY($fpdf->GetY()+7);
                //$fpdf->SetX(100);

            }//end foreach
            $fpdf->SetFont('Arial', '', 16);
            $fpdf->Cell(50,9,'Total: ',0,0,'LR',true);
            $fpdf->SetY($fpdf->GetY()+7);
            $fpdf->SetXy(110,77);
             
            $fpdf->SetFont('Arial', '', 12);
             //Datos de las columnas
            foreach ($movies as $movie) {
                $fpdf->Cell(50,7,$movie->getPrice(),0,0,'LR',true);
                $fpdf->SetY($fpdf->GetY()+7);
                $fpdf->SetX(110);
            }//end foreach
            $fpdf->SetFont('Arial', '', 16);
            $fpdf->Cell(50,7, '$ ' . $total,0,0,'LR',true);
            $fpdf->SetY($fpdf->GetY());
            
            
            $fpdf->Output('Sale Report');
            $fpdf->Open();
            
            
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success_view.html.twig',
                    array('result' =>'The purchase has been successfully completed'));
            
        }//end if
        else{
            return $this->forward('uaUCRuaProject2Bundle:uaDefault:index'); 
        }
    }//end purchaseAction

    public function logOutAction(Request $request){
        
        $session = $request->getSession();
        
        $session->clear();
        
        //traer todos los generos
        $em = $this->getDoctrine()->getEntityManager();
        
        //para ordenarlos
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
    
        return $this->render('uaUCRuaProject2Bundle:Default:index.html.twig',
                array('allGenders' =>$allGenders));    
    }//end logOutAction
    
    
    public function customerProfileAction(Request $request){
        
        $session = $request->getSession();
        
        if($session->get('email')){
            
            $em = $this->getDoctrine()->getEntityManager();
            $account = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneBy(array('email' => $session->get('email')));
        
            return $this->render('uaUCRuaProject2Bundle:uaCustomer:ua_customer_profile.html.twig',
                array('account' =>$account));    
        }else{
            return $this->render('uaUCRuaProject2Bundle:Default:ua_error_account.html.twig',
                array('error' =>'Not logged in'));    
        }
    }//end customerProfileAction
    
    public function editProfileAction(Request $request){
        
        $session = $request->getSession();
        $name = $_POST['txtName'];
        $email = $_POST['txtEmail'];
        $password = $_POST['txtPassword'];
        $country = $_POST['selCountry'];
        $address = $_POST['txtAddress'];
        $phone = $_POST['txtPhone'];
        $card = $_POST['txtCard'];
        
        if(strlen($name) > 0 && strlen($email) > 0 && strlen($password) > 0 && strlen($country) > 0
        && strlen($address) > 0 && strlen($phone) > 0 && strlen($card) > 0){
      
            //verificar que la session este abierta
            if($session->get('email')){
            
                $em = $this->getDoctrine()->getEntityManager();
                $account = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneBy(array('email' => $session->get('email')));

                //actualizar las variables
                $account->setName($name);
                $account->setEmail($email);
                $account->setPassword($password);
                $account->setCountry($country);
                $account->setAddress($address);
                $account->setTelephone($phone);
                $account->setCard($card);

                //actualizar el objeto
                $em->flush();

                $session->set('email', $account->getEmail());
                return new Response($session->get('email') . '  si');
            }else{
                return new Response('12'. $session->get('email'));
            }//end if/else
        }else{
            
        }//end if/else verificacion
        
    }//end editProfileAction
    
    public function deleteProfileAction(Request $request){
        
        $session = $request->getSession();
        
        //verificar que la session este abierta
        if($session->get('email')){
            
            $em = $this->getDoctrine()->getEntityManager();
            $account = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findOneBy(array('email' => $session->get('email')));
               
             //eliminar el objeto
            $em->remove($account);
            //actualizar el objeto
            $em->flush();
            
            //quitar la session 
            $session->clear();
            
            //para ordenar los generos
            $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
            return $this->render('uaUCRuaProject2Bundle:Default:index.html.twig',
                array('allGenders' =>$allGenders));   
        }else{
            
        }//end if/else
    }//end deleteProfileAction
    
}//end AccountController

?>
