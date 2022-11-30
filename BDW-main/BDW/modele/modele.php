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


function countInstances($connexion, $nomTable)
{
	$requete = "SELECT COUNT(*) AS nb FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	if ($res != FALSE) {
		$row = mysqli_fetch_assoc($res);
		return $row['nb'];
	}
	return -1; // valeur négative si erreur de requête (ex, $nomTable contient une valeur qui n'est pas une table)
}
function getInstances($connexion, $nomTable)
{
	$requete = "SELECT * FROM $nomTable";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}
function getInstances5($connexion, $nomTable)
{
	$requete = "SELECT * FROM $nomTable ORDER BY playcount LIMIT 5";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}

function getInstancesTop($connexion, $nomTable)
{
	$requete = "SELECT * FROM $nomTable ORDER BY playcount LIMIT 1";
	$res = mysqli_query($connexion, $requete);
	$instances = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $instances;
}
function insertValue($connexion, $titre, $dates, $duree, $nomFichier, $groupes, $genres)
{

	$requete = "INSERT INTO Version VALUES(NULL,'$titre', $dates, $duree, '$nomFichier', '$groupes', '$genres')";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getTitre($connexion, $titre){
	$titre = mysqli_real_escape_string($connexion, $titre);
	$requete = "SELECT * FROM Version WHERE titre = '".$titre."'";
	$res = mysqli_query($connexion, $requete);
	$result = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $result;
}
function getGenres($connexion, $genre)
{
	$genre = mysqli_real_escape_string($connexion, $genre); // sécurisation de $nomSerie
	$requete = "SELECT * FROM Genre WHERE genre = '" . $genre . "'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function getGroupes($connexion, $groupe)
{
	$groupe = mysqli_real_escape_string($connexion, $groupe); // sécurisation de $nomSerie
	$requete = "SELECT * FROM Groupe WHERE nom = '" . $groupe . "'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function copyDataVersion($connexion)
{
	$requete = "INSERT INTO Version(titre, dates, durée, nom_de_fichier, groupe, genre) 
	SELECT songs2000.title, songs2000.year, songs2000.length, songs2000.filename, songs2000.artist, songs2000.genre 
	FROM songs2000";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function copyDataGroupe($connexion)
{
	$requete = "INSERT INTO Groupe(nom) 
	SELECT DISTINCT songs2000.artist 
	FROM songs2000";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function copyDataChanson($connexion)
{
	$requete = "INSERT INTO Chanson(idC, idG, titre, groupe) SELECT DISTINCT v.idC, p.idG, v.titre, v.groupe FROM Version v LEFT JOIN Groupe p ON v.groupe = p.nom WHERE v.idC IN(SELECT DISTINCT v1.idC FROM Version v1 WHERE v1.titre 
	NOT IN(SELECT v1.titre FROM Version v1 INNER JOIN Version v2 ON v1.titre = v2.titre WHERE v1.idC < v2.idC) UNION SELECT DISTINCT v1.idC From Version v1 INNER JOIN Version v2 ON v1.titre = v2.titre WHERE v1.groupe != v2.groupe);";
	$requete .= "DELETE FROM Chanson WHERE titre LIKE '%Theme of SF (%'";
	$res = mysqli_multi_query($connexion, $requete);
	while (mysqli_next_result($connexion)) {
		;
	}
	//https://stackoverflow.com/questions/6902986/when-i-have-a-mysqli-multi-query-followed-by-a-mysqli-query-the-second-query-fa
	return $res;
}
function copyDataGenre($connexion, $genre)
{
	$requete = "INSERT INTO Genre VALUES(NULL,'$genre')";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function resetTable($connexion, $nomTable)
{
	$requete = "TRUNCATE TABLE $nomTable";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getListe($connexion, $nom)
{
	$nom = mysqli_real_escape_string($connexion, $nom); // sécurisation de $nomSerie
	$requete = "SELECT * FROM Liste WHERE nom = '" . $nom . "'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function insertListe($connexion, $nom, $duree, $genre)
{
	$requete = "INSERT INTO Liste VALUES(NULL, '$nom' ,$duree, '$genre')";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function insertIntoListe($connexion,$idL, $idC, $nom, $genre)
{
	$requete = "INSERT INTO Liste_Chanson VALUES($idL, $idC,'$nom', '$genre')";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getTablePlayCount($connexion)
{
	$requete = "SELECT titre, playcount, durée, idC, v.genre FROM songs2000 s LEFT JOIN Version v ON s.title = v.titre ORDER BY playcount DESC";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function getTableLastPlayed($connexion)
{
	$requete = "SELECT titre, playcount, durée, idC, v.genre FROM songs2000 s LEFT JOIN Version v ON s.title = v.titre ORDER BY lastplayed ASC";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function getTableSkipCount($connexion)
{
	$requete = "SELECT titre, playcount, durée, idC, v.genre FROM songs2000 s LEFT JOIN Version v ON s.title = v.titre ORDER BY playcount DESC";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}

function updateDureeDansListe($connexion, $nom, $duree) {
	$requete = "UPDATE Liste SET duree = $duree WHERE nom = '$nom'";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getTablesGenres($connexion, $genre, $attribute) {
	$genre = mysqli_real_escape_string($connexion, $genre); 
	$requete = "SELECT titre, playcount, durée, idC, v.genre FROM songs2000 s LEFT JOIN Version v ON s.title = v.titre WHERE v.genre LIKE '%$genre%' ORDER BY $attribute DESC";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function getChansonDansListe($connexion, $id) {
	$requete = "SELECT * FROM Liste_Chanson l LEFT JOIN Version v ON l.idC = v.idC WHERE l.idL = $id";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function countChansonListe($connexion, $id) {
	$requete = "SELECT COUNT(*) as num FROM Liste_Chanson WHERE idL = $id";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
function deleteChanson($connexion, $id) {
	$requete = "DELETE FROM Liste_Chanson WHERE idC = $id";
	$res = mysqli_query($connexion, $requete);
	return $res;
}
function getNomChansonDansListe($connexion, $id, $nom) {
	$nom = mysqli_real_escape_string($connexion, $nom); 
	$requete = "SELECT * FROM Liste_Chanson l LEFT JOIN Version v ON l.idC = v.idC WHERE l.idL = $id AND l.nom = '$nom'";
	$res = mysqli_query($connexion, $requete);
	$results = mysqli_fetch_all($res, MYSQLI_ASSOC);
	return $results;
}
?>