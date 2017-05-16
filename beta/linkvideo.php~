<?php


include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';
?>
</head>
<body>

<?php
include 'navbar.php';

$mes = date("m");
$ano = date("Y");
$dia = date("d");

$hora = date("H");
$minuto = date("i");
$segundo = date("s");

$caminho = 'vdata/classicos/';
$autor = 'Comunidade-BR';

$ide = addslashes (filter_var($_POST['id'] , FILTER_SANITIZE_STRING));
$title = addslashes (filter_var($_POST['title'] , FILTER_SANITIZE_STRING));
$description = addslashes (filter_var($_POST['description'] , FILTER_SANITIZE_STRING));
$keywords = addslashes (filter_var($_POST['keywords'] , FILTER_SANITIZE_STRING));
$linkoriginal = addslashes (filter_var($_POST['videolink'] , FILTER_SANITIZE_STRING));
$idi = '00000000001';


echo "$ide" . '<br>';
echo "$title" . '<br>';
echo "$description" . '<br>';
echo "$keywords" . '<br>';
echo "$linkoriginal" . '<br>';




@mkdir("vdata/br/classicos/$idei/", 0777); //prepara dir.

#####  GRAVAR XML DO VIDEO ######

$arquivo = fopen("vdata/classicos/$ide" . "00000000001" . ".xml",'w+');

$aspassimples = "'";
if ($arquivo) {
	if (!fwrite($arquivo, "<?xml version='1.0'?>
<dados>
  <video>
    <idiv>$ide$idi</idiv>
    <ide>$ide</ide>
    <author>$autor</author>
    <embed>usuario@email.com</email>
    <title>$title</title>
    <description>$description</description>
    <keywords>$keywords</keywords>
    <data>$dia-$mes-$ano-$hora-$minuto-$segundo</data>
    <linkoriginal>$linkoriginal</linkoriginal>

    <future></future>
    
  </video>
  <opcoes>
    <type>youtube</type>
    <future></future>
  </opcoes>
</dados>")) die('Não foi possível atualizar o arquivo.');
	echo 'Vídeo listado com sucesso...<br>';
	fclose($arquivo);
};

#####  GRAVAR XML DO VIDEO ######


// <img src=http://img.youtube.com/vi//default.jpg>

#####  GRAVAR XML DO VIDEO ######

$arquivo = fopen("classicos.php",'a+');

$aspassimples = "'";
$aspas = '"';
$siteconfig = 'watch?v=';
// ("http://www.biritiba.com.br","",
$eixo = "item[item.length]=new Array($aspas$siteconfig$ide&n=0$aspas,$aspas$aspas,";


if ($arquivo) {
	if (!fwrite($arquivo, "
$eixo$aspas<a href=watch?v=$ide>$title</a><br><img src=http://img.youtube.com/vi/$ide/default.jpg>$aspas,$aspas$description$aspas,$aspas$keywords$aspas);
")) die('Não foi possível atualizar o arquivo.');
	echo 'Vídeo listado com sucesso...<br>';
	fclose($arquivo);
};

#####  GRAVAR XML DO VIDEO ######
include 'footer.php';
?>









