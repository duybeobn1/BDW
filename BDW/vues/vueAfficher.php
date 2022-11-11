<main>
    <?php

    if ($nb <= 0) {
        $message = "Aucune chanson n'a ete trove dans la base de données";
    } else
        $message = "Il y a $nb chansons dans la base";
    ?>
    <div>
        <p>
            <?= $message; ?>
        </p>
    </div>

    <h2>List des chansons</h2>
    <ul>
    Format : titre|album|artist|trasck|year|genre
        <?php foreach ($chansons as $chanson) { ?>
            <li><?= $chanson['title'] ?> || <?= $chanson['album'] ?> || <?= $chanson['artist'] ?> || <?= $chanson['track'] ?>
            || <?= $chanson['year'] ?> || <?= $chanson['genre'] ?> || </li>
            <?php } ?>
    </ul>


</main>