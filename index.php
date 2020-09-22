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
<?php require("_baseHTML2.php"); ?>







