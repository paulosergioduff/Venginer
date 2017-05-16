<?php

############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/php/$ano/$mes/$hostname.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
    <td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$inicio</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$fim</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocoloexterno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocolointerno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$empresa</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$motivo</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$cnpj</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$assunto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$telefone</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$teminternet</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$acessoremoto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$blocodenotas</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$solucao</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$contrato</font></td>
	
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário mensal gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########


### USUARIO ###########
### USUARIO ###########
### USUARIO ###########


$arquivo = fopen("suporte/total/$hostname.xml",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

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
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Protocolo geral gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


############ GRAVAR ARQUIVO ##########


$arquivo = fopen("suporte/php/$ano/$hostname.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
    <td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$inicio</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$fim</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocoloexterno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$protocolointerno</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$empresa</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$motivo</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$cnpj</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$assunto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$telefone</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$teminternet</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$acessoremoto</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$blocodenotas</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$solucao</font></td>
	<td BGCOLOR='#FF704' name='$protocolointerno'><font color='white'>$contrato</font></td>
	
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de usuário anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

############ GRAVAR ARQUIVO ##########


####### ANO

$arquivo = fopen("suporte/php/$ano/$mes/fila$ano.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Registro anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

### DIA

$arquivo = fopen("suporte/php/$ano/$mes/fila$dia.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>
	
	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de atendimento diário gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########

##### ANO

$arquivo = fopen("suporte/php/$ano/fila$ano.php",'a+');
if ($arquivo) {
	if (!fwrite($arquivo, "

	<table border='01'>
	<tr>
   <td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$dia/$mes/$ano/</td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'><a href='$linkexterno$linkinternomes'>$inicio</a></font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$empresa</font></td><td BGCOLOR=#FF8566 name='$protocolointerno'><font color='white'>$telefone</font></td>
	</tr>
	</table>

	")) die('Não foi possível atualizar o arquivo.');
	echo 'Log de atendimento anual gerado com sucesso...<br>';
	fclose($arquivo);
}

############ GRAVAR ARQUIVO ##########


?>