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


    <h2>Top 5 chanson ecoute : </h2>
    <ul>
        <?php foreach ($chanson5 as $chanson) { ?>
        <li>
            <?= $chanson['title'] ?>
        </li>
        <?php } ?>
    </ul>

    <h2>Top 5 genres ecoute : </h2>
    <ul>
        <?php foreach ($genres5 as $genre) { ?>
        <li>
            <?= $genre['genre'] ?>
        </li>
        <?php } ?>
    </ul>
    <h2>Top 5 artist ecoute : </h2>
    <ul>
        <?php foreach ($artist5 as $artist) { ?>
        <li>
            <?= $artist['artist'] ?>
        </li>
        <?php } ?>
    </ul>

    <h2>Top 5 plus recente chanson </h2>
    <ul>
        <?php foreach ($recentChanson5 as $recentChanson) { ?>
        <li>
            <?= $recentChanson['title'] ?>
        </li>
        <?php } ?>
    </ul>
    <h2>Top 1 album</h2>
    <ul>
        <li>
            <?= $album1?>
        </li>
    </ul>
    <h2>Top 1 chanson</h2>
    <ul>
        <li>
            <?= $chanson1?>
        </li>
    </ul>
</main>