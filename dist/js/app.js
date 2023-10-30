(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["/js/app"],{

/***/ "./resources/assets/js/app.js":
/*!************************************!*\
  !*** ./resources/assets/js/app.js ***!
  \************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @webcomponents/webcomponentsjs */ "./node_modules/@webcomponents/webcomponentsjs/webcomponents-bundle.js");
/* harmony import */ var _webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_webcomponents_webcomponentsjs__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! aos */ "./node_modules/aos/dist/aos.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! aos/dist/aos.css */ "./node_modules/aos/dist/aos.css");
/* harmony import */ var aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(aos_dist_aos_css__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _components_navigation__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./components/navigation */ "./resources/assets/js/components/navigation.js");
/* harmony import */ var _components_navigation__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_components_navigation__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _components_function__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./components/function */ "./resources/assets/js/components/function.js");





aos__WEBPACK_IMPORTED_MODULE_1___default.a.init({
  duration: 1200,
  once: true,
  disable: 'mobile'
});
$(window).on("load", function () {
  aos__WEBPACK_IMPORTED_MODULE_1___default.a.refresh();
});
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/js/components/function.js":
/*!****************************************************!*\
  !*** ./resources/assets/js/components/function.js ***!
  \****************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(global, jQuery) {/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! slick-carousel */ "./node_modules/slick-carousel/slick/slick.js");
/* harmony import */ var slick_carousel__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(slick_carousel__WEBPACK_IMPORTED_MODULE_0__);
global.$ = global.jQuery = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");

(function ($) {
  "use strict";

  var PoisionPromotionsCarousel = function PoisionPromotionsCarousel() {
    var WrapCarousel = $('.home-our-promotions__carousel');
    WrapCarousel.slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      speed: 300,
      dots: true,
      arrows: false,
      infinite: false,
      responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          infinite: true,
          dots: true
        }
      }, {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }]
    });
  };
  $(window).on("load", function () {});
  $(document).ready(function () {
    PoisionPromotionsCarousel();
  });
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! ./../../../../node_modules/webpack/buildin/global.js */ "./node_modules/webpack/buildin/global.js"), __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/js/components/navigation.js":
/*!******************************************************!*\
  !*** ./resources/assets/js/components/navigation.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {(function ($) {
  "use strict";

  $(window).scroll(function () {});
  $(window).on("load", function () {});
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

/***/ }),

/***/ "./resources/assets/scss/app.scss":
/*!****************************************!*\
  !*** ./resources/assets/scss/app.scss ***!
  \****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***************************************************************************!*\
  !*** multi ./resources/assets/js/app.js ./resources/assets/scss/app.scss ***!
  \***************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\rimki\Local Sites\poison-wp\app\public\wp-content\themes\poison-theme\resources\assets\js\app.js */"./resources/assets/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\rimki\Local Sites\poison-wp\app\public\wp-content\themes\poison-theme\resources\assets\scss\app.scss */"./resources/assets/scss/app.scss");


/***/ })

},[[0,"/js/manifest","/js/vendor"]]]);