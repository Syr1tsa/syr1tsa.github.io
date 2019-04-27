;window.Modernizr=function(a,b,c){function D(a){j.cssText=a}function E(a,b){return D(n.join(a+";")+(b||""))}function F(a,b){return typeof a===b}function G(a,b){return!!~(""+a).indexOf(b)}function H(a,b){for(var d in a){var e=a[d];if(!G(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function I(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:F(f,"function")?f.bind(d||b):f}return!1}function J(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+p.join(d+" ")+d).split(" ");return F(b,"string")||F(b,"undefined")?H(e,b):(e=(a+" "+q.join(d+" ")+d).split(" "),I(e,b,c))}function K(){e.input=function(c){for(var d=0,e=c.length;d<e;d++)u[c[d]]=c[d]in k;return u.list&&(u.list=!!b.createElement("datalist")&&!!a.HTMLDataListElement),u}("autocomplete autofocus list placeholder max min multiple pattern required step".split(" ")),e.inputtypes=function(a){for(var d=0,e,f,h,i=a.length;d<i;d++)k.setAttribute("type",f=a[d]),e=k.type!=="text",e&&(k.value=l,k.style.cssText="position:absolute;visibility:hidden;",/^range$/.test(f)&&k.style.WebkitAppearance!==c?(g.appendChild(k),h=b.defaultView,e=h.getComputedStyle&&h.getComputedStyle(k,null).WebkitAppearance!=="textfield"&&k.offsetHeight!==0,g.removeChild(k)):/^(search|tel)$/.test(f)||(/^(url|email)$/.test(f)?e=k.checkValidity&&k.checkValidity()===!1:e=k.value!=l)),t[a[d]]=!!e;return t}("search tel url email datetime date month week time datetime-local number range color".split(" "))}var d="2.8.3",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k=b.createElement("input"),l=":)",m={}.toString,n=" -webkit- -moz- -o- -ms- ".split(" "),o="Webkit Moz O ms",p=o.split(" "),q=o.toLowerCase().split(" "),r={svg:"http://www.w3.org/2000/svg"},s={},t={},u={},v=[],w=v.slice,x,y=function(a,c,d,e){var f,i,j,k,l=b.createElement("div"),m=b.body,n=m||b.createElement("body");if(parseInt(d,10))while(d--)j=b.createElement("div"),j.id=e?e[d]:h+(d+1),l.appendChild(j);return f=["&#173;",'<style id="s',h,'">',a,"</style>"].join(""),l.id=h,(m?l:n).innerHTML+=f,n.appendChild(l),m||(n.style.background="",n.style.overflow="hidden",k=g.style.overflow,g.style.overflow="hidden",g.appendChild(n)),i=c(l,a),m?l.parentNode.removeChild(l):(n.parentNode.removeChild(n),g.style.overflow=k),!!i},z=function(b){var c=a.matchMedia||a.msMatchMedia;if(c)return c(b)&&c(b).matches||!1;var d;return y("@media "+b+" { #"+h+" { position: absolute; } }",function(b){d=(a.getComputedStyle?getComputedStyle(b,null):b.currentStyle)["position"]=="absolute"}),d},A=function(){function d(d,e){e=e||b.createElement(a[d]||"div"),d="on"+d;var f=d in e;return f||(e.setAttribute||(e=b.createElement("div")),e.setAttribute&&e.removeAttribute&&(e.setAttribute(d,""),f=F(e[d],"function"),F(e[d],"undefined")||(e[d]=c),e.removeAttribute(d))),e=null,f}var a={select:"input",change:"input",submit:"form",reset:"form",error:"img",load:"img",abort:"img"};return d}(),B={}.hasOwnProperty,C;!F(B,"undefined")&&!F(B.call,"undefined")?C=function(a,b){return B.call(a,b)}:C=function(a,b){return b in a&&F(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=w.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(w.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(w.call(arguments)))};return e}),s.flexbox=function(){return J("flexWrap")},s.canvas=function(){var a=b.createElement("canvas");return!!a.getContext&&!!a.getContext("2d")},s.canvastext=function(){return!!e.canvas&&!!F(b.createElement("canvas").getContext("2d").fillText,"function")},s.webgl=function(){return!!a.WebGLRenderingContext},s.touch=function(){var c;return"ontouchstart"in a||a.DocumentTouch&&b instanceof DocumentTouch?c=!0:y(["@media (",n.join("touch-enabled),("),h,")","{#modernizr{top:9px;position:absolute}}"].join(""),function(a){c=a.offsetTop===9}),c},s.geolocation=function(){return"geolocation"in navigator},s.postmessage=function(){return!!a.postMessage},s.websqldatabase=function(){return!!a.openDatabase},s.indexedDB=function(){return!!J("indexedDB",a)},s.hashchange=function(){return A("hashchange",a)&&(b.documentMode===c||b.documentMode>7)},s.history=function(){return!!a.history&&!!history.pushState},s.draganddrop=function(){var a=b.createElement("div");return"draggable"in a||"ondragstart"in a&&"ondrop"in a},s.websockets=function(){return"WebSocket"in a||"MozWebSocket"in a},s.rgba=function(){return D("background-color:rgba(150,255,150,.5)"),G(j.backgroundColor,"rgba")},s.hsla=function(){return D("background-color:hsla(120,40%,100%,.5)"),G(j.backgroundColor,"rgba")||G(j.backgroundColor,"hsla")},s.multiplebgs=function(){return D("background:url(https://),url(https://),red url(https://)"),/(url\s*\(.*?){3}/.test(j.background)},s.backgroundsize=function(){return J("backgroundSize")},s.borderimage=function(){return J("borderImage")},s.borderradius=function(){return J("borderRadius")},s.boxshadow=function(){return J("boxShadow")},s.textshadow=function(){return b.createElement("div").style.textShadow===""},s.opacity=function(){return E("opacity:.55"),/^0.55$/.test(j.opacity)},s.cssanimations=function(){return J("animationName")},s.csscolumns=function(){return J("columnCount")},s.cssgradients=function(){var a="background-image:",b="gradient(linear,left top,right bottom,from(#9f9),to(white));",c="linear-gradient(left top,#9f9, white);";return D((a+"-webkit- ".split(" ").join(b+a)+n.join(c+a)).slice(0,-a.length)),G(j.backgroundImage,"gradient")},s.cssreflections=function(){return J("boxReflect")},s.csstransforms=function(){return!!J("transform")},s.csstransforms3d=function(){var a=!!J("perspective");return a&&"webkitPerspective"in g.style&&y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}",function(b,c){a=b.offsetLeft===9&&b.offsetHeight===3}),a},s.csstransitions=function(){return J("transition")},s.fontface=function(){var a;return y('@font-face {font-family:"font";src:url("https://")}',function(c,d){var e=b.getElementById("smodernizr"),f=e.sheet||e.styleSheet,g=f?f.cssRules&&f.cssRules[0]?f.cssRules[0].cssText:f.cssText||"":"";a=/src/i.test(g)&&g.indexOf(d.split(" ")[0])===0}),a},s.generatedcontent=function(){var a;return y(["#",h,"{font:0/0 a}#",h,':after{content:"',l,'";visibility:hidden;font:3px/1 a}'].join(""),function(b){a=b.offsetHeight>=3}),a},s.video=function(){var a=b.createElement("video"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),c.h264=a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),c.webm=a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,"")}catch(d){}return c},s.audio=function(){var a=b.createElement("audio"),c=!1;try{if(c=!!a.canPlayType)c=new Boolean(c),c.ogg=a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/,""),c.mp3=a.canPlayType("audio/mpeg;").replace(/^no$/,""),c.wav=a.canPlayType('audio/wav; codecs="1"').replace(/^no$/,""),c.m4a=(a.canPlayType("audio/x-m4a;")||a.canPlayType("audio/aac;")).replace(/^no$/,"")}catch(d){}return c},s.localstorage=function(){try{return localStorage.setItem(h,h),localStorage.removeItem(h),!0}catch(a){return!1}},s.sessionstorage=function(){try{return sessionStorage.setItem(h,h),sessionStorage.removeItem(h),!0}catch(a){return!1}},s.webworkers=function(){return!!a.Worker},s.applicationcache=function(){return!!a.applicationCache},s.svg=function(){return!!b.createElementNS&&!!b.createElementNS(r.svg,"svg").createSVGRect},s.inlinesvg=function(){var a=b.createElement("div");return a.innerHTML="<svg/>",(a.firstChild&&a.firstChild.namespaceURI)==r.svg},s.smil=function(){return!!b.createElementNS&&/SVGAnimate/.test(m.call(b.createElementNS(r.svg,"animate")))},s.svgclippaths=function(){return!!b.createElementNS&&/SVGClipPath/.test(m.call(b.createElementNS(r.svg,"clipPath")))};for(var L in s)C(s,L)&&(x=L.toLowerCase(),e[x]=s[L](),v.push((e[x]?"":"no-")+x));return e.input||K(),e.addTest=function(a,b){if(typeof a=="object")for(var d in a)C(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},D(""),i=k=null,function(a,b){function l(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function m(){var a=s.elements;return typeof a=="string"?a.split(" "):a}function n(a){var b=j[a[h]];return b||(b={},i++,a[h]=i,j[i]=b),b}function o(a,c,d){c||(c=b);if(k)return c.createElement(a);d||(d=n(c));var g;return d.cache[a]?g=d.cache[a].cloneNode():f.test(a)?g=(d.cache[a]=d.createElem(a)).cloneNode():g=d.createElem(a),g.canHaveChildren&&!e.test(a)&&!g.tagUrn?d.frag.appendChild(g):g}function p(a,c){a||(a=b);if(k)return a.createDocumentFragment();c=c||n(a);var d=c.frag.cloneNode(),e=0,f=m(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function q(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return s.shivMethods?o(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+m().join().replace(/[\w\-]+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(s,b.frag)}function r(a){a||(a=b);var c=n(a);return s.shivCSS&&!g&&!c.hasCSS&&(c.hasCSS=!!l(a,"article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")),k||q(a,c),a}var c="3.7.0",d=a.html5||{},e=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,f=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,g,h="_html5shiv",i=0,j={},k;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",g="hidden"in a,k=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){g=!0,k=!0}})();var s={elements:d.elements||"abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",version:c,shivCSS:d.shivCSS!==!1,supportsUnknownElements:k,shivMethods:d.shivMethods!==!1,type:"default",shivDocument:r,createElement:o,createDocumentFragment:p};a.html5=s,r(b)}(this,b),e._version=d,e._prefixes=n,e._domPrefixes=q,e._cssomPrefixes=p,e.mq=z,e.hasEvent=A,e.testProp=function(a){return H([a])},e.testAllProps=J,e.testStyles=y,e.prefixed=function(a,b,c){return b?J(a,b,c):J(a,"pfx")},g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+v.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
!function(a,b){"use strict";function c(){if(!e){e=!0;var a,c,d,f,g=-1!==navigator.appVersion.indexOf("MSIE 10"),h=!!navigator.userAgent.match(/Trident.*rv:11\./),i=b.querySelectorAll("iframe.wp-embedded-content");for(c=0;c<i.length;c++)if(d=i[c],!d.getAttribute("data-secret")){if(f=Math.random().toString(36).substr(2,10),d.src+="#?secret="+f,d.setAttribute("data-secret",f),g||h)a=d.cloneNode(!0),a.removeAttribute("security"),d.parentNode.replaceChild(a,d)}else;}}var d=!1,e=!1;if(b.querySelector)if(a.addEventListener)d=!0;if(a.wp=a.wp||{},!a.wp.receiveEmbedMessage)if(a.wp.receiveEmbedMessage=function(c){var d=c.data;if(d.secret||d.message||d.value)if(!/[^a-zA-Z0-9]/.test(d.secret)){var e,f,g,h,i,j=b.querySelectorAll('iframe[data-secret="'+d.secret+'"]'),k=b.querySelectorAll('blockquote[data-secret="'+d.secret+'"]');for(e=0;e<k.length;e++)k[e].style.display="none";for(e=0;e<j.length;e++)if(f=j[e],c.source===f.contentWindow){if(f.removeAttribute("style"),"height"===d.message){if(g=parseInt(d.value,10),g>1e3)g=1e3;else if(200>~~g)g=200;f.height=g}if("link"===d.message)if(h=b.createElement("a"),i=b.createElement("a"),h.href=f.getAttribute("src"),i.href=d.value,i.host===h.host)if(b.activeElement===f)a.top.location.href=d.value}else;}},d)a.addEventListener("message",a.wp.receiveEmbedMessage,!1),b.addEventListener("DOMContentLoaded",c,!1),a.addEventListener("load",c,!1)}(window,document);
/*! Blast.js (2.0.0): julian.com/research/blast (C) 2015 Julian Shapiro. MIT @license: en.wikipedia.org/wiki/MIT_License */
!function($,e,t,a){var r=function(){if(t.documentMode)return t.documentMode;for(var e=7;e>0;e--){var r=t.createElement("div");if(r.innerHTML="<!--[if IE "+e+"]><span></span><![endif]-->",r.getElementsByTagName("span").length)return r=null,e;r=null}
return a}(),n=e.console||{log:function(){},time:function(){}},i="blast",s={latinPunctuation:"–—′’'“″„\"(«.…¡¿′’'”″“\")».…!?",latinLetters:"\\u0041-\\u005A\\u0061-\\u007A\\u00C0-\\u017F\\u0100-\\u01FF\\u0180-\\u027F"},l={abbreviations:new RegExp("[^"+s.latinLetters+"](e\\.g\\.)|(i\\.e\\.)|(mr\\.)|(mrs\\.)|(ms\\.)|(dr\\.)|(prof\\.)|(esq\\.)|(sr\\.)|(jr\\.)[^"+s.latinLetters+"]","ig"),innerWordPeriod:new RegExp("["+s.latinLetters+"].["+s.latinLetters+"]","ig"),onlyContainsPunctuation:new RegExp("[^"+s.latinPunctuation+"]"),adjoinedPunctuation:new RegExp("^["+s.latinPunctuation+"]+|["+s.latinPunctuation+"]+$","g"),skippedElements:/(script|style|select|textarea)/i,hasPluginClass:new RegExp("(^| )"+i+"( |$)","gi")};$.fn[i]=function(d){function o(e){return e.replace(l.abbreviations,function(e){return e.replace(/\./g,"{{46}}")}).replace(l.innerWordPeriod,function(e){return e.replace(/\./g,"{{46}}")})}
function c(e){return e.replace(/{{(\d{1,3})}}/g,function(e,t){return String.fromCharCode(t)})}
function u(e,a){var r=t.createElement(a.tag);if(r.className=i,a.customClass&&(r.className+=" "+a.customClass,a.generateIndexID&&(r.id=a.customClass+"-"+f.blastedIndex)),"all"===a.delimiter&&/\s/.test(e.data)&&(r.style.whiteSpace="pre-line"),a.generateValueClass===!0&&!a.search&&("character"===a.delimiter||"word"===a.delimiter)){var n,s=e.data;"word"===a.delimiter&&l.onlyContainsPunctuation.test(s)&&(s=s.replace(l.adjoinedPunctuation,"")),n=i+"-"+a.delimiter.toLowerCase()+"-"+s.toLowerCase(),r.className+=" "+n}
return a.aria&&r.setAttribute("aria-hidden","true"),r.appendChild(e.cloneNode(!1)),r}
function g(e,t){var a=-1,r=0;if(3===e.nodeType&&e.data.length){if(f.nodeBeginning&&(e.data=t.search||"sentence"!==t.delimiter?c(e.data):o(e.data),f.nodeBeginning=!1),a=e.data.search(h),-1!==a){var n=e.data.match(h),i=n[0],s=n[1]||!1;""===i?a++:s&&s!==i&&(a+=i.indexOf(s),i=s);var d=e.splitText(a);d.splitText(i.length),r=1,t.search||"sentence"!==t.delimiter||(d.data=c(d.data));var p=u(d,t,f.blastedIndex);d.parentNode.replaceChild(p,d),f.wrappers.push(p),f.blastedIndex++}}else if(1===e.nodeType&&e.hasChildNodes()&&!l.skippedElements.test(e.tagName)&&!l.hasPluginClass.test(e.className))for(var m=0;m<e.childNodes.length;m++)f.nodeBeginning=!0,m+=g(e.childNodes[m],t);return r}
function p(t,s){s.debug&&n.time("blast reversal");var l=!1;t.removeClass(i+"-root").removeAttr("aria-label").find("."+i).each(function(){var e=$(this);if(e.closest("."+i+"-root").length)l=!0;else{var t=this.parentNode;7>=r&&t.firstChild.nodeName,t.replaceChild(this.firstChild,this),t.normalize()}}),e.Zepto?t.data(i,a):t.removeData(i),s.debug&&(n.log(i+": Reversed Blast"+(t.attr("id")?" on #"+t.attr("id")+".":".")+(l?" Skipped reversal on the children of one or more descendant root elements.":"")),n.timeEnd("blast reversal"))}
var m=$.extend({},$.fn[i].defaults,d),h,f={};if(m.search.length&&("string"==typeof m.search||/^\d/.test(parseFloat(m.search))))m.delimiter=m.search.toString().replace(/[-[\]{,}(.)*+?|^$\\\/]/g,"\\$&"),h=new RegExp("(?:^|[^-"+s.latinLetters+"])("+m.delimiter+"('s)?)(?![-"+s.latinLetters+"])","i");else switch("string"==typeof m.delimiter&&(m.delimiter=m.delimiter.toLowerCase()),m.delimiter){case"all":h=/(.)/;break;case"letter":case"char":case"character":h=/(\S)/;break;case"word":h=/\s*(\S+)\s*/;break;case"sentence":h=/(?=\S)(([.]{2,})?[^!?]+?([.…!?]+|(?=\s+$)|$)(\s*[′’'”″“")»]+)*)/;break;case"element":h=/(?=\S)([\S\s]*\S)/;break;default:if(!(m.delimiter instanceof RegExp))return n.log(i+": Unrecognized delimiter, empty search string, or invalid custom Regex. Aborting."),!0;h=m.delimiter}
if(this.each(function(){var e=$(this),r=e.text();if(d!==!1){f={blastedIndex:0,nodeBeginning:!1,wrappers:f.wrappers||[]},e.data(i)===a||"search"===e.data(i)&&m.search!==!1||(p(e,m),m.debug&&n.log(i+": Removed element's existing Blast call.")),e.data(i,m.search!==!1?"search":m.delimiter),m.aria&&e.attr("aria-label",r),m.stripHTMLTags&&e.html(r);try{t.createElement(m.tag)}catch(s){m.tag="span",m.debug&&n.log(i+": Invalid tag supplied. Defaulting to span.")}
e.addClass(i+"-root"),m.debug&&n.time(i),g(this,m),m.debug&&n.timeEnd(i)}else d===!1&&e.data(i)!==a&&p(e,m);m.debug&&$.each(f.wrappers,function(e,t){n.log(i+" ["+m.delimiter+"] "+this.outerHTML),this.style.backgroundColor=e%2?"#f12185":"#075d9a"})}),d!==!1&&m.returnGenerated===!0){var b=$().add(f.wrappers);return b.prevObject=this,b.context=this.context,b}
return this},$.fn.blast.defaults={returnGenerated:!0,delimiter:"word",tag:"span",search:!1,customClass:"",generateIndexID:!1,generateValueClass:!1,stripHTMLTags:!1,aria:!0,debug:!1}}(window.$||window.Zepto,window,document);
/*! alertify - v0.3.11 - 2013-10-08 */
!function(a,b){"use strict";var c,d=a.document;c=function(){var c,e,f,g,h,i,j,k,l,m,n,o,p,q={},r={},s=!1,t={ENTER:13,ESC:27,SPACE:32},u=[];return r={buttons:{holder:'<nav class="alertify-buttons">{{buttons}}</nav>',submit:'<button type="submit" class="alertify-button alertify-button-ok" id="alertify-ok">{{ok}}</button>',ok:'<button class="alertify-button alertify-button-ok" id="alertify-ok">{{ok}}</button>',cancel:'<button class="alertify-button alertify-button-cancel" id="alertify-cancel">{{cancel}}</button>'},input:'<div class="alertify-text-wrapper"><input type="text" class="alertify-text" id="alertify-text"></div>',message:'<p class="alertify-message">{{message}}</p>',log:'<article class="alertify-log{{class}}">{{message}}</article>'},p=function(){var a,c,e=!1,f=d.createElement("fakeelement"),g={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"otransitionend",transition:"transitionend"};for(a in g)if(f.style[a]!==b){c=g[a],e=!0;break}
return{type:c,supported:e}},c=function(a){return d.getElementById(a)},q={labels:{ok:"OK",cancel:"Cancel"},delay:5e3,buttonReverse:!1,buttonFocus:"ok",transition:b,addListeners:function(a){var b,c,i,j,k,l="undefined"!=typeof f,m="undefined"!=typeof e,n="undefined"!=typeof o,p="",q=this;b=function(b){return"undefined"!=typeof b.preventDefault&&b.preventDefault(),i(b),"undefined"!=typeof o&&(p=o.value),"function"==typeof a&&("undefined"!=typeof o?a(!0,p):a(!0)),!1},c=function(b){return"undefined"!=typeof b.preventDefault&&b.preventDefault(),i(b),"function"==typeof a&&a(!1),!1},i=function(){q.hide(),q.unbind(d.body,"keyup",j),q.unbind(g,"focus",k),l&&q.unbind(f,"click",b),m&&q.unbind(e,"click",c)},j=function(a){var d=a.keyCode;(d===t.SPACE&&!n||n&&d===t.ENTER)&&b(a),d===t.ESC&&m&&c(a)},k=function(){n?o.focus():!m||q.buttonReverse?f.focus():e.focus()},this.bind(g,"focus",k),this.bind(h,"focus",k),l&&this.bind(f,"click",b),m&&this.bind(e,"click",c),this.bind(d.body,"keyup",j),this.transition.supported||this.setFocus()},bind:function(a,b,c){"function"==typeof a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)},handleErrors:function(){if("undefined"!=typeof a.onerror){var b=this;return a.onerror=function(a,c,d){b.error("["+a+" on line "+d+" of "+c+"]",0)},!0}
return!1},appendButtons:function(a,b){return this.buttonReverse?b+a:a+b},build:function(a){var b="",c=a.type,d=a.message,e=a.cssClass||"";switch(b+='<div class="alertify-dialog">',b+='<a id="alertify-resetFocusBack" class="alertify-resetFocus" href="#">Reset Focus</a>',"none"===q.buttonFocus&&(b+='<a href="#" id="alertify-noneFocus" class="alertify-hidden"></a>'),"prompt"===c&&(b+='<div id="alertify-form">'),b+='<article class="alertify-inner">',b+=r.message.replace("{{message}}",d),"prompt"===c&&(b+=r.input),b+=r.buttons.holder,b+="</article>","prompt"===c&&(b+="</div>"),b+='<a id="alertify-resetFocus" class="alertify-resetFocus" href="#">Reset Focus</a>',b+="</div>",c){case"confirm":b=b.replace("{{buttons}}",this.appendButtons(r.buttons.cancel,r.buttons.ok)),b=b.replace("{{ok}}",this.labels.ok).replace("{{cancel}}",this.labels.cancel);break;case"prompt":b=b.replace("{{buttons}}",this.appendButtons(r.buttons.cancel,r.buttons.submit)),b=b.replace("{{ok}}",this.labels.ok).replace("{{cancel}}",this.labels.cancel);break;case"alert":b=b.replace("{{buttons}}",r.buttons.ok),b=b.replace("{{ok}}",this.labels.ok)}
return l.className="alertify alertify-"+c+" "+e,k.className="alertify-cover",b},close:function(a,b){var c,d,e=b&&!isNaN(b)?+b:this.delay,f=this;this.bind(a,"click",function(){c(a)}),d=function(a){a.stopPropagation(),f.unbind(this,f.transition.type,d),m.removeChild(this),m.hasChildNodes()||(m.className+=" alertify-logs-hidden")},c=function(a){"undefined"!=typeof a&&a.parentNode===m&&(f.transition.supported?(f.bind(a,f.transition.type,d),a.className+=" alertify-log-hide"):(m.removeChild(a),m.hasChildNodes()||(m.className+=" alertify-logs-hidden")))},0!==b&&setTimeout(function(){c(a)},e)},dialog:function(a,b,c,e,f){j=d.activeElement;var g=function(){m&&null!==m.scrollTop&&k&&null!==k.scrollTop||g()};if("string"!=typeof a)throw new Error("message must be a string");if("string"!=typeof b)throw new Error("type must be a string");if("undefined"!=typeof c&&"function"!=typeof c)throw new Error("fn must be a function");return this.init(),g(),u.push({type:b,message:a,callback:c,placeholder:e,cssClass:f}),s||this.setup(),this},extend:function(a){if("string"!=typeof a)throw new Error("extend method must have exactly one paramter");return function(b,c){return this.log(b,a,c),this}},hide:function(){var a,b=this;u.splice(0,1),u.length>0?this.setup(!0):(s=!1,a=function(c){c.stopPropagation(),b.unbind(l,b.transition.type,a)},this.transition.supported?(this.bind(l,this.transition.type,a),l.className="alertify alertify-hide alertify-hidden"):l.className="alertify alertify-hide alertify-hidden alertify-isHidden",k.className="alertify-cover alertify-cover-hidden",j.focus())},init:function(){d.createElement("nav"),d.createElement("article"),d.createElement("section"),null==c("alertify-cover")&&(k=d.createElement("div"),k.setAttribute("id","alertify-cover"),k.className="alertify-cover alertify-cover-hidden",d.body.appendChild(k)),null==c("alertify")&&(s=!1,u=[],l=d.createElement("section"),l.setAttribute("id","alertify"),l.className="alertify alertify-hidden",d.body.appendChild(l)),null==c("alertify-logs")&&(m=d.createElement("section"),m.setAttribute("id","alertify-logs"),m.className="alertify-logs alertify-logs-hidden",d.body.appendChild(m)),d.body.setAttribute("tabindex","0"),this.transition=p()},log:function(a,b,c){var d=function(){m&&null!==m.scrollTop||d()};return this.init(),d(),m.className="alertify-logs",this.notify(a,b,c),this},notify:function(a,b,c){var e=d.createElement("article");e.className="alertify-log"+("string"==typeof b&&""!==b?" alertify-log-"+b:""),e.innerHTML=a,m.appendChild(e),setTimeout(function(){e.className=e.className+" alertify-log-show"},50),this.close(e,c)},set:function(a){var b;if("object"!=typeof a&&a instanceof Array)throw new Error("args must be an object");for(b in a)a.hasOwnProperty(b)&&(this[b]=a[b])},setFocus:function(){o?(o.focus(),o.select()):i.focus()},setup:function(a){var d,j=u[0],k=this;s=!0,d=function(a){a.stopPropagation(),k.setFocus(),k.unbind(l,k.transition.type,d)},this.transition.supported&&!a&&this.bind(l,this.transition.type,d),l.innerHTML=this.build(j),g=c("alertify-resetFocus"),h=c("alertify-resetFocusBack"),f=c("alertify-ok")||b,e=c("alertify-cancel")||b,i="cancel"===q.buttonFocus?e:"none"===q.buttonFocus?c("alertify-noneFocus"):f,o=c("alertify-text")||b,n=c("alertify-form")||b,"string"==typeof j.placeholder&&""!==j.placeholder&&(o.value=j.placeholder),a&&this.setFocus(),this.addListeners(j.callback)},unbind:function(a,b,c){"function"==typeof a.removeEventListener?a.removeEventListener(b,c,!1):a.detachEvent&&a.detachEvent("on"+b,c)}},{alert:function(a,b,c){return q.dialog(a,"alert",b,"",c),this},confirm:function(a,b,c){return q.dialog(a,"confirm",b,"",c),this},extend:q.extend,init:q.init,log:function(a,b,c){return q.log(a,b,c),this},prompt:function(a,b,c,d){return q.dialog(a,"prompt",b,c,d),this},success:function(a,b){return q.log(a,"success",b),this},error:function(a,b){return q.log(a,"error",b),this},set:function(a){q.set(a)},labels:q.labels,debug:q.handleErrors}},"function"==typeof define?define([],function(){return new c}):"undefined"==typeof a.alertify&&(a.alertify=new c)}(this);(function(factory){if(typeof define==='function'&&define.amd){define(['jquery'],factory);}else if(typeof module==='object'&&module.exports){module.exports=function(root,jQuery){if(jQuery===undefined){if(typeof window!=='undefined'){jQuery=require('jquery');}else{jQuery=require('jquery')(root);}}
factory(jQuery);return jQuery;};}else{factory(jQuery);}}(function($){'use strict';var pluginName='drawsvg',defaults={duration:1000,stagger:200,easing:'swing',reverse:false,callback:$.noop},DrawSvg=(function(){var fn=function fn(elm,options){var _this=this,opts=$.extend(defaults,options);_this.$elm=$(elm);if(!_this.$elm.is('svg'))
return;_this.options=opts;_this.$paths=_this.$elm.find('path');_this.totalDuration=opts.duration+(opts.stagger*_this.$paths.length);_this.duration=opts.duration/_this.totalDuration;_this.$paths.each(function(index,elm){var pathLength=elm.getTotalLength();elm.pathLen=pathLength;elm.delay=(opts.stagger*index)/_this.totalDuration;elm.style.strokeDasharray=[pathLength,pathLength].join(' ');elm.style.strokeDashoffset=pathLength;});_this.$elm.attr('class',function(index,classNames){return[classNames,pluginName+'-initialized'].join(' ');});};fn.prototype.getVal=function(p,easing){return 1-$.easing[easing](p,p,0,1,1);};fn.prototype.progress=function progress(prog){var _this=this,opts=_this.options,duration=_this.duration;_this.$paths.each(function(index,elm){var elmStyle=elm.style;if(prog===1){elmStyle.strokeDashoffset=0;}else if(prog===0){elmStyle.strokeDashoffset=elm.pathLen+'px';}else if(prog>=elm.delay&&prog<=duration+elm.delay){var p=((prog-elm.delay)/duration);elmStyle.strokeDashoffset=((_this.getVal(p,opts.easing)*elm.pathLen)*(opts.reverse?-1:1))+'px';}});};fn.prototype.animate=function animate(){var _this=this;_this.$elm.attr('class',function(index,classNames){return[classNames,pluginName+'-animating'].join(' ');});$({len:0}).animate({len:1},{easing:'linear',duration:_this.totalDuration,step:function(now,fx){_this.progress.call(_this,now/fx.end);},complete:function(){_this.options.callback.call(this);_this.$elm.attr('class',function(index,classNames){return classNames.replace(pluginName+'-animating','');});}});};return fn;})();$.fn[pluginName]=function(method,args){return this.each(function(){var data=$.data(this,pluginName);(data&&''+method===method&&data[method])?data[method](args):$.data(this,pluginName,new DrawSvg(this,method));});};}));
/*!
Waypoints - 3.1.1
Copyright © 2011-2015 Caleb Troughton
Licensed under the MIT license.
https://github.com/imakewebthings/waypoints/blog/master/licenses.txt
*/
(function(){'use strict'
var keyCounter=0
var allWaypoints={}
function Waypoint(options){if(!options){throw new Error('No options passed to Waypoint constructor')}
if(!options.element){throw new Error('No element option passed to Waypoint constructor')}
if(!options.handler){throw new Error('No handler option passed to Waypoint constructor')}
this.key='waypoint-'+keyCounter
this.options=Waypoint.Adapter.extend({},Waypoint.defaults,options)
this.element=this.options.element
this.adapter=new Waypoint.Adapter(this.element)
this.callback=options.handler
this.axis=this.options.horizontal?'horizontal':'vertical'
this.enabled=this.options.enabled
this.triggerPoint=null
this.group=Waypoint.Group.findOrCreate({name:this.options.group,axis:this.axis})
this.context=Waypoint.Context.findOrCreateByElement(this.options.context)
if(Waypoint.offsetAliases[this.options.offset]){this.options.offset=Waypoint.offsetAliases[this.options.offset]}
this.group.add(this)
this.context.add(this)
allWaypoints[this.key]=this
keyCounter+=1}
Waypoint.prototype.queueTrigger=function(direction){this.group.queueTrigger(this,direction)}
Waypoint.prototype.trigger=function(args){if(!this.enabled){return}
if(this.callback){this.callback.apply(this,args)}}
Waypoint.prototype.destroy=function(){this.context.remove(this)
this.group.remove(this)
delete allWaypoints[this.key]}
Waypoint.prototype.disable=function(){this.enabled=false
return this}
Waypoint.prototype.enable=function(){this.context.refresh()
this.enabled=true
return this}
Waypoint.prototype.next=function(){return this.group.next(this)}
Waypoint.prototype.previous=function(){return this.group.previous(this)}
Waypoint.invokeAll=function(method){var allWaypointsArray=[]
for(var waypointKey in allWaypoints){allWaypointsArray.push(allWaypoints[waypointKey])}
for(var i=0,end=allWaypointsArray.length;i<end;i++){allWaypointsArray[i][method]()}}
Waypoint.destroyAll=function(){Waypoint.invokeAll('destroy')}
Waypoint.disableAll=function(){Waypoint.invokeAll('disable')}
Waypoint.enableAll=function(){Waypoint.invokeAll('enable')}
Waypoint.refreshAll=function(){Waypoint.Context.refreshAll()}
Waypoint.viewportHeight=function(){return window.innerHeight||document.documentElement.clientHeight}
Waypoint.viewportWidth=function(){return document.documentElement.clientWidth}
Waypoint.adapters=[]
Waypoint.defaults={context:window,continuous:true,enabled:true,group:'default',horizontal:false,offset:0}
Waypoint.offsetAliases={'bottom-in-view':function(){return this.context.innerHeight()-this.adapter.outerHeight()},'right-in-view':function(){return this.context.innerWidth()-this.adapter.outerWidth()}}
window.Waypoint=Waypoint}());(function(){'use strict'
function requestAnimationFrameShim(callback){window.setTimeout(callback,1000/60)}
var keyCounter=0
var contexts={}
var Waypoint=window.Waypoint
var oldWindowLoad=window.onload
function Context(element){this.element=element
this.Adapter=Waypoint.Adapter
this.adapter=new this.Adapter(element)
this.key='waypoint-context-'+keyCounter
this.didScroll=false
this.didResize=false
this.oldScroll={x:this.adapter.scrollLeft(),y:this.adapter.scrollTop()}
this.waypoints={vertical:{},horizontal:{}}
element.waypointContextKey=this.key
contexts[element.waypointContextKey]=this
keyCounter+=1
this.createThrottledScrollHandler()
this.createThrottledResizeHandler()}
Context.prototype.add=function(waypoint){var axis=waypoint.options.horizontal?'horizontal':'vertical'
this.waypoints[axis][waypoint.key]=waypoint
this.refresh()}
Context.prototype.checkEmpty=function(){var horizontalEmpty=this.Adapter.isEmptyObject(this.waypoints.horizontal)
var verticalEmpty=this.Adapter.isEmptyObject(this.waypoints.vertical)
if(horizontalEmpty&&verticalEmpty){this.adapter.off('.waypoints')
delete contexts[this.key]}}
Context.prototype.createThrottledResizeHandler=function(){var self=this
function resizeHandler(){self.handleResize()
self.didResize=false}
this.adapter.on('resize.waypoints',function(){if(!self.didResize){self.didResize=true
Waypoint.requestAnimationFrame(resizeHandler)}})}
Context.prototype.createThrottledScrollHandler=function(){var self=this
function scrollHandler(){self.handleScroll()
self.didScroll=false}
this.adapter.on('scroll.waypoints',function(){if(!self.didScroll||Waypoint.isTouch){self.didScroll=true
Waypoint.requestAnimationFrame(scrollHandler)}})}
Context.prototype.handleResize=function(){Waypoint.Context.refreshAll()}
Context.prototype.handleScroll=function(){var triggeredGroups={}
var axes={horizontal:{newScroll:this.adapter.scrollLeft(),oldScroll:this.oldScroll.x,forward:'right',backward:'left'},vertical:{newScroll:this.adapter.scrollTop(),oldScroll:this.oldScroll.y,forward:'down',backward:'up'}}
for(var axisKey in axes){var axis=axes[axisKey]
var isForward=axis.newScroll>axis.oldScroll
var direction=isForward?axis.forward:axis.backward
for(var waypointKey in this.waypoints[axisKey]){var waypoint=this.waypoints[axisKey][waypointKey]
var wasBeforeTriggerPoint=axis.oldScroll<waypoint.triggerPoint
var nowAfterTriggerPoint=axis.newScroll>=waypoint.triggerPoint
var crossedForward=wasBeforeTriggerPoint&&nowAfterTriggerPoint
var crossedBackward=!wasBeforeTriggerPoint&&!nowAfterTriggerPoint
if(crossedForward||crossedBackward){waypoint.queueTrigger(direction)
triggeredGroups[waypoint.group.id]=waypoint.group}}}
for(var groupKey in triggeredGroups){triggeredGroups[groupKey].flushTriggers()}
this.oldScroll={x:axes.horizontal.newScroll,y:axes.vertical.newScroll}}
Context.prototype.innerHeight=function(){if(this.element==this.element.window){return Waypoint.viewportHeight()}
return this.adapter.innerHeight()}
Context.prototype.remove=function(waypoint){delete this.waypoints[waypoint.axis][waypoint.key]
this.checkEmpty()}
Context.prototype.innerWidth=function(){if(this.element==this.element.window){return Waypoint.viewportWidth()}
return this.adapter.innerWidth()}
Context.prototype.destroy=function(){var allWaypoints=[]
for(var axis in this.waypoints){for(var waypointKey in this.waypoints[axis]){allWaypoints.push(this.waypoints[axis][waypointKey])}}
for(var i=0,end=allWaypoints.length;i<end;i++){allWaypoints[i].destroy()}}
Context.prototype.refresh=function(){var isWindow=this.element==this.element.window
var contextOffset=this.adapter.offset()
var triggeredGroups={}
var axes
this.handleScroll()
axes={horizontal:{contextOffset:isWindow?0:contextOffset.left,contextScroll:isWindow?0:this.oldScroll.x,contextDimension:this.innerWidth(),oldScroll:this.oldScroll.x,forward:'right',backward:'left',offsetProp:'left'},vertical:{contextOffset:isWindow?0:contextOffset.top,contextScroll:isWindow?0:this.oldScroll.y,contextDimension:this.innerHeight(),oldScroll:this.oldScroll.y,forward:'down',backward:'up',offsetProp:'top'}}
for(var axisKey in axes){var axis=axes[axisKey]
for(var waypointKey in this.waypoints[axisKey]){var waypoint=this.waypoints[axisKey][waypointKey]
var adjustment=waypoint.options.offset
var oldTriggerPoint=waypoint.triggerPoint
var elementOffset=0
var freshWaypoint=oldTriggerPoint==null
var contextModifier,wasBeforeScroll,nowAfterScroll
var triggeredBackward,triggeredForward
if(waypoint.element!==waypoint.element.window){elementOffset=waypoint.adapter.offset()[axis.offsetProp]}
if(typeof adjustment==='function'){adjustment=adjustment.apply(waypoint)}
else if(typeof adjustment==='string'){adjustment=parseFloat(adjustment)
if(waypoint.options.offset.indexOf('%')>-1){adjustment=Math.ceil(axis.contextDimension*adjustment/100)}}
contextModifier=axis.contextScroll-axis.contextOffset
waypoint.triggerPoint=elementOffset+contextModifier-adjustment
wasBeforeScroll=oldTriggerPoint<axis.oldScroll
nowAfterScroll=waypoint.triggerPoint>=axis.oldScroll
triggeredBackward=wasBeforeScroll&&nowAfterScroll
triggeredForward=!wasBeforeScroll&&!nowAfterScroll
if(!freshWaypoint&&triggeredBackward){waypoint.queueTrigger(axis.backward)
triggeredGroups[waypoint.group.id]=waypoint.group}
else if(!freshWaypoint&&triggeredForward){waypoint.queueTrigger(axis.forward)
triggeredGroups[waypoint.group.id]=waypoint.group}
else if(freshWaypoint&&axis.oldScroll>=waypoint.triggerPoint){waypoint.queueTrigger(axis.forward)
triggeredGroups[waypoint.group.id]=waypoint.group}}}
for(var groupKey in triggeredGroups){triggeredGroups[groupKey].flushTriggers()}
return this}
Context.findOrCreateByElement=function(element){return Context.findByElement(element)||new Context(element)}
Context.refreshAll=function(){for(var contextId in contexts){contexts[contextId].refresh()}}
Context.findByElement=function(element){return contexts[element.waypointContextKey]}
window.onload=function(){if(oldWindowLoad){oldWindowLoad()}
Context.refreshAll()}
Waypoint.requestAnimationFrame=function(callback){var requestFn=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||requestAnimationFrameShim
requestFn.call(window,callback)}
Waypoint.Context=Context}());(function(){'use strict'
function byTriggerPoint(a,b){return a.triggerPoint-b.triggerPoint}
function byReverseTriggerPoint(a,b){return b.triggerPoint-a.triggerPoint}
var groups={vertical:{},horizontal:{}}
var Waypoint=window.Waypoint
function Group(options){this.name=options.name
this.axis=options.axis
this.id=this.name+'-'+this.axis
this.waypoints=[]
this.clearTriggerQueues()
groups[this.axis][this.name]=this}
Group.prototype.add=function(waypoint){this.waypoints.push(waypoint)}
Group.prototype.clearTriggerQueues=function(){this.triggerQueues={up:[],down:[],left:[],right:[]}}
Group.prototype.flushTriggers=function(){for(var direction in this.triggerQueues){var waypoints=this.triggerQueues[direction]
var reverse=direction==='up'||direction==='left'
waypoints.sort(reverse?byReverseTriggerPoint:byTriggerPoint)
for(var i=0,end=waypoints.length;i<end;i+=1){var waypoint=waypoints[i]
if(waypoint.options.continuous||i===waypoints.length-1){waypoint.trigger([direction])}}}
this.clearTriggerQueues()}
Group.prototype.next=function(waypoint){this.waypoints.sort(byTriggerPoint)
var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
var isLast=index===this.waypoints.length-1
return isLast?null:this.waypoints[index+1]}
Group.prototype.previous=function(waypoint){this.waypoints.sort(byTriggerPoint)
var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
return index?this.waypoints[index-1]:null}
Group.prototype.queueTrigger=function(waypoint,direction){this.triggerQueues[direction].push(waypoint)}
Group.prototype.remove=function(waypoint){var index=Waypoint.Adapter.inArray(waypoint,this.waypoints)
if(index>-1){this.waypoints.splice(index,1)}}
Group.prototype.first=function(){return this.waypoints[0]}
Group.prototype.last=function(){return this.waypoints[this.waypoints.length-1]}
Group.findOrCreate=function(options){return groups[options.axis][options.name]||new Group(options)}
Waypoint.Group=Group}());(function(){'use strict'
var $=window.jQuery
var Waypoint=window.Waypoint
function JQueryAdapter(element){this.$element=$(element)}
$.each(['innerHeight','innerWidth','off','offset','on','outerHeight','outerWidth','scrollLeft','scrollTop'],function(i,method){JQueryAdapter.prototype[method]=function(){var args=Array.prototype.slice.call(arguments)
return this.$element[method].apply(this.$element,args)}})
$.each(['extend','inArray','isEmptyObject'],function(i,method){JQueryAdapter[method]=$[method]})
Waypoint.adapters.push({name:'jquery',Adapter:JQueryAdapter})
Waypoint.Adapter=JQueryAdapter}());(function(){'use strict'
var Waypoint=window.Waypoint
function createExtension(framework){return function(){var waypoints=[]
var overrides=arguments[0]
if(framework.isFunction(arguments[0])){overrides=framework.extend({},arguments[1])
overrides.handler=arguments[0]}
this.each(function(){var options=framework.extend({},overrides,{element:this})
if(typeof options.context==='string'){options.context=framework(this).closest(options.context)[0]}
waypoints.push(new Waypoint(options))})
return waypoints}}
if(window.jQuery){window.jQuery.fn.waypoint=createExtension(window.jQuery)}
if(window.Zepto){window.Zepto.fn.waypoint=createExtension(window.Zepto)}}());
$('.wall-cont').addClass('animated fadeIn');$(document).ready(function(){TweenMax.to($('#awwwards')[0],0.4,{right:0,delay:0.7});$('.post-article').waypoint(function(direction){$(this.element).addClass('animated fadeInUp');},{offset:'90%'});$(".widget_categories a, h1").blast({delimiter:"character",tag:"span"})
$(".tagcloud a,  .blog-post-title a").blast({delimiter:"word",tag:"span"});setTimeout(function(){var a=0;$('h1 .blast').each(function(){var el=$(this);setTimeout(function(){el.addClass('animated fadeInLeft');},a);a=a+150;});},800);$(this).addClass('animated bounceIn');$(".tagcloud  .blast, .widget_categories .blast, .blog-post-title .blast").mouseenter(function(){var el=$(this);$(this).addClass('animated rubberBand');$(this).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',function(){el.removeClass('animated rubberBand');});});$(window).scroll(function(){if($(window).scrollTop()>100){$('.logo-big').fadeIn();}else{$('.logo-big').fadeOut();}
clearTimeout($.data(this,'scrollTimer'));$.data(this,'scrollTimer',setTimeout(function(){var scrollTop=$(window).scrollTop();$('.logo-big').css('margin-top',scrollTop);},150));});});