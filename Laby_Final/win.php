<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Undermaze</title>
		<script src="jquery.js"></script>
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<style>

		.t{
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		color: blue;
		}

		table{
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		color: blue;
		}

		a.button{
		display: block;
		background-image: linear-gradient(Gray, DarkGray, Black);
		width: 150px;
		height: 30px;
		margin-top:50px;
		margin-left: 605px;
		padding: 5px 0 0 0;
		text-align: center;
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		}


		a.button1{
		display: block;
		background-image: linear-gradient(Gray, DarkGray, Black);
		width: 150px;
		height: 30px;
		margin-top:-56px;
		margin-left: 800px;
		padding: 5px 0 0 0;
		text-align: center;
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		}

		a.button2{
		display: block;
		background-image: linear-gradient(Gray, DarkGray, Black);
		width: 150px;
		height: 30px;
		margin-top: 56px;
		margin-left: 700px;
		padding: 5px 0 0 0;
		text-align: center;
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		}
		</style>

	</head>
	<body>
	<?php
		 session_start();
	/*	$user = "root";
		$pwd = "";
		$host = "127.0.0.1" ;
		$bdd = "labyrinthe";

		try {

		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		}

		 catch (Exception $e) {
		 die('Erreur : ' . $e->getMessage());
	 } */
	?>

	<center>

	<!--A modifier selon le laby-->
	<?php
	$score = $_GET['id2'];
	$temps = $_GET['id'];
	$player = $_SESSION['name'];
	$res= $_GET['id0'];
	$val=false;



	if(!$val){
		$time = date('s');
		$val=true;
		//echo $time;
	}
	 $nb=0;
	/* $req="SELECT nbWin FROM members WHERE user='$player'";
	 $d=$dbh->query($req);
	 while($gagne = $d->fetch()){
		$nb=$gagne['nbWin'];
	}
	*/
	if($res=='true1' && $nb==1){
		//$dbh->query("UPDATE members SET nbWin=2 WHERE user='$player'");
		 $nb=2;
	}

	if($res=='true2' && $nb==2){
		//$dbh->query("UPDATE members SET nbWin=3 WHERE user='$player'");
		 $nb=3;
	}

	if($res=='true3' && $nb==3){
		//$dbh->query("UPDATE members SET nbWin=4 WHERE user='$player'");
		 $nb=4;
	}

	if($time+3 > date('s')){

	if($_GET['id4']=="gagne_manoir"){
		$map="../laby_manor/index_manoir.php";
		echo'<style> body{ background-image:url(pictures/neige-new.jpeg); background-size:1700px;} </style>';
	}

	if($_GET['id4']=="gagne_neige"){
		$map="index_neige.php";
		echo'<style> body{ background-image:url(pictures/kung-fu.jpg);} </style>';
	}

	if($_GET['id4']=="gagne_dark"){
		$map="index_dark.php";
		echo'<style> body{ background-image:url(pictures/luffy.jpg); background-size:1400px 850px;} </style>';
	}

	if($_GET['id4']=="gagne_feu"){
		$map="laby_feu.php";
		if($_GET['id4']=="gagne_feu" && $res=='true4'){
			echo '<style> body{ background-image:url(pictures/la-haut.jpg); background-size: 1395px 750px;} </style>';
		}
		if($_GET['id4']=="gagne_feu" && $res=='false4'){
			echo '<style> body{ background-image:url(pictures/failed.jpg); background-size: 1395px 700px;} </style>';
		}
	}
 }
	?>

	<br><br><br><br>
	<?php
			echo ' <div style="width:400px; height:200px;" class="bg-info"><b  style="color:black"><br> Votre score :	&nbsp;&nbsp;'. $score .'<br>
							Temps pass&eacute; : &nbsp;&nbsp;'. $temps .'</b><br><br><br>
							Bravo ! Vous venez de débloquer le niveau suivant !<br> Cliquez sur le bouton suivant pour continuer</div>';
	?>
	<br><br><br>
	<a href="<?php echo $map; ?>" class="btn btn-danger btn-lg" id="buttonOK"><span class="icon">Rejouer</span></a> &nbsp;&nbsp;&nbsp;
	<a href="../index.php?deb=2" class="btn btn-danger btn-lg" id="buttonOK"><span class="icon">Suivant</span></a>
	</center>
	</body>
</html>
