<?php require("_baseHTML1.php"); ?>

    <h1>Ajout de l'article :</h1>
    <form method="post" action="articleAdd.php">
        <input type="text" name="Titre">
        <textarea name="Description">
        </textarea>
        <input type="date" name="DateAjout" >
        <select name="Auteur">
            <option >Rebecca</option>
            <option >Alexandre</option>
            <option >Emilie</option>
            <option>Léo</option>
            <option >Aegir</option>
        </select>
        <input type="submit" value="Enregistrer les modifications">
    </form>

<?php require("_baseHTML2.php"); ?>