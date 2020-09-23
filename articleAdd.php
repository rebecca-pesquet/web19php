<?php
require ("config.php"); //Pour avoir entre autre la connexion à la BDD

$requete = $bdd->prepare("INSERT INTO articles (Titre, Description, DateAjout, Auteur) VALUES(:Titre, :Description, :DateAjout, :Auteur)");

$requete->execute([
    "Titre" => $_POST["Titre"],
    "Description" => $_POST["Description"],
    "DateAjout" => $_POST["DateAjout"],
    "Auteur" => $_POST["Auteur"]
]);

$lastId = $bdd->lastInsertId();

header("Location:/articleUpdate.php?Id=".$lastId);

