app.controller('w2HourlyCtrl', function($scope, $filter) {
    $scope.w2hBillRate = 0.00;
    $scope.w2hClientDiscountPercent = 0.00;
    $scope.w2hClientDiscountValue = 0.00;
    $scope.w2hPassthruPercent = 0.00;
    $scope.w2hPassthruValue = 0.00;
    $scope.w2hNetBillRate = 0.00;
    $scope.w2hHourlyRate = 0.00;
    $scope.w2hPayrollTaxPercent = 0.00;
    $scope.w2hPayrollTaxValue = 0.00;
    $scope.w2hMedicalMonthly = 0.00;
    $scope.w2hImmigExp = 0.00;
    $scope.w2hRecoveryMonths = 0.00;
    $scope.w2hHrlyImmigExp = 0.00;
    $scope.w2hNetPayRate = 0.00;
    $scope.w2hNetProfitValue = 0.00;
    $scope.w2hNetProfitPercent = 0.00;
    $scope.w2hMarkup = 0.00;

    $scope.calculateW2Hourly = calculateW2Hourly;

    $scope.$on('updateClientDiscount', function(event, data) {
        $scope.w2hClientDiscountPercent = parseFloat(data.clientDiscount);
        $scope.calculateW2Hourly();
    });

    $scope.$on('updateCountry', function(event, data) {
        $scope.w2hPayrollTaxPercent = data.w2Load && parseFloat(data.w2Load) || 0.00;
        $scope.calculateW2Hourly();
    });

    function calculateW2Hourly() {

        $scope.w2hClientDiscountValue = parseFloat($scope.w2hBillRate * $scope.w2hClientDiscountPercent / 100).toFixed(2);

        $scope.w2hPassthruValue = parseFloat($scope.w2hBillRate * $scope.w2hPassthruPercent / 100).toFixed(2);

        $scope.w2hNetBillRate = $scope.w2hBillRate - $scope.w2hClientDiscountValue - $scope.w2hPassthruValue;

        $scope.w2hPayrollTaxValue = $scope.w2hHourlyRate * $scope.w2hPayrollTaxPercent / 100;

        $scope.w2hHrlyImmigExp = $scope.w2hRecoveryMonths > 0 && ($scope.w2hImmigExp / ($scope.w2hRecoveryMonths * 166)) || 0.00;

        $scope.w2hNetPayRate = (parseFloat($scope.w2hHourlyRate) + parseFloat($scope.w2hPayrollTaxValue)) +
            ($scope.w2hMedicalMonthly * 166) + parseFloat($scope.w2hHrlyImmigExp);

        $scope.w2hNetProfitValue = $scope.w2hNetBillRate - $scope.w2hNetPayRate;
        $scope.w2hNetProfitPercent = $scope.w2hBillRate > 0 && ($scope.w2hNetProfitValue * 100 / $scope.w2hBillRate) || 0.00;
        $scope.w2hMarkup = $scope.w2hHourlyRate > 0 && (($scope.w2hBillRate - $scope.w2hHourlyRate) / $scope.w2hHourlyRate * 100) || 0.00;

    }
});