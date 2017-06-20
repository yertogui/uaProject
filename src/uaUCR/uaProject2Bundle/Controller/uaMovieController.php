<?php

namespace uaUCR\uaProject2Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use uaUCR\uaProject2Bundle\Entity\Movie;
use uaUCR\uaProject2Bundle\Entity\Actor;
use uaUCR\uaProject2Bundle\Entity\Comment;

//Clase que contiene las acciones sobre la Entidad Pelicula
class uaMovieController extends Controller {
    //metodo para mostrar todas las peliculas de la BD
    public function showMoviesAction($page, $moviesNum) {

        //traer todas las peliculas (incluyendo los rangos)
        $em = $this->getDoctrine()->getEntityManager();
        $allMoviesBD = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findBy([], ['title' => 'ASC']); //traer las movies
        
        //paginacion 
        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $allMoviesBD,
            $this->get('request')->query->get('page', $page),$moviesNum
        );
        
        //traer los generos para el menui
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies.html.twig', array('allMovies' => $pagination, 'currentView' => 'All Movies',
                    'allMoviesBD' => $allMoviesBD,
                    'totalMovies' => count($allMoviesBD),
                    'totalPages' => ceil(count($allMoviesBD) / $moviesNum),
                    'moviesNumber' => $moviesNum,
                    'allGenders' =>$allGenders));
    }//end moviesAction

    //Metodo que muestra el detalle de una pelicula
    public function movieDetailsAction($codMovie) {

        //traer la pelicula 
        $em = $this->getDoctrine()->getEntityManager();
        $movie = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie); //traer la pelicula
        //buscar los comentarios de la pelicula
        $comments = $em->getRepository('uaUCRuaProject2Bundle:Comment')->findByidmovie($codMovie); //traer las movies

        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig', array('movie' => $movie,
                    'comments' => $comments));
    }//end movieDetailsAction

    //metodo para mostrar las peliculas por GENERO
    public function genderMoviesAction($codGender, $page, $moviesNum) {
        //traer todas las peliculas de un genero
        $em = $this->getDoctrine()->getEntityManager();
        $moviesResult = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findByCodgender($codGender); //traer las movies
        //obtener el objeto Gender
        $gender = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($codGender); //traer las movies

        //paginacion 
        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $moviesResult,
            $this->get('request')->query->get('page', $page),$moviesNum
        );

        //traer los generos para el menu
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies_by_gender.html.twig', array('allMovies' => $pagination, 'gender' => $gender,
                    'totalMovies' => count($moviesResult),
                    'totalPages' => ceil(count($moviesResult) / $moviesNum),
                    'moviesNumber' => $moviesNum,
                    'allGenders' => $allGenders));
    }//end genderMovies

    //metodo que muestra las peliculas por actor
    public function actorMoviesAction($idActor, $page, $moviesNum) {

        //traer el actor
        $em = $this->getDoctrine()->getEntityManager();
        $actor = $em->getRepository('uaUCRuaProject2Bundle:Actor')->find($idActor);

        //traer las peliculas de ese actor
        $movies = $actor->getCodmovie();

        $em->getRepository('uaUCRuaProject2Bundle:Movie')->findByCodmovie($actor->getId()); //traer las movies

        //paginacion 
        $paginator = $this->get('knp_paginator');
        
        $pagination = $paginator->paginate(
            $movies,
            $this->get('request')->query->get('page', $page),$moviesNum
        );
        
        //traer los generos
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies_by_actor.html.twig', array('allMovies' => $pagination,
                    'actor' => $actor,
                    'totalMovies' => count($movies),
                    'totalPages' => ceil(count($movies) / $moviesNum),
                    'moviesNumber' => $moviesNum,
            'allGenders' => $allGenders));
    }//end actorMoviesAction

    //metodo para traer las peliculas por rango de años
    public function moviesByYearsAction($page,$moviesNum){
       
        $yearIni= $_POST['txtYearIni'];
        $yearEnd= $_POST['txtYearEnd'];
        $movies=[];
        
        $em = $this->getDoctrine()->getEntityManager();
        //traer todas las peliculas
        $allMoviesBD = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findAll(); //traer las movies
       
        //recuperar solo las peliculas entre los años 
        foreach ($allMoviesBD as $movie) {
            if($movie->getYear() >= $yearIni && $movie->getYear() <= $yearEnd){
                array_push($movies, $movie);
            }
        }//end for
        //
        //paginacion 
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $movies,
            $this->get('request')->query->get('page', $page),$moviesNum
        );
        
        //buscar los generos para el menu
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies_by_years.html.twig', array('allMovies' => $pagination, 
                    'yearIni' => $yearIni,
                    'yearEnd' => $yearEnd,
                    'totalMovies' => count($movies),
                    'totalPages' => ceil(count($movies) / $moviesNum),
                    'moviesNumber' => $moviesNum,
                    'allGenders' =>$allGenders));
    }//end moviesByYearsAction

    //metodo que traee las peliculas por rango de precio
    public function moviesByPriceAction($page,$moviesNum){
        $priceIni= $_POST['txtPriceIni'];
        $priceEnd= $_POST['txtPriceEnd'];
        $movies=[];
        
        $em = $this->getDoctrine()->getEntityManager();
        //traer todas las peliculas
        $allMoviesBD = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findAll(); //traer las movies
       
        //recuperar solo las peliculas entre los precios
        foreach ($allMoviesBD as $movie) {
            if($movie->getPrice() >= $priceIni && $movie->getPrice() <= $priceEnd){
                array_push($movies, $movie);
            }
        }//end for
        
        //paginacion 
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $movies,
            $this->get('request')->query->get('page', $page),$moviesNum
        );
        
        //buscar los generos para el menu
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies_by_price.html.twig', array('allMovies' => $pagination, 
                    'priceIni' => $priceIni,
                    'priceEnd' => $priceEnd,
                    'totalMovies' => count($movies),
                    'totalPages' => ceil(count($movies) / $moviesNum),
                    'moviesNumber' => $moviesNum,
                    'allGenders' =>$allGenders));
    }//end moviesByPriceAction
    
    public function movieQualificationAction(Request $request, $codMovie){
        
        $session = $request->getSession();
        $score = $_POST['radio'];
        //validar que la session estè iniciada
        if ($session->get('email')) {
            return new Response($codMovie . " " . $score);
            
        }else{//no hay session abierta
            
        }//end if/else
    }//end movieQualificationAction

    public function insertCommentAction($codMovie, Request $request) {

        $session = $request->getSession();
        $author = $_POST['txtEmail'];
        $comment = $_POST['txtComment'];

        //traer la pelicula
        $em = $this->getDoctrine()->getEntityManager();
        $movie = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie); //traer la peli
        //buscar los comentarios de la pelicula
        $comments = $em->getRepository('uaUCRuaProject2Bundle:Comment')->findByidmovie($codMovie); //traer las movies

        //validar que la session estè iniciada
        if ($session->get('email')) {
            
            if (strlen($author) > 0 && strlen($comment) > 0) {

                    //insertar el nuevo comentario
                    $newComment = new Comment();
                    $newComment->setIdcomment(count($comments)+1);
                    $newComment->setAuthor($author);
                    $newComment->setIdmovie($movie);
                    $newComment->setComment($comment);

                    //insertar el objeto
                    $em->persist($newComment); //pone el objeto en una cola para insertarlo
                    $em->flush();

                    //traer de nuevo todos los comentarios
                    $allComments = $em->getRepository('uaUCRuaProject2Bundle:Comment')->findByidmovie($codMovie); //traer las movies

                    return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig', array('movie' => $movie,
                                'comments' => $allComments));
          
            } else {

                return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig', array('movie' => $movie,
                            'comments' => $comments,
                        'error' => 'empty fields'));
            }//end if/else
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movie_details.html.twig', array('movie' => $movie,
                        'comments' => $comments,
                        'error' => 'session'));
        }//end if/else session
    }//end insertCommentAction


    //metodo que realiza el cambio de peliculas en la paginacion 
    public function paginationAction($arrayMovies, $page, $moviesNum){
        
        $em = $this->getDoctrine()->getEntityManager();
        //paginacion 
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $arrayMovies,
            $this->get('request')->query->get('page', $page),$moviesNum
        );
        
        //buscar los generos para el menu
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);
        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movies_.html.twig', array('allMovies' => $pagination, 
                    'totalMovies' => count($arrayMovies),
                    'totalPages' => ceil(count($arrayMovies) / $moviesNum),
                    'moviesNumber' => $moviesNum,
                    'allGenders' =>$allGenders));
    }//end 

   /**************************CRUD Movie*********************************/
    public function insert_movie_formAction() {

        //traer todos los generos
        $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll();
        //para ordenarlos
        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);

        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_insert_movie.html.twig', array('allGenders' => $allGenders));
    }
    public function insert_movieAction() {
      
        //obtener la informacion
        $title = $_POST['txtTitle'];
        $quantity = $_POST['txtQuantity'];
        $gender = $_POST['selGender'];
        $subtitled = $_POST['selSubtitled'];
        $premiere = $_POST['selPremiere'];
        $price = $_POST['txtPrice'];
        $year = $_POST['txtYear'];
        $description = $_POST['txtDescription'];
        $runningTime = $_POST['txtRunningTime'];
        $numberActors = $_POST['hdnNumberActor'];
        //$image = $_POST['image'];
        $newImage = addslashes(file_get_contents($_FILES['image']['tmp_name']));
      

        //validar que los campos se llenen
        if (strlen($title) > 0 && strlen($quantity) > 0 && strlen($gender) > 0 && strlen($subtitled) > 0 && strlen($premiere) > 0 &&
                strlen($price) > 0 && strlen($year) > 0 &&
                strlen($description) > 0 && strlen($runningTime) > 0) {
            //codigo para insertar
            //traer el genero
            $em = $this->getDoctrine()->getEntityManager();
            $genderResult = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($gender);

            //crear el objeto
            $movie = new Movie();
            $movie->setTitle($title);
            $movie->setCodgender($genderResult);
            $movie->setQuantity((int) $quantity);
            $movie->setSubtitled((boolean) $subtitled);
            $movie->setPremiere((boolean) $premiere);
            $movie->setYear($year);
            $movie->setDescription($description);
            $movie->setRunningtime($runningTime);
            $movie->setPrice($price);

            //insertar el objeto
            $em->persist($movie); //pone el objeto en una cola para insertarlo
            $em->flush();

            //insertar actores
            for ($i = 1; $i <= $numberActors; $i++) {
                $actorName = $_POST['txtActor' . $i];
                $lastName = $_POST['txtLastName' . $i];

                //traer todos los Actores
                $em = $this->getDoctrine()->getEntityManager();
                //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
                //para ordenarlos
                $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->findAll();

                $existsActor = false;

                //buscar si los actores existen o no
                foreach ($allActors as $actor1) {

                    //verifica si el actor ya existe para no insertarlo de nuevo
                    if ($actor1->getName() == $actorName && $actor1->getLastname() == $lastName) {

                        //insertar en la tabla movie_actor
                        $movie->addIdactor($actor1);
                        $actor1->addCodmovie($movie);
                        $em->persist($movie);
                        $em->flush();
                        $existsActor = true; //si existe al actor
                    }//end if
                }//end foreach
                //
                //verifica que ese actor no exista
                if ($existsActor == false) {
                    
                    $actor = new Actor();
                    $actor->setName($actorName);
                    $actor->setLastname($lastName);


                    //insertar en la tabla movie_actor
                    $movie->addIdactor($actor);
                    $actor->addCodmovie($movie);

                    $em->persist($actor); //pone el objeto en una cola para insertarlo
                    $em->persist($movie); //pone el objeto en una cola para insertarlo
                    $em->flush();
                }//end id existsActor
            }//end for
            
             $nameImage = 'movie'.$movie->getCodmovie();
            
             $dir = $this->container->getParameter('kernel.root_dir') . '/../web/bundles/uaucr_uaproyect2_app/images/movies/';
             $extention = ".jpg";
                
             move_uploaded_file($_FILES["image"]["tmp_name"], $dir.$nameImage.$extention);
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
        }//end if/else
        
    }
    public function update_movie_formAction(){
        //traer todos las peliculas
                $em = $this->getDoctrine()->getEntityManager();
                //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
                //para ordenarlos
                $allMovies = $em->getRepository('uaUCRuaProject2Bundle:Movie')->findBy([], ['title' => 'ASC']);

        
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_update_movie.html.twig',
                 array('allMovies' =>$allMovies));
    }
    public function update_movie_pageAction($codMovie){
         //traer todos las peliculas
         $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
        //para ordenarlos
        $allMovies = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie);

        $allGenders = $em->getRepository('uaUCRuaProject2Bundle:Gender')->findBy([], ['name' => 'ASC']);

        $actors = $allMovies->getIdactor();

        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_update_movie_page.html.twig',
                array('allMovies' =>$allMovies,'allGenders' =>$allGenders,'allActors'=>$actors));
                
    }//update_movie_pageAction
    public function update_movieAction($codMovie){
        //obtener la informacion
        $title = $_POST['txtTitle'];
        $quantity = $_POST['txtQuantity'];
        $gender = $_POST['selGender'];
        $subtitled = $_POST['selSubtitled'];
        $premiere = $_POST['selPremiere'];
        $price = $_POST['txtPrice'];
        $year = $_POST['txtYear'];
        $description = $_POST['txtDescription'];
        $runningTime = $_POST['txtRunningTime'];
        $numberActors = $_POST['hdnNumberActor'];
        
        //validar que los campos se llenen
        if (strlen($title) > 0 && strlen($quantity) > 0 && strlen($gender) > 0 &&
                strlen($subtitled) > 0 && strlen($premiere) > 0 &&
                strlen($price) > 0 && strlen($year) > 0 &&
                strlen($description) > 0 && strlen($runningTime) > 0) {
            
            $em = $this->getDoctrine()->getEntityManager();
            
            //traer la pelicula 
            $movieResult = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie);
            //traer el genero
            $genderResult = $em->getRepository('uaUCRuaProject2Bundle:Gender')->find($gender);

            //actualizar el objeto
            $movieResult->setTitle($title);
            $movieResult->setCodgender($genderResult);
            $movieResult->setQuantity((int) $quantity);
            $movieResult->setSubtitled((boolean) $subtitled);
            $movieResult->setPremiere((boolean) $premiere);
            $movieResult->setYear($year);
            $movieResult->setDescription($description);
            $movieResult->setRunningtime($runningTime);
            $movieResult->setPrice($price);
            
            $em->flush();
            //insertar actores nuevos
            for ($i = 1; $i <= $numberActors; $i++) {
                $actorName = $_POST['txtActor' . $i];
                $lastName = $_POST['txtLastName' . $i];

                //traer todos los Actores
                $em = $this->getDoctrine()->getEntityManager();
              
                $allActors = $em->getRepository('uaUCRuaProject2Bundle:Actor')->findAll();

                $existsActor = false;

                //buscar si los actores existen o no
                foreach ($allActors as $actor1) {

                    //verifica si el actor ya existe para no insertarlo de nuevo
                    if ($actor1->getName() == $actorName && $actor1->getLastname() == $lastName) {

                        //insertar en la tabla movie_actor
                        $movieResult->addIdactor($actor1);
                        $actor1->addCodmovie($movieResult);
                        //$em->persist($movieResult); //pone el objeto en una cola para insertarlo
                        $em->flush();
                        $existsActor = true; //si existe al actor
                    }//end if
                }//end foreach
                //
                //verifica que ese actor no exista para insertarlo
                if ($existsActor == false) {
                    $actor = new Actor();
                    $actor->setName($actorName);
                    $actor->setLastname($lastName);


                    //insertar en la tabla movie_actor
                    $movieResult->addIdactor($actor);
                    $actor->addCodmovie($movieResult);

                    $em->flush();
                }//end id existsActor
            }//end for 
        
            //para los actores que ya tiene la pelicula quitarlos o no
            $actorsUpdate = $movieResult->getIdactor();
            
            if($actorsUpdate != null){
                foreach ($actorsUpdate as $actor2) {
                    //return new Response($_POST['rbUpdate'.$actor2->getId()]);
                    $deleteActor = $_POST['rbUpdate'.$actor2->getId()];

                    if($deleteActor==0){  
                       // return new Response($actor2->__toString());
                        //Borrar en la tabla movie_actor
                        $actor2->removeCodmovie($movieResult);
                        $movieResult->removeIdactor($actor2);
                        //return new Response($movie->removeIdactor($actorsUpdate));
                        $em->persist($actor2); //pone el objeto en una cola para borrar
                        $em->persist($movieResult); //pone el objeto en una cola para borrar
                        $em->flush();
                    }//end if
                }//end foreach
            }//end if
            
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
        } else {
            return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_error.html.twig');
        }//end if/else
        
   }//update_movieAction
    public function delete_movie_pageAction($codMovie){
     //traer todos las peliculas
         $em = $this->getDoctrine()->getEntityManager();
        //$allGenders = $em->getRepository('UCRFirstBundle:Gender')->findAll(); findBy([], ['name' => 'ASC'])
        //para ordenarlos
        $allMovies = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie);

        
        $actors = $allMovies->getIdactor();

        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_delete_movie_page.html.twig',
                array('allMovies' =>$allMovies,'allActors'=>$actors));
            
    }
    public function delete_movieAction($codMovie){
        $em = $this->getDoctrine()->getEntityManager();

        //traer la pelicula y sus relaciones
        $movieResult = $em->getRepository('uaUCRuaProject2Bundle:Movie')->find($codMovie);
        $actorsResult = $movieResult->getIdactor();
        $qualificationResult = $em->getRepository('uaUCRuaProject2Bundle:Qualification')->findBycodmovie($codMovie);
        $comments = $em->getRepository('uaUCRuaProject2Bundle:Comment')->findByidmovie($codMovie); //traer los comentarios
        $custumerResult=$movieResult->getIdcustomer();
        
        //eliminar el objeto de movie_actor          
        foreach ($actorsResult as $actor) {
            $actor->removeCodmovie($movieResult->getCodmovie());
            $movieResult->removeIdactor($actor->getId());
        }//end foreach
       
        //eliminar el objeto de Purchase          
        foreach ($custumerResult as $custumer) {
            $custumer->removeCodmovie($movieResult->getCodmovie());
            $movieResult->removeIdcustomer($custumer->getIdcustomer());
        }//end foreach
       
        //eliminar el objeto de Qualification          
        foreach ($qualificationResult as $quali) {
                $quali->removeCodmovie($movieResult->getCodmovie());
        }//end foreach
       
        //eliminar el comentario         
        foreach ($comments as $comment) {
           $movieResult->removeIdcomment($comment->getIdcomment());
        }//end foreach
       
         //eliminar el objeto
        $em->remove($movieResult);
        //actualizar el objeto
        $em->flush();
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');

    }//ende delete movie action
    public function sale_movies_years_formAction(){
         return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_movie_years.html.twig');
    }
    
    public function sale_movies_yearsAction() {

        $year1 = $_POST['txtYear1'];
        $year2 = $_POST['txtYear2'];
        
        if($year1>$year2){
            $aux=$year1;
            $year1=$year2;
            $year2=$aux;
        }//end if
        $em = $this->getDoctrine()->getEntityManager();

        //traer la pelicula y sus relaciones
        $customerResult = $em->getRepository('uaUCRuaProject2Bundle:Customer')->findAll();
        ///$customerResult = $em->getRepository('uaUCRuaProject2Bundle:Movies')->findAll();


        $movieResult = array();
        
        foreach ($customerResult as $customer) {
            $customerMovies = $customer->getCodmovie();
            foreach($customerMovies as $movie){
                 if ($movie->getYear() >= $year1 && $movie->getYear() <= $year2) {
                     array_push($movieResult, $movie);
                 }//if
            }//end
           
        }//end foreach

        $fpdf = new \fpdf\FPDF_EXTENDED();
        $fpdf->AddPage();
        $fpdf->Header($fpdf->SetXY(15, 1), $fpdf->Image('../web/bundles/uaucr_uaproyect2_app/images/logo.png'));
        $fpdf->Ln();
        $fpdf->SetFont('Arial', 'B', 14);

        $fpdf->Cell(0, 14, 'Sale Movies from ' . $year1 . ' to ' . $year2 . '!', 0, 0, 'C', false);

        //titulos de las columnas
        //ENCABEZADO
        $header = array('Movie', 'Year');
        $fpdf->SetFont('Arial', 'B', 12);
        $fpdf->SetXY(4, 60);
        $fpdf->SetFillColor('8C568A');
        $fpdf->SetTextColor(255);
        $fpdf->SetDrawColor(0, 0, 0);
        $fpdf->SetLineWidth(0.3);
        $w = array(100, 50);

        for ($i = 0; $i < count($header); $i++) 
            $fpdf->Cell($w[$i], 7, $header[$i], 1, 0, 'c', true);
        $fpdf->Ln();

        $fpdf->SetFont('Arial', '', 10);
        $fpdf->SetFillColor(255, 255, 255);
        $fpdf->SetTextColor(0);
        
        //Datos de las columnas
        foreach ($movieResult as $movie) {
                $fpdf->Cell(50,7,$movie->getTitle(),0,0,'LR',true);
                $fpdf->SetY($fpdf->GetY()+7);
                //$fpdf->SetX(100);
               
            }//end foreach
             $fpdf->SetXy(104,67);
             
             //Datos de las columnas
        foreach ($movieResult as $movie) {
                $fpdf->Cell(50,7,$movie->getYear(),0,0,'LR',true);
                $fpdf->SetY($fpdf->GetY()+7);
                $fpdf->SetX(105);
           
        }//end foreach
        $fpdf->Output('Sales Report');
        $fpdf->Open();
        return $this->render('uaUCRuaProject2Bundle:uaMovie:ua_success.html.twig');
    }//
   

}//end class


?>
