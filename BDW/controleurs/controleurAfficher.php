<?php
$message = "";
//count chansons dans la table
$nb = countInstances($connexion, "Version");

$chansons = getInstances($connexion, "Version");

?>