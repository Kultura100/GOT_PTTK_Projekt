/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/ranking.js":
/*!*********************************!*\
  !*** ./resources/js/ranking.js ***!
  \*********************************/
/***/ (() => {

eval("var labels = [];\nvar dataas = [];\n$('input[name=imieinazwisko]').each(function () {\n  labels.push($(this).val());\n});\n$('input[name=wynik]').each(function () {\n  dataas.push($(this).val());\n});\nvar data = {\n  labels: labels,\n  datasets: [{\n    data: dataas,\n    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(255, 205, 86, 0.2)', 'rgba(75, 192, 192, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(153, 102, 255, 0.2)', 'rgba(201, 203, 207, 0.2)'],\n    borderColor: ['rgb(255, 99, 132)', 'rgb(255, 159, 64)', 'rgb(255, 205, 86)', 'rgb(75, 192, 192)', 'rgb(54, 162, 235)', 'rgb(153, 102, 255)', 'rgb(201, 203, 207)'],\n    borderWidth: 1\n  }]\n};\nvar config = {\n  type: 'bar',\n  data: data,\n  options: {\n    scales: {\n      y: {\n        beginAtZero: true\n      }\n    },\n    plugins: {\n      legend: {\n        display: false\n      }\n    }\n  }\n};\nvar myChart = new Chart(document.getElementById('myChart'), config);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvcmFua2luZy5qcz80NGNhIl0sIm5hbWVzIjpbImxhYmVscyIsImRhdGFhcyIsIiQiLCJlYWNoIiwicHVzaCIsInZhbCIsImRhdGEiLCJkYXRhc2V0cyIsImJhY2tncm91bmRDb2xvciIsImJvcmRlckNvbG9yIiwiYm9yZGVyV2lkdGgiLCJjb25maWciLCJ0eXBlIiwib3B0aW9ucyIsInNjYWxlcyIsInkiLCJiZWdpbkF0WmVybyIsInBsdWdpbnMiLCJsZWdlbmQiLCJkaXNwbGF5IiwibXlDaGFydCIsIkNoYXJ0IiwiZG9jdW1lbnQiLCJnZXRFbGVtZW50QnlJZCJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsTUFBTSxHQUFHLEVBQWY7QUFDQSxJQUFNQyxNQUFNLEdBQUcsRUFBZjtBQUNBQyxDQUFDLENBQUMsMkJBQUQsQ0FBRCxDQUErQkMsSUFBL0IsQ0FBb0MsWUFBVztBQUMzQ0gsRUFBQUEsTUFBTSxDQUFDSSxJQUFQLENBQVlGLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsR0FBUixFQUFaO0FBQ0gsQ0FGRDtBQUdBSCxDQUFDLENBQUMsbUJBQUQsQ0FBRCxDQUF1QkMsSUFBdkIsQ0FBNEIsWUFBVztBQUNuQ0YsRUFBQUEsTUFBTSxDQUFDRyxJQUFQLENBQVlGLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUUcsR0FBUixFQUFaO0FBQ0gsQ0FGRDtBQUdBLElBQU1DLElBQUksR0FBRztBQUNUTixFQUFBQSxNQUFNLEVBQUVBLE1BREM7QUFFVE8sRUFBQUEsUUFBUSxFQUFFLENBQUM7QUFDUEQsSUFBQUEsSUFBSSxFQUFFTCxNQURDO0FBRVBPLElBQUFBLGVBQWUsRUFBRSxDQUNiLHlCQURhLEVBRWIseUJBRmEsRUFHYix5QkFIYSxFQUliLHlCQUphLEVBS2IseUJBTGEsRUFNYiwwQkFOYSxFQU9iLDBCQVBhLENBRlY7QUFXUEMsSUFBQUEsV0FBVyxFQUFFLENBQ1QsbUJBRFMsRUFFVCxtQkFGUyxFQUdULG1CQUhTLEVBSVQsbUJBSlMsRUFLVCxtQkFMUyxFQU1ULG9CQU5TLEVBT1Qsb0JBUFMsQ0FYTjtBQW9CUEMsSUFBQUEsV0FBVyxFQUFFO0FBcEJOLEdBQUQ7QUFGRCxDQUFiO0FBMEJBLElBQU1DLE1BQU0sR0FBRztBQUNYQyxFQUFBQSxJQUFJLEVBQUUsS0FESztBQUVYTixFQUFBQSxJQUFJLEVBQUVBLElBRks7QUFHWE8sRUFBQUEsT0FBTyxFQUFFO0FBQ0xDLElBQUFBLE1BQU0sRUFBRTtBQUNKQyxNQUFBQSxDQUFDLEVBQUU7QUFDQ0MsUUFBQUEsV0FBVyxFQUFFO0FBRGQ7QUFEQyxLQURIO0FBTUxDLElBQUFBLE9BQU8sRUFBRTtBQUNMQyxNQUFBQSxNQUFNLEVBQUU7QUFDSkMsUUFBQUEsT0FBTyxFQUFFO0FBREw7QUFESDtBQU5KO0FBSEUsQ0FBZjtBQWlCQSxJQUFNQyxPQUFPLEdBQUcsSUFBSUMsS0FBSixDQUNaQyxRQUFRLENBQUNDLGNBQVQsQ0FBd0IsU0FBeEIsQ0FEWSxFQUVaWixNQUZZLENBQWhCIiwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgbGFiZWxzID0gW107XHJcbmNvbnN0IGRhdGFhcyA9IFtdO1xyXG4kKCdpbnB1dFtuYW1lPWltaWVpbmF6d2lza29dJykuZWFjaChmdW5jdGlvbigpIHtcclxuICAgIGxhYmVscy5wdXNoKCQodGhpcykudmFsKCkpO1xyXG59KTtcclxuJCgnaW5wdXRbbmFtZT13eW5pa10nKS5lYWNoKGZ1bmN0aW9uKCkge1xyXG4gICAgZGF0YWFzLnB1c2goJCh0aGlzKS52YWwoKSk7XHJcbn0pO1xyXG5jb25zdCBkYXRhID0ge1xyXG4gICAgbGFiZWxzOiBsYWJlbHMsXHJcbiAgICBkYXRhc2V0czogW3tcclxuICAgICAgICBkYXRhOiBkYXRhYXMsXHJcbiAgICAgICAgYmFja2dyb3VuZENvbG9yOiBbXHJcbiAgICAgICAgICAgICdyZ2JhKDI1NSwgOTksIDEzMiwgMC4yKScsXHJcbiAgICAgICAgICAgICdyZ2JhKDI1NSwgMTU5LCA2NCwgMC4yKScsXHJcbiAgICAgICAgICAgICdyZ2JhKDI1NSwgMjA1LCA4NiwgMC4yKScsXHJcbiAgICAgICAgICAgICdyZ2JhKDc1LCAxOTIsIDE5MiwgMC4yKScsXHJcbiAgICAgICAgICAgICdyZ2JhKDU0LCAxNjIsIDIzNSwgMC4yKScsXHJcbiAgICAgICAgICAgICdyZ2JhKDE1MywgMTAyLCAyNTUsIDAuMiknLFxyXG4gICAgICAgICAgICAncmdiYSgyMDEsIDIwMywgMjA3LCAwLjIpJ1xyXG4gICAgICAgIF0sXHJcbiAgICAgICAgYm9yZGVyQ29sb3I6IFtcclxuICAgICAgICAgICAgJ3JnYigyNTUsIDk5LCAxMzIpJyxcclxuICAgICAgICAgICAgJ3JnYigyNTUsIDE1OSwgNjQpJyxcclxuICAgICAgICAgICAgJ3JnYigyNTUsIDIwNSwgODYpJyxcclxuICAgICAgICAgICAgJ3JnYig3NSwgMTkyLCAxOTIpJyxcclxuICAgICAgICAgICAgJ3JnYig1NCwgMTYyLCAyMzUpJyxcclxuICAgICAgICAgICAgJ3JnYigxNTMsIDEwMiwgMjU1KScsXHJcbiAgICAgICAgICAgICdyZ2IoMjAxLCAyMDMsIDIwNyknXHJcbiAgICAgICAgXSxcclxuICAgICAgICBib3JkZXJXaWR0aDogMVxyXG4gICAgfV1cclxufTtcclxuXHJcbmNvbnN0IGNvbmZpZyA9IHtcclxuICAgIHR5cGU6ICdiYXInLFxyXG4gICAgZGF0YTogZGF0YSxcclxuICAgIG9wdGlvbnM6IHtcclxuICAgICAgICBzY2FsZXM6IHtcclxuICAgICAgICAgICAgeToge1xyXG4gICAgICAgICAgICAgICAgYmVnaW5BdFplcm86IHRydWVcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0sXHJcbiAgICAgICAgcGx1Z2luczoge1xyXG4gICAgICAgICAgICBsZWdlbmQ6IHtcclxuICAgICAgICAgICAgICAgIGRpc3BsYXk6IGZhbHNlXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9LFxyXG4gICAgfSxcclxufTtcclxuXHJcbmNvbnN0IG15Q2hhcnQgPSBuZXcgQ2hhcnQoXHJcbiAgICBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbXlDaGFydCcpLFxyXG4gICAgY29uZmlnXHJcbik7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9yYW5raW5nLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/ranking.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/ranking.js"]();
/******/ 	
/******/ })()
;