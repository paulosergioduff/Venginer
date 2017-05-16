<?php
$ip = getenv("REMOTE_ADDR");
$provedor = gethostbyaddr("$ip");
echo "O seu IP é $ip e o seu provedor é $provedor";
?>
