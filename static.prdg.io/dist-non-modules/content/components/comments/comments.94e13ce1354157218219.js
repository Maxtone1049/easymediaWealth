"undefined"==typeof launchStPop&&(launchStPop=function(e,t,n,o){alert(t+"\n\n"+o.replace(/(<.*?>)/gi,""))}),"undefined"==typeof hasCommentRedesign&&(hasCommentRedesign=!1),"undefined"==typeof hasRatings&&(hasRatings=!1),"undefined"==typeof countAllLevels&&(countAllLevels=!1);var staticCommentCount=50,_sortField="",_extCall=0,currentCommentCount=50,_showAll=!1,_replyPost=!1,initLoadComments=!0,totalRwsCount=0,_parentid,postMsg={11:'<b class="msgadmin">Comment Under Review</b>',12:'<b class="msgadmin">Comment Removed</b>'},memberId,subjectId,memberName,i=0,defaultSort=1,rating_count=0,rating_sum=0,subjectType=0,hasMemberRating=!1,serverPrefix="",allCount=0,countPostComment=0,commentRenderInterval=staticCommentCount,commentLastLoaded=0,loadCommentsInInterval=!1,loadedAll=!0,loadUrlPrefix="../index.html",commentsCachingEnabled=!1,commData,loadJS=!1,subjectRating=0,dateFormat=getDefaultDateFormat(),commentHeading="Add a Comment",reviewLabel="Comment",cmtThread={0:{level:0,children:[]}},ratingThreshold=3,urlTester=new RegExp(/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/),postLengthThreshold=50,_sbAdminCommenters={2318682:0,2318865:0,2318866:0,4923587:0};function getDefaultDateFormat(){return"undefined"!=typeof defaultDateFormat?defaultDateFormat:"%m.%d.%y"}function getCommentsCount(){if(xmlHttp=new XMLHttpRequest,null==xmlHttp)return hideLoading(),void alert("Your browser does not support Ajax HTTP");var e=serverPrefix+loadUrlPrefix+"?cmd=co-cmnt-count&subjectids="+subjectId+"&subjecttype="+subjectType+"&hasMemberRating="+hasRatings;xmlHttp.onreadystatechange=getCommentsCountResult,xmlHttp.open("GET",e,!0),xmlHttp.send(null)}function getCommentsCountResult(){if(4==xmlHttp.readyState||"complete"==xmlHttp.readyState){var result=xmlHttp.responseText.split("|");1==result[0]&&(null!=result[1]&&""!=result[1]&&"[]"!=result[1]&&(totalRwsCount=eval(result[1])[0][1],document.getElementById("totalRws").innerHTML=totalRwsCount,document.getElementById("totalRwsPlural").style.display=1==totalRwsCount?"none":""),hasRatings?(hasMemberRating=eval(result[2]),hasMemberRating&&(document.getElementById("postRatingCont").style.display="none"),0!=result[4]&&0!=result[5]&&(subjectRating=parseInt(result[4]),rating_count=parseInt(result[5]),renderRating())):null!=document.getElementById("postRatingCont")&&(document.getElementById("postRatingCont").style.display="none"),totalRwsCount>staticCommentCount&&$("#totalRwsRecent").show())}}function getComments(){if(xmlHttp=new XMLHttpRequest,null==xmlHttp)return hideLoading(),void alert("Your browser does not support Ajax HTTP");var e=serverPrefix+loadUrlPrefix+"?cmd=co-cmnts-cmnts&subjectid="+subjectId+"&subjecttype="+subjectType+(commentsCachingEnabled?"":"&sid="+Math.random());xmlHttp.onreadystatechange=getCommentsResult,xmlHttp.open("GET",e,!0),xmlHttp.send(null)}function getCommentsResult(){if(4==xmlHttp.readyState||"complete"==xmlHttp.readyState){var result=xmlHttp.responseText.split("|");1==result[0]&&null!=result[1]&&""!=result[1]&&((memberId>0||"[]"!=result[1])&&(document.getElementById("top_cmnt_div").style.display="block"),addComments(eval(result[1]))),hasRatings&&hasMemberRating&&(document.getElementById("postRatingCont").style.display="none"),_showAll?renderRemainder():_replyPost?(_replyPost=!1,getReplyPost()):renderSortComments(_sortField,_extCall),hideLoading()}}function loadCommentsJS(e,t,n,o,a,s,l,r,i,m){var d,c,u,p;if(staticCommentCount=sbGlbl.objComments.commentsCountOnLoad,commentRenderInterval=sbGlbl.objComments.commentsCountOnLoad,currentCommentCount=sbGlbl.objComments.commentsCountOnLoad,void 0!==r&&(dateFormat=r),void 0!==i&&(commentHeading=i),void 0!==m&&(reviewLabel=m),subjectType=o,a&&(serverPrefix=a),s&&(loadUrlPrefix=s),l&&(commentsCachingEnabled=!0),showLoading(),memberName=n,memberId=t,subjectId=e,null!=document.getElementById("comments")&&(document.getElementById("comments").value="",document.getElementById("comments").disabled=!1),"undefined"!=typeof sbGlbMember&&0!=sbGlbMember||!(d=document.getElementById("commentsCont"))||(d.className="loggedOut"),memberId>0&&(c=document.getElementsByClassName("comment_box"))&&1==c.length&&(c=c[0])){var g="";if(g+='<div class="comment_hdn" ><span class="boldTxt"><span>'+commentHeading+'</span>&nbsp;&mdash;&nbsp;No  HTML Please. Learn more about commenting rules and terms of use <a target="_blank" rel="noopener" href="http://blog.swagbucks.com/2010/11/coming-soon-swag-store-reviews.html" style="color:#A4A4A4; text-decoration:underline;">here</a></span></div><textarea  class="txt_area" id="comments"></textarea><div class="post_comment"><span class="post_dv"><a href="#" rel="nofollow" onclick="postComments('+memberId+'); return false;" class="post_btn">Post Comment</a></span>',hasRatings){if(g+='<span id="postRatingCont"><span class="rate_dv" color="#A4A4A4">Rate:</span><input type="hidden" id="rate_count" value="0" /><span class="star_dv">',hasCommentRedesign)for(var b=1;b<=5;b++)g+='<a onfocus="this.blur()" href="#" rel="nofollow" id="ss'+b+'" onmouseover="commentRate('+b+');" onmouseout="clearCommentRate();" onclick="getCommentRating('+b+'); return false;"><span id="s'+b+'" class="commentsUserStarRating"></span></a>';else for(b=1;b<=5;b++){g+='<a onfocus="this.blur()" href="#" rel="nofollow" id="ss'+b+'" onmouseover="commentRate('+b+');" onmouseout="clearCommentRate();" onclick="getCommentRating('+b+'); return false;"><img id="s'+b+'" src="'+(window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/star-gray.0505e68961300b337d54.jpg")+'" alt="" loading="lazy" /></a>'}g+='</span></span><div class="clear"></div>'}g+='</div><div class="clear"></div>',7==o&&(c.className="comment_box isBlogger"),c.innerHTML=g}if(u=document.getElementById("top_cmnt_div")){var v="";v+='<span class="review_lbl_id"><var id="totalRws">&nbsp;</var>&nbsp;'+reviewLabel+'<span id="totalRwsPlural">s</span></span><div id="commentSortCont"><span>Sort by</span><select id="sort_item_id" onchange="sortComments(this.value, false)"><option value="0" >Oldest</option><option value="1" >Most Recent</option><option value="2" >Most Popular</option>',hasRatings&&(v+='<option value="3" >Highest Rating</option><option value="4" >Lowest Rating</option>'),v+="</select></div>",u.innerHTML=v}0==o&&(p=document.getElementById("main_cmnt_div"))&&(p.className="isRewardStore"),loadJS=!0,getCommentsJS()}function getCommentsJS(){if(xmlHttp=new XMLHttpRequest,null==xmlHttp)return hideLoading(),void alert("Your browser does not support Ajax HTTP");var e=serverPrefix+loadUrlPrefix+"?cmd=co-cmnts-cmnts&subjectid="+subjectId+"&subjecttype="+subjectType+(commentsCachingEnabled?"":"&sid="+Math.random());xmlHttp.onreadystatechange=getCommentsJSResult,xmlHttp.open("GET",e,!0),xmlHttp.send(null)}function getCommentsJSResult(){if(4==xmlHttp.readyState||"complete"==xmlHttp.readyState){var result=xmlHttp.responseText.split("|");1==result[0]&&null!=result[1]&&""!=result[1]&&((memberId>0||"[]"!=result[1])&&(document.getElementById("top_cmnt_div").style.display="block"),addComments(eval(result[1])),totalRwsCount>staticCommentCount&&$("#totalRwsRecent").show()),hasRatings&&hasMemberRating&&(document.getElementById("postRatingCont").style.display="none"),hideLoading()}}function addComments(e){rating_count=0;var t,n,o,a=e[0],s=e[1];allCount=a.length;for(var l=[],r=0;r<allCount;r++)n={cid:(o=a[r])[0],post:"11"==o[7]||"12"==o[7]?postMsg[o[7]]:o[1],commentDate:o[2],lastDate:o[2],memId:o[3],likedCount:parseInt(o[4]),lastLiker:o[5],parentID:o[6],status:o[7],rating:o[8],likerName:o[9],memberName:o[10],isProfilePublic:o[11],hasProfileImage:o[12],isMemberLike:s[o[0]]?memberId:"",children:[],filterScore:0},(t=cmtThread[n.parentID])&&(n.level=t.level+1,n.dv=createCommentDiv(n,!0),cmtThread[n.cid]=n,n.ancestor=1==n.level?n:t.ancestor,t.children.push(n),n.ancestor.likedCount<n.likedCount&&(n.ancestor.likedCount=n.likedCount),n.ancestor.lastDate<n.commentDate&&(n.ancestor.lastDate=n.commentDate),hasRatings&&0==n.parentID&&(n.rating>0&&(rating_sum+=parseInt(n.rating),rating_count++),n.memId==memberId&&(hasMemberRating=!0)),memberId||(l.indexOf(n.post)<0?l.push(n.post):n.duplicated=!0,n.filterScore=calculateFilterScore(n)));hasRatings&&renderRating(),memberId||filterComments(),renderComments()}function calculateFilterScore(e){for(var t=0,n=e.post,o=[Number(e.rating)>ratingThreshold,!urlTester.test(n),!n.toLowerCase().includes("swaggy"),n!==n.toUpperCase(),n.length>=postLengthThreshold,!e.duplicated,e.isProfilePublic,e.hasProfileImage],a=0;a<o.length;a++)o[a]&&(t+=Math.pow(2,o.length-1-a));return t}function renderRating(e){(0==subjectRating||e)&&(subjectRating=rating_count>0&&rating_sum>0?hasCommentRedesign?Math.ceil(rating_sum/rating_count*2)/2*10:Math.ceil(rating_sum/rating_count):0),subjectRateCont=document.getElementById("subjectRating"),subjectRateCont.style.display="none",subjectRating>0&&(hasCommentRedesign?subjectRateCont.className="sbRatingComment"+subjectRating:subjectRateCont.style.backgroundPosition="left -"+16*(subjectRating-1)+"px",$.browser.msie&&$.browser.version.substr(0,1)<8?subjectRateCont.style.display="":$(subjectRateCont).slideDown("slow"));var t=document.getElementById("subjectRatingC");t&&(t.innerHTML="(<var>"+rating_count+"</var>&nbsp;review"+(1==rating_count?"":"s")+")")}function renderThreadChildren(e){if(e.children.length>0){for(var t,n=0;n<e.children.length;n++)t=e.children[n],document.getElementById("cm"+e.cid).appendChild(t.dv),t.children.length>0?(document.getElementById("rp"+t.cid).innerHTML=document.getElementById("rp_coll"+t.cid).innerHTML=(t.children.length>1?t.children.length+" Replies":" 1 Reply")+"&nbsp;",renderThreadChildren(t)):document.getElementById("rpl"+t.cid).style.display="none";document.getElementById("rp"+e.cid).innerHTML=document.getElementById("rp_coll"+e.cid).innerHTML=(e.children.length>1?e.children.length+" Replies":" 1 Reply")+"&nbsp;"}else document.getElementById("rpl"+e.cid).style.display="none"}function filterComments(){var e=cmtThread[0].children;if(e.length>staticCommentCount){var t=e.slice().sort((function(e,t){return t.filterScore-e.filterScore}))[staticCommentCount-1].filterScore;e=e.filter((function(e){return e.children=[],!Number(e.parentID)&&e.filterScore>=t}))}}function renderComments(){var myArray=cmtThread[0].children;loadJS&&myArray.sort(eval("sort"+defaultSort));var totalRws=myArray.length;if(loadJS&&(document.getElementById("sort_item_id").value=defaultSort,totalRwsCount=countAllLevels?allCount:totalRws),document.getElementById("totalRws").innerHTML=totalRwsCount,1==totalRwsCount?document.getElementById("totalRwsPlural").style.display="none":(document.getElementById("totalRwsPlural").style.display="",totalRws>commentRenderInterval&&(loadedAll=!1,totalRws=commentRenderInterval)),loadJS){for(var i=0;i<totalRws;i++)document.getElementById("main_cmnt_div").appendChild(myArray[i].dv),renderThreadChildren(myArray[i]);document.getElementById("main_cmnt_div").children.length>staticCommentCount?$("#totalRwsRecent").show():$("#totalRwsRecent").hide()}if(commentLastLoaded=totalRws,sbPage.$content.bind("scroll",lazyLoadImgs),hideLoading(),$("#commentsCont .spanMore").mouseleave((function(){clearLikeDiv($(this))})),lazyLoadImgs(),!loadJS)for(var grandParent=document.getElementById("main_cmnt_div"),grandParentL=grandParent.childNodes.length,myArray=cmtThread[0].children,j=0,i=0;j<grandParentL;j++)"#text"!=grandParent.childNodes[j].nodeName&&(myArray[i].dv=grandParent.childNodes[j],i++)}function lazyLoadImgs(){var e=$(window).scrollTop()+$(window).height();$(".lazyLoadImg").length?$(".lazyLoadImg").each((function(){if(!($(this).offset().top<=e))return!1;$(this).removeClass("lazyLoadImg");var t=$(this).find("img");t.attr("src",t.attr("src1")).fadeIn()})):sbPage.$content.unbind("scroll",lazyLoadImgs)}function goBackToRegForm(){document.getElementById("sbRegForm").scrollIntoView()}function cmtsShowAll(){_showAll=!0,loadJS?renderRemainder():initLoadComments?(showLoading(),getComments(),initLoadComments=!1):renderRemainder()}function renderRemainder(){if(loadCommentsInInterval)renderMore();else{document.getElementById("totalRwsRecent")&&(document.getElementById("totalRwsRecent").style.display="none");for(var e=cmtThread[0].children,t=(e.length,commentRenderInterval+countPostComment);t<e.length;t++){var n=$(e[t].dv).hide();$.browser.msie&&$.browser.version.substr(0,1)<8?n.appendTo(document.getElementById("main_cmnt_div")).show():n.appendTo(document.getElementById("main_cmnt_div")).slideDown().show(),renderThreadChildren(e[t])}loadedAll=!0,$(".spanMore").mouseleave((function(){clearLikeDiv($(this))})),sbPage.$content.bind("scroll",lazyLoadImgs),lazyLoadImgs()}}function revertImg(e){var t=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/star-gray.0505e68961300b337d54.jpg";$(e).attr("onerror","").attr("src",t)}function getCommentRating(e,t){t=t||!1;document.getElementById("rate_count").value=e,commentRate(e,t)}function commentRate(e,t){t=!!t;if(hasCommentRedesign)for(var n=1;n<6;n++)document.getElementById("s"+n).className=n<=e?"commentsUserStarRating starRatingBlue":"commentsUserStarRating";else for(n=1;n<6;n++){var o=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/star-blue.12a325a17662322ae1f4.jpg",a=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/star-gray.0505e68961300b337d54.jpg";document.getElementById("s"+n).src=n<=e?o:a}}function clearCommentRate(e){e=e||!1;var t=document.getElementById("rate_count").value;""==t&&(t=0),commentRate(t,e)}function postComments(e){if(void 0!==sbGlbl.objComments&&sbGlbl.objComments.canPost){var t,n=0;if((commData=Trim(document.getElementById("comments").value)).length>2e3)return banner.showError("Comments are limited to 2000 characters.<br><small>You currently have "+commData.length+" characters.</small>"),void document.getElementById("comments").focus();if(""==commData)return banner.showError("Please enter a comment."),void document.getElementById("comments").focus();if(hasRatings&&!hasMemberRating){if(0==(n=parseInt(document.getElementById("rate_count").value)))return banner.showError("A rating is required in order to post a review."),void document.getElementById("comments").focus();t=1}else t=0;hasRatings&&(document.getElementById("rate_count").value="0"),showLoading(),sbHelpers.xhrPost({ignoreXRequestedWithRequestHeader:!0,withCredentials:!0,url:serverPrefix+"/?cmd=co-cmnt-post",data:{mid:sbGlbMember,comments:encodeURIComponent(commData),rating:n,subjectid:subjectId,subjecttype:subjectType,prating:t},success:getCommentsPostResult,error:window.handlePostCommentError})}else banner.showError("Your commenting privileges have been revoked. If you think you've reached this message in error, please contact Customer Support through our FAQ page.")}function getCommentsPostResult(e){var t=e.split("|");if("1"==t[0]){if(document.getElementById("comments").value="",hasRatings)for(var n=1;n<=5;n++){var o=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/star-gray.0505e68961300b337d54.jpg";document.getElementById("s"+n).src=o}if("0"==t[1]){document.getElementById("top_cmnt_div").style.display="block";var a=createComment(t,0);a.level=1,a.dv=createCommentDiv(a),a.ancestor=a,a.ancestor.lastDate=a.commentDate,(loadJS||0!=cmtThread[0].children.length)&&cmtThread[0].children.unshift(a),allCount++,countPostComment++,$("#main_cmnt_div").prepend(a.dv),document.getElementById("rpl"+a.cid).style.display="none";var s=countAllLevels?allCount:cmtThread[0].children.length;loadJS?document.getElementById("totalRws").innerHTML=s:(totalRwsCount++,document.getElementById("totalRws").innerHTML=totalRwsCount),document.getElementById("totalRwsPlural").style.display=1==s?"none":"";var l=parseInt(t[4]);hasRatings&&l>0&&(rating_count++,rating_sum+=l,renderRating(!0),hasMemberRating=!0,document.getElementById("postRatingCont").style.display="none")}else banner.showInfo("Your comment is under review.")}else"1"==t[1]?banner.showError("Comments are limited to 2000 characters.<br><small>You currently have "+commData.length+" characters.</small>"):window.handlePostCommentError();hideLoading()}function createComment(e,t){var n=new Date,o=n.getFullYear()+"-"+(n.getMonth()+1)+"-"+n.getDate()+" "+n.getHours()+":"+n.getMinutes()+":"+n.getSeconds(),a={cid:e[6],post:e[2],commentDate:o,memId:e[3],likedCount:0,lastLiker:0,parentID:t,status:0,rating:e[4],likerName:"",memberName:e[5],isProfilePublic:"true"==e[7],children:[],isMemberLike:0};return cmtThread[a.cid]=a,a}function createCommentDiv(e,t){var n,o=e.commentDate.split(" ")[0].split("-"),a=dateFormat.split("."),s="";for(var l in a)"%d"==a[l]&&(s+=o[2]+"/"),"%m"==a[l]&&(s+=o[1]+"/"),"%y"==a[l]&&(s+=o[0].substring(2,4));n=document.createElement("div");var r,i="",m="",d=e.cid;0==e.parentID?(hasRatings&&e.rating>0&&(i='<div class="rating_area" style="background-position:left -'+(hasCommentRedesign?37.33*e.rating:16*(e.rating-1))+'px;"></div>'),m=" topLevelPost"):e.level<6?n.style.cssText="padding-left:50px; margin-top:10px;":6==e.level?(d=e.parentID,n.style.cssText="padding-left:50px; margin-top:10px;"):n.style.cssText="padding-left:6px; margin-top:10px",n.setAttribute("id","cm"+e.cid),n.setAttribute("class","cmMediaRec"),r=e.memberName.length<21?e.memberName:'<span title="'+e.memberName+'">'+e.memberName.substring(0,20)+"..</span>",e.isProfilePublic&&(r='<a href="https://www.swagbucks.com/profile/'+e.memberName+'" target="_blank" rel="noopener" class="sbCommentProfileLink sbPrimaryColor" data-notranslate>'+r+"</a>");var c=!1,u="";e.memId in _sbAdminCommenters&&(c=!0,u=" adminComment");var p="",g="src";t&&(p=" lazyLoadImg",g="src1");var b='<div class="reviews_area'+m+u+'" id="commentDivArea'+e.cid+'"><div class="review_left_area"><div class="user_area'+p+'"><img onerror="revertImg(this);" '+g+'="'+sbGlbl.objComments.profileHost+"/profile/"+e.memId+'.jpg" alt="" loading="lazy" /><var>'+r+'</var><br><span class="date">on <span class="notranslate">'+s+"</span></span>"+(hasCommentRedesign?"":'<div class="clear"></div></div></div><div class="review_right_area"><div class="top_rating_area">'+i+'<div class="top_button_area">');0==memberId||e.memId==memberId||e.status>10||1==e.status||c||void 0!==sbGlbl.objComments&&sbGlbl.objComments.flaggingBlocked?b+='<input name="" type="button" onfocus="this.blur();" id="flag_btn'+e.cid+'" class="flag_btn flgBtn_disenable" value="" disabled="true" />':b+='<input name="" type="button" onfocus="this.blur();" id="flag_btn'+e.cid+'" class="flag_btn" value="'+(hasCommentRedesign?"Report":"")+'" onclick="createFlag('+e.cid+","+memberId+')" />',hasCommentRedesign&&(b+='<div class="clear"></div></div></div><div class="review_right_area"><div class="top_rating_area">'+i+'<div class="top_button_area">'),0==memberId||e.memId==memberId||e.status>10||e.isMemberLike==memberId?b+='<input name="" type="button" onfocus="this.blur();" id="like_btn'+e.cid+'" class="link_btn_disenable" value="Like"/>':b+='<input name="" type="button" onfocus="this.blur();" id="like_btn'+e.cid+'" class="link_btn_enable" value="Like" onclick="addToLike('+memberId+","+e.cid+","+e.likedCount+')" />',b+='<div class="clear"></div></div>',0===e.likedCount?b+='<div id="showLastLiker'+e.cid+'"></div>':1===e.likedCount?b+='<div id="showLastLiker'+e.cid+'"><div class="top_rt_text_area'+p+'"><img onerror="revertImg(this);" '+g+'="'+sbGlbl.objComments.profileHost+"/profile/"+e.lastLiker+'.jpg"  alt="" style="width:15px;height:15px" loading="lazy" /><var class="blue_color">'+e.likerName+"</var> liked this&nbsp;&nbsp;</div></div>":b+='<div id="showLastLiker'+e.cid+'"><div class="top_rt_text_area'+p+'"><img onerror="revertImg(this);" '+g+'="'+sbGlbl.objComments.profileHost+"/profile/"+e.lastLiker+'.jpg"  alt="" style="width:15px;height:15px" loading="lazy" /><var class="blue_color">'+e.likerName+'</var> and <span class="blue_color spanMore" id="like'+e.cid+'" onmouseover="return getLikeInformation('+e.cid+',this);" style="position:absolute"><var>'+(e.likedCount-1)+'</var> others</span><span style="padding-left:'+(e.likedCount<11?45:e.likedCount<101?51:58)+'px;">&nbsp;liked this&nbsp;&nbsp;</span></div></div>';var v=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/btm_arow_rt.fc16a3acdabf95a3bfe6.jpg",h=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/btm_arow.c64a12885c936e6f2ab4.jpg";return b+='<div class="other_popUp"></div></div><div class="clear"></div><div class=" middle_text_area" id="commentText'+e.cid+'" data-notranslate>'+e.post+'</div><div class="reply_btm_area"><div class="reply_btn_left" id="rpl'+e.cid+'"><div class="reply_link"><span id="expand'+e.cid+'" style="display:none;"><a class="expand" style="cursor:pointer;" onclick="collapseThread('+e.cid+',this)"><img src="'+v+'" alt="" loading="lazy" /><b><span id="rp'+e.cid+'"></span> </b></a></span><span id="collapse'+e.cid+'" ><a class="collapse" style="cursor:pointer;" onclick="collapseThread('+e.cid+',this)"><img src="'+h+'" alt="" loading="lazy" /><b><span id="rp_coll'+e.cid+'"></span> </b></a></span></div></div></div><div class="reply_block" >',0==memberId||e.status>10?b+='<input id="replyText'+e.cid+'" type="button" onfocus="this.blur();" class="reply_btn_disenable" value="Reply" disabled="true"/><div class="clear"></div>':b+='<input id="replyText'+e.cid+'" type="button" onfocus="this.blur();" class="reply_btn_enable" value="Reply" onclick="clickReply('+e.cid+');" /><div class="clear"></div>',b+='<div id="d'+e.cid+'" style="display:none"  class="text_area"><div class="textAreaCont"><textarea  id="r'+e.cid+'" class="textarea"></textarea></div><div class="clear"></div></div><div class="clear"></div></div><div class="clear"></div></div><div class="clear"></div><input id="post'+e.cid+'" style="display:none;" type="button" onfocus="this.blur();" class="post_btn post_btn_reply" value="Post Reply" onclick="postReply('+e.cid+","+d+');" /><div class="clear"></div></div><div class="clear"></div>',n.innerHTML=b,n}function Trim(e){return e.replace(/^\s+|\s+$/g,"")}function createFlag(e,t){if(void 0!==sbGlbl.objComments&&sbGlbl.objComments.canPost){if(confirm("Are you sure you want to flag this comment?"))if(xmlHttp=new XMLHttpRequest,null!=xmlHttp){showLoading();var n=serverPrefix+"/?cmd=co-cmnt-flag&mid="+t+"&cid="+e+"&sid="+Math.random()+"&subjectid="+subjectId+"&subjecttype="+subjectType;xmlHttp.onreadystatechange=function(){getFlagResult(e)},xmlHttp.open("GET",n,!0),xmlHttp.send(null)}else alert("Your browser does not support Ajax HTTP")}else banner.showInfo("Your commenting privileges have been revoked. If you think you've reached this message in error, please contact Customer Support through our FAQ page.")}function getFlagResult(e){if(4==xmlHttp.readyState||"complete"==xmlHttp.readyState){var t=xmlHttp.responseText.split("|");if("1"==t[0])if(11==t[1]){var n=document.getElementById("commentText"+e);$(n).fadeOut("slow",(function(){$(this).html(postMsg[11]).fadeIn("slow")})),flgBtn=document.getElementById("flag_btn"+e),flgBtn.disabled=!0,flgBtn.className="flag_btn flgBtn_disenable",replyBtn=document.getElementById("replyText"+e),replyBtn.disabled=!0,replyBtn.className="reply_btn_disenable",likeBtn=document.getElementById("like_btn"+e),likeBtn.disabled=!0,likeBtn.className="link_btn_disenable"}else{var o=document.getElementById("commentDivArea"+e);$(o).fadeOut("slow",(function(){document.getElementById("cm"+e).removeChild(o)}))}else banner.showError("There was an unexpected error while flagging the comment");hideLoading()}}function showLoading(){comtFade=document.getElementById("commentsFade"),comtFade.style.display="",loadImg=document.getElementById("commentsFadeLoader");var e=$(comtFade).offset(),t=$(window).scrollTop()+$(window).height()/2,n=e.top+75>t?e.top-t+20:-26;$(loadImg).css("margin-top",n+"px")}function hideLoading(e){document.getElementById("commentsFade").style.display="none"}function sortComments(e,t){loadJS?renderSortComments(e,t):(_sortField=e,_extCall=t,initLoadComments?(currentCommentCount=document.getElementById("main_cmnt_div").childNodes.length-2,showLoading(),getComments(),initLoadComments=!1):renderSortComments(e,t))}function renderSortComments(sortField,extCall){var grandParent=document.getElementById("main_cmnt_div"),count=grandParent.children.length;renderRemainder();var grandParentL=grandParent.childNodes.length,myArray=cmtThread[0].children;myArray.sort(eval("sort"+sortField));for(var i=0;i<grandParentL;i++)grandParent.removeChild(grandParent.childNodes[0]);document.getElementById("main_cmnt_div").textContent="";for(var i=0;i<count;i++)grandParent.appendChild(myArray[i].dv);extCall?document.getElementById("sort_item_id").value=sortField:(sbPage.$content.bind("scroll",lazyLoadImgs),lazyLoadImgs()),totalRwsCount-countPostComment>staticCommentCount&&!_showAll&&$("#totalRwsRecent").show()}function sort0(e,t){return e.commentDate<t.commentDate?-1:e.commentDate>t.commentDate?1:0}function sort1(e,t){return t.lastDate<e.lastDate?-1:t.lastDate>e.lastDate?1:0}function sort2(e,t){return t.likedCount-e.likedCount}function sort3(e,t){return t.rating-e.rating}function sort4(e,t){return e.rating-t.rating}function clickReply(e){var t=document.getElementById("d"+e);if("block"==t.style.display){t.style.display="none";var n=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/reply_btn.6d0b911abaa99d843592.jpg";document.getElementById("post"+e).style.display="none",document.getElementById("replyText"+e).style.backgroundImage="url("+n+")",document.getElementById("r"+e).value=""}else{t.style.display="block";var o=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/reply_btn_active.1b9ced9acad40ef57f4c.png";document.getElementById("post"+e).style.display="",document.getElementById("replyText"+e).style.backgroundImage="url("+o+")"}}function postReply(e,t){if(_parentid=t,void 0!==sbGlbl.objComments&&sbGlbl.objComments.canPost){var n=(commData=Trim(document.getElementById("r"+e).value)).length;if(n>2e3){var o=1===n?"":"s";return banner.showError("Comments are limited to 2000 characters.<br><small>You currently have "+n+" character"+o+".</small>"),document.getElementById("r"+t).focus(),!1}if(""==commData)return banner.showError("Please enter a comment."),document.getElementById("r"+t).focus(),!1;document.getElementById("d"+e).style.display="none",document.getElementById("post"+e).style.display="none",document.getElementById("r"+e).value="";var a=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/comments/images/reply_btn_active.1b9ced9acad40ef57f4c.png";if(document.getElementById("replyText"+e).style.backgroundImage="url("+a+")",xmlHttp=new XMLHttpRequest,null==xmlHttp)return hideLoading(),void alert("Your browser does not support Ajax HTTP");loadJS?getReplyPost():(showLoading(),initLoadComments?(_replyPost=!0,getComments(),initLoadComments=!1):getReplyPost())}else banner.showInfo("Your commenting privileges have been revoked. If you think you've reached this message in error, please contact Customer Support through our FAQ page.")}function getReplyPost(){sbHelpers.xhrPost({ignoreXRequestedWithRequestHeader:!0,withCredentials:!0,url:serverPrefix+"/?cmd=co-cmnt-post",data:{mid:sbGlbMember,comments:encodeURIComponent(commData),pid:_parentid,subjectid:subjectId,subjecttype:subjectType},success:function(e){getReplyPostResult(e,_parentid)},error:window.handlePostCommentError})}function getReplyPostResult(e,t){var n=e.split("|");"1"==n[0]&&"0"==n[1]?renderReplyPost(n,t):"1"==n[0]?banner.showInfo("Your comment is under review."):"1"==n[1]?banner.showError("Comments are limited to 2000 characters.<br><small>You currently have"+commData.length+" characters.</small>"):"0"==n[1]?banner.showError("Please enter a comment."):banner.showError("There was an unexpected error while posting your comment."),hideLoading()}function renderReplyPost(e,t){var n=createComment(e,t),o=cmtThread[t];if(n.level=o.level+1,n.dv=createCommentDiv(n),n.ancestor=o.ancestor,n.likedCount>n.ancestor.likedCount&&(n.ancestor.likedCount=n.likedCount),n.ancestor.lastDate=n.commentDate,o.children.push(n),document.getElementById("cm"+t).appendChild(n.dv),document.getElementById("rp"+t).innerHTML=document.getElementById("rp_coll"+t).innerHTML=(o.children.length>1?o.children.length+" Replies":" 1 Reply")+"&nbsp;",document.getElementById("rpl"+t).style.display="",document.getElementById("rpl"+n.cid).style.display="none",allCount++,countAllLevels){var a=allCount;totalRwsCount++,document.getElementById("totalRws").innerHTML=totalRwsCount,document.getElementById("totalRwsPlural").style.display=1==a?"none":""}}function addToLike(e,t,n){void 0!==sbGlbl.objComments&&sbGlbl.objComments.canPost?(document.getElementById("like_btn"+t).className="link_btn_disenable",document.getElementById("like_btn"+t).disabled=!0,sbHelpers.xhrPost({ignoreXRequestedWithRequestHeader:!0,withCredentials:!0,url:serverPrefix+"/?cmd=co-cmnt-like",data:{mid:sbGlbMember,cid:t,subjectid:subjectId,subjecttype:subjectType},success:function(e){likeUpdate(t,n)},error:window.handlePostCommentError})):banner.showInfo("Your commenting privileges have been revoked. If you think you've reached this message in error, please contact Customer Support through our FAQ page.")}function likeUpdate(e,t){var n;4!=xmlHttp.readyState&&"complete"!=xmlHttp.readyState||("1"==xmlHttp.responseText.split("|")[0]?0==t?(n='<div class="top_rt_text_area"><img onerror="revertImg(this);" src="'+sbGlbl.objComments.profileHost+"/profile/"+memberId+'.jpg"  alt="" style="width:15px;height:15px" loading="lazy" /><var class="blue_color">'+memberName+"</var> liked this&nbsp;&nbsp;</div>",document.getElementById("showLastLiker"+e).innerHTML=n):(n='<div class="top_rt_text_area"><img onerror="revertImg(this);" src="'+sbGlbl.objComments.profileHost+"/profile/"+memberId+'.jpg"  alt="" style="width:15px;height:15px" loading="lazy" /><var class="blue_color">'+memberName+'</var> and <span class="blue_color spanMore" id="like'+e+'" onmouseover="return getLikeInformation('+e+',this);" style="position:absolute"><var>'+t+'</var> others</span><span style="padding-left:'+(45+(t>9?6:0))+'px;">&nbsp;liked this&nbsp;&nbsp;</span></div>',document.getElementById("showLastLiker"+e).innerHTML=n,$("#like"+e).mouseleave((function(){clearLikeDiv($(this))}))):banner.showError("There was an unexpected error liking this comment."))}function clearLikeDiv(e){$(e).children().hide()}function getLikeInformation(e,t){var n=t.getElementsByTagName("DIV")[0];if(n)n.style.display="";else{if(xmlHttp=new XMLHttpRequest,null==xmlHttp)return void alert("Your browser does not support Ajax HTTP");var o=serverPrefix+"/?cmd=co-cmnt-getlikes&cid="+e+"&sid="+Math.random();xmlHttp.onreadystatechange=function(){updateGetLikes(e,t)},xmlHttp.open("GET",o,!0),xmlHttp.send(null)}}function updateGetLikes(commentid,like){if(4==xmlHttp.readyState||"complete"==xmlHttp.readyState){var result=xmlHttp.responseText.split("|");if("1"==result[0]){for(var divLikes=document.createElement("div"),ar=eval(result[1]),element='<div class="otherArrow"></div><div class="otherCont"><div class="otherInnerInnerCont" style="overflow:hidden; overflow-y: auto;">',i=1;i<ar.length;i++)element+='<img onerror="revertImg(this);" src="'+sbGlbl.objComments.profileHost+"/profile/"+ar[i][1]+'.jpg" height="15px" width=15px" loading="lazy" />',element+="<span>"+ar[i][0]+"</span>",element+='<div class="clear" style="line-height:0"></div>';element+='</div><div class="otherOverlay"></div></div>',divLikes.innerHTML=element,divLikes.className="otherOuterCont",like.appendChild(divLikes)}else banner.showError("There was an unexpected error retrieving the users.")}}function collapseThread(e,t){var n="cm"+e,o=t.className,a=document.getElementById(n).childNodes;if("collapse"==o){for(var s=1;s<a.length;s++)a[s].style.display="none";document.getElementById("collapse"+e).style.display="none",document.getElementById("expand"+e).style.display=""}else{for(s=1;s<a.length;s++)a[s].style.display="block";document.getElementById("collapse"+e).style.display="",document.getElementById("expand"+e).style.display="none"}}function clearComments(){postMsg={11:'<b class="msgadmin">Comment Under Review</b>',12:'<b class="msgadmin">Comment Removed</b>'},memberId="",subjectId="",memberName="",i=0,rating_count=0,rating_sum=0,subjectType=0,hasMemberRating=!1,serverPrefix="",allCount=0,commentRenderInterval=staticCommentCount,commentLastLoaded=0,loadCommentsInInterval=!1,loadedAll=!0,dateFormat=getDefaultDateFormat(),commentHeading="Add a Comment",reviewLabel="Comment",cmtThread={0:{level:0,children:[]}}}!function(){"use strict";function e(){sbHelpers.showErrorMessage("There was an unexpected error while posting your comment.")}window.handlePostCommentError=e}(),$(document).ready((function(){$(".more_comments").length>0&&($("#top_cmnt_div").show(),document.getElementById("sort_item_id").value=defaultSort)}));