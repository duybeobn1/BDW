<?php
$message = "";
$songs2000 = getInstances($connexion, "songs2000");
if ($songs2000 == null || count($songs2000) == 0) {
    $message .= "No value";
}

if (isset($_POST['boutonValider'])) {

    $genre = $_POST['genres'];
    $groupe = $_POST['groupe'];
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


$arrayGenres = array();
foreach ($songs2000 as $genre) {
    $str = str_replace(array(';','/'),"!", $genre['genre']);
    $arrayInterne = explode("!", $str);
    for($i= 0; $i < count($arrayInterne); $i++) {
        if(!in_array(ucfirst(trim($arrayInterne[$i])), $arrayGenres)){
            array_push($arrayGenres, ucfirst(trim($arrayInterne[$i])));
        }
    }
}
sort($arrayGenres);

// $b = array_count_values($arrayGenres);
// print_r($b);
// echo count($arrayGenres);
?>