<?php

$message = "";
//count chansons dans la table
$nb = countInstances($connexion, "song100");

//top 5 chansons ecoute 
$chanson5 = getTop5Play($connexion, "song100");
if($chanson5 == null || count($chanson5) == 0) {
    $message .= "No chanson";
}
//top5 genres ecoute 
$genres5 = getTop5Play($connexion, "song100");
if($genres5 == null || count($genres5) == 0) {
    $message .= "No genres";
}
//top5 artist ecoute 
$groupe5 = getTop5Play($connexion, "song100");
if($groupe5 == null || count($groupe5) == 0) {
    $message .= "No artist";
}

//top 5 plus recente chanson
$recentChanson5 = getPlusRecent($connexion, "song100");
if($recentChanson5 == null || count($recentChanson5) == 0) {
    $message .= "No chanson";
}

//top  1 album 
$album1 = getMaxPlay($connexion, "song100", $album);
if($album1 == null || count ($album1) ==0) {
    $message .= "No album";
}
//top  1 chanson 
$chanson1 = getMaxPlay($connexion, "song100", $title);
if($chanson1 == null || count ($chanson1) ==0) {
    $message .= "No chanson";
}
?>