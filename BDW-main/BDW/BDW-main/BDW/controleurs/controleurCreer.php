<?php
$message = "";
$playcount = getTablePlayCount($connexion);
$lastplayed = getTableLastPlayed($connexion);
$skipcount = getTableSkipCount($connexion);
if (isset($_POST['boutonValider'])) {

    $nom = $_POST['nom'];
    $genrePrefere = $_POST['genre'];
    $duree = $_POST['duree'];
    if ($nom == '') {
        $nom = uniqid();
        echo $nom;
    }
    if ($duree == '') {
        $duree = 20;
    }
    $verification = getListe($connexion, $nom);
    if ($verification == FALSE || count($verification) == 0) {
        $insertion = insertListe($connexion, $nom, $duree, ucfirst(trim($genrePrefere)));
        if ($insertion == TRUE) {
            $message = "success";
        } else {
            $message = "not success";
        }

    } else {
        $message = "IL y a deja ce nom";
    }
    $count = $duree;
    $updateDuree = 0;
    $getTableListe = getListe($connexion, $nom);
    $id = $getTableListe[0]['idL'];
    for ($chansonNum = 0; $chansonNum < 10000; $chansonNum++) {
        if ($genrePrefere == '' || getGenres($connexion, ucfirst(trim($genrePrefere))) == FALSE) {
            if ($_POST['prefere'] == '1ere') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $playcount[$chansonNum]['idC'], $playcount[$chansonNum]['titre'], $playcount[$chansonNum]['genre']);
                    $count = $count - $playcount[$chansonNum]['durée'] / 60;
                    $updateDuree += $playcount[$chansonNum]['durée'] / 60;
                }
            } else if ($_POST['prefere'] == '2eme') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $lastplayed[$chansonNum]['idC'], $lastplayed[$chansonNum]['titre'], $lastplayed[$chansonNum]['genre']);
                    $count = $count - $lastplayed[$chansonNum]['durée'] / 60;
                    $updateDuree += $lastplayed[$chansonNum]['durée'] / 60;
                }
            } else if ($_POST['prefere'] == '3eme') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $skipcount[$chansonNum]['idC'], $skipcount[$chansonNum]['titre'], $skipcount[$chansonNum]['genre']);
                    $count = $count - $skipcount[$chansonNum]['durée'] / 60;
                    $updateDuree += $skipcount[$chansonNum]['durée'] / 60;
                }
            } else if ($_POST['prefere'] == '4eme') {
                if ($count > 1) {
                    $ran = rand(0,2000);
                    $insertion2 = insertIntoListe($connexion, $id, $playcount[$ran]['idC'], $playcount[$ran]['titre'], $playcount[$ran]['genre']);
                    $count = $count - $playcount[$ran]['durée'] / 60;
                    $updateDuree += $playcount[$ran]['durée'] / 60;
                }
            }
            updateDureeDansListe($connexion,$nom, $updateDuree); 
        }
        else { // genre != 0
            $genre = ucfirst(trim($genrePrefere));
            $playcount_genre = getTablesGenres($connexion, $genre, 'playcount');
            $lastplayed_genre = getTablesGenres($connexion, $genre, 'lastplayed');
            $skipcount_genre = getTablesGenres($connexion, $genre, 'skipcount');
            if ($_POST['prefere'] == '1ere') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $playcount_genre[$chansonNum]['idC'], $playcount_genre[$chansonNum]['titre'], $playcount_genre[$chansonNum]['genre']);
                    $count = $count - $playcount_genre[$chansonNum]['durée'] / 60;
                    $updateDuree += $playcount_genre[$chansonNum]['durée'] / 60;
                }
            }
            if ($_POST['prefere'] == '2eme') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $lastplayed_genre[$chansonNum]['idC'], $lastplayed_genre[$chansonNum]['titre'], $lastplayed_genre[$chansonNum]['genre']);
                    $count = $count - $lastplayed_genre[$chansonNum]['durée'] / 60;
                    $updateDuree += $lastplayed_genre[$chansonNum]['durée'] / 60;
                }
            }
            if ($_POST['prefere'] == '3eme') {
                if ($count > 1) {
                    $insertion2 = insertIntoListe($connexion, $id, $skipcount_genre[$chansonNum]['idC'], $skipcount_genre[$chansonNum]['titre'], $skipcount_genre[$chansonNum]['genre']);
                    $count = $count - $skipcount_genre[$chansonNum]['durée'] / 60;
                    $updateDuree += $skipcount_genre[$chansonNum]['durée'] / 60;
                }
            }
            if ($_POST['prefere'] == '4eme') {
                if ($count > 1) {
                    $ran = rand(0,2000);
                    $insertion2 = insertIntoListe($connexion, $id, $playcount_genre[$ran]['idC'], $playcount_genre[$ran]['titre'], $playcount_genre[$ran]['genre']);
                    $count = $count - $playcount_genre[$ran]['durée'] / 60;
                    $updateDuree += $playcount_genre[$ran]['durée'] / 60;
                }
            }
            updateDureeDansListe($connexion,$nom, $updateDuree); 
        }
    }
}

?>