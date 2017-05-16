<?php
	include ("config.php");	

	// atribuindo o valor passado na url
	$id_xml = $_REQUEST['id'];	
	
	// comparando os dados
	foreach ($xml as $dados)
	{
		if ($dados['id'] == $id_xml)
		{
			unset ($dados[0]);
			break;
		}
	}
	
	// atualizando arquivo xml
	file_put_contents('agenda.xml',$xml->asXML() );
								
	// mensagem de sucesso								
?>
	<br /><br />Registro Apagado Corretamente!
<?php
	// refresh para retornar a página principal (tempo: 2 segundos)
?>
	<meta HTTP-EQUIV='refresh' CONTENT='<?=$tempo?>;URL=index.php'>