var app = angular.module('csvCalculator', [])

.directive('ngNumber', function($filter) {
        return {
            restrict: 'A',
            require: '?ngModel',
            link: function(scope, element, attrs, ngModel) {
                element.on('blur', function() {
                    this.value = $filter('number')(this.value, 2).replace(/,/g, "");
                });
                ngModel.$formatters.unshift(function(value) {
                    return $filter('number')(value, 2);
                });
            }
        }
    })
    .factory('Excel', function($window) {
        var uri = 'data:application/vnd.ms-excel;base64,',
            template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40">' +
            '<head><!--[if gte mso 9]>' +
            '<xml>' +
            '<x:ExcelWorkbook>' +
            '<x:ExcelWorksheets>' +
            '<x:ExcelWorksheet>' +
            '<x:Name>{worksheet}</x:Name>' +
            '<x:WorksheetOptions>' +
            '<x:DisplayGridlines/>' +
            '</x:WorksheetOptions>' +
            '</x:ExcelWorksheet>' +
            '</x:ExcelWorksheets>' +
            '</x:ExcelWorkbook></xml>' +
            '<![endif]--></head>' +
            '<body><table>' +
            '<tr><td align="center">{worksheet}</td></tr>' +
            '{table}' +
            '</table></body>' +
            '</html>',
            base64 = function(s) {
                return $window.btoa(unescape(encodeURIComponent(s)));
            },
            format = function(s, c) {
                return s.replace(/{(\w+)}/g, function(m, p) {
                    console.log(m, p);
                    return c[p];
                })
            };
        return {
            tableToExcel: function(tableId, worksheetName, fileName) {
                var table = $(tableId),
                    ctx = { worksheet: worksheetName, table: table.html() },
                    download = fileName,
                    href = uri + base64(format(template, ctx));
                return href;
            }
        };
    });