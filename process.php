

<?php

	session_start();

/********** ETAPE 1 Recuperer les variables *****************/

$user = Filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING); //user reçu par l'input

$pass = Filter_input(INPUT_POST,"password",FILTER_SANITIZE_STRING); // pass reçu par l'input

//$link = mysql_connect("localhost", "root", "");

//mysql_select_db("labyrinthe", $link);

// commande sql ici

if (isset($user) && isset($pass) && !empty($user) && !empty($pass))
{
	$connected = true;
	$_SESSION["connected"] = $connected;
	$_SESSION["name"] = $user;
	header('Location: index.php');

}else{
	echo  "Veuillez remplir tout les champs";
}

/*
//$sql = "SELECT user, pass FROM members WHERE user='$user'";

//connexion

$result = mysql_query($sql) or die(mysql_error());

//stocke les variables dans un array
$array = array();

while($row = mysql_fetch_assoc($result)) {

   $array[] = $row;



}



$realUser = $array[0]['user'];

$realPass = $array[0]['pass'];



/********** ETAPE actions + execute le code demandé/ou erreur ****************/

/*

if ( $user == $realUser && $pass == $realPass)

{

//code ici | succes
	$connected = true;
	$_SESSION["connected"] = $connected;
	$_SESSION["name"] = $user;
		header('Location: index.php');

}



else if ( $user == $realUser && $pass != $realPass )

{

	$error = "Le mot de passe est incorrect"; // erreur mauvais mot de passe

}



else if ( $user != $realUser )

{

 $error = "Nom d'utilisateur invalide."; //erreur pseudo inexistant

}



if($error != null)
{
	$_SESSION["errorMsg"] = $error;
	header('Location: index.php'); // Redirige vers Connexion
}
else
	{
	$account = array (
		'name' => $pseudo,'password' => $password
	);

	}
//fin co
*/

?>
