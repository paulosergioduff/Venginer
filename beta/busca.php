<?php

include 'essencial.php';
include 'headers.php';
include 'bootstrap.php';


header("Content-type: text/html;charset=iso-8859-1");

?>

</head>

</body>
<?php include 'navbar.php'; ?>
<hr>

<div align="center"> <font size="2" face="Verdana"> 
  <script language="javascript">
function check(txt)
 { t=txt.value; n=t.indexOf("  ");
   while(n>=0)
    { t=t.substring(0,n)+t.substring(n+1,t.length);
      n=t.indexOf("  "); };
   txt.value=t; return true; };
</script>
  </font></div>
<form name="srchfrm" method="get" action="buscando.php" onsubmit="check(this.srchtxt);" target="_self">
  <div align="center"> <font size="2" face="Verdana"> 
    <input type="text" size=30 name="srchtxt">
    - 
    <select name="srchlst">
      <option value="classicos.php">Classicos</option>
      <option value="bd1.js">Banco de Dados JS</option>
    </select>
    <input type="submit" value="Buscar">
    <input type="hidden" name="redirecionar" value="_top">
    <input type="hidden" name="sitesporpg" value="10">
    <input type="hidden" name="pagina" value="0">
    </font> </div>
</form>

<iframe src="footer2.php" style="border:none" width="100%" height="200"></iframe><br>
<?php include 'footer.php'; ?>



