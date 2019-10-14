<?php
require_once "inc/init.inc.php";
require_once "inc/Header.inc.php";
// a décommenter en temps et en heures
// if(!userConnectedAdmin())
// {
//    header("location:" . URL);
// }
extract($_GET);
$contenu = "";
$members="";
// ---------------SUPPRESSION D' UN PATIENT'-----------------------
if (isset($_GET['action']) && $_GET['action'] == 'suppression' && isset($_GET['id'])) {
    $member_delete = $pdo->prepare("DELETE FROM members WHERE idMember = :id");
    $member_delete->bindValue(':id', $id, PDO::PARAM_STR);
    $member_delete->execute();
    $_GET['action'] = 'affichage'; // on redirige vers l'affichage des articles
    $validate .= "<div class='alert-warning col-md-6 offset-md-3  mb-2 text-center'>le membre n° <strong>$id</strong> a bien été supprimé !</div>";
}
//---------------AFFICHAGE DEL'HISTORIQUE -----------------------
?>
<div class="row">
</div>
<div class="container mt-5">
    <h3 class="text-center m-2">Fichier patient : </h3>
     <a href="#">
         <button class="bouton_vert badge-pill offset-md-9 mt-5 mb-5">modification de la fiche
        </button>
    </a>
    <?php
    ?>
    
<?php
    // requete pour afficher les infos du patient, une seule fois
    if (isset($_GET['action']) && $_GET['action'] == 'show' && isset($_GET['id'])) {
        $resultat = $pdo->prepare("SELECT * FROM members as m, rdv as r WHERE m.idMember = r.memberid AND m.idMember= :idMember");
        $resultat->bindValue(':idMember', $_GET['id'], PDO::PARAM_STR);
        $resultat->execute();
        if ($resultat->rowCount() > 0) {

            $members = $resultat->fetch(PDO::FETCH_ASSOC);
        }
    }
    echo '<pre>';
    print_r($members);
    echo '</pre>';
    ?>
    <form class="m-3">
        <div class="form-row m-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Prénom : " value="<?= $value['firstName'] ?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Nom : " value="<?= $value['lastName'] ?>">
            </div>
        </div>
        <div class="form-row m-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Date de Naissance : "
                    value="<?= $value['dateOfBirth'] ?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Email : " value="<?= $value['email'] ?>">
            </div>
        </div>
        <div class="form-row  m-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="Addresse : " value="<?= $value['password'] ?>">
            </div>
            <div class="col">
                <input type="text" class="form-control" placeholder="Téléphone : " value="<?= $value['phone'] ?>">
            </div>
        </div>
        <div class="form-row  m-2">
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Pays " value="<?= $value['country'] ?>">
                <!-- <select id="inputState" class="form-control">
                    <option selected>Pays</option>
                    <option>France</option>
                    <option>Belgique</option>
                </select> -->
            </div>
        </div>
    </form>
<!-- 
    <h3 class="text-center m-2">Historique des RDV : </h3> -->
    <!-- <table class="table table-striped table-dark text-center">
        <thead>
            <tr>
                <th scope="col">Jour de la consultation</th>
                <th scope="col">Heure de la consultation</th>
                <th scope="col">Pays</th>
                <th colspan="2">Action</th>
            </tr>
        </thead> -->
    </table>

   <?php require_once 'inc/footer.inc.php' ?>