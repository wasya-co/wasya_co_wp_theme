app.controller('markupCtrl', function($scope, $rootScope, $http) {

    $scope.statutoryMarkup = { hourly: 0.00, salary: 0 };
    $scope.billRate = { hourly: 0, salary: 0 };
    $scope.payRate = { hourly: 0, salary: 0 };

    $scope.calculatePayRate = calculatePayRate;


    function calculatePayRate(type) {

        $scope.payRate[type] = 100 / (100 + parseFloat($scope.statutoryMarkup[type])) * parseFloat($scope.billRate[type]);
        if (type === 'salary') {
            $scope.payRate[type] = $scope.payRate[type] * 1920;
        }
    }

});