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
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/chart.echarts.js":
/*!**********************************************!*\
  !*** ./resources/assets/js/chart.echarts.js ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  'use strict';
  /* Echart 1*/

  var chartdata2 = [{
    name: 'sales',
    type: 'line',
    smooth: true,
    data: [12, 25, 12, 35, 12, 38],
    color: ['#24243e']
  }, {
    name: 'Profit',
    type: 'line',
    smooth: true,
    size: 10,
    data: [8, 12, 28, 10, 10, 12],
    color: ['#53caed']
  }];
  var chart2 = document.getElementById('echart1');
  var barChart2 = echarts.init(chart2);
  var option2 = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '25'
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    xAxis: {
      data: ['2014', '2015', '2016', '2017', '2018'],
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    yAxis: {
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata2
  };
  barChart2.setOption(option2);
  /* Echart2 */

  var chartdata = [{
    name: 'sales',
    type: 'bar',
    data: [10, 15, 9, 18, 10, 15]
  }, {
    name: 'profit',
    type: 'line',
    smooth: true,
    data: [8, 5, 25, 10, 10]
  }, {
    name: 'growth',
    type: 'bar',
    data: [10, 14, 10, 15, 9, 25]
  }];
  var chart = document.getElementById('echart2');
  var barChart = echarts.init(chart);
  var option = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '25'
    },
    xAxis: {
      data: ['2014', '2015', '2016', '2017', '2018'],
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    yAxis: {
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata,
    color: ['#24243e', '#01b8ff', '#53caed']
  };
  barChart.setOption(option);
  /* Echart3 */

  var option4 = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '32'
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    xAxis: {
      type: 'value',
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    yAxis: {
      type: 'category',
      data: ['2014', '2015', '2016', '2017', '2018'],
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata2,
    color: ['#24243e', '#53caed', '#ecb403']
  };
  var chart4 = document.getElementById('echart3');
  var barChart4 = echarts.init(chart4);
  barChart4.setOption(option4);
  /* Echart4 */

  var option3 = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '32'
    },
    xAxis: {
      type: 'value',
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    yAxis: {
      type: 'category',
      data: ['2014', '2015', '2016', '2017', '2018'],
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: '#c0dfd8'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata,
    color: ['#24243e', '#01b8ff', '#53caed']
  };
  var chart3 = document.getElementById('echart4');
  var barChart3 = echarts.init(chart3);
  barChart3.setOption(option3);
  /* Echart5*/

  var chartdata3 = [{
    name: 'sales',
    type: 'bar',
    stack: 'Stack',
    data: [14, 18, 20, 14, 29, 21, 25, 14, 24]
  }, {
    name: 'Profit',
    type: 'bar',
    stack: 'Stack',
    data: [12, 14, 15, 50, 24, 24, 10, 20, 30]
  }];
  var option5 = {
    grid: {
      top: '6',
      right: '0',
      bottom: '17',
      left: '25'
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    xAxis: {
      data: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    yAxis: {
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata3,
    color: ['#24243e', '#53caed']
  };
  var chart5 = document.getElementById('echart5');
  var barChart5 = echarts.init(chart5);
  barChart5.setOption(option5);
  /* Echart6*/

  var chartdata3 = [{
    name: 'sales',
    type: 'bar',
    stack: 'Stack',
    data: [14, 18, 20, 14, 29, 21, 25, 14, 24]
  }, {
    name: 'Profit',
    type: 'bar',
    stack: 'Stack',
    data: [12, 14, 15, 50, 24, 24, 10, 20, 30]
  }];
  var option6 = {
    grid: {
      top: '6',
      right: '10',
      bottom: '17',
      left: '32'
    },
    tooltip: {
      show: true,
      showContent: true,
      alwaysShowContent: true,
      triggerOn: 'mousemove',
      trigger: 'axis',
      axisPointer: {
        label: {
          show: false
        }
      }
    },
    xAxis: {
      type: 'value',
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    yAxis: {
      type: 'category',
      data: ['2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
      splitLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLine: {
        lineStyle: {
          color: 'rgba(119, 119, 142, 0.2)'
        }
      },
      axisLabel: {
        fontSize: 10,
        color: '#77778e'
      }
    },
    series: chartdata3,
    color: ['#24243e', '#53caed']
  };
  var chart6 = document.getElementById('echart6');
  var barChart6 = echarts.init(chart6);
  barChart6.setOption(option6);
});

/***/ }),

/***/ 7:
/*!****************************************************!*\
  !*** multi ./resources/assets/js/chart.echarts.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! F:\Lan Messenger Received Files\Laravel\LTR\resources\assets\js\chart.echarts.js */"./resources/assets/js/chart.echarts.js");


/***/ })

/******/ });