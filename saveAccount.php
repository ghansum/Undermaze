<?php
	session_start();

	/********** ETAPE 1 Recuperer les variables  *****************/

/*Recuperer les informations ennvoyées par le formulaire*/
if(isset($_POST['email']) && isset($_POST['pseudo']) && isset($_POST['pass']) && isset($_POST['pass2'])){
	$email = $_POST['email'];
	$pseudo = $_POST['pseudo'];
	$password = $_POST['pass'];
	$passwordBis = $_POST['pass2'];
}
print_r($_POST);
echo "<br/>";
/*Verifier les informations*/

$error = null; 

//if empety

if (empty($pseudo) || empty($password))
{

 $error = "Nom d'utilisateur ou/et mot de passe invalide(s).";

}

else
if(!$email or !$pseudo or !$password or !$passwordBis)
{
	$error = "Veuillez remplir tous les champs requis";
}
else if($password !==$passwordBis)
{
	$error = "La confirmation doit être identique au mot de passe";
}
else if( strlen($password) < 5){ 
   $error = 'Votre mot de passe doit contenir minimum 6 caractères.'; 
   } 
   else 
      if( strlen($pseudo) > 15 || strlen($pseudo) < 3){ 
      $error = 'Votre nom d\'utilisateur doit contenir entre 3 et 15 caractères.'; 
      } 

	
else
{

/********** Identifians et connexion et stocker les variables *********/


// Se connecter a mysql + database


$link = mysql_connect("localhost", "root", "");

// commande sql



    mysql_select_db("labyrinthe", $link);

    $result = mysql_query(

        "SELECT * FROM members WHERE user='$pseudo' LIMIT 1");


$error = null;

if(mysql_fetch_array($result) !== false)
{

	$error = "Nom d'utilisateur déjà utilisé";
	header("Location: index.php");
}

else
{

	mysql_select_db("labyrinthe", $link);
	$req = "INSERT INTO members(user,pass,mail,nbWin) VALUES ('$pseudo','$password','$email',1)";
	$result = mysql_query($req);
	
	mysql_query("INSERT INTO labym(Player, Score, Temps, NbGame) VALUES ('$pseudo',0,0,0);");
	mysql_query("INSERT INTO labyn(Player, Score, Temps, NbGame) VALUES ('$pseudo',0,0,0);");
	mysql_query("INSERT INTO labyd(Player, Score, Temps, NbGame) VALUES ('$pseudo',0,0,0);");
	mysql_query("INSERT INTO labyf(Player, Score, Temps, NbGame) VALUES ('$pseudo',0,0,0);");
	

	$_SESSION['wel'] = $pseudo;
	header("Location: index.php"); /* Redirige vers index */

}

}

	
if($error != null)
{
	$_SESSION["errorMsg"] = $error; 
	echo $error;
	//header('Location: index.php'); /* Redirige vers Enregistrement*/
}
else
{
	$account = array (
		'email' => $email,'name' => $pseudo,'password' => $password,'registered_at' => time() /* registerer_at : Date d'enregistrement*/
	);	
	$_SESSION['user'] = $account;
		
}
	
?>