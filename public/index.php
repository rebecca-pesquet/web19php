<?php

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

use src\Model\Article;

$article = new Article();
