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
		<img class="logo" src="img/logo.png" >
		<div class="row" id="painel">
			<div class="container col-xs-12">
				<form class="form-horizontal" method="post" action="login.php" target="iframe">
					<h2 class="titulo text-center">Login</h2>
					<div class="form-group">
						<span class="pull-left"><img class="user" src="img/login-icon.png"></span>
						<label class="col-xs-10 control-label" for="login"><input class="form-control" type="text" name="login" id="login" placeholder="Matrícula" required autofocus></label>
					</div>
					<div class="form-group">
						<span class="pull-left"><img class="user" src="img/lock.png"></span>
						<label class="col-xs-10 control-label" for="senha"><input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required autofocus></label>
					</div>
					<div class="row" style="padding: 10px 20px 0 13px;">
						<button class="btn btn-success col-xs-4 col-xs-push-2" name="entrar" style="width: 120px;">Entrar</button>
						<a href="cadastro.php"><button style="margin-left: 15px; width: 120px;" class="btn btn-primary col-xs-4 col-xs-push-2" name="cadastro" type="button">Cadastrar</button></a>
					</div>
					<iframe name="iframe" class="col-xs-12" style="height: 50px; border: none;" scrolling="no"></iframe>
				</form>
			</div>
		</div>
	</div>

	<script src="js/jquery-3.2.0.js"></script>
	<script src="js/bootstrap.js"></script>

</body>
</html>
