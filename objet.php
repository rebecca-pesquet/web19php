<?php
require "./myclass/Article.php";
require "./config.php";
use myclass\Article;

$article = new Article();
$article->setTitre("Mon article OBJET")->setDesription("C'est une super description pour cet article")->setAuteur("Mathis")->setDateAjout("2020-09-24");

$sql = $article->SqlAdd($bdd);
var_dump($sql);