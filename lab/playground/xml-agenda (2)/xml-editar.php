<?php
	include("config.php");
	$id_xml = $_REQUEST['id'];
	
	$result = $xml->XPath("dados[@id=$id_xml]");

	if (!$_POST){?>

	<div id='divEdit'><br />
		<span class='tituloAtu'>Atualizando dados...</span><br /><br />
		<form name='frmEditar' method='post' action='index.php?action=edt&id=<?=$id_xml?>&submit=s'>
		<table>
<?php
	foreach ($result as $indice => $dados){?>
			<tr>
				<td>
					<span class='titulo'>Nome:</span></td><td><input type='text' name='tnome' size='40' value="<?=$dados[nome]?>" />
				</td>
			</tr>
			<tr>
				<td>
					<span class='titulo'>Tel:</span></td><td><input type='text' name='ttel' id='ttel' size='40' value="<?=$dados[tel]?>" />
				</td>
			</tr>
			<tr>
				<td>
					<span class='titulo'>Cel:</span></td><td><input type='text' name='tcel' id='tcel' size='40' value="<?=$dados[cel]?>" />
				</td>
			</tr>
			<tr>
				<td>
					<span class='titulo'>Email:</span></td><td><input type='text' name='temail' size='40' value="<?=$dados[email]?>" />
				</td>
			</tr>
			<tr>
				<td align='right' colspan='2'>
					<input type='button' value='Cancelar' class='btnClean' id='btnCancelar' />
					<input type='submit' value='Atualizar' class='btnSubmit' id='btnAtualizar' />
				</td>
			</tr>
<?php
	}?>
		</table>
		</form>
	</div>
<?php
	}else{
		$recAtu	= $_REQUEST['submit'];
		
		if ($recAtu == "s"){

			$nome	= $_POST["tnome"];
			$tel	= $_POST["ttel"];
			$cel	= $_POST["tcel"];
			$email	= $_POST["temail"];
		
			foreach ($result as $indice => $dados){
				$dados['nome'] 	= $nome;
				$dados['tel'] 	= $tel; 				
				$dados['cel'] 	= $cel; 
				$dados['email'] = $email; 
			}
			// inserindo os novos dados no arquivo xml
			file_put_contents('agenda.xml',$xml->asXML() );
			// mensagem de sucesso
?>
			<br /><br />Registro Atualizado Corretamente!
<?php
			// refresh para retornar a página principal (tempo: 2 segundos)
?>
			<meta HTTP-EQUIV='refresh' CONTENT='<?=$tempo?>;URL=index.php'>
<?php
		}
	}
?>            