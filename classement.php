<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Classement</title>
		<link rel="icon" type="image/png" href="pictures/favicon.gif" />
		<link rel="stylesheet" type="text/css" href="css/styleManor.css">
		<script src="js/jquery.js"></script>
		
		<style>
		#contenu{
		width:1099px;
		height:700px;
		margin-top: -80px;
		}
		#manoir{
		background-image:url(pictures/ManoirW.jpg);
		float:left;
		margin-left: 40px;
		margin-top: 40px;
		background-size: 470px 260px;
		width:470px;
		height:260px;
		border:1px solid black;
		box-shadow : 0 0 5px 5px gray;
		 }
		
		#neige{
		float:left;
		margin-left: 40px;
		margin-top: 40px;
		background-image:url(Laby_final/pictures/neige2.jpg);
		background-size: 470px 260px;
		width:470px;
		height:260px;
		border:1px solid black;
		box-shadow : 0 0 5px 5px gray;
		 }
		 
		#dark{
		float:left;
		margin-left: 40px;
		margin-top: 40px;
		background-image:url(pictures/DarkW.jpg);
		background-size: 470px 260px;
		width:470px;
		height:260px;
		border:1px solid black;
		box-shadow : 0 0 5px 5px gray;
		 }
		 
		#magma{
		float:left;
		margin-left: 40px;
		margin-top: 40px;
		background-image:url(pictures/FireW2.jpg);
		background-size: 470px 260px;
		width:470px;
		height:260px;
		border:1px solid black;
		box-shadow : 0 0 5px 5px gray;
		 }
		 
		 table{
		 margin-top:30px;
		 width:450px;
		 height:30px;
		 }
		 
		 .tr1{
		 height:30px;
		 color : white;
		 
		 }
		 
		 .tr2{
		 height:30px;
		 color : HotPink;
		 
		 }
		 
		 .tr3{
		 height:30px;
		 color : PaleTurquoise;
		 
		 }
		 
		 .tr4{
		 height:30px;
		 color : DeepSkyBlue;
		 
		 }
		 
		 td{
		 text-align: center;
		 }
		 
		 #cla{
		 color: orange;
		 margin-top: -270px;
		 }
		 
		</style>
	</head>
	<body>
	<center>
	<br/> <p id="cla"> Classement pour chaque Labyrinthe </p><br/></br/>
	<?php
	
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
	
	
	
	<div id="contenu">
		<?php
		
			$reponse1= $dbh->query("SELECT * FROM labym ORDER BY Score DESC LIMIT 0, 5");
			$reponse2= $dbh->query("SELECT * FROM labyn ORDER BY Score DESC LIMIT 0, 5");
			$reponse3= $dbh->query("SELECT * FROM labyd ORDER BY Score DESC LIMIT 0, 5");
			$reponse4= $dbh->query("SELECT * FROM labyf ORDER BY Score DESC LIMIT 0, 5");
			
			$num1=0;
			$num2=0;
			$num3=0;
			$num4=0;
			$num5=0;
			
			echo '<div id="manoir">';
			echo'
			<table>
			<tr class="tr1">
				<td> Num&eacute;ro </td>
				<td> Pseudo </td>
				<td> Temps </td>
				<td> Score </td>
				<td> Partie(s) Jou&eacute;(s) </td>
				<td> Date </td>
			</tr>';
			
			while($donnees1=$reponse1->fetch()){
			
			echo'
			
			<tr class="tr1">
			
				<td>';  $num1+=1;  echo ' '.$num1.' </td>
				<td> '.$donnees1['Player'].' </td>
				<td> '.$donnees1['Temps'].'  </td>
				<td> '.$donnees1['Score'].'  </td>
				<td> '.$donnees1['NbGame'].' </td>
				<td> '.$donnees1['JoueLe'].' </td>
			</tr>';
			
			
			}
			echo '</table></div>';
			?>
			
			<?php
			echo '<div id="neige">';
			echo'
			<table>
			<tr class="tr2">
				<td> Num&eacute;ro </td>
				<td> Pseudo </td>
				<td> Temps </td>
				<td> Score </td>
				<td> Partie(s) Jou&eacute;(s) </td>
				<td> Date </td>
			</tr>';
			
			while($donnees2=$reponse2->fetch()){
			
			echo'
			
			<tr class="tr2">
			
				<td>';  $num2+=1;  echo ' '.$num2.' </td>
				<td> '.$donnees2['Player'].' </td>
				<td> '.$donnees2['Temps'].'  </td>
				<td> '.$donnees2['Score'].'  </td>
				<td> '.$donnees2['NbGame'].' </td>
				<td> '.$donnees2['JoueLe'].' </td>
			</tr>';
			
			
			}
			echo '</table></div>';
			?>
			
			<?php
			echo '<div id="dark">';
			echo'
			<table>
			<tr class="tr3">
				<td> Num&eacute;ro </td>
				<td> Pseudo </td>
				<td> Temps </td>
				<td> Score </td>
				<td> Partie(s) Jou&eacute;(s) </td>
				<td> Date </td>
			</tr>';
			
			while($donnees3=$reponse3->fetch()){
			
			echo'
			
			<tr class="tr3">
			
				<td>';  $num3+=1;  echo ' '.$num3.' </td>
				<td> '.$donnees3['Player'].' </td>
				<td> '.$donnees3['Temps'].'  </td>
				<td> '.$donnees3['Score'].'  </td>
				<td> '.$donnees3['NbGame'].' </td>
				<td> '.$donnees3['JoueLe'].' </td>
			</tr>';
			
			
			}
			echo '</table></div>';
			?>
			
				<?php
			echo '<div id="magma">';
			echo'
			<table>
			<tr class="tr4">
				<td> Num&eacute;ro </td>
				<td> Pseudo </td>
				<td> Temps </td>
				<td> Score </td>
				<td> Partie(s) Jou&eacute;(s) </td>
				<td> Date </td>
			</tr>';
			
			while($donnees4=$reponse4->fetch()){
			
			echo'
			
			<tr class="tr4">
			
				<td>';  $num4+=1;  echo ' '.$num4.' </td>
				<td> '.$donnees4['Player'].' </td>
				<td> '.$donnees4['Temps'].'  </td>
				<td> '.$donnees4['Score'].'  </td>
				<td> '.$donnees4['NbGame'].' </td>
				<td> '.$donnees4['JoueLe'].' </td>
			</tr>';
			
			
			}
			echo '</table></div>';
			?>
	</div>
	</center>
	
	
	
	</body>	
</html>
