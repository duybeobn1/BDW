<?php
$message = "";
if(isset($_POST['boutonValider'])) {
    $nom = $_POST['nom'];
    $verification = getListe($connexion, $nom);
    if($verification == TRUE || count($verification) >0) {
        $link_address1 = 'index.php?page=gerer&nom='.$nom.'';
        $form ="<a href='".$link_address1."'>Commencer Modifier</a>";
    }   
    else {
        $message = "Il n'y a pas cette liste";
    }
}

?>
