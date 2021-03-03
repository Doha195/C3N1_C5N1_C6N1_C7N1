<?php
$couleur = array ('blanc', 'vert', 'rouge', 'bleu', 'noir');
echo "Le souvenir de cette scène pour moi est comme une trame de film à jamais figée 
à ce moment-là: le tapis $couleur[2] , la pelouse $couleur[1] , la maison $couleur[0],
 le ciel plombé. Le nouveau président et son première dame. - Richard M. Nixon <br>";
echo "<br>";
?>
<?php
$ceu = array ("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Bruxelles",
 "Denmark" => "Copenhague", "Finland" => "Helsinki "," France "=>" Paris ",
 " Slovaquie "=>" Bratislava "," Slovénie "=>" Ljubljana "," Allemagne "=>" Berlin ",
 " Grèce "=>" Athènes "," Irlande " => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbonne", 
 "Spain" => "Madrid", "Sweden" => "Stockholm", "United Kingdom" => "Londres "," Chypre "=>" Nicosie ",
 " Lituanie "=>"Vilnius "," République tchèque "=> " Prague "," Estonie "=>" Tallin ",
 " Hongrie "=>" Budapest "," Lettonie "=>" Riga "," Malte "=>" La Valette "," Autriche "=>" Vienne ",
 " Pologne "=> " Varsovie ");

foreach($ceu as $x => $val) {
    echo "La capitale de $x est $val<br>";
}
?> -->
<?php
$months = array ("1" => "Janvier", "2" => "Fevrier", "3" => "Mars",
"4" => "Avril", "5" => "Mai","6"=>"Juin","7"=>"Juillet","8"=>"Aout",
"9"=>" Septembre ","10"=>" Octobre "," 11 " => "Novembre", "12" => "Decembre");
echo "<table border=1>";
foreach($months as $x => $val) {
        echo "<tr>";
        echo "<td>$x</td> <td>$val<br></td>";
        echo "<br>";
        echo "</tr>";
}
echo "</table>";
?>

<?php

//Fonction 
function affichtable($month){
    echo "<table border=1>";
    foreach ($month as $x => $x_value){
        echo "<tr><td>".$x."</td><td>".$x_value."</td></tr>";
    }
    echo "</table>";
}

//** */
//Déclaration tableau
$month = array( "said" => "13", "badr" => "16", "najat" => "15",);
//Afficher Tableau 
affichtable($month);

//Insertion
$month["karim"] ="10";
$month=array_merge($month, ["zrze" => "18"]);

// suppression
unset($month["badr"]);

//affichage
affichtable($month);

//maximale et minimale 
echo "La note maximale est :".max($month)."<br>";
echo "La note minimale est :".min($month);


//ordre alphabétique
ksort($month);
affichtable($month);
echo "<br>";
arsort($month);
affichtable($month);

//la moyenne de la classe
echo "la moyenne de la classe est:".round(array_sum($month)/count($month),precision:2);

?>


