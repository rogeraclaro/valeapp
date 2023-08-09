this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["all-reviews"]=function(e){function t(t){for(var o,a,i=t[0],s=t[1],l=t[2],d=0,b=[];d<i.length;d++)a=i[d],Object.prototype.hasOwnProperty.call(n,a)&&n[a]&&b.push(n[a][0]),n[a]=0;for(o in s)Object.prototype.hasOwnProperty.call(s,o)&&(e[o]=s[o]);for(u&&u(t);b.length;)b.shift()();return c.push.apply(c,l||[]),r()}function r(){for(var e,t=0;t<c.length;t++){for(var r=c[t],o=!0,i=1;i<r.length;i++){var s=r[i];0!==n[s]&&(o=!1)}o&&(c.splice(t--,1),e=a(a.s=r[0]))}return e}var o={},n={6:0},c=[];function a(t){if(o[t])return o[t].exports;var r=o[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,a),r.l=!0,r.exports}a.m=e,a.c=o,a.d=function(e,t,r){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(a.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)a.d(r,o,function(t){return e[t]}.bind(null,o));return r},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="";var i=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],s=i.push.bind(i);i.push=t,i=i.slice();for(var l=0;l<i.length;l++)t(i[l]);var u=s;return c.push([408,0]),r()}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},10:function(e,t){e.exports=window.wp.primitives},11:function(e,t){e.exports=window.wp.compose},120:function(e,t,r){"use strict";r.d(t,"a",(function(){return s})),r.d(t,"b",(function(){return l})),r.d(t,"c",(function(){return u}));var o=r(0),n=r(1),c=r(5),a=r(3),i=r(2);const s=(e,t,r)=>Object(o.createElement)(c.BlockControls,null,Object(o.createElement)(i.ToolbarGroup,{controls:[{icon:"edit",title:r,onClick:()=>t({editMode:!e}),isActive:e}]})),l=(e,t)=>{const r=Object(a.getSetting)("showAvatars",!0),c=Object(a.getSetting)("reviewRatingsEnabled",!0);return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Product rating","woocommerce"),checked:e.showReviewRating,onChange:()=>t({showReviewRating:!e.showReviewRating})}),e.showReviewRating&&!c&&Object(o.createElement)(i.Notice,{className:"wc-block-base-control-notice",isDismissible:!1},Object(o.createInterpolateElement)(Object(n.__)("Product rating is disabled in your <a>store settings</a>.","woocommerce"),{a:Object(o.createElement)("a",{href:Object(a.getAdminLink)("admin.php?page=wc-settings&tab=products"),target:"_blank",rel:"noopener noreferrer"})})),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Reviewer name","woocommerce"),checked:e.showReviewerName,onChange:()=>t({showReviewerName:!e.showReviewerName})}),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Image","woocommerce"),checked:e.showReviewImage,onChange:()=>t({showReviewImage:!e.showReviewImage})}),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Review date","woocommerce"),checked:e.showReviewDate,onChange:()=>t({showReviewDate:!e.showReviewDate})}),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Review content","woocommerce"),checked:e.showReviewContent,onChange:()=>t({showReviewContent:!e.showReviewContent})}),e.showReviewImage&&Object(o.createElement)(o.Fragment,null,Object(o.createElement)(i.__experimentalToggleGroupControl,{label:Object(n.__)("Review image","woocommerce"),value:e.imageType,onChange:e=>t({imageType:e})},Object(o.createElement)(i.__experimentalToggleGroupControlOption,{value:"reviewer",label:Object(n.__)("Reviewer photo","woocommerce")}),Object(o.createElement)(i.__experimentalToggleGroupControlOption,{value:"product",label:Object(n.__)("Product","woocommerce")})),"reviewer"===e.imageType&&!r&&Object(o.createElement)(i.Notice,{className:"wc-block-base-control-notice",isDismissible:!1},Object(o.createInterpolateElement)(Object(n.__)("Reviewer photo is disabled in your <a>site settings</a>.","woocommerce"),{a:Object(o.createElement)("a",{href:Object(a.getAdminLink)("options-discussion.php"),target:"_blank",rel:"noopener noreferrer"})}))))},u=(e,t)=>Object(o.createElement)(o.Fragment,null,Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Order by","woocommerce"),checked:e.showOrderby,onChange:()=>t({showOrderby:!e.showOrderby})}),Object(o.createElement)(i.SelectControl,{label:Object(n.__)("Order Product Reviews by","woocommerce"),value:e.orderby,options:[{label:"Most recent",value:"most-recent"},{label:"Highest Rating",value:"highest-rating"},{label:"Lowest Rating",value:"lowest-rating"}],onChange:e=>t({orderby:e})}),Object(o.createElement)(i.RangeControl,{label:Object(n.__)("Starting Number of Reviews","woocommerce"),value:e.reviewsOnPageLoad,onChange:e=>t({reviewsOnPageLoad:e}),max:20,min:1}),Object(o.createElement)(i.ToggleControl,{label:Object(n.__)("Load more","woocommerce"),checked:e.showLoadMore,onChange:()=>t({showLoadMore:!e.showLoadMore})}),e.showLoadMore&&Object(o.createElement)(i.RangeControl,{label:Object(n.__)("Load More Reviews","woocommerce"),value:e.reviewsOnLoadMore,onChange:e=>t({reviewsOnLoadMore:e}),max:20,min:1}))},127:function(e,t){},133:function(e,t,r){"use strict";var o=r(0),n=r(4),c=r.n(n),a=r(31),i=r(11);r(183),t.a=Object(i.withInstanceId)(e=>{let{className:t,instanceId:r,label:n="",onChange:i,options:s,screenReaderLabel:l,value:u=""}=e;const d="wc-block-components-sort-select__select-"+r;return Object(o.createElement)("div",{className:c()("wc-block-sort-select","wc-block-components-sort-select",t)},Object(o.createElement)(a.a,{label:n,screenReaderLabel:l,wrapperElement:"label",wrapperProps:{className:"wc-block-sort-select__label wc-block-components-sort-select__label",htmlFor:d}}),Object(o.createElement)("select",{id:d,className:"wc-block-sort-select__select wc-block-components-sort-select__select",onChange:i,value:u},s&&s.map(e=>Object(o.createElement)("option",{key:e.key,value:e.key},e.label))))})},14:function(e,t){e.exports=window.wp.apiFetch},140:function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));var o=r(1),n=r(18);const c={attributes:{editMode:!1,imageType:"reviewer",orderby:"most-recent",reviewsOnLoadMore:10,reviewsOnPageLoad:10,showLoadMore:!0,showOrderby:!0,showReviewDate:!0,showReviewerName:!0,showReviewImage:!0,showReviewRating:!0,showReviewContent:!0,previewReviews:[{id:1,date_created:"2019-07-15T17:05:04",formatted_date_created:Object(o.__)("July 15, 2019","woocommerce"),date_created_gmt:"2019-07-15T15:05:04",product_id:0,product_name:Object(o.__)("WordPress Pennant","woocommerce"),product_permalink:"#",
/* translators: An example person name used for the block previews. */
reviewer:Object(o.__)("Alice","woocommerce"),review:`<p>${Object(o.__)("I bought this product last week and I'm very happy with it.","woocommerce")}</p>\n`,reviewer_avatar_urls:{48:n.p.defaultAvatar,96:n.p.defaultAvatar},rating:5,verified:!0},{id:2,date_created:"2019-07-12T12:39:39",formatted_date_created:Object(o.__)("July 12, 2019","woocommerce"),date_created_gmt:"2019-07-12T10:39:39",product_id:0,product_name:Object(o.__)("WordPress Pennant","woocommerce"),product_permalink:"#",
/* translators: An example person name used for the block previews. */
reviewer:Object(o.__)("Bob","woocommerce"),review:`<p>${Object(o.__)("This product is awesome, I love it!","woocommerce")}</p>\n`,reviewer_avatar_urls:{48:n.p.defaultAvatar,96:n.p.defaultAvatar},rating:null,verified:!1}]}}},165:function(e,t,r){"use strict";t.a={editMode:{type:"boolean",default:!0},imageType:{type:"string",default:"reviewer"},orderby:{type:"string",default:"most-recent"},reviewsOnLoadMore:{type:"number",default:10},reviewsOnPageLoad:{type:"number",default:10},showLoadMore:{type:"boolean",default:!0},showOrderby:{type:"boolean",default:!0},showReviewDate:{type:"boolean",default:!0},showReviewerName:{type:"boolean",default:!0},showReviewImage:{type:"boolean",default:!0},showReviewRating:{type:"boolean",default:!0},showReviewContent:{type:"boolean",default:!0},previewReviews:{type:"array",default:null}}},166:function(e,t,r){"use strict";var o=r(6),n=r.n(o),c=r(0),a=r(5),i=(r(184),r(63));t.a=e=>{let{attributes:t}=e;return Object(c.createElement)("div",n()({},a.useBlockProps.save({className:Object(i.a)(t)}),Object(i.b)(t)))}},173:function(e,t,r){"use strict";var o=r(0),n=r(1),c=r(254),a=r(2),i=r(5),s=r(3),l=r(81),u=r(31);r(219);var d=e=>{let{onClick:t,label:r=Object(n.__)("Load more","woocommerce"),screenReaderLabel:c=Object(n.__)("Load more","woocommerce")}=e;return Object(o.createElement)("div",{className:"wp-block-button wc-block-load-more wc-block-components-load-more"},Object(o.createElement)("button",{className:"wp-block-button__link",onClick:t},Object(o.createElement)(u.a,{label:r,screenReaderLabel:c})))},b=r(133);r(216);var w=e=>{let{onChange:t,readOnly:r,value:c}=e;return Object(o.createElement)(b.a,{className:"wc-block-review-sort-select wc-block-components-review-sort-select",label:Object(n.__)("Order by","woocommerce"),onChange:t,options:[{key:"most-recent",label:Object(n.__)("Most recent","woocommerce")},{key:"highest-rating",label:Object(n.__)("Highest rating","woocommerce")},{key:"lowest-rating",label:Object(n.__)("Lowest rating","woocommerce")}],readOnly:r,screenReaderLabel:Object(n.__)("Order reviews by","woocommerce"),value:c})},p=r(4),m=r.n(p),g=r(23),h=r.n(g),v=r(203),O=r.n(v);const _=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"...";const o=O()(e,{suffix:r,limit:t});return o.html},j=(e,t,r)=>(t<=r?e.start=e.middle+1:e.end=e.middle-1,e),f=(e,t,r,o)=>{const n=((e,t,r)=>{let o={start:0,middle:0,end:e.length};for(;o.start<=o.end;)o.middle=Math.floor((o.start+o.end)/2),t.innerHTML=_(e,o.middle),o=j(o,t.clientHeight,r);return o.middle})(e,t,r);return _(e,n-o.length,o)},y={className:"read-more-content",ellipsis:"&hellip;",lessText:Object(n.__)("Read less","woocommerce"),maxLines:3,moreText:Object(n.__)("Read more","woocommerce")};class k extends o.Component{constructor(e){super(e),this.state={isExpanded:!1,clampEnabled:null,content:e.children,summary:"."},this.reviewContent=Object(o.createRef)(),this.reviewSummary=Object(o.createRef)(),this.getButton=this.getButton.bind(this),this.onClick=this.onClick.bind(this)}componentDidMount(){this.setSummary()}componentDidUpdate(e){e.maxLines===this.props.maxLines&&e.children===this.props.children||this.setState({clampEnabled:null,summary:"."},this.setSummary)}setSummary(){if(this.props.children){const{maxLines:e,ellipsis:t}=this.props;if(!this.reviewSummary.current||!this.reviewContent.current)return;const r=(this.reviewSummary.current.clientHeight+1)*e+1,o=this.reviewContent.current.clientHeight+1>r;this.setState({clampEnabled:o}),o&&this.setState({summary:f(this.reviewContent.current.innerHTML,this.reviewSummary.current,r,t)})}}getButton(){const{isExpanded:e}=this.state,{className:t,lessText:r,moreText:n}=this.props,c=e?r:n;if(c)return Object(o.createElement)("a",{href:"#more",className:t+"__read_more",onClick:this.onClick,"aria-expanded":!e,role:"button"},c)}onClick(e){e.preventDefault();const{isExpanded:t}=this.state;this.setState({isExpanded:!t})}render(){const{className:e}=this.props,{content:t,summary:r,clampEnabled:n,isExpanded:c}=this.state;return t?!1===n?Object(o.createElement)("div",{className:e},Object(o.createElement)("div",{ref:this.reviewContent},t)):Object(o.createElement)("div",{className:e},(!c||null===n)&&Object(o.createElement)("div",{ref:this.reviewSummary,"aria-hidden":c,dangerouslySetInnerHTML:{__html:r}}),(c||null===n)&&Object(o.createElement)("div",{ref:this.reviewContent,"aria-hidden":!c},t),this.getButton()):null}}h()(k,"defaultProps",y);var R=k;r(218);var E=e=>{let{attributes:t,review:r={}}=e;const{imageType:c,showReviewDate:a,showReviewerName:i,showReviewImage:s,showReviewRating:l,showReviewContent:u,showProductName:d}=t,{rating:b}=r,w=!(Object.keys(r).length>0),p=Number.isFinite(b)&&l;return Object(o.createElement)("li",{className:m()("wc-block-review-list-item__item","wc-block-components-review-list-item__item",{"is-loading":w,"wc-block-components-review-list-item__item--has-image":s}),"aria-hidden":w},(d||a||i||s||p)&&Object(o.createElement)("div",{className:"wc-block-review-list-item__info wc-block-components-review-list-item__info"},s&&function(e,t,r){var c,a;return r||!e?Object(o.createElement)("div",{className:"wc-block-review-list-item__image wc-block-components-review-list-item__image"}):Object(o.createElement)("div",{className:"wc-block-review-list-item__image wc-block-components-review-list-item__image"},"product"===t?Object(o.createElement)("img",{"aria-hidden":"true",alt:(null===(c=e.product_image)||void 0===c?void 0:c.alt)||"",src:(null===(a=e.product_image)||void 0===a?void 0:a.thumbnail)||""}):Object(o.createElement)("img",{"aria-hidden":"true",alt:"",src:e.reviewer_avatar_urls[96]||""}),e.verified&&Object(o.createElement)("div",{className:"wc-block-review-list-item__verified wc-block-components-review-list-item__verified",title:Object(n.__)("Verified buyer","woocommerce")},Object(n.__)("Verified buyer","woocommerce")))}(r,c,w),(d||i||p||a)&&Object(o.createElement)("div",{className:"wc-block-review-list-item__meta wc-block-components-review-list-item__meta"},p&&function(e){const{rating:t}=e,r={width:t/5*100+"%"},c=Object(n.sprintf)(
/* translators: %f is referring to the average rating value */
Object(n.__)("Rated %f out of 5","woocommerce"),t),a={__html:Object(n.sprintf)(
/* translators: %s is referring to the average rating value */
Object(n.__)("Rated %s out of 5","woocommerce"),Object(n.sprintf)('<strong class="rating">%f</strong>',t))};return Object(o.createElement)("div",{className:"wc-block-review-list-item__rating wc-block-components-review-list-item__rating"},Object(o.createElement)("div",{className:"wc-block-review-list-item__rating__stars wc-block-components-review-list-item__rating__stars",role:"img","aria-label":c},Object(o.createElement)("span",{style:r,dangerouslySetInnerHTML:a})))}(r),d&&function(e){return Object(o.createElement)("div",{className:"wc-block-review-list-item__product wc-block-components-review-list-item__product"},Object(o.createElement)("a",{href:e.product_permalink,dangerouslySetInnerHTML:{__html:e.product_name}}))}(r),i&&function(e){const{reviewer:t=""}=e;return Object(o.createElement)("div",{className:"wc-block-review-list-item__author wc-block-components-review-list-item__author"},t)}(r),a&&function(e){const{date_created:t,formatted_date_created:r}=e;return Object(o.createElement)("time",{className:"wc-block-review-list-item__published-date wc-block-components-review-list-item__published-date",dateTime:t},r)}(r))),u&&function(e){return Object(o.createElement)(R,{maxLines:10,moreText:Object(n.__)("Read full review","woocommerce"),lessText:Object(n.__)("Hide full review","woocommerce"),className:"wc-block-review-list-item__text wc-block-components-review-list-item__text"},Object(o.createElement)("div",{dangerouslySetInnerHTML:{__html:e.review||""}}))}(r))};r(217);var S=e=>{let{attributes:t,reviews:r}=e;const n=Object(s.getSetting)("showAvatars",!0),c=Object(s.getSetting)("reviewRatingsEnabled",!0),a=(n||"product"===t.imageType)&&t.showReviewImage,i=c&&t.showReviewRating,l={...t,showReviewImage:a,showReviewRating:i};return Object(o.createElement)("ul",{className:"wc-block-review-list wc-block-components-review-list"},0===r.length?Object(o.createElement)(E,{attributes:l}):r.map((e,t)=>Object(o.createElement)(E,{key:e.id||t,attributes:l,review:e})))},T=r(6),C=r.n(T),P=r(25),N=r.n(P),L=r(63),x=r(30);class A extends o.Component{render(){const{attributes:e,error:t,isLoading:r,noReviewsPlaceholder:c,reviews:i,totalReviews:u}=this.props;if(t)return Object(o.createElement)(l.a,{className:"wc-block-featured-product-error",error:t,isLoading:r});if(0===i.length&&!r)return Object(o.createElement)(c,{attributes:e});const b=Object(s.getSetting)("reviewRatingsEnabled",!0);return Object(o.createElement)(a.Disabled,null,e.showOrderby&&b&&Object(o.createElement)(w,{readOnly:!0,value:e.orderby,onChange:()=>null}),Object(o.createElement)(S,{attributes:e,reviews:i}),e.showLoadMore&&u>i.length&&Object(o.createElement)(d,{screenReaderLabel:Object(n.__)("Load more reviews","woocommerce")}))}}var M=(e=>{class t extends o.Component{constructor(){super(...arguments),h()(this,"isPreview",!!this.props.attributes.previewReviews),h()(this,"delayedAppendReviews",this.props.delayFunction(this.appendReviews)),h()(this,"isMounted",!1),h()(this,"state",{error:null,loading:!0,reviews:this.isPreview?this.props.attributes.previewReviews:[],totalReviews:this.isPreview?this.props.attributes.previewReviews.length:0}),h()(this,"setError",async e=>{if(!this.isMounted)return;const{onReviewsLoadError:t}=this.props,r=await Object(x.a)(e);this.setState({reviews:[],loading:!1,error:r}),t(r)})}componentDidMount(){this.isMounted=!0,this.replaceReviews()}componentDidUpdate(e){e.reviewsToDisplay<this.props.reviewsToDisplay?this.delayedAppendReviews():this.shouldReplaceReviews(e,this.props)&&this.replaceReviews()}shouldReplaceReviews(e,t){return e.orderby!==t.orderby||e.order!==t.order||e.productId!==t.productId||!N()(e.categoryIds,t.categoryIds)}componentWillUnmount(){this.isMounted=!1,this.delayedAppendReviews.cancel&&this.delayedAppendReviews.cancel()}getArgs(e){const{categoryIds:t,order:r,orderby:o,productId:n,reviewsToDisplay:c}=this.props,a={order:r,orderby:o,per_page:c-e,offset:e};if(t){const e=Array.isArray(t)?t:JSON.parse(t);a.category_id=Array.isArray(e)?e.join(","):e}return n&&(a.product_id=n),a}replaceReviews(){if(this.isPreview)return;const{onReviewsReplaced:e}=this.props;this.updateListOfReviews().then(e)}appendReviews(){if(this.isPreview)return;const{onReviewsAppended:e,reviewsToDisplay:t}=this.props,{reviews:r}=this.state;t<=r.length||this.updateListOfReviews(r).then(e)}updateListOfReviews(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];const{reviewsToDisplay:t}=this.props,{totalReviews:r}=this.state,o=Math.min(r,t)-e.length;return this.setState({loading:!0,reviews:e.concat(Array(o).fill({}))}),Object(L.c)(this.getArgs(e.length)).then(t=>{let{reviews:r,totalReviews:o}=t;return this.isMounted&&this.setState({reviews:e.filter(e=>Object.keys(e).length).concat(r),totalReviews:o,loading:!1,error:null}),{newReviews:r}}).catch(this.setError)}render(){const{reviewsToDisplay:t}=this.props,{error:r,loading:n,reviews:c,totalReviews:a}=this.state;return Object(o.createElement)(e,C()({},this.props,{error:r,isLoading:n,reviews:c.slice(0,t),totalReviews:a}))}}h()(t,"defaultProps",{delayFunction:e=>e,onReviewsAppended:()=>{},onReviewsLoadError:()=>{},onReviewsReplaced:()=>{}});const{displayName:r=e.name||"Component"}=e;return t.displayName=`WithReviews( ${r} )`,t})(A);t.a=e=>{let{attributes:t,icon:r,name:s,noReviewsPlaceholder:l}=e;const{categoryIds:u,productId:d,reviewsOnPageLoad:b,showProductName:w,showReviewDate:p,showReviewerName:m,showReviewContent:g,showReviewImage:h,showReviewRating:v}=t,{order:O,orderby:_}=Object(L.d)(t.orderby),j=!(g||v||p||m||h||w),f=Object(i.useBlockProps)({className:Object(L.a)(t)});return j?Object(o.createElement)(a.Placeholder,{icon:r,label:s},Object(n.__)("The content for this block is hidden due to block settings.","woocommerce")):Object(o.createElement)("div",f,Object(o.createElement)(M,{attributes:t,categoryIds:u,delayFunction:e=>Object(c.a)(e,400),noReviewsPlaceholder:l,orderby:_,order:O,productId:d,reviewsToDisplay:b}))}},18:function(e,t,r){"use strict";r.d(t,"p",(function(){return c})),r.d(t,"n",(function(){return a})),r.d(t,"m",(function(){return i})),r.d(t,"o",(function(){return s})),r.d(t,"k",(function(){return l})),r.d(t,"e",(function(){return u})),r.d(t,"h",(function(){return d})),r.d(t,"l",(function(){return b})),r.d(t,"c",(function(){return w})),r.d(t,"d",(function(){return p})),r.d(t,"g",(function(){return m})),r.d(t,"a",(function(){return v})),r.d(t,"b",(function(){return O})),r.d(t,"i",(function(){return _})),r.d(t,"j",(function(){return j})),r.d(t,"f",(function(){return f}));var o,n=r(3);const c=Object(n.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),a=c.pluginUrl+"images/",i=c.pluginUrl+"build/",s=c.buildPhase,l=null===(o=n.STORE_PAGES.shop)||void 0===o?void 0:o.permalink,u=n.STORE_PAGES.checkout.id,d=(n.STORE_PAGES.checkout.permalink,n.STORE_PAGES.privacy.permalink),b=(n.STORE_PAGES.privacy.title,n.STORE_PAGES.terms.permalink),w=(n.STORE_PAGES.terms.title,n.STORE_PAGES.cart.id),p=n.STORE_PAGES.cart.permalink,m=(n.STORE_PAGES.myaccount.permalink?n.STORE_PAGES.myaccount.permalink:Object(n.getSetting)("wpLoginUrl","/wp-login.php"),Object(n.getSetting)("localPickupEnabled",!1)),g=Object(n.getSetting)("countries",{}),h=Object(n.getSetting)("countryData",{}),v=Object.fromEntries(Object.keys(h).filter(e=>!0===h[e].allowBilling).map(e=>[e,g[e]||""])),O=Object.fromEntries(Object.keys(h).filter(e=>!0===h[e].allowBilling).map(e=>[e,h[e].states||[]])),_=Object.fromEntries(Object.keys(h).filter(e=>!0===h[e].allowShipping).map(e=>[e,g[e]||""])),j=Object.fromEntries(Object.keys(h).filter(e=>!0===h[e].allowShipping).map(e=>[e,h[e].states||[]])),f=Object.fromEntries(Object.keys(h).map(e=>[e,h[e].locale||[]]))},183:function(e,t){},184:function(e,t){},2:function(e,t){e.exports=window.wp.components},216:function(e,t){},217:function(e,t){},218:function(e,t){},219:function(e,t){},25:function(e,t){e.exports=window.wp.isShallowEqual},254:function(e,t,r){"use strict";r.d(t,"a",(function(){return o}));const o=(e,t,r)=>{let o,n=null;const c=function(){for(var c=arguments.length,a=new Array(c),i=0;i<c;i++)a[i]=arguments[i];n=a,o&&clearTimeout(o),o=setTimeout(()=>{o=null,!r&&n&&e(...n)},t),r&&!o&&e(...a)};return c.flush=()=>{o&&n&&(e(...n),clearTimeout(o),o=null)},c}},3:function(e,t){e.exports=window.wc.wcSettings},30:function(e,t,r){"use strict";r.d(t,"a",(function(){return o}));const o=async e=>{if("function"==typeof e.json)try{const t=await e.json();return{message:t.message,type:t.type||"api"}}catch(e){return{message:e.message,type:"general"}}return{message:e.message,type:e.type||"general"}}},31:function(e,t,r){"use strict";var o=r(0),n=r(4),c=r.n(n);t.a=e=>{let t,{label:r,screenReaderLabel:n,wrapperElement:a,wrapperProps:i={}}=e;const s=null!=r,l=null!=n;return!s&&l?(t=a||"span",i={...i,className:c()(i.className,"screen-reader-text")},Object(o.createElement)(t,i,n)):(t=a||o.Fragment,s&&l&&r!==n?Object(o.createElement)(t,i,Object(o.createElement)("span",{"aria-hidden":"true"},r),Object(o.createElement)("span",{className:"screen-reader-text"},n)):Object(o.createElement)(t,i,r))}},33:function(e,t){e.exports=window.wp.escapeHtml},36:function(e,t,r){"use strict";var o=r(0),n=r(1),c=r(33);t.a=e=>{let{error:t}=e;return Object(o.createElement)("div",{className:"wc-block-error-message"},(e=>{let{message:t,type:r}=e;return t?"general"===r?Object(o.createElement)("span",null,Object(n.__)("The following error was returned","woocommerce"),Object(o.createElement)("br",null),Object(o.createElement)("code",null,Object(c.escapeHTML)(t))):"api"===r?Object(o.createElement)("span",null,Object(n.__)("The following error was returned from the API","woocommerce"),Object(o.createElement)("br",null),Object(o.createElement)("code",null,Object(c.escapeHTML)(t))):t:Object(n.__)("An error has prevented the block from being updated.","woocommerce")})(t))}},408:function(e,t,r){e.exports=r(545)},5:function(e,t){e.exports=window.wp.blockEditor},545:function(e,t,r){"use strict";r.r(t);var o=r(0),n=r(1),c=r(8),a=r(74),i=r(584),s=(r(184),r(5)),l=r(2),u=r(173),d=()=>Object(o.createElement)(l.Placeholder,{className:"wc-block-all-reviews",icon:Object(o.createElement)(a.a,{icon:i.a,className:"block-editor-block-icon"}),label:Object(n.__)("All Reviews","woocommerce")},Object(n.__)("This block shows a list of all product reviews. Your store does not have any reviews yet, but they will show up here when it does.","woocommerce")),b=r(120),w=r(165),p=r(166),m=r(140);Object(c.registerBlockType)("woocommerce/all-reviews",{apiVersion:2,title:Object(n.__)("All Reviews","woocommerce"),icon:{src:Object(o.createElement)(a.a,{icon:i.a,className:"wc-block-editor-components-block-icon"})},category:"woocommerce",keywords:[Object(n.__)("WooCommerce","woocommerce")],description:Object(n.__)("Show a list of all product reviews.","woocommerce"),supports:{html:!1,color:{background:!1},typography:{fontSize:!0}},example:{...m.a,attributes:{...m.a.attributes,showProductName:!0}},attributes:{...w.a,showProductName:{type:"boolean",default:!0}},transforms:{from:[{type:"block",blocks:["core/legacy-widget"],isMatch:e=>{let{idBase:t,instance:r}=e;return"woocommerce_recent_reviews"===t&&!(null==r||!r.raw)},transform:e=>{let{instance:t}=e;return Object(c.createBlock)("woocommerce/all-reviews",{reviewsOnPageLoad:t.raw.number,imageType:"product",showLoadMore:!1,showOrderby:!1,showReviewDate:!1,showReviewContent:!1})}}]},edit:e=>{let{attributes:t,setAttributes:r}=e;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(s.InspectorControls,{key:"inspector"},Object(o.createElement)(l.PanelBody,{title:Object(n.__)("Content","woocommerce")},Object(o.createElement)(l.ToggleControl,{label:Object(n.__)("Product name","woocommerce"),checked:t.showProductName,onChange:()=>r({showProductName:!t.showProductName})}),Object(b.b)(t,r)),Object(o.createElement)(l.PanelBody,{title:Object(n.__)("List Settings","woocommerce")},Object(b.c)(t,r))),Object(o.createElement)(u.a,{attributes:t,icon:Object(o.createElement)(a.a,{icon:i.a,className:"block-editor-block-icon"}),name:Object(n.__)("All Reviews","woocommerce"),noReviewsPlaceholder:d}))},save:p.a})},63:function(e,t,r){"use strict";r.d(t,"d",(function(){return s})),r.d(t,"c",(function(){return l})),r.d(t,"a",(function(){return u})),r.d(t,"b",(function(){return d}));var o=r(14),n=r.n(o),c=r(4),a=r.n(c),i=r(3);const s=e=>{if(Object(i.getSetting)("reviewRatingsEnabled",!0)){if("lowest-rating"===e)return{order:"asc",orderby:"rating"};if("highest-rating"===e)return{order:"desc",orderby:"rating"}}return{order:"desc",orderby:"date_gmt"}},l=e=>n()({path:"/wc/store/v1/products/reviews?"+Object.entries(e).map(e=>e.join("=")).join("&"),parse:!1}).then(e=>e.json().then(t=>({reviews:t,totalReviews:parseInt(e.headers.get("x-wp-total"),10)}))),u=e=>{const{className:t,categoryIds:r,productId:o,showReviewDate:n,showReviewerName:c,showReviewContent:i,showProductName:s,showReviewImage:l,showReviewRating:u}=e;let d="wc-block-all-reviews";return o&&(d="wc-block-reviews-by-product"),Array.isArray(r)&&(d="wc-block-reviews-by-category"),a()(d,t,{"has-image":l,"has-name":c,"has-date":n,"has-rating":u,"has-content":i,"has-product-name":s})},d=e=>{const{categoryIds:t,imageType:r,orderby:o,productId:n,reviewsOnPageLoad:c,reviewsOnLoadMore:a,showLoadMore:i,showOrderby:s}=e,l={"data-image-type":r,"data-orderby":o,"data-reviews-on-page-load":c,"data-reviews-on-load-more":a,"data-show-load-more":i,"data-show-orderby":s};return n&&(l["data-product-id"]=n),Array.isArray(t)&&(l["data-category-ids"]=t.join(",")),l}},8:function(e,t){e.exports=window.wp.blocks},81:function(e,t,r){"use strict";var o=r(0),n=r(1),c=r(74),a=r(208),i=r(4),s=r.n(i),l=r(2),u=r(36);r(127),t.a=e=>{let{className:t,error:r,isLoading:i=!1,onRetry:d}=e;return Object(o.createElement)(l.Placeholder,{icon:Object(o.createElement)(c.a,{icon:a.a}),label:Object(n.__)("Sorry, an error occurred","woocommerce"),className:s()("wc-block-api-error",t)},Object(o.createElement)(u.a,{error:r}),d&&Object(o.createElement)(o.Fragment,null,i?Object(o.createElement)(l.Spinner,null):Object(o.createElement)(l.Button,{isSecondary:!0,onClick:d},Object(n.__)("Retry","woocommerce"))))}}});