!function(){"use strict";var e=document.currentScript.getAttribute("data-google-client-id");function t(){var t=document.getElementById("googleButtonWrapper");t&&sbHelpers.isNonEmptyObject(window.google)&&(window.google.accounts.id.initialize({client_id:e,callback:"SignIn"===t.dataset.id?i:n}),t.classList.remove("googleButtonIsLoading"),window.google.accounts.id.renderButton(t,{logo_alignment:"center",size:"large",text:"SignIn"===t.dataset.id?"signin_with":"signup_with",theme:"outline",type:"standard",width:t.offsetWidth}))}function i(e){var t={idToken:sbHelpers.isObject(e)&&sbHelpers.isNonEmptyString(e.credential)?e.credential:"",persist:o()};sbGlbl.sbTb.socialLoginUser(t,"google-login")}function n(e){var t={idToken:sbHelpers.isObject(e)&&sbHelpers.isNonEmptyString(e.credential)?e.credential:"",persist:o()};sbGlbl.sbTb.socialRegisterUser(t,"google-reg")}function o(){var e=document.getElementById("signUpRememberMe");return e&&e.value?e.value:"on"}window.addEventListener("load",t)}();