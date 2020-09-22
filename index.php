<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>

<?php
 //echo getXFirstWord("Voici ma belle phrase",2);
 echo get_words("Voici ma belle phrase",2);

 // $_GET = Récupère info URL

 // $_POST = Récupère infos Formulaire

var_dump($_GET);
var_dump($_POST);

 ?>

<p>Consulter les note de <a href="/eleves.php?prenom=David">David</a></p>
<?php
$prenoms = ["Brice", "Julie", "Aegir", "Emilie"];
//Exo : Créer un lien HREF pour chacun de ces prénoms qui emmène vers la page eleves, sauf pour "Aegir" (Boucle + IF)
foreach ($prenoms as $prenom){
    if($prenom != "Aegir"){
        echo "<p>Consulter les note de <a href=\"/eleves.php?prenom=".$prenom."\">".$prenom."</a></p>";
    }
}

$prenomsNote = [
        "Brice" => "C",
        "Julie" => "B",
        "Aegir" => "D",
        "Emilie" => "A"
];
// Exo : Du coup on va sur Eleves.php et on fait une variable aussi sur la note




?>

<?php require("_baseHTML2.php"); ?>







