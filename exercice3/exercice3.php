




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .mim{
        
         width:300px;
         height:auto;
         margin:auto;
         margin-top:2%;
         border:5px solid black;
         border-radius:10px;
         background:lightblue;

     }
     .mim label {
         font-size:12px;
         font-weight:500;
         margin-left:120px;
     }
     .mim input {
         margin-left:20%;
         text-transform:capitalize;
     }
     .para{
         border:2px solid black;
         width:700px;
         border-radius:7px;
         margin:auto;
         text-align:center;
         font-size:20px;
         text-transform:uppercase;
         margin-top:5%;
     }
     .reset input{
         float:right;
         margin-top:-21px;
         background:red;
         color:white;
         margin-right:22%;
     }
     .submit{
         margin-top:10px;
     }
     .mim p {
         font-size:20px;
         font-weight:900;
         background:blue;
         color:white;
         border:2px solid #000;
         border-radius:5px;
   }
   #int input {

   }
     
    </style>
</head>
<body>
    <div class="para">
    <p>ce programme permet de compter le nombre de " m " qu'il y'a dans une phrase !</p>
    </div>
    <div class="mim">
     <form method="post">
         <br><label style="color:lightblack; margin-left:20px">Veuiller entrer saisir un nombre svp !</label><br> <br>
         <input type="text" name="lettre"> <br>
          <div class="submit"><input type="submit" name="submit" value="afficher"> <br></div>
          
          <div class="reset"><input type="reset" value="annuler"></div>
         
              <!---->
              </form>
          <!---->
         <?php if(isset($_POST['submit'])):?>

         <?php for ($i=1; $i <=(int) $_POST['lettre']; $i++):?>
            <form method="post"> 
            <br><label for="<?php $i;?>">MOTS N<?php echo $i;?></label> <br>

        <input id="int" type="text" name="mbacke<?php echo $i;?>" placeholder="Entrer un mot" >  <br>
        <?php endfor;?>
        
        <br> <br> <input style="background:green; color:white; margin-left:40%;" type="submit" name="subm" value="Envoyer"> <br>
         </form>
         <?php endif;?>
         <?php
          if (isset($_POST['subm'])){
              $tab=[];
       for ($i=1; $i <=count($_POST)-1 ; $i++) { 
       
        echo $_POST['mbacke'.$i].'<br>';
         for ($j=0; $j < strlen($_POST['mbacke'.$i]) ; $j++) { 
           
           if($_POST['mbacke'.$i][$j]=="m" || $_POST['mbacke'.$i][$j]=="M"){
               $tab[]=$_POST['mbacke'.$i];
           break;
           }
        }

       }
       
       echo '<p>Est le nombre de mot saisi</p>';
 echo '<p>Les mots contenants m/M sont: </p>';
     foreach($tab as $key)
     {
   echo $key.'<br>';
     }
      
    }


       ?>

     </div>
</body>
</html>

<?php function mots($mots){
            $i=0;
            while (!empty($mots[$i])) {
                $i++;
            }
            return $i;
            
        }         
      
        ?>

