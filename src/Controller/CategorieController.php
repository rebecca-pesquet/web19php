<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\BDD;
use src\Model\Categorie;

class CategorieController extends AbstractController {

    public function Add(){
        if($_POST){
            $objCategorie = new Categorie();
            $objCategorie->setIcon($_POST["Icon"]);
            $objCategorie->setLibelle($_POST["Libelle"]);

            //Exécuter l'insertion
            $id = $objCategorie->SqlAdd(BDD::getInstance());

            // Redirection
            header("Location:/Categorie/show/$id");
        }else{
            return $this->twig->render("Categorie/add.html.twig");
        }


    }

public function All(){
    $categorie = new Categorie();
    $datas = $categorie->SqlGetAll(BDD::getInstance());

    return $this->twig->render("Categorie/all.html.twig", [
        "categorieList"=>$datas
    ]);
}

public function Show($id){
    $categorie = new Categorie();
    $datas = $categorie->SqlGetById(BDD::getInstance(),$id);

    return $this->twig->render("Categorie/show.html.twig", [
        "categorie"=>$datas
    ]);
}

public function Delete($id){
    $categorie = new Categorie();
    $datas = $categorie->SqlDeleteById(BDD::getInstance(),$id);

    header("Location:/Categorie/All");
}

public function Update($Id)
{
    $categorie = new Categorie();
    $datas = $categorie->SqlGetById(BDD::getInstance(), $Id);


    if ($_POST) {
        $objCategorie = new Categorie();
        $objCategorie->setIcon($_POST["Icon"]);
        $objCategorie->setLibelle($_POST["Libelle"]);
        $objCategorie->setId($Id);

        //Exécuter la mise à jour
        $objCategorie->SqlUpdate(BDD::getInstance());

header("Location:/Categorie/show/$Id");
    } else {
        return $this->twig->render("categorie/update.html.twig", [
            "categorie" => $datas
        ]);
    }

}

public function Fixtures()
{
    //Vider la table
    $categorie = new Categorie();
    $categorie->SqlTruncate(BDD::getInstance());
}}






