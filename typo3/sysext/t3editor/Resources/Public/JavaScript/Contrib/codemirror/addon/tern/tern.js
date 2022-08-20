!function(t){"object"==typeof exports&&"object"==typeof module?t(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],t):t(CodeMirror)}((function(t){"use strict";t.TernServer=function(r){var c=this;this.options=r||{};var l=this.options.plugins||(this.options.plugins={});l.doc_comment||(l.doc_comment=!0),this.docs=Object.create(null),this.options.useWorker?this.server=new k(this):this.server=new tern.Server({getFile:function(t,e){return o(c,t,e)},async:!0,defs:this.options.defs||[],plugins:l}),this.trackChange=function(t,e){!function(t,e,n){var o=i(t,e),r=t.cachedArgHints;r&&r.doc==e&&h(r.start,n.to)>=0&&(t.cachedArgHints=null);var a=o.changed;null==a&&(o.changed=a={from:n.from.line,to:n.from.line});var c=n.from.line+(n.text.length-1);n.from.line<a.to&&(a.to=a.to-(n.to.line-c));c>=a.to&&(a.to=c+1);a.from>n.from.line&&(a.from=n.from.line);e.lineCount()>250&&n.to-a.from>100&&setTimeout((function(){o.changed&&o.changed.to-o.changed.from>100&&s(t,o)}),200)}(c,t,e)},this.cachedArgHints=null,this.activeArgHints=null,this.jumpStack=[],this.getHint=function(o,i){return function(o,i,r){o.request(i,{type:"completions",types:!0,docs:!0,urls:!0},(function(s,c){if(s)return w(o,i,s);var l=[],u="",f=c.start,d=c.end;'["'==i.getRange(e(f.line,f.ch-2),f)&&'"]'!=i.getRange(d,e(d.line,d.ch+2))&&(u='"]');for(var p=0;p<c.completions.length;++p){var h=c.completions[p],g=a(h.type);c.guess&&(g+=" "+n+"guess"),l.push({text:h.name+u,displayText:h.displayName||h.name,className:g,data:h})}var m={from:f,to:d,list:l},v=null;t.on(m,"close",(function(){x(v)})),t.on(m,"update",(function(){x(v)})),t.on(m,"select",(function(t,e){x(v);var r=o.options.completionTip?o.options.completionTip(t.data):t.data.doc;r&&(v=C(e.parentNode.getBoundingClientRect().right+window.pageXOffset,e.getBoundingClientRect().top+window.pageYOffset,r,i,n+"hint-doc"))})),r(m)}))}(c,o,i)},this.getHint.async=!0},t.TernServer.prototype={addDoc:function(e,n){var o={doc:n,name:e,changed:null};return this.server.addFile(e,T(this,o)),t.on(n,"change",this.trackChange),this.docs[e]=o},delDoc:function(e){var n=r(this,e);n&&(t.off(n.doc,"change",this.trackChange),delete this.docs[n.name],this.server.delFile(n.name))},hideDoc:function(t){b(this);var e=r(this,t);e&&e.changed&&s(this,e)},complete:function(t){t.showHint({hint:this.getHint})},showType:function(t,e,n){c(this,t,e,"type",n)},showDocs:function(t,e,n){c(this,t,e,"documentation",n)},updateArgHints:function(n){!function(n,o){if(b(n),o.somethingSelected())return;var i=o.getTokenAt(o.getCursor()).state,r=t.innerMode(o.getMode(),i);if("javascript"!=r.mode.name)return;var s=r.state.lexical;if("call"!=s.info)return;for(var a,c=s.pos||0,f=o.getOption("tabSize"),d=o.getCursor().line,p=Math.max(0,d-9),g=!1;d>=p;--d){for(var m=o.getLine(d),v=0,y=0;;){var C=m.indexOf("\t",y);if(-1==C)break;v+=f-(C+v)%f-1,y=C+1}if(a=s.column-v,"("==m.charAt(a)){g=!0;break}}if(!g)return;var x=e(d,a),w=n.cachedArgHints;if(w&&w.doc==o.getDoc()&&0==h(x,w.start))return l(n,o,c);n.request(o,{type:"type",preferFunction:!0,end:x},(function(t,e){!t&&e.type&&/^fn\(/.test(e.type)&&(n.cachedArgHints={start:x,type:u(e.type),name:e.exprName||e.name||"fn",guess:e.guess,doc:o.getDoc()},l(n,o,c))}))}(this,n)},jumpToDef:function(t){!function(t,n){function o(o){var r={type:"definition",variable:o||null},s=i(t,n.getDoc());t.server.request(p(t,s,r),(function(o,i){if(o)return w(t,n,o);if(i.file||!i.url){if(i.file){var r,a=t.docs[i.file];if(a&&(r=function(t,n){for(var o=n.context.slice(0,n.contextOffset).split("\n"),i=n.start.line-(o.length-1),r=e(i,(1==o.length?n.start.ch:t.getLine(i).length)-o[0].length),s=t.getLine(i).slice(r.ch),a=i+1;a<t.lineCount()&&s.length<n.context.length;++a)s+="\n"+t.getLine(a);if(s.slice(0,n.context.length)==n.context)return n;var c,l=t.getSearchCursor(n.context,0,!1),u=1/0;for(;l.findNext();){var f=l.from(),d=1e4*Math.abs(f.line-r.line);d||(d=Math.abs(f.ch-r.ch)),d<u&&(c=f,u=d)}if(!c)return null;1==o.length?c.ch+=o[0].length:c=e(c.line+(o.length-1),o[o.length-1].length);if(n.start.line==n.end.line)var p=e(c.line,c.ch+(n.end.ch-n.start.ch));else p=e(c.line+(n.end.line-n.start.line),n.end.ch);return{start:c,end:p}}(a.doc,i)))return t.jumpStack.push({file:s.name,start:n.getCursor("from"),end:n.getCursor("to")}),void f(t,s,a,r.start,r.end)}w(t,n,"Could not find a definition.")}else window.open(i.url)}))}!function(t){var e=t.getCursor("end"),n=t.getTokenAt(e);return!(n.start<e.ch&&"comment"==n.type)&&/[\w)\]]/.test(t.getLine(e.line).slice(Math.max(e.ch-1,0),e.ch+1))}(n)?m(n,"Jump to variable",(function(t){t&&o(t)})):o()}(this,t)},jumpBack:function(t){!function(t,e){var n=t.jumpStack.pop(),o=n&&t.docs[n.file];if(!o)return;f(t,i(t,e.getDoc()),o,n.start,n.end)}(this,t)},rename:function(t){!function(t,e){var n=e.getTokenAt(e.getCursor());if(!/\w/.test(n.string))return w(t,e,"Not at a variable");m(e,"New name for "+n.string,(function(n){t.request(e,{type:"rename",newName:n,fullDocs:!0},(function(n,o){if(n)return w(t,e,n);!function(t,e){for(var n=Object.create(null),o=0;o<e.length;++o){var i=e[o];(n[i.file]||(n[i.file]=[])).push(i)}for(var r in n){var s=t.docs[r],a=n[r];if(s){a.sort((function(t,e){return h(e.start,t.start)}));var c="*rename"+ ++d;for(o=0;o<a.length;++o){i=a[o];s.doc.replaceRange(i.text,i.start,i.end,c)}}}}(t,o.changes)}))}))}(this,t)},selectName:function(t){!function(t,e){var n=i(t,e.doc).name;t.request(e,{type:"refs"},(function(o,i){if(o)return w(t,e,o);for(var r=[],s=0,a=e.getCursor(),c=0;c<i.refs.length;c++){var l=i.refs[c];l.file==n&&(r.push({anchor:l.start,head:l.end}),h(a,l.start)>=0&&h(a,l.end)<=0&&(s=r.length-1))}e.setSelections(r,s)}))}(this,t)},request:function(t,e,n,o){var r=this,s=i(this,t.getDoc()),a=p(this,s,e,o),c=a.query&&this.options.queryOptions&&this.options.queryOptions[a.query.type];if(c)for(var l in c)a.query[l]=c[l];this.server.request(a,(function(t,o){!t&&r.options.responseFilter&&(o=r.options.responseFilter(s,e,a,t,o)),n(t,o)}))},destroy:function(){b(this),this.worker&&(this.worker.terminate(),this.worker=null)}};var e=t.Pos,n="CodeMirror-Tern-";function o(t,e,n){var o=t.docs[e];o?n(T(t,o)):t.options.getFile?t.options.getFile(e,n):n(null)}function i(t,e,n){for(var o in t.docs){var i=t.docs[o];if(i.doc==e)return i}if(!n)for(var r=0;;++r)if(o="[doc"+(r||"")+"]",!t.docs[o]){n=o;break}return t.addDoc(n,e)}function r(e,n){return"string"==typeof n?e.docs[n]:(n instanceof t&&(n=n.getDoc()),n instanceof t.Doc?i(e,n):void 0)}function s(t,e){t.server.request({files:[{type:"full",name:e.name,text:T(t,e)}]},(function(t){t?window.console.error(t):e.changed=null}))}function a(t){var e;return e="?"==t?"unknown":"number"==t||"string"==t||"bool"==t?t:/^fn\(/.test(t)?"fn":/^\[/.test(t)?"array":"object",n+"completion "+n+"completion-"+e}function c(t,e,n,o,i){t.request(e,o,(function(n,o){if(n)return w(t,e,n);if(t.options.typeTip)var r=t.options.typeTip(o);else{r=g("span",null,g("strong",null,o.type||"not found"));if(o.doc&&r.appendChild(document.createTextNode(" — "+o.doc)),o.url){r.appendChild(document.createTextNode(" "));var s=r.appendChild(g("a",null,"[docs]"));s.href=o.url,s.target="_blank"}}v(e,r,t),i&&i()}),n)}function l(t,e,o){b(t);for(var i=t.cachedArgHints,r=i.type,s=g("span",i.guess?n+"fhint-guess":null,g("span",n+"fname",i.name),"("),a=0;a<r.args.length;++a){a&&s.appendChild(document.createTextNode(", "));var c=r.args[a];s.appendChild(g("span",n+"farg"+(a==o?" "+n+"farg-current":""),c.name||"?")),"?"!=c.type&&(s.appendChild(document.createTextNode(": ")),s.appendChild(g("span",n+"type",c.type)))}s.appendChild(document.createTextNode(r.rettype?") -> ":")")),r.rettype&&s.appendChild(g("span",n+"type",r.rettype));var l=e.cursorCoords(null,"page"),u=t.activeArgHints=C(l.right+1,l.bottom,s,e);setTimeout((function(){u.clear=y(e,(function(){t.activeArgHints==u&&b(t)}))}),20)}function u(t){var e=[],n=3;function o(e){for(var o=0,i=n;;){var r=t.charAt(n);if(e.test(r)&&!o)return t.slice(i,n);/[{\[\(]/.test(r)?++o:/[}\]\)]/.test(r)&&--o,++n}}if(")"!=t.charAt(n))for(;;){var i=t.slice(n).match(/^([^, \(\[\{]+): /);if(i&&(n+=i[0].length,i=i[1]),e.push({name:i,type:o(/[\),]/)}),")"==t.charAt(n))break;n+=2}var r=t.slice(n).match(/^\) -> (.*)$/);return{args:e,rettype:r&&r[1]}}function f(t,e,n,o,i){n.doc.setSelection(o,i),e!=n&&t.options.switchToDoc&&(b(t),t.options.switchToDoc(n.name,n.doc))}var d=0;function p(n,o,i,r){var s=[],a=0,c=!i.fullDocs;c||delete i.fullDocs,"string"==typeof i&&(i={type:i}),i.lineCharPositions=!0,null==i.end&&(i.end=r||o.doc.getCursor("end"),o.doc.somethingSelected()&&(i.start=o.doc.getCursor("start")));var l=i.start||i.end;if(o.changed)if(o.doc.lineCount()>250&&!1!==c&&o.changed.to-o.changed.from<100&&o.changed.from<=l.line&&o.changed.to>i.end.line){s.push(function(n,o,i){for(var r,s=n.doc,a=null,c=null,l=o.line-1,u=Math.max(0,l-50);l>=u;--l){var f=s.getLine(l);if(!(f.search(/\bfunction\b/)<0)){var d=t.countColumn(f,null,4);null!=a&&a<=d||(a=d,c=l)}}null==c&&(c=u);var p=Math.min(s.lastLine(),i.line+20);if(null==a||a==t.countColumn(s.getLine(o.line),null,4))r=p;else for(r=i.line+1;r<p;++r){if((d=t.countColumn(s.getLine(r),null,4))<=a)break}var h=e(c,0);return{type:"part",name:n.name,offsetLines:h.line,text:s.getRange(h,e(r,i.line==r?null:0))}}(o,l,i.end)),i.file="#0";a=s[0].offsetLines;null!=i.start&&(i.start=e(i.start.line- -a,i.start.ch)),i.end=e(i.end.line-a,i.end.ch)}else s.push({type:"full",name:o.name,text:T(n,o)}),i.file=o.name,o.changed=null;else i.file=o.name;for(var u in n.docs){var f=n.docs[u];f.changed&&f!=o&&(s.push({type:"full",name:f.name,text:T(n,f)}),f.changed=null)}return{query:i,files:s}}var h=t.cmpPos;function g(t,e){var n=document.createElement(t);e&&(n.className=e);for(var o=2;o<arguments.length;++o){var i=arguments[o];"string"==typeof i&&(i=document.createTextNode(i)),n.appendChild(i)}return n}function m(t,e,n){t.openDialog?t.openDialog(e+": <input type=text>",n):n(prompt(e,""))}function v(e,n,o){e.state.ternTooltip&&x(e.state.ternTooltip);var i=e.cursorCoords(),r=e.state.ternTooltip=C(i.right+1,i.bottom,n,e);function s(){var t;e.state.ternTooltip=null,r.parentNode&&((t=r).style.opacity="0",setTimeout((function(){x(t)}),1100)),l()}var a=!1,c=!1;t.on(r,"mousemove",(function(){a=!0})),t.on(r,"mouseout",(function(e){var n=e.relatedTarget||e.toElement;n&&t.contains(r,n)||(c?s():a=!1)})),setTimeout((function(){c=!0,a||s()}),o.options.hintDelay?o.options.hintDelay:1700);var l=y(e,s)}function y(t,e){return t.on("cursorActivity",e),t.on("blur",e),t.on("scroll",e),t.on("setDoc",e),function(){t.off("cursorActivity",e),t.off("blur",e),t.off("scroll",e),t.off("setDoc",e)}}function C(t,e,o,i,r){var s=g("div",n+"tooltip "+(r||""),o);s.style.left=t+"px",s.style.top=e+"px",(((i.options||{}).hintOptions||{}).container||document.body).appendChild(s);var a=i.cursorCoords(),c=window.innerWidth,l=window.innerHeight,u=s.getBoundingClientRect(),f=document.querySelector(".CodeMirror-hints"),d=u.bottom-l,p=u.right-c;if(f&&p>0){s.style.left=0;u=s.getBoundingClientRect();s.style.left=(t=t-f.offsetWidth-u.width)+"px",p=u.right-c}if(d>0){var h=u.bottom-u.top;a.top-(a.bottom-u.top)-h>0?s.style.top=a.top-h+"px":h>l&&(s.style.height=l-5+"px",s.style.top=a.bottom-u.top+"px")}return p>0&&(u.right-u.left>c&&(s.style.width=c-5+"px",p-=u.right-u.left-c),s.style.left=t-p+"px"),s}function x(t){var e=t&&t.parentNode;e&&e.removeChild(t)}function w(t,e,n){t.options.showError?t.options.showError(e,n):v(e,String(n),t)}function b(t){t.activeArgHints&&(t.activeArgHints.clear&&t.activeArgHints.clear(),x(t.activeArgHints),t.activeArgHints=null)}function T(t,e){var n=e.doc.getValue();return t.options.fileFilter&&(n=t.options.fileFilter(n,e.name,e.doc)),n}function k(t){var e=t.worker=new Worker(t.options.workerScript);e.postMessage({type:"init",defs:t.options.defs,plugins:t.options.plugins,scripts:t.options.workerDeps});var n=0,i={};function r(t,o){o&&(t.id=++n,i[n]=o),e.postMessage(t)}e.onmessage=function(e){var n=e.data;"getFile"==n.type?o(t,n.name,(function(t,e){r({type:"getFile",err:String(t),text:e,id:n.id})})):"debug"==n.type?window.console.log(n.message):n.id&&i[n.id]&&(i[n.id](n.err,n.body),delete i[n.id])},e.onerror=function(t){for(var e in i)i[e](t);i={}},this.addFile=function(t,e){r({type:"add",name:t,text:e})},this.delFile=function(t){r({type:"del",name:t})},this.request=function(t,e){r({type:"req",body:t},e)}}}));