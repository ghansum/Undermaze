<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>le bonhome</title>
		<script src="jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/popup.css">
		<link rel="stylesheet" type="text/css" href="css/style_laby.css">


	</head>
	<body id="feu">
	<center>
		<canvas id="canvas4" width="1232" height="515" style="z-index: 0;">Votre navigateur ne supporte pas HTML5! Je vous conseil de vous mettre à jour!</canvas>
		<canvas id="canvas4" width="1232" height="515" style="z-index: 1;"></canvas>

		<canvas id="canvas4" width="1232" height="515"  style="z-index: 3;"></canvas>
		<canvas id="canvas4" width="1232" height="515"  style="z-index: 4;"></canvas>
		<canvas id="canvas4" width="1232" height="515"  style="z-index: 5;"></canvas>
		<canvas id="canvas4" width="1232" height="515"  style="z-index: 6;"></canvas>

		<!--<div style="text-align: center;">
		<embed name="MediaPlayer"
		pluginspage="http://www.microsoft.com/Windows/MediaPlayer/"
		src="magma.mp3"
		type="application/x-mplayer2" volume="-1"
		showstatusbar="1" autostart="true" hidden="true" loop="true">
		</div> -->




		<div id = "heure"></div>
		<div id = "score4"></div>
		<div ><script id="vide"></script></div><!-— on créer un script vide qui servira pour l’AJAX ->
		<script type="text/javascript" src="fonction_magma.js"></script>
		<a href="../index.php"><img class="retour4" src="pictures/fleche4.gif"/></a>
		<audio id="audio_feu" src="son/magma.mp3" controls="controls" autoplay="autoplay"  loop="true"></audio>
		<script type="text/javascript">
			var monElementAudio = document.getElementById('audio_feu');
			monElementAudio.volume = 0.1;
		</script>
		<div id="overlay"><a href="#noWhere"> <img src="../laby_manor/pictures/croix.png" height="25px" width="30px" /></a>
		<div class="popup_block">
		<h2 style="color:gray;">Règle du jeu : </h2>
			<p>Dans ce monde englouti par les flammes Amaterasu testera votre instinct de survie ainsi que votre bravoure.</p>
			<p>Récuperez les offrandes et vous aurez les équipements nécessaires en retour. Attention le chemin de la sortie est
			rempli de pièges... <br/><br/>

			   <i style="margin-left:300px; color:red;">A vous de les éviter..!!</i></b></p>

		</div></div>
		<p id="help4"><a href="#overlay" title="Règles du jeu"><img src="pictures/help.png" /></a></p>

	</center>
	</body>
</html>
