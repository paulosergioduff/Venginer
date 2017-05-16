<?php

include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';

?>

</head>

</body>
<?php include 'navbar.php'; ?>
<hr>
<center>
<?php
header("Content-Type: text/html; charset=utf-8",true);

$recebelink = $_POST['videolink'];

echo '<form action="linkvideo" method="POST">';

$link_video = "$recebelink";
$link_video = basename($link_video);
$link_video = explode('=', $link_video);
$link_video = $link_video[1];
echo "<img src=http://img.youtube.com/vi/$link_video/default.jpg><br><br>";
echo '
<center>ID do vídeo</center>
<br><select name="id"><option>';
echo "$link_video" . '</option></select><br>';

echo 'Link original:<br><select name="videolink"><option>';
echo "$recebelink" . '</option></select><BR>';

$dados = get_meta_tags("https://www.youtube.com/watch?v=$link_video");

echo '<center>Título</center>
<br>
<input type="text" value="';
echo " {$dados['title']}";
echo '" name="title"><br>';


echo "Descrição<br><textarea name='description'> {$dados['description']}.</textarea><br>";
echo "<br>Adcione palavras chaves: <br><input type='text' name='keywords' maxlength='50'><br>";

echo '<hr><br><input type="submit" value="Enviar vídeo">';

echo '</form>';





//watch-time-text
?>

</center>


<?php include 'footer.php'; ?>



