<!DOCTYPE html>
<html>
<head>
<title>home</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style_rules.css" media="screen"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Note_this_400.font.js" type="text/javascript"></script>
		<script  src="js/shadow_galleryjs"></script>
		<script  src="js/libr.js"></script>
		<script  src="js/scrollText.js"></script>


        <!-- The JavaScript -->
		<script src="js/jquery.transform-0.8.0.min.js"></script>
        <script src="js/jquery_gallery.js"></script>
		<script type="text/javascript" src="../js/ajax.js"></script>
</head>

<body>
	<div class="container">
		<input name="radio-set" type="radio"><a href="#">Jouer</a>
		<input name="radio-set" id="tag-rules" type="radio"><a href="#">Histoire</a>
		<input name="radio-set" id="tag-game" type="radio"><a href="#">Règles</a>
		<input name="radio-set" id="tag-members" type="radio"><a href="#">Développeurs</a>
		<?php
					session_start();

					if(isset($_POST['name'])){
						$_SESSION['name'] = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
					}

					if(isset($_SESSION['connected'])) { ?>
				<?php
				echo '<input name="radio-set" id="tag-subscription" type="radio"><a href="">Contact</a>
						<input name="radio-set" type="radio"><a href="#">Jouer</a>
				';?>
				<?php	} else {

			echo '<input name="radio-set" id="tag-subscription" type="radio"><a href="">Contact</a>
					<input name="radio-set" type="radio"><a href="#">Connexion</a>'
			;?>

				<?php } ?>
		<div class="scroll">



				<?php
				//	$link = mysql_connect("127.0.0.1", "root", "");
				//	mysql_select_db("labyrinthe", $link);

					if(isset($_POST['name'])){
						$_SESSION['name'] = filter_var($_POST['name'],FILTER_SANITIZE_STRING);

					}

					if(isset($_SESSION['connected'])) { ?>
				<?php
				 $player = $_SESSION['name'];
				 //$reqt="SELECT nbWin FROM members WHERE user='$player'";
				 //$debloc=mysql_query($reqt);
				 $deb = 1;
				 if(isset($_GET['deb']) && !empty($_GET['deb'])){
					 $deb = $_GET['deb'];
				 }

				// while($d = mysql_fetch_assoc($debloc)){
				//	$deb=$d['nbWin'];
				//}

				if($deb == 1){
				echo '
				<section class="panel5">

				<center><br/>
				<button style="width:150px; height:40px; background:orange; box-shadow: 0px 0px 9px gray;" onClick="location.href=\'destroy.php\'">Déconnexion</button>
				<div class="grid1"><a href="laby_manor/index_manoir.php"><img src="pictures/img_manoir.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid2"><a href=""><img src="pictures/IMG_N.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid3"><a href=""><img src="pictures/IMG_D.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid4"><a href=""><img src="pictures/IMG_F.jpg"  width="400px" height="200px"/></a></div>

				</center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</section>';
				 }

				 if($deb==2){
					echo '
				<section class="panel5">

				<center><br/>
				<button style="width:150px; height:40px; background:orange; box-shadow: 0px 0px 9px gray;" onClick="location.href=\'destroy.php\'">Déconnexion</button>
				<div class="grid1"><a href="laby_manor/index_manoir.php"><img src="pictures/img_manoir.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid2"><a href="Laby_Final/index_neige.php"><img src="pictures/img_neige.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid3"><a href=""><img src="pictures/IMG_D.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid4"><a href=""><img src="pictures/IMG_F.jpg"  width="400px" height="200px"/></a></div>

				</center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</section>';
				}

				if($deb==3){
					echo '
				<section class="panel5">

				<center><br/>
				<button style="width:150px; height:40px; background:orange; box-shadow: 0px 0px 9px gray;" onClick="location.href=\'destroy.php\'">Déconnexion</button>
				<div class="grid1"><a href="laby_manor/index_manoir.php"><img src="pictures/img_manoir.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid2"><a href="Laby_Final/index_neige.php"><img src="pictures/img_neige.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid3"><a href="Laby_Final/index_dark.php"><img src="pictures/img_dark.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid4"><a href=""><img src="pictures/IMG_F.jpg"  width="400px" height="200px"/></a></div>

				</center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</section>';

				}

				 if($deb==4){
				echo '
				<section class="panel5">

				<center><br/>
				<button style="width:150px; height:40px; background:orange; box-shadow: 0px 0px 9px gray;" onClick="location.href=\'destroy.php\'">Déconnexion</button>
				<div class="grid1"><a href="laby_manor/index_manoir.php"><img src="pictures/img_manoir.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid2"><a href="Laby_Final/index_neige.php"><img src="pictures/img_neige.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid3"><a href="Laby_Final/index_dark.php"><img src="pictures/img_dark.jpg"  width="400px" height="200px"/></a></div>
				<div class="grid4"><a href="Laby_Final/laby_feu.php"><img src="pictures/img_magma.jpg"  width="400px" height="200px"/></a></div>

				</center><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
				</section>';
				}

				?>
				<?php	} else {

				echo '<section class="panel5">


				<?php

					if(isset($_SESSION["errorMsg"])){?>

					<center><p class="error"><?php echo $_SESSION["errorMsg"]?></p></center>

					<?php unset($_SESSION["errorMsg"])?>

				<?php } ?>

					<form action="process.php" method="POST">



						<center>

			 		<table class = "connect">
							<tr>
								<td><b><label for="name"> Nom d\'utilisateur : </label></td>
								<td><input type="text" name="name"  placeholder="Pseudo" /></td>
							</tr>
							<tr>
								<td><b><label for="password"> Mot de passe : </label></b></td>
								<td><input type="password" name="password" placeholder="Mot de passe" /></td>
							</tr>
							<tr>
								<td></td><td colspan="3"><center class="submit"><br><input type="submit" value="Connexion" /></center></td>
							</tr>
						</table>

						</center>

					</form>';

			?>

				<?php } ?>

			</section>

			<section class="panel4">
				<h2> The UnderMaze</h2>
				<section class="conteneur">
					<section class="table1">
						<section class="conteneur">
							<section class="table1">
								<section class="ligne">
									<article class="text">
										<p>Jeune aventurier, tu incarnes le jeune Miyamoto Musashi.<br>
										<p>Tu dois retrouver la demeure d'Amaterasu, déesse du soleil.<p>
										<p>Cette dernère défie tout les mages.</p>
										<p>Pour la retrouver, tu dois empreinter le chemin divin menant aux différents continents en évitant les dangers de la nature.</p>
										<p>Celui qui parvient à la voir, reçevra une récompense ...</p>
									</article>
								</section>
							</section>
						</section>
					</section>
				</section>
			</section>

			<section class="panel2">
				 <div class="container1">
				<section class="cr-container">

				<input id="img-1" name="radio-set-1" type="radio" class="cr-selector-img-1" checked/>
				<label for="img-1" class="cr-label-img-1">Defis</label>

				<input id="img-2" name="radio-set-1" type="radio" class="cr-selector-img-2" />
				<label for="img-2" class="cr-label-img-2">Bonus</label>

				<input id="img-3" name="radio-set-1" type="radio" class="cr-selector-img-3" />
				<label for="img-3" class="cr-label-img-3">Portes</label>

				<input id="img-4" name="radio-set-1" type="radio" class="cr-selector-img-4" />
				<label for="img-4" class="cr-label-img-4">Configuration</label>

				<!--Recupération images pour slice-->
				<div class="back-slice">
					<div>
						<span>Image 1</span>
						<span> Image 2</span>
						<span> Image 3</span>
						<span> Image 4</span>
					</div>
					<div>
						<span> Image 1</span>
						<span> Image 2</span>
						<span> Image 3</span>
						<span> Image 4</span>
					</div>
					<div>
						<span>Image 1</span>
						<span>Image 2</span>
						<span>Image 3</span>
						<span>Image 4</span>
					</div>
					<div>
						<span>Image 1</span>
						<span>Image 2</span>
						<span>Image 3</span>
						<span>Image 4</span>
					</div>
				</div>
				<div class="description">
					<p><span>Défis</span><span>Sortez vite de chaque continent<br>
					La jeunesse est de votre coté<br>
					L'intelligence, la souplesse, la rapidité de vos mouvements  seront les armes nécessaires au succès de cette nouvelle aventure qui vous attend<br>

					Parcourez les différents continents du monde Ame no ukihashi remplis de pièges qui vous attendent<br>
					Trouver l'unique chemin menant à la sortie de chaque continent</br>
					Amaterasu vous recompensera davantage si vous lui offrais les trésors ramassés lors de votre aventure<br>
					Retrouver le rapidement avant qu'il ne reparte vers d'autre cieux</p>
					<p><span>Trésors</span><span>Offrez les pour le dieu</br>
					Des pierres précieuse sont cachées dans chaque continent, retrouver les</br></br></br>
					<span><img src="images/or.png" alt="or"/>&nbsp;&nbsp;&nbsp;
							<span><img src="images/argent.png" alt="or"/>&nbsp;&nbsp;&nbsp;Diamant, considérés comme maléfiques</span></p>
					<p><span>Bloc</span><span>Certaines actions à accomplir</br>
					Votre magie sera inefficace pour bouger des murs des labyrinthes</br>
					Observer pour comprendre le système imposé par le dieu</br></span></p>
					<p><span>Jouer</span><span>Menez l'aventure de votre vie<br>
					(images touches configuration)</span></p>
				</div>
			</section>
        </div>
			</section>

			<section class="panel3">


					<p id="nom">
						GHANSUM Nourdine<br/><br/>
						POL Patrick<br/><br/>
						AÏT AHMED Kamel <br/><br/>
						BASKARAMOORTHY Anusan <br/><br/>
						IBOUROIHIM Loutfi</p><br/>

			</section>

			<?php

			echo '<section class="panel5">
			<h2>Contact : </h2><br><br>
				<center><p><br>
					Nourdine : ghansumn@gmail.com <br>
					Patrick : pol.patrick1411@gmail.com
				</p>';
			?>
				</section>
			</div>
		</div>
	</body>
</html>
