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
        <?php for ($i = 0; $i < 50; $i++) { { ?>
        <li>
            <?= $chansons[$i]['title'] ?> || <?= $chansons[$i]['album'] ?> || <?= $chansons[$i]['artist'] ?> || <?=
                            $chansons[$i]['track'] ?>
                            || <?= $chansons[$i]['year'] ?> || <?= $chansons[$i]['genre'] ?> ||
        </li>
        <?php
            }
        } ?>
    </ul>


</main>