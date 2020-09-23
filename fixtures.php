<?php
require ("config.php");

//Vider la table
$requete = $bdd->prepare("TRUNCATE TABLE articles");
$requete->execute();

//Tableau "Jeu de donnée"
$Titres = ["PHP en force", "Java en baisse", "JS un jour ça marchera", "Flutter valeur montante", "GO le futur"];
$Prenoms = ["Rebecca", "Alexandre", "Emilie", "Léo", "Aegir"];
$datedujour = new DateTime();
for($i = 0;$i < 200;$i++){
    $datedujour->modify("+1 day");
    shuffle($Titres);
    shuffle($Prenoms);

    $requete = $bdd->prepare("INSERT INTO articles (Titre, Description, DateAjout, Auteur) VALUES(:Titre, :Description, :DateAjout, :Auteur)");

    $requete->execute([
        "Titre" => $Titres[0],
        "Description" => "Ceci est une excellent description",
        "DateAjout" => $datedujour->format("Y-m-d"),
        "Auteur" => $Prenoms[0]
    ]);
}
