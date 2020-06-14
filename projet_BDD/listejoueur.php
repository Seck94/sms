<?php
   session_start();
 
   $pdo = new PDO('mysql:dbname=qcm;host=localhost','root','');
   $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
 
 
   $req=$pdo->prepare("SELECT * FROM user WHERE role='joueur'");
   $executereq= $req->execute();
   $liste = $req -> fetchAll();
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style/crequestion.css">
</head>
<body>
<div class="sms" style="background:url('images.jfif') no-repeat; background-size:cover; height:700px;">
<div class="row col-md-12 col-xs-12" style="background-color:#331155;" >
<div class="col-md-2 col-xs-2">
<img src="maquette/logo-QuizzSA.png " height="50px" alt="" srcset="">
</div>
<div class="col-md-8 col-xs-4">
<h5 class="text-center" style="color:white">Le plaisir de jouer</h5>
</div>
<div class="col-md-2">
<button class="btn btn-primary" >Deconnexion</button>
</div>
</div>
<div class="row mx-auto ">
<div class="col-md-4  "style='margin-top: 200px;'>
<div class="card  bg bg-primary" style="width:";>
<img src="" class="card-body" alt="" srcset="">
<h5 class="card-body">card title</h5>
<img src="" alt="">
</div>
<ul class="list-group list-group-flush">
<li class="list-group-item"> <a href=""> Créer Admin</a> <img style="float:right" src="maquette/ic-ajout-active.png" alt=""> </li> 
<li class="list-group-item"> <a href="">Liste Joueur</a>   <img style="float:right" src="maquette/ic-liste.png" alt=""></li>
<li class="list-group-item"> <a href="">Créer Question</a>   <img style="float:right" src="maquette/ic-ajout.png" alt=""></li>
<li class="list-group-item"> <a href="">Liste Question</a>   <img style="float:right" src="maquette/ic-liste.png" alt=""></li>

</ul>

</div>


<div class=" col-md-6 border border-info rounded bg bg-primary " style='margin-top: 130px;'>
 <form action="" name="form" class='form-group col-md-10 ml-5' method="post">
 <h1 class="text-center" style="color:white">Liste des joueur</h1>
   <div class="row mt-2  justify-content-center bg bg-primary" >
  
   <ol class="list-group list-group-flush">
  <?php foreach ($liste as $listes): ?>
  <li class="list-group-item d-flex justify-content-between align-items-center" style="text-transform:capitalize;">
  <?= $listes->nom ?>  <?= $listes->prenom ?> <a class="ml-5" href="supprimerjoueur.php?num_joueur=<?= $listes->id?>">Supprimer</a>
  </li>
  <?php endforeach;?>
  </ul>  

   </div>




 </form>
</div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script>
$('#form').submit(function (e) {
e.preventDefault();


        $.ajax({
            url:"traitementjoueur.php",  
            method:"POST",  
            data:$(this).serialize(),
            dataType: "json",
            success:function(data){
                
            }

        })
   
})
</script>

</body>
</html>