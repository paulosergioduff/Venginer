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

<hr>
