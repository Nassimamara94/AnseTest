<?php
require_once("../inc/init.inc.php");
require_once("../inc/header.inc.php");
?>

    
       <div class="row mx-auto"> <!-- debut row -->
           
            <div class="col-md-6 mx-auto" id="inscription">

                 <h3>Inscription</h3>

             
                 <form class="col-md-12 rounded-pill text-center m-3 mx-auto" method="Post">
                 <!-- nom -->
                 <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="nom" placeholder="nom" name="nom" >
                 </div>
                 <!-- prenom -->
                  <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="prenom" placeholder="prenom"  name="prenom">
                 </div>
            
                 <!-- date -->
                  <div class="form-group">
                     <input type="date"  class="form-control  rounded-pill text-center m-3" id="date" placeholder="date" name="date">
                  </div>

                 <!-- email -->
                 <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="email" name="email" placeholder="Enter email"> 
                 </div>
                <!-- mdp -->
                 <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="mdp" name="mdp" placeholder="Password">
                 </div>
                <!-- adresse -->
                 <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="adresse" name="adresse" placeholder="Entrer Adresse" >
                 </div>
                <!-- pays -->
                 <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="pays" name="pays" placeholder="Entrer votre pays">
                 </div>
                <!-- telephone -->
                  <div class="form-group">
                    <input type="text" class="form-control  rounded-pill text-center m-3" id="telephone" name="telephone" placeholder="Entrer telephone">
                 </div>

                    <button type="submit" class="btn btn bouton_vert rounded-pill">Submit</button>
                </form>

             </div> 

             <div class="col-md-6 mx-auto">



                 <h3 class="text-center offset-4">Connexion</h3>

             
                 <form class="col-md-12  text-center form mx-auto" method="Post">
                 <div class="form-group">

                    <input type="text" class="form-control rounded-pill text-center m-3 " id=" adminEmail" name="adminEmail"
                    placeholder="Votre@Email.com">
                 </div>


               
                 <div class="form-group">
                    <input type="password" class="form-control rounded-pill text-center m-3 " id="name" name="adminPw"
                    placeholder="Votre Mot de passe">
                 </div>

                <input type="submit" class="btn bouton_vert rounded-pill">
                </form>

             </div> 
       </div>   <!-- fin row -->
             
             
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

          <!-- </div> -->
            

</body>

</html>