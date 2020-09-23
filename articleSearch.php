<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>
<h1>Voici les articles correspondant à votre recherche</h1>

<?php
 var_dump($_POST);
$motcle = $_POST["search"];
$requete = $bdd->prepare("SELECT * FROM articles WHERE Id= :IDARTICLE OR Description like :KEYWORD") ;
$requete->execute([
   "IDARTICLE" => $motcle,
    "KEYWORD" => "%".$motcle."%"
]);

$datas = $requete->fetch(PDO::FETCH_ASSOC);
var_dump($datas);

?>


<?php require("_baseHTML2.php"); ?>
