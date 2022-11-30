<link rel="stylesheet" href="css/creer.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <div class="container p-5 border bg-dark text-white">
        <h2>Creer une liste aleatoire</h2>
    </div>
    <form method="post" class="container-fluid mt-3">
        <div class="mb-3">
            <label for="Titre" class="form-label"> Nom de Liste </label>
            <input type="text" name="nom" id="nom" placeholder="indiquer le nom de votre liste" class="form-control">
        </div>
        <div class="mb-3">
            <label for="Titre" class="form-label"> Genre de Liste </label>
            <input type="text" name="genre" id="genre" placeholder="indiquer le genre que vous preferez"
                class="form-control">
        </div>
        <div class="mb-3">
            <label for="Titre" class="form-label"> Temps de Liste </label>
            <input type="text" name="duree" id="duree" placeholder="indiquer le temps de votre liste en minutes"
                class="form-control">
        </div>
        <div class="form-check">
            <input type="radio" id="plusJouees" name="prefere" value="1ere" class="form-check-input">
            <label for="plusJouees" class="form-check-label"> Je prefere les plus jouees chansons dans la table. </label>
        </div>
        <div class="form-check">
            <input type="radio" id="plusSautees" name="prefere" value="2eme" class="form-check-input">
            <label for="plusSautees" class="form-check-label"> Je prefere les plus jouees chansons dans la table. </label>
        </div>
        <div class="form-check">
            <input type="radio" id="plusRecemments" name="prefere" value="3eme" class="form-check-input">
            <label for="plusRecemments" class="form-check-label"> Je prefere les plus jouees recemments dans la table. </label>
        </div>
        <div class="form-check">
            <input type="radio" id="non" name="prefere" value="4eme" checked class="form-check-input">
            <label for="non" class="form-check-label"> Rien </label>
        </div>
        <input type="submit" name="boutonValider" id="boutonValider" value="Creer" class="btn btn-success mt-2"/>

    </form>
    <?php if (isset($message)) { ?>
    <p style="background-color: red;">
        <?= $message ?>
    </p>
    <?php } ?>
