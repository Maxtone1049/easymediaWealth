var parentCat,curParentCatID="",isInSubCat=!1,seeAll=document.getElementById("cat--999");function subcatPopout(e,t){""!=curParentCatID&&(document.getElementById("cat-"+curParentCatID).className="isParent",document.getElementById("cat-"+curParentCatID+"-subList").style.display="none",curParentCatID="");var a=document.getElementById("cat-"+t).offsetTop;document.getElementById("cat-"+t).className="navSelected navSelectedParent",document.getElementById("cat-"+t+"-subList").style.display="block",document.getElementById("cat-"+t+"-subList").style.top=a-2+"px",curParentCatID=t,cancelBubbleEvent(e)}seeAll&&(seeAll.href="../index8ba8.html?cmd=sb-list&amp;id=-999"),document.getElementsByTagName("body")[0].onmouseover=function(){""!=curParentCatID&&(document.getElementById("cat-"+curParentCatID).className="isParent",document.getElementById("cat-"+curParentCatID+"-subList").style.display="none",curParentCatID=""),isShowAll&&hideAll()};var isShowAll=!1,wasShowAll=!1;function showAll(e){document.getElementById("catsDrop").style.display="",isShowAll=!0,wasShowAll=!0,cancelBubbleEvent(e)}function hideAll(e){document.getElementById("catsDrop").style.display="none",isShowAll=!1,wasShowAll=!1}function dontHide(e){isShowAll=!1}function enableHide(e){isShowAll=wasShowAll}function cancelBubbleEvent(e){(e=e||window.event).cancelBubble=!0,e.stopPropagation&&e.stopPropagation()}var objTabs=new Array,tabClasses="tabSlct highlight3";function toggleTab(e,t){var a,l=document.getElementById(t+e),n=objTabs[t];null==n&&(n=1);var s=document.getElementById(t+n);a=s.className;for(var c=tabClasses.split(" "),o=0;o<c.length;o++)a=a.replace(new RegExp(c[o],"g"),"");s.className=a,document.getElementById(t+n+"_cont").style.display="none",document.getElementById(t+e+"_cont").style.display="block",l.className=l.className+" "+tabClasses,objTabs[t]=e}