<?php
$itens = array(
"img01.jpg", "img02.jpg", "img03.jpg","img04.jpg","img05.jpg","img06.jpg","img07.jpg","img08.jpg","img09.jpg","img10.jpg",
"img11.jpg","img12.jpg","img13.jpg","img14.jpg","img15.jpg","img16.jpg","img17.jpg","img18.jpg","img19.jpg","img20.jpg",
"img21.jpg","img22.jpg","img23.jpg","img24.jpg","img25.jpg","img26.jpg","img27.jpg","img28.jpg","img29.jpg","img30.jpg",
"img31.jpg","img32.jpg","img33.jpg","img34.jpg","img35.jpg","img36.jpg","img37.jpg","img38.jpg","img39.jpg","img40.jpg",
"img41.jpg","img42.jpg","img43.jpg","img44.jpg","img45.jpg","img46.jpg","img47.jpg");


  $RegistrosPorPagina = 16; //Define o número de colunas


  $colunasPorPagina = 4; //Total de registros por pagina...

       if (!isset($_GET["PaginaAtual"]))
     
         {

                  $PaginaAtual = 1;

              } else
 
                 {

                     $PaginaAtual = $_GET["PaginaAtual"];

                        }

//Se a variável Pagina não existir, página será = 1, se existir, página sera igual a variavel

  $TotalDeRegistros = (count($itens) - 1); //Total de registros contidos no array

  $TotalDePaginas = ceil($TotalDeRegistros/$RegistrosPorPagina); //O total de páginas será o Total de registros dividido pelo nº de registros por pagina arredondado para CIMA...

  $PrimeiroRegistro = (($PaginaAtual * $RegistrosPorPagina) - $RegistrosPorPagina);

/*

A variável $PrimeiroRegistro é a variavel que indicará o 1º registro a ser exibido...
Lembrando que o "-1" é porque como é um array, os elementos começam com índice "0" e não com índice "1"!
*/
 
                function CriarLinks ($TotalDePaginas)

                     {

                            $link = ''; //Inicia a variavel



                              for ($i = 1; $i <= $TotalDePaginas; $i++) //Faz um for até o números de paginas

                                  {
                                       $link .= ' <a href="PaginacaoDeArrays.php?PaginaAtual='.$i.'">'.$i.'</a> |'; //Adiciona a pagina na string
 
                                 }
 
return $link; //Tem como retorno a string com os links já criados
 
                   }
 
                                     for ($i = $PrimeiroRegistro; $i < ($RegistrosPorPagina + $PrimeiroRegistro); $i++) //Cria o for para a exibicao dos registros
 
                                       {
 

 
                                             echo '<table>';

      if(isset($itens[$i])) // se o array com índice $i existe, ele o mostrará!
 
         {


	 echo ' <tr> ';
				  
	 $cont = 0;
	 $indiceAtual = $i;
	 
	 while( $cont < $colunasPorPagina ){
   
		  if( isset( $itens[ $indiceAtual ] ) ){

		$original = $itens[ $indiceAtual ];
		// monta o nome do arquivo miniatura
		$mini = explode('.', $original);
		$mini = $mini[0]."_mini.jpg";

		echo "<td><a href='#' class='menu_cima'><img src='BOLSAS/".$mini."' onclick=\"MM_openBrWindow('BOLSAS/".$original."','Produtos','scrollbars=yes,resizable=yes,width=400,height=410');\" width='100' height='100'></a></td>";
		   
		   } 
		++$cont;
		++$indiceAtual;
		
	 }

	//Atualiza a variável $i para não repetir e nem pular
	 --$cont;
	 --$indiceAtual;
	 
	 $i = $indiceAtual;
  
	 echo '</tr>';


#
//echo $itens[$i].'<br>';
#
//"Dá" um echo no registro atual
#
}
#
}
#
 echo '</table>';
#
echo CriarLinks($TotalDePaginas);
#
//"Dá" um echo nos links da paginacao... Passando como parametro o total de paginas...
?>
