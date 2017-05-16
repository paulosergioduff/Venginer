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

echo '<form>';

$link_video = "$recebelink";
$link_video = basename($link_video);
$link_video = explode('=', $link_video);
$link_video = $link_video[1];
echo 'ID:<select name="id"><option>';
echo "$link_video" . '</option></select><BR>';

$dados = get_meta_tags("https://www.youtube.com/watch?v=$link_video");

echo 'Título:<input type="text" value="';
echo " {$dados['title']}";
echo '">';


echo "<br>Descrição: {$dados['description']}.";
echo "<br><img src=http://img.youtube.com/vi/$link_video/default.jpg><br>";

echo '<hr><br><input type="submit" value="Enviar vídeo">';

echo '</form>';





//watch-time-text
?>

</center>


<?php include 'footer.php'; ?>



