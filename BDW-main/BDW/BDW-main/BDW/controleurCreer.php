<?php 
$message = "";
$songs2000 = getInstances($connexion, "songs2000");

if ($songs2000 == null || count($songs2000) == 0) {
    $message .= "No value";
}
if(isset($_POST['boutonValider'])) {
    $nom = $_POST['nom'];
    $genre = $_POST['genre'];
    $duree = $_POST['duree'];
    if($nom == 'test') {
        echo 'oiwoqiwoqiw';
    }
    else echo 'false';
}

?>