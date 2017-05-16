<?php
		$buscar = $_REQUEST["buscar"];
		$opc	= ($_REQUEST["opc"] != "") ? ($_REQUEST["opc"]) : ("nome");
		$order	= ($_REQUEST["order"] != "") ? ($_REQUEST["order"]) : ("@nome");
		$id		= ($_REQUEST["id"] != "") ? ($_REQUEST["id"]) : ("");
		$by		= ($_REQUEST["by"] != "") ? ($_REQUEST["by"]) : ("a");
		$byC	= ($by == "d") ? ("a") : ("d");
		
		$result = busca_xml($xml,"dados",$buscar,$opc,$order,$by);

	
		$conta_result = count($result);
?>
		<div id="divBuscar">
			<form name="frmBuscar" method="get" action="index.php">
				<select name="opc" class="clSelecionar">
					<option value="nome"<?=$opc == "nome" ? " selected=\"selected\"" : ""?>>Nome</option>
					<option value="tel"<?=$opc == "tel" ? " selected=\"selected\"" : ""?>>Telefone</option>
					<option value="cel"<?=$opc == "cel" ? " selected=\"selected\"" : ""?>>Celular</option>
				</select>
				<input type="text" name="buscar" value="<?=$buscar?>" id="idBuscar" class="clBuscar" />
				<input type="submit" name="btn1" value="Buscar" class="btnSubmit" />
				<br>  obs. Ao selecionar telefone ou celular, usar este formato: (xx) 9999-9999
			</form>
		</div><br>
<?php
		// verifica se o array possui dados
		if ($conta_result != 0){?>
		<table border=0 cellpadding="5" id="tbResultados">
			<tr>
				<td class="tbTitulo">Id</td>
				<td class="tbTitulo"><a href="index.php?opc=<?=$opc?>&buscar=<?=$buscar?>&id=<?=$id?>&action=buscar&order=@nome&by=<?=$byC?>">Nome</a></td>
				<td class="tbTitulo">Telefone</td>
				<td class="tbTitulo">Celular</td>
				<td class="tbTitulo"><a href="index.php?opc=<?=$opc?>&buscar=<?=$buscar?>&id=<?=$id?>&action=buscar&order=@email&by=<?=$byC?>">E-mail</a></td>
				<td class="tbTitulo1">Editar</td>
				<td class="tbTitulo1">Excluir</td>
			</tr>
<?php

			// montando a tabela com os dados do arquivo xml
			foreach ($result as $dados)	{?>
			<tr>
				<td valign="top"><?=$dados["id"]?></td>
				<td valign="top"><?=$dados["nome"]?></td>
				<td valign="top"><?=$dados["tel"]?></td>
				<td valign="top"><?=$dados["cel"]?></td>
				<td valign="top"><?=$dados["email"]?></td>
				<td valign="top" align="center"><a href="index.php?action=edt&id=<?=$dados[id]?>" id="btnEditar"><img src="imagens/btn-edit.gif" border="0" /></a></td>
				<td valign="top" align="center"><a href="index.php?action=del&id=<?=$dados[id]?>"><img src="imagens/btn-del.gif" border="0" /></a></td>
			</tr>
<?php
			}?>
		</table><br />
		<p class="alert"><a href="index.php">Voltar</a></p><br />
<?php
		}else{?>
			<p class="alert">Contato n&atilde;o cadastrado!</p>
			<p class="alert"><a href="index.php">Voltar</a></p>
<?php	}?>            