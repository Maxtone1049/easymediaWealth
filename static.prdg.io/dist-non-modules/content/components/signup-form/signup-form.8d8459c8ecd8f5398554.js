!function(){"use strict";var e=$("#signUpCodeText");function n(){var e=window.customRedirectUrl||sbPage.postSignupRedirectUrl;e&&(sbxJxRegVars.submitFormBtn.data("custom-url",e),document.getElementById("sbLogInCta").addEventListener("click",o))}function t(e){e.preventDefault()}function i(){var e=$(this),n=e.closest("#signUpCodeLine");n.is(":animated")||($(window).width()>940?(n.animate({textIndent:0!=parseInt(n.css("textIndent"))?0:-135}).children("#signUpCodeInput").fadeToggle("fast").focus(),e.prop("disabled",!0)):n.children("#signUpCodeInput").fadeToggle("fast").css("display","block").focus(),e.hasClass("signUpCodeInputOpen")&&e.focus(),e.toggleClass("signUpCodeInputOpen"))}function d(){window.innerWidth>940&&$("#signUpCodeInput").is(":visible")?e.prop("disabled",!0):e.prop("disabled",!1)}function o(e){e.preventDefault(),e.stopPropagation();var n=$('<form hidden action="'+location.origin+'/?cmd=ac-login" method="post"><input type="hidden" name="redirectUrl" value="'+window.customRedirectUrl+'"></form>');sbPage.$body.append(n),n.submit()}document.getElementById("sbRegForm").addEventListener("submit",t),document.getElementById("signUpCodeText").addEventListener("click",i),window.addEventListener("resize",d),sbHelpers.onDomContentLoaded(n)}();