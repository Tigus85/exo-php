<?php

function limitString(string $chaine, int $max){

   return substr($chaine, 0,$max);
   
}

echo limitString("Lorem ipsum dolor sit amet", 4);
echo "<br>";
// NIVEAU PLUS AVANCE !!! Attention


$produits = [
    [
        "refProduit" => "Prod0001",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0012",
        "prix_ht" => 14.65,
        "tva"  => 10
    ],
    [
        "refProduit" => "Prod0002",
        "prix_ht" => 1.87,
        "tva"  => 5.5
    ],
    [
        "refProduit" => "Prod0008",
        "prix_ht" => 119,
        "tva"  => 20
    ]
];
// Créer une fonction qui nous sortira un tableau de valeurs
// Le SEUL paramètre d'entrée doit être un tableau de produits (fourni ci-dessus)
// la valeur retournée doit être sous la forme
// [
//   "REF_PRODUIT" => "PRIX_TTC",
//   ...
// ]
// IMPORTANT : Le retour doit être fait en ordre alphabétique de la refProduit

function productTTC(array $products){

    foreach($products as $product){

        $ttc = $product["prix_ht"] /100 *  $product["tva"] + $product["prix_ht"];

        $retourner[$product["refProduit"] ] =  $ttc;

    }
    ksort($retourner);
    return $retourner;

}

var_dump(productTTC($produits)) ;
echo "<br>";

function add00($add){
    if($add<10){
        $add = "00$add";
    }elseif($add<100){
        $add = "0$add";
    }
};

function randomImmat(){

    $alphabet="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    
    $nb1=rand(1,999);
    $nb2=rand(1,999);
    add00($nb1) ;
    add00($nb2) ;

    for($i=0; $i<5; $i++){
        $alphaRand = rand(0,25);
       $letter .=  substr($alphabet, $alphaRand,1);
    }

    $immat = $nb1. "-" . $letter . "-" . $nb2 ;
 
    return $immat;
}

echo randomImmat();