<?php
	include "config.inc.php";

	session_start();

	if (isset($_REQUEST["sair"])) {
		mysqli_close($conexao);
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		session_destroy();
		header('location:../index.php');
	}

	if (!isset($_SESSION['login']) and !isset($_SESSION['senha'])) {
		mysqli_close($conexao);
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		session_destroy();
		header('location:../index.php');
	}

	$userID = $_SESSION['login'];
	$buscaNome = mysqli_query($conexao, "SELECT nome from usuarios WHERE matricula = $userID");
	$usuario = mysqli_fetch_array($buscaNome);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Site para Organização de Disciplinas para Estudar">
	<meta name="author" content="Study Control Team">
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/estilo.css" rel="stylesheet" type="text/css">
	<script src="../js/jquery-3.2.0.js"></script>
	<script src="../js/pgwcookie.min.js"></script>
	<script type="text/javascript"> $(document).ready(function() { $.pgwCookie({ name: 'tela', value: window.innerWidth }); }); </script>
	<script src="../js/bootstrap.js"></script>

	<title>Controle de Estudos</title>

</head>
<body>

    <?php
    	include "topo.php";
    	include_once "menuadm.php";
    ?>

    <div class="container">

		<?php

			$var = "home.php";
			@$pg = $_GET['pg'];

			if(empty($_SERVER["QUERY_STRING"])) {
				include("$var");
			} else {
				include("$pg.php");
			}
		?>

		<hr>
		<?php include "rodape.php"; ?>

	</div>

</body>
</html>
