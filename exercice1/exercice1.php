<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    input{
        width:300px;
        border:1px solid black;
        border-radius:6px;
        text-transform:capitalize;
        margin-left:15%;
        margin-top:30px;
        
        
    }
    .container label {
        font-size:16px;
        font-weight:900;
        margin-left:15%;
        text-transform:capitalize;
    }
    .container{
        background-color:beige;
        border: 1px solid black;
        width:500px;
        height:250px;
        margin:auto;
        padding:25px;
        margin-top:10%;
        border-radius:15px;
        box-sizing:border-box;
        box-shadow: 5px 0px 0px 5px black;
    }
    .submit input{
        width:60px;
        padding:5px;
        margin-left:40%;
        margin-top:25px;

    }
    table{
        border:1px solid blue;
        padding:5px;
    }
   
    table,tr,td{
        border:1px solid black;
        border-spacing:0px;
        
    }
    </style>
</head>
<body>



    <form action="#" method="post">
    <!--div de container-->
    <div class="container">
  <label>saisir un nombre superieur à 10 000 svp !</label> <br> <br>  <input type="text" name="nombre" > <br> <br>

  <div class="submit">
    <input type="submit" name="submit" value="afficher">
    </div>
    <!--dernier div de container-->
    </div>
    </form>

   
</body>
</html>


<?php
  session_start();
  if(isset($_GET['sms'])){
  $vieve=100*$_GET['sms'];
    $frt=$vieve-100;
  
   
    echo"<table>";
    while ($frt < $vieve) {
        
    
    for ($i=0; $i <10 ; $i++) {
        //ici je vois faire quoi 
        echo '<tr style="background:lightgrey;">';
        for($j=0;$j<10;$j++){
            if(array_key_exists($frt,$_SESSION['sms'])){
                echo "<td>".$_SESSION['sms'][$frt]."</td><br>";
                $frt++;
    
            }
        }echo"</tr>";
       
    } }
    echo '<h1>les nombres inférieurs </h1>';
    echo "</table>";
    
    if (isset($_GET['seck'])) {
      
    
    $noura=100*$_GET['seck'];
    $mbck=$noura-100;
    echo "<table>";
    while ($mbck <$noura) {
        for ($i=0; $i <10 ; $i++) { //ici je vois faire quoi 
            echo '<tr>';
            for($j=0;$j<10;$j++){
                if(array_key_exists($mbck,$_SESSION['seck'])){
                    echo "<td style='border:1px solid red;'>".$_SESSION['seck'][$mbck]."</td><br>";
                    $mbck++;
        
                }//fils do nite 
                //ici je vais faire pareil avec le tableau superieur
            }echo"</tr>";
           
        }
    }
    echo "</table>";
}
   

       
    }if(isset($_GET['sms'])){
   $nbr=count($_SESSION['sms'])/100;
      for( $i=1; $i<$nbr ; $i++){
         echo "<a href='exercice1.php?sms=$i'>$i</a>";
     }
    }
 
 if(isset($_POST['submit'])){
     $nombre=$_POST['nombre'];
     if (!ctype_digit($nombre)){
         echo 'veuiller svp saisir un numbre';
     }
     $table=array();
     if($nombre>10000){
     for ($i=1; $i <=$nombre ; $i++) { 
        $cpt=0;
        for ($j=1; $j <=$i ; $j++) { 
         if($i%$j==0){
         $cpt=$cpt+1;
        }
       
        }
        if($cpt==2){
           $table[]=$i;
         }
     }
    }
     $som=0;
     $c=count($table);
     for ($i=0; $i <$c ; $i++) { //pour avoir les valeur  d'un tableau il faut utiliser une boucle et aussi connaitrre la taille du tableau par la fonction peédefinie de php count qui nous donne directement la valeur du tableau sans utliser la boucle 
        $som=$som+$table[$i];
     }
    
     echo 'la somme des nombres premiers sont '.$som;
     $taille=count($table);
     echo 'la taille est de'.$taille;
    

    $moy=$som/$c;
    echo 'la moyenne est de'.$moy;

    $tabi=array();
    $tabs=array();
    for ($i=0; $i < $c; $i++) { // pour afficher les valeurs d'un tableau il faut utiliser une boucle et utiliser echo $nom du tableau[$i] 
        if ($table[$i]<$moy) {
            $tabi[]=$table[$i];
        }
        else{
            $tabs[]=$table[$i];
        }
    }
    $_SESSION['sms']=$tabi;
    $_SESSION['seck']=$tabs;
        header('location:exercice1.php?sms=1&seck=1');
 }


?>

