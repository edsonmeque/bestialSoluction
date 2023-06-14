var P=(c,e)=>()=>(e||c((e={exports:{}}).exports,e),e.exports);var F=P((b,j)=>{(function(c,e){typeof b=="object"&&typeof j<"u"?e():typeof define=="function"&&define.amd?define(e):e()})(0,function(){function c(){}function e(n){if(!(this instanceof e))throw new TypeError("Promises must be constructed via new");if(typeof n!="function")throw new TypeError("not a function");this._state=0,this._handled=!1,this._value=void 0,this._deferreds=[],v(n,this)}function y(n,t){for(;n._state===3;)n=n._value;n._state!==0?(n._handled=!0,e._immediateFn(function(){var o=n._state===1?t.onFulfilled:t.onRejected;if(o!==null){var r;try{r=o(n._value)}catch(i){return void u(t.promise,i)}s(t.promise,r)}else(n._state===1?s:u)(t.promise,n._value)})):n._deferreds.push(t)}function s(n,t){try{if(t===n)throw new TypeError("A promise cannot be resolved with itself.");if(t&&(typeof t=="object"||typeof t=="function")){var o=t.then;if(t instanceof e)return n._state=3,n._value=t,void d(n);if(typeof o=="function")return void v(function(r,i){return function(){r.apply(i,arguments)}}(o,t),n)}n._state=1,n._value=t,d(n)}catch(r){u(n,r)}}function u(n,t){n._state=2,n._value=t,d(n)}function d(n){n._state===2&&n._deferreds.length===0&&e._immediateFn(function(){n._handled||e._unhandledRejectionFn(n._value)});for(var t=0,o=n._deferreds.length;o>t;t++)y(n,n._deferreds[t]);n._deferreds=null}function v(n,t){var o=!1;try{n(function(r){o||(o=!0,s(t,r))},function(r){o||(o=!0,u(t,r))})}catch(r){if(o)return;o=!0,u(t,r)}}var _=function(n){var t=this.constructor;return this.then(function(o){return t.resolve(n()).then(function(){return o})},function(o){return t.resolve(n()).then(function(){return t.reject(o)})})},g=setTimeout;e.prototype.catch=function(n){return this.then(null,n)},e.prototype.then=function(n,t){var o=new this.constructor(c);return y(this,new function(r,i,h){this.onFulfilled=typeof r=="function"?r:null,this.onRejected=typeof i=="function"?i:null,this.promise=h}(n,t,o)),o},e.prototype.finally=_,e.all=function(n){return new e(function(t,o){function r(m,f){try{if(f&&(typeof f=="object"||typeof f=="function")){var w=f.then;if(typeof w=="function")return void w.call(f,function(p){r(m,p)},o)}i[m]=f,--h==0&&t(i)}catch(p){o(p)}}if(!n||typeof n.length>"u")throw new TypeError("Promise.all accepts an array");var i=Array.prototype.slice.call(n);if(i.length===0)return t([]);for(var h=i.length,a=0;i.length>a;a++)r(a,i[a])})},e.resolve=function(n){return n&&typeof n=="object"&&n.constructor===e?n:new e(function(t){t(n)})},e.reject=function(n){return new e(function(t,o){o(n)})},e.race=function(n){return new e(function(t,o){for(var r=0,i=n.length;i>r;r++)n[r].then(t,o)})},e._immediateFn=typeof setImmediate=="function"&&function(n){setImmediate(n)}||function(n){g(n,0)},e._unhandledRejectionFn=function(n){console!==void 0&&console&&console.warn("Possible Unhandled Promise Rejection:",n)};var l=function(){if(typeof self<"u")return self;if(typeof window<"u")return window;if(typeof global<"u")return global;throw Error("unable to locate global object")}();l.Promise?l.Promise.prototype.finally||(l.Promise.prototype.finally=_):l.Promise=e})});export default F();
