<?php
$Panier = ["Fraise", "Pomme", "Salade"];

setcookie("panier", json_encode($Panier),time() + (86400 * 30),"/");
var_dump($Panier);
var_dump(json_encode($Panier));

setcookie("dernierArticleVu", "Peugeot 208",time() + (86400 * 30),"/");