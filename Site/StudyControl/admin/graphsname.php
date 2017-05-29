<?php
	include "config.inc.php";
	session_start();
	$userID = $_SESSION['login'];
	$tela = (int)($_COOKIE['tela']*0.7);

	$busca = "SELECT nomeDisciplina FROM disciplinas WHERE disciplinas.matricula = $userID order by nomeDisciplina";
    $todos = mysqli_query($conexao, $busca);
    $alt = 50;

    while ($dados = mysqli_fetch_array($todos)) { 
    
    	$nomesD[] = utf8_decode($dados['nomeDisciplina']);
    	$alt += 20;

    }
    mysqli_close($conexao);

	include_once "phplot.php";
	include_once "rgb.inc.php";

	$data = array(
		array(null,null)
	);

	$plot = new PHPlot($tela, $alt);

	$plot->SetPlotType("lines");

	$plot->SetLegend($nomesD);

	$plot->SetLegendPosition(0, 0, 'image', 0, 0, 5, 5);

	$plot->SetLegendStyle('left', 'left');

	$plot->SetDataType("text-data");

	$plot->SetDataValues($data);

	$plot->SetXTickPos('none');

	$plot->SetYTickPos('none');

	$plot->SetDrawYAxis(False);

	$plot->SetDrawXAxis(False);

	$plot->SetDrawYGrid(False);

	$plot->SetDrawXGrid(False);

	$plot->SetPlotBorderType('none');

	$plot->SetMarginsPixels(0, 0, 0, 0);

	$plot->DrawGraph();

?>
