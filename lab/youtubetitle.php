<?



function getTitle($url){
   parse_str( parse_url( $url, PHP_URL_QUERY ), $youtubeID );
   $url = "http://gdata.youtube.com/feeds/api/videos/". $youtubeID['v']."?v=2";
   $xml = simplexml_load_file($url);
   return $xml->title;
}
$url_youtube = "http://www.youtube.com/watch?v=igoUEEV7zls";
echo getTitle($url_youtube);

echo '<br>';

function getIDYouTube($url){
   parse_str( parse_url( $url, PHP_URL_QUERY ), $youtubeID );
   $id = $youtubeID['v'];
   return $id;
}
 echo '<br>';
$url_youtube = "http://www.youtube.com/watch?v=Jb4tsC3_EMk";
$id = getIDYouTube($url_youtube);
echo $id;


x

?>
