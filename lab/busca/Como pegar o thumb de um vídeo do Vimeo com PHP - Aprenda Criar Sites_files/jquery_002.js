!function(a){a.loadScript=function(b,c,d){var e=!1,f=null;a.isFunction(c)?(f=c,e=d||e):(e=c||e,f=d||f);var g=!0;a('script[type="text/javascript"]').each(function(){return g=b!=a(this).attr("src")}),g?a.ajax({type:"GET",url:b,success:f,dataType:"script",cache:e}):a.isFunction(f)&&f.call(this)}}(opjq);