<?php

/*
** Il est possible d'automatiser le routing, notamment en cherchant directement le fichier controleur et le fichier vue.
** ex, pour page=afficher : verification de l'existence des fichiers controleurs/controleurAfficher.php et vues/vueAfficher.php
** Cela impose un nommage strict des fichiers.
*/

$routes = array(
	'ajouter' => array('controleur' => 'controleurAjouter', 'vue' => 'vueAjouter'),
	'importer' => array('controleur' => 'controleurImporter', 'vue' => 'vueImporter'), 
	'modifier' => array('controleur' => 'controleurModifier', 'vue' => 'vueModifier'),
	'creer' => array('controleur' => 'controleurCreer', 'vue' => 'vueCreer'),
	'afficher' => array('controleur' => 'controleurAfficher', 'vue' => 'vueAfficher')
);

?>
