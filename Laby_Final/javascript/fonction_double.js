var canvas = document.querySelectorAll('canvas');//canvas[0] contient le premeir canvas et canvas[3] le second
		var context = [];
		for (var i=0; i<canvas.length; i++) {//pourquoi faire une boucle ? car plus tard, nous rajouterons encore des canvas par dessus! on aura donc pas besoin de réadapté le code
			context[i] = canvas[i].getContext('2d');//context[0] contient le context du premier canvas et context[3] du second
		}
			
		var scriptElement = document.getElementById('vide');
		function chargerMap(carte) {
			scriptElement.parentNode.removeChild(scriptElement);
			scriptElement = document.createElement('script');
			scriptElement.id = "vide";
			scriptElement.src = 'changeCarte.php?map=' + carte;
			document.body.appendChild(scriptElement);
		}

		var nbrTilesOnOneLine = 30;
		function drawTile(num, posX, posY, ctx) {
			var ligne = Math.ceil(num/nbrTilesOnOneLine);
			var colonne = num - ((ligne-1)*nbrTilesOnOneLine);
			ctx.drawImage(tileset, (colonne-1)*16, 16*(ligne-1), 16, 16, posX, posY, 16, 16);
		}
		
		window.requestAnimationFrame = (function(){
			return window.requestAnimationFrame || // La forme standardisÃ©e
			window.webkitRequestAnimationFrame  || // Pour Chrome et Safari
			window.mozRequestAnimationFrame     || // Pour Firefox
			window.oRequestAnimationFrame       || // Pour Opera
			window.msRequestAnimationFrame      || // Pour Internet Explorer
			function(callback) {                   // Pour les Ã©lÃ¨ves du dernier rang
				window.setTimeout(callback, 1000 / 60);
			};
		})();
		
		function isNextMoveAllow(newPosX, newPosY) {//on regarde si avec la position de coordonnées (newPosX, newPosY) on est pas sur une mauvaise case
			var centrePersoX = newPosX+10;//on créer un carré virtuel de coté 16 et de centre (centrePersoX, centrePersoY)
			var centrePersoY = newPosY+17;
			var tile = Math.ceil(centrePersoX / 16) + (77 * Math.floor(centrePersoY / 16));//on enregistre le numéro de la tuile sur lequelle se trouve le perso
			var ligne = Math.ceil(tile/77);//on cherche sur quelle ligne se trouve le perso
			var colonne = tile - ((ligne-1)*77);//on cherche sur quelle colonne se trouve le perso
			var l = [ligne-2,ligne-2,ligne-2,ligne-1,ligne-1,ligne-1,ligne,ligne,ligne];//on enregistre les 9 cases autour du carré jaune
			var c = [colonne-2,colonne-1,colonne,colonne-2,colonne-1,colonne,colonne-2,colonne-1,colonne];//ces 9 cases on pour coordonnées (l[i];c[i]) mais attention, ces coordonnées ne sont pas en pixels! Ces coordonnées représente le nombre de cases à partir du haut et de la droite
			for (var i=0; i<l.length; i++) {
				var centreCarreX = (c[i]*16)+8, centreCarreY = (l[i]*16)+8;//on cherche le centre de chaque carré autour carré jaune afin de pouvoir vérifier plus facilement si on le touche				
				if (centrePersoX+8>centreCarreX-8 && centrePersoX-8<centreCarreX+8 && centrePersoY+8>centreCarreY-8 && centrePersoY-8<centreCarreY+8) {//si le carré jaune touche une case autour...
					if (!map.allowWalk[l[i]][c[i]]) {//...et si on a pas l'autorisation de marcher sur la case
						return false;//on arrête tout, on a pas le droit de se trouver ici avec le bonhomme
					}
				}
			}
			return true;//si on a pas retourné false plus haut, on a le droit de se situer ici avec le personnage. On renvoi donc true.
		}
		
		var seconde = 400;
		$(function(){
		  
		  function compte(){
		     $('#countdownmul').html("<center style='margin-top:8px;'>Temps restant : " +seconde+ " secondes"+ "</center>");
		     $('#scoremul').html("<br/>Votre Score : " +score);
		     seconde--; 
		     if(seconde<=0){
		     	seconde=0;
		     	}
		  }
		  setInterval(compte, 1000);

		});
		
		var directionX = 0, directionY = 0;
		var directionX2 = 0, directionY2 = 0;
		var dir = 3;
		var dir2 = 3;
		var posX = 0, posY = 14;	
		var posX2 = 0, posY2 = 470;		
		var nbrFrame = 0, nbrFrame2=0;
		var p1 = false, p2 = false, p3 = false, p4 = false, p5 = false, p6 = false, p7 = false, p8 = false, ralentit = false, ralentit2 = false;
		var p9 = false, p10 = false, p11 = false, p12 = false,p13 = false, arret = false, arret2 = false, p14 = false, p15 = false, p16 = false, p17 = false, 			p18 = false, p19 = false, p20 = false, p21 = false, p22 = false, p23 = false, p24 = false, p25 = false, p26 = false, p27 = false, p28 = false, p29 = false, p30 = false, p31 = false, p48 = false;
		var treasor=false, treasor1=false, treasor2=false, treasor3=false, treasor4=false, treasor5=false, treasor6=false, treasor7=false, treasor8=false;
		var score = 0, score2=0;
		var vit=3, vit2=3;
		var s = 0, s1 = 0, s2 = 0, s3 = 0;
		var bonus=0;
		var winD=false, winD2=false;
		var nbElement = 0;
		var nbElement2 = 0, nbElement3 = 0, nbElement4 = 0, nbElement5 = 0, nbElement6 = 0, nbElement7 = 0, nbElement8 = 0, nbElement9 = 0, nbElement10 = 0
		, nbElement11 = 0;

		function drawPerso(direction, step) {
			if (directionX!=0 || directionY!=0) {
				nbrFrame++;
				if (nbrFrame>2) {
					step++;
					nbrFrame = 0;
				}
				if (step>7) {step=1;}
			} else {
				step=0;
			}
			context[4].clearRect(0,0,1232,512);
			context[4].drawImage(sprite, step*20, direction*25, 20, 22, posX, posY, 20, 22);
			
			if (directionX != 0 || directionY != 0) {
				if (isNextMoveAllow(posX+directionX*vit, posY)) {
					posX += vit*directionX;
				}
				if (isNextMoveAllow(posX, posY+directionY*vit)) {
					posY += vit*directionY;
				}
				map.evenements2();
			}
			map.MonBonus();
			map.temporel();
			map.pause();
			requestAnimationFrame(function() { drawPerso(dir,step); });//on rappelle la fonction qui sera exécuter plusieurs ( une trentaine ) de fois par seconde
		}

		function drawPerso2(direction2, step2) {
			if (directionX2!=0 || directionY2!=0) {
				nbrFrame2++;
				if (nbrFrame2>2) {
					step2++;
					nbrFrame2 = 0;
				}
				if (step2>7) {step2=1;}
			} else {
				step2=0;
			}
			context[3].clearRect(0,0,1232,512);
			context[3].drawImage(sprite2, step2*20, direction2*25, 20, 22, posX2, posY2, 20, 22);
			
			if (directionX2 != 0 || directionY2 != 0) {
				if (isNextMoveAllow(posX2+directionX2*vit2, posY2)) {
					posX2 += vit2*directionX2;
				}
				if (isNextMoveAllow(posX2, posY2+directionY2*vit2)) {
					posY2 += vit2*directionY2;
				}
				map.evenements2();	
			}
			
			map.MonBonus();
			map.temporel();
			map.MonBonusHAUT();
			map.pause();
			requestAnimationFrame(function() { drawPerso2(dir2,step2); });//on rappelle la fonction qui sera exécuter plusieurs ( une trentaine ) de fois par seconde
		}

		
		function drawMap0() {//au passage, on créer une fonction pour dessiner la carte
			context[0].clearRect(0,0,1232,512);
			for (var j=0; j<map.map0.length; j++) {//map.map0 représente toutes les lignes de la carte
				for (var i=0; i<map.map0[j].length; i++) {//map.map0[j] représente maintenant une ligne de la carte
					drawTile(map.map0[j][i], i*16, j*16, context[0]);
				}
			}
		}				
		
		function drawMap1() {//au passage, on créer une fonction pour dessiner la carte
			context[1].clearRect(0,0,1232,512);
			for (var j=0; j<map.map1.length; j++) {//map.map0 représente toutes les lignes de la carte
				for (var i=0; i<map.map1[j].length; i++) {//map.map0[j] représente maintenant une ligne de la carte
					drawTile(map.map1[j][i], i*16, j*16, context[1]);
				}
			}
		}


		var sprite2 = new Image();
		var sprite = new Image();
		sprite2.onload = function() {
			chargerMap("room_double.js");
		}
		sprite.src = "sprite_new.png" ;
		sprite2.src = "sprite3.png" ;
		
		vitesseSpinner = 1000,//pour le spinner
		now = new Date(),//pour le spinner
		finChargement = false,//servira à déclenché le déclaircissement lors de la fin du chargement
		startTransition = false;//servira à stopper le dessinage du personnage pendant la transition 
		function transition(opacity, sens) {
			startTransition = (opacity==0 && sens==1);//si l'opacité vaut 0 et que le sens vaut 1, on commence tout juste la transition dons startTransition vaudra true. dans tout les autre cas, startTransition vaudra false.
			
			if (opacity <= 0 && sens == -1) {//si l'écran noir à fini de disparaitre
				map.evenements();
				
				return false;//on arrette la fonction ici, on peut commencer à jouer.
			} else if (opacity >= 1 && sens == 1) {//si l'écran noir à fini d'apparaitre
				//on dessine le spinner
				/************** code du spinner ***************/
				context[5].fillStyle = "rgba(0,0,0,1)";
				context[5].fillRect(0,0,canvas[5].width, canvas[5].height);
				var rotationsSinceStarted = (new Date() - now) / vitesseSpinner;
				var rotationInTwelfths = parseInt(rotationsSinceStarted * 12) / 12;
				context[5].save();
				context[5].fillRect(0, 0, canvas[5].width, canvas[5].height);
				context[5].translate(240, 240);
				context[5].rotate(-Math.PI * 2 * rotationInTwelfths);
				for (var i = 0; i < 18; i++) {
					context[5].rotate(Math.PI * 2 / 12);
					context[5].beginPath();
					context[5].moveTo(16, 0);
					context[5].lineTo(8, 4);
					context[5].strokeStyle = "rgba(255,255,255," + i / 12 + ")";
					context[5].stroke();
				}
				context[5].restore();
				/******************************************************/
		
				if (finChargement) {//si le chargement est terminé
					drawPerso(dir,0); //on dessine le personnage
					drawPerso2(dir2,0);
					opacity = 1;//on met l'opacité à 1, l'écran sera tout noir
					sens = -1;//on met le sens à -1, lors du rapelle de la fonction avec le requestAnimationFrame, la foction va donc passer au déclaircissement de l'écran
					finChargement = false;//on remet le finChargement à false car il nous à déjà servit à enclencher le processus de déclaircissement de l'écran
				}
				
			} else {//Si on est pendant une transition
				context[5].clearRect(0,0,canvas[5].width,canvas[5].height);//on efface le canvas
				opacity += sens*0.02;//on ajoute ou on enlève un peu d'opacité au calque. On peut modifier la vitese de transition en modifiant le 0.02
				context[5].fillStyle = "rgba(0,0,0," + opacity + ")";//on indique la couleur noir avec une certaine opacité
				context[5].fillRect(0,0,canvas[5].width, canvas[5].height);//on dessine le calque qui sera plus ou moins transparent selon l'opacité
			}
			requestAnimationFrame(function() { transition(opacity, sens); });//on rapelle cette fonction en repassant les deux variables opacity et sens qui ont, si nécéssaire, été modifié pendant pour créer l'effet de noircissement ou de dé-noircissement
		}
		transition(1,1);
