<?php 
	include "admin/config.inc.php";
 ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Site para Organização de Disciplinas para Estudar">
	<meta name="author" content="Study Control Team">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/estilo.css" rel="stylesheet" type="text/css">

	<title>Controle de Estudos</title>

</head>
<body style="background-image: url('img/fundo.jpg');">

	<div class="container-fluid">
		<img class="logo" src="img/logo.png">
        <div class="row" id="painel" style="max-width: 500px;">
        	<div class="container col-xs-12">
				<form class="form-horizontal" method="post" action="cadastradb.php" target="icad" accept-charset="utf-8">
					<h2 class="titulo text-center">Cadastro</h2>
				 	<div class="form-group">
				 		<span class="pull-left"><img class="user" src="img/login-icon.png"></span>
				 		<label class="control-label col-xs-10" for="matr">
				 			<input type="number" id="matr" name="matr" class="form-control" placeholder="Matrícula" required autofocus>
				 		</label>
				 	</div>
				 	<div class="form-group">
				 		<span class="pull-left"><img class="user" src="img/login-icon.png"></span>
				 		<label class="control-label col-xs-10" for="nomec">
				 			<input type="text" id="nomec" name="nomec" class="form-control" placeholder="Nome" required autofocus>
				 		</label>
				 	</div>
				 	<div class="form-group">
				 		<span class="pull-left"><img class="lock" src="img/lock.png"></span>
				 		<label class="control-label col-xs-10" for="senh">
				 			<input type="password" id="senh" name="senh" class="form-control" placeholder="Senha" required autofocus>
				 		</label>
				 	</div>
				 	<div class="container-fluid col-xs-12">
					 	<button type="submit" class="btn btn-success col-xs-4 col-xs-push-1" style="width: 195px; margin-right: 10px;">Cadastrar</button>
					 	<a href="index.php"><button type="button" class="btn btn-primary col-xs-4 col-xs-push-1" style="width: 150px;">Voltar</button></a>
				 	</div>
				 	<iframe name="icad" class="col-xs-12" style="margin-top: 20px; height: 40px; border: none;" scrolling="no"></iframe>
			 	</form>
			 </div>
		 </div>
	</div>

</body>
</html>

