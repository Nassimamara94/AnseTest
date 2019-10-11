<?php 
require_once 'inc/init.inc.php';
require_once 'inc/header.inc.php';

$contenu = "";

// AFFICHAGE DES 3 DERNIERS ARTICLES
$resultat = $pdo->prepare("SELECT * FROM articles ORDER BY dateArt DESC LIMIT 3");
$resultat->execute();
while ($articles = $resultat->fetch(PDO::FETCH_ASSOC)) : 

    $contenu .= '<div class="card text-center col-md-3 mb-5">';
    $contenu .= '<div class="card-header">';
    $contenu .= '<h7>' . $articles['titleArticle'] .'</h7>';
    $contenu .= '</div>';
    $contenu .= '<div class="card-body">';
    $contenu .= '<p class="card-text class="card-text">' . substr($articles['article'], 0, 100) . '...</p>';
    $contenu .= '<a href="#">' . 'Paru le ' . $articles['dateArt'] . '</a>';
    $contenu .= '</div>';
    $contenu .= '<div class="card-footer text-muted">';
    $contenu .= '<button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1">' . 'Lire Plus' . '</button>';
    $contenu .= '</div>';
    $contenu .= '</div>';
    // <button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1">
    //                      En savoir plus
    //                  </button>

endwhile;
?>
  <div class="row mx-auto">
    <!-- PP de la Thérapeute -->
    <div class=" col-sm-7 col-md-6 col-lg-4 mt-5 mx-auto">
        <a href="prez.php?page=prez" title="qui suis-je ?">
            <img src="lib/img/pp.png" class="rounded-circle img-fluid mx-auto " alt="photo de profil">
        </a>
    </div><!-- Fin col-md-2 -->
    <div class="col-md-6 mx-auto mt-5">
        <!-- Titre -->
        <h2 class="mt-2 mb-5">Qu'est-ce que l'hypnose ?</h2>
        <!-- Premier paragraphe -->
        <p>Avez-vous déjà eu un problème de stress ou avez-vous déjà voulu arrêter de fumer, mais vous avez toujours échoué?</p>
        <p>Et si vous me laissiez vous aider?</p>
        <br>
        <br>
        <p class="offset-8 signature"> Anne-Cécile ROUGIER <br> Hypno-thérapeute</p>
        <br>
        <br>
        <a href="hypnose.php">
          <button class="bouton_vert blue voir_plus offset-2 mt-1 badge-2x badge-pill ">Voir plus</button>
        </a> 
    </div>
  </div>
  <hr>      
 <!-- début de la row/boucle qui va afficher les trois derniers articles -->
  <div id="container" class="row">
    <?= $contenu; ?>
  </div>
   <!-- fin de la row -->
    <div class="row bg-transparent mt-4 offset-1"> <!-- debut row article -->
        <div class="col-md-12">
            <div class="card mb-2 card bg-transparent">     
                 <div class="col-md-12">
                     <div class="card-body">
                        <h5 class="card-title text text-center">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1">En savoir plus
                            </button>
                     </div>
                 </div> 
            </div>
        </div>
    </div>  <!-- fin row article -->
    <!-- MODAL STARTS -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Qu'est-ce que le Lorem Ipsum?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                </div>
               <div class="modal-footer">
               </div>
            </div>
        </div>
     </div>
        <!-- MODAL ENDS -->
            <div class="row bg-transparent mt-4 offset-1"> 
            <!-- debut row article -->
                <div class="col-md-12">
                    <div class="card mb-2 card bg-transparent">
                      <div class="col-md-12">
                        <div class="card-body">
                           <h5 class="card-title text text-center">Card title</h5>
                             <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                              <button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1">En savoir plus
                              </button>
                        </div>
                      </div> 
                    </div>
                </div>
             </div><!-- fin row article -->
            <!-- MODAL STARTS -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLongTitle">Qu'est-ce que le Lorem Ipsum?</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                               </button>
                         </div>
                       <div class="modal-body">
                      Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.
                       </div>
                       <div class="modal-footer">
                       </div>
                    </div>
                 </div>
               </div>
            <!-- MODAL ENDS -->
            <div class="row bg-transparent mt-4 offset-1"> 
            <!-- debut row article -->
               <div class="col-md-12">
                   <div class="card mb-2 card bg-transparent">
                       <div class="col-md-12">
                            <div class="card-body">
                               <h5 class="card-title text text-center">Card title</h5>
                                   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1"> En savoir plus
                                      </button>
                            </div>
                      </div> 
                   </div>
               </div>
             </div><!-- fin row article -->
            <!-- MODAL STARTS -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle">Qu'est-ce que le Lorem Ipsum?</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                              <h5><?= $articles['titleArticle'] ?></h5>
                              <p>
                                 <?= $articles['article'] ?>
                              </p>
                           </div>
                          <div class="modal-footer">
                          </div>
                     </div>
                 </div>
             </div>
            <!-- MODAL ENDS -->




 <!-- debut row article -->
       <div class="row bg-transparent mt-4 offset-1"> 
               <div class="col-md-12">
                   <div class="card mb-2 card bg-transparent">
                       <div class="col-md-12">
                            <div class="card-body">
                               <h5 class="card-title text text-center">Card title</h5>
                                   <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                      <button class="btn bouton_vert article badge-2x badge-pill" type="button" data-toggle="modal" data-target="#exampleModalLong" aria-expanded="false" aria-controls="collapseExample1"> En savoir plus
                                      </button>
                            </div>
                      </div> 
                   </div>
               </div>
             </div><!-- fin row article -->
            <!-- MODAL STARTS -->
            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                 <div class="modal-dialog" role="document">
                     <div class="modal-content">
                          <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle">Qu'est-ce que le Lorem Ipsum?</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           <div class="modal-body">
                              <h5><?= $articles['titleArticle'] ?></h5>
                              <p>
                                 <?= $articles['article'] ?>
                              </p>
                           </div>
                          <div class="modal-footer">
                          </div>
                     </div>
                 </div>
             </div>
            <!-- MODAL ENDS -->


<?php require_once 'inc/footer.inc.php' ?>