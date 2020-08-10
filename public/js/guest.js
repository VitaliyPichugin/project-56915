/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/guest.js":
/*!*******************************!*\
  !*** ./resources/js/guest.js ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

jQuery(document).ready(function () {
  jQuery(window).resize();
  jQuery('.main-container > div:not(".preloader")').each(function () {
    jQuery(this).css({
      visibility: 'visible'
    });
  });

  if (jQuery('#btn-open-login-form').length > 0) {
    jQuery('#btn-open-login-form').on('click', function () {
      jQuery('body').toggleClass('open-login-form');

      if (jQuery(this).find('i').hasClass('fi-lock')) {
        jQuery(this).find('i').removeClass();
        jQuery(this).find('i').addClass('fi-unlock');
      } else {
        jQuery(this).find('i').removeClass();
        jQuery(this).find('i').addClass('fi-lock');
      }
    });
  }

  jQuery('#content').center();
  jQuery('.main-container > div:not(".preloader")').each(function () {
    jQuery(this).css({
      visibility: 'visible'
    });
  });
  setTimeout(function () {
    jQuery('.main-container > .preloader').fadeOut(2000, function () {
      jQuery('.login-form-container').fadeIn(1000);
    });
  }, 500);
});
jQuery(window).resize(function () {
  jQuery('#content').center();
  var window_w = jQuery('.logotype').width();
  jQuery('.logo').css('max-width', window_w + 'px');
  jQuery('.logo-retina').css('max-width', window_w + 'px');
});

jQuery.fn.center = function () {
  var window_h = Math.max(0, (jQuery(window).height() - jQuery(this).outerHeight()) / 2 + jQuery(window).scrollTop());
  var content_h = jQuery('.logotype').height();

  if (window_h > content_h) {
    this.css('position', 'absolute');
    this.css('top', window_h + 'px');
  } else {
    this.css('position', 'relative');
    this.css('top', '0');
  }

  return this;
};

/***/ }),

/***/ 2:
/*!*************************************!*\
  !*** multi ./resources/js/guest.js ***!
  \*************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /var/www/dev-house/resources/js/guest.js */"./resources/js/guest.js");


/***/ })

/******/ });