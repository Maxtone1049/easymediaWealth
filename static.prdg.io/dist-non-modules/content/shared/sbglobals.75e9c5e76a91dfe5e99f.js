!function(){"use strict";var t;function n(t){var n=document.getElementById(t);if(n){var e=n.textContent;if(n&&"application/json"===n.type&&a(e,"string")&&""!==e){var o={};try{o=JSON.parse(e)}catch(n){throw new Error("JSON "+t+" is invalid. Error :"+n)}return o}return{}}}function e(t,n){var e=sbGlobals.EXTERNAL_CONTENT_ROOT+sbGlobals.EXTERNAL_CONTENT_PATHS[t];return n?e+"/"+n:e}function o(t){return sbGlobals.EXTERNAL_CONTENT_PREFIXES[t]}function l(t){return sbGlobals.EXTERNAL_CONTENT_EXTENSIONS[t]}function a(t,n){return"number"===n?!isNaN(parseFloat(val))&&isFinite(val):Object.prototype.toString.call(t).slice(8,-1).toLowerCase()===n}(function(t){void 0===window.sbGlobals&&(window.sbGlobals={}),function(t){for(var n in t)Object.prototype.hasOwnProperty.call(sbGlobals,n)||(sbGlobals[n]=t[n])}(t),void 0===sbGlobals.externalContent&&(sbGlobals.externalContent={}),void 0===sbGlobals.externalContent.getPath&&(sbGlobals.externalContent.getPath=e),void 0===sbGlobals.externalContent.getFilePrefix&&(sbGlobals.externalContent.getFilePrefix=o),void 0===sbGlobals.externalContent.getDefaultExtension&&(sbGlobals.externalContent.getDefaultExtension=l),function(t){if(window.sbGlobals.sbHeadData=t,a(t,"object")&&0!==Object.keys(t).length){var n=t.emailOnly;window.sbGlbMember=t.sbGlbMember,n&&(window.emailOnly=n)}}(n("sbHeadData"))})(t=n("sbGlobalsData")),function(t){void 0===window.profileImgHstGlbl&&(window.profileImgHstGlbl=t.PROFILE_HOST)}(t),window._gaq=window._gaq||[]}();