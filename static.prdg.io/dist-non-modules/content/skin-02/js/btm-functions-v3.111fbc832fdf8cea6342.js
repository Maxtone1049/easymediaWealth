var parentCat,curParentCatID="",isInSubCat=!1,seeAll=document.getElementById("cat--999");function subcatPopout(e,t){""!=curParentCatID&&(document.getElementById("cat-"+curParentCatID).className="isParent",document.getElementById("cat-"+curParentCatID+"-subList").style.display="none",curParentCatID="");var l=document.getElementById("cat-"+t).offsetTop;document.getElementById("cat-"+t).className="navSelected navSelectedParent",document.getElementById("cat-"+t+"-subList").style.display="block",document.getElementById("cat-"+t+"-subList").style.top=l-2+"px",curParentCatID=t,cancelBubbleEvent(e)}seeAll&&(seeAll.href="indexca85.html?cmd=sb-list&amp;id=-999&amp;srt=3"),document.getElementsByTagName("body")[0].onmouseover=function(){""!=curParentCatID&&(document.getElementById("cat-"+curParentCatID).className="isParent",document.getElementById("cat-"+curParentCatID+"-subList").style.display="none",curParentCatID=""),isShowAll&&hideAll()};var isShowAll=!1,wasShowAll=!1;function showAll(e){document.getElementById("catsDrop").style.display="",isShowAll=!0,wasShowAll=!0,cancelBubbleEvent(e)}function hideAll(e){document.getElementById("catsDrop").style.display="none",isShowAll=!1,wasShowAll=!1}function dontHide(e){isShowAll=!1}function enableHide(e){isShowAll=wasShowAll}function cancelBubbleEvent(e){(e=e||window.event).cancelBubble=!0,e.stopPropagation&&e.stopPropagation()}var objTabs=new Array,tabClasses="tabSlct highlight3";function toggleTab(e,t){var l,n=document.getElementById(t+e),a=objTabs[t];null==a&&(a=1);var s=document.getElementById(t+a);l=s.className;for(var o=tabClasses.split(" "),c=0;c<o.length;c++)l=l.replace(new RegExp(o[c],"g"),"");s.className=l,document.getElementById(t+a+"_0").style.display="none",document.getElementById(t+e+"_0").style.display="block",n.className=n.className+" "+tabClasses,objTabs[t]=e}function toggleLoginType(e){"SB"==e?(curType="SB",otherType="FB"):(curType="FB",otherType="SB"),document.getElementById("loginTab"+curType).className="opt optSlct highlight6",document.getElementById("loginTab"+otherType).className="opt",document.getElementById("login"+curType).style.display="",document.getElementById("login"+otherType).style.display="none"}