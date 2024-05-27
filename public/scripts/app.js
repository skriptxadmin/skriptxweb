/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/tpls/index.js":
/*!***********************************!*\
  !*** ./src/scripts/tpls/index.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

__webpack_require__(/*! ./navbar-primary */ "./src/scripts/tpls/navbar-primary.js");

/***/ }),

/***/ "./src/scripts/tpls/navbar-primary.js":
/*!********************************************!*\
  !*** ./src/scripts/tpls/navbar-primary.js ***!
  \********************************************/
/***/ (() => {

var navbarPrimary = document.querySelector("nav.primary");
var navbarNav = navbarPrimary.querySelector(".navbar-nav");
var navLinks = navbarNav.querySelectorAll("a.nav-link");
navLinks.forEach(function (navLink) {
  var href = navLink.getAttribute('href');
  var index = window.location.href.indexOf(href);
  navLink.classList.remove('active');
  if (!index) {
    navLink.classList.add('active');
  }
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!****************************!*\
  !*** ./src/scripts/app.js ***!
  \****************************/
__webpack_require__(/*! ./tpls/index */ "./src/scripts/tpls/index.js");
})();

/******/ })()
;