
<html>
<head>
<meta charset="utf-8">
</head>
<body>
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
<form name="srchfrm" method="get" action="search.php" onsubmit="check(this.srchtxt);" target="_self">
  <div align="center"> <font size="2" face="Verdana"> 
    <input type="text" size=30 name="srchtxt">
    - 
    <select name="srchlst">
      <option value="bd1.js">Banco de Dados 1</option>
      <option value="bd2.js">Banco de Dados 2</option>
    </select>
    <input type="submit" value="Buscar">
    <input type="hidden" name="redirecionar" value="_top">
    <input type="hidden" name="sitesporpg" value="10">
    <input type="hidden" name="pagina" value="0">
    </font> </div>
</form>
<p>&nbsp;</p>
<p align="center">&nbsp;</p>
<table width="90%" border="0" align="center">
  <tr> 
    <td height="10" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td align="center" valign="top"> <div align="center"><font size="2" face="Verdana"><font size="1"> 
        Copyright <font size="1">&copy;</font> 2003 - Todos os direitos reservados 
        - <a href="http://www.brdesign.net/" target="_blank">BRdesign</a></font></font></div></td>
  </tr>
  <tr> 
    <td height="18" align="center" valign="top"> <div align="center"><font size="2" face="Verdana"><font size="1"><a href="http://www.brdesign.net/" target="_blank">w 
        w w . b r d e s i g n . n e t</a></font></font></div></td>
  </tr>
</table>
<p align="center">&nbsp;</p>
</body>

</html>
