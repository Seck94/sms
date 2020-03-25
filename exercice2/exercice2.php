<?php
  function calendrier($c){
  
$calendrier=array(
    '1'=>['janvier','january'],
    '2'=>['fevrier','fébruary'],
    '3'=>['mars', 'march'],
    '4'=>['avril', 'april'],
    '5'=>['mai', 'may'],
    '6'=>['juin','june'],
    '7'=>['juillet', 'july'],
    '8'=>['août', 'auguste'],
    '9'=>['septembre','september'],
    '10'=>['octobre', 'october'],
    '11'=>['novembre', 'november'],
    '12'=>['decembre', 'december'],
);
 
  
 echo '<tr style="background:lightgrey;">';
   for ($i=1; $i <= 12; $i++) { 
    echo '<td>'.$i.'</td><td>'.$calendrier[$i][$c]. '</td>';
   if($i==3) {echo  '</tr><tr style="background:rgb(230, 225, 225);">';}

   if($i==6){ echo  '</tr><tr style="background:lightgrey;">'; }

   if ($i==9) { echo   '</tr><tr style="background:rgb(230, 225, 225);">'; }
 
   if($i==12) { echo '</tr>';}    
    

}       
}   
    
   echo '<table>'  ;   
    if(isset($_POST['Anglais'])) {
        calendrier (1);
    }
     if(isset($_POST['Français'])){ 
     calendrier (0);
    }

 echo '</table>' ;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
    
     
     table ,tr ,td  {
         border:1px solid black;
         border-spacing:0;
         margin:auto;

    }
    td ,tr{
        padding:15px;
        margin-left:500px;
      
    }
    .container{
       
        width:300px;
        height:100px;
        
        margin:auto;
    }
    input{
        border :1px solid black;
        border-radius:5px;
        margin-top:20px;
        width:100px;
        font-weight:900;
        padding:5px;
    }
    form{
       
        margin-left:8%;
        color:beige;
    }
    
    </style>
</head>
<body>
     
    <form method="post">
    
    <div class="container">
   <input type="submit" name="Français" value="Français">
   <input type="submit" name="Anglais"  value="Anglais">
   </div>
    </form>
    
    
</body>
</html>






