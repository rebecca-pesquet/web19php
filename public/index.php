<?php
require_once "../vendor/autoload.php";

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

/**
 * ROUTEUR
 */
$controller = (isset($_GET["controller"])) ? $_GET["controller"] : '';
$action = (isset($_GET["action"])) ? $_GET["action"] : '';
$param = (isset($_GET["param"])) ? $_GET["param"] : '';

if($controller <> '') {
    $class = "src\Controller\\{$controller}Controller";
    if(class_exists($class)){
        $ctrl = new $class;
        if(method_exists($class,$action)){
            echo $ctrl->$action($param);
        }else{
            //Gérer le cas où la méthode n'existe pas
        }
    }else{
        // Route par défaut
        $ctrl = new \src\Controller\DefaultController();
        echo $ctrl->index();
    }

}else{
    // Route par défaut
    $ctrl = new \src\Controller\DefaultController();
    echo $ctrl->index();
}
