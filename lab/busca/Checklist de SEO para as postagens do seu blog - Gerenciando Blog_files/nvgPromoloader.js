function showPromoNvg(desc,title,btnTxt,url,position,color,icon,id,acc,nvgc){
  if(!url)url ='javascript:void(0)';
  if(title) title = '<h3>'+title+'</h3>';
  if(btnTxt) btnTxt = '<button id="nvg_action">'+btnTxt+'</button>';

  //css
  var c = document.getElementById('nvg_prm_css');
  if(!c){
    var c=document.createElement('link');
    c.href="//tag.navdmp.com/nvgPromo.css";
    c.type="text/css";
    c.id = "nvg_prm_css";
    c.rel="stylesheet";
    c.media="screen";
    var p = document.getElementsByTagName('head')[0];
    p.appendChild(c);
  }

  //div
  var w = document.getElementById('nvg_prm');
  if(!w){
    var w=document.createElement('div');
    w.id="nvg_prm";
  }

  //was displayed
  if(typeof(window.localStorage)=="object")
    if( !window.localStorage.getItem('nvgBnr'+id) ){
      var sts = ' open';
      window.localStorage.setItem('nvgBnr'+id,'1');
    }
    else  var sts ='';
  w.className = position+' '+color+sts;
  w.innerHTML = '<a target="_blank" href="'+url+'" class="'+icon+'"><i class="animated bounce"></i>'+title+'<span>'+desc+'</span>'+btnTxt+'<button id="nvg_trg" onClick="nvg_bta=document.getElementById(\'nvg_prm\');nvg_bta.className.indexOf(\'open\')>-1?nvg_bta.classList.remove(\'open\'):nvg_bta.classList.add(\'open\');return false;">fechar</button></a>';
  
var lt = window.setInterval(function(){
    try{
        var jps = document.getElementsByTagName('body');
        jps = jps[0];
        jps.insertBefore(w,null);
        if(acc && nvgc)
            window['nvg'+acc].include("http://view.navdmp.com/view/?img=1&acc="+acc+"&nvc="+nvgc+"","img");
	window.clearInterval(lt);
    }catch(e){}
},500);


}

function nvgValidePromo(nvgValUsr,nvgBnr,nvgSegName){
  var nvgReturn = Array();
  var nvgMayBeReturn = Array();
  nvgValUsr = '-'+nvgValUsr+'-'; 
  var nvgNod = 0;
  for(nvgNod =0;nvgNod < nvgBnr.length;nvgNod++){
    if(!nvgBnr[ nvgNod ][nvgSegName]){
        nvgMayBeReturn.push( nvgBnr[ nvgNod ] ); 
      continue;
    }
    var nvgBnrVal = nvgBnr[ nvgNod ][nvgSegName].split('-');
    var nvgBnrValNod = 0;
    for( nvgBnrValNod =0;nvgBnrValNod< nvgBnrVal.length;nvgBnrValNod++){
      if( nvgValUsr.search( nvgBnrVal[ nvgBnrValNod ] )>=0 ){
        nvgReturn.push( nvgBnr[ nvgNod ] ); 
        break;
      }
    }
  }
  return nvgReturn.length?nvgReturn:nvgMayBeReturn; 
}

var nvgToNvgPromo = nvgValidePromo(nvgGetSegment('cluster'),  nvgAddOns['nvgPromo'], 'cluster' );
var nvgToNvgPromo = nvgValidePromo(nvgGetSegment('custom'),  nvgToNvgPromo, 'custom' );
var nvgToNvgPromo = nvgValidePromo(nvgGetSegment('product'),  nvgToNvgPromo, 'product' );
if(nvgToNvgPromo.length){
  var nvgPromoValue = nvgToNvgPromo[ Math.floor(Math.random() * nvgToNvgPromo.length) ];
  showPromoNvg(nvgPromoValue['desc'], nvgPromoValue['title'], nvgPromoValue['btnTxt'], nvgPromoValue['url'], nvgPromoValue['position'], nvgPromoValue['color'], nvgPromoValue['icon'], nvgPromoValue['id'], nvgPromoValue['acc'], nvgPromoValue['nvgc']);
}
