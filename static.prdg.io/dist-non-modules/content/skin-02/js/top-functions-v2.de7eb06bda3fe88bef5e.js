var watermarks=new Array;function watermarkThis(e){watermarkThis(e,"")}function watermarkThis(e,t){var o=watermarks.length;watermarks.push({id:e.id,text:e.value,orgState:e.className,frmID:t}),""!=t&&(document.getElementById(t).onsubmit=function(){return validateWatermark(o)}),e.onfocus=function(){watermarkFocus(e,o)},e.onblur=function(){watermarkBlur(e,o)}}function watermarkFocus(e,t){e.value==watermarks[t].text&&(e.value="",e.className="stateA stateB");watermarks[t].frmID}function watermarkBlur(e,t){""==e.value&&(e.value=watermarks[t].text,e.className=watermarks[t].orgState);watermarks[t].frmID}function validateWatermark(e){var t=watermarks[e],o=document.getElementById(t.id).value;return""!=o&&o!=t.text}var isChild=!1;function loadCurCat(){if(document.getElementById("cat--999").href="/?cmd=sb-list&id=-999&srt=3",0==catID)return document.getElementById("parentCat").innerHTML='Search<div class="edge"></div>',void(document.getElementById("childCat").innerHTML=catDesc);if(subCatLink=document.getElementById("sCat-"+catID),subCatCont=document.getElementById("cat-"+catID+"-subList"),subCatLink){subCatParent=subCatLink.parentNode;var e;e=subCatParent.id.substring(4,subCatParent.id.length-8).replace("-subList",""),subCatCont=document.getElementById("cat-"+e+"-subList"),isChild=!0,subCatLink.className="navSelected",parentCatID=document.getElementById("cat-"+e),document.getElementById("parentCat").innerHTML='<a href="?cmd=sb-list&id='+e+'">'+parentCatID.innerHTML+'</a><div class="edge"></div>',document.getElementById("childCat").innerHTML=catDesc,loadParentSubCats(subCatCont,e)}else null!=document.getElementById("cat-"+catID)&&(document.getElementById("parentCat").innerHTML=document.getElementById("cat-"+catID).innerHTML+'<div class="edge"></div>',subCatCont&&loadSubCats())}function loadSubCats(){var e=document.getElementById("cat-"+catID+"-subList");document.getElementById("subCatsNav").style.display="",document.getElementById("subCatsNav").innerHTML='    <div class="title">IN THIS CATEGORY:</div><a id="featuredCatItems" href="?cmd=sb-list&id='+catID+'">All</a>'+e.innerHTML+'<div class="navBtm"></div>',document.getElementById("subCatsNav").style.display="",document.getElementById("featuredCatItems").className="navSelected"}function loadParentSubCats(e,t){document.getElementById("subCatsNav").style.display="",document.getElementById("subCatsNav").innerHTML='    <div class="title">IN THIS CATEGORY:</div><a id="featuredCatItems" href="?cmd=sb-list&id='+t+'">All</a>'+e.innerHTML+'<div class="navBtm"></div>';for(var o=document.getElementById("subCatsNav"),n=0;n<o.childNodes.length;n++)if(o.childNodes[n].id=="sCat-"+catID){o.childNodes[n].className="highlight1 slct";break}document.getElementById("subCatsNav").style.display="",document.getElementById("featuredCatItems").className="navSelected"}Array.prototype.indexOf||(Array.prototype.indexOf=function(e,t){null==t?t=0:t<0&&(t=Math.max(0,this.length+t));for(var o=t,n=this.length;o<n;o++)if(this[o]===e)return o;return-1});var drpRgstr=new Array;function showDrop(e,t){for(curSelectBoxID=e.parentNode.id,curSelectBox=e,options=e.nextSibling;"DIV"!=options.nodeName;)options=options.nextSibling;for(masterWidth=e.clientWidth,""==options.style.display||"none"==options.style.display?curMode="block":curMode="",options.style.display=curMode,-1==drpRgstr.indexOf(e)&&drpRgstr.push(options),i=0;i<drpRgstr.length;i++)drpRgstr[i]!=options&&(drpRgstr[i].style.display="none");cancelBubbleEvent(t)}function slctOpt(e){alert(e.getAttribute("optionValue")),document.getElementById(curSelectBoxID).value=e.innerHTML,options.style.display="",curSelectBox.innerHTML=e.innerHTML}function closeDropDown(){document.getElementById("contVarDrp").style.display="none"}function launchStPop(e,t,o,n,i){var r=document.getElementById("stPop"),a=(i=i||0,document.getElementById("stPopIco")),s=document.getElementById("stPopTitle");s.innerHTML=t,s.className=o,msg=document.getElementById("stPopBody"),msg.innerHTML=n,msg.style.maxHeight=jQuery(window).height()/2+"px",r.style.left="50%",a.style.backgroundImage="url('//www.swagbucks.com/content/skin-02/images/st"+e+".jpg')",i>0&&"undefined"!=typeof customStPopFunc&&customStPopFunc(i);var l=r.offsetHeight;r.style.marginTop="-"+l/2+"px"}function closeMe(e){document.getElementById(e).style.left="-999px"}function showMe(e){document.getElementById(e).style.left="-999px"}function cancelBubbleEvents(e){(e=e||window.event).cancelBubble=!0,e.stopPropagation&&e.stopPropagation()}function showLoginBox(){return sbGlbl.sbTb.showMiniRegView()}function showLoginPop(){return sbGlbl.sbTb.showMiniLoginView()}function closeLoginPop(e){if(isDiaologLogin)1==closeLoginAction?hideDiaologLogin():location.href=closeLoginAction;else{var t=500;e&&(t=0),jQuery(loginPopCont).animate({top:"0"},t)}}function scroll2TopNonIe(){-1!=navigator.appVersion.indexOf("MSIE")&&!window.opera||scroll(0,0)}function showDiaologLogin(){}function hideDiaologLogin(){popupLogin=loginPopCont,popupLogin.style.display="none",popupObj.style.top="0",document.getElementById("fadeCover").style.display="none"}var isSwagstore30=!0,isDiaologLogin=!1;function reloadPopStyling(){jQuery("#stPopIco").hasClass("ico")||jQuery("#stPopIco").attr("class","").addClass("ico"),jQuery(".msg:first").css("marginLeft",""),jQuery(".stPop").css({width:"",marginLeft:""})}function shareThisOnFacebook(){"undefined"==typeof fbUrlToShare&&("undefined"!=typeof twitterUrlToShare?fbUrlToShare=twitterUrlToShare:fbUrlToShare="//www.swagbucks.com/?cmp=132"),window.open("//www.facebook.com/sharer.php?u="+encodeURIComponent(fbUrlToShare),"fbShare","status=0,toolbar=0,scrollbars=0,width=620,height=420")}function shareThisOnTwitter(){"undefined"==typeof twitterUrlToShare&&("undefined"!=typeof fbUrlToShare?twitterUrlToShare=fbUrlToShare:twitterUrlToShare="//www.swagbucks.com/?cmp=132"),"undefined"==typeof twitterTextToShare&&(twitterTextToShare=""),window.open("//twitter.com/intent/tweet?text="+encodeURIComponent(twitterTextToShare)+"&url="+encodeURIComponent(twitterUrlToShare),"twitterShare","status=0,toolbar=0,scrollbars=0,width=550,height=420")}function getTwitterUrlShare(e,t,o){return"//"+(o||"www.swagbucks.com")+"/p/referral?cmp=132&cxid=2-"+e+"&fb_ref="+t+"&to="+encodeURIComponent("/p/register")}function getFbUrlToShare(e,t,o,n){return e.replace("cxid=2-","cxid=1-")+encodeURIComponent("?fb=true|deno~"+t+"|msgID~"+o+(n||""))}function sbDecodeHtml(e){return e?$("<div/>").html(e).text():""}function initNewTooltip(e){var t,o=jQuery.extend({elm:"body",onShow:null,onHide:null},e),n=!1,i=!1,r="";jQuery("#newTooltip").length||jQuery('<div id="newTooltip"></div>').appendTo("body");var a=jQuery("#newTooltip");function s(){n=!0,setTimeout((function(){n&&!i&&(a.hide(),o.onHide&&o.onHide.call(this,a))}),400)}jQuery(o.elm+" .isTooltipTrigger").each((function(){var e=jQuery(this);e.data("loadedTooltip")||(e.data("loadedTooltip",!0),e.hover((function(){if(void 0!==e.attr("data-tooltip-content")&&null!=e.attr("data-tooltip-content"))t=e.attr("data-tooltip-content");else{if(void 0===e.attr("title")||null==e.attr("title"))return;t=e.attr("title"),e.attr("data-tooltip-content",e.attr("title")),e.removeAttr("title")}void 0!==(r=e.attr("data-tooltip-style"))?"dark"==r.toLowerCase()&&a.addClass("isDarkTip"):a.removeClass(),a.html(t),n=!1;var i=e.offset().top-jQuery("#newTooltip").outerHeight()-8;i-jQuery(window).scrollTop()<35?(a.addClass("isBottom"),i=i+e.outerHeight()+jQuery("#newTooltip").outerHeight()+18):a.removeClass("isBottom"),a.css({top:i,left:e.offset().left-jQuery("#newTooltip").outerWidth()/2+e.outerWidth()/2-1}).show(),o.onShow&&o.onShow.call(this,a)}),(function(){a.is(":hidden")||s()})))})),a.hover((function(){n=!1}),(function(){a.is(":hidden")||s()})),jQuery(".isTooltipTrigger").live("mouseover",(function(){i=!0})).live("mouseout",(function(){i=!1}))}function urlParam(e,t){var o=RegExp("[?&#]"+e+"=([^&#]*)").exec(window.location.href);if(void 0!==t)if(location.hash.substring(1).indexOf(e)<0)location.hash+=e+"="+t;else{var n=new RegExp(e+"=([^/]*)","gi");location.hash=location.hash.replace(n,e+"="+t),o=RegExp("[?&#]"+e+"=([^&#]*)").exec(window.location.href)}return o&&decodeURIComponent(o[1].replace(/\+/g," "))}function pLoadScriptGlobal(e){var t,o=document.getElementsByTagName("script")[0];(t=document.createElement("script")).src=e,t.setAttribute("async",!0),o.parentNode.insertBefore(t,o)}function pSetCookieGlobal(e,t,o){var n=new Date;n.setDate(n.getDate()+o);var i=escape(t)+(null==o?"":"; expires="+n.toUTCString())+"; path=/";document.cookie=e+"="+i}function pEncodeHtml(e){return jQuery("<div/>").text(e).html()}function pDecodeHtml(e){return jQuery("<div/>").html(e).text()}function checkDoTutorialFunc(typeNub,stepNub){eval("typeof doTutorialType"+typeNub+"Step"+stepNub+' == "function"')&&eval("doTutorialType"+typeNub+"Step"+stepNub+"();")}function tutorialStepDone(e,t){var o={typeId:e,stepCompleted:t};jQuery.post("/?cmd=co-tutorial",o,(function(t){var o=t.split("|");o[0]&&checkDoTutorialFunc(e,o[1])}))}jQuery(window).bind("popstate",(function(data){data.originalEvent&&data.originalEvent.state&&data.originalEvent.state.prCustm&&(data.originalEvent.state.func?eval(data.originalEvent.state.func)(data.originalEvent.state.funcParam):location.reload(!0))}));var keyDownBound=!1,prevLetterTime;function checkAndBindKeyDown(){keyDownBound||(keyDownBound=!0,jQuery(document).bind("keydown",(function(e){var t=jQuery(e.target);if(t.hasClass("drpAttchKeydown")){if(38==e.keyCode){e.preventDefault(),e.stopPropagation();var o=t.children(".cardDropdown");(c=(a=o.children(".slctd")).length&&!a.is(o.children(":first"))?a.prev():o.children(":last")).trigger("click",[t,o,c,!0]),drpScrollToSlct(o,c)}else if(40==e.keyCode){e.preventDefault(),e.stopPropagation();o=t.children(".cardDropdown");(c=(a=o.children(".slctd")).length&&!a.is(o.children(":last"))?a.next():o.children(":first")).trigger("click",[t,o,c,!0]),drpScrollToSlct(o,c)}else if(13==e.keyCode)e.preventDefault(),e.stopPropagation(),t.closest(".sbHomeCard").find(".nextCard").click();else if(9==e.keyCode)drpClose(t.children(".cardDropdown"));else if(e.keyCode>47&&e.keyCode<58||e.keyCode>95&&e.keyCode<106||e.keyCode>64&&e.keyCode<91){var n=String.fromCharCode(e.keyCode).toLowerCase();e.keyCode>95&&e.keyCode<106&&(n=e.keyCode-96);var i=(o=t.children(".cardDropdown")).data("previousLetter"),r=i?i+""+n:n+"",a=o.children("span.slctd");o.data("previousLetter",r),clearTimeout(prevLetterTime),prevLetterTime=setTimeout((function(){o.removeData("previousLetter")}),1e3);var s=!1;if(r.length>1&&a.text().substring(0,r.length).toLowerCase()==r?s=!0:o.children("span").each((function(){var e=jQuery(this);if(e.text().substring(0,r.length).toLowerCase()==r)return e.index()<=a.index()&&1==r.length||(e.trigger("click",[t,o,e,!0]),drpScrollToSlct(o,e),s=!0,!1)})),!s)if(a.text().substring(0,r.length).toLowerCase()==n)for(var l=o.children("span"),d=a.index();d<l.length;d++){var c;if((c=jQuery(l[d])).text().substring(0,1).toLowerCase()==n)return c.trigger("click",[t,o,c,!0]),drpScrollToSlct(o,c),o.data("previousLetter",n),s=!0,!1}else o.children("span").each((function(){var e=jQuery(this);if(e.text().substring(0,1).toLowerCase()==n)return a.text().substring(0,1).toLowerCase()==n&&e.index()<=a.index()||(e.trigger("click",[t,o,e,!0]),drpScrollToSlct(o,e),s=!0,!1)}))}}else t.hasClass("inputField")&&13==e.keyCode&&(e.preventDefault(),e.stopPropagation(),t.closest(".sbHomeCard").find(".nextCard").click())})))}function setTabindex(e,t){e.each((function(e){jQuery(this).attr("tabindex",e+t)}))}function winMinHeight(){var e=$(window).height(),t=$("body"),o=t.outerHeight(),n=$("#confirmEmailBarOuter").outerHeight(),i=$("#sbGlobalNav").outerHeight(),r=$("#titlesOuterCont").outerHeight();e>o?t.css("min-height",e-n-i-r):t.css("min-height","auto")}function onSBExtensionPresent(){sbGlbl.onAnyExtensionPresent(sbGlbl.onSBExtensionPresent)}function onSBSearchExtensionPresent(){sbGlbl.onAnyExtensionPresent(sbGlbl.onSBSearchExtensionPresent)}$((function(){var e=$(".drpAttchKeydown");e.length&&(setTabindex(e,100),checkAndBindKeyDown())})),$(window).load((function(){winMinHeight()})),void 0===window.sbPage&&(window.sbPage={}),sbPage.$window=$(window),sbPage.$$html=document.documentElement,sbPage.$$body=document.body,sbPage.objHeaderBlocks={},sbPage.strTourActiveClass="isTourActive",sbPage.strTourNotActiveClass="isTourNotActive",sbPage.strTourShownClass="isTourShown",sbPage.strTourNotShownClass="isTourNotShown",sbPage.strQuickLookActiveAttribute="boolIsQuickLookActive",sbPage.$html=$(sbPage.$$html),sbPage.arrHtmlClassList=sbPage.$$html.classList,sbPage.$body=$(sbPage.$$body),sbPage.arrBodyClassList=sbPage.$$body.classList,function(){var e,t,o=sbPage.$$html,n=o.id;function i(){var e=o.clientWidth,t=0!==e?e:window.innerWidth||0;"string"==typeof sbPage.strViewport&&(sbPage.strViewportPrevious=sbPage.strViewport);var n=sbPage.strViewportPrevious;if(t<768?sbPage.strViewport="tiny":t>=768&&t<1024?sbPage.strViewport="narrow":t>=1024&&t<1360?sbPage.strViewport="medium":t>=1360&&(sbPage.strViewport="wide"),"string"==typeof n&&""!==n&&n!==sbPage.strViewport){var i=new CustomEvent("viewportChange",{detail:{strViewportPrevious:n,strViewport:sbPage.strViewport}});window.dispatchEvent(i)}}"undefined"==typeof sbGlbl&&(sbGlbl={}),void 0===sbGlbl.onSBExtensionPresent&&(sbGlbl.onSBExtensionPresent=[],sbGlbl.onSBSearchExtensionPresent=[],sbGlbl.onAnyExtensionPresent=function(e){for(var t=e.length,o=0;o<t;o++){var n=e[o];try{n()}catch(e){}}}),/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)?(t="mobileHtml",e="isMobile",sbGlbl.isMobile=!0):(t="notMobileHtml",e="isNotMobile",sbGlbl.isMobile=!1),sbPage.arrHtmlClassList.add(e),void 0!==n&&""!==n||(o.id=t),sbPage.strViewportPrevious="",i(),window.addEventListener("resize",(function(){i()}))}();