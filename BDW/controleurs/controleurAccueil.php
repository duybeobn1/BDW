<?php

$message = "";
//count chansons dans la table
$nb = countInstances($connexion, "songs2000");


$chansons = getInstances5($connexion, "songs2000");
if($chansons == null || count($chansons) ==0) {
    $message .= "No chanson";
}
$genres = getInstances5($connexion, "songs2000");
if($genres == null || count($genres) == 0) {
    $message .= "No genres";
}
$top1 = getInstancesTop($connexion, "songs2000");
if($top1 == null || count($top1) == 0) {
    $message .= "No top ";
}
//top 5 chansons ecoute 
// //top5 genres ecoute 
// $genres5 = getTop5Play($connexion, "songs100");
// if($genres5 == null || count($genres5) == 0) {
//     $message .= "No genres";
// }
// //top5 artist ecoute 
// $groupe5 = getTop5Play($connexion, "songs100");
// if($groupe5 == null || count($groupe5) == 0) {
//     $message .= "No artist";
// }

// //top 5 plus recente chanson
// $recentChanson5 = getPlusRecent($connexion, "songs100");
// if($recentChanson5 == null || count($recentChanson5) == 0) {
//     $message .= "No chanson";
// }

// //top  1 album 
// $album1 = getMaxPlay($connexion, "songs100", "album");
// if($album1 == null || count ($album1) ==0) {
//     $message .= "No album";
// }
// //top  1 chanson 
// $chanson1 = getMaxPlay($connexion, "songs100", "title");
// if($chanson1 == null || count ($chanson1) ==0) {
//     $message .= "No chanson";
// }
?>