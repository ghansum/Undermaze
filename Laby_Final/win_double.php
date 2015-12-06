<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>le bonhome</title>
		<script src="jquery.js"></script>
		<style>
		
		.t{
		font-family: Helvetica, Calibri, Arial, sans-serif;
		font-size: 100%;
		font-weight: bold;
		text-decoration: none;
		color: white;
	
		}
		

		a.button{
		display: block;
		background-image: linear-gradient(Gray, DarkGray, Black);
		width: 150px;
		height: 30px;
		margin-top:50px;
		margin-left: 505px;
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
		margin-left: 710px;
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
	<br/><br/><br/>
	<?php
		 session_start(); 
		$user = "root"; 
		$pwd = ""; 
		$host = "127.0.0.1" ; 
		$bdd = "labyrinthe";  

		try {  

		$dbh = new PDO('mysql:host='.$host.';dbname='.$bdd, $user, $pwd);
		$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
		}
  
		 catch (Exception $e) { 
		 die('Erreur : ' . $e->getMessage()); 
		 } 
	?>
	
	<center>
	<?php
	$score = $_GET['id2'];
	$temps = $_GET['id'];

	if($_GET['id4']=="gagne_double1" or $_GET['id4']=="gagne_double2"){
	      $map="index_double.php";
	      echo '<style> body{ background-image:url(pictures/magma.jpg); background-size: 1395px 700px;} </style>';
	}
	
	?> 
	</center>
	<?php
	if($_GET['id4']=="gagne_double1"){
		$msg='<p class="t"> Joueur Bleu a gagné !! <br/> Score : '.$score.' <br/> Temps : '.$temps.' </p>';
	}
	if($_GET['id4']=="gagne_double2"){
		$msg='<p class="t">Joueur Vert a gagné !! <br/> Score : '.$score.' <br/> Temps : '.$temps.' </p>';
	}
	
	echo '<center>'.$msg.'</center>';
	?>
	<a href="<?php echo $map; ?>" class="button" id="buttonOK"><span class="icon">Try Again</span></a><br/>
	
	    <?php echo '<a href="../index.php" class="button1" id="buttonOK"><span class="icon">Menu</span></a>';
	     
	    ?>
	
	</body>
	

</html>
