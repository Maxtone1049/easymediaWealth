(()=>{"use strict";var e,t,n,r,o,s={29967:(e,t,n)=>{n(66992),n(88674),n(33948),n(26699);const r="isExtensionInstalled",o=(!0).toString();const s=window.sbInlineInstallProps||{},a=s.userBrowserType.browserName,i=function(e){const t=s.userBrowserType.unsupported;return!sbHelpers.isMobile()&&!t&&["chrome","firefox","edge"].includes(e)}(a),l=sbHelpers.isStorageAccessible();let d=!1,c=!1;function u(){const e=document.getElementById("extensionHeaderInstallCta");i&&(window.sbInlineInstallProps.hasSwagButtonInstalled&&b(),e&&(e.classList.add("show"),e.addEventListener("click",g)),document.addEventListener("sbExtensionPresent",window.onSBExtensionPresent))}function p(){if(window.sbInlineInstallProps.hasSwagButtonInstalled&&l){null===localStorage.getItem(r)&&(localStorage.setItem(r,o),sbHelpers.trackData({eventCategory:"Member UX",eventAction:"Install SwagButton"}))}}function f(){setTimeout(p,500),b()}function g(e){var t,n;("A"!==e.currentTarget.nodeName&&e.preventDefault(),t=()=>{b(),window.sbHelpers.showSubscriptionAdvertisingModal()},sbHelpers.getType("function",t)&&document.addEventListener("sbExtensionInstalled",t),d)||(d=!0,sbHelpers.trackData({eventCategory:"Extension",eventAction:"Install CTA Click",eventLabel:(n=a,n.charAt(0).toUpperCase()+n.substring(1))}))}function b(){if(c)return;const e=[...document.getElementsByClassName("swagButtonInstallCta")];for(c=!0;e.length;)h(e.shift())}function h(e){!function(e){const t="extensionAdded",n="sbBgPrimaryColor";e.classList.add(t),e.classList.remove(n),e.disabled=!0}(e),function(e){const t="sbVisuallyHidden",n=e.querySelector(".addExtension"),r=e.querySelector(".extensionAdded");n.classList.add(t),n.hidden=!0,r.classList.remove(t),r.hidden=!1}(e)}sbHelpers.isMember()?n.e(1122).then(n.bind(n,70500)).then((e=>e.setUp())):n.e(6281).then(n.bind(n,77102)).then((e=>e.setUp())),sbGlbl.onSBExtensionPresent.push(f),sbHelpers.onDomContentLoaded(u)}},a={};function i(e){var t=a[e];if(void 0!==t)return t.exports;var n=a[e]={exports:{}};return s[e].call(n.exports,n,n.exports,i),n.exports}i.m=s,e=[],i.O=(t,n,r,o)=>{if(!n){var s=1/0;for(c=0;c<e.length;c++){for(var[n,r,o]=e[c],a=!0,l=0;l<n.length;l++)(!1&o||s>=o)&&Object.keys(i.O).every((e=>i.O[e](n[l])))?n.splice(l--,1):(a=!1,o<s&&(s=o));if(a){e.splice(c--,1);var d=r();void 0!==d&&(t=d)}}return t}o=o||0;for(var c=e.length;c>0&&e[c-1][2]>o;c--)e[c]=e[c-1];e[c]=[n,r,o]},i.d=(e,t)=>{for(var n in t)i.o(t,n)&&!i.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,n)=>(i.f[n](e,t),t)),[])),i.u=e=>({1122:"extension-logged-in",6281:"extension-logged-out"}[e]+"."+{1122:"147e10c85f56f1d5b8ce",6281:"93f74f95f5f0c913de7a"}[e]+".js"),i.miniCssF=e=>({1122:"extension-logged-in",6281:"extension-logged-out"}[e]+"."+{1122:"4df0729a772abf8d10bf",6281:"c49c5838bc742c3435b6"}[e]+".css"),i.g=function(){if("object"==typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"==typeof window)return window}}(),i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),t={},n="prodege:",i.l=(e,r,o,s)=>{if(t[e])t[e].push(r);else{var a,l;if(void 0!==o)for(var d=document.getElementsByTagName("script"),c=0;c<d.length;c++){var u=d[c];if(u.getAttribute("src")==e||u.getAttribute("data-webpack")==n+o){a=u;break}}a||(l=!0,(a=document.createElement("script")).charset="utf-8",a.timeout=120,i.nc&&a.setAttribute("nonce",i.nc),a.setAttribute("data-webpack",n+o),a.src=e),t[e]=[r];var p=(n,r)=>{a.onerror=a.onload=null,clearTimeout(f);var o=t[e];if(delete t[e],a.parentNode&&a.parentNode.removeChild(a),o&&o.forEach((e=>e(r))),n)return n(r)},f=setTimeout(p.bind(null,void 0,{type:"timeout",target:a}),12e4);a.onerror=p.bind(null,a.onerror),a.onload=p.bind(null,a.onload),l&&document.head.appendChild(a)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},(()=>{var e;i.g.importScripts&&(e=i.g.location+"");var t=i.g.document;if(!e&&t&&(t.currentScript&&(e=t.currentScript.src),!e)){var n=t.getElementsByTagName("script");n.length&&(e=n[n.length-1].src)}if(!e)throw new Error("Automatic publicPath is not supported in this browser");e=e.replace(/#.*$/,"").replace(/\?.*$/,"").replace(/\/[^\/]+$/,"/"),i.p=e})(),r=e=>new Promise(((t,n)=>{var r=i.miniCssF(e),o=i.p+r;if(((e,t)=>{for(var n=document.getElementsByTagName("link"),r=0;r<n.length;r++){var o=(a=n[r]).getAttribute("data-href")||a.getAttribute("href");if("stylesheet"===a.rel&&(o===e||o===t))return a}var s=document.getElementsByTagName("style");for(r=0;r<s.length;r++){var a;if((o=(a=s[r]).getAttribute("data-href"))===e||o===t)return a}})(r,o))return t();((e,t,n,r)=>{var o=document.createElement("link");o.rel="stylesheet",o.type="text/css",o.onerror=o.onload=s=>{if(o.onerror=o.onload=null,"load"===s.type)n();else{var a=s&&("load"===s.type?"missing":s.type),i=s&&s.target&&s.target.href||t,l=new Error("Loading CSS chunk "+e+" failed.\n("+i+")");l.code="CSS_CHUNK_LOAD_FAILED",l.type=a,l.request=i,o.parentNode.removeChild(o),r(l)}},o.href=t,document.head.appendChild(o)})(e,o,t,n)})),o={5898:0},i.f.miniCss=(e,t)=>{o[e]?t.push(o[e]):0!==o[e]&&{1122:1,6281:1}[e]&&t.push(o[e]=r(e).then((()=>{o[e]=0}),(t=>{throw delete o[e],t})))},(()=>{var e={5898:0};i.f.j=(t,n)=>{var r=i.o(e,t)?e[t]:void 0;if(0!==r)if(r)n.push(r[2]);else{var o=new Promise(((n,o)=>r=e[t]=[n,o]));n.push(r[2]=o);var s=i.p+i.u(t),a=new Error;i.l(s,(n=>{if(i.o(e,t)&&(0!==(r=e[t])&&(e[t]=void 0),r)){var o=n&&("load"===n.type?"missing":n.type),s=n&&n.target&&n.target.src;a.message="Loading chunk "+t+" failed.\n("+o+": "+s+")",a.name="ChunkLoadError",a.type=o,a.request=s,r[1](a)}}),"chunk-"+t,t)}},i.O.j=t=>0===e[t];var t=(t,n)=>{var r,o,[s,a,l]=n,d=0;if(s.some((t=>0!==e[t]))){for(r in a)i.o(a,r)&&(i.m[r]=a[r]);if(l)var c=l(i)}for(t&&t(n);d<s.length;d++)o=s[d],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return i.O(c)},n=self.webpackChunkprodege=self.webpackChunkprodege||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var l=i.O(void 0,[4736],(()=>i(29967)));l=i.O(l)})();