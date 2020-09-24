<?php

if(isset($_COOKIE["panier"])) {
    $Panier = json_decode($_COOKIE["panier"]);
    var_dump($Panier);
    foreach ($Panier as $article){
        echo $article;
    }
}