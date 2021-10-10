/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/pages/dashboard.init.js":
/*!**********************************************!*\
  !*** ./resources/js/pages/dashboard.init.js ***!
  \**********************************************/
/***/ (() => {

/*
Template Name: Shreyu - Responsive Bootstrap 4 Admin Dashboard
Author: CoderThemes
Version: 1.0.0
Website: https://coderthemes.com/
Contact: support@coderthemes.com
File: Dashboard init js
*/
!function ($) {
  "use strict";

  var ChatApp = function ChatApp() {
    this.$body = $("body"), this.$chatInput = $('.chat-input'), this.$chatList = $('.conversation-list'), this.$chatSendBtn = $('.chat-send'), this.$chatForm = $("#chat-form");
  };

  ChatApp.prototype.save = function () {
    var chatText = this.$chatInput.val();
    var chatTime = moment().format("h:mm");

    if (chatText == "") {
      this.$chatInput.focus();
      return false;
    } else {
      $('<li class="clearfix odd"><div class="chat-avatar"><img src="assets/images/users/avatar-7.jpg" alt="male"><i>' + chatTime + '</i></div><div class="conversation-text"><div class="ctext-wrap"><i>Shreyu</i><p>' + chatText + '</p></div></div></li>').appendTo('.conversation-list');
      this.$chatInput.focus();
      this.$chatList.animate({
        scrollTop: this.$chatList.prop("scrollHeight")
      }, 1000);
      return true;
    }
  }; // init


  ChatApp.prototype.init = function () {
    var $this = this; //binding keypress event on chat input box - on enter we are adding the chat into chat list - 

    $this.$chatInput.keypress(function (ev) {
      var p = ev.which;

      if (p == 13) {
        $this.save();
        return false;
      }
    }); //binding send button click

    $this.$chatForm.on('submit', function (ev) {
      ev.preventDefault();
      $this.save();
      $this.$chatForm.removeClass('was-validated');
      $this.$chatInput.val('');
      return false;
    });
  }, //init ChatApp
  $.ChatApp = new ChatApp(), $.ChatApp.Constructor = ChatApp;
}(window.jQuery), function ($) {
  "use strict";

  var Dashboard = function Dashboard() {};

  Dashboard.prototype.initCharts = function () {
    window.Apex = {
      chart: {
        parentHeightOffset: 0,
        toolbar: {
          show: false
        }
      },
      grid: {
        padding: {
          left: 0,
          right: 0
        }
      },
      colors: ["#5369f8", "#43d39e", "#f77e53", "#ffbe0b"],
      tooltip: {
        theme: 'dark',
        x: {
          show: false
        }
      }
    }; // 
    // Stats
    //

    var options2 = {
      chart: {
        type: 'area',
        height: 45,
        width: 90,
        sparkline: {
          enabled: true
        }
      },
      series: [{
        data: [25, 66, 41, 85, 63, 25, 44, 12, 36, 9, 54]
      }],
      stroke: {
        width: 2,
        curve: 'smooth'
      },
      markers: {
        size: 0
      },
      colors: ["#727cf5"],
      tooltip: {
        fixed: {
          enabled: false
        },
        x: {
          show: false
        },
        y: {
          title: {
            formatter: function formatter(seriesName) {
              return '';
            }
          }
        },
        marker: {
          show: false
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: false,
          opacityFrom: 0.45,
          opacityTo: 0.05,
          stops: [45, 100]
        }
      }
    };
    new ApexCharts(document.querySelector("#today-revenue-chart"), options2).render();
    new ApexCharts(document.querySelector("#today-product-sold-chart"), $.extend({}, options2, {
      colors: ['#f77e53']
    })).render();
    new ApexCharts(document.querySelector("#today-new-customer-chart"), $.extend({}, options2, {
      colors: ['#43d39e']
    })).render();
    new ApexCharts(document.querySelector("#today-new-visitors-chart"), $.extend({}, options2, {
      colors: ['#ffbe0b']
    })).render(); // ------------------- revenue chart

    function getDaysInMonth(month, year) {
      var date = new Date(year, month, 1);
      var days = [];
      var idx = 0;

      while (date.getMonth() === month && idx < 15) {
        var d = new Date(date);
        days.push(d.getDate() + " " + d.toLocaleString('en-us', {
          month: 'short'
        }));
        date.setDate(date.getDate() + 1);
        idx += 1;
      }

      return days;
    }

    var now = new Date();
    var labels = getDaysInMonth(now.getMonth(), now.getFullYear());
    var options = {
      chart: {
        height: 296,
        type: 'area'
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth',
        width: 4
      },
      series: [{
        name: 'Revenue',
        data: [10, 20, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40, 30, 50, 35]
      }],
      zoom: {
        enabled: false
      },
      legend: {
        show: false
      },
      colors: ['#43d39e'],
      xaxis: {
        type: 'string',
        categories: labels,
        tooltip: {
          enabled: false
        },
        axisBorder: {
          show: false
        },
        labels: {}
      },
      yaxis: {
        labels: {
          formatter: function formatter(val) {
            return val + "k";
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          type: "vertical",
          shadeIntensity: 1,
          inverseColors: false,
          opacityFrom: 0.45,
          opacityTo: 0.05,
          stops: [45, 100]
        }
      }
    };
    var chart = new ApexCharts(document.querySelector("#revenue-chart"), options);
    chart.render();
    /* ------------- target */

    var options = {
      chart: {
        height: 296,
        type: 'bar',
        stacked: true,
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '45%'
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
      },
      series: [{
        name: 'Net Profit',
        data: [35, 44, 55, 57, 56, 61]
      }, {
        name: 'Revenue',
        data: [52, 76, 85, 101, 98, 87]
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        axisBorder: {
          show: false
        }
      },
      legend: {
        show: false
      },
      grid: {
        row: {
          colors: ['transparent', 'transparent'],
          // takes an array which will be repeated on columns
          opacity: 0.2
        },
        borderColor: '#f3f4f7'
      },
      tooltip: {
        y: {
          formatter: function formatter(val) {
            return "$ " + val + " thousands";
          }
        }
      }
    };
    var chart = new ApexCharts(document.querySelector("#targets-chart"), options);
    chart.render(); // sales by category --------------------------------------------------

    var options = {
      plotOptions: {
        pie: {
          donut: {
            size: '70%'
          },
          expandOnClick: false
        }
      },
      chart: {
        height: 298,
        type: 'donut'
      },
      legend: {
        show: true,
        position: 'right',
        horizontalAlign: 'left',
        itemMargin: {
          horizontal: 6,
          vertical: 3
        }
      },
      series: [44, 55, 41, 17],
      labels: ['Clothes 44k', 'Smartphons 55k', 'Electronics 41k', 'Other 17k'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom'
          }
        }
      }],
      tooltip: {
        y: {
          formatter: function formatter(value) {
            return value + "k";
          }
        }
      }
    };
    var chart = new ApexCharts(document.querySelector("#sales-by-category-chart"), options);
    chart.render();
  }, //initializing
  Dashboard.prototype.init = function () {
    // date picker
    $('#dash-daterange').flatpickr({
      mode: "range",
      defaultDate: [moment().subtract(7, 'days').format('YYYY-MM-DD'), moment().format('YYYY-MM-DD')]
    }); // calendar

    $('#calendar-widget').flatpickr({
      inline: true,
      shorthandCurrentMonth: true
    }); // chat

    $.ChatApp.init(); // charts

    this.initCharts();
  }, $.Dashboard = new Dashboard(), $.Dashboard.Constructor = Dashboard;
}(window.jQuery), //initializing main application module
function ($) {
  "use strict";

  $.Dashboard.init();
}(window.jQuery);

/***/ }),

/***/ "./resources/scss/app-dark.scss":
/*!**************************************!*\
  !*** ./resources/scss/app-dark.scss ***!
  \**************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n2 │ @import '../../node_modules/metismenujs/scss/metismenujs';\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  resources\\scss\\custom\\plugins\\_metismenu.scss 2:9  @import\n  resources\\scss\\app-dark.scss 99:9                  root stylesheet\n    at processResult (C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:743:19)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:844:5\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\sass-loader\\dist\\index.js:54:7\n    at Function.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:95825:16)\n    at _render_closure1.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:83882:12)\n    at _RootZone.runBinary$3$3 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:28060:18)\n    at _FutureListener.handleError$1 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:26590:21)");

/***/ }),

/***/ "./resources/scss/bootstrap.scss":
/*!***************************************!*\
  !*** ./resources/scss/bootstrap.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/bootstrap-dark.scss":
/*!********************************************!*\
  !*** ./resources/scss/bootstrap-dark.scss ***!
  \********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/scss/icons.scss":
/*!***********************************!*\
  !*** ./resources/scss/icons.scss ***!
  \***********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/css-loader/dist/cjs.js):\nError: Can't resolve './custom/plugins/fonts/unicons.eot' in 'C:\\xampp\\htdocs\\bankly\\resources\\scss'\n    at finishWithoutResolve (C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:293:18)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:362:15\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\bankly\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:14:1)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\bankly\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:25:1)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:87:43\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at eval (eval at create (C:\\xampp\\htdocs\\bankly\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:13:1)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\enhanced-resolve\\lib\\Resolver.js:410:5\n    at processResult (C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:743:19)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:844:5\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\xampp\\htdocs\\bankly\\node_modules\\css-loader\\dist\\index.js:155:5)\n    at processTicksAndRejections (internal/process/task_queues.js:97:5)");

/***/ }),

/***/ "./resources/scss/app-rtl.scss":
/*!*************************************!*\
  !*** ./resources/scss/app-rtl.scss ***!
  \*************************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n2 │ @import '../../node_modules/metismenujs/scss/metismenujs';\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  resources\\scss\\custom\\plugins\\_metismenu.scss 2:9  @import\n  resources\\scss\\app-rtl.scss 99:9                   root stylesheet\n    at processResult (C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:743:19)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:844:5\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\sass-loader\\dist\\index.js:54:7\n    at Function.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:95825:16)\n    at _render_closure1.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:83882:12)\n    at _RootZone.runBinary$3$3 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:28060:18)\n    at _FutureListener.handleError$1 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:26590:21)");

/***/ }),

/***/ "./resources/scss/app.scss":
/*!*********************************!*\
  !*** ./resources/scss/app.scss ***!
  \*********************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/sass-loader/dist/cjs.js):\nSassError: Can't find stylesheet to import.\n  ╷\n2 │ @import '../../node_modules/metismenujs/scss/metismenujs';\n  │         ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^\n  ╵\n  resources\\scss\\custom\\plugins\\_metismenu.scss 2:9  @import\n  resources\\scss\\app.scss 99:9                       root stylesheet\n    at processResult (C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:743:19)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\webpack\\lib\\NormalModule.js:844:5\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\bankly\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at C:\\xampp\\htdocs\\bankly\\node_modules\\sass-loader\\dist\\index.js:54:7\n    at Function.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:95825:16)\n    at _render_closure1.call$2 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:83882:12)\n    at _RootZone.runBinary$3$3 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:28060:18)\n    at _FutureListener.handleError$1 (C:\\xampp\\htdocs\\bankly\\node_modules\\sass\\sass.dart.js:26590:21)");

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
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
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
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/assets/js/pages/dashboard.init": 0,
/******/ 			"assets/css/bootstrap-dark": 0,
/******/ 			"assets/css/bootstrap": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkIds[i]] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/js/pages/dashboard.init.js")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/bootstrap.scss")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/bootstrap-dark.scss")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/icons.scss")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/app-rtl.scss")))
/******/ 	__webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/app.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["assets/css/bootstrap-dark","assets/css/bootstrap"], () => (__webpack_require__("./resources/scss/app-dark.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;