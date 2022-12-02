<link rel="stylesheet" href="css/creer.css" />
<p class="m-4 p-3 border bg-dark text-white" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    En train de jouer : Liste <?= $nom ?>
</p>
<table class="table table-striped table-dark table-bordered" style="text-align:center;">
    <thread class="thread-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom Chanson</th>
            <th scope="col">Genre</th>
            <th scope="col">Duree</th>
            <th scope="col">Groupe</th>
            <th scope="col">X</th>
        </tr>
    </thread>
    <?php for ($i = 0; $i < $nb; $i++) {
    ?>
    <tr>
        <th scope="row">
            <?= $i + 1 ?>
        </th>
        <td>
            <?= $Chanson[$i]['titre'] ?>
        </td>
        <td>
            <?= $Chanson[$i]['genre'] ?>
        </td>
        <td>
            <?= $Chanson[$i]['durée'] ?>
        </td>
        <td>
            <?= $Chanson[$i]['groupe'] ?>
        </td>
        <td>
            <form method="post">
                <button class="btn btn-danger" type="submit" name="boutonValider" value=<?= $i ?>>X</button>
            </form>
        </td>
    </tr>
    <?php
    } ?>
</table>
<div class="container p-5 border bg-dark text-white mt-5">
    <h2> Ajouter chansons dans votre liste</h2>
</div>
<div class="container">
    <form method="post" class="container-fluid mt-3">
        <div class="mb-3">
            <label for="titre" class="form-label">Indiquer le titre de la Chanson</label>
            <input type="text" name="titre" id="titre" placeholder="Titre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="dates" class="form-label">Indiquer la date de creation de la Chanson</label>
            <input type="text" name="dates" id="dates" placeholder="Date de creation" class="form-control">
        </div>
        <div class="mb-3">
            <label for="duree" class="form-label">Indiquer la duree de la Chanson</label>
            <input type="text" name="duree" id="duree" placeholder="Durée" required class="form-control">
        </div>
        <div class="mb-3">
            <label for="nomFicher" class="form-label">Indiquer le nom de fichier de la Chanson</label>
            <input type="text" name="nomFicher" id="nomFicher" placeholder="Nom de Ficher" required
                class="form-control">
        </div>
        <div class="mb-3">
            <label for="groupe" class="form-label">Indiquer le groupe de la Chanson</label>
            <input type="text" name="groupe" id="groupe" placeholder="Groupe" class="form-control">
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Indiquer les genres de la Chanson</label>
            <input type="text" name="genre" id="genre" placeholder="Genre" class="form-control">
        </div>
        <button type="submit" name="boutonAjouter" value=ajouter class="btn btn-success mt-2">Ajouter Dans Votre
            Liste</button>
    </form>
</div>
<?php if ($message != "") { ?>
<p class="m-4 p-3 border bg-dark text-white">
    <?= $message ?>
</p>
<?php } ?>