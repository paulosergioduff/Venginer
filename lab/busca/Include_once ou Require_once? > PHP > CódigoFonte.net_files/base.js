var version="b.26";var _cntnt;var _ttq=_ttq||[];_ttq.push(["_loadProfiles"]);var TTBase;try{TTBase=(function(){var ah=version;var bl=0;var bC="t.tailtarget.com",ej="d.tailtarget.com",aV="c.t.tailtarget.com",cT="tags.t.tailtarget.com",bP="/cm",eg="rt.t.tailtarget.com",bu="/rt?c=",b1="s",bU="b.t.tailtarget.com",B="/b?",bF="d.t.tailtarget.com",aa="/brain.js",dp=".seg.t.tailtarget.com",bG="/ca?",b=false,cr="dev-",da=":8080",i="/__tt.gif",en="_ttuu.s",c7=720*24*60*60*1000;var bn=1*24*60*60*1000,b4="tt.nprf";var Q=0,P=1,O=2,ec=10,d5=3600;var E="A",A="G",u="S";var bd="0px",p="a",bZ="abs",c1="addEventListener",az="_addSlot",cD="account",aU="action",bb="age",dn="&",bN="appendChild",aS="async",d9="attachEvent",er="block",dk="body",dP="_ca",J="campaign",dQ="callback",aG="callbackScript",a4="ceil",cd="_channel",bm="checkJob",bc="close",dN="cluster",bA="clusters",dK="_cm",w="cookie",cX=":",cb=",",b3="command",a2="command not found",V="conditional",cK="container",Z="contentWindow",bM="count",c="createElement",b2="createTextNode",C="cssText",de=("https:"==document.location.protocol?"https://":"http://"),cY="_dcm",cA="dev",N="disabled",c5="display",bL="div",bg="document",ao="documentElement",U="domain",dO="",dG="_enableDebug",d3="_enableCommands",ai="=",eh="exec",dh="executed",d2="expires",n="f",aX="floor",em="frameBorder",ef="function",ee="gender",df="getHours",bO="getTime",dg="getElementById",ar="getElementsByTagName",M="getProfiles",v="getClusters",bK="getStatus",cQ="hash",X="height",b7="0123456789ABCDEF",bY="hostname",ed="href",l="i",cC="id",cW="iframe",h="img",aD="income",dV="indexOf",bJ="innerHTML",s="_insert",cV="insertBefore",cE="inside",eb="interval",dM="join",cm="js",cN="jsCallbackCheck",dY="length",b6="load",ad="_loadProfiles",bV="_localTestOnly",q="location",dx="LS",bX="max",x="monitor",dS="name",ax="number",aI="object",aR="onlyOneInstance",a5="onload",cl="open",cv="optout",cL="outerHTML",ep="parentNode",d6="path",d1="parse",o="|",cR="position",dC="prod",bI="profiles",eo="prototype",bv="publisher",dZ="push",bh="?",a3="random",dR="referrer",cy="_registerFeedCallback",c6="replace",bS="_rtp",g="s",a9="_saveProfile",bi="script",b0="scripts",ct=";",aN="_setAccount",bW="_setCampaign",j="_setCustomAudience",cF="_setExecutedCallback",dH="_setMode",c0="_setProfile",F="setTime",af="_setTTProfile",cw="shift",cs="_sync",bj="syncronized",dc="/",a=" ",el="split",be="src",aP="style",dJ="substr",f="t",aM="tA=",aL="tB=",aK="tC=",aJ="tD=",aH="tE=",aF="tF=",aE="tG=",aC="tH=",aB="tI=",aA="tJ=",aw="tP=",av="tQ=",au="tR=",at="tS=",aq="tX=",ap="tY=",an="tZ=",bz="ttconversor",co="ttcustomaudience",bE="_ttdmp",ek="ttl",a1="ttprofile",bw="text",cO="text/javascript",y="toGMTString",a0="_track",dq="_trackPageView",ca="trackyt",H="track",ea=1,k=2,cj="TTBase:",cH="type",T="undefined",c9="_",c3="unitTest",d="v",bH="view",am="width",bs="write";var dU={"1":"m","2":"f"};var dz={"1":"0-17","2":"18-24","3":"25-34","4":"35-49","5":"50"};var dX=new Date(),dD=document,m=false,bk=Math,al=new Date().getTime(),dd=null,ay=parent,D=true,aQ=window,dr=RegExp,ei="+",dE=typeof(JSON)!="undefined"?JSON:null,dA=typeof(atob)!="undefined"?atob:null;var dW=typeof(console)!="undefined"?console:null;var bp=dC;var bD=m;var ak,bq=[],b8=[],cq,ci,cx,dL={},dl=[],cf,db,cG;var di;var a7=1,bt=2;var dF=m;var dB=m;var ck;var cp;var ba=m;var dw=m;var bB=[];var d7=D;var aj={};aj[eb]={};aj[bM]={};aj[dh]={};function dj(){cI("tailtarget base initialization");b9(cj+arguments[dY]);bT();if(arguments[dY]===P){var ev=arguments[Q];b9(cj+ev[dY]);for(var eu=Q;eu<arguments[Q][dY];eu++){this.push(arguments[Q][eu])}}ae();c2()}function bT(){var eu=d4(en);cf=dm(al,eu);W(en,al,c7)}function ae(){if(dw){ds({type:cm,async:D,src:de+ej+dc+b1+dc+ak})}}dj[eo][d]=function(){return D};dj[eo][bb]=dO;dj[eo][ee]=dO;dj[eo][aD]=dO;dj[eo][bK]=dO;dj[eo][bI]=[];dj[eo][M]=function(){return cx};dj[eo][v]=function(){return ci};var dT=function(ex){if(cZ(ex)!==T){cx=ex;var ey=ex[el](c9);if(cZ(ey)!==T){if(cZ(ey[Q])!==T){var ew=ey[Q][el](o);for(var ev=0;ev<ew.length;ev++){var eu=ew[ev][el](cX);if(eu.length===O){switch(eu[Q]){case E:dj[eo][bb]=Y(dz,eu[P]);break;case A:dj[eo][ee]=Y(dU,eu[P]);break}}}}}}};var Y=function(ew,eu){try{if(I(ew)||I(eu)){return dO}return ew[eu]}catch(ev){return dO}};var cS=function(ew){ci=ew;var ev=dO;var ey=aT(dN);if(cZ(ey)!==T&&ey!==dd&&ey[dY]>Q){ev=ey}else{ev=ci}ev=ev[c6](/[^0-9,]/g,dO);if(ev==cv||ev==N){dj[eo][bK]=ev;return}var eu=ev[el](cb);if(eu.length===1&&eu[0]===""){eu[0]="0"}try{delete _ttq[bI]}catch(ex){}dj[eo][bI]=eu};dj[eo][dZ]=function(){b9(arguments[dY]);for(var eu=Q;eu<arguments[dY];eu++){var ew=arguments[eu];if(ew[dY]>Q&&cZ(ew)===aI&&cZ(ew[cw])!==T){var ev=ew[cw]();b9(ev);switch(ev){case cd:cg(ew);break;case dK:bQ();break;case cY:ag();break;case d3:z();break;case dG:aY(ew[cw]());break;case ad:dt();break;case bV:b5();break;case cy:du(ew[cw]());break;case bS:es(ew[cw]());break;case a9:et(ew[cw]());break;case aN:bo(ew[cw]());break;case dP:eq(ew[cw]());break;case bW:d0(ew[cw]());break;case j:cP(ew);break;case cF:br(ew[cw]());break;case dH:cc(ew[cw]());break;case c0:R(ew[cw]());break;case af:dv(ew[cw]());break;case cs:S();break;case a0:cB();break;case dq:L();break;default:a6(a2,ev)}}}};var cg=function(eA){cI(cd);var ev=m;if(cZ(eA)!==T){var ew=r(eA[cw]());var eu=ew[el](cb);for(var ez=0;ez<eu[dY];ez++){if(eu[ez]!==dO&&cz(bq,eu[ez])<0){ev=D;bq[dZ](eu[ez]);G(cd,eu[ez])}}}if(dF&&ev){bB[dZ]([ea,ak])}if(ev){var ey=[];for(var ex=Q;ex<bq[dY];ex++){ey[dZ](cd+cX+bq[ex])}c4(ey)}c2()};var z=function(){dw=D};var aY=function(eu){b9(eu);if(cZ(eu)===T){bl=P}else{if(cZ(eu)==ax){bl=eu}}};var aO=function(eu){return dD[dg](eu)};var cn=function(){var eu="daum:q eniro:search_word naver:query pchome:q images.google:q google:q yahoo:p yahoo:q msn:q bing:q aol:query aol:q lycos:q lycos:query ask:q netscape:query cnn:query about:terms mamma:q voila:rdata virgilio:qs live:q baidu:wd alice:qs yandex:text najdi:q seznam:q rakuten:qt biglobe:q goo.ne:MT wp:szukaj onet:qt yam:k kvasir:q ozu:q terra:query rambler:query conduit:q babylon:q search-results:q avg:q comcast:q incredimail:q startsiden:q go.mail.ru:q search.centrum.cz:q"[el](" ");var eC=dD.referrer;if(eC===undefined||eC===dO){return dO}try{var ex=eC[el]("?");if(ex[dY]<2){return dO}var eD=ex[Q];var eE=ex[P];for(var ey=Q;ey<eu[dY];ey++){var eF=eu[ey][el](":");if(eF[dY]<2){return dO}var ev=eD[dV](eF[Q]);var eB=eE[dV](eF[P]+"=");if(-1!==ev&&-1!==eB){var ew=eE[dV](dn,eB);var eA=eE[dJ](eB+2,ew-eB-2);return eA}}}catch(ez){return dO}return dO};var dy=function(eu,ev){aj[eb][eu]=setInterval("_ttq.jsCallbackCheck('"+eu+"',"+ev+")",5)};dj[eo][cN]=function(eu,ev){if(cZ(aj[bM][eu])===T){aj[bM][eu]=Q}aj[bM][eu]++;if(aj[bM][eu]>=320||cZ(aj[dh][eu])!==T){b9(eu+": "+aj[bM][eu]*5+" ms",2);clearInterval(aj[eb][eu]);if(cZ(aj[dh][eu])===T){aj[dh][eu]=D;ev()}}};var I=function(eu){return cZ(eu)===T};var ds=function(eA){if(cZ(eA)!==T&&cZ(eA[cH])!==T){var ev;switch(eA[cH]){case cm:if(cZ(eA[aR])!==T&&eA[aR]===D){var ey=dD[ar](bi);for(var eu=Q;eu<ey[dY];eu++){if(ey[eu][be]===eA[be]){b9(eA[be],2);return}}}ev=dD[c](bi);ev[cH]=cO;if(cZ(eA[x])!==T){dy(eA[x],eA[aG])}break;case h:ev=dD[c](h);break;case bL:ev=dD[c](bL);break;case cW:ev=dD[c](cW);break;default:}if(cZ(eA[aS])!==T&&!bD){ev[aS]=eA[aS]}if(cZ(eA[cC])!==T){ev[cC]=eA[cC]}if(cZ(eA[am])!==T){ev[am]=eA[am]}if(cZ(eA[X])!==T){ev[X]=eA[X]}if(cZ(eA[be])!==T){if(cZ(eA[be])===ef){ev[be]=eA[be]()}else{ev[be]=eA[be]}}if(cZ(eA[aP])!==T){ev[aP]=eA[aP]}if(cZ(eA[bJ])!==T){var ex=eA[bJ];try{ev[bN](dD[b2](ex))}catch(ez){ev[bw]=ex}}if(cZ(eA[em])!==T){ev[em]=eA[em];ev[aP][X]=bd;ev[aP][c5]=er}if(cZ(eA[bj])!==T&&eA[bj]===D){bD=D}else{bD=m}if(eA[cH]===cm&&bD){dD[bs](ev[cL])}else{if(eA[cH]!=h){if(eA[cH]!=cm&&cZ(dD[dk])!==T){eA[cR]=cE;eA[cK]=dD[dk]}if(cZ(eA[cR])===T){var ew=dD[ar](bi)[Q];ew[ep][cV](ev,ew)}else{if(eA[cR]==cE&&cZ(eA[cK])!==T){eA[cK][bN](ev)}}}}G(ev);return ev}};var by=m;var dt=function(){if(by){return}by=D;var eu={};eu[b0]=[];eu[b0][dZ]({conditional:function(){if(!dB){return m}return D},t:{action:s,type:cm,async:D,id:a1,monitor:a1,callbackScript:function(){_ttq.push(["_setTTProfile",""])},src:function(){var eA=[];if(cZ(ak)!==T){eA[dZ](aM+ak);eA[dZ](ap+a7)}else{if(cZ(cp)!==T){eA[dZ](aM+cp[cD]);eA[dZ](ap+bt)}}if(ay!==aQ){var eC=dD[dR];var eD=cu(eC);var eB=dD[q][bY];if(eC!==T&&eC[dY]>ec&&eD===eB){eA[dZ](au+eC)}}eA[dZ](at+aZ());eA[dZ](aq+ah);eA[dZ](an+aW());return de+bU+B+eA[dM](dn)}},f:{}});try{var ew=function(){return D};var ev=function(){_ttq.push(["_setCustomAudience","",""])};for(var ez=0;ez<dl[dY];ez++){var ey=dl[ez];eu[b0][dZ]({conditional:ew,t:{action:s,type:cm,async:D,id:co+ey,monitor:co+ey,callbackScript:ev,src:de+ey+dp+bG+an+aW()},f:{}})}}catch(ex){}eu[b0][dZ]({action:eh,exec:function(){cB()}});eu[b0][dZ]({action:eh,exec:function(){c4(_ttq);if(!I(cG)){a8()}}});dI(eu)};var bQ=function(){if(!d7){return}var eu=function(){if(dD[dk]){var ev=dD[dk][bN](dD[c](cW)),ew=ev[Z][bg];ev[aP][C]="visibility:hidden;position:absolute;width:0px;height:0px;left:0px;";ew[cl]()[bs]("<body onload=\"var d = document;d.getElementsByTagName('body')[0].appendChild(d.createElement('iframe')).src='"+de+cT+bP+"'\">");ew[bc]()}};if(dD[dk]){eu()}else{if(aQ[d9]){aQ[d9](a5,eu)}else{if(aQ[c1]){aQ[c1](b6,eu,m)}else{if(dD[c1]){dD[c1](b6,eu,m)}}}}};var ag=function(){d7=m};var et=function(eu){if(!I(eu)){if(!eu[dS]){eu[dS]=bE}if(!eu[ek]||!t(eu[ek])){eu[ek]=d5}cG=eu;if(!I(cx)||!I(ci)){a8()}}};var a8=function(){var eu;if(I(cx)){eu=dO}var ev;if(I(ci)){ev=dO}eu=ch(cx[el](c9)[0]);ev=dx+cX+ch(ci);var ew=[eu,ev][dM](o);W(cG[dS],ew,cG[ek]*1000,true,cG[U])};var r=function(eu){var ev=decodeURIComponent(eu)[c6](/["']/g,"");return ev};var ch=function(eu){return eu[c6](/\.\d+/g,dO)[c6](/[^a-z0-9:,\|]/ig,"")};var K=[];var dI=function(eu){if(cZ(eu)!==T&&cZ(eu[b0])!==T){K=eu[b0];cJ()}};var cJ=function(){if(cZ(K)===T||cZ(K[dY])===T||K[dY]<=Q){return}var ev=K[cw]();var eu;if(cZ(ev[V])!==T){if(ev[V]()){eu=ev[f]}else{eu=ev[n]}}else{eu=ev}if(eu[aU]===s){if(cZ(eu[x])!==T){ds(eu);if(bD){cJ()}else{ac(eu[x])}}else{cJ()}}else{if(eu[aU]===eh){eu[eh]();cJ()}else{cJ()}}};var cM;var ac=function(eu){if(cZ(eu)!==T){cM=setInterval("_ttq.checkJob('"+eu+"');",30)}};dj[eo][bm]=function(eu){d8(eu)};var d8=function(eu){if(cZ(eu)!==T){if(aj[dh][eu]){clearInterval(cM);cM=T;cJ()}}};var t=function(eu){return cZ(eu)===ax};var b5=function(){b9(bV);ba=D};var c4=function(eu,ev){b9(dQ,db,P);if(cZ(db)==ef){try{db(eu,ev)}catch(ew){try{if(dW){dW.error(ew)}}catch(ex){}}}};var du=function(eu){G(cy,eu);if(!I(eu)){db=eu}};var es=function(ex){if(I(ex)||!dA||!dE||I(dE[d1])){return}try{var ez=dE[d1](dA(ex));if(I(ez)){return}var ev=dD[ao][bJ];ev=ev[c6](/\n+/g,a);ev=ev[c6](/<!--[\s\S]*?-->/g,dO);ev=ev[c6](/(<([^>]*)>)/ig,dO);ev=ev[c6](/[\r|\n]+/g,a);ev=ev[c6](/\s+/g,a);var eu=[];for(var ew in ez[g]){if(I(ez[g][ew][el])){continue}var eF=ez[g][ew][el](dc);for(var eD=0;eD<eF[dY];eD++){var eG=eF[eD][el](ei);var eC=true;for(var eA=0;eA<eG[dY];eA++){var eH=new dr(eG[eA]);if(!eH[eh](ev,l)){eC=false;break}}if(eC){eu[dZ](ew);break}}}if(eu[dY]){var ey=eg+bu+eu[dM](cb);var eB=ds({type:h,width:Q,height:Q,src:de+ey})}}catch(eE){ttBaseE(eE)}};var bo=function(eu){cI(aN);if(cZ(eu)!==T){ak=eu;bB[dZ]([ea,ak]);dB=D;b9(ak);G(aN,ak)}c2()};var d0=function(eu){if(cZ(eu)!==T&&cZ(eu[J])!==T){ck=bt;cp=eu;bB[dZ]([k,cp])}};var br=function(eu){b9(eu);aj[dh][eu]=D};var cc=function(eu){if(cZ(eu)!==T&&bp==dC){bp=eu;if(bp==cA){ej=cr+ej+da;bC=cr+bC+da;bU=cr+bU+da;aV=cr+aV+da;cT=cr+cT+da;eg=cr+eg+da}b9(bp)}};var R=function(eu){cI(c0);br(bz);if(cZ(eu)!==T){eu=r(eu);G(bA,eu);W(b4,eu,bn,m);b9(eu);cS(eu)}c2()};var bf=m;var S=function(){ds({syncronized:D,type:cm,async:m,id:ca,src:de+bF+aa})};var dv=function(eu){cI(af);br(a1);if(cZ(eu)!==T){bf=D;eu=r(eu);G(bI,eu);di=eu;dT(eu)}c2()};var eq=function(eu){cI(dP);if(cZ(dP)!==T){eu=r(eu);G(dP,eu);dl=eu[el](cb)}c2()};var cP=function(eu){cI(j);if(cZ(eu)!==T){G(co,eu);var ew=r(eu[cw]());br(co+ew);dL[ew]=r(eu[cw]());var ev=dL[ew][el](c9);if(ev[dY]>Q){c4(ev[Q][el](cb))}}c2()};var L=function(){bR([ea,ak])};var cB=function(){var ev=bB;bB={push:bR};for(var eu=Q;eu<ev[dY];eu++){bR(ev[eu])}if(ak){for(var ew in dL){if(ak!=ew){bx(ew)}}}};var bR=function(ez){cI(a0);var eu=ez[cw]();var ex,eB,ey;var ew;switch(eu){case ea:ex=ez[cw]();eB=a7;ey=c8(ex,eB);G(cH,bv);G(cD,ex);ew=bC+i+bh+ey;dF=D;break;case k:var eA=ez[cw]();ex=eA[cD];eB=bt;ey=c8(ex,eB,eA);G(cH,J);G(cD,eA[cD]);G(J,eA[J]);ew=aV+dc+bH+dc+eA[cD]+dc+eA[J]+dc+H+bh+ey;break}var ev=ds({type:h,width:Q,height:Q,src:de+ew});c2()};var bx=function(ex){cI(a0);if(!ex){return}var ew=ab(ex);var ev=bC+i+bh+ew;var eu=ds({type:h,width:Q,height:Q,src:de+ev});c2()};var b9=function(eu,ev){if(bl>Q&&dW){if(cZ(ev)===T){ev=P}if(ev>=bl){dW.log(eu)}}};var d4=function(ev){try{var ew,eu,ez,ex=dD[w][el](ct);for(ew=Q;ew<ex[dY];ew++){eu=ex[ew][dJ](Q,ex[ew][dV](ai));ez=ex[ew][dJ](ex[ew][dV](ai)+P);eu=eu[c6](/^\s+|\s+$/g,dO);if(eu==ev){return unescape(ez)}}}catch(ey){}};var aZ=function(){var eu=dX[df]();if(eu<6){return 1}if(eu<12){return 2}if(eu<18){return 3}return 4};function aT(ev){var eu=new dr("[#&]"+ev+"=([^&]*)")[eh](aQ[q][cQ]);return eu&&decodeURIComponent(eu[P][c6](/\+/g," "))}var cu=function(ev){if(typeof(ev)!==T&&ev!==dO){var eu=dD[c](p);eu[ed]=ev;return eu[bY]}else{return dO}};var aW=function(){return bk[aX](bk[a3]()*1000000000)};var cz=function(ey,ew){if(Array.prototype[dV]){return ey[dV](ew)}else{if(ey==dd){throw new TypeError()}var ex=Object(ey);var eu=ex[dY]>>>0;if(eu===Q){return -1}var ez=Q;if(arguments[dY]>Q){ez=Number(arguments[P]);if(ez!=ez){ez=Q}else{if(ez!=Q&&ez!=Infinity&&ez!=-Infinity){ez=(ez>Q||-1)*bk[aX](bk[bZ](ez))}}}if(ez>=eu){return -1}var ev=ez>=Q?ez:bk[bX](eu-bk[bZ](ez),Q);for(;ev<eu;ev++){if(ev in ex&&ex[ev]===ew){return ev}}return -1}};var dm=function(eu,ev){if(cZ(ev)===T||ev==dO){return Q}return bk[a4]((eu-ev)/1000)};var cU=function(){var ew=[];for(var ev=Q;ev<32;ev++){ew[ev]=bk[aX](bk[a3]()*16)}ew[12]=4;ew[16]=(ew[16]&3)|8;for(var eu=Q;eu<32;eu++){ew[eu]=b7[ew[eu]]}return ew[dM](dO)};var cZ=function(eu){return typeof(eu)};var c8=function(eB,ev,ew){var eu=[];eu[dZ](aM+eB);eu[dZ](aH+cf);if(cZ(ci)!==T){eu[dZ](aF+ci)}var eC=cn();if(cZ(eC)!==T&&eC!==dO){eu[dZ](aE+eC)}if(ev==bt){eu[dZ](aC+ew[J])}if(cZ(di)!==T){eu[dZ](aB+di)}for(var eA in dL){if(eB==eA){var eD=dL[eA];var ex=eD[el](c9);if(ex[dY]>Q){eu[dZ](aA+ex[Q]);break}}}if(dF){eu[dZ](aw+P)}if(cZ(bq)!==T&&bq[dY]>0){var ez=[];for(var ey=0;ey<bq[dY];ey++){if(cz(b8,bq[ey])<0){ez[dZ](bq[ey]);b8[dZ](bq[ey])}}if(ez[dY]>0){eu[dZ](av+ez[dM](cb))}}eu[dZ](aq+ah);eu[dZ](ap+ev);eu[dZ](an+aW());return eu[dM](dn)};var ab=function(ey){var eu=[];eu[dZ](aM+ey);eu[dZ](aH+cf);if(cZ(ci)!==T){eu[dZ](aF+ci)}var ew=cn();if(cZ(ew)!==T&&ew!==dO){eu[dZ](aE+ew)}if(cZ(di)!==T){eu[dZ](aB+di)}var ev=dL[ey];var ex=ev[el](c9);if(ex[dY]>Q){eu[dZ](aA+ex[Q])}eu[dZ](aq+ah);eu[dZ](ap+a7);eu[dZ](an+aW());return eu[dM](dn)};var W=function(eB,ex,eD,ey,eA){try{if(cZ(ey)!==T&&!ey){if(cZ(d4(eB))!==T){return}}cI(w);G(eB,ex);var ev,ew;ev=new Date();ev[F](ev[bO]()+(eD));var ez=[];ez[dZ](eB+ai+ex);ez[dZ](d2+ai+ev[y]());ez[dZ](d6+ai+dc);if(!I(eA)){ez[dZ](U+ai+eA)}var eu=ez[dM](ct+a);dD[w]=eu;b9(eB+ai+ex+ew);c2()}catch(eC){}};function ce(){if(typeof(ttdebug)!="undefined"&&ttdebug===D){return true}return false}function G(eu,ev){if(ce()&&dW){if(typeof(ev)!="undefined"){dW.log(eu+": "+ev)}else{dW.log(eu)}}}function a6(eu,ev){if(ce()&&dW){dW.error(eu+": "+ev)}}function cI(eu){if(ce()&&dW){dW.group("base: "+eu)}}function c2(){if(ce()&&dW){dW.groupEnd()}}dj[eo][c3]=function(eu){return typeof(eu)};return dj})()}catch(e){ttBaseE(e)}function ttBaseE(c){try{var b=document.createElement("img");var d;d=c.toString();if(typeof(c)!="undefined"&&typeof(c.stack)!="undefined"){d=d+" "+c.stack.toString()}b.src="//e.tailtarget.com/e?s=b&v="+version+"&e="+encodeURIComponent(d);if(typeof(console)!="undefined"){console.error(c)}}catch(a){if(typeof(console)!="undefined"){console.error(c)}}}try{if(typeof(_ttq.v)=="undefined"){var _ttqHolder=_ttq||[];_ttq=new TTBase(_ttqHolder)}}catch(e){ttBaseE(e)};