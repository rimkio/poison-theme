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
/* harmony import */ var _components_gallery__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./components/gallery */ "./resources/assets/js/components/gallery.js");
/* harmony import */ var _components_tab__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./components/tab */ "./resources/assets/js/components/tab.js");
/* harmony import */ var _components_tab__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(_components_tab__WEBPACK_IMPORTED_MODULE_6__);







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

/***/ "./resources/assets/js/components/gallery.js":
/*!***************************************************!*\
  !*** ./resources/assets/js/components/gallery.js ***!
  \***************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var lightgallery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! lightgallery */ "./node_modules/lightgallery/lightgallery.es5.js");
/* harmony import */ var lightgallery_plugins_video__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! lightgallery/plugins/video */ "./node_modules/lightgallery/plugins/video/lg-video.es5.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }


(function ($) {
  "use strict";

  var PoisionSlickVideoGallery = function PoisionSlickVideoGallery() {
    var WrapCarousel = $('.section-our-gallery__carousel');
    if (!WrapCarousel.length) return;
    WrapCarousel.slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      speed: 300,
      dots: true,
      arrows: false,
      infinite: false
    });
  };
  $(window).on("load", function () {
    var videoCarousel = document.getElementsByClassName('section-our-gallery__carousel-item');
    var _iterator = _createForOfIteratorHelper(videoCarousel),
      _step;
    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var item = _step.value;
        Object(lightgallery__WEBPACK_IMPORTED_MODULE_0__["default"])(item, {
          plugins: [lightgallery_plugins_video__WEBPACK_IMPORTED_MODULE_1__["default"]],
          videojs: true,
          videojsOptions: {
            muted: false
          }
        });
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }
    Object(lightgallery__WEBPACK_IMPORTED_MODULE_0__["default"])(document.getElementById('thumbnails-gallery'), {
      thumbnail: true
    });
  });
  $(document).ready(function () {
    PoisionSlickVideoGallery();
  });
})(jQuery);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js")))

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

/***/ "./resources/assets/js/components/tab.js":
/*!***********************************************!*\
  !*** ./resources/assets/js/components/tab.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function($) {var PoisionProductTab = function PoisionProductTab() {
  var __tab_wrap = $('.home-our-product__cat');
  if (!__tab_wrap.length) return;
  $(document).on("click", ".home-our-product__cat-tab__item", function () {
    $(this).parent().find('.home-our-product__cat-tab__item').removeClass('active');
    $(this).addClass('active');
    var ID = $(this).data('id');
    var __tab_content = $(this).parents(__tab_wrap).find('.home-our-product__cat-tabcontent');
    var __tab_content_active = $(this).parents(__tab_wrap).find("[data-id=".concat(ID, "]"));
    __tab_content.removeClass('active');
    __tab_content_active.addClass('active');
    __tab_content.find('.home-our-product__cat-tabcontent__item').removeClass('aos-animate');
    setTimeout(function () {
      __tab_content_active.find('.home-our-product__cat-tabcontent__item').addClass('aos-animate');
    }, 100);
  });
};
PoisionProductTab();
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