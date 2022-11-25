<?php
    $nom = $_GET['nom'];
    $liste = getListe($connexion, $nom);
    $Chanson = getChansonDansListe($connexion,$liste[0]['idL']);
    $num = countChansonListe($connexion,$liste[0]['idL']);
    $nb = $num[0]['num'];
    if(isset($_POST['boutonValider'])) {
        for($i = 0 ; $i < $nb ; $i++) {
            if($_POST['boutonValider']==$i) {
                $delete = deleteChanson($connexion, $Chanson[$i]['idC']);
                $duree = $liste[0]['duree'] - $Chanson[$i]['durée']/60;
                $update = updateDureeDansListe($connexion, $nom, $duree);
                $message = "Effacer chanson " .$Chanson[$i]['nom'];
                header("Refresh:1"); 
            }
        }
    }
    
?>