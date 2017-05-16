<?
function remove_simbolos_acentos($string){
   $string = trim(strtolower($string));
   $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿŔŕ?';
   $b = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuuyybyRr-';
   $string = strtr($string, utf8_decode($a), $b);
   $string = str_replace(".","-",$string);
   $string = preg_replace( "/[^0-9a-zA-Z\.]+/",'-',$string);
   return utf8_decode(rtrim($string, "-"));
}
 
$texto_original = "Seja bem-vindo ao linhadecomando.com: - um site que compartilha idéias
com a comunidade! Site de referência, para aqueles que querem aprender. 
Posso te ajudar?";
 
$texto_alterado = remove_simbolos_acentos(utf8_decode($texto_original));
 
echo $texto_original;
echo "<br/>";
echo $texto_alterado;
?>
