sbGlbl.sbGw=function(){$(".homePageSliderInner").sbSlider();var cachedYoutubeVideo=welcomeVid,sbMiddleSlider=$("#sbSplashSlideContainerInner"),middleSliderFn=sbMiddleSlider.data("sbSlider"),hideScInput=!0,$window=$(window);sbGlbl.screenWidth=document.body.clientWidth,$(".sbHomeSliderTrigger").click((function(){var e=$(this).attr("data-goto-index");$("document, html, body").animate({scrollTop:sbMiddleSlider.offset().top-70},300),middleSliderFn.gotoSlideByIndex(e)})),$(".homeSignUpBtn").click((function(){$("document, html, body").animate({scrollTop:0},300,(function(){$("#sbxJxRegEmail").focus()}))})),$(".triggerVideo").live("click",(function(){$("#newWelcomeVid").fadeIn("fast").attr("src",cachedYoutubeVideo)})),$("#sbxJxRegBtnSubmit").live("keyup",(function(e){13==(e.which||e.keyCode)&&sbxJxRegFunctions.handleRegister(!1,window.customRedirectUrl)}));var socialApiCalls={facebook:["//graph.facebook.com/?id=37122264757","data.likes"],twitter:["//api.twitter.com/1/users/show.json?screen_name=swagbucks","data.followers_count"],youtube:["//gdata.youtube.com/feeds/api/users/swagbucks?alt=json","data.entry.yt$statistics.totalUploadViews"]};function getSocialData(url,id){$.getJSON(url+"&callback=?",(function(data){var pathToInfo=socialApiCalls[id.toLowerCase()][1];$("#homeSocial"+id).html(sbHelpers.formatNumbersWithCommas(eval("("+pathToInfo+")")))}))}return $(".homeSocial").each((function(){})),$(window).load((function(){$("body").removeClass("preload")})),$("#templateFourVideoWrap").bind("click",(function(){var e=$("#templateFourVid");$(this).unbind("click"),e.attr("src",e.attr("src")+"&autoplay=1&wmode=opaque").delay(20).fadeIn("fast")})),{closeSignUpPop:function(){sbGlbl.sbTb.closePop()},openWelcomVidPop:function(){if(sbGlbl.screenWidth>670){var e=$("#homeSignUpVidPop").find("iframe");e.attr("src",cachedYoutubeVideo),$("#lpContainer").addClass("blur"),sbGlbl.sbTb.openPop("homeSignUpVidPop",{onHide:function(){e.attr("src",""),$("#lpContainer").removeClass("blur")}})}else $("#videoImg").add("#lpHeaderVideoCta").after('<div id="welcomeVidFrame"><iframe src="'+cachedYoutubeVideo+'" allowfullscreen></iframe></div>').remove()}}}();