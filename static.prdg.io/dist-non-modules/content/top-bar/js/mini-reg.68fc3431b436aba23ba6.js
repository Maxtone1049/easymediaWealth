"undefined"==typeof sbtbDomain&&(sbtbDomain=""),"undefined"==typeof sbDoLoginPost&&(sbDoLoginPost=!0),ajaxProxy=document.getElementById("ajax-proxy"),jQuery.ajaxSetup({converters:{"text json":function(e){return e&&e.length>9&&"while(1);"==e.substring(0,9)&&(e=e.substring(9)),jQuery.parseJSON(e)}}});var onloadRegVars={};sbxJxRegVars={},sbxJxAjaxVars={isPostingData:!1,isRetrying:!1};var passwordInfo=sbHelpers.getJsonScriptContent(document.getElementById("passwordInfo")),errorMessagesConfig={sbtbDomain:sbtbDomain,minLength:passwordInfo.minLength,maxLength:passwordInfo.maxLength},registrationErrorMessageList=sbHelpers.getRegistrationErrorMessageList(errorMessagesConfig);function ErrorCollection(){}sbxJxRegFunctions={fetchPostData:function(e,s){var r={emailAddress:sbxJxRegVars.fldEmail.val(),password:sbxJxRegVars.fldPass.val(),firstName:sbxJxRegVars.fldFirstName.val(),lastName:sbxJxRegVars.fldLastName.val(),customRedirectURL:s||"",regMethod:sbxJxRegVars.regMethod};return sbxJxRegVars.canEnterPromoCode&&sbxJxRegVars.fldPromocode.val().length>0&&sbxJxRegVars.fldPromocode.val()!=sbxJxRegVars.fldPromocode.attr("placeholder")&&(r.promoCode=sbxJxRegVars.fldPromocode.val()),(jQuery("#persist").is(":checked")&&jQuery("#sbGlobalNavLoginDropdown").is(":visible")||jQuery("#persistMinireg").is(":checked")&&jQuery("#glblSignUpInitial").is(":visible")&&"Login"==sbxJxRegVars.curOption||sbGlbl.autoPersist)&&(r.persist="on"),r.ioBlackBox=jQuery("#ioBlackBox").val(),r[jQuery("#sbxJxRegAuthToken").attr("name")]=jQuery("#sbxJxRegAuthToken").val(),"Reg"==sbxJxRegVars.curOption&&sbHelpers.isMobile()&&(r.cmp=sbxJxRegVars.cmp,r.aff_sid=sbxJxRegVars.aff_sid,r.customRedirectURL=r.customRedirectURL||"/?cmd=m-switch&amp;on=1"),sbxJxRegVars.fldCxid.length&&(r.aff_sid=jQuery.trim(sbxJxRegVars.fldCxid.val())),r},handleRegister:function(e,s){if(this.validateLocalReg(e)&&!sbxJxAjaxVars.isPostingData){sbxJxAjaxVars.isPostingData=!0,"undefined"!=typeof c_trackStep&&c_trackStep(11,{action:"submitReg"});var r=this.fetchPostData(void 0,s);r.allowIncomplete=e,this.remoteCall({handler:"registration",data:r,callback:this.onRegSuccess})}},validateLocalReg:function(e){e=e||!1;var s,r=new ErrorCollection;return sbxJxRegVars.fldEmail.val().length<1?r.push("emailAddress","EmailAddress_NonEmpty"):sbxJxRegVars.fldEmail.val().length<6?r.push("emailAddress","EmailAddress_Length"):/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/.test(sbxJxRegVars.fldEmail.val())||r.push("emailAddress","EmailAddress_ValidEmail"),!e&&sbxJxRegVars.fldPass.val().length<1?r.push("password","Password_NonEmpty"):!e&&sbxJxRegVars.fldPass.val().length<passwordInfo.minLength?r.push("password","Password_Length"):e||void 0!==sbGlbl.showConfirmPassword&&!sbGlbl.showConfirmPassword||jQuery(sbxJxRegVars.fldPass).val()==jQuery(sbxJxRegVars.fldPassConfirm).val()||r.push("password","Password_IsMatch"),!e&&(s=sbxJxRegVars.fldCxid.attr("data-validate"))&&(sbxJxRegVars.fldCxid.val().length==s&&sbHelpers.isNumeric(sbxJxRegVars.fldCxid.val())||r.push("cxid","Cxid_Not_Match")),!!r.isEmpty()||(sbxJxRegUx.renderError(r),!1)},handleLogin:function(){if($("#sbxJxRegEmail[name=emailAddressMini]").attr("name","emailAddress"),this.validateLocalLogin()&&!sbxJxAjaxVars.isPostingData){var e=this.fetchPostData();sbxJxAjaxVars.isPostingData=!0,this.remoteCall({handler:"login",data:e,callback:this.onLoginSuccess})}},validateLocalLogin:function(){var e=new ErrorCollection;return sbxJxRegVars.fldEmail.val().length<1&&e.push("emailAddress","EmailAddress_NonEmpty"),sbxJxRegVars.fldPass.val().length<1&&e.push("password","Password_NonEmpty"),!!e.isEmpty()||(sbxJxRegUx.renderError(e),!1)},onRegSuccess:function(e,s){if(sbxJxAjaxVars.isPostingData=!1,void 0!==e.allowLogin&&!1===e.allowLogin)return location.href="//www.swagbucks.com/?cmd=sb-404";if(e.success){try{localStorage.setItem("isNewlyRegisteredSbUser","1")}catch(e){document.cookie="isNewlyRegisteredSbUser=1"}return"undefined"!=typeof c_trackStep&&c_trackStep(21,{action:"onRegSuccess"}),"function"==typeof fbq&&fbq("track","CompleteRegistration"),"undefined"!=typeof ssuCustomRegCallback&&jQuery.isFunction(ssuCustomRegCallback)?(ssuCustomRegCallback(e),!0):(sbxJxRegUx.renderLogin(e,"reg",s),!0)}return e.errors?("undefined"!=typeof c_trackStep&&c_trackStep(11,{action:"onRegErrors",errors:e.errors}),sbxJxRegUx.renderError(e.errors),!1):e.newToken?(jQuery("#sbxJxRegAuthToken").val(e.newToken),sbxJxAjaxVars.isRetrying?void 0:(sbxJxAjaxVars.isRetrying=!0,sbxJxRegFunctions.handleRegister(),!0)):("undefined"!=typeof c_trackStep&&c_trackStep(11,{action:"onRegErrors",error:"fatal"}),alert("The page encountered an error. Please try again."),!1)},onLoginSuccess:function(e){if(sbxJxAjaxVars.isPostingData=!1,e.success)"undefined"!=typeof ssuCustomLoginCallback&&jQuery.isFunction(ssuCustomLoginCallback)?ssuCustomLoginCallback(e):sbxJxRegUx.renderLogin(e,"login");else if(e.errors)sbxJxRegUx.renderError(e.errors);else if(e.newToken){if(jQuery("#sbxJxRegAuthToken").val(e.newToken),!sbxJxAjaxVars.isRetrying)return sbxJxAjaxVars.isRetrying=!0,void sbxJxRegFunctions.handleLogin()}else alert("The page encountered an error. Please try again.");sbxJxAjaxVars.isRetrying=!1},remoteCall:function(e){"undefined"!=typeof doAjaxProxyTrustedPost?doAjaxProxyTrustedPost(e):jQuery.ajax({type:"POST",url:"/?cmd=ac-"+e.handler+"-post",data:e.data||{},success:e.callback||this.noop,dataType:"JSON"})},noop:function(){},setVariables:function(){return jQuery.extend(sbxJxRegVars,{curOption:void 0===sbxJxRegVars.curOption?"Reg":sbxJxRegVars.curOption,inputFldErrorClass:"SEInputError",inputFldNotificationClass:"SEInputNotification",inputErrMsgClass:"SEErrortip",inputNotificationMsgClass:"SENotification",fldEmail:jQuery("#sbxJxRegEmail"),fldPass:jQuery("#sbxJxRegPswd"),fldPassConfirm:jQuery("#sbxJxRegEmailConfirm"),fldPromocode:jQuery("#signUpCodeInput"),submitFormBtn:jQuery("#sbxJxRegBtnSubmit"),submitFormBtnNoSbInstall:jQuery("#sbxJxRegBtnSubmitNoSbInstall"),submitFormBtnGoogleNative:jQuery("#sbRegFormGoogleNativeCta"),fldCxid:jQuery("#sbxJxRegSpiritNumber"),fldFirstName:jQuery("#firstName"),fldLastName:jQuery("#lastName"),fldPostLoginRedirectUrl:jQuery("input[name='redirectUrl']"),fldRhash:jQuery("input[name='rhash']"),regMethod:sbxJxRegFunctions.getRegMethod()})},getRegMethod:function(){return sbHelpers.isMobile()?4:jQuery("#glblSignUpInitial").is(":visible")?3:2},updateRegVariables:function(e){jQuery.extend(sbxJxRegVars,e)},setUpErrors:function(){sbxJxRegUx.errorMsgs={EmailAddress_NonEmpty:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_Length:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_ValidEmail:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_NotExists:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_AlreadyMember:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_NotBlackList:{elms:Array(sbxJxRegVars.fldEmail)},Password_NonEmpty:{elms:Array(sbxJxRegVars.fldPass,sbxJxRegVars.fldPassConfirm)},Password_Length:{elms:Array(sbxJxRegVars.fldPass,sbxJxRegVars.fldPassConfirm)},Password_NonBlacklisted:{elms:Array(sbxJxRegVars.fldPass,sbxJxRegVars.fldPassConfirm)},Login_IsValid:{elms:Array(sbxJxRegVars.fldEmail,sbxJxRegVars.fldPass)},Login_NotIsBlocked:{elms:Array(sbxJxRegVars.fldEmail,sbxJxRegVars.fldPass)},Login_IsDeactivated:{elms:Array(sbxJxRegVars.fldEmail,sbxJxRegVars.fldPass)},SwagCode_IsValid:{elms:Array(sbxJxRegVars.fldPromocode)},EmailUsername_NonEmpty:{elms:Array(sbxJxRegVars.fldEmail)},Password_IsMatch:{elms:Array(sbxJxRegVars.fldPass,sbxJxRegVars.fldPassConfirm)},Genric_Msg:{elms:Array(sbxJxRegVars.fldEmail)},Location_AcceptsRegistration:{elms:Array(sbxJxRegVars.fldEmail)},IPAddress_NotBlacklisted:{elms:Array(sbxJxRegVars.fldEmail)},Cxid_Not_Match:{elms:Array(sbxJxRegVars.fldCxid)},SocialMember_NotExists:{elms:Array(sbxJxRegVars.fldEmail)},SignatureError:{elms:Array(sbxJxRegVars.fldEmail)},EmailAddress_NoAccess:{elms:Array(sbxJxRegVars.fldEmail)},Captcha_Fail:{elms:Array(sbxJxRegVars.fldEmail)},Failed:{elms:Array(sbxJxRegVars.fldEmail)}}}},sbxJxRegUx={renderLogin:function(e,s,r){var a="";if(a="undefined"!=e.campaignRedirect?e.redirectURL:$("#SESignUpInitial").attr("data-src-link"),sbxJxAjaxVars.isPostingData=!0,"reg"==s){var i;if("object"==typeof gaEventTrack){var n=gaEventTrack.action;void 0!==n&&(i=n)}sbHelpers.trackData({eventCategory:"Member UX",eventAction:"New Registration",eventLabel:i});var t=(new Date).getTime();$("body").append('<iframe id="iPixel" style="display:none" src="'+sbtbDomain+"/?cmd=gn-mini-reg-pixel&rnd="+t+'"></iframe>'),document.getElementById("iPixel").onload=function(){sbxJxRegUx.handlePostRegRedirect(r,a,e)},window.setTimeout((function(){sbxJxRegUx.handlePostRegRedirect(r,a,e)}),2e3)}else void 0!==window.optimizely?(window.optimizely.push(["trackEvent","login_success"]),setTimeout((function(){null==a?location.reload():location.href=a}),500)):null==a?location.reload():location.href=a},handlePostRegRedirect:function(e,s,r){var a=r.hasOnboarding;jQuery.isFunction(e)?e():null==s?a?location.href="/onboarding":location.reload():location.href=s},renderError:function(e){var s,r=$(".divErLandingPage"),a="",i=window.banner&&"function"==typeof banner.create;r.length&&(s=r).html(""),jQuery.each(e,(function(n,t){if("coppa"!=n){if(e.hasOwnProperty(n)){var o=t[0],l=sbxJxRegVars.inputFldErrorClass,d="object"==typeof sbGlbl&&"number"==typeof sbGlbl.cmp&&(594===sbGlbl.cmp||607===sbGlbl.cmp)&&"EmailAddress_NotExists"===o;if(d){o="EmailAddress_AlreadyMember";l=sbxJxRegVars.inputFldNotificationClass}sbxJxRegUx.errorMsgs.hasOwnProperty(o)||(o="Login_IsDeactivated");var g=sbxJxRegUx.errorMsgs[o].elms,x=registrationErrorMessageList[o];jQuery.each(g,(function(n,t){if(jQuery(t).addClass(l),0==n){if(r.length){if(e.login&&"Login_IsValid"==e.login[0])return sbxJxRegUx.showLoginFormError("Email/Swag Name or Password is incorrect."),!0;jQuery(s).append(x+"<br>")}else{if(i)return a+=x+". ",!0;s=jQuery(t).parent().children("."+sbxJxRegVars.inputErrMsgClass),jQuery(s).html(x),d&&jQuery(s).addClass(sbxJxRegVars.inputNotificationMsgClass)}jQuery(s).fadeIn(200)}})),i&&a&&banner.create({color:"red",html:a,timer:10,removeOthers:!0})}}else location.href=sbtbDomain+"/g/under-age"}))},showLoginFormError:function(e){var s=document.getElementById("loginErrorMessage"),r=document.getElementById("inputFieldsContainer");sbHelpers.isNonEmptyString(e)&&s&&r&&(s.textContent=e,s.setAttribute("role","alert"),r.classList.add("error"))},toggleRegLogin:function(e){if(jQuery(".glblInputLine input").val(""),this.clearErrs(),(e=void 0!==e&&e.toLowerCase())||(sbxJxRegVars.curOption="Login"==sbxJxRegVars.curOption?"Reg":"Login"),elms=Array(jQuery("#SESWelcomeSignUp h1"),jQuery("#SESWelcomeSignUp h3"),jQuery("#SEInputLineEmail h4"),jQuery("#sbxJxRegBtnSubmit"),jQuery("#optionToggleSp"),jQuery("#optionToggleA"),jQuery("#optionToggleSpHeader"),jQuery("#oneClickSignUpString")),sbxJxRegVars.curOption,"Reg"==sbxJxRegVars.curOption)jQuery.each(elms,(function(e,s){jQuery(s).html(jQuery(s).attr("alt"+sbxJxRegVars.curOption))})),$("#SEInputLinePassConfirm, #signUpCodeLine").animate({opacity:1},200),$("#glblWelcomeLoginAction").hide(),$("#loggedOutTermsLnk").show(),$("#loggedOutTermsLnk").animate({height:34}),$("#sbxJxRegBtnSubmit").unbind().bind("click",(function(){sbxJxRegFunctions.handleRegister("undefined"!=typeof emailOnly||sbPage.emailOnlySignup)})),sbxJxRegVars.curOption="Reg";else{var s=encodeURIComponent($("#SESignUpInitial").attr("data-src-link"));document.location.href="undefined"==s?"?cmd=ac-login-set-alternate-rdr&rdr=":"?cmd=ac-login-set-alternate-rdr&rdr="+s}jQuery("#sbxJxRegEmail").focus()},clearErrs:function(e,s){var r;e?(r=jQuery(e).parent().children("."+sbxJxRegVars.inputErrMsgClass),jQuery(e).removeClass(sbxJxRegVars.inputFldErrorClass)):(r=jQuery("."+sbxJxRegVars.inputErrMsgClass),jQuery("."+sbxJxRegVars.inputFldErrorClass).removeClass(sbxJxRegVars.inputFldErrorClass)),r.removeClass(sbxJxRegVars.inputNotificationMsgClass),r.hide()},attachEvents:function(){sbxJxRegVars.fldEmail.add(sbxJxRegVars.fldPass).add(sbxJxRegVars.fldPassConfirm).add(sbxJxRegVars.fldPromocode).add(sbxJxRegVars.fldCxid).unbind("keyup.submitTbform").bind("keyup.submitTbform",(function(e){var s=e.which||e.keyCode,r=sbxJxRegVars.curOption.toLowerCase();return 13==s&&"login"==r?sbxJxRegFunctions.handleLogin():13==s&&"reg"==r?sbxJxRegFunctions.handleRegister("undefined"!=typeof emailOnly||sbPage.emailOnlySignup):(27==s&&$("#SESignUpInitial").is(":visible")&&$(".sbPopClose").click(),void sbxJxRegUx.clearErrs(this,!0))}))},toggleSignUpCode:function(){var e=$("#signUpCodeLabel"),s=e.siblings("#signUpCodeInput");e.is(":animated")||(e.animate({textIndent:0!=parseInt(e.css("textIndent"))?0:-165}),s.is(":visible")?s.fadeOut("fast"):s.fadeIn("fast").focus())}},jQuery(document).ready((function(){var e="undefined"!=typeof sbGlbl_IsLoginLanding&&sbGlbl_IsLoginLanding;onloadRegVars=jQuery.extend({},sbxJxRegFunctions.setVariables()),sbxJxRegFunctions.setUpErrors(),sbxJxRegUx.attachEvents(),sbxJxRegVars.canEnterPromoCode=sbxJxRegVars.fldPromocode.length>0,sbxJxRegVars.submitFormBtn.add(sbxJxRegVars.submitFormBtnNoSbInstall).unbind().bind("click",(function(){var e="";"Reg"==sbxJxRegVars.curOption?(e=$(this).data("custom-url")||"",sbxJxRegFunctions.handleRegister("undefined"!=typeof emailOnly||sbPage.emailOnlySignup,e),jQuery("#loggedOutTermsLnk").show()):(jQuery("#glblWelcomeLoginAction").show(),sbxJxRegFunctions.handleLogin())})),sbxJxRegVars.submitFormBtnGoogleNative.bind("click",(function(){sbGlbl.sbTb.googleNativeRegister(sbxJxRegVars.regMethod)})),"undefined"!=typeof sbGlbl_LoginError&&(!function(e){if("Login_IsDeactivated"!==e)return!1;var s="sbPersonaVerificationVars",{personaFlowOn:r,personaEmailAddress:a}=sbHelpers.getJsonScriptContent(document.getElementById(s));if(!r)return!1;if(!a)return banner.showError("Please reload the page to try to login again."),!1;var i=new CustomEvent("showPersonaFlow",{detail:{emailAddress:a}});document.dispatchEvent(i)}(sbGlbl_LoginError),0!=$("form.loginForm:visible").length||e?window.setTimeout((function(){sbxJxRegUx.renderError({login:[sbGlbl_LoginError]})}),e?0:1e3):sbGlbl.sbTb.toggleLoginPopover({onShow:function(){sbxJxRegUx.renderError({login:[sbGlbl_LoginError]})}}))})),ErrorCollection.prototype.isEmpty=function(){for(var e in this)if(this.hasOwnProperty(e))return!1;return!0},ErrorCollection.prototype.push=function(e,s){e in this?this[e].push(s):this[e]=[s]};