"undefined"==typeof sbGlbl&&(sbGlbl={}),"object"!=typeof sbGlbl.objPopup&&(sbGlbl.objPopup={strPopupIsShownClass:"sbPopupIsShown"});var sbxPopFunctions={fadeout:$("<div/>",{}),popContainer:$("<div/>",{id:"dlPluginChromePop"}),popInner:$("<div/>",{}),popClose:$("<a/>",{onclick:"sbxPopFunctions.hidePop(); return false;",href:"#"}),showPop:function(o,n,p){$(sbxPopFunctions.popContainer).addClass("sbPopContainer centeredmargin sbPopContainerVisible"),$(sbxPopFunctions.popInner).addClass("sbPopContent"),$(sbxPopFunctions.popClose).addClass("sbPopClose"),$(sbxPopFunctions.fadeout).appendTo("body"),o?($(sbxPopFunctions.popInner).appendTo(sbxPopFunctions.popContainer),$(sbxPopFunctions.popInner).html(o),$(sbxPopFunctions.popClose).appendTo(sbxPopFunctions.popContainer),$(sbxPopFunctions.popContainer).appendTo("body")):sbxPopFunctions.popContainer=n,$(sbxPopFunctions.fadeout).fadeIn(300,(function(){var o=$(sbxPopFunctions.popContainer).height(),n=$(sbxPopFunctions.popContainer).width();$(sbxPopFunctions.popContainer).css("margin-top","-"+o/2+"px"),$(sbxPopFunctions.popContainer).css("margin-left","-"+n/2+"px"),$(sbxPopFunctions.popContainer).fadeIn(),document.getElementById("sbxJxRegEmail").focus()})),document.getElementById("fadeCover").style.display="block",updateSsuStats("Viewed")},showPop2:function(o,n,p){$(sbxPopFunctions.fadeout).addClass("fadeout").css({opacity:.8}),$(sbxPopFunctions.popContainer).addClass("sbPopContainer centeredmargin sbPopContainerVisible"),$(sbxPopFunctions.popInner).addClass("sbPopContent"),$(sbxPopFunctions.popClose).addClass("sbPopClose"),$(sbxPopFunctions.fadeout).appendTo("body"),o?($(sbxPopFunctions.popInner).appendTo(sbxPopFunctions.popContainer),$(sbxPopFunctions.popInner).html(o),$(sbxPopFunctions.popClose).appendTo(sbxPopFunctions.popContainer),$(sbxPopFunctions.popContainer).appendTo("body")):(sbxPopFunctions.popContainer=n,$(sbxPopFunctions.popContainer).appendTo("body")),$(sbxPopFunctions.fadeout).fadeIn((function(){var o=$(sbxPopFunctions.popContainer).height(),n=$(sbxPopFunctions.popContainer).width();$(sbxPopFunctions.popContainer).css("margin-top","-"+o/2+"px"),$(sbxPopFunctions.popContainer).css("margin-left","-"+n/2+"px"),$(sbxPopFunctions.popContainer).css("top","50%"),$(sbxPopFunctions.popContainer).css("left","50%"),$(sbxPopFunctions.popContainer).css("zIndex","2001"),$(sbxPopFunctions.popContainer).fadeIn()}))},showPopSimpleSignup:function(o,n){var p=$(sbxPopFunctions.popInner),s=$(sbxPopFunctions.popContainer);o?(p.html(o).add(sbxPopFunctions.popClose).appendTo(s),s.appendTo("body")):(sbxPopFunctions.popContainer=n,s=$(sbxPopFunctions.popContainer)),$(sbxPopFunctions.fadeout).fadeIn(300,(function(){s.fadeIn(),document.getElementById("sbxJxRegEmail").focus()})),document.getElementById("fadeCover").style.display="block",updateSsuStats("Viewed")},hidePop:function(){$("#topbarLoginButton").hasClass("topbarLoginButtonActive")&&$("#topbarLoginButton").removeClass("topbarLoginButtonActive"),$(sbxPopFunctions.popContainer).fadeOut((function(){$(sbxPopFunctions.fadeout).fadeOut((function(){$(this.popContainer).remove(),$(this.fadeout).remove()}))})),document.getElementById("fadeCover").style.display="none",sbGlbMember<1&&updateSsuStats("Closed"),sbGlbl.$body.removeClass(sbGlbl.objPopup.strPopupIsShownClass)},hidePop2:function(){$(sbxPopFunctions.popContainer).fadeOut((function(){$(this.popContainer).remove()}))},hidePopSimpleSignup:function(){$(sbxPopFunctions.popContainer).fadeOut((function(){$(sbxPopFunctions.fadeout).fadeOut((function(){$(this.popContainer).add(this.fadeout).remove()}))})),document.getElementById("fadeCover").style.display="none",sbGlbMember||updateSsuStats("Closed"),sbGlbl.$body.removeClass(sbGlbl.objPopup.strPopupIsShownClass)}};