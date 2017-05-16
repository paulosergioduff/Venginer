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
include "template.php";

#### IMPLEMENTAÇÃO DE FORMULÁRIO ######

date_default_timezone_set("America/Sao_Paulo");



include 'protocolo.php';
$datai = date("H:i:s");


$assinatura = $_POST['assinatura'];
$id = $objLogin->getID();

$protocoloi = "2014" . $bloco1 . $bloco2 . $bloco3 . $bloco4 . $bloco5 . $bloco6 . $id ;
$protocoloe = $hostname . $_POST['atendimento'];

#### IMPLEMENTAÇÃO DE FORMULÁRIO ######

$palavra = $_POST["palavra"];
$tabela = $_POST['tabela'];
$campo = $_POST['campo'];

########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

$sql = mysql_query("SELECT * from $tabela WHERE $campo LIKE '%".$palavra."%'");

$result = mysql_num_rows($sql);
if($result>=1) {
        while($linha = mysql_fetch_array($sql)) {
        
		// PEGA A QUERY
		$codigo = $linha["CDPESSOA"];
		$nome = $linha["NMNOMEFANTASIA"];
		$cnpjbanco = $linha["NRCNPJ"];
		
		
		
				
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
	<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
    newwindow=window.open(url,'foobar','height=575,width=950');
    if (window.focus) {newwindow.focus()}
    return false;
}

// -->
</script>

	
	<form action="maisdados.php" method="POST" target="_blank">COD:<select><option value="<?php echo $codigo ; ?>"><?php echo $razaocodigo ; ?></option></select><br>
	<a href="index.php" onclick="return popitup('contratoconsulta.php?codigoconsulta=<?php echo $codigo ; ?>')">Contrato do cliente: <?php echo $razaocodigo ; ?></a><br>
	<a href="index.php" onclick="return popitup('telefone.php?codigoconsulta=<?php echo $codigo ; ?>')">Telefone de <?php echo $razaocodigo ; ?></a><br>
	</form>
     <form action="geraratendimento.php" method="POST">


<br>

<table>

<tr>

<td>Protocolo externo<select name="protocoloexterno">
  <option value="<?php echo $protocoloe ; ?>"><?php echo $protocoloe ; ?></option></select>
  
  </td>
  
  </tr>
  
  <tr>

<td>Protocolo interno<select name="protocolointerno">
  <option value="<?php echo $protocoloi ; ?>"><?php echo $protocoloi ; ?></option></select>
  
  </td>
  
  </tr>
  
  <td>Início:<select name="inicio">
  <option value="<?php echo $datai ; ?>"><?php echo $datai ; ?></option></select>
  
  </td>
  
  </tr>
  
  </table>
  
  
<table>
<td>
Empresa: <input type="text" name="empresa" onkeyup="up(this)" value="<?php echo $razaocodigo ; ?>">CNPJ: <input type="text" name="cnpj" value="<?php echo $palavra ; ?>"><br>
Assunto:  <input type="text" name="assunto" onkeyup="up(this)">Telefone:  <input type="text" name="telefone"><br>
<p>

<TABLE>

<TR>
<td>
Possui internet?&nbsp&nbsp&nbsp&nbsp&nbsp<br>
<input type="radio" name="teminternet" value="SIM">Sim<br>
<input type="radio" name="teminternet" value="NÃO">Não<br>
</td>
<td>Acesso remoto:&nbsp&nbsp&nbsp&nbsp&nbsp<br>
Acesso: <input type="text" name="acessoremoto"><br>
Senha:  <input type="text" name="senharemota"><br>

</td>

<td>
Bloco de notas:<br>
<textarea rows="6" cols="20" name="blocodenotas" >
</textarea><br>

</td>



</TR>
</TABLE>
<P>
<!-- Solução:<br>
<textarea rows="8" cols="70" name="solucao" onkeyup="up(this)">
</textarea> -->

</td>



</tr>

</table><br>


<?php include "interacoes.php"; ?>
</form>



        <a href="sair.php">Sair</a>
    </body>
</html>
