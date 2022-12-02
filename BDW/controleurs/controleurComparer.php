<?php 
$message= "";
$nbListe = countInstances($connexion, 'Liste');
$liste = getInstances($connexion, 'Liste');


if(isset($_POST['boutonValider'])) {
    if($_POST['select1']==0 || $_POST['select2']==0) {
        $message = "Selectionez 2 tables pour commencer comparer";
    } 
    else if($_POST['select1']==$_POST['select2']) {
        $message = "Selectionez 2 tables differentes pour commencer comparer";
    }
    else {
        $table1 = getChansonDansListe($connexion, $_POST['select1']);
        $table2 = getChansonDansListe($connexion, $_POST['select2']);
        $comp = 0;
        $res = 0;


        $arrayGenres1 = array();
        foreach ($table1 as $genre) {
            $str = str_replace(array(';', '/'), "!", $genre['genre']);
            $arrayInterne = explode("!", $str);
            for ($i = 0; $i < count($arrayInterne); $i++) {
                if (!in_array(ucfirst(trim($arrayInterne[$i])), $arrayGenres1)) {
                    array_push($arrayGenres1, ucfirst(trim($arrayInterne[$i])));
                }
            }
        }
        $arrayGenres2 = array();
        foreach ($table2 as $genre) {
            $str = str_replace(array(';', '/'), "!", $genre['genre']);
            $arrayInterne = explode("!", $str);
            for ($i = 0; $i < count($arrayInterne); $i++) {
                if (!in_array(ucfirst(trim($arrayInterne[$i])), $arrayGenres2)) {
                    array_push($arrayGenres2, ucfirst(trim($arrayInterne[$i])));
                }
            }
        }
        for($i = 0 ; $i < count($arrayGenres1); $i++) {
            for($j = 0 ; $j < count($arrayGenres2); $j++) {
                if($arrayGenres1[$i]==$arrayGenres2[$j]) {
                    $comp++;
                    
                }
            }
        }
        $res += $comp / (count($arrayGenres1)+count($arrayGenres2));

        foreach($table1 as $tab1) {
            foreach($table2 as $tab2) {
                if($tab1['titre']==$tab2['titre']){
                    $comp++;
                }
                if($tab1['groupe']==$tab2['groupe']){
                    $comp++;
                }
                if($tab1['album']==$tab2['album']){
                    $comp++;
                }
                if($tab1['idC']==$tab2['idC']){
                    $comp++;
                }
            }
        }
        $numC1 = countChansonListe($connexion, $table1[0]['idL']);
        $numC2 = countChansonListe($connexion, $table2[0]['idL']);
        $res += $comp / ($numC1[0]['num']+$numC2[0]['num']);
    }
    $message = "Point de comparaison de 2 tables est " . number_format($res, 3, ',' ,'.');
}

?>