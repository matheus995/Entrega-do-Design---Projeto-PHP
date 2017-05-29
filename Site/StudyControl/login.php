<?php
	include "admin/config.inc.php";
	
	if (isset($_POST["entrar"])) {
		
		session_start();

		$login = $_POST["login"];
		$senha = $_POST["senha"];

		$result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE matricula = '$login' AND senha = '$senha';");
		
		if (mysqli_num_rows($result) > 0) {
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;
			echo "<script>top.window.location = 'admin/admin.php'</script>";
		} else {
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
			session_destroy();
			echo "<link href='css/bootstrap.css' rel='stylesheet'>";
			echo "<body style='background-color: #18224D'><h3 style='margin-top: 10px; color: #f00;' class='text-center'>Falha na Autenticação!</h3><body>";
		}

	}
 ?>