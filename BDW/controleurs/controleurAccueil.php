<?php


$version = getInstances($connexion, "Version");

$line1 = $version[rand(0, 1999)]['titre'];
$line2 = $version[rand(0, 1999)]['titre'];
$line3 = $version[rand(0, 1999)]['titre'];
$line4 = $version[rand(0, 1999)]['titre'];
$line5 = $version[rand(0, 1999)]['titre'];
$line6 = $version[rand(0, 1999)]['titre'];


$chansons = getInstances5($connexion, 'Version');
$album1 = getAlbum($connexion, "Tim Burton's The Nightmare Before Christmas");
$album2 = getAlbum($connexion, "Carmina Burana");
?>