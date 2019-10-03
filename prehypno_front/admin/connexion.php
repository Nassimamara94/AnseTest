<?php
require_once("../inc/init.inc.php");
require_once("../inc/header.inc.php");
?>

    
        <div class="row"> <!-- debut row -->
           
            <div class="col-md-6" id="inscription">

                 <h1 class="text-center">Inscription</h1>

             
                 <form class="col-md-6 text-center form" method="Post">
                 <!-- nom -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="nom" placeholder="nom" name="nom" >
                 </div>
                 <!-- prenom -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="prenom" placeholder="prenom"  name="prenom">
                 </div>
           
                 <!-- date -->
                 <div class="form-group">
                 <input type="date"  class="form-control" id="date" placeholder="date" name="date">
                 </div>

                 <!-- email -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email"> 
                 </div>
                <!-- mdp -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="mdp" name="mdp" placeholder="Password">
                 </div>
                <!-- adresse -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse" >
                 </div>
                <!-- pays -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="pays" name="pays" placeholder="Entrer votre pays">
                 </div>
                <!-- telephone -->
                 <div class="form-group">
                    <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Entrer telephone">
                 </div>

                    <button type="submit" class="btn btn bouton_vert rounded-pill">Submit</button>
                </form>

             </div> 

             <div class="col-md-6">

                 <h1 class="text-center">Inscription</h1>

             
                 <form class="col-md-6  text-center form" method="Post">
                 <div class="form-group">

                    <input type="text" class="form-control rounded-pill text-center m-3 " name="adminEmail"
                    placeholder="Votre@Email.com">
                </div>


               
                 <div class="form-group">
                    <input type="password" class="form-control rounded-pill text-center m-3 " name="adminPw"
                    placeholder="Votre Mot de passe">
                 </div>

                <input type="submit" class="btn bouton_vert rounded-pill">
                </form>

             </div> 
             
             
             <!-- <div class="col-md- mx-auto">   

                <h1 class="text text-center">Connexion</h1>
              

                 <form class="col-md-4 text-center" method="Post">
                 
                 <div class="form-group">

                    <input type="text" class="form-control rounded-pill text-center m-3 " name="adminEmail"
                    placeholder="Votre@Email.com">
                </div>


               
                 <div class="form-group">
                    <input type="password" class="form-control rounded-pill text-center m-3 " name="adminPw"
                    placeholder="Votre Mot de passe">
                 </div>

                <input type="submit" class="btn bouton_vert rounded-pill">
                </form>
            </div> -->

         </div>
            

</body>

</html>