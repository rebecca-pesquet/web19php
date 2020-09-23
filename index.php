<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>
<?php
    // Etape 1 : Récupérer l'ID de l'url

    // Etape 2 : Faire une requete SELECT pour aller chercher l'article en question

    // Etape 3 : Renseigner les champs de formulaire avec les données (issues de la requetes)

?>
<h1>Recherche :</h1>
<form action="articleSearch.php" method="post">
    <input type="text" name="search">
</form>

<h1>Tous les articles :</h1>

<?php
    $requete = $bdd->query("SELECT * FROM articles") ;
    $datas = $requete->fetchAll(PDO::FETCH_ASSOC);

    echo("<table>");
    // Afficher les articles dans un <table>
    foreach ($datas as $key => $article){
        echo("<tr>");
            echo("<td><a href='/articleUpdate.php?Id=".$article["Id"]."'>".$article["Id"]."</a></td>");
            echo("<td>".$article["Titre"]."</td>");
        echo("<td><a href='/articleDelete.php?Id=".$article["Id"]."'>SUPPRIMER [X]</a></td>");

        echo("</tr>");
    }
    echo("</table>");
 ?>


<?php require("_baseHTML2.php"); ?>







