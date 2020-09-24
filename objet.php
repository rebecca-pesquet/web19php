<?php
require "./myclass/Article.php";

$article = new Article();
var_dump($article);
$article->setDesription("Bonjour les amis ceci est une description intéressante pour introduire le cours de PHP Object");
var_dump($article);

echo $article->getShortDesc(4);