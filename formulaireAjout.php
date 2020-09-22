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

?>
