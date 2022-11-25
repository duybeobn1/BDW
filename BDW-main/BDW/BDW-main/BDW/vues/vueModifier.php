<h2> Modifier votre liste de chansons</h2>
<br>

<form method="post">
    <label for="id">Indiquer votre nom de liste</label><br>
    <input type = "text" name="nom" id="nom" placeholder = "Nom de liste" ><br>
    <input type="submit" name="boutonValider" id="boutonValider" value="Chercher"/>    
</form>
<?php if(isset($message)) { ?>
	<p style="background-color: red;"><?= $message ?></p>
<?php } ?>
<?php if(isset($form)) { ?>
	<p style="background-color: red;"><?= $form ?></p>
<?php } ?>