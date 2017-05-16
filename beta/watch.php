<?php

$idvideo = $_GET['v'];

include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';

?>

</head>

</body>

<?php include 'navbar.php'; ?>
<hr>
<?
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
?>
<center>
<iframe width="560" height="280" src="https://www.youtube.com/embed/<?php echo $idvideo; ?>?autoplay=1" frameborder="0" allowfullscreen></iframe>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Retangulo teste -->
<ins class="adsbygoogle"
     style="display:inline-block;width:336px;height:280px"
     data-ad-client="ca-pub-8136135240991918"
     data-ad-slot="7087200190"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script><br>

<!-- twitter -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?php echo 'http://' . $server . $endereco; ?>" data-text="Gostei desse vídeo">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<!--  google plus -->

<!-- Inclua esta tag na seção head ou logo antes da tag de fechamento da seção body -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!-- Inclua esta tag onde desejar que o botão +1 seja exibido -->
<g:plusone size="medium"></g:plusone>

</center>
<?php include 'comentario.php'; ?>

<br>
 

      <hr>
<?php include 'relacionados.php'; ?>
      <hr>


<?php include 'footer.php'; ?>



