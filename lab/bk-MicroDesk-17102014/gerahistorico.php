<?php

include "template.php";
include "suporte/total/protocolos/$protocolointerno";
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

$protocolointerno = $_POST['protocolointerno'];
$historico = $_POST['historico'];

$atual = date("d:m:Y", "H:i:s");

$chamado = ".chamados";

$mes = date("m");
$ano = date("Y");
$dia = date("d");

$hora = date("H");
$minuto = date("i");
$segundo = date("s");


$arquivo = fopen("suporte/total/protocolos/$protocolointerno$chamado.php",'a+');

if ($arquivo) {
	if (!fwrite($arquivo, "
<table>
<table border='01' BGCOLOR='#FFFF8F'>

<td>$dia/$mes/$ano - $hora : $minuto : $segundo</td>
<td>$historico</td>
<td>$hostname</td>
</tr>
</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo "<a href='formularioconsulta.php?protocoloconsulta=$protocolointerno'><font color='white' style='text-decoration: none'>$protocolointerno</font></a>";
	fclose($arquivo);
}

?>