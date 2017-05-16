<?php

$codigoconsulta = $_POST["codigoconsulta"];

########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

$sql = mysql_query("SELECT * from tipocontrato WHERE CDPESSOA LIKE '%".$codigoconsulta."%'");

$result = mysql_num_rows($sql);
if($result>=1) {
        while($linha = mysql_fetch_array($sql)) {
        
		// PEGA A QUERY
		// $ = $linha[""];
		$CDPESSOA = $linha["CDPESSOA"];
		$NMTIPOCONTRATO= $linha["NMTIPOCONTRATO"];
		$CDTIPOCONTRATO = $linha["CDTIPOCONTRATO"];
		$NRTELEFONE = $linha["NRTELEFONE"];
		
					
    }
   
} else {
   // echo "Não foi encontrado nenhum resultado para <strong>CNPJ:".$palavra."</strong>";
}
########### PEGA DADOS DA TABELA E IMPRIME EM VARIÁVEL ###########

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Painel do usuário logado</title>
    </head>
    <body>
	<h3>Tipo de contrato: <?php echo $NMTIPOCONTRATO;?></h3>