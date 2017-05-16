<?php
$obj = simplexml_load_file("0KSh_0u8In000000000001.xml");
// $name = $obj->video>
$idiv = $obj->video>idiv;
echo $idiv;
/*
$idev = $obj->video>ide;
$author = $obj->video>author;
$titletag = $obj->video>title;
$descriptiontag = $obj->video>description;
$keywordstag = $obj->video>keywords;*/


/*
echo "ID externo: $idev<br>";
echo "Autor: $author<br>";
echo "Título: $titletag<br>";
echo "Descrição: $descriptiontag<br>";
echo "Palavras chave: $keywordstag<br>";*/

?>
