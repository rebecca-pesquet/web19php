<?php
namespace src\Controller;

use src\Model\Article;
use src\Model\BDD;

class ArticleController extends AbstractController {

    public function Add(){
        if($_POST){

        }else{
            return $this->twig->render("Article/add.html.twig");
        }
        /*Si le formulaire est posté :
            -> Ajouter l'article en BDD
            -> Rediriger l'internaute vers la page qui permet d'afficher l'article
        Sinon :
            -> Afficher le formulaire
        */

    }

    public function All(){
        $articles = new Article();
        $datas = $articles->SqlGetAll(BDD::getInstance());

        return $this->twig->render("Article/all.html.twig", [
            "articleList"=>$datas
        ]);
    }

    public function Show($id){
        $articles = new Article();
        $datas = $articles->SqlGetById(BDD::getInstance(),$id);

        return $this->twig->render("Article/show.html.twig", [
            "article"=>$datas
        ]);
    }

    public function Fixtures(){
        //Vider la table
        $article = new Article();
        $article->SqlTruncate(BDD::getInstance());

//Tableau "Jeu de donnée"
        $Titres = ["PHP en force", "Java en baisse", "JS un jour ça marchera", "Flutter valeur montante", "GO le futur"];
        $Prenoms = ["Rebecca", "Alexandre", "Emilie", "Léo", "Aegir"];
        $datedujour = new \DateTime();
        for($i = 0;$i < 200;$i++){
            $datedujour->modify("+1 day");
            shuffle($Titres);
            shuffle($Prenoms);

            //Objet Article
            $objArticle = new Article();
            $objArticle->setTitre($Titres[0]);
            $objArticle->setDecsription("Ceci est une excellent description");
            $objArticle->setDateAjout($datedujour->format("Y-m-d"));
            $objArticle->setAuteur($Prenoms[0]);

            //Exécuter l'insertion
            $objArticle->SqlAdd(BDD::getInstance());
        }
        header("Location:/?controller=Article&action=All");
    }

}