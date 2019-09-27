<?php require_once 'inc/init.inc.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <!-- Lien fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!--google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Lien CDN bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--BS PICKERDATE -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Lien CSS personel -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">
        <header class="row offset-md-1">
            <!-- NavbarPrimaire -->
            <nav class="navbar navbar-expand-lg navbar-light logo col-md-12 mt-4" id="navbarPrimaire">
            <div class="margin-left col-md-2"  id="border">
                <?php
                if (!isset($_GET['page'])) {
                    echo '<img src="img/logoFaviconAlpha.png" alt="photo-profil">';
                } elseif (isset($_GET['page']) && $_GET['page'] == 'qui' || $_GET['page'] == 'seance' || $_GET['page'] == 'temoignages' || $_GET['page'] == 'formTemoignage' || $_GET['page'] == 'articles' || $_GET['page'] == 'prez' || $_GET['page'] == 'rdv') {
                    echo '<a href="#"><i class="fas fa-arrow-alt-circle-left fa-2x m-5"></i></a>';
                }
                ?>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </div>
                <div class="col-md-2" id="border">
                               
                                <i class="fas fa-map-marker-alt"><address>23 rue de la folie Méricourt<br> 75011 Paris</address></i>    
                            <p>07 01 02 03 01</p>
                        </div>
                <div class="col-md-4 menu-margin"  id="border">
                <h2 class="titre1">lorem ipsum</h2>
                <a href="rdv.php?page=rdv" class="col-md-6 m-4 btn">
                            Prendre un RDV
                            </a>
                </div>
                <div class="col-md-4 menu-margin"  id="border">
               
                <button type="button" class="btn btn-info ml-3 mt-1 col-md-6">Vous voulez savoir plus?</button>
                <button type="button" class="btn btn-info ml-3 mt-1 col-md-6">Vous voulez savoir plus?</button>
                <button type="button" class="btn btn-info ml-3 mt-1 col-md-6">Vous voulez savoir plus?</button>
                </div>

                
            

                    <!-- <ul class="navbar-nav mt-4">
                        <li class="nav-item  active">
                               <a href="qui.php?page=qui" class="col-md-2 m-4 btn">
                               Qui
                               </a>
                        </li>
                        <li class="nav-item active">
                           <a href="seance.php?page=seance" class="col-md-2 m-4 btn">
                           Séance
                           </a>
                        </li>

                        <li class="nav-item">
                            <a href="temoignages.php?page=temoignages"
                            class="col-md-2 m-4 btn">
                            Témoignages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="articles.php?page=articles" class="col-md-2 m-4 btn">
                            Articles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="rdv.php?page=rdv" class="col-md-12 m-4 btn">
                            Prendre un RDV
                            </a>
                        </li>
                        </ul> -->
                        </div>
                        </div>
                  
            </nav><!-- fin #navbarPrimaire -->
    </div>
    <div class="row">
        <!-- NavbarSecondaire -->
        <nav class="container-fluid navbar navbar-inverse navbar-expand-lg navbar-fixed-bottom navbar-light logo"
            id="navbarSecondaire">
            <img src="img/logoFaviconAlpha.png" alt="logo">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-align-center" id="navbarNav">
                <ul class="navbar-nav mt-4">
                    <li class="nav-item active ml-2">
                        <a class="nav-link "><span class="border border-light rounded-pill btn hover">L'hypnose pour qui
                                ?</span></a>
                    </li>
                    <li class="nav-item active ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Déroulé d'une
                                séance</span></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Articles</span></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link"><span class="border border-light rounded-pill btn hover">Anne-Cecile
                                ROUGIER</span></a>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link" href="rdv.php?page=rdv"><span
                                class="border border-light rounded-pill btn hover">Prendre un
                                RDV</span></a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link">07 01 02 03 01</span></a>
                    </li>
            </div>
        </nav><!-- fin #navbarSecondaire -->
    </div>
    </header><!-- fin class header -->
    <a href="admin/connexion.php">
        <hr></a>
    <main class="row">