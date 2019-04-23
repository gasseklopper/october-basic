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
content.forEach(function (elem) {
  console.log(elem);
});

/***/ }),

/***/ "./themes/Basic/assets/js/_carousel.js":
/*!*********************************************!*\
  !*** ./themes/Basic/assets/js/_carousel.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var carouselSlide = document.querySelector('.carousel-slide');
var carouselImages = document.querySelectorAll('.carousel-slide img'); // button

var prevBtn = document.querySelector('#prevBtn');
var nextBtn = document.querySelector('#nextBtn'); //counter

var counter = 1;

window.onresize = function (event) {
  var size = carouselSlide.clientWidth;
  carouselSlide.style.transform = 'translateX(' + -size * counter + 'px)';
};

window.onload = function (event) {
  var size = carouselSlide.clientWidth * 2;
  carouselSlide.style.transform = 'translateX(' + -size * counter + 'px)';
};

/***/ }),

/***/ "./themes/Basic/assets/js/_intro.js":
/*!******************************************!*\
  !*** ./themes/Basic/assets/js/_intro.js ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var container = document.querySelectorAll('.container_intro');
container.forEach(function (elem) {
  var trigger = document.querySelector('.trigger');
  var headline = document.querySelector('.intro__title');

  var toggleContent = function toggleContent() {
    if (elem.classList.contains('container--open')) {
      displayImg();
      window.addEventListener('scroll', noscroll);
    } else {
      document.body.scrollTop = document.documentElement.scrollTop = 0;
      window.removeEventListener('scroll', noscroll);
    }

    elem.classList.toggle('container--open');
    trigger.classList.toggle('trigger--active');
    headline.classList.toggle('intro__title--active');
  };

  var noscroll = function noscroll() {
    window.scrollTo(0, 0);
  }; // reset scrolling position


  document.body.scrollTop = document.documentElement.scrollTop = 0; // disable scrolling

  window.addEventListener('scroll', noscroll);
  trigger.addEventListener('click', toggleContent);
  var imgArr = ["IMG_4409.jpg", "_MG_5727.jpg", "_MG_6001.jpg", "_MG_6167.jpg", "IMG_7153.jpg", "PICT6732-Edit.jpg"];

  var displayImg = function displayImg() {
    var num = Math.floor(Math.random() * imgArr.length);
    document.canvas.src = "./themes/Basic/assets/images/" + imgArr[num];
  };
});

/***/ }),

/***/ "./themes/Basic/assets/js/_sidepanel.js":
/*!**********************************************!*\
  !*** ./themes/Basic/assets/js/_sidepanel.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var menuPanelButton = document.querySelector('.js-menu-panel');

if (menuPanelButton) {
  console.log(menuPanelButton);
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

/***/ }),

/***/ "./themes/Basic/assets/js/_slideshow.js":
/*!**********************************************!*\
  !*** ./themes/Basic/assets/js/_slideshow.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

var SlideShowContainer = document.querySelectorAll('.js-slideshow-container');
SlideShowContainer.forEach(function (elem) {
  // Controller
  var slideIndex = 1;
  var buttonPrevNext = elem.querySelectorAll('.js-slideshow-button');
  var buttonDots = elem.querySelectorAll('.js-slideshow-dot');
  var slides = elem.querySelectorAll(".mySlides"); // UI/Controls
  // next/pre Button

  buttonPrevNext.forEach(function (elem) {
    elem.onclick = function () {
      if (elem.classList.contains('prev')) {
        showSlide(-1);
      } else {
        showSlide(1);
      }
    };
  }); // Dots Button

  buttonDots.forEach(function (elem, i) {
    elem.onclick = function () {
      showSlideshow(slideIndex = i + 1);
    };
  }); // render

  var showSlide = function showSlide(n) {
    showSlideshow(slideIndex += n);
  };

  var showSlideshow = function showSlideshow(n) {
    var i; // resets slideIndex to one if n is larger

    if (n > slides.length) {
      slideIndex = 1;
    } // resets slideIndex to last slides item count


    if (n < 1) {
      slideIndex = slides.length;
    } // sets every slide to display none


    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    } // remove active state on dots


    for (i = 0; i < buttonDots.length; i++) {
      buttonDots[i] = buttonDots[i].classList.remove('active');
    } // add display block for slide  on current slideIndex


    slides[slideIndex - 1].style.display = "block"; // add active state on dots for current slide

    buttonDots[slideIndex - 1].classList.toggle('active');
  }; // intial load


  showSlideshow(slideIndex);
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
/* harmony import */ var _intro__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./_intro */ "./themes/Basic/assets/js/_intro.js");
/* harmony import */ var _intro__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_intro__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var _sidepanel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./_sidepanel */ "./themes/Basic/assets/js/_sidepanel.js");
/* harmony import */ var _sidepanel__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_sidepanel__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var _slideshow__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./_slideshow */ "./themes/Basic/assets/js/_slideshow.js");
/* harmony import */ var _slideshow__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_slideshow__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./_carousel */ "./themes/Basic/assets/js/_carousel.js");
/* harmony import */ var _carousel__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_carousel__WEBPACK_IMPORTED_MODULE_5__);







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