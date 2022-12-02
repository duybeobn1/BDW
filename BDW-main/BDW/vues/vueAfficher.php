<link rel="stylesheet" href="css/creer.css" />
<div class="container p-5 my-5 border bg-dark text-white">
    <h2>List des chansons ( <?=$nb?> Chansons) </h2>
</div>
<?php

if ($nb <= 0) {
    $message = "Aucune chanson n'a ete trove dans la base de données";
} else
    $message = "Il y a $nb chansons dans la base";
?>

<table class="table table-striped table-dark table-bordered" style="text-align:center;">
<thread class="thread-dark">
    <tr>
        <th scope="row">#</th>
        <th scope="row">Titre</th>
        <th scope="row">Album</th>
        <th scope="row">Groupe</th>
        <th scope="row">Track</th>
        <th scope="row">Dates</th>
        <th scope="row">Genre</th>
    </tr>
</thread>
<?php for ($i = 0; $i < 100; $i++) { { ?>
<tr>
    <th scope="row"><?=$i+1?></th>
    <td><?= $chansons[$i]['titre'] ?></td>
    <td><?= $chansons[$i]['album'] ?></td>
    <td><?= $chansons[$i]['groupe'] ?></td>
    <td><?= $chansons[$i]['track'] ?></td>
    <td><?= $chansons[$i]['dates'] ?></td>
    <td><?= $chansons[$i]['genre'] ?></td>
</tr>
<?php
        }
    } ?>
</table>