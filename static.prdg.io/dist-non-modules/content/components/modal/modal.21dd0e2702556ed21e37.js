!function(){"use strict";sbPage.modal||(sbPage.modal=new function(){var e,t,n,d,a,o,l=this,s=!0;l.open=function(i){s&&function(){var l=window.CDN_STATIC_CONTENT+"/dist-non-modules/content/components/modal/modal.6edf6559ad5f45602994.css";if(sbHelpers.injectStylesheetOnce("sbModalComponentCss",l),e=document.getElementById("sbModalBg"))t=document.getElementById("sbModal"),n=document.getElementById("sbModalLogo"),d=document.getElementById("sbModalTitle"),a=document.getElementById("sbModalContent"),o=document.getElementById("sbModalActions");else{(e=document.createElement("aside")).id="sbModalBg",e.classList.add("modalCloseCta"),(t=document.createElement("div")).id="sbModal";var i=document.createElement("button");i.id="sbModalClose",i.classList.add("modalCloseCta");var c=document.createElement("span");c.classList.add("visuallyHidden"),(n=document.createElement("div")).id="sbModalLogo";var m=document.createElement("div");m.id="sbModalBody",(a=document.createElement("div")).id="sbModalContent",(d=document.createElement("div")).id="sbModalTitle";var p=document.createElement("div");p.id="sbModalMain",o=document.createElement("div"),p.id="sbModalActions",i.appendChild(c),m.appendChild(d),m.appendChild(a),p.appendChild(n),p.appendChild(m),t.appendChild(i),t.appendChild(p),t.appendChild(o),e.appendChild(t)}document.body.appendChild(e),t.addEventListener("click",(function(e){e.cancelBubble=!0,e.stopPropagation&&e.stopPropagation()})),s=!1}(),banner.removeAll(),i.cusFn=i.cusFn||0,i.hideLogo=i.hideLogo||!1,document.addEventListener("DOMContentLoaded",(function(){e.style.paddingTop=sbHelpers.isViewport("tiny")?sbGlbl.sbTb.calcHeaderBlocksHeight()+"px":""})),e.classList.add("active"),e.hidden=!1,d.innerHTML=i.title,a.innerHTML=i.content,o.innerHTML=i.actions,i.imageFileType=i.imageFileType?i.imageFileType:"jpg",n&&(i.imagePath?n.style.backgroundImage="url('"+i.imagePath+"')":n.style.backgroundImage=i.image?"url('"+sbGlbl.gAppContent+"/content/skin-02/images/st"+i.image+"."+i.imageFileType+"')":""),n.hidden=i.hideLogo,i.cusFn>0&&"undefined"!=typeof customStPopFunc&&customStPopFunc(i.cusFn),t.className="";var c=i.class;if("string"==typeof c&&""!==c)for(var m=0,p=(c=c.split(" ")).length;m<p;m++)t.classList.add(c[m]);var r=Array.prototype.slice.call(t.getElementsByClassName("sbModalCloseCta"),0);i.noCloseOnBackgroundClick||r.push(e);for(var u=r.length-1;u>-1;u--)r[u].addEventListener("click",(function(){l.close(i.closeCallback)}))},l.close=function(t){e&&e.classList.remove("active"),"function"==typeof t&&t()}})}();