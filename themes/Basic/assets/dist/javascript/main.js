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
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./themes/Basic/assets/js/_array.js":
/*!******************************************!*\
  !*** ./themes/Basic/assets/js/_array.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var content = document.querySelectorAll('.js-array-content');
console.log(content);
content.forEach(function (elem) {
  console.log(elem);
});

/***/ }),

/***/ "./themes/Basic/assets/js/_styleguide.js":
/*!***********************************************!*\
  !*** ./themes/Basic/assets/js/_styleguide.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var es = document.querySelectorAll('.styleguide_colors');

var rgbToHex = function rgbToHex(col) {
  if (col.charAt(0) == 'r') {
    col = col.replace('rgb(', '').replace(')', '').split(',');
    var r = parseInt(col[0], 10).toString(16);
    var g = parseInt(col[1], 10).toString(16);
    var b = parseInt(col[2], 10).toString(16);
    r = r.length == 1 ? '0' + r : r;
    g = g.length == 1 ? '0' + g : g;
    b = b.length == 1 ? '0' + b : b;
    var colHex = '#' + r + g + b;
    return colHex;
  }
};

es.forEach(function (elem) {
  var style = getComputedStyle(elem);
  var backgroundColor = style.backgroundColor;
  console.log(backgroundColor); // rgb(0, 0, 0)

  var outputColorRGB = elem.querySelector('.styleguide_colors__rgbtitle');
  outputColorRGB.innerHTML = outputColorRGB.innerHTML + backgroundColor;
  var col = backgroundColor;
  var outputColorHEX = elem.querySelector('.styleguide_colors__hextitle');
  outputColorHEX.innerHTML = outputColorHEX.innerHTML + rgbToHex(col);
});
var menuPanelButton = document.querySelector('.js-menu-panel');
console.log(menuPanelButton);

if (menuPanelButton) {
  menuPanelButton.addEventListener('click', function () {
    var element = document.getElementById('menu');
    element.classList.toggle('visible');
    console.log(element);
    console.log('pressed');
  });
  var menuPanelButtonClose = document.querySelector('.js-menu-panel-close');
  console.log(menuPanelButtonClose);
  menuPanelButtonClose.addEventListener('click', function () {
    var element = document.getElementById('menu');
    element.classList.toggle('visible');
    console.log(element);
    console.log('pressed');
  });
  var searchButtonClose = document.querySelector('.js-search-button');
  console.log(searchButtonClose);
  searchButtonClose.addEventListener('click', function () {
    var element = document.querySelector('.search__form');
    console.log(element);
    console.log('pressed');
  });
}

var container = document.querySelector('.container'),
    trigger = document.querySelector('.trigger');

function toggleContent() {
  console.log(container);

  if (container.classList.contains('.container--open')) {
    container.classList.toggle('container--open');
    window.addEventListener('scroll', noscroll);
  } else {
    container.classList.toggle('container--open');
    window.removeEventListener('scroll', noscroll);
  }
}

function noscroll() {
  window.scrollTo(0, 0);
} // reset scrolling position


document.body.scrollTop = document.documentElement.scrollTop = 0; // disable scrolling

window.addEventListener('scroll', noscroll);
trigger.addEventListener('click', toggleContent);

/***/ }),

/***/ "./themes/Basic/assets/js/main.js":
/*!****************************************!*\
  !*** ./themes/Basic/assets/js/main.js ***!
  \****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _styleguide__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./_styleguide */ "./themes/Basic/assets/js/_styleguide.js");
/* harmony import */ var _styleguide__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_styleguide__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _array__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./_array */ "./themes/Basic/assets/js/_array.js");
/* harmony import */ var _array__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_array__WEBPACK_IMPORTED_MODULE_1__);



/***/ }),

/***/ "./themes/Basic/assets/scss/main.scss":
/*!********************************************!*\
  !*** ./themes/Basic/assets/scss/main.scss ***!
  \********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***********************************************************************************!*\
  !*** multi ./themes/Basic/assets/js/main.js ./themes/Basic/assets/scss/main.scss ***!
  \***********************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\xampp\htdocs\october-basic\themes\Basic\assets\js\main.js */"./themes/Basic/assets/js/main.js");
module.exports = __webpack_require__(/*! C:\xampp\htdocs\october-basic\themes\Basic\assets\scss\main.scss */"./themes/Basic/assets/scss/main.scss");


/***/ })

/******/ });