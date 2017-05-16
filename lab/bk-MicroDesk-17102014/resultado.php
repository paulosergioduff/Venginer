<?php
include "template.php";
$aspas = '"';

$oculto1 = '$oculto1';
$oculto2 = '$oculto2';

$arquivo = $_GET['arquivo'];
$resultado = $_GET['resultado'];
$protocolo = $_GET['protocolo'];
$data = $_GET['data'];
$empresa= $_GET['empresa'];
$telefone = $_GET['telefone'];
$inicio = $_GET['inicio'];





$mes = date("m");
$ano = date("Y");
$dia = date("d");

############ GRAVAR RESULTADOS ##########





$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolo";

$resultadoatual = '$_' . "$protocolo";

$codamarelo = '#FFCC99';

$linkmodelo = "resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolo&resultado=$resultado";
$amarelo = "resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolo&resultado=Orange";
$azul = "resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolo&resultado=blue";

if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas


<!-- <div style='background:blue'><a href='$linkmodelo'>$protocolo</a></div> -->

<div style='background:$resultado'><a href='formularioconsulta.php?protocoloconsulta=$protocolo'>$data - $protocolo - $empresa - $telefone - Marcar como:</a><a href='$amarelo'>Aguardando-</a><a href='$azul'>Em andamento</a></div>

	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}



                            
							
############ GRAVAR RESULTADOS ##########



?>

