<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="interface.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <h1>créer et paramérter vos quizz</h1>
        <div class="deconnexio"><input type="submit" name="deconnexion" value="Deconnexion"></div>
    </div>
<div class="Gauche">
    <div class="imd">
        <img id="imge" src="" alt="">
    </div>
<!--image -->
 <div class="liste">
 <!--les liste-->
     <ul>
     <li><a href="#">liste question  </a></li> <li><img src="maquette/ic-liste.png" alt=""></li> 
     <li><a href="#">créer admin  </a></li>    <li><img src="maquette/ic-ajout-active.png" alt=""></li>
     <li><a href="#">liste joueurs  </a></li>   <li> <img src="maquette/ic-liste.png" alt=""></li>
     <li><a href="#">créer questions </a></li>     <li><img src="maquette/ic-ajout.png" alt=""></li>
     </ul>
 </div>
</div>

<!--le formulaire-->
 <div class="inputs">
     

     <!--l'image du droit-->
  
  <!--gére les inputs à Gauche-->
 
<!--choix du fichier-->
     

      <!--avart-->

   <!--submit-->
   


 </div>

 </div>

 
 </div>

</form>




</body>
</html>

<?php 
$uploadPath = 'uploads/'; 
if(isset($_POST['submit']) && !empty($_FILES['file']['name'])){ 
    if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath.$_FILES['file']['name'])){ 
        echo 'File has been uploaded successfully.'; 
    }else{ 
        echo 'File upload failed, please try again.'; 
    } 
} 
?>