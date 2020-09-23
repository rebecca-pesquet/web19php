<?php require("config.php"); ?>
<?php require("_baseHTML1.php"); ?>
<?php
    // https://github.com/fabienlierville/web19php
    //1. : Récupérer l'ID dans l'url
    $Id = $_GET["Id"];
    //2. : Faire une requete SELECT Pour aller chercher l'article en question
    $requete = $bdd->prepare("SELECT * FROM articles where Id= :Id");
    $requete->execute([
            "Id" => $Id
    ]);
    $article = $requete->fetch();
    //3. Renseigner les champs du formulaire avec les données issues de la requete

?>

<h1>Modification de l'article :</h1>
<form method="post">
    <input type="text" name="Titre" value="<?php echo $article["Titre"] ?>">

    <textarea name="Description">
        <?php echo $article["Description"]; ?>
    </textarea>
    <input type="date" name="DateAjout" value="<?php echo $article["DateAjout"] ?>">

    <select name="Auteur">
        <?php $selected = ($article["Auteur"]=="Rebecca") ? "selected":""; ?>
        <option <?php echo $selected; ?>>Rebecca</option>
        <?php $selected = ($article["Auteur"]=="Alexandre") ? "selected":""; ?>
        <option <?php echo $selected; ?>>Alexandre</option>
        <?php $selected = ($article["Auteur"]=="Emilie") ? "selected":""; ?>
        <option <?php echo $selected; ?>>Emilie</option>
        <?php $selected = ($article["Auteur"]=="Léo") ? "selected":""; ?>
        <option <?php echo $selected; ?>>Léo</option>
        <?php $selected = ($article["Auteur"]=="Aegir") ? "selected":""; ?>
        <option <?php echo $selected; ?>>Aegir</option>
    </select>

    <input type="submit" value="Enregistrer les modifications">
</form>

<?php require("_baseHTML2.php"); ?>