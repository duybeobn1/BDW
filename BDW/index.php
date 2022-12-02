<?php
// index.php fait office de controleur frontal
session_start(); // démarre ou reprend une session
ini_set('display_errors', 1); // affiche les erreurs (au cas où)
ini_set('display_startup_errors', 1); // affiche les erreurs (au cas où)
error_reporting(E_ALL); // affiche les erreurs (au cas où)
require('inc/config-bd.php'); // fichier de configuration d'accès à la BD
require('modele/modele.php'); // inclut le fichier modele
require('inc/includes.php'); // inclut des constantes et fonctions du site (nom, slogan)
require('inc/routes.php'); // fichiers de routes
$connexion = getConnexionBD(); // connexion à la BD
?>
<!DOCTYPE html>
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
	crossorigin="anonymous"></script>
<html>

<head>
	<meta charset="utf-8" />
	<!-- le titre du document, qui apparait dans l'onglet du navigateur -->
	<title>
		<?= $nomSite ?>
	</title>
	<!-- lie le style CSS externe  -->
	<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
	<!-- ajoute une image favicon (dans l'onglet du navigateur) -->
	<link rel="shortcut icon" type="image/x-icon" href="img/sheep.png" />
</head>

<body>
	<?php include('static/header.php'); ?>
	<div id="divCentral">
		<?php include('static/menu.php'); ?>
		<main>
			<?php
        $controleur = 'controleurAccueil'; // par défaut, on charge accueil.php
        $vue = 'vueAccueil'; // par défaut, on charge accueil.php
        if (isset($_GET['page'])) {
	        $nomPage = $_GET['page'];
	        if (isset($routes[$nomPage])) { // si la page existe dans le tableau des routes, on la charge
        		$controleur = $routes[$nomPage]['controleur'];
		        $vue = $routes[$nomPage]['vue'];
	        }
        }
        include('controleurs/' . $controleur . '.php');
        include('vues/' . $vue . '.php');
        ?>
		</main>
	</div>
	<?php include('static/footer.php'); ?>
</body>

</html>