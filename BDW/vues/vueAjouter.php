<h2>Ajouter nouvelle version</h2>

<form method = "post"action="#">
    <label for="informations"> Informations de version </label>
    <br>
    <input type = "text" name="titre" id="titre" placeholder = "Titre" value ="A remplir"required>
    <br>
    <input type = "text" name="dates" id="dates" placeholder = "Dates" value ="A remplir" required>
    <br>
    <input type = "text" name="duree" id="duree" placeholder = "Durée" value ="A remplir" required>
    <br>
    <input type = "text" name="nomFichier" id="nomFichier" placeholder = "Nom de Fichier" value ="A remplir" required>
    <br> 
    <select name="groupe" id="groupe" placeholder = "Groupe" >
    <?php foreach ($songs2000 as $groupe) { ?>
            <option value =<?= $groupe['artist'] ?>><?= $groupe['artist'] ?></option>
            <?php } ?>
    </select>
    <br>
    <select name="genres" id="genres" placeholder = "Genres">
    <?php foreach ($songs2000 as $genre) { ?>
            <option value =<?= $genre['genre'] ?>><?= $genre['genre'] ?></option>
            <?php } ?>
    </select>
    <br>
    <input type="submit" name="boutonValider" value="Ajouter"/>
</form><?php if(isset($message)) { ?>
	<p style="background-color: yellow;"><?= $message ?></p>
<?php } ?>
