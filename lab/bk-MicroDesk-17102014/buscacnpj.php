<?php

include "template.php"; ?>

<form action="busca.php" method="get">
Tabela:<select name="tabela"><option value='empresa'>Empresa</option></select><br>
Campo:<select name="campo"><option value='NRCNPJ'>CNPJ</option></select><br>
<input type="text" name="palavra" />&nbsp;<input type="submit" value="Buscar" />
</form>