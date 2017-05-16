<?php
$obj = simplexml_load_file("core.xml");
$name = $obj->sys->name;
$autor = $obj->sys->author;
echo $name . '<br>';
echo $autor;
?>