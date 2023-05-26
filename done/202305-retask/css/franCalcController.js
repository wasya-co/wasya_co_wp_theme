var app=angular.module('LoginApp',[]);


app.factory('Excel',function($window){
        var uri='data:application/vnd.ms-excel;base64,',
            template='<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
            base64=function(s){return $window.btoa(unescape(encodeURIComponent(s)));},
            format=function(s,c){return s.replace(/{(\w+)}/g,function(m,p){return c[p];})};
        return {
            tableToExcel:function(tableId,worksheetName){
                var table=$(tableId),
                    ctx={worksheet:worksheetName,table:table.html()},
                    download='ApTask_Franchise_Calc.xls',
                    href=uri+base64(format(template,ctx));
                  //  console.log('href:'+href);
                return href;
            }
        };
    })

app.directive('exportToPdf', function(){
       
       return {
           restrict: 'E',
           scope: {
                elemId: '@'
           },
           template: '<button data-ng-click="exportToPdf()">Export to PDF</button>',
           link: function(scope, elem, attr){

              scope.exportToPdf = function() {
              
                  var doc = new jsPDF();
                  
                  console.log('elemId 12312321', scope.elemId);
                           
                  doc.fromHTML(
                  document.getElementById(scope.elemId).outerHTML, 15, 15, {
                         'width': 170
                  });
                  
                  doc.save('a4.pdf')
                   
               }
           }                   
       }
    
    })


.directive('navigatable', function(){
        return function(scope, element, attr) {
            
            element.on('keypress.mynavigation', 'input[type="text"]', handleNavigation);
            
            
      function handleNavigation(e){
        
        var arrow = { left: 37, up: 38, right: 39, down: 40 };
 
        // select all on focus
        element.find('input').keydown(function (e) {
 
            // shortcut for key other than arrow keys
            if ($.inArray(e.which, [arrow.left, arrow.up, arrow.right, arrow.down]) < 0) { return; }
 
            var input = e.target;
            var td = $(e.target).closest('td');
            var moveTo = null;
 
            switch (e.which) {
 
                case arrow.left: {
                    if (input.selectionStart == 0) {
                        moveTo = td.prev('td:has(input,textarea)');
                    }
                    break;
                }
                case arrow.right: {
                    if (input.selectionEnd == input.value.length) {
                        moveTo = td.next('td:has(input,textarea)');
                    }
                    break;
                }
 
                case arrow.up:
                case arrow.down: {
 
                    var tr = td.closest('tr');
                    var pos = td[0].cellIndex;
 
                    var moveToRow = null;
                    if (e.which == arrow.down) {
                        moveToRow = tr.next('tr');
                    }
                    else if (e.which == arrow.up) {
                        moveToRow = tr.prev('tr');
                    }
 
                    if (moveToRow.length) {
                        moveTo = $(moveToRow[0].cells[pos]);
                    }
 
                    break;
                }
 
            }
 
            if (moveTo && moveTo.length) {
 
                e.preventDefault();
 
                moveTo.find('input,textarea').each(function (i, input) {
                    input.focus();
                    input.select();
                });
 
            }
 
        });
        
        
                var key = e.keyCode ? e.keyCode : e.which;
                if(key === 13){
                    var focusedElement = $(e.target);
                    var nextElement = focusedElement.parent().next();
                    if (nextElement.find('input').length>0){
                        nextElement.find('input').focus();
                    }else{
                        nextElement = nextElement.parent().next().find('input').first();
                        nextElement.focus();
                    }
                }
      }
        };
    })



.controller('FrancalcController', function($scope,$filter, $window, $http,$rootScope,$location,$timeout,Excel) {
  $scope.master=[
        {
            "id":"101",
            "year":"YEAR-1",
            "month":"Mon-1",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"102",
            "year":"YEAR-1",
            "month":"Mon-2",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"103",
            "year":"YEAR-1",
            "month":"Mon-3",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"104",
            "year":"YEAR-1",
            "month":"Mon-4",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"105",
            "year":"YEAR-1",
            "month":"Mon-5",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"106",
            "year":"YEAR-1",
            "month":"Mon-6",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"107",
            "year":"YEAR-1",
            "month":"Mon-7",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"108",
            "year":"YEAR-1",
            "month":"Mon-8",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"109",
            "year":"YEAR-1",
            "month":"Mon-9",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"110",
            "year":"YEAR-1",
            "month":"Mon-10",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"111",
            "year":"YEAR-1",
            "month":"Mon-11",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"112",
            "year":"YEAR-1",
            "month":"Mon-12",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },

        {
            "id":"113",
            "year":"YEAR-2",
            "month":"Mon-1",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"114",
            "year":"YEAR-2",
            "month":"Mon-2",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"115",
            "year":"YEAR-2",
            "month":"Mon-3",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"116",
            "year":"YEAR-2",
            "month":"Mon-4",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"117",
            "year":"YEAR-2",
            "month":"Mon-5",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"118",
            "year":"YEAR-2",
            "month":"Mon-6",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"119",
            "year":"YEAR-2",
            "month":"Mon-7",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"120",
            "year":"YEAR-2",
            "month":"Mon-8",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"121",
            "year":"YEAR-2",
            "month":"Mon-9",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"122",
            "year":"YEAR-2",
            "month":"Mon-10",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"123",
            "year":"YEAR-2",
            "month":"Mon-11",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"124",
            "year":"YEAR-2",
            "month":"Mon-12",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
           "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        }


    ]
    $scope.year1=[
        {
            "id":"101",
            "year":"YEAR-1",
            "month":"Mon-1",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"102",
            "year":"YEAR-1",
            "month":"Mon-2",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"103",
            "year":"YEAR-1",
            "month":"Mon-3",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"104",
            "year":"YEAR-1",
            "month":"Mon-4",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"105",
            "year":"YEAR-1",
            "month":"Mon-5",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"106",
            "year":"YEAR-1",
            "month":"Mon-6",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"107",
            "year":"YEAR-1",
            "month":"Mon-7",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"108",
            "year":"YEAR-1",
            "month":"Mon-8",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"109",
            "year":"YEAR-1",
            "month":"Mon-9",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"110",
            "year":"YEAR-1",
            "month":"Mon-10",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"111",
            "year":"YEAR-1",
            "month":"Mon-11",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"112",
            "year":"YEAR-1",
            "month":"Mon-12",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },

        {
            "id":"113",
            "year":"YEAR-2",
            "month":"Mon-1",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"114",
            "year":"YEAR-2",
            "month":"Mon-2",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"115",
            "year":"YEAR-2",
            "month":"Mon-3",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"116",
            "year":"YEAR-2",
            "month":"Mon-4",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"117",
            "year":"YEAR-2",
            "month":"Mon-5",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"118",
            "year":"YEAR-2",
            "month":"Mon-6",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"119",
            "year":"YEAR-2",
            "month":"Mon-7",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"120",
            "year":"YEAR-2",
            "month":"Mon-8",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"121",
            "year":"YEAR-2",
            "month":"Mon-9",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"122",
            "year":"YEAR-2",
            "month":"Mon-10",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"123",
            "year":"YEAR-2",
            "month":"Mon-11",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
            "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        },
        {
            "id":"124",
            "year":"YEAR-2",
            "month":"Mon-12",
            "C2CADD":0,
            "C2CDROP":0,
            "W2ADD":0,
            "W2DROP":0,
            "TotalNet":0,
           "c2cTotalNet":0,"w2TotalNet":0, "YourShare":0,
            "c2cgp":0,
            "w2gp":0,
            "c2cload":0,
            "w2load":0,
            "c2recrfee":0,
            "w2recrfee":0,
            "c2Royalty":0,
            "w2Royalty":0,
            "c2cShare":0,
            "w2Share":0

        }


    ]

    $scope.showPercen=false;

    $scope.togglePercentage=function(){
        if($scope.showPercen===true)
        {
            $scope.showPercen=false;
        }
        else{
            $scope.showPercen=false;
        }
    }

    $scope.c2cavgbillrate=0;
    $scope.c2cavgpayrate=0;
    $scope.w2avgbillrate=0;
    $scope.w2avgpayrate=0;
    $scope.year1total=0;
    $scope.year2total=0;

    $scope.year1rev=0;
    $scope.year2rev=0;

    $scope.year1c2ctotal=0;
    $scope.year2c2ctotal=0;


    $scope.year1w2total=0;
    $scope.year2w2total=0;

    $scope.dhbillrate=0;
    $scope.dhpayrate=0;

    $scope.hoursinmonth=160;
    $scope.c2load=0.10;
    $scope.w2load=0.20;
    $scope.advview=false;

    $scope.c2c_gp=0;
    $scope.c2c_admin_fee=0;
    $scope.c2c_gp_aload=0;
    $scope.c2c_royalty=0;
    $scope.c2c_rec_fee=0;
    $scope.c2c_fra_rcvs=0;
    $scope.c2c_fra_tot_spread=0;
    $scope.c2c_fra_rev=0;
    $scope.c2c_share=0;
    $scope.c2c_satutory=0;
        
    $scope.w2_gp=0;
    $scope.w2_admin_fee=0;
    $scope.w2_gp_aload=0;
    $scope.w2_royalty=0;
    $scope.w2_rec_fee=0;
    $scope.w2_fra_rcvs=0;
    $scope.w2_fra_tot_spread=0;
    $scope.w2_fra_rev=0;
    $scope.w2_share=0;
    $scope.w2_satutory=0;
        
    $scope.dh_gp=0;
    $scope.dh_admin_fee=0;
    $scope.dh_gp_aload=0;
    $scope.dh_royalty=0;
    $scope.dh_rec_fee=0;
    $scope.dh_fra_rcvs=0;
    $scope.dh_fra_tot_spread=0;
    $scope.dh_fra_rev=0;
    $scope.dh_share=0;
    $scope.dh_satutory=0;
    $scope.percentage=100;
    $scope.descriptiontable=true;





    $scope.test="hello";
     $scope.buttonClick = function() {
        alert('button click');
     };
     //reset();
     $scope.resetc2c=function()
     {
         //$scope.c2cavgpayrate=0;
        $scope.c2c_gp=0;
        $scope.c2c_admin_fee=0;
        $scope.c2c_gp_aload=0;
        $scope.c2c_royalty=0;
        $scope.c2c_rec_fee=0;
        $scope.c2c_fra_rcvs=0;
        $scope.c2c_fra_tot_spread=0;
        $scope.c2c_fra_rev=0;
        $scope.c2c_share=0;
        $scope.c2c_satutory=0;
       
     }
     $scope.resetw2=function()
     {
        $scope.w2_gp=0;
        $scope.w2_admin_fee=0;
        $scope.w2_gp_aload=0;
        $scope.w2_royalty=0;
        $scope.w2_rec_fee=0;
        $scope.w2_fra_rcvs=0;
        $scope.w2_fra_tot_spread=0;
        $scope.w2_fra_rev=0;
        $scope.w2_share=0;
        $scope.w2_satutory=0;
       
     }
     $scope.reset=function()
     {          
          $scope.year1total=0;
          $scope.year2total=0;
          $scope.year1rev=0;
          $scope.year2rev=0;
      
          $scope.year1c2ctotal=0;
          $scope.year2c2ctotal=0;
      
      
          $scope.year1w2total=0;
          $scope.year2w2total=0;

          
          $scope.year1 = angular.copy($scope.master);
          $scope.dhbillrate=0;
          
          $scope.c2c_gp=0;
          $scope.c2c_admin_fee=0;
          $scope.c2c_gp_aload=0;
          $scope.c2c_royalty=0;
          $scope.c2c_rec_fee=0;
          $scope.c2c_fra_rcvs=0;
          $scope.c2c_fra_tot_spread=0;
          $scope.c2c_fra_rev=0;
          $scope.c2c_share=0;
          $scope.c2c_satutory=0;
              
          $scope.w2_gp=0;
          $scope.w2_admin_fee=0;
          $scope.w2_gp_aload=0;
          $scope.w2_royalty=0;
          $scope.w2_rec_fee=0;
          $scope.w2_fra_rcvs=0;
          $scope.w2_fra_tot_spread=0;
          $scope.w2_fra_rev=0;
          $scope.w2_share=0;
          $scope.w2_satutory=0;
              
          $scope.dh_gp=0;
          $scope.dh_admin_fee=0;
          $scope.dh_gp_aload=0;
          $scope.dh_royalty=0;
          $scope.dh_rec_fee=0;
          $scope.dh_fra_rcvs=0;
          $scope.dh_fra_tot_spread=0;
          $scope.dh_fra_rev=0;
          $scope.dh_share=0;
          $scope.dh_satutory=0;
     };

      $scope.resetAll=function()
     {
          $scope.c2cavgbillrate=0;
          $scope.c2cavgpayrate=0;          
          $scope.w2avgbillrate=0;
          $scope.w2avgpayrate=0;

          $scope.reset();
     };

    $scope.exportToExcel=function(tableId){ // ex: '#my-table'
            var exportHref=Excel.tableToExcel(tableId,'ApTask_Franchise_Calc');
            
            $timeout(function(){
       //         location.href=exportHref;
                var a = document.createElement('a');
                a.href =exportHref;
                //setting the file name
                a.download = 'ApTask_Franchise_Calc.xls';
                //triggering the function
                a.click();
                //just in c


            },100); // trigger download
        };
    var isLoged=false;
    
    function getIPLog(){
        $.getJSON("http://ipinfo.io/json", function (data) {
        //alert("Your ip: " +JSON.stringify(data) );
        if(isLoged==false)
        {
                $http.post('http://touchpoint.aptask.net/api/1.0/iplog', data)
                        .then(function(){
                        isLoged=true;
						//Alert("Success");
                });
        }
            
        });
    }
    getIPLog();

    $scope.calculateDH = function(){

        $scope.dh_gp=$scope.dhbillrate;
        $scope.dhpayrate=0;
        $scope.dh_admin_fee=$scope.dhbillrate*10/100 ;
        $scope.dh_gp_aload=$scope.dh_gp-$scope.dh_admin_fee;
        $scope.dh_royalty=$scope.dhbillrate*1/100;
        $scope.dh_rec_fee=$scope.dh_gp_aload*30/100;
        $scope.dh_fra_rcvs=$scope.dh_gp_aload-($scope.dh_royalty+$scope.dh_rec_fee);
        $scope.dh_fra_tot_spread=$scope.dh_fra_rcvs/$scope.dh_gp;
        $scope.dh_fra_rev=$scope.dh_fra_rcvs/$scope.dhbillrate;
        $scope.dh_share=$scope.dh_gp-$scope.dh_fra_rcvs;
        $scope.dh_satutory=$scope.dh_share/$scope.dh_gp;
    };
    var showNegativeAlert=false;
      $scope.calculate = function(){
       if($scope.percentage<100){

       $scope.descriptiontable=false;
       }
       if($scope.percentage==100){

       $scope.descriptiontable=true;
       }


        // if(!$scope.c2cavgbillrate || !$scope.c2cavgpayrate || !$scope.w2avgbillrate || !$scope.w2avgpayrate){
        //     return;
        // }
        if($scope.c2cavgbillrate<=0 || $scope.c2cavgpayrate<=0)
        {
            $scope.c2cavgpayrate='';
            
        }


        if($scope.w2avgbillrate<=0 || $scope.w2avgpayrate<=0)
        {
            $scope.w2avgpayrate='';
        }



        var c2cavgnP=$scope.c2cavgbillrate-$scope.c2cavgpayrate;
        var w2avgnP=$scope.w2avgbillrate-$scope.w2avgpayrate;
        
        
            $scope.c2c_gp=$scope.c2cavgbillrate-$scope.c2cavgpayrate;
            $scope.c2c_admin_fee=$scope.c2cavgpayrate*10/100 ;
            $scope.c2c_gp_aload=$scope.c2c_gp-$scope.c2c_admin_fee;
            $scope.c2c_royalty=$scope.c2cavgbillrate*1/100;
            $scope.c2c_rec_fee=$scope.c2c_gp_aload*30/100;
            $scope.c2c_fra_rcvs=$scope.c2c_gp_aload-($scope.c2c_royalty+$scope.c2c_rec_fee);
            $scope.c2c_fra_tot_spread=$scope.c2c_fra_rcvs/$scope.c2c_gp;
            $scope.c2c_fra_rev=$scope.c2c_fra_rcvs/$scope.c2cavgbillrate;
            $scope.c2c_share=$scope.c2c_gp-$scope.c2c_fra_rcvs;
            $scope.c2c_satutory=$scope.c2c_share/$scope.c2c_gp;

        
            $scope.w2_gp=$scope.w2avgbillrate-$scope.w2avgpayrate;
            $scope.w2_admin_fee=$scope.w2avgpayrate*20/100 ;
            $scope.w2_gp_aload=$scope.w2_gp-$scope.w2_admin_fee;
            $scope.w2_royalty=$scope.w2avgbillrate*1/100;
            $scope.w2_rec_fee=$scope.w2_gp_aload*30/100;
            $scope.w2_fra_rcvs=$scope.w2_gp_aload-($scope.w2_royalty+$scope.w2_rec_fee);
            $scope.w2_fra_tot_spread=$scope.w2_fra_rcvs/$scope.w2_gp;
            $scope.w2_fra_rev=$scope.w2_fra_rcvs/$scope.w2avgbillrate;
            $scope.w2_share=$scope.w2_gp-$scope.w2_fra_rcvs;
            $scope.w2_satutory=$scope.w2_share/$scope.w2_gp;
    
            if($scope.c2cavgbillrate<=0 || $scope.c2cavgpayrate<=0)
            {
                $scope.resetc2c();
                
            }
    
    
            if($scope.w2avgbillrate<=0 || $scope.w2avgpayrate<=0)
            {
                $scope.resetw2();
            }

            //alert('');

            if($scope.w2_gp_aload<0 ||$scope.c2c_gp_aload<0 ||$scope.c2c_fra_rev<0 || $scope.w2_fra_rev<0)
            {
                showNegativeAlert=true;
              
            }

        $scope.year1total=0;
        $scope.year2total=0;  
        
        $scope.year1c2ctotal=0;
        $scope.year2c2ctotal=0;

        $scope.year1w2total=0;
        $scope.year2w2total=0;
        
        $scope.year1rev=0;
        $scope.year2rev=0;
        
        for (i=0; i<24; i++) {
            console.log('i:'+i);
             var prevTotalNet = 0; 
             var prevc2cTotalNet = 0; 
             var prevw2TotalNet = 0;    
             
                         
                    var previtem = $filter('filter')($scope.year1, {id:100+i});
                    console.log(previtem[0]);
                    if(previtem.length>0)
                    {
                         prevTotalNet = previtem[0].TotalNet;       
                         prevc2cTotalNet = previtem[0].c2cTotalNet;       
                         prevw2TotalNet = previtem[0].w2TotalNet;       
                    }
                    
            console.log('prevTotalNet:'+prevTotalNet);  
       
                    
            $scope.year1[i].c2cTotalNet=prevc2cTotalNet+ ($scope.year1[i].C2CADD-$scope.year1[i].C2CDROP);
            $scope.year1[i].w2TotalNet=prevw2TotalNet+ ($scope.year1[i].W2ADD-$scope.year1[i].W2DROP);   
            $scope.year1[i].TotalNet=prevTotalNet+ ($scope.year1[i].C2CADD-$scope.year1[i].C2CDROP)+($scope.year1[i].W2ADD-$scope.year1[i].W2DROP);   
            
            $scope.year1[i].c2cgp=$scope.year1[i].c2cTotalNet*$scope.hoursinmonth*c2cavgnP;
            $scope.year1[i].w2gp=$scope.year1[i].w2TotalNet*$scope.hoursinmonth*w2avgnP;

            $scope.year1[i].c2cload=$scope.year1[i].c2cTotalNet*$scope.hoursinmonth*$scope.c2cavgpayrate*$scope.c2load;
            $scope.year1[i].w2load=$scope.year1[i].w2TotalNet*$scope.hoursinmonth*$scope.w2avgpayrate*$scope.w2load;

             $scope.year1[i].c2recrfee=($scope.year1[i].c2cgp-$scope.year1[i].c2cload)*0.30;
            $scope.year1[i].w2recrfee=($scope.year1[i].w2gp-$scope.year1[i].w2load)*0.30;

             $scope.year1[i].c2Royalty=($scope.year1[i].c2cTotalNet*$scope.hoursinmonth*$scope.c2cavgbillrate)*0.01;
            $scope.year1[i].w2Royalty=($scope.year1[i].w2TotalNet*$scope.hoursinmonth*$scope.w2avgbillrate)*0.01;

            $scope.year1[i].c2cShare=($scope.year1[i].c2cgp-($scope.year1[i].c2cload+$scope.year1[i].c2recrfee+$scope.year1[i].c2Royalty));
            $scope.year1[i].w2Share=($scope.year1[i].w2gp-($scope.year1[i].w2load+$scope.year1[i].w2recrfee+$scope.year1[i].w2Royalty));

             $scope.year1[i].YourShare=($scope.year1[i].c2cShare+$scope.year1[i].w2Share) * $scope.percentage /100;
            
             if($scope.year1[i].YourShare<0 && !showNegativeAlert)
             {
                showNegativeAlert=true;
             }

            if($scope.year1[i].year=='YEAR-1')
            {
                $scope.year1total= $scope.year1total+ $scope.year1[i].YourShare;
                $scope.year1c2ctotal=$scope.year1c2ctotal+($scope.year1[i].c2cTotalNet * 160*$scope.c2cavgbillrate);
                $scope.year1w2total= $scope.year1w2total+($scope.year1[i].w2TotalNet*160*$scope.w2avgbillrate);
                $scope.year1rev=($scope.year1c2ctotal+$scope.year1w2total) * $scope.percentage /100;
            }
            
            if($scope.year1[i].year=='YEAR-2')
            {
                $scope.year2total= $scope.year2total+ $scope.year1[i].YourShare;   
                $scope.year2c2ctotal=$scope.year2c2ctotal+($scope.year1[i].c2cTotalNet * 160*$scope.c2cavgbillrate);
                $scope.year2w2total= $scope.year2w2total+($scope.year1[i].w2TotalNet*160*$scope.w2avgbillrate); 
                $scope.year2rev=($scope.year2c2ctotal+$scope.year2w2total)* $scope.percentage /100;
            }

            console.log('$scope.year1[i].TotalNet:'+$scope.year1[i].TotalNet);  
       
        }
        if(showNegativeAlert)
        {
            showNegativeAlert=false;   
            
                $scope.errormsg=true;
              
                
                $timeout(function () { 
                $scope.errormsg=false;
                if($scope.w2avgpayrate!="" || $scope.w2avgpayrate!=0)
                    {
                        $scope.w2avgpayrate=0;
                    }
                    if($scope.c2cavgpayrate!="" || $scope.c2cavgpayrate!=0)
                    {
                        $scope.c2cavgpayrate=0;
                    } 
                    $scope.calculate();
                    $scope.resetc2c();
                    $scope.resetw2();
            }, 3000);
                
        }
    };

});