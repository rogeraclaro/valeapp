(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[76,75],{22:function(t,e,n){"use strict";n.d(e,"a",(function(){return r})),n.d(e,"b",(function(){return o}));const r=t=>!(t=>null===t)(t)&&t instanceof Object&&t.constructor===Object;function o(t,e){return r(t)&&e in t}},278:function(t,e,n){"use strict";n.d(e,"a",(function(){return r}));var r=function(){return(r=Object.assign||function(t){for(var e,n=1,r=arguments.length;n<r;n++)for(var o in e=arguments[n])Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o]);return t}).apply(this,arguments)};Object.create,Object.create},279:function(t,e,n){"use strict";function r(t){return t.toLowerCase()}n.d(e,"a",(function(){return a}));var o=[/([a-z0-9])([A-Z])/g,/([A-Z])([A-Z][a-z])/g],c=/[^A-Z0-9]+/gi;function a(t,e){void 0===e&&(e={});for(var n=e.splitRegexp,a=void 0===n?o:n,l=e.stripRegexp,i=void 0===l?c:l,u=e.transform,d=void 0===u?r:u,b=e.delimiter,p=void 0===b?" ":b,f=s(s(t,a,"$1\0$2"),i,"\0"),g=0,v=f.length;"\0"===f.charAt(g);)g++;for(;"\0"===f.charAt(v-1);)v--;return f.slice(g,v).split("\0").map(d).join(p)}function s(t,e,n){return e instanceof RegExp?t.replace(e,n):e.reduce((function(t,e){return t.replace(e,n)}),t)}},284:function(t,e,n){"use strict";n.d(e,"a",(function(){return c}));var r=n(278),o=n(279);function c(t,e){return void 0===e&&(e={}),function(t,e){return void 0===e&&(e={}),Object(o.a)(t,Object(r.a)({delimiter:"."},e))}(t,Object(r.a)({delimiter:"-"},e))}},286:function(t,e,n){"use strict";n.d(e,"a",(function(){return d}));var r=n(5),o=n.n(r),c=n(22),a=n(28),s=n(284),l=n(129);function i(){let t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};const e={};return Object(l.getCSSRules)(t,{selector:""}).forEach(t=>{e[t.key]=t.value}),e}function u(t,e){return t&&e?`has-${Object(s.a)(e)}-${t}`:""}const d=t=>{const e=(t=>{const e=Object(c.a)(t)?t:{style:{}};let n=e.style;return Object(a.a)(n)&&(n=JSON.parse(n)||{}),Object(c.a)(n)||(n={}),{...e,style:n}})(t),n=function(t){var e,n,r,a,s,l,d;const{backgroundColor:b,textColor:p,gradient:f,style:g}=t,v=u("background-color",b),m=u("color",p),O=function(t){if(t)return`has-${t}-gradient-background`}(f),j=O||(null==g||null===(e=g.color)||void 0===e?void 0:e.gradient);return{className:o()(m,O,{[v]:!j&&!!v,"has-text-color":p||(null==g||null===(n=g.color)||void 0===n?void 0:n.text),"has-background":b||(null==g||null===(r=g.color)||void 0===r?void 0:r.background)||f||(null==g||null===(a=g.color)||void 0===a?void 0:a.gradient),"has-link-color":Object(c.a)(null==g||null===(s=g.elements)||void 0===s?void 0:s.link)?null==g||null===(l=g.elements)||void 0===l||null===(d=l.link)||void 0===d?void 0:d.color:void 0}),style:i({color:(null==g?void 0:g.color)||{}})}}(e),r=function(t){var e;const n=(null===(e=t.style)||void 0===e?void 0:e.border)||{};return{className:function(t){var e;const{borderColor:n,style:r}=t,c=n?u("border-color",n):"";return o()({"has-border-color":n||(null==r||null===(e=r.border)||void 0===e?void 0:e.color),borderColorClass:c})}(t),style:i({border:n})}}(e),s=function(t){var e;return{className:void 0,style:i({spacing:(null===(e=t.style)||void 0===e?void 0:e.spacing)||{}})}}(e),l=(t=>{const e=Object(c.a)(t.style.typography)?t.style.typography:{},n=Object(a.a)(e.fontFamily)?e.fontFamily:"";return{className:t.fontFamily?`has-${t.fontFamily}-font-family`:n,style:{fontSize:t.fontSize?`var(--wp--preset--font-size--${t.fontSize})`:e.fontSize,fontStyle:e.fontStyle,fontWeight:e.fontWeight,letterSpacing:e.letterSpacing,lineHeight:e.lineHeight,textDecoration:e.textDecoration,textTransform:e.textTransform}}})(e);return{className:o()(l.className,n.className,r.className,s.className),style:{...l.style,...n.style,...r.style,...s.style}}}},363:function(t,e){},388:function(t,e,n){"use strict";n.r(e),n.d(e,"Block",(function(){return g}));var r=n(0),o=n(1),c=n(5),a=n.n(c),s=n(60),l=n(286),i=n(144),u=n(107);n(363);const d=t=>({width:t/5*100+"%"}),b=t=>{let{parentClassName:e}=t;const n=d(0);return Object(r.createElement)("div",{className:a()("wc-block-components-product-rating__norating-container",e+"-product-rating__norating-container")},Object(r.createElement)("div",{className:"wc-block-components-product-rating__norating",role:"img"},Object(r.createElement)("span",{style:n})),Object(r.createElement)("span",null,Object(o.__)("No Reviews","woocommerce")))},p=t=>{const{rating:e,reviews:n,parentClassName:c}=t,s=d(e),l=Object(o.sprintf)(
/* translators: %f is referring to the average rating value */
Object(o.__)("Rated %f out of 5","woocommerce"),e),i={__html:Object(o.sprintf)(
/* translators: %1$s is referring to the average rating value, %2$s is referring to the number of ratings */
Object(o._n)("Rated %1$s out of 5 based on %2$s customer rating","Rated %1$s out of 5 based on %2$s customer ratings",n,"woocommerce"),Object(o.sprintf)('<strong class="rating">%f</strong>',e),Object(o.sprintf)('<span class="rating">%d</span>',n))};return Object(r.createElement)("div",{className:a()("wc-block-components-product-rating__stars",c+"__product-rating__stars"),role:"img","aria-label":l},Object(r.createElement)("span",{style:s,dangerouslySetInnerHTML:i}))},f=t=>{const{reviews:e}=t,n=Object(o.sprintf)(
/* translators: %s is referring to the total of reviews for a product */
Object(o._n)("(%s customer review)","(%s customer reviews)",e,"woocommerce"),e);return Object(r.createElement)("span",{className:"wc-block-components-product-rating__reviews_count"},n)},g=t=>{const{textAlign:e,isDescendentOfSingleProductBlock:n,shouldDisplayMockedReviewsWhenProductHasNoReviews:o}=t,c=Object(l.a)(t),{parentClassName:i}=Object(s.useInnerBlockLayoutContext)(),{product:d}=Object(s.useProductDataContext)(),g=(t=>{const e=parseFloat(t.average_rating);return Number.isFinite(e)&&e>0?e:0})(d),v=(t=>{const e=Object(u.a)(t.review_count)?t.review_count:parseInt(t.review_count,10);return Number.isFinite(e)&&e>0?e:0})(d),m=a()(c.className,"wc-block-components-product-rating",{[i+"__product-rating"]:i,["has-text-align-"+e]:e}),O=o?Object(r.createElement)(b,{parentClassName:i}):null,j=v?Object(r.createElement)(p,{rating:g,reviews:v,parentClassName:i}):O;return Object(r.createElement)("div",{className:m,style:c.style},Object(r.createElement)("div",{className:"wc-block-components-product-rating__container"},j,v&&n?Object(r.createElement)(f,{reviews:v}):null))};e.default=Object(i.withProductDataContext)(g)}}]);