<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title> - jsFiddle demo</title>
  
  <script type='text/javascript' src='//code.jquery.com/jquery-1.10.1.js'></script>
  
  
  
  
  <link rel="stylesheet" type="text/css" href="/css/result-light.css">
  
  <style type='text/css'>
    table { 
    border-spacing: 0px;
    border-collapse: separate;
    width: 100%;
    border-bottom: 1px solid #aaa;
    text-align: center;
}

thead td {
    margin: 0;
    padding: 0;
    padding: 2px;
}

thead th {
    margin: 0;
    padding: 5px;
    border-bottom: 1px solid #aaa;
}

div {
    padding-top: 10px;
    text-align: center;
}
  </style>
  
</head>
<body>

<?php include 'paginacao.js'; ?>
  <table>
    <thead>
        <tr>
            <th>Título</th>
            <th>ID</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" align="center">Nenhum dado ainda...</td>
        </tr>
    </tbody>
</table>
<div>
<button id="anterior" disabled>&lsaquo; Anterior</button>
    <span id="numeracao"></span>
<button id="proximo" disabled>Próximo &rsaquo;</button>
</div>
  
</body>


</html>


