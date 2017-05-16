<?
$server = $_SERVER['SERVER_NAME'];
$endereco = $_SERVER ['REQUEST_URI'];
?><br>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '782033808540317',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/pt_BR/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="true">
</div><br>

<i>Para comentar no vídeo, logue com o facebook <b>-> Logar</b> <fb:login-button scope="public_profile,email" onlogin="checkLoginState();"> 
</fb:login-button></h3>
<div class="fb-comments" data-href="<?php echo 'http://' . $server . $endereco; ?>" data-numposts="5" data-colorscheme="light"></div>
<br>
<!-- twitter -->
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://<?php echo 'http://' . $server . $endereco; ?>" data-text="Gostei desse vídeo">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<!--  google plus -->

<!-- Inclua esta tag na seção head ou logo antes da tag de fechamento da seção body -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<!-- Inclua esta tag onde desejar que o botão +1 seja exibido -->
<g:plusone size="medium"></g:plusone>

<hr>
