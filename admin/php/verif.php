<?php    

session_start();


include('../connect/connect.php');


// if (isset($_POST['submit'])) { //si $_POST['submit'] existe alors le code est envoyé
// 		if (!empty($_POST['user']) and !empty($_POST['password'])) { //si $_POST['user'] est $_POST['password'] n'est pas vide

// 			$user =$_POST['user'];
// 			$password_enter = $_POST['password'];
			
// 			$password = htmlentities(trim(sha1($_POST['password']))); 	// le htmlentities qui fait la même chose que htmlspecialchars
// 			$user_enter = htmlentities($_POST['user']); 				//sauf que tous les caractères qui ont des équivalents en entités HTML sont traduits.
// 			//  echo "<pre>";
// 			//  var_dump($_POST);
// 			//  echo "</pre>";
// 			//  die();
// 			$database = "SELECT * FROM adminlogin where user = '$user_enter' ";
			
// 			$result = $pdo->prepare($database);
// 			$result->execute();
// 			$data = $result->fetchAll();
			

// 			if (password_verify($password_enter , $data[0]['password'])) { //si le password saisi est bien le même que celui hasher dans la BDD
// 				$_SESSION['jeton'] = $user_enter; //déclare la superglobale $_SESSION['jeton'] qui a pour valeur $data[0]['password']
// echo "ok";
// die();
// 				header('location:index.php');

// 			} else {

// 				header('Location:login.php?echec');
// 			}
// 		}
// 	}


$login=$_POST['user'];
$password=$_POST['password'];

$login_ok="binabou";
$password_ok="Aliyahmaissa.1";
//$password_ok=password_hash("binta", PASSWORD_DEFAULT);

if($login==$login_ok AND $password==$password_ok){
	$_SESSION['jeton']=1;

     header("Location:../index.php");
}
else{

	 header("Location:login.php");
}




?>