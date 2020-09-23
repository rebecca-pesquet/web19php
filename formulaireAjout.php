<?php
require "config.php";
var_dump($_POST);
?>
<h1>Récapitulatif de l'article</h1>

<!-- Exo : Afficher dans une div le titre de l'article posté en majuscule
 Afficher dans une autre div les 4 premiers mots de la description de l'article (ne pas refaire de fonction mais utiliser celle qu'on a déjà faite)
-->
<div><?php echo strtoupper($_POST["titre"]) ?></div>

<?php
    echo "<div>".strtoupper($_POST["titre"])."</div>";
?>

<div><?php echo getXFirstWord($_POST["description"],4) ?></div>

<?php
    //Exo : dans la page formulaire ajouter un champ de type "SELECT" qui possède 5 valeurs (PHP, Java, C#, ASP, Flutter)
    // : dans la parge formulaireAjout Si le champ a pour valeur "PHP"  afficher la date de publication sinon pas de date de publication
if($_POST["langage"] == "php"){
    echo $_POST["publishDate"];
}

?>
