<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
<div class="container">
      <nav class="navbar navbar-dark ">
        <img class="navbar-brand img" src="maquette/logo-QuizzSA.png" alt="">
      </nav>
    </div>
    <div id="contenu">

    </div>
    <section class="container-fluid bge">
  <section class="row justify-content-center">
  <section class="col-12 col-sm-6 col-md-3">
  <form method="post" class="form-container" id="myform">
  <div class="form-group">
    <label for="exampleInputEmail1">Entrer votre login</label>
    <input type="text" class="form-control" id="username" name="login" value="<?php if(isset($_POST['login'])){ echo $_POST['login'];} ?>">


    <small id="emailHelp" class="form-text text-muted">We'll never share your login with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" name="mdp">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
    
  </div>
  
  <button type="submit" class="btn btn-primary btn-block " id="btn_connexion" name="submit">Submit</button>
  <a class="dep" href="inscriptionjoueur.php">S'inscrire</a>
 
</form>
  </section>
  </section>
</section>  
</form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<!--script-->
<script>
$(document).ready(function(){
$("#myform").submit(function(e){
  e.preventDefault();//ce qui permet au navigateur de lancer l'action au clique du bouton
var donnes = $(this).serialize();

  $.ajax({
    type : "POST",
    url :"traitement.php",
    data : $(this).serialize(),
    success : function(data){
      var msg = "";
    console.log(data);
      if(data==1){
        window.location.href="crequestion.php";
      }
      else{
        msg = "Invalid username and password!";
      }
      $("#message").html(msg);
    }
  });
});
})
</script>

</body>
</html>
