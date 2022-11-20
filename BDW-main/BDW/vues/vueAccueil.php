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
    <h2>Top 1 chansons by plays</h2>
    <ul>
        <?php foreach ($top1 as $top1C) { ?>
            <li><?= $top1C['title'] ?></li>
            <?php } ?>
    </ul>
    <h2>Top 1 artist by plays</h2>
    <ul>
        <?php foreach ($top1 as $top1A) { ?>
            <li><?= $top1A['artist'] ?></li>
            <?php } ?>
    </ul>
    <h2>Top 1 album by plays</h2>
    <ul>
        <?php foreach ($top1 as $top1Al) { ?>
            <li><?= $top1Al['album'] ?></li>
            <?php } ?>
    </ul>
   
    <h2>Top 5 chansons by plays</h2>
    <ul>
        <?php foreach ($chansons as $chanson) { ?>
            <li><?= $chanson['title'] ?></li>
            <?php } ?>
    </ul>

    <h2>Top 5 artist by plays</h2>
    <ul>
        <?php foreach ($chansons as $artist) { ?>
            <li><?= $artist['artist'] ?></li>
            <?php } ?>
    </ul>

    <h2>Top 5 Album by plays</h2>
    <ul>
        <?php foreach ($chansons as $album) { ?>
            <li><?= $album['album'] ?></li>
            <?php } ?>
    </ul>

    <h2>Top 5 Genres </h2>
    <ul>
        <?php foreach ($genres as $genre) { ?>
            <li><?= $genre['genre'] ?></li>
            <?php } ?>
    </ul>

</main>