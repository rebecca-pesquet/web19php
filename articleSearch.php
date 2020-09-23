<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>
<h1>Voici les articles correspondant à votre recherche</h1>

<?php
 var_dump($_POST);
$Id = $_POST["search"];
$requete = $bdd->query("SELECT * FROM articles WHERE Id=".$Id) ;
$datas = $requete->fetch(PDO::FETCH_ASSOC);
var_dump($datas);

?>


<?php require("_baseHTML2.php"); ?>
