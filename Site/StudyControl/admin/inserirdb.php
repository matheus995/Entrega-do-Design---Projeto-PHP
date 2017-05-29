<?php
	include "config.inc.php";
	$disciplina = $_REQUEST['disciplina'];
	$professor = $_REQUEST['professor'];

	mysqli_set_charset($conexao, "utf8");
	$sql = "INSERT INTO disciplinas (matricula, nomeDisciplina, nomeProfessor) VALUES 
	($userID, '$disciplina', '$professor')";
	$insert1 = mysqli_query($conexao, $sql);
	
	$buscaNome = mysqli_query($conexao, "SELECT idDisciplina FROM disciplinas WHERE matricula = $userID AND nomeDisciplina = '$disciplina' ORDER BY idDisciplina DESC");
	$novoID = mysqli_fetch_array($buscaNome);

	$sql = "INSERT INTO notas (matricula, idDisciplina, nota1, nota2, nota3) VALUES ($userID, $novoID[0], (NULL), (NULL), (NULL));";
	$sql .= "INSERT INTO numfaltas (matricula, idDisciplina) VALUES ($userID, $novoID[0]);";
	$insert2 = mysqli_multi_query($conexao, $sql);

	if(!$insert1 or !$novoID or !$insert2){
	    echo "<div class='alert alert-danger' role='alert'>Ocorreu um erro ao cadastrar no banco de dados.</div> <a href='admin.php?pg=adicionar'><button class='btn btn-primary'>Voltar</button></a>";
	}else{
	   echo "<div class='alert alert-success' role='alert'>Inserido com sucesso!</div>
			<a href='admin.php?pg=adicionar'><button class='btn btn-primary'>Voltar</button></a>";
	}
	mysqli_close($conexao);
?>