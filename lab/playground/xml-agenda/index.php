<?php
	include ("SimpleDOM.php");
	include ("config.php");	
	include ("funcoes.php");
	$buscar = $_REQUEST["buscar"];
	$opc	= ($_REQUEST["opc"] != "") ? ($_REQUEST["opc"]) : ("nome");
	$order	= ($_REQUEST["order"] != "") ? ($_REQUEST["order"]) : ("@nome");
	$id		= ($_REQUEST["id"] != "") ? ($_REQUEST["id"]) : ("");
	$by		= ($_REQUEST["by"] != "") ? ($_REQUEST["by"]) : ("a");
	$byC	= ($by == "d") ? ("a") : ("d");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Agenda Eletrônica</title>

<!--
	Sistema desenvolvido por Tiago para o site linhadecomando.com
	Este sistema é de uso livre, podendo ser alterado e distribuído livremente.
	Lembre-se de dar os créditos para o site linhadecomando.com
    
    dúvidas - sugestões - melhorias: tiago.agostinho@gmail.com
-->

<script type="text/javascript" src="jquery-1.4.2.js"></script>
<script type="text/javascript" src="jquery.maskedinput.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#divAdd').hide();
			
		$('#add').click(function(){
			$('#divAdd').show();
			$("input:text:first:visible").focus();
			$('#add').hide();
		});
			
		$('#btnCancelar').click(function(){
			var url = "index.php"; 
			$(location).attr('href',url);
		});
	});      
</script>
<script>
	jQuery(function($){
   		$("#idtel").mask("(99) 9999-9999");
		$("#idcel").mask("(99) 9999-9999");
		$("#ttel").mask("(99) 9999-9999");
		$("#tcel").mask("(99) 9999-9999");
	});
</script>
<link href="estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
	
		
     
    	<?php
		if($_REQUEST){
			$acao = $_REQUEST['action'];
	
			switch ($acao){
				case "add":
					// adicionando
					include ('xml-adicionar.php');
					break;
				case "del":
					// apagando
					include ('xml-deletar.php');				
					break;
				case "edt":
					// editando
					include ('xml-editar.php');				
					break;
			}	
		}
		?>	</td><!-- *** fim lado direito -->
    <br />
	<form name="frmBuscar" method="get" action="search.php">
				<select name="opc" class="clSelecionar">
					<option value="nome"<?=$opc == "nome" ? " selected=\"selected\"" : ""?>>Nome</option>
					<option value="tel"<?=$opc == "tel" ? " selected=\"selected\"" : ""?>>Telefone</option>
					<option value="cel"<?=$opc == "cel" ? " selected=\"selected\"" : ""?>>Celular</option>
				</select>
				<input type="text" name="buscar" value="<?=$buscar?>" id="idBuscar" class="clBuscar" />
				<input type="submit" name="btn1" value="Buscar" class="btnSubmit" />
				<br>  obs. Ao selecionar telefone ou celular, usar este formato: (xx) 9999-9999
			</form>
    </td>
</tr>
</table>
</body>
</html>
