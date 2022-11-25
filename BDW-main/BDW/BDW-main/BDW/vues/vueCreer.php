<main>
    <form method="post">
        <label>Creer une liste aleatoire</label>
        <br>
        <input type="text" name="nom" id="nom" placeholder="indiquer le nom de votre liste">
        <br>
        <input type="text" name="genre" id="genre" placeholder="indiquer le genre que vous preferez"> 
        <br>
        <input type="text" name="duree" id="duree" placeholder="indiquer le temps de votre liste en minutes">
        <br>
        <input type="radio" id="plusJouees" name="prefere" value="1ere">
        <label for="plusJouees"> Je prefere les plus jouees chansons dans la table. </label><br> 
        <input type="radio" id="plusSautees" name="prefere" value="2eme">
        <label for="plusSautees"> Je prefere les plus jouees chansons dans la table. </label><br> 
        <input type="radio" id="plusRecemments" name="prefere" value="3eme">
        <label for="plusRecemments"> Je prefere les plus jouees recemments dans la table. </label><br>
        <input type="radio" id="non" name="prefere" value="4eme" checked>
        <label for="non"> Rien </label><br>  
        <input type="submit" name="boutonValider" id="boutonValider" value="Creer"/>

    </form>
    <?php if(isset($message)) { ?>
	<p style="background-color: red;"><?= $message ?></p>
<?php } ?>
</main>

