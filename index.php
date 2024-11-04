<h1>Introduction PHP</h1>

<?php

$chaineDeCaracteres = "mon texte"; //string
$chaineDeCaracteres2 = "mon prix est très interressant"; //string
$chaineDeCaracteres3 = "mon prix est de ";
$entier = 50 ; // integer
$flottant = 0.99; // float
$booleen = true; // boolean (true ou false)
$tableau = array("texte 1","texte 2","texte 3");//array
$tableau2 = ["texte 1","texte 2"];//array
$date = new DateTime(); //programmation orientée objet (POO)

//affichage

echo "test<br>";
echo $chaineDeCaracteres."<br>";//mon texte
echo $chaineDeCaracteres2."<br>";// mon prix est très interresant
echo $chaineDeCaracteres3." ".$entier." euros<br>";// mon prix est de 50 euros
echo "$chaineDeCaracteres3 $entier euros<br>";// mon prix est de 50 euros 


//FONCTIONS CHAINES DE CARACTERES 

$nbCaracteres = strlen($chaineDeCaracteres);//ne fonctionne que sur des chaines de caractères 

