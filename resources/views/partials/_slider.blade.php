﻿<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: http://www.jssor.com -->
<!-- This is deep minimized code which works independently. -->
<script type="text/javascript">
(function(f,g,c,i,e,k,h){/*! Jssor */
new(function(){});var d={fd:function(a){return a},Ne:function(a){return-a*(a-2)}};var b=new function(){var j=this,xb=/\S+/g,F=1,wb=2,cb=3,bb=4,fb=5,G,r=0,l=0,s=0,Y=0,A=0,I=navigator,kb=I.appName,o=I.userAgent,p=parseFloat;function Fb(){if(!G){G={Ae:"ontouchstart"in f||"createTouch"in g};var a;if(I.pointerEnabled||(a=I.msPointerEnabled))G.Wc=a?"msTouchAction":"touchAction"}return G}function v(i){if(!r){r=-1;if(kb=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var e=o.indexOf("MSIE");r=F;s=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on Y=@_jscript_version@*/;l=g.documentMode||s}else if(kb=="Netscape"&&!!f.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),h=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=wb;l=p(o.substring(d+8))}else if(b>=0){var j=o.substring(0,b).lastIndexOf("/");r=h>=0?bb:cb;l=p(o.substring(j+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;l=s=p(a[1])}}if(c>=0)A=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=fb;l=p(a[2])}}}return i==r}function q(){return v(F)}function vb(){return q()&&(l<6||g.compatMode=="BackCompat")}function ab(){return v(cb)}function eb(){return v(fb)}function rb(){return ab()&&A>534&&A<535}function J(){v();return A>537||l>42||r==F&&l>=11}function tb(){return q()&&l<9}function sb(a){var b,c;return function(f){if(!b){b=e;var d=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,e){var b=a;if(e)b=g+d;if(f.style[b]!=h)return c=b})}return c}}function qb(b){var a;return function(c){a=a||sb(b)(c)||b;return a}}var K=qb("transform");function jb(a){return{}.toString.call(a)}var gb={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){gb["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(jb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function D(a){return a==i?String(a):gb[jb(a)]||"object"}function hb(a){for(var b in a)return e}function B(a){try{return D(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function u(a,b){return{x:a,y:b}}function nb(b,a){setTimeout(b,a||0)}function H(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function pb(b,a){if(l<9)b.style.filter=a}j.Be=Fb;j.ed=q;j.De=ab;j.Re=J;sb("transform");j.md=function(){return l};j.Vc=nb;function V(a){a.constructor===V.caller&&a.Bc&&a.Bc.apply(a,V.caller.arguments)}j.Bc=V;j.ib=function(a){if(j.We(a))a=g.getElementById(a);return a};function t(a){return a||f.event}j.Ac=t;j.Wb=function(b){b=t(b);var a=b.target||b.srcElement||g;if(a.nodeType==3)a=j.yc(a);return a};j.Ec=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function w(c,d,a){if(a!==h)c.style[d]=a==h?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,i);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function X(b,c,a,d){if(a!==h){if(a==i)a="";else d&&(a+="px");w(b,c,a)}else return p(w(b,c))}function m(c,a){var d=a?X:w,b;if(a&4)b=qb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Ab(b){if(q()&&s<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Cb(b,a,f){if(q()&&s<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=H(h,[i],d);pb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var L={X:["rotate"],Q:["rotateX"],R:["rotateY"],Bb:["skewX"],Eb:["skewY"]};if(!J())L=C(L,{s:["scaleX",2],q:["scaleY",2],H:["translateZ",1]});function M(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.Q;delete a.R;delete a.H}b.f(a,function(d,b){var a=L[b];if(a){var e=a[1]||0;if(N[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(J()){if(a.bb||a.Y||a.H!=h)c+=" translate3d("+(a.bb||0)+"px,"+(a.Y||0)+"px,"+(a.H||0)+"px)";if(a.s==h)a.s=1;if(a.q==h)a.q=1;if(a.s!=1||a.q!=1)c+=" scale3d("+a.s+", "+a.q+", 1)"}}d.style[K(d)]=c}j.Dc=m("transformOrigin",4);j.Me=m("backfaceVisibility",4);j.Le=m("transformStyle",4);j.Pe=m("perspective",6);j.Je=m("perspectiveOrigin",4);j.Ie=function(a,b){if(q()&&s<9||s<10&&vb())a.style.zoom=b==1?"":b;else{var c=K(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=H(e,[g],f);a.style[c]=d}};j.bc=function(b,a){return function(c){c=t(c);var e=c.type,d=c.relatedTarget||(e=="mouseout"?c.toElement:c.fromElement);(!d||d!==a&&!j.He(a,d))&&b(c)}};j.a=function(a,d,b,c){a=j.ib(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};j.F=function(a,c,d,b){a=j.ib(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.Jb=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=e;a.returnValue=k};j.Ge=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=e};j.I=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.Mb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function ib(a,c,e,b){b=b||"u";for(a=a?a.firstChild:i;a;a=a.nextSibling)if(a.nodeType==1){if(S(a,b)==c)return a;if(!e){var d=ib(a,c,e,b);if(d)return d}}}j.p=ib;function Q(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:i;a;a=a.nextSibling)if(a.nodeType==1){S(a,b)==d&&c.push(a);if(!f){var e=Q(a,d,f,b);if(e.length)c=c.concat(e)}}return c}function db(a,c,d){for(a=a?a.firstChild:i;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=db(a,c,d);if(b)return b}}}j.Xd=db;j.Pd=function(b,a){return b.getElementsByTagName(a)};function C(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==h){a=c[b];var i=d[b];d[b]=g&&(B(i)||B(a))?C(g,{},i,a):a}}return d}j.O=C;function W(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=W(a,b);e=!hb(a)}!e&&(d[c]=a)}}return d}j.Qc=function(a){return D(a)=="function"};j.We=function(a){return D(a)=="string"};j.qd=function(a){return!isNaN(p(a))&&isFinite(a)};j.f=n;function P(a){return g.createElement(a)}j.ab=function(){return P("DIV")};j.Ic=function(){};function T(b,c,a){if(a==h)return b.getAttribute(c);b.setAttribute(c,a)}function S(a,b){return T(a,b)||T(a,"data-"+b)}j.v=T;j.i=S;function y(b,a){if(a==h)return b.className;b.className=a}j.ac=y;function mb(b){var a={};n(b,function(b){if(b!=h)a[b]=b});return a}function ob(b,a){return b.match(a||xb)}function O(b,a){return mb(ob(b||"",a))}j.Qd=ob;function Z(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function E(a,c,b){y(a,Z(" ",C(W(O(y(a)),O(c)),O(b))))}j.yc=function(a){return a.parentNode};j.U=function(a){j.T(a,"none")};j.W=function(a,b){j.T(a,b?"none":"")};j.Dd=function(b,a){b.removeAttribute(a)};j.Id=function(){return q()&&l<10};j.Jd=function(d,a){if(a)d.style.clip="rect("+c.round(a.k||a.n||0)+"px "+c.round(a.C)+"px "+c.round(a.B)+"px "+c.round(a.l||a.o||0)+"px)";else if(a!==h){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=H(g,f,"");b.Gb(d,e)}};j.N=function(){return+new Date};j.G=function(b,a){b.appendChild(a)};j.Kb=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.Ab=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.wd=function(a,b){n(a,function(a){j.Ab(a,b)})};j.Oc=function(a){j.wd(j.Mb(a,e),a)};j.xd=function(a,b){var c=j.yc(a);b&1&&j.A(a,(j.j(c)-j.j(a))/2);b&2&&j.D(a,(j.m(c)-j.m(a))/2)};j.pd=function(b,a){return parseInt(b,a||10)};j.Ad=p;j.He=function(b,a){var c=g.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function U(d,c,b){var a=d.cloneNode(!c);!b&&j.Dd(a,"id");return a}j.lb=U;j.rb=function(d,f){var a=new Image;function b(e,d){j.F(a,"load",b);j.F(a,"abort",c);j.F(a,"error",c);f&&f(a,d)}function c(a){b(a,e)}if(eb()&&l<11.6||!d)b(!d);else{j.a(a,"load",b);j.a(a,"abort",c);j.a(a,"error",c);a.src=d}};j.Kd=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){j.rb(a.src,b)});b()};j.Td=function(a,g,i,h){if(h)a=U(a);var c=Q(a,g);if(!c.length)c=b.Pd(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=U(i);y(e,y(d));b.Gb(e,d.style.cssText);b.Kb(e,d);b.Ab(d)}return a};function Db(a){var l=this,p="",r=["av","pv","ds","dn"],e=[],q,k=0,f=0,d=0;function i(){E(a,q,e[d||k||f&2||f]);b.E(a,"pointer-events",d?"none":"")}function c(){k=0;i();j.F(g,"mouseup",c);j.F(g,"touchend",c);j.F(g,"touchcancel",c)}function o(a){if(d)j.Jb(a);else{k=4;i();j.a(g,"mouseup",c);j.a(g,"touchend",c);j.a(g,"touchcancel",c)}}l.Md=function(a){if(a===h)return f;f=a&2||a&1;i()};l.Cb=function(a){if(a===h)return!d;d=a?0:3;i()};l.eb=a=j.ib(a);var m=b.Qd(y(a));if(m)p=m.shift();n(r,function(a){e.push(p+a)});q=Z(" ",e);e.unshift("");j.a(a,"mousedown",o);j.a(a,"touchstart",o)}j.oc=function(a){return new Db(a)};j.E=w;j.pb=m("overflow");j.D=m("top",2);j.A=m("left",2);j.j=m("width",2);j.m=m("height",2);j.tc=m("marginLeft",2);j.Ub=m("marginTop",2);j.z=m("position");j.T=m("display");j.u=m("zIndex",1);j.sc=function(b,a,c){if(a!=h)Cb(b,a,c);else return Ab(b)};j.Gb=function(a,b){if(b!=h)a.style.cssText=b;else return a.style.cssText};j.yd=function(b,a){if(a===h){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var R={ob:j.sc,k:j.D,l:j.A,Db:j.j,zb:j.m,nb:j.z,hf:j.T,mb:j.u};function x(f,l){var e=tb(),b=J(),d=rb(),g=K(f);function k(b,d,a){var e=b.cb(u(-d/2,-a/2)),f=b.cb(u(d/2,-a/2)),g=b.cb(u(d/2,a/2)),h=b.cb(u(-d/2,a/2));b.cb(u(300,300));return u(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.H||0,p=(a.Q||0)%360,q=(a.R||0)%360,u=(a.X||0)%360,l=a.s,m=a.q,f=a.gf;if(l==h)l=1;if(m==h)m=1;if(f==h)f=1;if(e){n=0;p=0;q=0;f=0}var c=new zb(a.bb,a.Y,n);c.Q(p);c.R(q);c.Rd(u);c.Fd(a.Bb,a.Eb);c.Yb(l,m,f);if(b){c.kb(a.o,a.n);d.style[g]=c.Ud()}else if(!Y||Y<9){var o="",i={x:0,y:0};if(a.S)i=k(c,a.S,a.gb);j.Ub(d,i.y);j.tc(d,i.x);o=c.zd();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=H(s,[t],o);pb(d,r)}}x=function(e,c){c=c||{};var g=c.o,k=c.n,f;n(R,function(a,b){f=c[b];f!==h&&a(e,f)});j.Jd(e,c.c);if(!b){g!=h&&j.A(e,(c.Mc||0)+g);k!=h&&j.D(e,(c.Pc||0)+k)}if(c.sd)if(d)nb(j.I(i,M,e,c));else a(e,c)};j.jb=M;if(d)j.jb=x;if(e)j.jb=a;else if(!b)a=M;j.P=x;x(f,l)}j.jb=x;j.P=x;function zb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],h=c.sin,g=c.cos,l=c.tan;function f(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(i,(a||b).concat(c))}d.Yb=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.kb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.Q=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([1,0,0,0,0,d,i,0,0,-i,d,0,0,0,0,1])}};d.R=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,0,-i,0,0,1,0,0,i,0,d,0,0,0,0,1])}};d.Rd=function(c){if(c){a=f(c);var d=g(a),i=h(a);b=e([d,i,0,0,-i,d,0,0,0,0,1,0,0,0,0,1])}};d.Fd=function(a,c){if(a||c){j=f(a);k=f(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.cb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.Ud=function(){return"matrix3d("+b.join(",")+")"};d.zd=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.s=function(b,c){return a.Sc(b,c,0)};a.q=function(b,c){return a.Sc(b,0,c)};a.Sc=function(a,c,d){return b(a,[[c,0],[0,d]])};a.cb=function(d,c){var a=b(d,[[c.x],[c.y]]);return u(a[0][0],a[1][0])}};var N={Mc:0,Pc:0,o:0,n:0,fb:1,s:1,q:1,X:0,Q:0,R:0,bb:0,Y:0,H:0,Bb:0,Eb:0};j.Ee=function(c,d){var a=c||{};if(c)if(b.Qc(c))a={M:a};else if(b.Qc(c.c))a.c={M:c.c};a.M=a.M||d;if(a.c)a.c.M=a.c.M||d;return a};j.Fe=function(l,m,x,q,z,A,n){var a=m;if(l){a={};for(var g in m){var B=A[g]||1,w=z[g]||[0,1],f=(x-w[0])/w[1];f=c.min(c.max(f,0),1);f=f*B;var u=c.floor(f);if(f!=u)f-=u;var j=q.M||d.fd,k,C=l[g],o=m[g];if(b.qd(o)){j=q[g]||j;var y=j(f);k=C+o*y}else{k=b.O({Lb:{}},l[g]);var v=q[g]||{};b.f(o.Lb||o,function(d,a){j=v[a]||v.M||j;var c=j(f),b=d*c;k.Lb[a]=b;k[a]+=b})}a[g]=k}var t=b.f(m,function(b,a){return N[a]!=h});t&&b.f(N,function(c,b){if(a[b]==h&&l[b]!==h)a[b]=l[b]});if(t){if(a.fb)a.s=a.q=a.fb;a.S=n.S;a.gb=n.gb;a.sd=e}}if(m.c&&n.kb){var p=a.c.Lb,s=(p.k||0)+(p.B||0),r=(p.l||0)+(p.C||0);a.l=(a.l||0)+r;a.k=(a.k||0)+s;a.c.l-=r;a.c.C-=r;a.c.k-=s;a.c.B-=s}if(a.c&&b.Id()&&!a.c.k&&!a.c.l&&!a.c.n&&!a.c.o&&a.c.C==n.S&&a.c.B==n.gb)a.c=i;return a}};function m(){var a=this,d=[];function i(a,b){d.push({dc:a,cc:b})}function h(a,c){b.f(d,function(b,e){b.dc==a&&b.cc===c&&d.splice(e,1)})}a.hb=a.addEventListener=i;a.removeEventListener=h;a.g=function(a){var c=[].slice.call(arguments,1);b.f(d,function(b){b.dc==a&&b.cc.apply(f,c)})}}var l=function(B,F,h,K,N,M){B=B||0;var a=this,q,n,o,u,D=0,H,I,G,E,A=0,j=0,m=0,z,l,d,g,p,y,w=[],x;function P(a){d+=a;g+=a;l+=a;j+=a;m+=a;A+=a}function t(o){var f=o;if(p)if(!y&&(f>=g||f<d)||y&&f>=d)f=((f-d)%p+p)%p+d;if(!z||u||j!=f){var i=c.min(f,g);i=c.max(i,d);if(!z||u||i!=m){if(M){var k=(i-l)/(F||1);if(h.Ue)k=1-k;var n=b.Fe(N,M,k,H,G,I,h);if(x)b.f(n,function(b,a){x[a]&&x[a](K,b)});else b.P(K,n)}a.Tb(m-l,i-l);var r=m,q=m=i;b.f(w,function(b,c){var a=!z&&y||f<=j?w[w.length-c-1]:b;a.K(m-A)});j=f;z=e;a.yb(r,q)}}}function C(a,b,e){b&&a.Qb(g);if(!e){d=c.min(d,a.bd()+A);g=c.max(g,a.Sb()+A)}w.push(a)}var r=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(b.De()&&b.md()<7)r=i;r=r||function(a){b.Vc(a,h.Zc)};function J(){if(q){var d=b.N(),e=c.min(d-D,h.ad),a=j+e*o;D=d;if(a*o>=n*o)a=n;t(a);if(!u&&a*o>=n*o)L(E);else r(J)}}function s(f,h,i){if(!q){q=e;u=i;E=h;f=c.max(f,d);f=c.min(f,g);n=f;o=n<j?-1:1;a.id();D=b.N();r(J)}}function L(b){if(q){u=q=E=k;a.Xc();b&&b()}}a.Jc=function(a,b,c){s(a?j+a:g,b,c)};a.Nc=s;a.db=L;a.ze=function(a){s(a)};a.V=function(){return j};a.Cc=function(){return n};a.ub=function(){return m};a.K=t;a.kb=function(a){t(j+a)};a.xc=function(){return q};a.Oe=function(a){p=a};a.Qb=P;a.zc=function(a,b){C(a,0,b)};a.Zb=function(a){C(a,1)};a.bd=function(){return d};a.Sb=function(){return g};a.yb=a.id=a.Xc=a.Tb=b.Ic;a.jc=b.N();h=b.O({Zc:16,ad:50},h);p=h.Rb;y=h.Bd;x=h.Ld;d=l=B;g=B+F;I=h.Ve||{};G=h.vd||{};H=b.Ee(h.qb)};new(function(){});var j=function(p,fc){var o=this;function Bc(){var a=this;l.call(a,-1e8,2e8);a.Ce=function(){var b=a.ub(),d=c.floor(b),f=t(d),e=b-c.floor(b);return{Z:f,Yd:d,nb:e}};a.yb=function(b,a){var d=c.floor(a);if(d!=a&&a>b)d++;Tb(d,e);o.g(j.Zd,t(a),t(b),a,b)}}function Ac(){var a=this;l.call(a,0,0,{Rb:r});b.f(A,function(b){D&1&&b.Oe(r);a.Zb(b);b.Qb(kb/bc)})}function zc(){var a=this,b=Ub.eb;l.call(a,-1,2,{qb:d.fd,Ld:{nb:Zb},Rb:r},b,{nb:1},{nb:-2});a.Nb=b}function mc(n,m){var b=this,d,f,g,h,c;l.call(b,-1e8,2e8,{ad:100});b.id=function(){O=e;R=i;o.g(j.ae,t(w.V()),w.V())};b.Xc=function(){O=k;h=k;var a=w.Ce();o.g(j.be,t(w.V()),w.V());!a.nb&&Dc(a.Yd,s)};b.yb=function(j,i){var b;if(h)b=c;else{b=f;if(g){var e=i/g;b=a.ce(e)*(f-d)+d}}w.K(b)};b.Ib=function(a,e,c,h){d=a;f=e;g=c;w.K(a);b.K(0);b.Nc(c,h)};b.de=function(a){h=e;c=a;b.Jc(a,i,e)};b.ee=function(a){c=a};w=new Bc;w.zc(n);w.zc(m)}function oc(){var c=this,a=Xb();b.u(a,0);b.E(a,"pointerEvents","none");c.eb=a;c.Fb=function(){b.U(a);b.Oc(a)}}function xc(p,f){var d=this,v,Q,w,n,C=[],y,F,Y,M,W,E,N,g,x,q;l.call(d,-u,u+1,{});function G(a){v&&v.od();X(p,a,0);E=e;v=new J.J(p,J,b.Ad(b.i(p,"idle"))||lc,!I);v.K(0)}function bb(){v.jc<J.jc&&G()}function S(p,r,m){if(!M){M=e;if(n&&m){var g=m.width,c=m.height,l=g,i=c;if(g&&c&&a.sb){if(a.sb&3&&(!(a.sb&4)||g>L||c>K)){var h=k,q=L/K*c/g;if(a.sb&1)h=q>1;else if(a.sb&2)h=q<1;l=h?g*K/c:L;i=h?K:c*L/g}b.j(n,l);b.m(n,i);b.D(n,(K-i)/2);b.A(n,(L-l)/2)}b.z(n,"absolute");o.g(j.fe,f)}}b.U(r);p&&p(d)}function ab(b,c,e,g){if(g==R&&s==f&&I)if(!Cc){var a=t(b);B.Se(a,f,c,d,e);c.ge();U.Qb(a-U.bd()-1);U.K(a);z.Ib(b,b,0)}}function eb(b){if(b==R&&s==f){if(!g){var a=i;if(B)if(B.Z==f)a=B.Ke();else B.Fb();bb();g=new vc(p,f,a,v);g.nd(q)}!g.xc()&&g.ic()}}function H(e,h,l){if(e==f){if(e!=h)A[h]&&A[h].hd();else!l&&g&&g.he();q&&q.Cb();var m=R=b.N();d.rb(b.I(i,eb,m))}else{var k=c.min(f,e),j=c.max(f,e),o=c.min(j-k,k+r-j),n=u+a.ie-1;(!W||o<=n)&&d.rb()}}function fb(){if(s==f&&g){g.db();q&&q.je();q&&q.ke();g.gd()}}function hb(){s==f&&g&&g.db()}function db(a){!P&&o.g(j.le,f,a)}function T(){q=x.pInstance;g&&g.nd(q)}d.rb=function(c,a){a=a||w;if(C.length&&!M){b.W(a);if(!Y){Y=e;o.g(j.me,f);b.f(C,function(a){if(!b.v(a,"src")){a.src=b.i(a,"src2")||"";b.T(a,a["display-origin"])}})}b.Kd(C,n,b.I(i,S,c,a))}else S(c,a)};d.ne=function(){var j=f;if(a.kd<0)j-=r;var e=j+a.kd*tc;if(D&2)e=t(e);if(!(D&1)&&!ib)e=c.max(0,c.min(e,r-u));if(e!=f){if(B){var g=B.Te(r);if(g){var k=R=b.N(),h=A[t(e)];return h.rb(b.I(i,ab,e,h,g,k),w)}}cb(e)}else if(a.tb){d.hd();H(f,f)}};d.lc=function(){H(f,f,e)};d.hd=function(){q&&q.je();q&&q.ke();d.ld();g&&g.oe();g=i;G()};d.ge=function(){b.U(p)};d.ld=function(){b.W(p)};d.pe=function(){q&&q.Cb()};function X(a,f,c,d){if(b.v(a,"jssor-slider"))return;if(!E){if(a.tagName=="IMG"){C.push(a);if(!b.v(a,"src")){W=e;a["display-origin"]=b.T(a);b.U(a)}}var g=b.yd(a);if(g){var i=new Image;b.i(i,"src2",g);C.push(i)}if(c){b.u(a,(b.u(a)||0)+1);b.Ub(a,b.Ub(a)||0);b.tc(a,b.tc(a)||0);b.jb(a,{H:0})}d=d||a.style.pointerEvents||b.ac(a)}var j=b.Mb(a);b.f(j,function(g){var i=g.tagName,j=b.i(g,"u");if(j=="player"&&!x){x=g;if(x.pInstance)T();else b.a(x,"dataavailable",T)}if(j=="caption"){if(f){b.Dc(g,b.i(g,"to"));b.Me(g,b.i(g,"bf"));N&&b.i(g,"3d")&&b.Le(g,"preserve-3d")}else if(!b.ed()){var h=b.lb(g,k,e);b.Kb(h,g,a);b.Ab(g,a);g=h;f=e}}else if(!E&&!c&&!n){if(i=="A"){if(b.i(g,"u")=="image")n=b.Xd(g,"IMG");else n=b.p(g,"image",e);if(n){y=g;b.T(y,"block");b.P(y,V);F=b.lb(y,e);b.z(y,"relative");b.sc(F,0);b.E(F,"backgroundColor","#000")}}else if(i=="IMG"&&b.i(g,"u")=="image")n=g;if(n){n.border=0;b.P(n,V)}}X(g,f,c+1,d)});if(!E&&c)!d&&b.E(a,"pointerEvents",a.tagName=="A"?"all":c>1?h:"none")}d.Tb=function(c,b){var a=u-b;Zb(Q,a)};d.Z=f;m.call(d);N=b.i(p,"p");b.Pe(p,N);b.Je(p,b.i(p,"po"));var O=b.p(p,"thumb",e);if(O){d.qe=b.lb(O);b.U(O)}b.W(p);w=b.lb(gb);b.u(w,1e3);b.a(p,"click",db);G(e);d.dd=n;d.Yc=F;d.Nb=Q=p;b.G(Q,w);o.hb(203,H);o.hb(28,hb);o.hb(24,fb)}function vc(y,f,p,q){var a=this,m=0,u=0,g,h,d,c,i,t,r,n=A[f];l.call(a,0,0);function v(){b.Oc(N);cc&&i&&n.Yc&&b.G(N,n.Yc);b.W(N,!i&&n.dd)}function w(){a.ic()}function x(b){r=b;a.db();a.ic()}a.ic=function(){var b=a.ub();if(!C&&!O&&!r&&s==f){if(!b){if(g&&!i){i=e;a.gd(e);o.g(j.re,f,m,u,g,c)}v()}var k,p=j.jd;if(b!=c)if(b==d)k=c;else if(b==h)k=d;else if(!b)k=h;else k=a.Cc();o.g(p,f,b,m,h,d,c);var l=I&&(!E||F);if(b==c)(d!=c&&!(E&12)||l)&&n.ne();else(l||b!=d)&&a.Nc(k,w)}};a.he=function(){d==c&&d==a.ub()&&a.K(h)};a.oe=function(){B&&B.Z==f&&B.Fb();var b=a.ub();b<c&&o.g(j.jd,f,-b-1,m,h,d,c)};a.gd=function(a){p&&b.pb(lb,a&&p.Hc.Ze?"":"hidden")};a.Tb=function(b,a){if(i&&a>=g){i=k;v();n.ld();B.Fb();o.g(j.se,f,m,u,g,c)}o.g(j.te,f,a,m,h,d,c)};a.nd=function(a){if(a&&!t){t=a;a.hb($JssorPlayer$.td,x)}};p&&a.Zb(p);g=a.Sb();a.Zb(q);h=g+q.uc;c=a.Sb();d=I?g+q.Fc:c}function Kb(a,c,d){b.A(a,c);b.D(a,d)}function Zb(c,b){var a=x>0?x:fb,d=zb*b*(a&1),e=Ab*b*(a>>1&1);Kb(c,d,e)}function Pb(){qb=O;Ib=z.Cc();G=w.V()}function gc(){Pb();if(C||!F&&E&12){z.db();o.g(j.ue)}}function ec(f){if(!C&&(F||!(E&12))&&!z.xc()){var d=w.V(),b=c.ceil(G);if(f&&c.abs(H)>=a.wc){b=c.ceil(d);b+=jb}if(!(D&1))b=c.min(r-u,c.max(b,0));var e=c.abs(b-d);e=1-c.pow(1-e,5);if(!P&&qb)z.ze(Ib);else if(d==b){tb.pe();tb.lc()}else z.Ib(d,b,e*Vb)}}function Hb(a){!b.i(b.Wb(a),"nodrag")&&b.Jb(a)}function rc(a){Yb(a,1)}function Yb(a,c){a=b.Ac(a);var h=b.Wb(a);if(!M&&!b.i(h,"nodrag")&&sc()&&(!c||a.touches.length==1)){C=e;yb=k;R=i;b.a(g,c?"touchmove":"mousemove",Bb);b.N();P=0;gc();if(!qb)x=0;if(c){var f=a.touches[0];ub=f.clientX;vb=f.clientY}else{var d=b.Ec(a);ub=d.x;vb=d.y}H=0;hb=0;jb=0;o.g(j.ve,t(G),G,a)}}function Bb(d){if(C){d=b.Ac(d);var f;if(d.type!="mousemove"){var l=d.touches[0];f={x:l.clientX,y:l.clientY}}else f=b.Ec(d);if(f){var j=f.x-ub,k=f.y-vb;if(c.floor(G)!=G)x=x||fb&M;if((j||k)&&!x){if(M==3)if(c.abs(k)>c.abs(j))x=2;else x=1;else x=M;if(ob&&x==1&&c.abs(k)-c.abs(j)>3)yb=e}if(x){var a=k,i=Ab;if(x==1){a=j;i=zb}if(!(D&1)){if(a>0){var g=i*s,h=a-g;if(h>0)a=g+c.sqrt(h)*5}if(a<0){var g=i*(r-u-s),h=-a-g;if(h>0)a=-g-c.sqrt(h)*5}}if(H-hb<-2)jb=0;else if(H-hb>2)jb=-1;hb=H;H=a;sb=G-H/i/(Y||1);if(H&&x&&!yb){b.Jb(d);if(!O)z.de(sb);else z.ee(sb)}}}}}function bb(){qc();if(C){C=k;b.N();b.F(g,"mousemove",Bb);b.F(g,"touchmove",Bb);P=H;z.db();var a=w.V();o.g(j.we,t(a),a,t(G),G);E&12&&Pb();ec(e)}}function jc(c){if(P){b.Ge(c);var a=b.Wb(c);while(a&&v!==a){a.tagName=="A"&&b.Jb(c);try{a=a.parentNode}catch(d){break}}}}function Jb(a){A[s];s=t(a);tb=A[s];Tb(a);return s}function Dc(a,b){x=0;Jb(a);o.g(j.xe,t(a),b)}function Tb(a,c){wb=a;b.f(S,function(b){b.nc(t(a),a,c)})}function sc(){var b=j.Uc||0,a=X;if(ob)a&1&&(a&=1);j.Uc|=a;return M=a&~b}function qc(){if(M){j.Uc&=~X;M=0}}function Xb(){var a=b.ab();b.P(a,V);b.z(a,"absolute");return a}function t(a){return(a%r+r)%r}function kc(b,d){if(d)if(!D){b=c.min(c.max(b+wb,0),r-u);d=k}else if(D&2){b=t(b+wb);d=k}cb(b,a.qc,d)}function xb(){b.f(S,function(a){a.mc(a.Hb.af<=F)})}function hc(){if(!F){F=1;xb();if(!C){E&12&&ec();E&3&&A[s]&&A[s].lc()}}}function Ec(){if(F){F=0;xb();C||!(E&12)||gc()}}function ic(){V={Db:L,zb:K,k:0,l:0};b.f(T,function(a){b.P(a,V);b.z(a,"absolute");b.pb(a,"hidden");b.U(a)});b.P(gb,V)}function ab(b,a){cb(b,a,e)}function cb(g,f,l){if(Rb&&(!C&&(F||!(E&12))||a.Lc)){O=e;C=k;z.db();if(f==h)f=Vb;var d=Cb.ub(),b=g;if(l){b=d+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}if(D&2)b=t(b);if(!(D&1))b=c.max(0,c.min(b,r-u));var j=(b-d)%r;b=d+j;var i=d==b?0:f*c.abs(j);i=c.min(i,f*u*1.5);z.Ib(d,b,i||1)}}o.ye=cb;o.Jc=function(){if(!I){I=e;A[s]&&A[s].lc()}};o.Qe=function(){return P};function W(){return b.j(y||p)}function nb(){return b.m(y||p)}o.S=W;o.gb=nb;function Eb(c,d){if(c==h)return b.j(p);if(!y){var a=b.ab(g);b.ac(a,b.ac(p));b.Gb(a,b.Gb(p));b.T(a,"block");b.z(a,"relative");b.D(a,0);b.A(a,0);b.pb(a,"visible");y=b.ab(g);b.z(y,"absolute");b.D(y,0);b.A(y,0);b.j(y,b.j(p));b.m(y,b.m(p));b.Dc(y,"0 0");b.G(y,a);var i=b.Mb(p);b.G(p,y);b.E(p,"backgroundImage","");b.f(i,function(c){b.G(b.i(c,"noscale")?p:a,c);b.i(c,"autocenter")&&Lb.push(c)})}Y=c/(d?b.m:b.j)(y);b.Ie(y,Y);var f=d?Y*W():c,e=d?c:Y*nb();b.j(p,f);b.m(p,e);b.f(Lb,function(a){var c=b.pd(b.i(a,"autocenter"));b.xd(a,c)})}o.Wd=Eb;o.Kc=function(a){var d=c.ceil(t(kb/bc)),b=t(a-s+d);if(b>u){if(a-s>r/2)a-=r;else if(a-s<=-r/2)a+=r}else a=s+b-d;return a};m.call(o);o.eb=p=b.ib(p);var a=b.O({sb:0,ie:1,ec:1,fc:0,gc:k,tb:1,wb:e,Lc:e,kd:1,Rc:3e3,Gc:1,qc:500,ce:d.Ne,wc:20,vc:0,L:1,Xb:0,Cd:1,Vb:1,cd:1},fc);a.wb=a.wb&&b.Re();if(a.Nd!=h)a.Rc=a.Nd;if(a.Od!=h)a.Xb=a.Od;var fb=a.Vb&3,tc=(a.Vb&4)/-4||1,mb=a.bf,J=b.O({J:q,wb:a.wb},a.ff);J.hc=J.hc||J.ef;var Fb=a.df,Z=a.Vd,eb=a.Ed,Q=!a.Cd,y,v=b.p(p,"slides",Q),gb=b.p(p,"loading",Q)||b.ab(g),Nb=b.p(p,"navigator",Q),dc=b.p(p,"arrowleft",Q),ac=b.p(p,"arrowright",Q),Mb=b.p(p,"thumbnavigator",Q),pc=b.j(v),nc=b.m(v),V,T=[],uc=b.Mb(v);b.f(uc,function(a){a.tagName=="DIV"&&!b.i(a,"u")&&T.push(a);b.u(a,(b.u(a)||0)+1)});var s=-1,wb,tb,r=T.length,L=a.ud||pc,K=a.rd||nc,Wb=a.vc,zb=L+Wb,Ab=K+Wb,bc=fb&1?zb:Ab,u=c.min(a.L,r),lb,x,M,yb,S=[],Qb,Sb,Ob,cc,Cc,I,E=a.Gc,lc=a.Rc,Vb=a.qc,rb,ib,kb,Rb=u<r,D=Rb?a.tb:0,X,P,F=1,O,C,R,ub=0,vb=0,H,hb,jb,Cb,w,U,z,Ub=new oc,Y,Lb=[];if(r){if(a.wb)Kb=function(a,c,d){b.jb(a,{bb:c,Y:d})};I=a.gc;o.Hb=fc;ic();b.v(p,"jssor-slider",e);b.u(v,b.u(v)||0);b.z(v,"absolute");lb=b.lb(v,e);b.Kb(lb,v);if(mb){cc=mb.cf;rb=mb.J;ib=u==1&&r>1&&rb&&(!b.ed()||b.md()>=8)}kb=ib||u>=r||!(D&1)?0:a.Xb;X=(u>1||kb?fb:-1)&a.cd;var Gb=v,A=[],B,N,Db=b.Be(),ob=Db.Ae,G,qb,Ib,sb;Db.Wc&&b.E(Gb,Db.Wc,([i,"pan-y","pan-x","none"])[X]||"");U=new zc;if(ib)B=new rb(Ub,L,K,mb,ob);b.G(lb,U.Nb);b.pb(v,"hidden");N=Xb();b.E(N,"backgroundColor","#000");b.sc(N,0);b.Kb(N,Gb.firstChild,Gb);for(var db=0;db<T.length;db++){var wc=T[db],yc=new xc(wc,db);A.push(yc)}b.U(gb);Cb=new Ac;z=new mc(Cb,U);b.a(v,"click",jc,e);b.a(p,"mouseout",b.bc(hc,p));b.a(p,"mouseover",b.bc(Ec,p));if(X){b.a(v,"mousedown",Yb);b.a(v,"touchstart",rc);b.a(v,"dragstart",Hb);b.a(v,"selectstart",Hb);b.a(g,"mouseup",bb);b.a(g,"touchend",bb);b.a(g,"touchcancel",bb);b.a(f,"blur",bb)}E&=ob?10:5;if(Nb&&Fb){Qb=new Fb.J(Nb,Fb,W(),nb());S.push(Qb)}if(Z&&dc&&ac){Z.tb=D;Z.L=u;Sb=new Z.J(dc,ac,Z,W(),nb());S.push(Sb)}if(Mb&&eb){eb.fc=a.fc;Ob=new eb.J(Mb,eb);S.push(Ob)}b.f(S,function(a){a.rc(r,A,gb);a.hb(n.kc,kc)});b.E(p,"visibility","visible");Eb(W());xb();a.ec&&b.a(g,"keydown",function(b){if(b.keyCode==37)ab(-a.ec);else b.keyCode==39&&ab(a.ec)});var pb=a.fc;if(!(D&1))pb=c.max(0,c.min(pb,r-u));z.Ib(pb,pb,0)}};j.le=21;j.ve=22;j.we=23;j.ae=24;j.be=25;j.me=26;j.fe=27;j.ue=28;j.Zd=202;j.xe=203;j.re=206;j.se=207;j.te=208;j.jd=209;var n={kc:1};var r=function(a,g,h){var c=this;m.call(c);var r,d,f,j;b.j(a);b.m(a);var p,o;function l(a){c.g(n.kc,a,e)}function t(c){b.W(a,c);b.W(g,c)}function s(){p.Cb(h.tb||d>0);o.Cb(h.tb||d<r-h.L)}c.nc=function(b,a,c){if(c)d=a;else{d=b;s()}};c.mc=t;var q;c.rc=function(c){r=c;d=0;if(!q){b.a(a,"click",b.I(i,l,-j));b.a(g,"click",b.I(i,l,j));p=b.oc(a);o=b.oc(g);q=e}};c.Hb=f=b.O({Sd:1},h);j=f.Sd;if(f.Yb==k){b.v(a,"noscale",e);b.v(g,"noscale",e)}if(f.xb){b.v(a,"autocenter",f.xb);b.v(g,"autocenter",f.xb)}},p=function(g,B){var h=this,z,p,a,v=[],x,w,d,q,r,u,t,o,s,f,l;m.call(h);g=b.ib(g);function A(o,f){var g=this,c,m,k;function q(){m.Md(p==f)}function j(e){if(e||!s.Qe()){var a=d-f%d,b=s.Kc((f+a)/d-1),c=b*d+d-a;h.g(n.kc,c)}}g.Z=f;g.Tc=q;k=o.qe||o.dd||b.ab();g.Nb=c=b.Td(l,"thumbnailtemplate",k,e);m=b.oc(c);a.pc&1&&b.a(c,"click",b.I(i,j,0));a.pc&2&&b.a(c,"mouseover",b.bc(b.I(i,j,1),c))}h.nc=function(b,e,f){var a=p;p=b;a!=-1&&v[a].Tc();v[b].Tc();!f&&s.ye(s.Kc(c.floor(e/d)))};h.mc=function(a){b.W(g,a)};var y;h.rc=function(D,C){if(!y){z=D;c.ceil(z/d);p=-1;o=c.min(o,C.length);var h=a.vb&1,m=u+(u+q)*(d-1)*(1-h),l=t+(t+r)*(d-1)*h,B=m+(m+q)*(o-1)*h,n=l+(l+r)*(o-1)*(1-h);b.z(f,"absolute");b.pb(f,"hidden");a.xb&1&&b.A(f,(x-B)/2);a.xb&2&&b.D(f,(w-n)/2);b.j(f,B);b.m(f,n);var i=[];b.f(C,function(l,g){var j=new A(l,g),e=j.Nb,a=c.floor(g/d),k=g%d;b.A(e,(u+q)*k*(1-h));b.D(e,(t+r)*k*h);if(!i[a]){i[a]=b.ab();b.G(f,i[a])}b.G(i[a],e);v.push(j)});var E=b.O({gc:k,Lc:k,ud:m,rd:l,vc:q*h+r*(1-h),wc:12,qc:200,Gc:1,Vb:a.vb,cd:a.Xe||a.Ye?0:a.vb},a);s=new j(g,E);y=e}};h.Hb=a=b.O({Ob:0,Pb:0,L:1,vb:1,xb:3,pc:1},B);x=b.j(g);w=b.m(g);f=b.p(g,"slides",e);l=b.p(f,"prototype");u=b.j(l);t=b.m(l);b.Ab(l,f);d=a.Hd||1;q=a.Ob;r=a.Pb;o=a.L;a.Yb==k&&b.v(g,"noscale",e)};function q(e,d,c){var a=this;l.call(a,0,c);a.od=b.Ic;a.uc=0;a.Fc=c}jssor_1_slider_init=function(){var g={gc:e,Vd:{J:r},Ed:{J:p,L:4,Ob:4,Pb:4,vb:2,Xb:0}},d=new j("jssor_1",g);function a(){var b=d.eb.parentNode.clientWidth;if(b){b=c.min(b,810);d.Wd(b)}else f.setTimeout(a,30)}a();b.a(f,"load",a);b.a(f,"resize",a);b.a(f,"orientationchange",a)}})(window,document,Math,null,true,false)
</script>
<style>
.jssora02l,.jssora02r{display:block;position:absolute;width:55px;height:55px;cursor:pointer;background:url('img/a02.png') no-repeat;overflow:hidden}.jssora02l{background-position:-3px -33px}.jssora02r{background-position:-63px -33px}.jssora02l:hover{background-position:-123px -33px}.jssora02r:hover{background-position:-183px -33px}.jssora02l.jssora02ldn{background-position:-3px -33px}.jssora02r.jssora02rdn{background-position:-63px -33px}.jssora02l.jssora02lds{background-position:-3px -33px;opacity:.3;pointer-events:none}.jssora02r.jssora02rds{background-position:-63px -33px;opacity:.3;pointer-events:none}.jssort11 .p{position:absolute;top:0;left:0;width:200px;height:69px;background:#181818}.jssort11 .tp{position:absolute;top:0;left:0;width:100%;height:100%;border:none}.jssort11 .i,.jssort11 .pav:hover .i{position:absolute;top:3px;left:3px;width:60px;height:30px;border:#fff 1px dashed}* html .jssort11 .i{width:62px;height:32px}.jssort11 .pav .i{border:#fff 1px solid}.jssort11 .t,.jssort11 .pav:hover .t{position:absolute;top:3px;left:68px;width:129px;height:32px;line-height:32px;text-align:center;color:#fc9835;font-size:13px;font-weight:700}.jssort11 .pav .t,.jssort11 .p:hover .t{color:#fff}.jssort11 .c,.jssort11 .pav:hover .c{position:absolute;top:38px;left:3px;width:194px;height:32px;line-height:32px;color:#fff;font-size:11px;font-weight:400;overflow:hidden}.jssort11 .pav .c,.jssort11 .p:hover .c{color:#fc9835}.jssort11 .t,.jssort11 .c{transition:color 2s;-moz-transition:color 2s;-webkit-transition:color 2s;-o-transition:color 2s}.jssort11 .p:hover .t,.jssort11 .pav:hover .t,.jssort11 .p:hover .c,.jssort11 .pav:hover .c{transition:none;-moz-transition:none;-webkit-transition:none;-o-transition:none}.jssort11 .p:hover,.jssort11 .pav:hover{background:#333}.jssort11 .pav,.jssort11 .p.pdn{background:#462300}
</style>
<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:#000000;">
<!-- Loading Screen -->
<div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
<div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
</div>
<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
<div>
<img data-u="image" src="{{URL::asset('img/EPL.jpg') }}" />
<div data-u="thumb">
<img class="i" src="{{ URL::asset('img/EPL.jpg') }}" />
<div class="t">Fashion Designer</div>
<div class="c">The designer of fashion style</div>
</div>
</div>
<div>
<img data-u="image" src="{{ URL::asset('img/Capentary.jpg') }}" />
<div data-u="thumb">
<img class="i" src="{{ URL::asset('img/Capentary.jpg') }}" />
<div class="t">Capentry</div>
<div class="c">Creative art and work of wooden materials</div>
</div>
</div>
<div>
<img data-u="image" src="{{ URL::asset('img/mechanic.jpg') }}" />
<div data-u="thumb">
<img class="i" src="{{ URL::asset('img/mechanic.jpg') }}" />
<div class="t">Automobile Mechanic</div>
<div class="c"></div>
</div>
</div>
<div>
<img data-u="image" src="{{ URL::asset('img/Catering.jpg') }}" />
<div data-u="thumb">
<img class="i" src="{{ URL::asset('img/Catering.jpg') }}" />
<div class="t">Catering</div>
<div class="c">Professional life safer</div>
</div>
</div>
<!--<a data-u="any" href="http://www.jssor.com" style="display:none">List Slider</a>-->
<div>
<img data-u="image" src="{{ URL::asset('img/Bead.jpeg') }}" />
<div data-u="thumb">
<img class="i" src="{{ URL::asset('img/Bead.jpeg') }}" />
<div class="t">Bead Making</div>
<div class="c"></div>
</div>
</div>
</div>
<!-- Thumbnail Navigator -->
<div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
<!-- Thumbnail Item Skin Begin -->
<div data-u="slides" style="cursor: default;">
<div data-u="prototype" class="p">
<div data-u="thumbnailtemplate" class="tp"></div>
</div>
</div>
<!-- Thumbnail Item Skin End -->
</div>
<!-- Arrow Navigator --> 
<span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
<span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
</div>
<script type="text/javascript">jssor_1_slider_init();</script>
<!-- #endregion Jssor Slider End -->
</body>
</html>
