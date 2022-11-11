<?php
$message = "";
//count chansons dans la table
$nb = countInstances($connexion, "songs2000");

$chansons = getInstances($connexion, "songs2000");

?>