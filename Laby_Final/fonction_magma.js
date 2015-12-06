var canvas = document.querySelectorAll('canvas');
		var context = [];
		for (var i=0; i<canvas.length; i++) {
			context[i] = canvas[i].getContext('2d');
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
		
		
		function isNextMoveAllow(newPosX, newPosY) {
			var centrePersoX = newPosX+10;
			var centrePersoY = newPosY+17;
			var tile = Math.ceil(centrePersoX / 16) + (77 * Math.floor(centrePersoY / 16));
			var ligne = Math.ceil(tile/77);
			var colonne = tile - ((ligne-1)*77);
			var l = [ligne-2,ligne-2,ligne-2,ligne-1,ligne-1,ligne-1,ligne,ligne,ligne];
			var c = [colonne-2,colonne-1,colonne,colonne-2,colonne-1,colonne,colonne-2,colonne-1,colonne];
			for (var i=0; i<l.length; i++) {
			      var centreCarreX = (c[i]*16)+8, centreCarreY = (l[i]*16)+8;				
			      if (centrePersoX+8>centreCarreX-8 && centrePersoX-8<centreCarreX+8 && centrePersoY+8>centreCarreY-8 && centrePersoY-8<centreCarreY+8) {
					if (!map.allowWalk[l[i]][c[i]]) {
						return false;
					}
				}
			}
			return true;
		}
		


		var seconde = 430;

 		$(function(){
		  
		 
		  function compte(){
		     $('#heure').html("<br/>Temps écoulé : " +seconde+ " secondes");
		     $('#score4').html("<br/>Votre Score : " +score1);
		     seconde--; 
		    if(seconde<=0){
		       seconde = 0;
		        
		     }
   		    
		  }
		  setInterval(compte, 1000);

		});

		
     

				
		var directionX = 0, directionY = 0;
		var dir = 3;
		
		var posX=6, posY=465;
		//var posX = 1106, posY = 23;
		var nbrFrame = 0;
		var toutpris = false;
		var winf=false;
		var active1=false;
		var active2=false;
		var etape1=false;
		var etape2=false;
		var choix1=false;
		var vittmp=0;
		var etat1=false;
		var etat2=false;
		var bonus=0;
		var borm1=Math.floor(Math.random()*10+1);
		var borm2=Math.floor(Math.random()*9+1);
		var p1=false, p2=false, p3=false, p4=false, p5=false, p6=false, p7=false, p8=false, p9=false, p10=false, p11=false, p12=false;
		var objet1=false, objet2=false, objet3=false, objet4=false, objet5=false, objet6=false, objet7=false;
		var score1 = 0;
		var vitesse=3;
		var nbElement1 = 0;
		var nbElement2 = 0;
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

			
			context[3].clearRect(0,0,1232,512);
			context[3].drawImage(sprite, step*20, direction*25, 20, 25, posX, posY, 20, 25);       /*----------- taille du bonhomme ------*/
			if (directionX != 0 || directionY != 0) {
				if (isNextMoveAllow(posX+directionX*vitesse, posY)) {
					posX += vitesse*directionX;
				}
				if (isNextMoveAllow(posX, posY+directionY*vitesse)) {
					posY += vitesse*directionY;
				}
				map.evenements2();
			
			}
			map.Quete();
			requestAnimationFrame(function() { drawPerso(dir,step); });
		}
		
		function drawMap0() {
			context[0].clearRect(0,0,1232,512);
			for (var j=0; j<map.map0.length; j++) {
				for (var i=0; i<map.map0[j].length; i++) {
					drawTile(map.map0[j][i], i*16, j*16, context[0]);
				}
			}
		}				
		

		function drawMap1() {
			context[1].clearRect(0,0,1232,512);
			for (var j=0; j<map.map1.length; j++) {
				for (var i=0; i<map.map1[j].length; i++) {
					drawTile(map.map1[j][i], i*16, j*16, context[1]);
				}
			}
		}				

		
	/*	function extractUrlParams () {
var t = location.search.substring(1).split('&');
var f = [];
for (var i=0; i<t.length; i++){
var x = t[ i ].split('=');
f[x[0]]=f[1];
}
return f;
}
	*/	
		var sprite = new Image();
		sprite.onload = function() {
		      chargerMap("room_feu.js");
			
		}
		sprite.src = "sprite.png" ;
		
		vitesseSpinner = 1000,
		now = new Date(),
		finChargement = false,
		startTransition = false;
		function transition(opacity, sens) {
			startTransition = (opacity==0 && sens==1);
			if (opacity <= 0 && sens == -1) {
				map.evenements();
				return false;
			} else if (opacity >= 1 && sens == 1) {

			
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
			
		
				if (finChargement) {
					drawPerso(dir,0);
					opacity = 1;
					sens = -1;
					finChargement = false; 
				}
			} else {
				context[5].clearRect(0,0,canvas[5].width,canvas[5].height);
				opacity += sens*0.02;
				context[5].fillStyle = "rgba(0,0,0," + opacity + ")";
				context[5].fillRect(0,0,canvas[5].width, canvas[5].height); 
			}
			requestAnimationFrame(function() { transition(opacity, sens); });
		}
		transition(1,1);
