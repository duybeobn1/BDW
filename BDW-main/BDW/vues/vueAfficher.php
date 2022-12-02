<link rel="stylesheet" href="css/creer.css" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

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