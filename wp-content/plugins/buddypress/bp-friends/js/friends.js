parcelRequire=function(e,r,t,n){var i,o="function"==typeof parcelRequire&&parcelRequire,u="function"==typeof require&&require;function f(t,n){if(!r[t]){if(!e[t]){var i="function"==typeof parcelRequire&&parcelRequire;if(!n&&i)return i(t,!0);if(o)return o(t,!0);if(u&&"string"==typeof t)return u(t);var c=new Error("Cannot find module '"+t+"'");throw c.code="MODULE_NOT_FOUND",c}p.resolve=function(r){return e[t][1][r]||r},p.cache={};var l=r[t]=new f.Module(t);e[t][0].call(l.exports,p,l,l.exports,this)}return r[t].exports;function p(e){return f(p.resolve(e))}}f.isParcelRequire=!0,f.Module=function(e){this.id=e,this.bundle=f,this.exports={}},f.modules=e,f.cache=r,f.parent=o,f.register=function(r,t){e[r]=[function(e,r){r.exports=t},{}]};for(var c=0;c<t.length;c++)try{f(t[c])}catch(e){i||(i=e)}if(t.length){var l=f(t[t.length-1]);"object"==typeof exports&&"undefined"!=typeof module?module.exports=l:"function"==typeof define&&define.amd?define(function(){return l}):n&&(this[n]=l)}if(parcelRequire=f,i)throw i;return f}({"pMhP":[function(require,module,exports) {
function t(e){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(e)}function e(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function r(t,e){for(var r=0;r<e.length;r++){var n=e[r];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}function n(t,e,n){return e&&r(t.prototype,e),n&&r(t,n),t}function o(t,e,r){return(o="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,e,r){var n=i(t,e);if(n){var o=Object.getOwnPropertyDescriptor(n,e);return o.get?o.get.call(r):o.value}})(t,e,r||t)}function i(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=p(t)););return t}function c(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&u(t,e)}function u(t,e){return(u=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}function s(t){var e=f();return function(){var r,n=p(t);if(e){var o=p(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return a(this,r)}}function a(e,r){return!r||"object"!==t(r)&&"function"!=typeof r?l(e):r}function l(t){if(void 0===t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return t}function f(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],function(){})),!0}catch(t){return!1}}function p(t){return(p=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}var d=wp,y=d.i18n,b=y.__,v=y.sprintf,g=bp,m=g.dynamicWidgetBlock,h=function(t){c(i,m);var r=s(i);function i(){return e(this,i),r.apply(this,arguments)}return n(i,[{key:"loop",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"",r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"active",n=o(p(i.prototype),"useTemplate",this).call(this,"bp-friends-item"),c=document.querySelector("#"+e),u="";t&&t.length?t.forEach(function(t){if("active"===r&&t.last_activity)t.extra=v(b("Active %s","buddypress"),t.last_activity.timediff);else if("popular"===r&&t.total_friend_count){var e=parseInt(t.total_friend_count,10);t.extra=0===e?b("No friends","buddypress"):1===e?b("1 friend","buddypress"):v(b("%s friends","buddypress"),t.total_friend_count)}else"newest"===r&&t.registered_since&&(t.extra=v(b("Registered %s","buddypress"),t.registered_since));t.avatar_alt=v(b("Profile picture of %s","buddypress"),t.name),u+=n(t)}):u='<div class="widget-error">'+b("Sorry, no members were found.","buddypress")+"</div>",c.innerHTML=u}},{key:"start",value:function(){var t=this;this.blocks.forEach(function(e,r){var n=e.selector,c=e.query_args.type,u=document.querySelector("#"+n).closest(".bp-dynamic-block-container");o(p(i.prototype),"getItems",t).call(t,c,r),u.querySelectorAll(".item-options a").forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),e.target.closest(".item-options").querySelector(".selected").classList.remove("selected"),e.target.classList.add("selected");var n=e.target.getAttribute("data-bp-sort");n!==t.blocks[r].query_args.type&&o(p(i.prototype),"getItems",t).call(t,n,r)})})})}}]),i}(),_=window.bpFriendsSettings||{},w=window.bpFriendsBlocks||{},O=new h(_,w);"loading"===document.readyState?document.addEventListener("DOMContentLoaded",O.start()):O.start();
},{}]},{},["pMhP"], null)
//# sourceMappingURL=/bp-friends/js/friends.js.map