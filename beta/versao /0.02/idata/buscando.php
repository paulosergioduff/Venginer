<?php
mb_internal_encoding("UTF-8"); 
mb_http_output( "iso-8859-1" );  
ob_start("mb_output_handler");  

$recebelink = $_POST['id'];


?>

 <meta charset="UTF-8">


 

 


<script language="javascript">
// 
var srchstr=new Array();
srchstr[0]=new Array(location.search);
flag=0;
var chrs=new Array('&','=','+');
for(i=0;i<chrs.length;i++)
 for(j=0;j<srchstr[i].length;j++)
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
document.write('<script language="javascript" src="'+srchstr[3][1]+'"></scr'+'ipt>');

// **** User Defined Display
dsp=new Array();
// Score: %score
dsp[dsp.length]='<tr><td></td><td ><a href="%link" target="%target">%title</a> </font></td></tr>';
dsp[dsp.length]='<tr><td align="right"></td><td >%description</td></tr>';
// dsp[dsp.length]='<tr><td align="right">Palavras-chave:</td><td %bgc>%keywords</td></tr>';
// dsp[dsp.length]='<tr><td align="right">Banco de Dados:</td><td %bgc>%dbase</td></tr>';
dsp[dsp.length]='<tr><td align="center" colspan=2><hr width=100%></td></tr>';
// **** End User Defined Display

</script>

</head>
<body >
<div align="center"> <font size="2" face="Verdana"> 
  <script language="javascript">
v=new Array(); w=new Array();
for(i=1;i<3;i++)
 for(j=0;j<2;j++)
  w[w.length]=new Array(i,j); // 1 0, 1 1, 2 0, 2 1
x=new Array("+","","","-","");
for(i=0;i<srchstr[8].length;i++)
 { v[i]=new Array(1,1);
   if(srchstr[8][i]=="")
    srchstr[8][i+1]="+"+srchstr[8][i+1];
   for(j=0;j<4;j++)
    if(srchstr[8][i].indexOf(x[j])==0 && x[j]!="")
     v[i]=w[j];
   f=(srchstr[8][i].indexOf(" ")>-1)?'"':'';
   if(((v[i][0]*v[i][1])!=1))
    srchstr[8][i]=srchstr[8][i].substring(1,srchstr[8][i].length);
   x[4]+=x[v[i][0]*2+v[i][1]-2]+f+srchstr[8][i]+f+" ";
 };

fnd=new Array();
order=new Array(0,4,2,3);
last=-1;
for(i=0;i<item.length;i++)
 { sc=0; t=1; f=1;
   for(j=0;j<order.length;j++)
    { if(t<2) t=1;
      f=1;
      for(k=0;k<srchstr[8].length;k++)
       if(srchstr[8][k]!="")
        { st=srchstr[8][k].toLowerCase();
          c=-1; p=-1;
          while(p>-1 || c<0)
           { c++; p=item[i][order[j]].toLowerCase().indexOf(st,p+1)
           };
          if(c>0)
           { sc+=(c*j);
             t*=v[k][0];
           }
          else
           { f*=v[k][1]; 
           };
        };
      if((t*f)==1 && sc>0)
       { if(last!=i)
          { fnd[fnd.length]=new Array(i,sc);
            last=i; }
         else
          { fnd[fnd.length-1][1]=sc; };
       }
      else
       { if(t>1 && last==i) 
          fnd.length--;
       };
    };
 };
for(i=0;i<fnd.length-1;i++)
 for(j=i+1;j<fnd.length;j++)
  if(fnd[i][1]<fnd[j][1])
   { a=fnd[i]; fnd[i]=fnd[j]; fnd[j]=a; };

d=new Array();
d[0]=srchstr[6][1]*srchstr[5][1]; // first displayed # this page
d[1]=srchstr[5][1]*1+d[0]; // last displayed # this page
d[2]=Math.floor((fnd.length-1)/srchstr[5][1]); // number pages-1
if(d[1]>fnd.length) d[1]=fnd.length; // adjustment last # displayed
d[3]=srchstr[6][1]*1; // page number-1
document.write('<center><table border=0 width=90%><tr><td colspan=2 align=center><font size="2" face="Verdana">Buscando por: <b>');
document.write(x[4]+'</b><br>Foram encontrados '+fnd.length+' de '+item.length);
if(fnd.length>0) document.write(' videos nesta categoria.</td></tr><br>');




bgc=new Array("#bbbbbb","#aaaaaa");
op=new Array();
op[1]=new Array("%target",srchstr[4][1]);
op[4]=new Array("%dbase",srchstr[3][1]);

for(i=0;i<fnd.length;i++)
 if(fnd[i][0]>-1 && i>=d[0] && i<d[1])
  { for(j=0;j<dsp.length;j++)
     { n=fnd[i][0];
       op[0]=new Array("%link",item[n][1]+item[n][0]);
       op[2]=new Array("%score",fnd[i][1]);
       op[3]=new Array("%title",uscore(item[n][2]));
       op[5]=new Array("%description",uscore(item[n][4]));
       op[6]=new Array("%keywords",uscore(item[n][3]));
       op[7]=new Array("%num",i+1);
       op[8]=new Array("%bgc",'bgcolor="'+bgc[j&1]+'"');

       t=dsp[j];
       for(k=0;k<op.length;k++)
        { a=t.indexOf(op[k][0],0);
          if(a>-1)
           t=t.substring(0,a)+op[k][1]+t.substring(a+op[k][0].length,t.length);
        };
       document.write(t+"\n");
     };
  };

pgs='<tr><td colspan=2 align="center">P�gina: ';
end=srchstr[0][0].lastIndexOf("=")+1;
ext=srchstr[0][0].substring(0,end);
pga=new Array();
ltx=(d[3]>8)?"<< Anterior  ":1;
for(i=0;i<d[2]+1;i++)
 { pga[pga.length]=' <a href="br_busca_js_buscando.htm'+ext+i+'">'+ltx+'</a>\n';
   ltx=i+2;
   if(i==(d[2]-1) && i>(d[3]+7))
    ltx="  Pr�xima >>";
 };
 
for(i=0;i<pga.length;i++)
 if(i==0 || i==(pga.length-1) || (i>(d[3]-8) && i<(d[3]+8)))
  pgs+=(i!=d[3])?pga[i]:" "+(i+1);

if(d[2]>0) document.write(pgs+'</td></tr>');

document.write('</table>');



function uscore(txt)
 { for(fi=0;fi<srchstr[8].length;fi++)
    if(srchstr[8][fi].length>0)
     { fc=txt.toLowerCase().indexOf(srchstr[8][fi].toLowerCase(),0);
       while(fc>-1)
        { ft=txt.substring(0,fc)+"<b>"+txt.substring(fc,fc+srchstr[8][fi].length)+"</b>";
          txt=ft+txt.substring(fc+srchstr[8][fi].length,txt.length);
          fc=txt.toLowerCase().indexOf(srchstr[8][fi].toLowerCase(),fc+5);
        };
     };
   return txt;
 };

</script>
</font></div>
</font></div>
</body>
</html>
