<?php
require ("config.php"); //Pour avoir entre autre la connexion à la BDD

//Traitement du fichier
// Si il y'a un fichier alors faire le traitement
if(!empty($_FILES['image']['name'])){
    //1. Récupérer l'extension tu fichier (jpeg, png ...)
    $extension = pathinfo($_FILES['image']["name"],PATHINFO_EXTENSION);
    //2. Renommer le fichier à notre façon à nous
    $nomImage = md5(uniqid()).".". $extension;
    //3. Créer le répertoire où sera stocké le fichier
    $dateNow = new DateTime();
    $sqlRepository = $dateNow->format("Y/m");
    $repository = "./uploads/images/".$sqlRepository;
    //Le répertoire sera ./uploads/images/2020/09
    //3.1 Si le répertoire n'existe pas => le créer
    if(!is_dir($repository)){
        mkdir($repository,0777,true);
    }
    //4. Copier le fichier dans le répertoire et renseigner les variable pour les champs (ImageRepository et Filename) de la base de données
    move_uploaded_file($_FILES['image']["tmp_name"],$repository."/".$nomImage);

}



$requete = $bdd->prepare("INSERT INTO articles (Titre, Description, DateAjout, Auteur, ImageRepository, ImageFilename) VALUES(:Titre, :Description, :DateAjout, :Auteur, :ImageRepository, :ImageFilename)");

$requete->execute([
    "Titre" => $_POST["Titre"],
    "Description" => $_POST["Description"],
    "DateAjout" => $_POST["DateAjout"],
    "Auteur" => $_POST["Auteur"],
    "ImageRepository" => $sqlRepository,
    "ImageFilename" => $nomImage,
]);

$lastId = $bdd->lastInsertId();

header("Location:/articleUpdate.php?Id=".$lastId);

