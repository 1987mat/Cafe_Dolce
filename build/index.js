/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/modules/ContactForm.js":
/*!************************************!*\
  !*** ./src/modules/ContactForm.js ***!
  \************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class ContactForm {
  constructor() {
    this.form = document.querySelector('.contact-form');
    this.message = document.querySelector('.message');

    if (this.form) {
      this.events();
    }
  }

  events() {
    this.form.addEventListener('submit', e => {
      e.preventDefault();
      this.form.reset();
      this.message.innerHTML = 'Thanks! We will get back to you as soon as possible.';
      setTimeout(() => this.message.innerHTML = '', 3000);
    });
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ }),

/***/ "./src/modules/MobileMenu.js":
/*!***********************************!*\
  !*** ./src/modules/MobileMenu.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Mobile {
  constructor() {
    this.hamburger = document.querySelector('.hamburger');
    this.mobileNav = document.querySelector('.main-navigation');
    this.events();
  }

  events() {
    this.hamburger.addEventListener('click', this.handleClick.bind(this));
  }

  handleClick() {
    this.hamburger.classList.toggle('clicked');
    this.mobileNav.classList.toggle('show');
    document.documentElement.classList.toggle('no-scroll');
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Mobile);

/***/ }),

/***/ "./src/modules/NavBarScroll.js":
/*!*************************************!*\
  !*** ./src/modules/NavBarScroll.js ***!
  \*************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Navbar {
  constructor() {
    this.header = document.querySelector('.site-header');
    this.events();
    this.hasScrolled;
    this.lastScrollTop = 0;
    this.navbarHeight = this.header.getBoundingClientRect().height;
  }

  events() {
    window.addEventListener('scroll', () => {
      if (window.innerWidth >= 992) {
        this.hasScrolled = true;
        setInterval(() => {
          if (this.hasScrolled) {
            this.scroll();
            this.hasScrolled = false;
          }
        }, 150);
      }
    });
  }

  scroll() {
    let prev = window.pageYOffset; // Scroll Down

    if (prev > this.lastScrollTop && prev > this.navbarHeight) {
      this.header.classList.add('hide'); // Scroll Up
    } else {
      this.header.classList.remove('hide');
    }

    this.lastScrollTop = prev;
  }

}

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ }),

/***/ "./src/modules/fadeInOnScroll.js":
/*!***************************************!*\
  !*** ./src/modules/fadeInOnScroll.js ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "fadeInOnScroll": () => (/* binding */ fadeInOnScroll)
/* harmony export */ });
function fadeInOnScroll() {
  const elements = document.querySelectorAll('[data-observe]');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      entry.target.classList.toggle('active', entry.isIntersecting);
      if (entry.isIntersecting) observer.unobserve(entry.target);
    });
  }, {
    treshold: 0.7
  });
  [...elements].forEach(el => {
    observer.observe(el);
  });
}

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
// This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_NavBarScroll__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/NavBarScroll */ "./src/modules/NavBarScroll.js");
/* harmony import */ var _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modules/MobileMenu */ "./src/modules/MobileMenu.js");
/* harmony import */ var _modules_ContactForm__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./modules/ContactForm */ "./src/modules/ContactForm.js");
/* harmony import */ var _modules_fadeInOnScroll__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./modules/fadeInOnScroll */ "./src/modules/fadeInOnScroll.js");




const navbar = new _modules_NavBarScroll__WEBPACK_IMPORTED_MODULE_0__["default"]();
const mobileMenu = new _modules_MobileMenu__WEBPACK_IMPORTED_MODULE_1__["default"]();
const contactForm = new _modules_ContactForm__WEBPACK_IMPORTED_MODULE_2__["default"]();
(0,_modules_fadeInOnScroll__WEBPACK_IMPORTED_MODULE_3__.fadeInOnScroll)();
})();

/******/ })()
;
//# sourceMappingURL=index.js.map