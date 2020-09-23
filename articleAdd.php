<?php
require ("config.php"); //Pour avoir entre autre la connexion à la BDD

$requete = $bdd->prepare("INSERT INTO articles (Titre, Description, DateAjout, Auteur) VALUES(:Titre, :Description, :DateAjout, :Auteur)");

$requete->execute([
    "Titre" => "Un autre article",
    "Description" => "Ceci est un nouvel article",
    "DateAjout" => "2020-09-23",
    "Auteur" => "Rebecca"
]);

$lastId = $bdd->lastInsertId();

echo "<p>Bravo vous venez de créer un article dont l'ID est : ".$lastId."</p>";
