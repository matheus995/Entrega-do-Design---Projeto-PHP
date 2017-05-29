<?php

	$matricula = $_REQUEST['mat'];
	$id = $_REQUEST['idDis'];

	$sql = "DELETE FROM numfaltas WHERE matricula=$matricula AND idDisciplina=$id;";
	$sql .= "DELETE FROM notas WHERE matricula=$matricula AND idDisciplina=$id;";
	$sql .= "DELETE FROM disciplinas WHERE matricula=$matricula AND idDisciplina=$id;";
	$deleta = mysqli_multi_query($conexao, $sql);

	if(!$deleta){
	    echo "<div class='alert alert-danger' role='alert'>Ocorreu um erro ao deletar dados no banco de dados.</div><br>
	    	<a href='admin.php?pg=materias'><button class='btn btn-primary'>Voltar</button></a>";
	}else{
	   echo "<div class='alert alert-success' role='alert'>Deletado com sucesso!</div><br>
	   		<a href='admin.php?pg=materias'><button class='btn btn-primary'>Voltar</button></a>";
	}
	mysqli_close($conexao);
?>