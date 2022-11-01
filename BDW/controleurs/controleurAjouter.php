<?php 
$message ="";
$songs100 = getInstances($connexion, "songs100");
if($songs100 == null || count($songs100) == 0) {
    $message .= "No value";
}
if(isset($_POST['boutonValider'])) {
    $insertion = insertValue($connexion,$_POST['titre'],$_POST['dates'], $_POST['duree'], $_POST['nomFichier'],$_POST['groupe'],$_POST['genres']);
    if($insertion == TRUE) {
        $message = "success";
    }
    else {
        $message = "not success";
    }
}
?>