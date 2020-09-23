<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>

<h1>Recherche :</h1>
<form action="articleSearch.php" method="post">
    <input type="text" name="search">
</form>

<h1>Tous les articles :</h1>

<?php
    $requete = $bdd->query("SELECT * FROM articles") ;
var_dump($requete);
    $datas = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($datas);

    echo("<table>");
    // Afficher les articles dans un <table>
    foreach ($datas as $key => $article){
        echo("<tr>");
            echo("<td>".$article["Id"]."</td>");
            echo("<td>".$article["Titre"]."</td>");
            echo("<td>".$article["Description"]."</td>");
            echo("<td>".$article["DateAjout"]."</td>");
            echo("<td>".$article["Auteur"]."</td>");

        echo("</tr>");
    }
    echo("</table>");
 ?>


<?php require("_baseHTML2.php"); ?>







