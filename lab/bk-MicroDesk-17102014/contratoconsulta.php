<?php
// Incluindo arquivo de conexão/configuração
require_once('config/conn.php');

// Instanciando novo objeto da classe Login
$objLogin = new Login();

// Verificando se o usuário está logado, caso contrá será redirecionado para a página de login
if (!$objLogin->verificar('index.php'))
    // Finalizado o script, apenas para garantir que o usuário irá ver o conteúdo da página
    exit;

// Selecionando informações do usuário
$query = mysql_query("SELECT * FROM usuario WHERE usuario_id = {$objLogin->getID()}");
$usuario = mysql_fetch_object($query);

#### IMPLEMENTAÇÃO DE FORMULÁRIO ######

date_default_timezone_set("America/Sao_Paulo");



include 'protocolo.php';
include 'template.php';
$datai = date("H:i:s");
$codigoconsulta = $_POST['codigoconsulta'];


$assinatura = $_POST['assinatura'];
$id = $objLogin->getID();

$protocoloi = "2014" . $bloco1 . $bloco2 . $bloco3 . $bloco4 . $bloco5 . $bloco6 . $id ;
$protocoloe = $hostname . $_POST['atendimento'];

#### IMPLEMENTAÇÃO DE FORMULÁRIO ######

$codigoconsulta = $_POST["palavra"];
$tabela = $_POST['tabela'];
$campo = $_POST['campo'];

########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

$sql = mysql_query("SELECT * from contrato WHERE CDPESSOA LIKE '%".$codigoconsulta."%'");

$result = mysql_num_rows($sql);
if($result>=1) {
        while($linha = mysql_fetch_array($sql)) {
        
		// PEGA A QUERY
		// $ = $linha[""];
		$CDPESSOA = $linha["CDPESSOA"];
		$DTVENCIMENTO= $linha["DTVENCIMENTO"];
		$CDTIPOCONTRATO = $linha["CDTIPOCONTRATO"];
		$NRTELEFONE = $linha[""];
		
		
		
		
		
				
    }
   
} else {
   // echo "Não foi encontrado nenhum resultado para <strong>CNPJ:".$palavra."</strong>";
}
########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

$razaosql = mysql_query("SELECT * from pessoa WHERE CDPESSOA LIKE '%".$codigo."%'");

$razaoresult = mysql_num_rows($razaosql);
if($razaoresult>=1) {
        while($razaolinha = mysql_fetch_array($razaosql)) {
        
		// PEGA A QUERY
		$razaocodigo = $razaolinha["NMPESSOA"];
		
		
		
		
				
    }
   
} else {
    echo "Não foi encontrado nenhum resultado para <strong>RAZÃO SOCIAL:".$codigo."</strong>";
}
########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########




?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
    </head>
    <body>
	<h3>Vencimento<?php echo $CDPESSOA;?></h3>
	<h3><?php echo $DTVENCIMENTO;?></h3>
	<h3><?php  
		
	echo $variavel . $CDTIPOCONTRATO;?></h3>
	
	<iframe width='600' height='800' frameborder='0' src="consulta/teste.php?condigoconsulta=<?php echo $codigoconsulta; ?>"</iframe>

