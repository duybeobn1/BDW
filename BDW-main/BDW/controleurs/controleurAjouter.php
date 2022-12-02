<?php
$message = "";
$version = getInstances($connexion, "Version");
if ($version == null || count($version) == 0) {
    $message .= "No value";
}
$arrayGenres = getInstances($connexion, "Genre");
$groupeS = getInstances($connexion, "Groupe");
if (isset($_POST['boutonValider'])) {
    if(!$_POST['titre']) {
        $_POST['titre'] = uniqid();
    }
    if(!$_POST['dates']) {
        $_POST['dates'] = '';
    }
    $genre = $_POST['genres'];
    $groupe = $_POST['groupe'];
    echo $groupe;
    $verification1 = getGenres($connexion, $genre);
    $verification2 = getGroupes($connexion, $groupe);
    if ($verification1 == FALSE || count($verification1) == 0 || $verification2 == FALSE || count($verification2) == 0) {
        $insertion = insertValue($connexion, $_POST['titre'], $_POST['dates'], $_POST['duree'], $_POST['nomFichier'], $_POST['groupe'], $_POST['genres']);
        if ($insertion == TRUE) {
            $message = "success";
        } else {
            $message = "not success";
        }
    } else
        $message = "Il y a deja ce chanson";
}

?>