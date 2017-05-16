<?php

$aspas = '"';

include "template.php";
// addslashes (filter_var($_POST['empresa'] , FILTER_SANITIZE_STRING));
$inicio = $_POST['inicio'];
$fim = date("H:i:s");
$protocoloexterno = addslashes (filter_var($_POST['protocoloexterno'] , FILTER_SANITIZE_STRING));
$protocolointerno = addslashes (filter_var($_POST['protocolointerno'] , FILTER_SANITIZE_STRING));
$empresa = addslashes (filter_var($_POST['empresa'] , FILTER_SANITIZE_STRING));
$cnpj = addslashes (filter_var($_POST['cnpj'] , FILTER_SANITIZE_STRING));
$assunto = addslashes (filter_var($_POST['assunto'] , FILTER_SANITIZE_STRING));
$telefone = addslashes (filter_var($_POST['telefone'] , FILTER_SANITIZE_STRING));
$teminternet = addslashes (filter_var($_POST['teminternet'] , FILTER_SANITIZE_STRING));
$acessoremoto = addslashes (filter_var($_POST['acessoremoto'] , FILTER_SANITIZE_STRING));
$blocodenotas = addslashes (filter_var($_POST['blocodenotas'] , FILTER_SANITIZE_STRING));
$solucao = addslashes (filter_var($_POST['solucao'] , FILTER_SANITIZE_STRING));
$contrato = addslashes (filter_var($_POST['contrato'] , FILTER_SANITIZE_STRING));
$versao = addslashes (filter_var($_POST['motivo'] , FILTER_SANITIZE_STRING));
$motivopega = addslashes (filter_var($_POST['produtos'] , FILTER_SANITIZE_STRING)) ;
$motivo = "$motivopega" . "-" . "$versao" ;
$senharemota = addslashes (filter_var($_POST['senharemota'] , FILTER_SANITIZE_STRING));


$paragrafo = '
';
################ PREPARA DIRETÓRIOS ################

date_default_timezone_set("America/Sao_Paulo");
$mes = date("m");
$ano = date("Y");
$dia = date("d");

$hora = date("H");
$minuto = date("i");
$segundo = date("s");

$data = "$dia/$mes/$amp";

@mkdir("suporte", 0777);
@mkdir("suporte/total/", 0777);
@mkdir("suporte/total/protocolos/", 0777);
@mkdir("suporte/php/", 0777); 
@mkdir("suporte/php/$ano/", 0777); 
@mkdir("suporte/php/$ano/$mes/", 0777); 

@mkdir("suporte/xml/", 0777); 
@mkdir("suporte/xml/$ano/", 0777); 
@mkdir("suporte/xml/$ano/$mes/", 0777); 



################ PREPARA DIRETÓRIOS ################

################# FILAS ###########################
################# FILAS ###########################
################# FILAS ###########################


############ GRAVAR RESULTADOS ##########

$resultados = 'resultados';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados.php",'a+');

$chaveresultado = '$_' . "$protocolointerno";

$resultadoatual = '$_' . "$protocolointerno";

if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas

<div style='background:red'><a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'>$data - $hora : $minuto : $segundo - $protocolo - $empresa - $telefone - Marcar como:</a><a href='resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolointerno&resultado=Orange'>Aguardando-</a><a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'>$data - $hora : $minuto : $segundo - $protocolo - $empresa - $telefone - Marcar como:</a><a href='resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolointerno&resultado=blue'>Em andamento</a></div>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR RESULTADOS ##########

############ GRAVAR RESULTADOS NÃO OCULTOS ##########

$resultados = 'resultados';
$todos = 'todos';


$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano$resultados$todos.php",'a+');

$chaveresultado = '$_' . "$protocolointerno";

$resultadoatual = '$_' . "$protocolointerno";

if ($arquivo) {
	if (!fwrite($arquivo, "
<?php
$chaveresultado = 
$aspas

<div style='background:red'><a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'>$data - $hora : $minuto : $segundo - $protocolo - $empresa - $telefone - Marcar como:</a><a href='resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolointerno&resultado=Orange'>Aguardando-</a><a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'>$data - $hora : $minuto : $segundo - $protocolo - $empresa - $telefone - Marcar como:</a><a href='resultado.php?data=$data&empresa=$empresa&telefone=$telefone&arquivo=suporte/php/$ano/$mes/fila$mes$ano$resultados.php&protocolo=$protocolointerno&resultado=blue'>Em andamento</a></div>
	$aspas ;
?>

	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR RESULTADOS ##########

############ GRAVAR RESULTADOS ##########

####### FILA MES

$arquivo = fopen("suporte/php/$ano/$mes/fila$mes$ano.php",'a+');

$aspassimples = "'";
if ($arquivo) {
	if (!fwrite($arquivo, "
	<?php
echo $aspas$chaveresultado$aspas ;
?>	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Fila mensal gerada gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR RESULTADOS ##########

############ GRAVAR ARQUIVO ##########


### XMLs ######
### XMLs ######
### XMLs ######

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/xml/$ano/$mes/$mes.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<motivo>$motivo</motivo>
	<contrato$contrato</contrato>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'XML mensal gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/xml/$ano/$ano.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<motivo>$motivo</motivo>
	<contrato$contrato</contrato>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'XML anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

### XMLs ######
### XMLs ######
### XMLs ######

###### PROTOCOLOS ######
###### PROTOCOLOS ######
###### PROTOCOLOS ######

############ GRAVAR ARQUIVO ##########

$empresaform = "$protocolointerno";

$formulario = 'formularioconsulta.php';

// PASSA AS VARIAVEIS PARA O FORMULÁRIO RECEBER DADOS

   $inicioform = '$inicioform';
   $fimform = '$fimform';
   $protocoloexternoform = '$protocoloexterno';
   $protocolointernoform = '$protocolointerno';
   $empresaform = '$empresaform';
   $cnpjform = '$cnpjform';
   $assuntoform = '$assunto';
   $telefoneform = '$telefone';
   $teminternetform = '$teminternet';
   $acessoremotoform = '$acessoremoto';
   $blocodenotasform = '$blocodenotas';
   $solucaoform = '$solucao';
   $contratoform = '$contrato';
   $versaoform = '$versao';
   $motivopegaform = '$motivopega' ;
   $motivoform = '$motivo' ;
   $senharemotaform = '$senharemota';
   $contratoform = '$contrato';

$arquivo = fopen("suporte/total/protocolos/$protocolointerno.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "
   <?php
   
   $inicioform = $aspas$inicio$aspas;
   $fimform = $aspas$fim$aspas;
   $protocoloexternoform = $aspas$protocoloexterno$aspas;
   $protocolointernoform = $aspas$protocolointerno$aspas;
   $empresaform = $aspas$empresa$aspas;
   $cnpjform = $aspas$cnpj$aspas;
   $assuntoform = $aspas$assunto$aspas;
   $telefoneform = $aspas$telefone$aspas;
   $teminternetform = $aspas$teminternet$aspas;
   $acessoremotoform = $aspas$acessoremoto$aspas;
   $blocodenotasform = $aspas$blocodenotas$aspas;
   $solucaoform = $aspas$solucao$aspas;
   $contratoform = $aspas$contrato$aspas;
   $versaoform = $aspas$versao$aspas;
   $motivopegaform = $aspas$motivopega$aspas ;
   $motivoform = $aspas$motivo$aspas ;
   $senharemotaform = '$senharemota';
	
	?>
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário total gerado com sucesso...<br>';
	fclose($arquivo);
}

###### PROTOCOLOS ######
###### PROTOCOLOS ######
###### PROTOCOLOS ######




// $ = $_POST[''];

//<textarea  rows="8" cols="70" >

// echo '<div id="selecao">';

// CANCELADO:
/*echo '<form name="copiar">
<BR><textarea cols="50" name="txt" rows="10" wrap="VIRTUAL">' . "$paragrafo";*/

echo '<center>
<h1>Resultado:</h1>
<form name="copiar">
<BR><textarea cols="70" name="txt" rows="10" wrap="VIRTUAL">';


echo "************** - OCKAM PRC GERADOR DE CHAMADO 0.0.1 - ******" . "$paragrafo" ;
echo "============================================================" . "$paragrafo" ;
echo "************************************************************" . "$paragrafo" ;
echo "INÍCIO: " . $inicio . "$paragrafo" ;
echo "FIM: " . $fim . "$paragrafo" ;
echo "PROTOCOLO EXTERNO: " . $protocoloexterno . "$paragrafo" ;
echo "ASSINATURA: " . $protocolointerno . "$paragrafo"  ;
echo "EMPRESA: " . $empresa . "$paragrafo" ;
echo "CNPJ: " . $cnpj . "$paragrafo"  ;
echo "ASSUNTO: " . $assunto . "$paragrafo"  ;
echo "TELEFONE: " . $telefone  . "$paragrafo" ;
echo "TEM INTERNET? : " . $teminternet . "$paragrafo"  ;
echo "ACESSO REMOTO: " . $acessoremoto  . "$paragrafo" ;
echo "ANOTAÇÕES: " . $blocodenotas  . "$paragrafo" ;
echo "SOLUÇÃO USADA: " . $solucao . "$paragrafo"  ;
echo "CONTRATO: " . $solucao . "$contrato" . "$paragrafo"  ;
echo "VERSÃO: " . $solucao . "$versao" . "$paragrafo"  ;
echo "MOTIVO: " . $solucao . "$motivo"  ;
echo '</textarea>';

$botaselecionar = '<!-botão->
<input name="value" onclick="javascript:this.form.txt.focus();this.form.txt.select();" type="button" value="Selecionar">';



// echo "</form>";




// echo '<button id="botao">Copiar conteudo</button>$paragrafo';

// echo $copiadiv ;

?>




</textarea>
<BR>
<!--botão
<input name="value" onclick="javascript:this.form.txt.focus();this.form.txt.select();" type="button" value="Selecionar"><br> -->
<a href="painel.php"><img src="iniciarnovoatendimento.png"></a>
</form> 

<!-- 

XML:

	<inicio>$inicio</inicio>
	<fim>$fim</fim>
	<protocoloexterno>$protocoloexterno</protocoloexterno>
	<protocolointerno>$protocolointerno</protocolointerno>
	<empresa>$empresa</empresa>
	<cnpj>$cnpj</cnpj>
	<assunto>$assunto</assunto>
	<telefone>$telefone</telefone>
	<teminternet>$teminternet</teminternet>
	<acessoremoto>$acessoremoto</acessoremoto>
	<blocodenotas>$blocodenotas</blocodenotas>
	<solucao>$solucao</solucao>

BOTÃO DESABILITADO

    $paragrafo
     <input type="button" name="Submit" value="Selecionar e Copiar" class="formul&aacute;rio" onClick="MM_callJS('Javascript: seleciona(\'codigo.script\')')" > -->