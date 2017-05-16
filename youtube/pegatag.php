<?php
class youtube {
  var $videoid;
  var $videourl;
  var $largura = 320;
  var $altura = 180;

  function __construct($video) {
    $this->videourl = $video;
    $video = explode("=", $video);
    $video = $video[1];
    $video = explode("&", $video);
    $video = $video[0];
    $video = str_replace("?v=", null, $video);
    $this->videoid = $video;
  }

  public function isvalidurl($url) {
    $analisa = @parse_url($url);
    $querystr = array();
    @parse_str($analisa['query'], $querystr);
    return @(($analisa['host']=='youtube.com' || $analisa['host']=='www.youtube.com' || $analisa['host']=='m.youtube.com')
       && $analisa['path'] = '/watch' && isset($querystr['v']));
  }

  function setvideosize($largura, $altura) {
    $this->largura = (int)$largura;
    $this->altura = (int)$altura;
  }

  function getembedcode() {
    return '<object width="'.$this->largura.'" height="'.$this->altura.'"><param name="movie" value="http://www.youtube.com/v/'.$this->videoid.'&amp;hl=pt_BR&amp;fs=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/'.$this->videoid.'&amp;hl=pt_BR&amp;fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="'.$this->largura.'" height="'.$this->altura.'"></embed></object>';
  }

  function getvideotitle() {
    $video = get_meta_tags($this->videourl);
    return $video['title'];
  }

  function getvideotext() {
    $video = get_meta_tags($this->videourl);
    return $video['description'];
  }

  function getvideoimage() { 
    return 'http://i3.ytimg.com/vi/'.$this->videoid.'/default.jpg';
  }
}

// Exemplo de uso:

echo youtube::isvalidurl("http://facebook.com") ? "Sim" : "Nao"; // Nao
echo youtube::isvalidurl('https://www.youtube.com/watch?v=rlSW5HTmGhg') ? "Sim" : "Nao"; // Sim

$youtube = new youtube('https://www.youtube.com/watch?v=VqeJYNyDXQs');
$youtube->setvideosize(640, 480);
echo $youtube->getvideotitle(); echo '<br.';
echo $youtube->getvideotext(); echo '<br.';
echo $youtube->getvideoimage(); echo '<br.';
echo $youtube->getembedcode(); echo '<br.';
