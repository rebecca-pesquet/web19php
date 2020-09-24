<?php
/*
 * Autoloader de Classe
 */
function chargerClasse($classe){
    //Séparateur répertoire : "\" "/"
    $ds = DIRECTORY_SEPARATOR;
    $dir = __DIR__.$ds."..";
    $className = str_replace("\\",$ds,$classe);

    $file = "{$dir}{$ds}{$className}.php";

    if(is_readable($file)){
        require_once $file;
    }

}
spl_autoload_register("chargerClasse");

// Ajout d'un article en Database
$hostname="localhost";
$username="root";
$password="";
$dbname="cesiblog";

try
{
    $bdd = new PDO('mysql:host='.$hostname.';dbname='.$dbname.';charset=utf8', $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


use src\Model\Article;
$article = new Article();
$article->setTitre("Le MVC c'est la vie")->setDateAjout("2020-08-24");
$sql = $article->SqlAdd();

