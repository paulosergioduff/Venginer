<?php

header("Content-Type: text/html; charset=utf-8",true);

?>

var srchstr=new Array(); // crie um  objeto srchstr dentro da array
srchstr[0]=new Array(location.search); // objeto posição [0] da matriz srchstr
flag=0;
var chrs=new Array('&','=','+'); // crie um objeto chrs com valores & =  + 
for(i=0;i<chrs.length;i++) // loop variavel condição ( imaginaria i=0 -> objeto src..+caracteres; j infinito)
 for(j=0;j<srchstr[i].length;j++) // Mesmo exemplo acima do j
  { if(i==2 && j==1)
     { t=unescape(srchstr[i][j]);
       srchstr[2][1]="";
       for(k=0;k<t.length;k++)
        { c=t.charAt(k);
          if(c=='"')
           { flag=(flag+1)%2; }
          else
           { srchstr[2][1]+=(flag==1 && c=="+")?" ":c; };
        };
     };
    srchstr[srchstr.length]=srchstr[i][j].split(chrs[i]);
  };
