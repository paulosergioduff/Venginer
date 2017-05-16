<?php require_once('Youtube.class.php'); ?>

<html>
<body>

<h1> Ola mundo</h1>
<?php

  $video = new Youtube("http://www.youtube.com/watch?v=UFZtDOmhiM8");

   $tags = $video->getTags();

         if ($tags)

     { 
       print_r($tags);
        }

   else 

  {
  echo 'erro';
   }



?>
