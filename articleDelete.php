<?php
require "config.php";

$Id = $_GET["Id"];

$requete = $bdd->prepare("DELETE FROM articles WHERE Id=:Id");
$requete->execute([
    "Id" => $Id
]);
//On redirige le client vers la page d'accueil
header("Location:/index.php");