<?php
namespace src\Model;

class Categorie {
    private $Id;
    private $Icon;
    private $Libelle;



    public function SqlAdd(\PDO $bdd){
        try {
            $requete = $bdd->prepare("INSERT INTO categorie (Icon, Libelle) VALUES(:Icon, :Libelle)");

            $requete->execute([
                "Icon" => $this->getIcon(),
                "Libelle" => $this->getLibelle(),
            ]);
            return $bdd->lastInsertId();
        }catch (\Exception $e){
            return $e->getMessage();
        }

    }

    public function SqlUpdate(\PDO $bdd){
        try {
            $requete = $bdd->prepare("UPDATE categorie set Icon= :Icon, Libelle = :Libelle WHERE Id = :Id");

            $requete->execute([
                "Icon" => $this->getIcon(),
                "Libelle" => $this->getLibelle(),
                "Id" => $this->getId()
            ]);
            return "OK";
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
        $requete = $bdd->prepare("SELECT * FROM categorie");
        $requete->execute();
        //$datas =  $requete->fetchAll(\PDO::FETCH_ASSOC);
        $datas =  $requete->fetchAll(\PDO::FETCH_CLASS,'src\Model\Categorie');
        return $datas;

    }

    public function SqlGetById(\PDO $bdd, $Id){
        $requete = $bdd->prepare("SELECT * FROM categorie WHERE Id=:Id");
        $requete->execute([
            "Id" => $Id
        ]);
        $requete->setFetchMode(\PDO::FETCH_CLASS,'src\Model\Categorie');
        $categorie = $requete->fetch();

        return $categorie;
    }

    public function SqlDeleteById(\PDO $bdd, $Id){
        $requete = $bdd->prepare("DELETE FROM categorie WHERE Id=:Id");
        $requete->execute([
            "Id" => $Id
        ]);
        return true;
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
    public function getIcon()
    {
        return $this->Icon;
    }

    /**
     * @param mixed $Icon
     * @return Categorie
     */
    public function setIcon($Icon)
    {
        $this->Icon = $Icon;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getLibelle()
    {
        return $this->Libelle;
    }

    /**
     * @param mixed $Libelle
     * @return Categorie
     */
    public function setLibelle($Libelle)
    {
        $this->Libelle = $Libelle;
        return $this;
    }

}