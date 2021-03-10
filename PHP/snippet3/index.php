<?php
if(isset($_COOKIE["doha"])){
        $dates=unserialize($_COOKIE["doha"]);
        $name = "doha";
        $dates[]=time();
        setcookie(  $name ,serialize($dates));
      // print_r($dates);
        //afficher le message 
        echo " Vous avez consulté cette page ".count($dates)." fois , voici les détails:";
        echo "<ul>";
        foreach ($dates as $key => $value) {
          echo "<li>".date("d-m-Y H:i:s",$value)."</li>";
        }
        echo "</ul>";
      }
      else{
        $dates[]=time();
        $name = "doha";
        setcookie(  $name ,serialize($dates));
        echo "C'est votre première visite : ".date("d-m-Y H:i:s",time());
      }
?>
