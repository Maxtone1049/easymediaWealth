!function(t,e,i){var n=["table","thead","tbody","tfoot","tr","col","colgroup","object","embed","param","ol","ul","dl","blockquote","select","optgroup","option","textarea","script","style"];function s(t,e){if(t.innerText)t.innerText=e;else if(t.nodeValue)t.nodeValue=e;else{if(!t.textContent)return!1;t.textContent=e}}function h(t,i,n,o){for(var a,r,l=t[0],p=t.text(),c="",d=0,u=p.length;d<=u;)a=d+(u-d>>1),s(l,r=e.trim(p.substr(0,a+1))+o.ellipsis),i.height()>o.maxHeight?u=a-1:(d=a+1,c=c.length>r.length?c:r);return c.length>0?(s(l,c),!0):function(t,e,i,n){var o,a=t.parent();t.remove();var r=i?i.length:0;if(a.contents().length>r)return h(o=a.contents().eq(-1-r),e,i,n);var l=a.prev();return!!(o=l.contents().eq(-1)).length&&(s(o[0],o.text()+n.ellipsis),a.remove(),i.length&&l.append(i),!0)}(t,i,n,o)}function o(t,i,s,a){var r,l,p=t[0],c=t.contents(),d=0,u=c.length,g=!1;for(t.empty();d<u&&!g;d++)8!==(l=(r=c.eq(d))[0]).nodeType&&(p.appendChild(l),s.length&&(e.inArray(p.tagName.toLowerCase(),n)>=0?t.after(s):t.append(s)),i.height()>a.maxHeight&&(g=3===l.nodeType?h(r,i,s,a):o(r,i,s,a)),!g&&s.length&&s.remove());return g}function a(t,i){this.element=t,this.$element=e(t),this._name="truncate",this._defaults={lines:1,ellipsis:"…",showMore:"",showLess:""},this.options=e.extend({},this._defaults,i),undefined===this.options.maxHeight&&(this.options.maxHeight=parseInt(this.options.lines,10)*parseInt(this.options.lineHeight,10)),this.$clipNode=e(e.parseHTML(this.options.showMore),this.$element),this.original=this.cached=t.innerHTML,this.isTruncated=!1,this.isCollapsed=!0,this.update()}a.prototype={update:function(t){var e=!this.isCollapsed;t?this.original=this.element.innerHTML=t:this.isCollapsed&&this.element.innerHTML===this.cached&&(this.element.innerHTML=this.original);var i=this.$element.wrapInner("<div/>").children();i.css({border:"none",margin:0,padding:0,width:"auto",height:"auto"}),this.isTruncated=!1,i.height()>this.options.maxHeight?this.isTruncated=o(i,i,this.$clipNode,this.options):this.isCollapsed=!1,i.replaceWith(i.contents()),this.cached=this.element.innerHTML,e&&(this.element.innerHTML=this.original)},expand:function(){this.isCollapsed&&(this.isCollapsed=!1,this.element.innerHTML=this.isTruncated?this.original+this.options.showLess:this.original)},collapse:function(t){this.isCollapsed||(this.isCollapsed=!0,(t=t||!1)?this.update():this.element.innerHTML=this.cached)}},e.fn.truncate=function(t){var i=e.makeArray(arguments).slice(1);return this.each((function(){var n=e.data(this,"jquery-truncate");n?"function"==typeof n[t]&&n[t].apply(n,i):e.data(this,"jquery-truncate",new a(this,t))}))},t.Truncate=a}(this,jQuery);