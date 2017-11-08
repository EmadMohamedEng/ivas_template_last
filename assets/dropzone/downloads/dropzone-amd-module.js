!function(e){"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}(function(e){function t(e){if(e)return i(e)}function i(e){for(var i in t.prototype)e[i]=t.prototype[i];return e}var n={exports:{}};return n.exports=t,t.prototype.on=function(e,t){return this._callbacks=this._callbacks||{},(this._callbacks[e]=this._callbacks[e]||[]).push(t),this},t.prototype.once=function(e,t){function i(){n.off(e,i),t.apply(this,arguments)}var n=this;return this._callbacks=this._callbacks||{},t._off=i,this.on(e,i),this},t.prototype.off=t.prototype.removeListener=t.prototype.removeAllListeners=function(e,t){this._callbacks=this._callbacks||{};var i=this._callbacks[e];if(!i)return this;if(1==arguments.length)return delete this._callbacks[e],this;var n=i.indexOf(t._off||t);return~n&&i.splice(n,1),this},t.prototype.emit=function(e){this._callbacks=this._callbacks||{};var t=[].slice.call(arguments,1),i=this._callbacks[e];if(i)for(var n=0,s=(i=i.slice(0)).length;n<s;++n)i[n].apply(this,t);return this},t.prototype.listeners=function(e){return this._callbacks=this._callbacks||{},this._callbacks[e]||[]},t.prototype.hasListeners=function(e){return!!this.listeners(e).length},function(){var i,s,r,o,l,a,p={}.hasOwnProperty,u=function(e,t){function i(){this.constructor=e}for(var n in t)p.call(t,n)&&(e[n]=t[n]);return i.prototype=t.prototype,e.prototype=new i,e.__super__=t.prototype,e},d=[].slice;s=void 0!==t&&null!==t?t:require("emitter"),l=function(){},(i=function(e){function t(e,n){var s,r,o;if(this.element=e,this.version=t.version,this.defaultOptions.previewTemplate=this.defaultOptions.previewTemplate.replace(/\n*/g,""),this.clickableElements=[],this.listeners=[],this.files=[],"string"==typeof this.element&&(this.element=document.querySelector(this.element)),!this.element||null==this.element.nodeType)throw new Error("Invalid dropzone element.");if(this.element.dropzone)throw new Error("Dropzone already attached.");if(t.instances.push(this),e.dropzone=this,s=null!=(o=t.optionsForElement(this.element))?o:{},this.options=i({},this.defaultOptions,s,null!=n?n:{}),this.options.forceFallback||!t.isBrowserSupported())return this.options.fallback.call(this);if(null==this.options.url&&(this.options.url=this.element.getAttribute("action")),!this.options.url)throw new Error("No URL provided.");if(this.options.acceptedFiles&&this.options.acceptedMimeTypes)throw new Error("You can't provide both 'acceptedFiles' and 'acceptedMimeTypes'. 'acceptedMimeTypes' is deprecated.");this.options.acceptedMimeTypes&&(this.options.acceptedFiles=this.options.acceptedMimeTypes,delete this.options.acceptedMimeTypes),this.options.method=this.options.method.toUpperCase(),(r=this.getExistingFallback())&&r.parentNode&&r.parentNode.removeChild(r),this.options.previewsContainer?this.previewsContainer=t.getElement(this.options.previewsContainer,"previewsContainer"):this.previewsContainer=this.element,this.options.clickable&&(!0===this.options.clickable?this.clickableElements=[this.element]:this.clickableElements=t.getElements(this.options.clickable,"clickable")),this.init()}var i;return u(t,s),t.prototype.events=["drop","dragstart","dragend","dragenter","dragover","dragleave","selectedfiles","addedfile","removedfile","thumbnail","error","errormultiple","processing","processingmultiple","uploadprogress","totaluploadprogress","sending","sendingmultiple","success","successmultiple","canceled","canceledmultiple","complete","completemultiple","reset","maxfilesexceeded"],t.prototype.defaultOptions={url:null,method:"post",withCredentials:!1,parallelUploads:2,uploadMultiple:!1,maxFilesize:256,paramName:"file",createImageThumbnails:!0,maxThumbnailFilesize:10,thumbnailWidth:100,thumbnailHeight:100,maxFiles:null,params:{},clickable:!0,ignoreHiddenFiles:!0,acceptedFiles:null,acceptedMimeTypes:null,autoProcessQueue:!0,addRemoveLinks:!1,previewsContainer:null,dictDefaultMessage:"Drop files here to upload",dictFallbackMessage:"Your browser does not support drag'n'drop file uploads.",dictFallbackText:"Please use the fallback form below to upload your files like in the olden days.",dictFileTooBig:"File is too big ({{filesize}}MB). Max filesize: {{maxFilesize}}MB.",dictInvalidFileType:"You can't upload files of this type.",dictResponseError:"Server responded with {{statusCode}} code.",dictCancelUpload:"Cancel upload",dictCancelUploadConfirmation:"Are you sure you want to cancel this upload?",dictRemoveFile:"Remove file",dictRemoveFileConfirmation:null,dictMaxFilesExceeded:"You can only upload {{maxFiles}} files.",accept:function(e,t){return t()},init:function(){return l},forceFallback:!1,fallback:function(){var e,i,n,s,r,o;for(this.element.className=this.element.className+" dz-browser-not-supported",s=0,r=(o=this.element.getElementsByTagName("div")).length;s<r;s++)e=o[s],/(^| )dz-message($| )/.test(e.className)&&(i=e,e.className="dz-message");return i||(i=t.createElement('<div class="dz-message"><span></span></div>'),this.element.appendChild(i)),(n=i.getElementsByTagName("span")[0])&&(n.textContent=this.options.dictFallbackMessage),this.element.appendChild(this.getFallbackForm())},resize:function(e){var t,i,n;return t={srcX:0,srcY:0,srcWidth:e.width,srcHeight:e.height},i=e.width/e.height,n=this.options.thumbnailWidth/this.options.thumbnailHeight,e.height<this.options.thumbnailHeight||e.width<this.options.thumbnailWidth?(t.trgHeight=t.srcHeight,t.trgWidth=t.srcWidth):i>n?(t.srcHeight=e.height,t.srcWidth=t.srcHeight*n):(t.srcWidth=e.width,t.srcHeight=t.srcWidth/n),t.srcX=(e.width-t.srcWidth)/2,t.srcY=(e.height-t.srcHeight)/2,t},drop:function(e){return this.element.classList.remove("dz-drag-hover")},dragstart:l,dragend:function(e){return this.element.classList.remove("dz-drag-hover")},dragenter:function(e){return this.element.classList.add("dz-drag-hover")},dragover:function(e){return this.element.classList.add("dz-drag-hover")},dragleave:function(e){return this.element.classList.remove("dz-drag-hover")},selectedfiles:function(e){if(this.element===this.previewsContainer)return this.element.classList.add("dz-started")},reset:function(){return this.element.classList.remove("dz-started")},addedfile:function(e){var i=this;return e.previewElement=t.createElement(this.options.previewTemplate),e.previewTemplate=e.previewElement,this.previewsContainer.appendChild(e.previewElement),e.previewElement.querySelector("[data-dz-name]").textContent=e.name,e.previewElement.querySelector("[data-dz-size]").innerHTML=this.filesize(e.size),this.options.addRemoveLinks&&(e._removeLink=t.createElement('<a class="dz-remove" href="javascript:undefined;">'+this.options.dictRemoveFile+"</a>"),e._removeLink.addEventListener("click",function(n){return n.preventDefault(),n.stopPropagation(),e.status===t.UPLOADING?t.confirm(i.options.dictCancelUploadConfirmation,function(){return i.removeFile(e)}):i.options.dictRemoveFileConfirmation?t.confirm(i.options.dictRemoveFileConfirmation,function(){return i.removeFile(e)}):i.removeFile(e)}),e.previewElement.appendChild(e._removeLink)),this._updateMaxFilesReachedClass()},removedfile:function(e){var t;return null!=(t=e.previewElement)&&t.parentNode.removeChild(e.previewElement),this._updateMaxFilesReachedClass()},thumbnail:function(e,t){var i;return e.previewElement.classList.remove("dz-file-preview"),e.previewElement.classList.add("dz-image-preview"),i=e.previewElement.querySelector("[data-dz-thumbnail]"),i.alt=e.name,i.src=t},error:function(e,t){return e.previewElement.classList.add("dz-error"),e.previewElement.querySelector("[data-dz-errormessage]").textContent=t},errormultiple:l,processing:function(e){if(e.previewElement.classList.add("dz-processing"),e._removeLink)return e._removeLink.textContent=this.options.dictCancelUpload},processingmultiple:l,uploadprogress:function(e,t,i){return e.previewElement.querySelector("[data-dz-uploadprogress]").style.width=t+"%"},totaluploadprogress:l,sending:l,sendingmultiple:l,success:function(e){return e.previewElement.classList.add("dz-success")},successmultiple:l,canceled:function(e){return this.emit("error",e,"Upload canceled.")},canceledmultiple:l,complete:function(e){if(e._removeLink)return e._removeLink.textContent=this.options.dictRemoveFile},completemultiple:l,maxfilesexceeded:l,previewTemplate:'<div class="dz-preview dz-file-preview">\n  <div class="dz-details">\n    <div class="dz-filename"><span data-dz-name></span></div>\n    <div class="dz-size" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>\n  <div class="dz-success-mark"><span>✔</span></div>\n  <div class="dz-error-mark"><span>✘</span></div>\n  <div class="dz-error-message"><span data-dz-errormessage></span></div>\n</div>'},i=function(){var e,t,i,n,s,r,o;for(n=arguments[0],r=0,o=(i=2<=arguments.length?d.call(arguments,1):[]).length;r<o;r++){t=i[r];for(e in t)s=t[e],n[e]=s}return n},t.prototype.getAcceptedFiles=function(){var e,t,i,n,s;for(s=[],t=0,i=(n=this.files).length;t<i;t++)(e=n[t]).accepted&&s.push(e);return s},t.prototype.getRejectedFiles=function(){var e,t,i,n,s;for(s=[],t=0,i=(n=this.files).length;t<i;t++)(e=n[t]).accepted||s.push(e);return s},t.prototype.getQueuedFiles=function(){var e,i,n,s,r;for(r=[],i=0,n=(s=this.files).length;i<n;i++)(e=s[i]).status===t.QUEUED&&r.push(e);return r},t.prototype.getUploadingFiles=function(){var e,i,n,s,r;for(r=[],i=0,n=(s=this.files).length;i<n;i++)(e=s[i]).status===t.UPLOADING&&r.push(e);return r},t.prototype.init=function(){var e,i,n,s,r,o,l,a=this;for("form"===this.element.tagName&&this.element.setAttribute("enctype","multipart/form-data"),this.element.classList.contains("dropzone")&&!this.element.querySelector(".dz-message")&&this.element.appendChild(t.createElement('<div class="dz-default dz-message"><span>'+this.options.dictDefaultMessage+"</span></div>")),this.clickableElements.length&&(n=function(){return a.hiddenFileInput&&document.body.removeChild(a.hiddenFileInput),a.hiddenFileInput=document.createElement("input"),a.hiddenFileInput.setAttribute("type","file"),a.hiddenFileInput.setAttribute("multiple","multiple"),null!=a.options.acceptedFiles&&a.hiddenFileInput.setAttribute("accept",a.options.acceptedFiles),a.hiddenFileInput.style.visibility="hidden",a.hiddenFileInput.style.position="absolute",a.hiddenFileInput.style.top="0",a.hiddenFileInput.style.left="0",a.hiddenFileInput.style.height="0",a.hiddenFileInput.style.width="0",document.body.appendChild(a.hiddenFileInput),a.hiddenFileInput.addEventListener("change",function(){var e;return(e=a.hiddenFileInput.files).length&&(a.emit("selectedfiles",e),a.handleFiles(e)),n()})})(),this.URL=null!=(o=window.URL)?o:window.webkitURL,s=0,r=(l=this.events).length;s<r;s++)e=l[s],this.on(e,this.options[e]);return this.on("uploadprogress",function(){return a.updateTotalUploadProgress()}),this.on("removedfile",function(){return a.updateTotalUploadProgress()}),this.on("canceled",function(e){return a.emit("complete",e)}),i=function(e){return e.stopPropagation(),e.preventDefault?e.preventDefault():e.returnValue=!1},this.listeners=[{element:this.element,events:{dragstart:function(e){return a.emit("dragstart",e)},dragenter:function(e){return i(e),a.emit("dragenter",e)},dragover:function(e){return i(e),a.emit("dragover",e)},dragleave:function(e){return a.emit("dragleave",e)},drop:function(e){return i(e),a.drop(e)},dragend:function(e){return a.emit("dragend",e)}}}],this.clickableElements.forEach(function(e){return a.listeners.push({element:e,events:{click:function(i){if(e!==a.element||i.target===a.element||t.elementInside(i.target,a.element.querySelector(".dz-message")))return a.hiddenFileInput.click()}}})}),this.enable(),this.options.init.call(this)},t.prototype.destroy=function(){var e;return this.disable(),this.removeAllFiles(!0),(null!=(e=this.hiddenFileInput)?e.parentNode:void 0)&&(this.hiddenFileInput.parentNode.removeChild(this.hiddenFileInput),this.hiddenFileInput=null),delete this.element.dropzone},t.prototype.updateTotalUploadProgress=function(){var e,t,i,n,s,r,o;if(i=0,t=0,this.getAcceptedFiles().length){for(s=0,r=(o=this.getAcceptedFiles()).length;s<r;s++)i+=(e=o[s]).upload.bytesSent,t+=e.upload.total;n=100*i/t}else n=100;return this.emit("totaluploadprogress",n,t,i)},t.prototype.getFallbackForm=function(){var e,i,n,s;return(e=this.getExistingFallback())?e:(n='<div class="dz-fallback">',this.options.dictFallbackText&&(n+="<p>"+this.options.dictFallbackText+"</p>"),n+='<input type="file" name="'+this.options.paramName+(this.options.uploadMultiple?"[]":"")+'" '+(this.options.uploadMultiple?'multiple="multiple"':void 0)+' /><button type="submit">Upload!</button></div>',i=t.createElement(n),"FORM"!==this.element.tagName?(s=t.createElement('<form action="'+this.options.url+'" enctype="multipart/form-data" method="'+this.options.method+'"></form>')).appendChild(i):(this.element.setAttribute("enctype","multipart/form-data"),this.element.setAttribute("method",this.options.method)),null!=s?s:i)},t.prototype.getExistingFallback=function(){var e,t,i,n,s,r;for(t=function(e){var t,i,n;for(i=0,n=e.length;i<n;i++)if(t=e[i],/(^| )fallback($| )/.test(t.className))return t},n=0,s=(r=["div","form"]).length;n<s;n++)if(i=r[n],e=t(this.element.getElementsByTagName(i)))return e},t.prototype.setupEventListeners=function(){var e,t,i,n,s,r,o;for(o=[],n=0,s=(r=this.listeners).length;n<s;n++)e=r[n],o.push(function(){var n,s;n=e.events,s=[];for(t in n)i=n[t],s.push(e.element.addEventListener(t,i,!1));return s}());return o},t.prototype.removeEventListeners=function(){var e,t,i,n,s,r,o;for(o=[],n=0,s=(r=this.listeners).length;n<s;n++)e=r[n],o.push(function(){var n,s;n=e.events,s=[];for(t in n)i=n[t],s.push(e.element.removeEventListener(t,i,!1));return s}());return o},t.prototype.disable=function(){var e,t,i,n,s;for(this.clickableElements.forEach(function(e){return e.classList.remove("dz-clickable")}),this.removeEventListeners(),s=[],t=0,i=(n=this.files).length;t<i;t++)e=n[t],s.push(this.cancelUpload(e));return s},t.prototype.enable=function(){return this.clickableElements.forEach(function(e){return e.classList.add("dz-clickable")}),this.setupEventListeners()},t.prototype.filesize=function(e){var t;return e>=1e11?(e/=1e11,t="TB"):e>=1e8?(e/=1e8,t="GB"):e>=1e5?(e/=1e5,t="MB"):e>=100?(e/=100,t="KB"):(e*=10,t="b"),"<strong>"+Math.round(e)/10+"</strong> "+t},t.prototype._updateMaxFilesReachedClass=function(){return this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?this.element.classList.add("dz-max-files-reached"):this.element.classList.remove("dz-max-files-reached")},t.prototype.drop=function(e){var t,i;e.dataTransfer&&(this.emit("drop",e),t=e.dataTransfer.files,this.emit("selectedfiles",t),t.length&&((i=e.dataTransfer.items)&&i.length&&(null!=i[0].webkitGetAsEntry||null!=i[0].getAsEntry)?this.handleItems(i):this.handleFiles(t)))},t.prototype.handleFiles=function(e){var t,i,n,s;for(s=[],i=0,n=e.length;i<n;i++)t=e[i],s.push(this.addFile(t));return s},t.prototype.handleItems=function(e){var t,i,n,s;for(n=0,s=e.length;n<s;n++)null!=(i=e[n]).webkitGetAsEntry?(t=i.webkitGetAsEntry()).isFile?this.addFile(i.getAsFile()):t.isDirectory&&this.addDirectory(t,t.name):this.addFile(i.getAsFile())},t.prototype.accept=function(e,i){return e.size>1024*this.options.maxFilesize*1024?i(this.options.dictFileTooBig.replace("{{filesize}}",Math.round(e.size/1024/10.24)/100).replace("{{maxFilesize}}",this.options.maxFilesize)):t.isValidFile(e,this.options.acceptedFiles)?this.options.maxFiles&&this.getAcceptedFiles().length>=this.options.maxFiles?(i(this.options.dictMaxFilesExceeded.replace("{{maxFiles}}",this.options.maxFiles)),this.emit("maxfilesexceeded",e)):this.options.accept.call(this,e,i):i(this.options.dictInvalidFileType)},t.prototype.addFile=function(e){var i=this;return e.upload={progress:0,total:e.size,bytesSent:0},this.files.push(e),e.status=t.ADDED,this.emit("addedfile",e),this.options.createImageThumbnails&&e.type.match(/image.*/)&&e.size<=1024*this.options.maxThumbnailFilesize*1024&&this.createThumbnail(e),this.accept(e,function(t){return t?(e.accepted=!1,i._errorProcessing([e],t)):i.enqueueFile(e)})},t.prototype.enqueueFiles=function(e){var t,i,n;for(i=0,n=e.length;i<n;i++)t=e[i],this.enqueueFile(t);return null},t.prototype.enqueueFile=function(e){var i=this;if(e.accepted=!0,e.status!==t.ADDED)throw new Error("This file can't be queued because it has already been processed or was rejected.");if(e.status=t.QUEUED,this.options.autoProcessQueue)return setTimeout(function(){return i.processQueue()},1)},t.prototype.addDirectory=function(e,t){var i,n,s=this;return i=e.createReader(),n=function(i){var n,r;for(n=0,r=i.length;n<r;n++)(e=i[n]).isFile?e.file(function(e){if(!s.options.ignoreHiddenFiles||"."!==e.name.substring(0,1))return e.fullPath=t+"/"+e.name,s.addFile(e)}):e.isDirectory&&s.addDirectory(e,t+"/"+e.name)},i.readEntries(n,function(e){return"undefined"!=typeof console&&null!==console&&"function"==typeof console.log?console.log(e):void 0})},t.prototype.removeFile=function(e){if(e.status===t.UPLOADING&&this.cancelUpload(e),this.files=a(this.files,e),this.emit("removedfile",e),0===this.files.length)return this.emit("reset")},t.prototype.removeAllFiles=function(e){var i,n,s,r;for(null==e&&(e=!1),n=0,s=(r=this.files.slice()).length;n<s;n++)((i=r[n]).status!==t.UPLOADING||e)&&this.removeFile(i);return null},t.prototype.createThumbnail=function(e){var t,i=this;return t=new FileReader,t.onload=function(){var n;return n=new Image,n.onload=function(){var t,s,r,o,l,a,p,u;return e.width=n.width,e.height=n.height,null==(r=i.options.resize.call(i,e)).trgWidth&&(r.trgWidth=i.options.thumbnailWidth),null==r.trgHeight&&(r.trgHeight=i.options.thumbnailHeight),t=document.createElement("canvas"),s=t.getContext("2d"),t.width=r.trgWidth,t.height=r.trgHeight,s.drawImage(n,null!=(l=r.srcX)?l:0,null!=(a=r.srcY)?a:0,r.srcWidth,r.srcHeight,null!=(p=r.trgX)?p:0,null!=(u=r.trgY)?u:0,r.trgWidth,r.trgHeight),o=t.toDataURL("image/png"),i.emit("thumbnail",e,o)},n.src=t.result},t.readAsDataURL(e)},t.prototype.processQueue=function(){var e,t,i,n;if(t=this.options.parallelUploads,i=this.getUploadingFiles().length,e=i,!(i>=t)&&(n=this.getQueuedFiles()).length>0){if(this.options.uploadMultiple)return this.processFiles(n.slice(0,t-i));for(;e<t;){if(!n.length)return;this.processFile(n.shift()),e++}}},t.prototype.processFile=function(e){return this.processFiles([e])},t.prototype.processFiles=function(e){var i,n,s;for(n=0,s=e.length;n<s;n++)(i=e[n]).processing=!0,i.status=t.UPLOADING,this.emit("processing",i);return this.options.uploadMultiple&&this.emit("processingmultiple",e),this.uploadFiles(e)},t.prototype._getFilesWithXhr=function(e){var t;return function(){var i,n,s,r;for(r=[],i=0,n=(s=this.files).length;i<n;i++)(t=s[i]).xhr===e&&r.push(t);return r}.call(this)},t.prototype.cancelUpload=function(e){var i,n,s,r,o,l,a;if(e.status===t.UPLOADING){for(s=0,o=(n=this._getFilesWithXhr(e.xhr)).length;s<o;s++)(i=n[s]).status=t.CANCELED;for(e.xhr.abort(),r=0,l=n.length;r<l;r++)i=n[r],this.emit("canceled",i);this.options.uploadMultiple&&this.emit("canceledmultiple",n)}else(a=e.status)!==t.ADDED&&a!==t.QUEUED||(e.status=t.CANCELED,this.emit("canceled",e),this.options.uploadMultiple&&this.emit("canceledmultiple",[e]));if(this.options.autoProcessQueue)return this.processQueue()},t.prototype.uploadFile=function(e){return this.uploadFiles([e])},t.prototype.uploadFiles=function(e){var n,s,r,o,l,a,p,u,d,c,h,m,f,g,v,y,F,E,b,w,z,L,k,C,x,D,A=this;for(g=new XMLHttpRequest,v=0,b=e.length;v<b;v++)(n=e[v]).xhr=g;g.open(this.options.method,this.options.url,!0),g.withCredentials=!!this.options.withCredentials,h=null,r=function(){var t,i,s;for(s=[],t=0,i=e.length;t<i;t++)n=e[t],s.push(A._errorProcessing(e,h||A.options.dictResponseError.replace("{{statusCode}}",g.status),g));return s},m=function(t){var i,s,r,o,l,a,p,u,d;if(null!=t)for(s=100*t.loaded/t.total,r=0,a=e.length;r<a;r++)(n=e[r]).upload={progress:s,total:t.total,bytesSent:t.loaded};else{for(i=!0,s=100,o=0,p=e.length;o<p;o++)100===(n=e[o]).upload.progress&&n.upload.bytesSent===n.upload.total||(i=!1),n.upload.progress=s,n.upload.bytesSent=n.upload.total;if(i)return}for(d=[],l=0,u=e.length;l<u;l++)n=e[l],d.push(A.emit("uploadprogress",n,s,n.upload.bytesSent));return d},g.onload=function(i){var n;if(e[0].status!==t.CANCELED&&4===g.readyState){if(h=g.responseText,g.getResponseHeader("content-type")&&~g.getResponseHeader("content-type").indexOf("application/json"))try{h=JSON.parse(h)}catch(e){i=e,h="Invalid JSON response from server."}return m(),200<=(n=g.status)&&n<300?A._finished(e,h,i):r()}},g.onerror=function(){if(e[0].status!==t.CANCELED)return r()},(null!=(k=g.upload)?k:g).onprogress=m,a={Accept:"application/json","Cache-Control":"no-cache","X-Requested-With":"XMLHttpRequest"},this.options.headers&&i(a,this.options.headers);for(o in a)l=a[o],g.setRequestHeader(o,l);if(s=new FormData,this.options.params){C=this.options.params;for(c in C)f=C[c],s.append(c,f)}for(y=0,w=e.length;y<w;y++)n=e[y],this.emit("sending",n,g,s);if(this.options.uploadMultiple&&this.emit("sendingmultiple",e,g,s),"FORM"===this.element.tagName)for(F=0,z=(x=this.element.querySelectorAll("input, textarea, select, button")).length;F<z;F++)u=(p=x[F]).getAttribute("name"),(!(d=p.getAttribute("type"))||"checkbox"!==(D=d.toLowerCase())&&"radio"!==D||p.checked)&&s.append(u,p.value);for(E=0,L=e.length;E<L;E++)n=e[E],s.append(this.options.paramName+(this.options.uploadMultiple?"[]":""),n,n.name);return g.send(s)},t.prototype._finished=function(e,i,n){var s,r,o;for(r=0,o=e.length;r<o;r++)(s=e[r]).status=t.SUCCESS,this.emit("success",s,i,n),this.emit("complete",s);if(this.options.uploadMultiple&&(this.emit("successmultiple",e,i,n),this.emit("completemultiple",e)),this.options.autoProcessQueue)return this.processQueue()},t.prototype._errorProcessing=function(e,i,n){var s,r,o;for(r=0,o=e.length;r<o;r++)(s=e[r]).status=t.ERROR,this.emit("error",s,i,n),this.emit("complete",s);if(this.options.uploadMultiple&&(this.emit("errormultiple",e,i,n),this.emit("completemultiple",e)),this.options.autoProcessQueue)return this.processQueue()},t}()).version="3.7.1",i.options={},i.optionsForElement=function(e){return e.id?i.options[r(e.id)]:void 0},i.instances=[],i.forElement=function(e){if("string"==typeof e&&(e=document.querySelector(e)),null==(null!=e?e.dropzone:void 0))throw new Error("No Dropzone found for given element. This is probably because you're trying to access it before Dropzone had the time to initialize. Use the `init` option to setup any additional observers on your Dropzone.");return e.dropzone},i.autoDiscover=!0,i.discover=function(){var e,t,n,s,r,o;for(document.querySelectorAll?n=document.querySelectorAll(".dropzone"):(n=[],(e=function(e){var t,i,s,r;for(r=[],i=0,s=e.length;i<s;i++)t=e[i],/(^| )dropzone($| )/.test(t.className)?r.push(n.push(t)):r.push(void 0);return r})(document.getElementsByTagName("div")),e(document.getElementsByTagName("form"))),o=[],s=0,r=n.length;s<r;s++)t=n[s],!1!==i.optionsForElement(t)?o.push(new i(t)):o.push(void 0);return o},i.blacklistedBrowsers=[/opera.*Macintosh.*version\/12/i],i.isBrowserSupported=function(){var e,t,n,s;if(e=!0,window.File&&window.FileReader&&window.FileList&&window.Blob&&window.FormData&&document.querySelector)if("classList"in document.createElement("a"))for(t=0,n=(s=i.blacklistedBrowsers).length;t<n;t++)s[t].test(navigator.userAgent)&&(e=!1);else e=!1;else e=!1;return e},a=function(e,t){var i,n,s,r;for(r=[],n=0,s=e.length;n<s;n++)(i=e[n])!==t&&r.push(i);return r},r=function(e){return e.replace(/[\-_](\w)/g,function(e){return e[1].toUpperCase()})},i.createElement=function(e){var t;return t=document.createElement("div"),t.innerHTML=e,t.childNodes[0]},i.elementInside=function(e,t){if(e===t)return!0;for(;e=e.parentNode;)if(e===t)return!0;return!1},i.getElement=function(e,t){var i;if("string"==typeof e?i=document.querySelector(e):null!=e.nodeType&&(i=e),null==i)throw new Error("Invalid `"+t+"` option provided. Please provide a CSS selector or a plain HTML element.");return i},i.getElements=function(e,t){var i,n,s,r,o,l,a;if(e instanceof Array){n=[];try{for(s=0,o=e.length;s<o;s++)i=e[s],n.push(this.getElement(i,t))}catch(e){e,n=null}}else if("string"==typeof e)for(n=[],r=0,l=(a=document.querySelectorAll(e)).length;r<l;r++)i=a[r],n.push(i);else null!=e.nodeType&&(n=[e]);if(null==n||!n.length)throw new Error("Invalid `"+t+"` option provided. Please provide a CSS selector, a plain HTML element or a list of those.");return n},i.confirm=function(e,t,i){return window.confirm(e)?t():null!=i?i():void 0},i.isValidFile=function(e,t){var i,n,s,r,o;if(!t)return!0;for(t=t.split(","),i=(n=e.type).replace(/\/.*$/,""),r=0,o=t.length;r<o;r++)if(s=t[r],"."===(s=s.trim()).charAt(0)){if(-1!==e.name.indexOf(s,e.name.length-s.length))return!0}else if(/\/\*$/.test(s)){if(i===s.replace(/\/.*$/,""))return!0}else if(n===s)return!0;return!1},void 0!==e&&null!==e&&(e.fn.dropzone=function(e){return this.each(function(){return new i(this,e)})}),void 0!==n&&null!==n?n.exports=i:window.Dropzone=i,i.ADDED="added",i.QUEUED="queued",i.ACCEPTED=i.QUEUED,i.UPLOADING="uploading",i.PROCESSING=i.UPLOADING,i.CANCELED="canceled",i.ERROR="error",i.SUCCESS="success",o=function(e,t){var i,n,s,r,o,l,a,p,u;if(s=!1,u=!0,n=e.document,p=n.documentElement,i=n.addEventListener?"addEventListener":"attachEvent",a=n.addEventListener?"removeEventListener":"detachEvent",l=n.addEventListener?"":"on",r=function(i){if("readystatechange"!==i.type||"complete"===n.readyState)return("load"===i.type?e:n)[a](l+i.type,r,!1),!s&&(s=!0)?t.call(e,i.type||i):void 0},o=function(){try{p.doScroll("left")}catch(e){return e,void setTimeout(o,50)}return r("poll")},"complete"!==n.readyState){if(n.createEventObject&&p.doScroll){try{u=!e.frameElement}catch(e){}u&&o()}return n[i](l+"DOMContentLoaded",r,!1),n[i](l+"readystatechange",r,!1),e[i](l+"load",r,!1)}},i._autoDiscoverFunction=function(){if(i.autoDiscover)return i.discover()},o(window,i._autoDiscoverFunction)}.call(this),n.exports});