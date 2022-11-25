<main>

    <table>
        <tr>
            <th>Nom Chanson</th>
            <th>Genre</th>
            <th>Duree</th>
            <th>Groupe</th>
        </tr>
<?php for($i = 0 ; $i < $nb; $i++) {
            ?>
            <tr>
            <th><?= $Chanson[$i]['nom'] ?></th>
            <th><?= $Chanson[$i]['genre'] ?></th>
            <th><?= $Chanson[$i]['durée'] ?></th>
            <th><?= $Chanson[$i]['groupe'] ?></th>
            <th><form method="post">
                <button type="submit" name="boutonValider" value=<?= $i?>>X</button>
            </form>
            </th>
            </tr>
            <?php 
            } ?>
        <tr>
            <form method="post">
            <th><input type = "text" name="titre" id="titre" placeholder = "Titre" ></th>
            <th><input type = "text" name="dates" id="dates" placeholder = "Dates" required></th>
            <th><input type = "text" name="duree" id="duree" placeholder = "Durée" required></th>
            <th><input type = "text" name="nomFichier" id="nomFichier" placeholder = "Nom de Fichier" value ="A remplir" required></th>
            </form>
        </tr>
    </table>    
    <?php if(isset($message)) { ?>
	<p style="background-color: red;"><?= $message ?></p>
<?php } ?>
</main>