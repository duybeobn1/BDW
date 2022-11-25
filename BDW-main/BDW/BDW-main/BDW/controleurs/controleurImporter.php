<?php
$songs2000 = getInstances($connexion, "songs2000");
//
$resetVersion = resetTable($connexion, 'Version');
$resetGroupe = resetTable($connexion, 'Groupe');
$resetGroupe = resetTable($connexion, 'Chanson');
$resetGroupe = resetTable($connexion, 'Genre');
//
$copyVersion = copyDataVersion($connexion);
// //
$copyGroupe = copyDataGroupe($connexion);
// //
$copChanson = copyDataChanson($connexion);
//
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
//
foreach($arrayGenres as $g) {
    $copyGenre = copyDataGenre($connexion, $g);
}
?>