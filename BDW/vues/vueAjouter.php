<link rel="stylesheet" href="css/creer.css" />
<div class="container p-5 my-5 border bg-dark text-white">
        <h2>Ajouter nouvelle version</h2>
</div>

<form method="post" class="container mt-3">

        <div class="mb-3">
                <label for="Titre" class="form-label"> Titre de Chanson </label>
                <input type="text" name="titre" id="titre" placeholder="Titre" class="form-control">
        </div>
        <div class="mb-3">
                <label for="dates" class="form-label"> Dates de creation de Chanson </label>
                <input type="text" name="dates" id="dates" placeholder="Dates" class="form-control">
        </div>
        <div class="mb-3">
                <label for="duree" class="form-label"> Duree de Chanson </label>
                <input type="text" name="duree" id="duree" placeholder="Durée" class="form-control" required>
        </div>
        <div class="mb-3">
                <label for="nomFichier" class="form-label">Nom de Fichier de Chanson</label>
                <input type="text" name="nomFichier" id="nomFichier" placeholder="Nom de Fichier" class="form-control"
                        required>
        </div>
        <label for="groupe" class="form-label">Artist de Chanson </label>
        <select name="groupe" id="groupe" placeholder="Groupe" class="form-select mb-3">
                <?php foreach ($groupeS as $groupe) { ?>
                <option value=<?= $groupe['nom'] ?>><?= $groupe['nom'] ?>
                </option>
                <?php } ?>
        </select>
        <label for="genres" class="form-label">Genres de Chanson </label>
        <select name="genres" id="genres" placeholder="Genres" class="form-select mb-3">
                <?php foreach ($arrayGenres as $genre) { ?>
                <option value=<?= $genre['genre'] ?>><?= $genre['genre'] ?>
                </option>
                <?php } ?>
        </select>

        <input type="submit" name="boutonValider" id="boutonValider" value="Ajouter" class="btn btn-success" />

</form>
<?php if ($message != "") { ?>
<p class="m-4 p-3 border bg-dark text-white">
        <?= $message ?>
</p>
<?php } ?>