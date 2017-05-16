<?php

function pesquisar($conteudo, $palavraBusca) {
		
		$cont = 0;#contador de ocorrências
		$pos = -1;#inicia posição abaixo de 0
		$conteudo = " ".$conteudo;#desvia de bug
		$palavraBusca = strtoupper($palavraBusca);
		while($pos != NULL) {
			$busca = strtoupper($conteudo);
			$pos = strpos($busca, $palavraBusca);
			if($pos != NULL) {$cont++;}
			$tam = strlen($busca);
			$ocorrencia[] = substr($conteudo,$pos,160);#registra um pequeno texto da ocorrência
			$conteudo = substr($conteudo,$pos+1,$tam-$pos);
			$conteudo = " ".$conteudo;#desvia de bug
		}
		
		return array('ocorrencias' => $cont, 'texto' => $ocorrencia);

	}
	$palavra = "advogados";
	/*
$files = scandir($url_linux);#usar o endereço de onde esta o arquivo ex. /home/dominio/public_html/ ou c:/wamp/www/site */
 
 $files = scandir($url_linux);#usar o endereço de onde esta o arquivo ex. /home/dominio/public_html/ ou c:/wamp/www/site

	$acumulador = 0;
	$i = 0;
	foreach($files as $file) {

		if(!is_dir($file)) {
			$dados = pesquisar(utf8_decode(strip_tags(file_get_contents($file))), $palavra);
			if($dados['ocorrencias'] > 0) {
				print "<h2>".$file."</h2>";
				$acumulador = $acumulador+$dados['ocorrencias'];
				foreach($dados['texto'] as $achado) {
					print '<p><a href="'.$file.'">'.$achado.'</a></p>';
				}
			}
			$dados = NULL;
			unset($dados);
		}
	}

?>
