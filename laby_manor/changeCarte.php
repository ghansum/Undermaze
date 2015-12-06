<?php 
header("content-type:application/javascript");//on dit au serveur qu’on écris du JavaScript
?>
<?php include($_GET['map']); ?>;//on insert change la valeur de la map. Il faut passer en variable GET de la page php le lien du fichier contenant la map
tileset=new Image();//on se prépare à recharger une image pour le tileset qui a peut être changé 
tileset.onload=function() {//quand cette image sera chargé…
	numberOnOneLine=tileset.width/16;
	finChargement = true;//on stop le spinner et on lance la transition
	drawMap0();
	drawMap1();
	map.evenements();
}
tileset.src=map.tileset;//on donne le lien du tileset