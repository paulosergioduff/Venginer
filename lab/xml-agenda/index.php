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

	<?php
		include ('xml-buscar.php');
	?>
    
</tr>
</table>
</body>
</html>
