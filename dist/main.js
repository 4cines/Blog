/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/app.js":
/*!**************************!*\
  !*** ./assets/js/app.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _comments_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./comments.js */ \"./assets/js/comments.js\");\n\r\n\r\n(0,_comments_js__WEBPACK_IMPORTED_MODULE_0__.renderComments)();\r\n\n\n//# sourceURL=webpack:///./assets/js/app.js?");

/***/ }),

/***/ "./assets/js/comments.js":
/*!*******************************!*\
  !*** ./assets/js/comments.js ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"renderComments\": () => (/* binding */ renderComments)\n/* harmony export */ });\nlet renderComments = () => {\r\n\r\n    let addComments = document.querySelectorAll(\".add-comments\");\r\n\r\n    document.addEventListener(\"renderComments\",( event =>{\r\n        renderComments();\r\n    }), {once: true});\r\n\r\n    addComments.forEach(addComments => {\r\n\r\n        addComments.addEventListener(\"click\", (event) => {\r\n            \r\n            let sendPostRequest = async () => { // llamada async va con un await\r\n                \r\n                let data = {}; //JSON llamada al servidor enviando datos\r\n                data[\"route\"] = 'addComment';\r\n                data[\"post\"] = addProduct.dataset.post;\r\n    \r\n                let response = await fetch('web.php', {\r\n                    headers: {\r\n                        'Accept': 'application/json',\r\n                    },\r\n                    method: 'POST',\r\n                    body: JSON.stringify(data)\r\n                })\r\n                .then(response => {\r\n                \r\n                    if (!response.ok) throw response;\r\n    \r\n                    return response.json();\r\n                })\r\n                .then(json => {\r\n\r\n                    let comments = addCommentsLayout.cloneNode(true);\r\n    \r\n                    comments.querySelector('.add-comments').dataset.ticket = json.newProduct.id;\r\n                    comments.querySelector('.name').src =  json.newProduct.imagen_url;\r\n                    comments.querySelector('.email').innerHTML =  json.newProduct.categoria;\r\n                    comments.querySelector('.comment').innerHTML =  json.newProduct.nombre;\r\n                    product.classList.remove('d-none', 'add-product-layout');\r\n    \r\n    \r\n                    if(ticketContainer.querySelector('.no-products')){\r\n                        ticketContainer.querySelector('.no-products').classList.add('d-none');\r\n                        ticketContainer.appendChild(product);\r\n                    }else{\r\n                        ticketContainer.appendChild(product);\r\n                    }\r\n    \r\n                    document.dispatchEvent(new CustomEvent('renderTicket'));\r\n                })\r\n                .catch ( error =>  {\r\n                    console.log(JSON.stringify(error));\r\n                });\r\n            };\r\n    \r\n            sendPostRequest();\r\n        }); \r\n    });\r\n \r\n};\n\n//# sourceURL=webpack:///./assets/js/comments.js?");

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
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/js/app.js");
/******/ 	
/******/ })()
;