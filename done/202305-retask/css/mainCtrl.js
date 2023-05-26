app.controller('mainCtrl', function($scope, $rootScope, $http, Excel, $timeout) {

    $scope.countries = {};
    $scope.clients = {};
    $scope.currencies = {};
    $scope.w2Load = {};
    $scope.c2cLoad = {};
    $scope.selectedCountry = '';
    $scope.selectedClient = '';
    $scope.selectedCurrency = '';
    $scope.getCsvData = getCsvData;
    $scope.onUpdateCountry = onUpdateCountry;
    $scope.updateClientDiscount = updateClientDiscount;
    $scope.getCsvData();

    function getCsvData() {
		$http.get('/secure/wp-content/themes/Aptask/js/calc/masterlist.csv').then(onSuccess).catch(onError);

        function onSuccess(resp) {

            $scope.csvData = resp.data;
            $scope.csvData = $scope.csvData.split(/\r\n|\n/);

            angular.forEach($scope.csvData, function(row, index) {
                var rowData = row.split(',');

                if (rowData.length < 0) {
                    return;
                }
                // 0 - label, 1 - countryname, 2 - currency, 3 - W2Load, 4 - C2CLoad
                if (rowData[0] && rowData[0].toLowerCase() === 'country') {
                    //   $scope.countries[rowData[1]] = rowData[1];
                    $scope.countries[rowData[1]] = {
                        currency: rowData[2] || 'USD',
                        w2Load: rowData[3] || 0,
                        c2cLoad: rowData[4] || 0
                    };
                    $scope.currencies[rowData[2] || 'USD'] = rowData[2] || 'USD';
                }

                if (rowData[0] && rowData[0].toLowerCase() === 'client') {
                    $scope.clients[rowData[1]] = rowData[2];
                }

            });
        }

        function onError(err) {
            console.log(err);
        }
    }


    function onUpdateCountry() {
        var data = JSON.parse($scope.selectedCountry);
        $scope.selectedCurrency = data.currency;

        $scope.$broadcast('updateCountry', data);

    }

    function updateClientDiscount() {
        var data = {
            clientDiscount: $scope.selectedClient
        };
        $scope.$broadcast('updateClientDiscount', data);
    }

    $scope.exportToExcel = function() { // ex: '#my-table'
        var table = '.jq-tabs .ui-tabs-panel[aria-hidden="false"] table.table-export';
        var tabName = $('.ui-tabs-nav li.ui-tabs-active a').text();
        var exportHref = Excel.tableToExcel(table, tabName || 'Sheet1', 'ApTask Calculator.xls');
        debugger;
        $timeout(function() {
            var link = document.createElement('a');
            // Add the element to the DOM
            document.body.appendChild(link);
            link.setAttribute("type", "hidden"); // make it hidden if needed

            link.href = exportHref;
            //setting the file name
            link.download = 'ApTask Calculator.xls';
            //triggering the function
            link.click();
        }, 1000); // trigger download
    }

});