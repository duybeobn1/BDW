<?php

// connexion à la BD, retourne un lien de connexion
function getConnexionBD()
{
	$connexion = mysqli_connect(SERVEUR, UTILISATRICE, MOTDEPASSE, BDD);
	if (mysqli_connect_errno()) {
		printf("Échec de la connexion : %s\n", mysqli_connect_error());
		exit();
	}
	mysqli_query($connexion, 'SET NAMES UTF8'); // noms en UTF8
	return $connexion;
}

// déconnexion de la BD
function deconnectBD($connexion)
{
	mysqli_close($connexion);
}


function countInstances($connexion, $nomTable) {
	$requete = "SELECT COUNT(*) AS nb FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	if($res != FALSE) {
		$row = mysqli_fetch_assoc($res);
		return $row['nb'];
	}
	return -1;  // valeur négative si erreur de requête (ex, $nomTable contient une valeur qui n'est pas une table)
}
function getInstances($connexion, $nomTable) {
	$requete = "SELECT * FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}
function getInstances5($connexion, $nomTable) {
	$requete = "SELECT * FROM $nomTable ORDER BY playcount LIMIT 5";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}

function getInstancesTop($connexion, $nomTable) {
	$requete = "SELECT * FROM $nomTable ORDER BY playcount LIMIT 1";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}
function insertValue($connexion, $titre, $dates, $duree, $nomFichier, $groupes, $genres) {
	$requete = "INSERT INTO Chanson VALUES(NULL, '$titre', $dates, $duree, '$groupes', '$genres', '$nomFichier')";
	echo $requete;
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getGenres($connexion, $genre) {
	$genre = mysqli_real_escape_string($connexion, $genre); // sécurisation de $nomSerie
	$requete = "SELECT * FROM songs2000 WHERE genre = '". $genre . "'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function getGroupes($connexion, $groupe) {
	$groupe = mysqli_real_escape_string($connexion, $groupe); // sécurisation de $nomSerie
	$requete = "SELECT * FROM songs2000 WHERE artist = '". $groupe . "'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}

?>