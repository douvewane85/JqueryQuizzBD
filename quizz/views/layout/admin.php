<!doctype html>
<html lang="en">

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_ROOT?>assets/css/classe.css">


</head>

<body>

<header class="bgSecondary">
        <h1 class="text-center m-0">
            Le plaisir de jouer
        </h1>
    </header>

    <div id="main" class="d-flex justify-content-center align-items-center ">

        <section style="width:92vw ;">
            <div class="section-header bgPrimary position-relative ">
                <h3 class=" w-100 py-2 d-inline-block text-center">CREER ET PARAMETRER VOS QUIZZ</h3>
                <a name="" id=""  class="deconnexion position-absolute btn btn-primary"
                    style="right: 10px; top: 10px;" href="<?=BASE_ROOT?>security/seDeconnecter" role="button">Deconnexion</a>
            </div>


            <div class="section-body bgWhite px-5 " style="height: 75vh;">

                <div class="row d-flex align-items-center h-100">
                    <!-- Menu -->
                    <div class="col-md-4 pl-3">
                        <div class="menu " style="width: 85%;">
                            <div class="menu-header  py-3 d-flex align-items-center justify-content-between px-3">
                                <div class="avatar ">
                                    <img class="img-fluid" src="./img/" alt="">
                                </div>
                                <h5 class="text-white">ADAMA LADY</h5>
                            </div>
                         

                            <nav class="nav flex-column py-3 ">
                                <a class="nav-link active" lien="<?=BASE_ROOT?>Admin/loadPage/liste_joueur" href="#">Lister Joueur</a>
                                <a class="nav-link"  lien="<?=BASE_ROOT?>Admin/loadPage/add_admin" href="#">Creer Admin</a>
                                <a class="nav-link" lien="<?=BASE_ROOT?>/Admin/loadPage/add_question" href="#">Creer Question </a>
                                <a class="nav-link"  lien="<?=BASE_ROOT?>/Admin/loadPage/lister_question" href=" #">Lister Question</a>
                            </nav>

                        </div>
                    </div>

                   
                          <?php echo $content_for_layout;?>
                    
                    


                </div>

            </div>
        </section>
</div>
       <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
       <script src="<?=BASE_ROOT?>assets/js/script.js"></script> 




</body>

</html>