<link rel="stylesheet" href="css/creer.css" />
<div class="container p-5 border bg-dark text-white">
    <h2> Modifier votre liste de chansons</h2>
</div>
<br>

<form method="post" class="container-fluid mt-3">
    <div class="mb-3">
        <label for="nom" class="form-label">Indiquer votre nom de liste</label>
        <input type="text" name="nom" id="nom" placeholder="Nom de liste" class="form-control">
    </div>
    <input type="submit" name="boutonValider" id="boutonValider" value="Chercher" class="btn btn-success mt-2" />

</form>


<?php if ($message != "") { ?>
<p class="m-4 p-3 border bg-dark text-white">
    <?= $message ?>
</p>
<?php } ?>