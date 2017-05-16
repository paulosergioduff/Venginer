<?php

require 'class/youtubeDetails.php';

$youtubeDetails = new youtubeDetails('https://www.youtube.com/watch?v=0rFE8FZNZ3o');
$httplinkn = 'http:';
$inicioimg = "<img src=http://";
$fimimg = " >";
$imagens = $youtubeDetails->getImages();

//Imagem grande
echo "$inicioimg";
echo $imagens['big'];
echo $fimimg;
echo '<br>';

//Imagem pequena
echo "$inicioimg";
echo $imagens['small'];
echo $fimimg;

echo '<br>';

$embed = $youtubeDetails->getEmbed();


//Link para embed do vídeo
echo 'http:' . "$embed";

$infor = $youtubeDetails->getInfor();

//Imagem grande
echo $infor['image']['big'];
echo '<br>';

//Imagem pequena
echo $infor_is['image']['small'];
echo '<br>';

//Link para embed
echo $infor['embed'];
echo '<br>';

//Data da publicação
echo $infor['published'];
echo '<br>';

//Última atualização
echo $infor['updated'];
echo '<br>';

//Título
echo $infor['title'];
echo '<br>';

//Descrição
echo $infor['description'];
echo '<br>';

//Autor
echo $infor['author'];

echo '<img src=' . "$infor_is" . '>;

*/

?>
