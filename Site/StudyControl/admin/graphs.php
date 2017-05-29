<?php
	include "config.inc.php";
	session_start();
	$userID = $_SESSION['login'];
	$tela = (int)($_COOKIE['tela']*0.7);

	mysqli_set_charset($conexao, "utf8");
	$busca = "SELECT notas.nota1, notas.nota2, notas.nota3 FROM disciplinas INNER JOIN notas ON disciplinas.matricula = notas.matricula AND disciplinas.idDisciplina = notas.idDisciplina WHERE notas.matricula = $userID order by nomeDisciplina";
    $todos = mysqli_query($conexao, $busca);

    $notas1[] = 'Estagio 1'; $notas2[] = 'Estagio 2'; $notas3[] = 'Estagio 3';
    while ($dados = mysqli_fetch_array($todos)) { 

    	$notas1[] = $dados['nota1']; $notas2[] = $dados['nota2']; $notas3[] = $dados['nota3'];

    }
    mysqli_close($conexao);
	// requisição da classe PHPlot
	include_once "phplot.php";
	include_once "rgb.inc.php";

	$data = array(
		$notas1,
		$notas2,
		$notas3
	);
	# Cria um novo objeto do tipo PHPlot com 500px de largura x 350px de altura
	$plot = new PHPlot($tela, 350);
	// Organiza Gráfico -----------------------------
	$plot->SetTitle("Notas do Semestre\n\n");
	# Precisão de uma casa decimal
	$plot->SetPrecisionY(1);
	# tipo de Gráfico em barras (poderia ser linepoints por exemplo)
	$plot->SetPlotType("bars");

	$plot->SetRGBArray($ColorArray);
	# Tipo de dados que preencherão o Gráfico text(label dos anos) e data (valores de porcentagem)
	$plot->SetDataType("text-data");
	# Adiciona ao gráfico os valores do array
	$plot->SetDataValues($data);
	// -----------------------------------------------
	$plot->SetPlotAreaWorld(NULL, 0, NULL, 10);
	# Seta os traços (grid) do eixo X para invisível
	$plot->SetXTickPos('none');

	$plot->SetAxisFontSize(2);
	# Coloca nos pontos os valores de Y
	$plot->SetYDataLabelPos('plotin');
	// Desenha o Gráfico -----------------------------
	$plot->DrawGraph();
// -----------------------------------------------
?>
