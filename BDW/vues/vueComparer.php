<link rel="stylesheet" href="css/creer.css" />
<div class="container p-5 my-5 border bg-dark text-white">
    <h2>Liste des Liste ( <?= $nbListe ?> Listes) </h2>
</div>

<table class="table table-striped table-dark table-bordered" style="text-align:center;">
    <thread class="thread-dark">
        <tr>
            <th scope="row">#</th>
            <th scope="row">Nom Liste</th>
            <th scope="row">Id Liste</th>
            <th scope="row">Duration</th>
            <th scope="row">Modifier</th>
        </tr>
    </thread>
    <?php $i = 1 ?>
    <?php foreach ($liste as $listeI) { { ?>
    <tr>
        <th scope="row">
            <?= $i ?>
        </th>
        <td>
            <?= $listeI['nom'] ?>
        </td>
        <td>
            <?= $listeI['idL'] ?>
        </td>
        <td>
            <?= $listeI['duree'] ?>
        </td>
        <td>
            <a href="index.php?page=gerer&nom=<?= $listeI['nom'] ?>">Modifier</a>
        </td>
        <?php $i++ ?>
    </tr>
    <?php
        }
    } ?>
</table>
<div class="container p-5 my-5 border bg-dark text-white">
    <h2>Comparer deux listes </h2>
</div>
<form method="post">
    <div class="row">
        <div class="col-md-5" style="margin-left:5rem;">
            <select class="form-select" name="select1" id="select1">
                <option selected value=0 name="select1">Open this select menu</option>
                <?php $i = 1 ?>
                <?php foreach ($liste as $listeI) { { ?>
                    <?= $i ?>
                <option value=<?=$i?> name="select1"><?= $listeI['nom'] ?></option>
                <?php $i++ ?>
                <?php
                    }
                } ?>
            </select>
        </div>
        <div class="col-md-1 " style="text-align: center ">
            <button class="btn btn-danger text-white" name="boutonValider" id="boutonValider">Comparer</button>
        </div>
        <div class="col-md-5" style="margin-right: 1rem;">
        <select class="form-select" name="select2">
                <option selected value=0 name="select2">Open this select menu</option>
                <?php $i = 1 ?>
                <?php foreach ($liste as $listeI) { { ?>
                    <?= $i ?>
                <option value=<?=$i?> name="select2"><?= $listeI['nom'] ?></option>
                <?php $i++ ?>
                <?php
                    }
                } ?>
            </select>
        </div>
    </div>
</form>

<?php if ($message != "") { ?>
<p class="m-4 p-3 border bg-dark text-white">
    <?= $message ?>
</p>
<?php } ?>