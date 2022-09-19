/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/clock/index.js":
/*!*******************************!*\
  !*** ./src/js/clock/index.js ***!
  \*******************************/
/***/ (() => {

(function ($) {
  /**
   * Clock Class.
   */
  class Clock {
    /**
     * Constructor
     */
    constructor() {
      this.initializeClock();
    }
    /**
     * initializeClock
     */


    initializeClock() {
      setInterval(() => this.time(), 1000);
    }
    /**
     * Numpad
     *
     * @param {String} str String
     *
     * @return {string} String
     */


    numPad(str) {
      const cStr = str.toString();

      if (2 > cStr.length) {
        str = 0 + cStr;
      }

      return str;
    }
    /**
     * Time
     */


    time() {
      const currDate = new Date();
      const currSec = currDate.getSeconds();
      const currMin = currDate.getMinutes();
      const curr24Hr = currDate.getHours();
      const ampm = 12 <= curr24Hr ? 'pm' : 'am';
      let currHr = curr24Hr % 12;
      currHr = currHr ? currHr : 12;
      const stringTime = currHr + ':' + this.numPad(currMin) + ':' + this.numPad(currSec);
      const timeEmojiEl = $('#time-emoji');

      if (5 <= curr24Hr && 17 >= curr24Hr) {
        timeEmojiEl.text('🌞');
      } else {
        timeEmojiEl.text('🌜');
      }

      $('#time').text(stringTime);
      $('#ampm').text(ampm);
    }

  }

  new Clock();
})(jQuery);

/***/ }),

/***/ "./src/img/cat.jpg":
/*!*************************!*\
  !*** ./src/img/cat.jpg ***!
  \*************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ("../../src/img/cat.jpg");

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
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
(() => {
"use strict";
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./clock */ "./src/js/clock/index.js");
/* harmony import */ var _clock__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_clock__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _img_cat_jpg__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../img/cat.jpg */ "./src/img/cat.jpg");
 //Images


})();

/******/ })()
;
//# sourceMappingURL=main.js.map