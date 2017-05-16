<html>
<head>
<title>Climaq Atendimentos - v 0.8</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
</head>
<body background="img/fundo.gif">
<center>
<img src="img/head.jpg"><br>
</center>

<?php error_reporting(E_ERROR | E_PARSE);
include "conexao.php";

$palavra = $_GET["palavra"];

$sql = mysql_query("SELECT * from empresa WHERE NRCNPJ LIKE '%".$palavra."%'");
$result = mysql_num_rows($sql);
if($result>=1) {
    echo "Exibindo ".$result." resultados para <strong>".$palavra."</strong><br><br>";
    while($linha = mysql_fetch_array($sql)) {
        
		// PEGA A QUERY
		$id = $linha["CDPESSOA"];
		$nome = $linha["NMNOMEFANTASIA"];
		$assunto = $linha["Assunto"];
		$data = $linha["Dt. Abertura"];
		$posicao = $linha["Posição"];
		$datar = $linha["Dt. Retorno"];
		$meiocomunicacao = $linha["Meio comunicação"];
		$produto = $linha["Produto"];
		$versao = $linha["Versão"];
		$solucao = $linha["Solução"];
		
		// IMPRIME A QUERY
		echo "<form>";
		echo '<fieldset style="border:1px solid #1C1C1C; padding:2;width:60%;">';
		
		echo "<tr>";
		echo "<td><label><b>Cliente: </b><i>" . $nome."</label></td></td> </i> <br>";
		echo "<td><label><b>Data: </b><i>" . $data."</label></td></td> </i> <br>";
		echo "<td><label><b>Posição: </b><i>" . $posicao."</label></td></td> </i> <br>";
		echo "<td><label><b>Meio de comunicação: </b><i>" . $meiocomunicacao."</label></td></td> </i> <br>";
		echo "<td><label><b>Produto: </b><i>" . $produto."</label></td></td> </i> <br>";
		echo "<td><label><b>Versão: </b><i>" . $versao."</label></td></td> </i> <br>";
		echo "<td><label><b>Solução: </b><i>" . $solucao."</label></td></td> </i> <br>";
       	echo "<label><b>Assunto: </b>" . "$assunto";
		
		
		echo "</label><br><p><p></tr>
</table>
</fieldset>";
		
    }
   
} else {
    echo "Não foi encontrado nenhum resultado para <strong>".$palavra."</strong>";
}
?>