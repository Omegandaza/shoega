if("undefined"==typeof Shopify)var Shopify={};Shopify.bind=function(t,e){return function(){return t.apply(e,arguments)}},Shopify.setSelectorByValue=function(t,e){for(var n=0,r=t.options.length;r>n;n++){var i=t.options[n];if(e==i.value||e==i.innerHTML)return t.selectedIndex=n,n}},Shopify.addListener=function(t,e,n){t.addEventListener?t.addEventListener(e,n,!1):t.attachEvent("on"+e,n)},Shopify.postLink=function(t,e){e=e||{};var n=e.method||"post",r=e.parameters||{},i=document.createElement("form");i.setAttribute("method",n),i.setAttribute("action",t);for(var o in r){var a=document.createElement("input");a.setAttribute("type","hidden"),a.setAttribute("name",o),a.setAttribute("value",r[o]),i.appendChild(a)}document.body.appendChild(i),i.submit(),document.body.removeChild(i)},Shopify.CountryProvinceSelector=function(t,e,n){this.countryEl=document.getElementById(t),this.provinceEl=document.getElementById(e),this.provinceContainer=document.getElementById(n.hideElement||e),Shopify.addListener(this.countryEl,"change",Shopify.bind(this.countryHandler,this)),this.initCountry(),this.initProvince()},Shopify.CountryProvinceSelector.prototype={initCountry:function(){var t=this.countryEl.getAttribute("data-default");Shopify.setSelectorByValue(this.countryEl,t),this.countryHandler()},initProvince:function(){var t=this.provinceEl.getAttribute("data-default");t&&this.provinceEl.options.length>0&&Shopify.setSelectorByValue(this.provinceEl,t)},countryHandler:function(t){var e=this.countryEl.options[this.countryEl.selectedIndex],n=e.getAttribute("data-provinces"),r=JSON.parse(n);if(this.clearOptions(this.provinceEl),r&&0==r.length)this.provinceContainer.style.display="none";else{for(var i=0;i<r.length;i++){var e=document.createElement("option");e.value=r[i][0],e.innerHTML=r[i][1],this.provinceEl.appendChild(e)}this.provinceContainer.style.display=""}},clearOptions:function(t){for(;t.firstChild;)t.removeChild(t.firstChild)},setOptions:function(t,e){var n=0;for(e.length;n<e.length;n++){var r=document.createElement("option");r.value=e[n],r.innerHTML=e[n],t.appendChild(r)}}};