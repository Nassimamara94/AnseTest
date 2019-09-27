<?php require_once 'inc/header.inc.php' ?>
<?php
// $contenu = "";
// requete de selection on recupere les articles de la  BDD
// $resultat = $bdd->query("SELECT * FROM articles");
// while ($article = $resultat->fetch(PDO::FETCH_ASSOC)) {
    // On affiche la card via la variable $contenu 
//     $contenu .= '<div class="card mb-3" style="max-width: 540px;">';
//     $contenu .= '<div class="row no-gutters">';
//     $contenu .= '<div class="col-md-4">';
//     $contenu .= '<img src="..." class="card-img" alt="...">';
//     $contenu .= '</div>';
//     $contenu .= '<div class="col-md-8">';
//     $contenu .= '<div class="card-body">';
//     $contenu .= '<h5 class="card-title">Card title</h5>';
//     $contenu .= '<div class="col-md-8">';
//     $contenu .= '<p class="card-text">' .$article ['content'] . '</p>';
//     $contenu .= '<p class="card-text"><small class="text-muted">' .$article ['content'] . '</small></p>';
//     $contenu .= '</div>';
//     $contenu .= '</div>';
//     $contenu .= '</div>';
//     $contenu .= '</div>';
// }

// $contenu .= '<div class="row";</div>';
// $contenu .= '<div class="card mb-5 ml-5" style="max-width: 600px;">';
// $contenu .= '<div class="row no-gutters">';
// $contenu .= '<div class="col-md-4">';
// $contenu .= '<img src="../prehypno2/img/Photo_id.jpg" class="card-img" alt="...">';
// $contenu .= '</div>';
// $contenu .= '<div class="col-md-8" style="max-width: 600px;">';
// $contenu .= '<div class="card-body mb-5 ml-5">';
// $contenu .= '<h5 class="card-title">'.$article['title'].'</h5>';
// $contenu .= '<p class="card-text">' .$article['content'] . '</p>';
// $contenu .= '<a href="#" class="btn btn-primary offset-4">En Savoir plus</a>';
// $contenu .= '</div>';
// $contenu .= '</div>';
// $contenu .= '</div>';
// $contenu .= '</div>';
// }

?>
<!-- on met les 4 derniers articles puis on affichera la suite des articles sur les pages correspondantes -->
<section class="container">
    <h1 class="text-center border border-success">Articles</h1>

            <div class="row ">

            <div class="col-md-6 ">
             <div class="card mb-3 card" style="max-width: 540px;">
                 <div class="row no-gutters">
                     <div class="col-md-4">
                     <img src="../prehypno2/img/logoAlpha.png" class="card-img" alt="logo du site">
                     </div>
            <div class="col-md-8">
            <div class="card-body ">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <a href="#" class="btn btn-primary offset-6">En Savoir Plus</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
            <div class="col-md-4">
            <img src="../prehypno2/img/logoAlpha.png" class="card-img" alt="logo du site">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             <a href="#" class="btn btn-primary offset-6">En Savoir Plus</a>
            </div>
            </div>
            </div>
            </div>
            </div>

 </div>  <!-- !fin row -->


   <div class="row">

            <div class="col-md-6">
             <div class="card mb-3" style="max-width: 540px;">
                 <div class="row no-gutters">
                     <div class="col-md-4">
                     <img src="../prehypno2/img/logoAlpha.png" class="card-img" alt="logo du site">
                     </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             <a href="#" class="btn btn-primary offset-6">En Savoir Plus</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            
            <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
            <div class="col-md-4">
            <img src="../prehypno2/img/logoAlpha.png" class="card-img" alt="logo du site">
            </div>
            <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             <a href="#" class="btn btn-primary offset-6">En Savoir Plus</a>
            </div>
            </div>
            </div>
            </div>
            </div>

    </div><!--  Fin row -->
</section>


<?php require_once 'inc/footer.inc.php' ?>

