this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["product-top-rated"]=function(t){function e(e){for(var n,i,u=e[0],a=e[1],s=e[2],b=0,p=[];b<u.length;b++)i=u[b],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&p.push(o[i][0]),o[i]=0;for(n in a)Object.prototype.hasOwnProperty.call(a,n)&&(t[n]=a[n]);for(l&&l(e);p.length;)p.shift()();return c.push.apply(c,s||[]),r()}function r(){for(var t,e=0;e<c.length;e++){for(var r=c[e],n=!0,u=1;u<r.length;u++){var a=r[u];0!==o[a]&&(n=!1)}n&&(c.splice(e--,1),t=i(i.s=r[0]))}return t}var n={},o={13:0},c=[];function i(e){if(n[e])return n[e].exports;var r=n[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=t,i.c=n,i.d=function(t,e,r){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)i.d(r,n,function(e){return t[e]}.bind(null,n));return r},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="";var u=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],a=u.push.bind(u);u.push=e,u=u.slice();for(var s=0;s<u.length;s++)e(u[s]);var l=a;return c.push([606,0]),r()}({0:function(t,e){!function(){t.exports=this.wp.element}()},1:function(t,e){!function(){t.exports=this.wp.i18n}()},10:function(t,e){!function(){t.exports=this.React}()},109:function(t,e,r){"use strict";r.d(e,"a",(function(){return c}));var n=r(0),o=r(6),c=Object(n.createElement)("img",{src:o.o+"img/grid.svg",alt:"Grid Preview",width:"230",height:"250",style:{width:"100%"}})},12:function(t,e){!function(){t.exports=this.wp.url}()},13:function(t,e){!function(){t.exports=this.regeneratorRuntime}()},14:function(t,e){!function(){t.exports=this.moment}()},15:function(t,e){!function(){t.exports=this.wp.blocks}()},22:function(t,e){!function(){t.exports=this.wp.compose}()},23:function(t,e){!function(){t.exports=this.wp.blockEditor}()},26:function(t,e,r){"use strict";r.d(e,"a",(function(){return u}));var n=r(13),o=r.n(n),c=r(24),i=r.n(c),u=function(){var t=i()(o.a.mark((function t(e){var r;return o.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if("function"!=typeof e.json){t.next=11;break}return t.prev=1,t.next=4,e.json();case 4:return r=t.sent,t.abrupt("return",{message:r.message,type:r.type||"api"});case 8:return t.prev=8,t.t0=t.catch(1),t.abrupt("return",{message:t.t0.message,type:"general"});case 11:return t.abrupt("return",{message:e.message,type:e.type||"general"});case 12:case"end":return t.stop()}}),t,null,[[1,8]])})));return function(e){return t.apply(this,arguments)}}()},27:function(t,e,r){"use strict";r.d(e,"g",(function(){return p})),r.d(e,"d",(function(){return g})),r.d(e,"a",(function(){return d})),r.d(e,"h",(function(){return f})),r.d(e,"e",(function(){return h})),r.d(e,"b",(function(){return O})),r.d(e,"c",(function(){return m})),r.d(e,"f",(function(){return j}));var n=r(8),o=r.n(n),c=r(12),i=r(9),u=r.n(i),a=r(5),s=r(6);function l(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function b(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?l(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):l(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}var p=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=void 0===n?"":n,i=t.queryArgs,l=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=void 0===n?"":n,i=t.queryArgs,u=void 0===i?[]:i,a={per_page:s.f?100:0,catalog_visibility:"any",search:o,orderby:"title",order:"asc"},l=[Object(c.addQueryArgs)("/wc/store/products",b(b({},a),u))];return s.f&&r.length&&l.push(Object(c.addQueryArgs)("/wc/store/products",{catalog_visibility:"any",include:r})),l}({selected:r,search:o,queryArgs:void 0===i?[]:i});return Promise.all(l.map((function(t){return u()({path:t})}))).then((function(t){return Object(a.uniqBy)(Object(a.flatten)(t),"id").map((function(t){return b(b({},t),{},{parent:0})}))})).catch((function(t){throw t}))},g=function(t){return u()({path:"/wc/store/products/".concat(t)})},d=function(){return u()({path:"wc/store/products/attributes"})},f=function(t){return u()({path:"wc/store/products/attributes/".concat(t,"/terms")})},h=function(t){var e=t.selected,r=function(t){var e=t.selected,r=void 0===e?[]:e,n=t.search,o=[Object(c.addQueryArgs)("wc/store/products/tags",{per_page:s.g?100:0,orderby:s.g?"count":"name",order:s.g?"desc":"asc",search:n})];return s.g&&r.length&&o.push(Object(c.addQueryArgs)("wc/store/products/tags",{include:r})),o}({selected:void 0===e?[]:e,search:t.search});return Promise.all(r.map((function(t){return u()({path:t})}))).then((function(t){return Object(a.uniqBy)(Object(a.flatten)(t),"id")}))},O=function(t){return u()({path:Object(c.addQueryArgs)("wc/store/products/categories",b({per_page:0},t))})},m=function(t){return u()({path:"wc/store/products/categories/".concat(t)})},j=function(t){return u()({path:Object(c.addQueryArgs)("wc/store/products",{per_page:0,type:"variation",parent:t})})}},28:function(t,e){!function(){t.exports=this.wp.escapeHtml}()},3:function(t,e){!function(){t.exports=this.wc.wcSettings}()},30:function(t,e,r){"use strict";var n=r(0),o=r(1),c=(r(2),r(28));e.a=function(t){var e,r,i,u=t.error;return Object(n.createElement)("div",{className:"wc-block-error-message"},(r=(e=u).message,i=e.type,r?"general"===i?Object(n.createElement)("span",null,Object(o.__)("The following error was returned",'woocommerce'),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(c.escapeHTML)(r))):"api"===i?Object(n.createElement)("span",null,Object(o.__)("The following error was returned from the API",'woocommerce'),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(c.escapeHTML)(r))):r:Object(o.__)("An unknown error occurred which prevented the block from being updated.",'woocommerce')))}},37:function(t,e){!function(){t.exports=this.wp.keycodes}()},4:function(t,e){!function(){t.exports=this.wp.components}()},40:function(t,e){!function(){t.exports=this.wp.editor}()},42:function(t,e,r){"use strict";r.d(e,"b",(function(){return o}));var n=r(6),o=["woocommerce/product-best-sellers","woocommerce/product-category","woocommerce/product-new","woocommerce/product-on-sale","woocommerce/product-top-rated"];e.a={columns:{type:"number",default:n.a},rows:{type:"number",default:n.c},alignButtons:{type:"boolean",default:!1},categories:{type:"array",default:[]},catOperator:{type:"string",default:"any"},contentVisibility:{type:"object",default:{title:!0,price:!0,rating:!0,button:!0}},isPreview:{type:"boolean",default:!1}}},43:function(t,e,r){"use strict";var n=r(8),o=r.n(n),c=r(0),i=r(1),u=(r(2),r(4));function a(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function s(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?a(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}e.a=function(t){var e=t.onChange,r=t.settings,n=r.button,o=r.price,a=r.rating,l=r.title;return Object(c.createElement)(c.Fragment,null,Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product title",'woocommerce'),help:l?Object(i.__)("Product title is visible.",'woocommerce'):Object(i.__)("Product title is hidden.",'woocommerce'),checked:l,onChange:function(){return e(s(s({},r),{},{title:!l}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product price",'woocommerce'),help:o?Object(i.__)("Product price is visible.",'woocommerce'):Object(i.__)("Product price is hidden.",'woocommerce'),checked:o,onChange:function(){return e(s(s({},r),{},{price:!o}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Product rating",'woocommerce'),help:a?Object(i.__)("Product rating is visible.",'woocommerce'):Object(i.__)("Product rating is hidden.",'woocommerce'),checked:a,onChange:function(){return e(s(s({},r),{},{rating:!a}))}}),Object(c.createElement)(u.ToggleControl,{label:Object(i.__)("Add to Cart button",'woocommerce'),help:n?Object(i.__)("Add to Cart button is visible.",'woocommerce'):Object(i.__)("Add to Cart button is hidden.",'woocommerce'),checked:n,onChange:function(){return e(s(s({},r),{},{button:!n}))}}))}},45:function(t,e,r){"use strict";var n=r(16),o=r.n(n),c=r(0),i=r(1),u=r(5),a=(r(2),r(31)),s=r(4),l=r(13),b=r.n(l),p=r(24),g=r.n(p),d=r(18),f=r.n(d),h=r(19),O=r.n(h),m=r(17),j=r.n(m),w=r(20),y=r.n(w),v=r(21),_=r.n(v),k=r(11),S=r.n(k),P=r(22),E=r(27),C=r(26);function x(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=S()(t);if(e){var o=S()(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return _()(this,r)}}var A=Object(P.createHigherOrderComponent)((function(t){return function(e){y()(n,e);var r=x(n);function n(){var t;return f()(this,n),(t=r.apply(this,arguments)).state={error:null,loading:!1,categories:null},t.loadCategories=t.loadCategories.bind(j()(t)),t}return O()(n,[{key:"componentDidMount",value:function(){this.loadCategories()}},{key:"loadCategories",value:function(){var t=this;this.setState({loading:!0}),Object(E.b)().then((function(e){t.setState({categories:e,loading:!1,error:null})})).catch(function(){var e=g()(b.a.mark((function e(r){var n;return b.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Object(C.a)(r);case 2:n=e.sent,t.setState({categories:null,loading:!1,error:n});case 4:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}())}},{key:"render",value:function(){var e=this.state,r=e.error,n=e.loading,i=e.categories;return Object(c.createElement)(t,o()({},this.props,{error:r,isLoading:n,categories:i}))}}]),n}(c.Component)}),"withCategories"),D=r(30),R=(r(69),function(t){var e=t.categories,r=t.error,n=t.isLoading,l=t.onChange,b=t.onOperatorChange,p=t.operator,g=t.selected,d=t.isSingle,f=t.showReviewCount,h={clear:Object(i.__)("Clear all product categories",'woocommerce'),list:Object(i.__)("Product Categories",'woocommerce'),noItems:Object(i.__)("Your store doesn't have any product categories.",'woocommerce'),search:Object(i.__)("Search for product categories",'woocommerce'),selected:function(t){return Object(i.sprintf)(Object(i._n)("%d category selected","%d categories selected",t,'woocommerce'),t)},updated:Object(i.__)("Category search results updated.",'woocommerce')};return r?Object(c.createElement)(D.a,{error:r}):Object(c.createElement)(c.Fragment,null,Object(c.createElement)(a.a,{className:"woocommerce-product-categories",list:e,isLoading:n,selected:g.map((function(t){return Object(u.find)(e,{id:t})})).filter(Boolean),onChange:l,renderItem:function(t){var e=t.item,r=t.search,n=t.depth,u=void 0===n?0:n,s=["woocommerce-product-categories__item"];r.length&&s.push("is-searching"),0===u&&0!==e.parent&&s.push("is-skip-level");var l=e.breadcrumbs.length?"".concat(e.breadcrumbs.join(", "),", ").concat(e.name):e.name,b=f?Object(i.sprintf)(Object(i._n)("%s, has %d review","%s, has %d reviews",e.review_count,'woocommerce'),l,e.review_count):Object(i.sprintf)(Object(i._n)("%s, has %d product","%s, has %d products",e.count,'woocommerce'),l,e.count),p=f?Object(i.sprintf)(Object(i._n)("%d Review","%d Reviews",e.review_count,'woocommerce'),e.review_count):Object(i.sprintf)(Object(i._n)("%d Product","%d Products",e.count,'woocommerce'),e.count);return Object(c.createElement)(a.b,o()({className:s.join(" ")},t,{showCount:!0,countLabel:p,"aria-label":b}))},messages:h,isHierarchical:!0,isSingle:d}),!!b&&Object(c.createElement)("div",{className:g.length<2?"screen-reader-text":""},Object(c.createElement)(s.SelectControl,{className:"woocommerce-product-categories__operator",label:Object(i.__)("Display products matching",'woocommerce'),help:Object(i.__)("Pick at least two categories to use this setting.",'woocommerce'),value:p,onChange:b,options:[{label:Object(i.__)("Any selected categories",'woocommerce'),value:"any"},{label:Object(i.__)("All selected categories",'woocommerce'),value:"all"}]})))});R.defaultProps={operator:"any",isSingle:!1};e.a=A(R)},47:function(t,e){!function(){t.exports=this.wp.hooks}()},49:function(t,e){!function(){t.exports=this.ReactDOM}()},5:function(t,e){!function(){t.exports=this.lodash}()},50:function(t,e,r){"use strict";var n=r(0),o=r(1),c=r(5),i=(r(2),r(4)),u=r(6);e.a=function(t){var e=t.columns,r=t.rows,a=t.setAttributes,s=t.alignButtons;return Object(n.createElement)(n.Fragment,null,Object(n.createElement)(i.RangeControl,{label:Object(o.__)("Columns",'woocommerce'),value:e,onChange:function(t){var e=Object(c.clamp)(t,u.j,u.h);a({columns:Object(c.isNaN)(e)?"":e})},min:u.j,max:u.h}),Object(n.createElement)(i.RangeControl,{label:Object(o.__)("Rows",'woocommerce'),value:r,onChange:function(t){var e=Object(c.clamp)(t,u.l,u.i);a({rows:Object(c.isNaN)(e)?"":e})},min:u.l,max:u.i}),Object(n.createElement)(i.ToggleControl,{label:Object(o.__)("Align Last Block",'woocommerce'),help:s?Object(o.__)("The last inner block will be aligned vertically.",'woocommerce'):Object(o.__)("The last inner block will follow other content.",'woocommerce'),checked:s,onChange:function(){return a({alignButtons:!s})}}))}},51:function(t,e,r){"use strict";r.d(e,"a",(function(){return b}));var n=r(0),o=r(7),c=r.n(o),i=r(48),u=r.n(i),a=r(6);function s(t,e){var r;if("undefined"==typeof Symbol||null==t[Symbol.iterator]){if(Array.isArray(t)||(r=function(t,e){if(!t)return;if("string"==typeof t)return l(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(t);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return l(t,e)}(t))||e&&t&&"number"==typeof t.length){r&&(t=r);var n=0,o=function(){};return{s:o,n:function(){return n>=t.length?{done:!0}:{done:!1,value:t[n++]}},e:function(t){throw t},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var c,i=!0,u=!1;return{s:function(){r=t[Symbol.iterator]()},n:function(){var t=r.next();return i=t.done,t},e:function(t){u=!0,c=t},f:function(){try{i||null==r.return||r.return()}finally{if(u)throw c}}}}function l(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}var b=function(t){return function(e){var r=e.attributes,o=r.align,i=r.contentVisibility,l=c()(o?"align".concat(o):"",{"is-hidden-title":!i.title,"is-hidden-price":!i.price,"is-hidden-rating":!i.rating,"is-hidden-button":!i.button});return Object(n.createElement)(n.RawHTML,{className:l},function(t,e){var r=t.attributes,n=r.attributes,o=r.attrOperator,c=r.categories,i=r.catOperator,l=r.orderby,b=r.products,p=r.columns||a.a,g=r.rows||a.c,d=new Map;switch(d.set("limit",g*p),d.set("columns",p),c&&c.length&&(d.set("category",c.join(",")),i&&"all"===i&&d.set("cat_operator","AND")),n&&n.length&&(d.set("terms",n.map((function(t){return t.id})).join(",")),d.set("attribute",n[0].attr_slug),o&&"all"===o&&d.set("terms_operator","AND")),l&&("price_desc"===l?(d.set("orderby","price"),d.set("order","DESC")):"price_asc"===l?(d.set("orderby","price"),d.set("order","ASC")):"date"===l?(d.set("orderby","date"),d.set("order","DESC")):d.set("orderby",l)),e){case"woocommerce/product-best-sellers":d.set("best_selling","1");break;case"woocommerce/product-top-rated":d.set("orderby","rating");break;case"woocommerce/product-on-sale":d.set("on_sale","1");break;case"woocommerce/product-new":d.set("orderby","date"),d.set("order","DESC");break;case"woocommerce/handpicked-products":if(!b.length)return"";d.set("ids",b.join(",")),d.set("limit",b.length);break;case"woocommerce/product-category":if(!c||!c.length)return"";break;case"woocommerce/products-by-attribute":if(!n||!n.length)return""}var f,h="[products",O=s(d);try{for(O.s();!(f=O.n()).done;){var m=u()(f.value,2);h+=" "+m[0]+'="'+m[1]+'"'}}catch(t){O.e(t)}finally{O.f()}return h+="]"}(e,t))}}},52:function(t,e){!function(){t.exports=this.wp.viewport}()},6:function(t,e,r){"use strict";r.d(e,"m",(function(){return o})),r.d(e,"n",(function(){return c})),r.d(e,"h",(function(){return i})),r.d(e,"j",(function(){return u})),r.d(e,"a",(function(){return a})),r.d(e,"i",(function(){return s})),r.d(e,"l",(function(){return l})),r.d(e,"c",(function(){return b})),r.d(e,"k",(function(){return p})),r.d(e,"b",(function(){return g})),r.d(e,"f",(function(){return d})),r.d(e,"g",(function(){return f})),r.d(e,"d",(function(){return h})),r.d(e,"e",(function(){return O})),r.d(e,"o",(function(){return m}));var n=r(3),o=(Object(n.getSetting)("currentUserIsAdmin",!1),Object(n.getSetting)("reviewRatingsEnabled",!0)),c=Object(n.getSetting)("showAvatars",!0),i=Object(n.getSetting)("max_columns",6),u=Object(n.getSetting)("min_columns",1),a=Object(n.getSetting)("default_columns",3),s=Object(n.getSetting)("max_rows",6),l=Object(n.getSetting)("min_rows",1),b=Object(n.getSetting)("default_rows",3),p=Object(n.getSetting)("min_height",500),g=Object(n.getSetting)("default_height",500),d=(Object(n.getSetting)("placeholderImgSrc",""),Object(n.getSetting)("thumbnail_size",300),Object(n.getSetting)("isLargeCatalog")),f=Object(n.getSetting)("limitTags"),h=(Object(n.getSetting)("hasProducts",!0),Object(n.getSetting)("hasTags",!0)),O=Object(n.getSetting)("homeUrl",""),m=(Object(n.getSetting)("couponsEnabled",!0),Object(n.getSetting)("shippingEnabled",!0),Object(n.getSetting)("taxesEnabled",!0),Object(n.getSetting)("displayItemizedTaxes",!1),Object(n.getSetting)("displayShopPricesIncludingTax",!1),Object(n.getSetting)("displayCartPricesIncludingTax",!1),Object(n.getSetting)("productCount",0),Object(n.getSetting)("attributes",[]),Object(n.getSetting)("isShippingCalculatorEnabled",!0),Object(n.getSetting)("isShippingCostHidden",!1),Object(n.getSetting)("woocommerceBlocksPhase",1),Object(n.getSetting)("wcBlocksAssetUrl","")),j=(Object(n.getSetting)("wcBlocksBuildUrl",""),Object(n.getSetting)("shippingCountries",{}),Object(n.getSetting)("allowedCountries",{}),Object(n.getSetting)("shippingStates",{}),Object(n.getSetting)("allowedStates",{}),Object(n.getSetting)("shippingMethodsExist",!1),Object(n.getSetting)("checkoutShowLoginReminder",!0),{id:0,title:"",permalink:""}),w=Object(n.getSetting)("storePages",{shop:j,cart:j,checkout:j,privacy:j,terms:j});w.shop.permalink,w.checkout.id,w.checkout.permalink,w.privacy.permalink,w.privacy.title,w.terms.permalink,w.terms.title,w.cart.id,w.cart.permalink,Object(n.getSetting)("checkoutAllowsGuest",!1),Object(n.getSetting)("checkoutAllowsSignup",!1),r(15)},60:function(t,e,r){"use strict";var n=r(8),o=r.n(n),c=r(35),i=r.n(c),u=r(10);r(2);function a(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}e.a=function(t){var e=t.srcElement,r=t.size,n=void 0===r?24:r,c=i()(t,["srcElement","size"]);return Object(u.isValidElement)(e)&&Object(u.cloneElement)(e,function(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?a(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}({width:n,height:n},c))}},606:function(t,e,r){t.exports=r(639)},62:function(t,e){!function(){t.exports=this.wp.htmlEntities}()},63:function(t,e){!function(){t.exports=this.wp.date}()},639:function(t,e,r){"use strict";r.r(e);var n=r(8),o=r.n(n),c=r(0),i=r(1),u=r(15),a=r(60),s=r(645),l=Object(c.createElement)(s.a,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(c.createElement)("path",{opacity:".87",fill:"none",d:"M0 0h24v24H0V0z"}),Object(c.createElement)("path",{d:"M21 8h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 1 7.59 7.59C7.22 7.95 7 8.45 7 9v10c0 1.1.9 2 2 2h9c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73v-2c0-1.1-.9-2-2-2zm0 4l-3 7H9V9l4.34-4.34L12.23 10H21v2zM1 9h4v12H1z"})),b=r(5),p=r(18),g=r.n(p),d=r(19),f=r.n(d),h=r(20),O=r.n(h),m=r(21),j=r.n(m),w=r(11),y=r.n(w),v=r(4),_=r(23),k=r(40),S=(r(2),r(43)),P=r(50),E=r(45),C=r(109);function x(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=y()(t);if(e){var o=y()(this).constructor;r=Reflect.construct(n,arguments,o)}else r=n.apply(this,arguments);return j()(this,r)}}var A=function(t){O()(r,t);var e=x(r);function r(){return g()(this,r),e.apply(this,arguments)}return f()(r,[{key:"getInspectorControls",value:function(){var t=this.props,e=t.attributes,r=t.setAttributes,n=e.categories,o=e.catOperator,u=e.columns,a=e.contentVisibility,s=e.rows,l=e.alignButtons;return Object(c.createElement)(_.InspectorControls,{key:"inspector"},Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Layout",'woocommerce'),initialOpen:!0},Object(c.createElement)(P.a,{columns:u,rows:s,alignButtons:l,setAttributes:r})),Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Content",'woocommerce'),initialOpen:!0},Object(c.createElement)(S.a,{settings:a,onChange:function(t){return r({contentVisibility:t})}})),Object(c.createElement)(v.PanelBody,{title:Object(i.__)("Filter by Product Category",'woocommerce'),initialOpen:!1},Object(c.createElement)(E.a,{selected:n,onChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],e=t.map((function(t){return t.id}));r({categories:e})},operator:o,onOperatorChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return r({catOperator:t})}})))}},{key:"render",value:function(){var t=this.props,e=t.name,r=t.attributes;return r.isPreview?C.a:Object(c.createElement)(c.Fragment,null,this.getInspectorControls(),Object(c.createElement)(v.Disabled,null,Object(c.createElement)(k.ServerSideRender,{block:e,attributes:r})))}}]),r}(c.Component),D=r(51),R=r(42);function T(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}var B="woocommerce/product-top-rated";Object(u.registerBlockType)(B,{title:Object(i.__)("Top Rated Products",'woocommerce'),icon:{src:Object(c.createElement)(a.a,{srcElement:l}),foreground:"#96588a"},category:"woocommerce",keywords:[Object(i.__)("WooCommerce",'woocommerce')],description:Object(i.__)("Display a grid of your top rated products.",'woocommerce'),supports:{align:["wide","full"],html:!1},example:{attributes:{isPreview:!0}},attributes:function(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?T(Object(r),!0).forEach((function(e){o()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):T(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}({},R.a),transforms:{from:[{type:"block",blocks:Object(b.without)(R.b,B),transform:function(t){return Object(u.createBlock)("woocommerce/product-top-rated",t)}}]},deprecated:[{attributes:R.a,save:Object(D.a)(B)}],edit:function(t){return Object(c.createElement)(A,t)},save:function(){return null}})},69:function(t,e){},70:function(t,e){!function(){t.exports=this.wp.dom}()},74:function(t,e){},75:function(t,e){},76:function(t,e){},77:function(t,e){},78:function(t,e){},80:function(t,e){},81:function(t,e){},82:function(t,e){},83:function(t,e){},85:function(t,e){},86:function(t,e){},87:function(t,e){},88:function(t,e){},89:function(t,e){},9:function(t,e){!function(){t.exports=this.wp.apiFetch}()}});
