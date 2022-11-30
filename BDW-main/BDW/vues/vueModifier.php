<link rel="stylesheet" href="css/creer.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container p-5 border bg-dark text-white">
    <h2> Modifier votre liste de chansons</h2>
</div>
<br>

<form method="post" class ="container-fluid mt-3">
    <div class="mb-3">
        <label for="nom" class="form-label">Indiquer votre nom de liste</label>
        <input type="text" name="nom" id="nom" placeholder="Nom de liste" class ="form-control">
    </div>
    <input type="submit" name="boutonValider" id="boutonValider" value="Chercher" class="btn btn-success mt-2"/>

</form>
<?php if (isset($message)) { ?>
<p style="background-color: red;">
    <?= $message ?>
</p>
<?php } ?>
<?php if (isset($form)) { ?>
<p style="background-color: green;" class ="container p-2 border bg-info text-success">
    <?= $form ?>
</p>
<?php } ?>