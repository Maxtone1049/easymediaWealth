!function(){"use strict";var e=[];function n(){return Math.floor((new Date).getTime()/1e3)}!function(){for(var n,t=document.getElementsByTagName("SPAN"),r=t.length,o=0,s="",i=0;i<r;i++)(n=t[i]).className.indexOf("timeCounter")>-1&&":"==n.innerHTML.substr(2,1)&&(e[o]=n,s=n.innerHTML.split(":"),n.seconds=parseInt(s[2])+60*s[1]+3600*s[0],n.posneg=-1==n.className.indexOf("positive")?-1:1,o++)}();var t=n();function r(e){if(e<0||isNaN(e))return"00:00:00";var n=Math.floor(e/3600),t=e%3600,r=Math.floor(t/60),o=t%60;return(n<10?"0":"")+n+":"+(r<10?"0":"")+r+":"+(o<10?"0":"")+o}var o=setTimeout((function s(){var i,a=(i=t,n()-i);t=n();for(var u,c=e.length,f=0;f<c;f++)(u=e[f]).seconds=u.seconds+a*u.posneg,u.innerHTML=r(u.seconds);clearTimeout(o),o=setTimeout(s,1e3)}),1e3)}();