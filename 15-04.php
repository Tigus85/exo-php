<?php

// Écrivez un script qui affiche la chaîne suivante :

// > *Je ne suis **rien**, je le sais, mais je compose mon rien avec un petit **morceau** de **tout**. "Victor Hugo"*
// > 

// Les mots «rien», «morceau» et «tout» doivent être affichés grâce à la variable $words

$words = [ 'rien', 'morceau', 'tout' ];

echo("Je ne suis $words[0], je le sais, mais je compose mon $words[0] avec un petit $words[1] de $words[2]. \"Victor Hugo\" <br>");


// Créez un script PHP qui affiche le nom de la capitale et du pays en partant du tableau ci-dessus. Triez la liste alphabétiquement par capitale du pays.

// *Exemple de sortie : 
// Paris est la capitale du pays suivant : France*


$cities= array( 
    "Italie"=>"Rome",
    "Luxembourg"=>"Luxembourg",
    "Belgique"=>"Bruxelles",
    "Danemark"=>"Copenhague",
    "Finlande"=>"Helsinki",
    "France" =>"Paris",
    "Slovaquie"=>"Bratislava",
    "Slovénie"=>"Ljubljana",
    "Allemagne" => "Berlin",
    "Grèce" => "Athènes",
    "Irlande"=>"Dublin",
    "Pays-Bas"=>"Amsterdam",
    "Portugal"=>"Lisbonne",
    "Espagne"=>"Madrid",
    "Suède"=>"Stockholm",
    "Angleterre"=>"Londres",
    "Chypre"=>"Nicosia",
    "Lituanie"=>"Vilnius",
    "République Tchèque"=>"Prague",
    "Estonie"=>"Tallinn",
    "Hongrie"=>"Budapest"
    ) ;

    asort($cities);
    foreach($cities as $city => $capital){
      echo "$capital est la capitale du pays suivant : $city. <br>";
    }


//     Créez un script PHP qui stockera dans un tableau les 5 nombres les plus élévés dans une clé “maxValues” en ordre croissant et les 5 nombres les plus petits dans une clé “minValues” en ordre décroissant

// Format attendu :
// [
//   "min" : [
// 			"60", "62" ...
// 	],
// 	"max" : [
// 			"85", "79" ...
// 	],
// ]


$values = " 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$arrayValues = explode(",", $values);
sort($arrayValues);

$array=[];
for($i=0 ; $i<4 ; $i++){
  $array["min"][$i]=$arrayValues[$i];
}
rsort($arrayValues);
for($i=0 ; $i<4 ; $i++){
  $array["max"][$i]=$arrayValues[$i];
}

var_dump($array);

// Créer une fonction PHP permettant d'ajouter les deux variables de type string au sein du tableau $baseArray, respectivement en 1ère et 2ème positions.

// *Tableau final demandé :*
// $baseArray = ['Micra', 'C4', 'Clio', '308', 'Fiesta'];

$baseArray = ['Clio', '308', 'Fiesta'];

$micra = "Micra";
$c4 = "C4";

array_unshift($baseArray, $micra, $c4);
var_dump($baseArray);


// Ecrivez une **fonction PHP** qui passera en paramètre une seule valeur, le tableau ci-dessus, celle-ci devra retourner un tableau composé que de valeurs.

// Attention le rendu doit être identique au résultat attendu ci-dessous, à vous de trouver l’algorithme adapté.

// *Tableau final demandé :*

//$precision = [ 234.7629, 765.93426374, 56.6, 657.9218276 ];


$values = [
	'4' => 234.7629102,
	'8' => 765.9342637463526,
	'1' => 56.6762,
	'7' => 657.9218276
];

$precision= [];

foreach($values as $value){
  array_push($precision, $value);
}

var_dump($precision);