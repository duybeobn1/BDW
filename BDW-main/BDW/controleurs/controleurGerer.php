<?php
$nom = $_GET['nom'];
$liste = getListe($connexion, $nom);
$Chanson = getChansonDansListe($connexion, $liste[0]['idL']);
$num = countChansonListe($connexion, $liste[0]['idL']);
$nb = $num[0]['num'];
if (isset($_POST['boutonValider'])) {
    for ($i = 0; $i < $nb; $i++) {
        if ($_POST['boutonValider'] == $i) {
            $delete = deleteChanson($connexion, $Chanson[$i]['idC']);
            $duree = $liste[0]['duree'] - $Chanson[$i]['durée'] / 60;
            $update = updateDureeDansListe($connexion, $nom, $duree);
            $message = "Effacer chanson " . $Chanson[$i]['nom'];
            header("Refresh:1");
        }
    }
}
if (isset($_POST['boutonAjouter'])) {
    $titre = $_POST['titre'];
    $dates = $_POST['dates'];
    $duree = $_POST['duree'];
    $fichier = $_POST['nomFicher'];
    $groupe = $_POST['groupe'];
    $genre = $_POST['genre'];
    if (!$titre) {
        $titre = uniqid();
    }
    if (!$dates) {
        $dates = -1;
    }
    if (!$groupe) {
        $groupe = "Unknown";
    }
    if (!$genre) {
        $genre = "";
    }
    $getTitre = getTitre($connexion, $titre);
    if (!$getTitre) {
        $insertIntoVersion = insertValue($connexion, $titre, $dates, $duree, $fichier, $groupe, $genre);
        if ($insertIntoVersion) {
            $message = "Success";
        }
        $getTitre = getTitre($connexion, $titre);
        $insert = insertIntoListe($connexion, $liste[0]['idL'], countInstances($connexion, 'Version'), $titre, $genre);
        $temp = $liste[0]['duree'] + $duree / 60;
        updateDureeDansListe($connexion, $titre, $temp);
        header("Refresh:1");
    
    } else {
        $compare = getNomChansonDansListe($connexion,$liste[0]['idL'],$titre);
        if(!$compare) {
            $insert = insertIntoListe($connexion, $liste[0]['idL'], countInstances($connexion, 'Version'), $titre, $genre);
            $temp = $liste[0]['duree'] + $duree / 60;
            updateDureeDansListe($connexion, $titre, $temp);
            header("Refresh:1");
        }
        else {
           if($compare['durée'] == $duree&&$compare['groupe']==$groupe&&$compare['dates']==$dates) {
            $message = "Deja dans votre Liste";
           }
           else {
            $insert = insertIntoListe($connexion, $liste[0]['idL'], countInstances($connexion, 'Version'), $titre, $genre);
            $temp = $liste[0]['duree'] + $duree / 60;
            updateDureeDansListe($connexion, $titre, $temp);
            header("Refresh:1");
           }
        }
    }



}

?>