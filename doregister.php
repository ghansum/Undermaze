<?PHP
include 'dbconnect.php';
include 'func.php';
sec_session_start(); // Our custom secure way of starting a php session.

if(isset($_POST['email'], $_POST['pass'],$_POST['pseudo'])) {
   $username = $_POST['pseudo'];
   $email = $_POST['email'];
   $password = $_POST['pass']; // The hashed password.
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
   echo 'Mail';
   }
   else if(register($username,$email, $password, $mysqli) == true){
      // Login success
     echo '';
   }
   else {
      // Login failed
      echo 'Nope';
   }
} 
else {
   // The correct POST variables were not sent to this page.
   echo 'Invalid Request';
}
?>