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
    </table>   
    
    <?php if(isset($message)) { ?>
	<p style="background-color: red;"><?= $message ?></p>
<?php } ?>
</main>