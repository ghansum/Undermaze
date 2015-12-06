<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Darker than darkness</title>
		<link rel="stylesheet" href="css/style_laby.css"/>
		<link rel="stylesheet" type="text/css" href="css/popup.css">
		<script type="text/javascript" src="javascript/jquery.js"></script>
	</head>
	<body id="tenebres">
		<center>

	<canvas width="992" height="512" style="z-index: 0;">Votre navigateur ne supporte pas HTML5! Je vous conseil de vous mettre à jour!</canvas>
		<canvas width="992" height="512" style="z-index: 1;"></canvas>
		<canvas width="992" height="512"  style="z-index: 3;"></canvas>
		<canvas width="992" height="512"  style="z-index: 4;"></canvas>
		<canvas width="992" height="512"  style="z-index: 5;"></canvas>
		<canvas width="992" height="512"  style="z-index: 6; "></canvas>

		<div><script id="vide"></script></div>
		<a href="../index.php"><img class="retour" src="pictures/fleche1.gif"/></a>
		<div id="countdown"></div>
		<div id="score"></div>
		<div id = "tab"></div>
		<audio id="music3" src ="son/Lavanville.mp3" controls="controls" autoplay="autoplay"  loop="true"></audio>
		<script type="text/javascript">
			var monElementAudio = document.getElementById('music3');
			monElementAudio.volume = 0.1;
		</script>
		<div id = "tab1"></div>

		<div id="overlay"><a href="#noWhere"> <img src="../laby_manor/pictures/croix.png" height="25px" width="30px" /></a>
		<div class="popup_block">
		<h2 style="color:gray;">Règle du jeu : </h2>
			<p>Ramassez tous les trésors de ce monde sinistre.</p>
			<p>Vous avez étoné Amaterasu grâce à votre bravoure et votre intélligence. Il essaie de vous piéger d'avantage.<br/><br/>
			  <b> Trous noirs : &nbsp;&nbsp;&nbsp;Renvoie dans la zone d'entrée<br/>
			  <b> Cases dorées : &nbsp;&nbsp;&nbsp;Bonus<br/>
			   Zone gluante : &nbsp;&nbsp;&nbsp;Ralentis votre vitesse<br/><br/>
			   <i style="margin-left:300px; color:red;">Vous arrivez au bout !!</i></b></p>

		</div></div>
		<p id="help3"><a href="#overlay" title="Règles du jeu"><img src="pictures/help.png" /></a></p>
		<script type="text/javascript" src="javascript/fonction_foret.js"></script>

</center>
	</body>
</html>
