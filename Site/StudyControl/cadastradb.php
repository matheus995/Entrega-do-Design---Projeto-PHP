<?php
	include "admin/config.inc.php";
	$matr = $_REQUEST['matr'];
	$nomec = $_REQUEST['nomec'];
	$senh = $_REQUEST['senh'];

	mysqli_set_charset($conexao, "utf8");
	$sql = "INSERT INTO usuarios (matricula, nome, senha) VALUES 
	($matr, '$nomec', '$senh')";
	$insert = mysqli_query($conexao, $sql);

	echo "<link href='css/bootstrap.css' rel='stylesheet'>";
	echo "<link href='css/estilo.css' rel='stylesheet'>";
	if(!$insert){
	    echo "<body style='background-color: #18224D'><h3 style='margin-top: 0; color: #f00;' class='text-center'>Erro ao tentar cadastrar.</h3><body>";
	}else{
	   echo "<body style='background-color: #18224D'><h3 style='margin-top: 0; color: #0f0;' class='text-center'>Cadastrado com sucesso!</h3><body>";
	}
	mysqli_close($conexao);
?>