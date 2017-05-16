<?php
	// pegando o ultimo elemento (nó) do xml	
	$result = $xml->XPath("dados[last()]");
			
	// foreach para pegar somente o id
	foreach ($result as $sendId)
	{
		$recId = $sendId['id'];
	}
			
	// atribuindo os dados via post
	$id		= $recId+1;
	$nome	= $_POST["tnome"];
	$tel	= $_POST["ttel"];
	$cel	= $_POST["tcel"];
	$email	= $_POST["temail"];

	// criando um novo nó com seus atributos
	$dados = $xml->addChild('dados');
	$dados->addAttribute('id', $id);			
	$dados->addAttribute('nome', $nome);
	$dados->addAttribute('tel', $tel); 				
	$dados->addAttribute('cel', $cel); 
	$dados->addAttribute('email', $email); 

	// inserindo os dados no arquivo xml
	file_put_contents('agenda.xml',$xml->asXML() );
								
	// mensagem de sucesso								
?>
	<br /><br />Dados Inseridos Corretamente!
<?php	
	// refresh para retornar a página principal (tempo: 2 segundos)
?>
	<meta HTTP-EQUIV='refresh' CONTENT='<?=$tempo?>;URL=index.php'>