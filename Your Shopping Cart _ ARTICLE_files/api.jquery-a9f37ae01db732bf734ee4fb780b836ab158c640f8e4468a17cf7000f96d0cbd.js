// (c) Copyright 2009 Jaded Pixel. Author: Caroline Schnapp. All Rights Reserved.
function floatToString(t,e){var n=t.toFixed(e).toString();return n.match(/^\.\d+/)?"0"+n:n}function attributeToString(t){return"string"!=typeof t&&(t+="","undefined"===t&&(t="")),jQuery.trim(t)}"undefined"==typeof Shopify&&(Shopify={}),Shopify.money_format="${{amount}}",Shopify.onError=function(XMLHttpRequest,textStatus){var data=eval("("+XMLHttpRequest.responseText+")");data.message?alert(data.message+"("+data.status+"): "+data.description):alert("Error : "+Shopify.fullMessagesFromErrors(data).join("; ")+".")},Shopify.fullMessagesFromErrors=function(t){var e=[];return jQuery.each(t,function(t,n){jQuery.each(n,function(n,r){e.push(t+" "+r)})}),e},Shopify.onCartUpdate=function(t){alert("There are now "+t.item_count+" items in the cart.")},Shopify.onCartShippingRatesUpdate=function(t,e){var n="";e.zip&&(n+=e.zip+", "),e.province&&(n+=e.province+", "),n+=e.country,alert("There are "+t.length+" shipping rates available for "+n+", starting at "+Shopify.formatMoney(t[0].price)+".")},Shopify.onItemAdded=function(t){alert(t.title+" was added to your shopping cart.")},Shopify.onProduct=function(t){alert("Received everything we ever wanted to know about "+t.title)},Shopify.formatMoney=function(t,e){function n(t,e){return"undefined"==typeof t?e:t}function r(t,e,r,i){if(e=n(e,2),r=n(r,","),i=n(i,"."),isNaN(t)||null==t)return 0;t=(t/100).toFixed(e);var o=t.split("."),a=o[0].replace(/(\d)(?=(\d\d\d)+(?!\d))/g,"$1"+r),s=o[1]?i+o[1]:"";return a+s}"string"==typeof t&&(t=t.replace(".",""));var i="",o=/\{\{\s*(\w+)\s*\}\}/,a=e||this.money_format;switch(a.match(o)[1]){case"amount":i=r(t,2);break;case"amount_no_decimals":i=r(t,0);break;case"amount_with_comma_separator":i=r(t,2,".",",");break;case"amount_no_decimals_with_comma_separator":i=r(t,0,".",",")}return a.replace(o,i)},Shopify.resizeImage=function(t,e){try{if("original"==e)return t;var n=t.match(/(.*\/[\w\-\_\.]+)\.(\w{2,4})/);return n[1]+"_"+e+"."+n[2]}catch(r){return t}},Shopify.addItem=function(t,e,n){var e=e||1,r={type:"POST",url:"/cart/add.js",data:"quantity="+e+"&id="+t,dataType:"json",success:function(t){"function"==typeof n?n(t):Shopify.onItemAdded(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(r)},Shopify.addItemFromForm=function(t,e){var n={type:"POST",url:"/cart/add.js",data:jQuery("#"+t).serialize(),dataType:"json",success:function(t){"function"==typeof e?e(t):Shopify.onItemAdded(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(n)},Shopify.getCart=function(t){jQuery.getJSON("/cart.js",function(e,n){"function"==typeof t?t(e):Shopify.onCartUpdate(e)})},Shopify.pollForCartShippingRatesForDestination=function(t,e,n){n=n||Shopify.onError;var r=function(){jQuery.ajax("/cart/async_shipping_rates",{dataType:"json",success:function(n,i,o){200===o.status?"function"==typeof e?e(n.shipping_rates,t):Shopify.onCartShippingRatesUpdate(n.shipping_rates,t):setTimeout(r,500)},error:n})};return r},Shopify.getCartShippingRatesForDestination=function(t,e,n){n=n||Shopify.onError;var r={type:"POST",url:"/cart/prepare_shipping_rates",data:Shopify.param({shipping_address:t}),success:Shopify.pollForCartShippingRatesForDestination(t,e,n),error:n};jQuery.ajax(r)},Shopify.getProduct=function(t,e){jQuery.getJSON("/products/"+t+".js",function(t,n){"function"==typeof e?e(t):Shopify.onProduct(t)})},Shopify.changeItem=function(t,e,n){var r={type:"POST",url:"/cart/change.js",data:"quantity="+e+"&id="+t,dataType:"json",success:function(t){"function"==typeof n?n(t):Shopify.onCartUpdate(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(r)},Shopify.removeItem=function(t,e){var n={type:"POST",url:"/cart/change.js",data:"quantity=0&id="+t,dataType:"json",success:function(t){"function"==typeof e?e(t):Shopify.onCartUpdate(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(n)},Shopify.clear=function(t){var e={type:"POST",url:"/cart/clear.js",data:"",dataType:"json",success:function(e){"function"==typeof t?t(e):Shopify.onCartUpdate(e)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(e)},Shopify.updateCartFromForm=function(t,e){var n={type:"POST",url:"/cart/update.js",data:jQuery("#"+t).serialize(),dataType:"json",success:function(t){"function"==typeof e?e(t):Shopify.onCartUpdate(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(n)},Shopify.updateCartAttributes=function(t,e){var n="";jQuery.isArray(t)?jQuery.each(t,function(t,e){var r=attributeToString(e.key);""!==r&&(n+="attributes["+r+"]="+attributeToString(e.value)+"&")}):"object"==typeof t&&null!==t&&jQuery.each(t,function(t,e){n+="attributes["+attributeToString(t)+"]="+attributeToString(e)+"&"});var r={type:"POST",url:"/cart/update.js",data:n,dataType:"json",success:function(t){"function"==typeof e?e(t):Shopify.onCartUpdate(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(r)},Shopify.updateCartNote=function(t,e){var n={type:"POST",url:"/cart/update.js",data:"note="+attributeToString(t),dataType:"json",success:function(t){"function"==typeof e?e(t):Shopify.onCartUpdate(t)},error:function(t,e){Shopify.onError(t,e)}};jQuery.ajax(n)},jQuery.fn.jquery>="1.4"?Shopify.param=jQuery.param:(Shopify.param=function(t){var e=[],n=function(t,n){n=jQuery.isFunction(n)?n():n,e[e.length]=encodeURIComponent(t)+"="+encodeURIComponent(n)};if(jQuery.isArray(t)||t.jquery)jQuery.each(t,function(){n(this.name,this.value)});else for(var r in t)Shopify.buildParams(r,t[r],n);return e.join("&").replace(/%20/g,"+")},Shopify.buildParams=function(t,e,n){jQuery.isArray(e)&&e.length?jQuery.each(e,function(e,r){rbracket.test(t)?n(t,r):Shopify.buildParams(t+"["+("object"==typeof r||jQuery.isArray(r)?e:"")+"]",r,n)}):null!=e&&"object"==typeof e?Shopify.isEmptyObject(e)?n(t,""):jQuery.each(e,function(e,r){Shopify.buildParams(t+"["+e+"]",r,n)}):n(t,e)},Shopify.isEmptyObject=function(t){for(var e in t)return!1;return!0});