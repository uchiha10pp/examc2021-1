<?php 
	
	include_once "Coneccion.php";

	class Login {
		if(isset($_POST["submit"])){
			$username = $_POST["usu"];
			$password = $_POST["pass"];

			$userdb = "juan";
			$passbd = password_hash("123", PASSWORD_BCRYPT);;
			//TODO extraer datos de la db
			//primero comparar usuario
		if($userdb == $username){
		//TODO si encuentro usuario comparar contraseña
			if(password_verify($password, $passbd)){
			//TODO ingreso al sistema
			//TODO extraer de la bd elementos necesarios para identificar a mi usuario
				session_start();
				$_SESSION["id"] = 1;
				$_SESSION["usuario"] = "juan";
				$_SESSION["tipo"] = "administrador";
				// Redireccionar
				header("location: welcome.php");
			}else{
				echo "usuario y/o contraseña no encontrado";
			}
		}else{
			echo "usuario y/o contraseña no encontrado";
		}
}

?>