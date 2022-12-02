<link rel="stylesheet" href="css/creer.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="container p-5 border bg-dark text-white">
        <h2>Création d'une liste aléatoire</h2>
    </div>
    <form method="post" class="container-fluid mt-3">
        <div class="mb-3">
            <label for="Titre" class="form-label"> Nom  </label>
            <input type="text" name="nom" id="nom" placeholder="Indiquer le nom de la liste" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Titre" class="form-label"> Genre  </label>
            <input type="text" name="genre" id="genre" placeholder="Indiquer le genre de la liste"
                class="form-control">
        </div>
        <div class="mb-3">
            <label for="Titre" class="form-label"> Durée </label>
            <input type="text" name="duree" id="duree" placeholder="Indiquer la durée de la liste"
                class="form-control">
        </div>
        <div class="form-check">
            <input type="radio" id="plusJouees" name="prefere" value="1ere" class="form-check-input">
            <label for="plusJouees" class="form-check-label"> Chansons les plus jouées </label>
        </div>
        <div class="form-check">
            <input type="radio" id="plusSautees" name="prefere" value="2eme" class="form-check-input">
            <label for="plusSautees" class="form-check-label"> Chansons les plus sautées </label>
        </div>
        <div class="form-check">
            <input type="radio" id="plusRecemments" name="prefere" value="3eme" class="form-check-input">
            <label for="plusRecemments" class="form-check-label"> Chanson les plus jouées récemment </label>
        </div>
        <div class="form-check">
            <input type="radio" id="non" name="prefere" value="4eme" checked class="form-check-input">
            <label for="non" class="form-check-label"> Aucune préférence </label>
        </div>
        <input type="submit" name="boutonValider" id="boutonValider" value="Créer" class="btn btn-success mt-2"/>

    </form>
    <?php if (isset($message)) { ?>
    <p style="background-color: red;">
        <?= $message ?>
    </p>
    <?php } ?>