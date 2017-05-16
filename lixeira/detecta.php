<?php
include 'browser-detection.php';

$ip = $_SERVER['REMOTE_ADDR'];

echo $ip;

echo '<br>';


echo ( browser_detection( 'browser_number' ) .'<br>'.
browser_detection( 'browser_working' ) .'<br>'.
browser_detection( 'os' ) .'<br>'.
browser_detection( 'os_number' ) );

$numos = browser_detection( 'os_number' );

echo '<br>';

echo 'Linguagem:' . $_SERVER['HTTP_ACCEPT_LANGUAGE'];

echo '<br>';
echo PHP_OS;

echo '<br>';

echo $numos; echo '<br>';

// Or, an option that also works before PHP 5.3
echo php_uname('n'); echo '<br>'; // may output e.g,: sandie

function get_ip()
{
   $variables = array('REMOTE_ADDR',
                      'HTTP_X_FORWARDED_FOR',
                      'HTTP_X_FORWARDED',
                      'HTTP_FORWARDED_FOR',
                      'HTTP_FORWARDED',
                      'HTTP_X_COMING_FROM',
                      'HTTP_COMING_FROM',
                      'HTTP_CLIENT_IP');

   $return = 'Unknown';

   foreach ($variables as $variable)
   {
       if (isset($_SERVER[$variable]))
       {
           $return.= $_SERVER[$variable]." - ";
       }
   }
   
   return $return;
}

print get_ip();






?>
