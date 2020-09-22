<?php

// Fabriquer une fonction
function addition($val1,$val2){
    $result = $val1 + $val2;

    return $result;
}

//Utiliser la fonction
//Exo : Rendre "variable" les arguments de la fonction
// addition
$chiffre1 = 10;
$chiffre2 = 5;

$resultatAddition = addition($chiffre1,$chiffre2);
echo "le résultat de $chiffre1 + $chiffre2 = ".$resultatAddition;

$bibliotheques = [
    "ABC1" => ["Nom" => "Notre dame de Paris", "Page" => 655, "Année" => 1831]
    , "DEF2" => ["Nom" => "Les misérables", "Page" => 543, "Année" => 1962]
    , "GHI3" => ["Nom" => "Les 3 mousquetaires", "Page" => 389, "Année" => 1920]
    , "JKL4" => ["Nom" => "50 nuances de Grey", "Page" => 224, "Année" => 2010]
];
// Je veux une fonction "traitementBibliotheque" qui :
// - Attend en argument la bibliothèque
// - Parcourir la bibliothèque (foreach)
// - Pour chaque livre, enregistrer un nouveau tableau ;
/*
 *  [
 *          ["Titre du livre 1", "Année du livre 1"]
 *          ,["Titre du livre 2", "Année du livre 2"]
 * ]
 *
 */
// - Retourne ce nouveau tableau

function traitementBibliotheque($biblio){
    $bilbioTraitrement = array();
    foreach ($biblio as $key => $livre){
        $bilbioTraitrement[] = [
            $livre["Nom"],
            $livre["Année"]
        ];
    }
    return $bilbioTraitrement;
}

var_dump(traitementBibliotheque($bibliotheques));