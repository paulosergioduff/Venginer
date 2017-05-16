/* CodigoFonte User Interface */

$(document).ready(function(){
	// comentário de artigo
	$("#btnEnviarComentario").click(function() {
	
		$("#pnlEnviarComentario").hide();
		$("#adicionarmensagem").append("<div class='tesq detalhe' id='pnlEnviando'>Postando comentário...</div>");
		
		try { 		
			$.post($("#frmAdicionarDica").attr("action") + "&tipo=1", $("#frmAdicionarDica").serialize(), function(response) {
				if(response == 1)
				{		
					$.get(($("#frmAdicionarDica").attr("action") + "&Gid="+ $('#txtDica').val() +"&tipo=1"), function(data){
						$("#itens").empty();
						$("#itens").append(data);
						$("#txtComentario").val("");
				
						$("#pnlEnviando").remove();
						$("#pnlEnviarComentario").show();
						
						$("#quadroAvisoErro").hide();
					});
				}
				else
				{
					// ocorreu um erro
					alert(response);
					$("#pnlEnviando").remove();
					$("#pnlEnviarComentario").show();
				}
			});
		}
		catch(e)
		{
			alert(e);
		}
		
		return false;
	});
	
	// últimos scripts
	$("#ult_codigos .tab a").click(function() {
	
		$("#ult_codigos .tab a").removeAttr("class");		
		$(this).addClass("selecionado");
		
		$.get("index.php?ult_cod=" + $(this).attr("rel") + "&ult_cod_desc=" + $(this).text(), function(response) {			
			$("#ult_codigos .conteudo").html(response);
		});		
		
		return false;
	});
	
	// últimas dicas
	$("#ult_dicas .tab a").click(function() {
	
		$("#ult_dicas .tab a").removeAttr("class");		
		$(this).addClass("selecionado");
		
		$.get("index.php?ult_dic=" + $(this).attr("rel") + "&ult_dic_desc=" + $(this).text(), function(response) {			
			$("#ult_dicas .conteudo").html(response);
		});		
		
		return false;
	});
		
	// indicação		
	$("#btnEnviarIndicacao").click(function() {
	
		$("#pnlEnviarIndicacao").hide();
		$("#enviarIndicacao").append("<div class='tesq detalhe' id='pnlEnviando'>Enviando sua indicação...</div>");
		
		$.post($("#frmIndicao").attr("action"), {
			txtNome: $('#txtNome').val(),
			txtEmail: $('#txtEmail').val(),
			txtAmigo: $('#txtAmigo').val()	
		}, function(response) {
			$("#pnlEnviando").remove();
			$("#pnlEnviarIndicacao").show();
			
			if(response != "")
			{
				ExibirMensagemErros(response);
			}
		});
		
		return false;
	});	
});

nJanela = 0;

function cf_RedirecionaSecao(secao) 
{
	if(secao == '')
	{
		window.location.href = "/index.php";
	}
	else
	{
		window.location.href = "/?secao=" + secao;
	}
}

function cf_CarregaJanela(url, parametros) 
{
	if(screen.width == 1024) {
		janelaLeft = 50;
		janelaTop = 80;
	}
	else {
		janelaLeft = 20;
		janelaTop = 20;
	}

	window.open(url, nJanela, parametros + ', left=' + janelaLeft + ', top=' + janelaTop);
	nJanela += 1;
}

function cf_mensagemBarra(msg) 
{
	window.status = msg;
	return true;
}

function Indica()
{
	var check = document.indic;

	if (check.nome.value == "") {
		alert("Por favor digite seu nome");
		check.nome.focus();
		return false;
	}

	if (check.email.value == "") {
		alert("Por favor digite o seu e-mail");
		check.email.focus();
		return false;
	}

	if (check.amigo.value == "") {
		alert("Por favor digite o e-mail de seu amigo");
		check.amigo.focus();
		return false;
	}

	var windowName = "indica";
	var windowFeatures = "width=450,height=250,top=10,left=10,resizable=no,scrollbars=yes,toolbar=no,location=no,menubar=no,status=no";
	
	windowLogin = window.open("", windowName, windowFeatures);
	document.indic.submit();
}

function ExibirMensagemErros(msg)
{
	var strMsg = "Aviso!\n";
	strMsg += "-----------------------\n\n";
	strMsg += msg;
	
	alert(strMsg);
}

function AdicionarAosMeusFavoritos(chave, tipo) 
{ 
	window.open("/?secao=favoritos&acao=adicionar&tipo=janela&ch=" + chave + "&t=" + tipo, "FavoritoCF", "Width=350, Height=300");
}