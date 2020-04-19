<?php
  session_start();
  if(isset($_POST['submit'])){
   $text=$_POST['text'];
   $_SESSION['question']=$text;
   $tess=$_POST['tess'];
   $_SESSION['reponse']=$tess;
  }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="crquestion.css">
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
        <img id="imge" src="Screenshot_20181115-092933.jpg" alt="">
    </div>
<!--image -->
 <div class="liste">
 <!--les liste-->
     <ul>
     <li><a href="#">liste question  </a></li> <li><img src="maquette/ic-liste.png" alt=""></li> 
     <li><a href="#">créer admin  </a></li>    <li><img src="maquette/ic-ajout-active.png" alt=""></li>
     <li><a href="listejoueur.php">liste joueurs  </a></li>   <li> <img src="maquette/ic-liste.png" alt=""></li>
     <li><a href="crquestion.php">créer questions </a></li>     <li><img src="maquette/ic-ajout.png" alt=""></li>
     </ul>
 </div>
</div>

<!--le formulaire-->
 <div class="inputs">
  
  <div class="milieu">
<!--les questions-->
<div class="containers">
    <div class="hear"><h1>bienvenue aly sur la platforme d'édition des questionnaires</h1></div>
    <!--le milieu du contenu-->
    <div class="fond">
    <!--question-->
    <div class="question">
     <textarea name="text"id="" cols="60" rows="3"  value="">
     <?php if(isset($_POST['text'])){ echo $_POST['text'];} ?>
     </textarea>
    </div>
    <!--fin du questions-->

    <!--score-->
    <div class="score"> 
    <textarea name="tess" id="" cols="47" rows="2">
    <?php if(isset($_POST['tess'])){ echo $_POST['tess'];} ?>
    </textarea>
    </div>
    <!--fin d'score-->
    <!--type-->
    <div class="type"><select name="" id="sms">
        <option value="">--choix--</option>
        <option value="">choix multiple</option>
        <option value="">choix simple</option>
        <option value="">choix texte</option>
    </select>
  
</div>
  </div>
  
     
   <div class="suivant"> <button>suivant</button></div>
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