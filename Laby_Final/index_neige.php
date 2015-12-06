<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>le bonhome</title>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style_laby.css">
		<link rel="stylesheet" type="text/css" href="css/popup.css">

	</head>
	<body id="neige">
	<center>
		<canvas id="canvas2" width="995" height="515" style="z-index: 0;">Votre navigateur ne supporte pas HTML5! Je vous conseil de vous mettre à jour!</canvas>
		<canvas id="canvas2" width="995" height="515" style="z-index: 1;"></canvas>

		<canvas id="canvas2" width="995" height="515"  style="z-index: 3;"></canvas>
		<canvas id="canvas2" width="995" height="515"  style="z-index: 4;"></canvas>
		<canvas id="canvas2" width="995" height="515"  style="z-index: 5;"></canvas>
		<canvas id="canvas2" width="995" height="515"  style="z-index: 6;"></canvas>


		<div><script id="vide"></script></div>
		<script type="text/javascript" src="fonction_neige.js"></script>
		<a href="../index.php"><img class="retour2" src="pictures/fleche3.gif"/></a>
		<div id="countdown2"></div>
		<div id="score2"></div>

	</center>
	<audio id="audio_neige" src="son/music4.mp3" controls="controls" autoplay="autoplay" loop="true" ></audio>
	<script type="text/javascript">
		var monElementAudio = document.getElementById('audio_neige');
		monElementAudio.volume = 0.1;
	</script>

	<div id="overlay"><a href="#noWhere"> <img src="../laby_manor/pictures/croix.png" height="25px" width="30px" /></a>
		<div class="popup_block">
		<h2 style="color:gray;">Règle du jeu : </h2>
			<p>Le manoire enchanté ne vous menera pas bien loin dans votre aventure si vous ne verouillez pas les trappes. Renfermez les en un minumum
			   de temps avant que les serviteurs maléfiques ne vous pourchassent.</p>
			<p>Amaterasu a pris le plaisir de placer des pièges un peu partout dans votre parcours.<br/><br/>
			  <b> Cases avec du vert : &nbsp;&nbsp;&nbsp;Renvoie dans la zone d'entrée<br/>
			  <b> Cases d'oré : &nbsp;&nbsp;&nbsp;Bonus<br/>
			   Zone grisée : &nbsp;&nbsp;&nbsp;Ralentis votre progression<br/><br/>
			   <i style="margin-left:300px; color:red;">Prenez garde aventurier...!!</i></b></p>
		   </div></div>

		<p id="help"><a href="#overlay" title="Règles du jeu"><img src="pictures/help.png" /></a></p>

		<audio id="son1" src="son/Coin.wav"></audio>
		<audio id="son2" src="son/piege_neige.wav"></audio>
		<audio id="son3" src="son/Tudu.wav"></audio>

	</body>
</html>
