<link rel="stylesheet" href="css/creer.css" />
<div class="container p-5 border bg-dark text-white">
    <h2>Informations sur l'importation</h2>
</div>

<table class="table table-striped table-dark table-bordered mt-4" style="text-align:center;">
    <thread class="thread-dark">
        <tr>
            <th scope="col">Nb Version</th>
            <th scope="col">Nb Chanson</th>
            <th scope="col">Nb Groupe</th>
            <th scope="col">Nb Genre</th>
        </tr>
    </thread>
    <tr>
        <td>
            <?= $nbVersion ?>
        </td>
        <td>
            <?= $nbChanson ?>
        </td>
        <td>
            <?= $nbGroupe ?>
        </td>
        <td>
            <?= $nbGenre ?>
        </td>
    </tr>
</table>