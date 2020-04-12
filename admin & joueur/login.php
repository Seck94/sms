<?php
     session_start();
    $erreure="";
    $erreur="";
  
    if (isset($_POST['submit'])) {
        if(empty($_POST['texte']) || empty($_POST['pass'])){
           $erreur= 'veuiller enter votre identifiant svp !';
        } 
        else{
            $js=json_decode(file_get_contents('fiche.json'),true);
            $test=false;
            foreach ($js as $key=> $value ) {
              if ($key==$_POST['texte']) {
                  $test=true;
              break;
              }
            }

           
             if($test){ //le login existe
                $login=$_POST['texte'];
                $pass=$js[$login]['pass'];
                if  ($_POST['pass'] !=$pass) {
                    $erreur='<p style="color:red;">votre mot de passe est incorrecte</p>';
                    
                 
                }
                 elseif($login=="admin"){ //mot de passe correcte
                     
                     $_SESSION['connexion']="admin";
                     header("location:pageadmin.php");
                 }
                 elseif ($login=="secksms") {
                     $_SESSION['joueur']="secksms";
                     header ("location:interface.php");
                 }
             }
             else {
                $erreure= "<p style='color:red;' >ce nom d'utlisateur n'existe pas</p>";
              
            }

            
            

        }
        
      
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
   
</head>
<body>
    <div class="header">
       
        <div class="icone">
          <img src="maquette/logo-QuizzSA.png" alt="">
        </div>
        <h1>Le plaisir de jeux</h1>
    </div>
<form action="#" method="post">

<!--container qui prend en charge tout le travail-->
<div class="container">
    <div class="nav">
        <h1>login form  <a style="text-decoration:none; float:right; margin-right:30px;color:#000;font-family:sans-serif;" href="#">x</a></h1>
        
       
        
    </div>

<!--le formulaire-->


<div class="inp">
  <input type="text" name="texte" placeholder="login"> <img src="maquette/ic-login.png" alt=""> <?php
        echo $erreure;
    ?>
  
  <input type="password" name="pass" placeholder="password"> <img src="maquette/icone-password.png" alt=""> <?php
        echo  $erreur;
    ?>
  
  <div class="tet">
  <input type="submit" name="submit" value="connexion"> <label><a href="#">S'inscrire pour jouer?</a></label>
  
  </div>
  </div>
      <!--avart-->

      

   <!--submit-->
   
<div class="submit"></div>

 </div>

 </div>

 
 </div>

</form>




</body>
</html>

