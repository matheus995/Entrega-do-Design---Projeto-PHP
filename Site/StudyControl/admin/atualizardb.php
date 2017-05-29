<?php
	include "config.inc.php";
	$userID = $_REQUEST['idUsuario'];
	
	mysqli_set_charset($conexao, "utf8");
	$busca = "SELECT * FROM disciplinas INNER JOIN notas ON disciplinas.matricula = notas.matricula AND disciplinas.idDisciplina = notas.idDisciplina INNER JOIN numfaltas ON disciplinas.matricula = numfaltas.matricula AND disciplinas.idDisciplina = numfaltas.idDisciplina WHERE disciplinas.matricula = $userID AND notas.matricula = $userID AND numfaltas.matricula = $userID order by nomeDisciplina";
    $todos = mysqli_query($conexao, $busca);

    $sql = "";
    while ($dados = mysqli_fetch_array($todos)) {
    	$matricula = 	$_REQUEST['matricula'.$dados['idDisciplina']];
		$id =			$_REQUEST['idDisciplina'.$dados['idDisciplina']];
		$disciplina =	$_REQUEST['nomeDisciplina'.$dados['idDisciplina']];
		$professor =	$_REQUEST['nomeProfessor'.$dados['idDisciplina']];
		$nota1 =		(!empty($_REQUEST['nota1-'.$dados['idDisciplina']]) ? $_REQUEST['nota1-'.$dados['idDisciplina']] : "NULL");
		$falta1 =		$_REQUEST['falta1-'.$dados['idDisciplina']];
		$nota2 =		(!empty($_REQUEST['nota2-'.$dados['idDisciplina']]) ? $_REQUEST['nota2-'.$dados['idDisciplina']] : "NULL");
		$falta2 =		$_REQUEST['falta2-'.$dados['idDisciplina']];
		$nota3 =		(!empty($_REQUEST['nota3-'.$dados['idDisciplina']]) ? $_REQUEST['nota3-'.$dados['idDisciplina']] : "NULL");
		$falta3 =		$_REQUEST['falta3-'.$dados['idDisciplina']];

		$sql .= "UPDATE disciplinas SET nomeDisciplina='$disciplina', nomeProfessor='$professor' WHERE matricula=$matricula AND idDisciplina=$id;";
		$sql .= "UPDATE notas SET nota1=($nota1), nota2=($nota2), nota3=($nota3) WHERE matricula=$matricula AND idDisciplina=$id;";
		$sql .= "UPDATE numfaltas SET falta1=$falta1, falta2=$falta2, falta3=$falta3 WHERE matricula=$matricula AND idDisciplina=$id;";
	}
	mysqli_set_charset($conexao, "utf8");
	$alterar = mysqli_multi_query($conexao, $sql);
	echo "<link href='../css/bootstrap.css' rel='stylesheet'>";
	if(!$alterar){
	    echo "<div class='alert alert-danger' role='alert'>Ocorreu um erro ao atualizar dados no banco de dados.</div>";
	}else{
	   echo "<div class='alert alert-success' role='alert'>Atualizado com sucesso!</div>";
	}
	mysqli_close($conexao);
?>