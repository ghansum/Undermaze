<?php 
header("content-type:application/javascript");//on dit au serveur qu’on écris du JavaScript
?>
<?php include($_GET['map']); ?>;      
tileset=new Image();                 
tileset.onload=function() {         
	numberOnOneLine=tileset.width/16;
	finChargement = true;       
	drawMap0();
	drawMap1();
	map.evenements();
}
tileset.src=map.tileset;        
