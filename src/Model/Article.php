<?php
namespace src\Model;

class Article {
    private $Id;
    private $Titre;
    private $Desription;
    private $DateAjout;
    private $Auteur;
    private $ImageRepository;
    private $ImageFileName;

    /**
     * Cette fonction retourne les X premiers mots de la description
     * @param $limitWord = LA limite en question
     * @return string
     */
    public function getShortDesc($limitWord){
        $arr = explode(' ',trim($this->Desription));
        $arrayFirst = array_slice($arr, 0, $limitWord);
        return implode(" ", $arrayFirst);
    }

    public function SqlAdd(\PDO $bdd){
        try {
            $requete = $bdd->prepare("INSERT INTO articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFilename) VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFilename)");

            $requete->execute([
                "Titre" => $this->getTitre(),
                "Description" => $this->getDesription(),
                "DateAjout" => $this->getDateAjout(),
                "Auteur" => $this->getAuteur(),
                "ImageRepository" => $this->getImageRepository(),
                "ImageFilename" => $this->getImageFileName(),
            ]);
            return "SqlAdd = OK";
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }

    /**
     * Récupère tous les articles
     * @param \PDO $bdd
     * @return array
     */
    public function SqlGetAll(\PDO $bdd){
        $requete = $bdd->prepare("SELECT * FROM articles");
        $requete->execute();
        $datas =  $requete->fetchAll(\PDO::FETCH_ASSOC);
        $listArticle = [];
        foreach ($datas as $key => $article) {
            // Créer un objet Article
            $objArticle = new Article();
            // Lui affecter les valeurs
            $objArticle->setTitre($article["Titre"]);
            $objArticle->setDesription($article["Description"]);
            $objArticle->setDateAjout($article["DateAjout"]);
            $objArticle->setAuteur($article["Auteur"]);
            $objArticle->setImageRepository($article["ImageRepository"]);
            $objArticle->setImageFileName($article["ImageFileName"]);
            $objArticle->setId($article["Id"]);
            // l'insérer dans le tableau à retourner
            $listArticle[] = $objArticle;
        }

        return $listArticle;


    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return Article
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->Titre;
    }

    /**
     * @param mixed $Titre
     * @return Article
     */
    public function setTitre($Titre)
    {
        $this->Titre = $Titre;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDesription()
    {
        return $this->Desription;
    }

    /**
     * @param mixed $Desription
     * @return Article
     */
    public function setDesription($Desription)
    {
        $this->Desription = $Desription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateAjout()
    {
        return $this->DateAjout;
    }

    /**
     * @param mixed $DateAjout
     * @return Article
     */
    public function setDateAjout($DateAjout)
    {
        $this->DateAjout = $DateAjout;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuteur()
    {
        return $this->Auteur;
    }

    /**
     * @param mixed $Auteur
     * @return Article
     */
    public function setAuteur($Auteur)
    {
        $this->Auteur = $Auteur;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageRepository()
    {
        return $this->ImageRepository;
    }

    /**
     * @param mixed $ImageRepository
     * @return Article
     */
    public function setImageRepository($ImageRepository)
    {
        $this->ImageRepository = $ImageRepository;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImageFileName()
    {
        return $this->ImageFileName;
    }

    /**
     * @param mixed $ImageFileName
     * @return Article
     */
    public function setImageFileName($ImageFileName)
    {
        $this->ImageFileName = $ImageFileName;
        return $this;
    }





}