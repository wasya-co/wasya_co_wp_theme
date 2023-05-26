app.controller('w2SalaryCtrl', function($scope, $filter) {
    $scope.w2sBillRate = 0;
    $scope.w2sClientDiscountPercent = 0;
    $scope.w2sClientDiscountValue = 0;
    $scope.w2sPassthruPercent = 0;
    $scope.w2sPassthruValue = 0;
    $scope.w2sNetBillRate = 0;
    $scope.w2sAnnualSalary = 0;
    $scope.w2sPayrollTaxPercent = 0;
    $scope.w2sPayrollTaxValue = 0;
    $scope.w2sGrossPayRate = 0;
    $scope.w2sMedicalMonthly = 193; //Defaulted to 193 but can be blank / overwritten
    $scope.w2sVacation = 10; // Defaulted to 10 but can be blank / overwritten
    $scope.w2sSickDays = 5; //Defaulted to 5 but can be blank / overwritten
    $scope.w2sClientHolidays = 10; //Defaulted to 10 but can be blank / overwritten
    $scope.w2sTotalBillableDays = 0;
    $scope.w2sImmigExp = 0;
    $scope.w2sRecoveryMonths = 0;
    $scope.w2sHrlyImmigExp = 0;
    $scope.w2sNetPayRate = 0;
    $scope.w2sNetProfitValue = 0;
    $scope.w2sNetProfitPercent = 0;
    $scope.w2sMarkup = 0;

    $scope.calculateW2Salary = calculateW2Salary;
    $scope.calculateW2Salary();
    $scope.$on('updateClientDiscount', function(event, data) {
        $scope.w2sClientDiscountPercent = parseFloat(data.clientDiscount);
        $scope.calculateW2Salary();
    });
    $scope.$on('updateCountry', function(event, data) {
        $scope.w2sPayrollTaxPercent = data.w2Load && parseFloat(data.w2Load) || 0;
        $scope.calculateW2Salary();
    });

    function calculateW2Salary() {

        $scope.w2sClientDiscountValue = parseFloat($scope.w2sBillRate * $scope.w2sClientDiscountPercent / 100).toFixed(2);

        $scope.w2sPassthruValue = parseFloat($scope.w2sBillRate * $scope.w2sPassthruPercent / 100).toFixed(2);

        $scope.w2sNetBillRate = $scope.w2sBillRate - $scope.w2sClientDiscountValue - $scope.w2sPassthruValue;

        $scope.w2sPayrollTaxValue = $scope.w2sAnnualSalary * $scope.w2sPayrollTaxPercent / 100;
        $scope.w2sGrossPayRate = parseFloat($scope.w2sAnnualSalary) + parseFloat($scope.w2sPayrollTaxValue);
        
        $scope.w2sTotalBillableDays = 260 - (parseFloat($scope.w2sVacation) + parseFloat($scope.w2sClientHolidays) + parseFloat($scope.w2sSickDays));
        $scope.w2sHrlyImmigExp = $scope.w2sRecoveryMonths > 0 && $scope.w2sImmigExp / ($scope.w2sRecoveryMonths * 160) || 0;

        $scope.w2sNetPayRate = ((($scope.w2sGrossPayRate / $scope.w2sTotalBillableDays) +
            (($scope.w2sMedicalMonthly * 12) / $scope.w2sTotalBillableDays)) / 8) + $scope.w2sHrlyImmigExp;

        $scope.w2sNetProfitValue = $scope.w2sNetBillRate - $scope.w2sNetPayRate;
        $scope.w2sNetProfitPercent = $scope.w2sBillRate > 0 && ($scope.w2sNetProfitValue * 100 / $scope.w2sBillRate) || 0;
        $scope.w2sMarkup = $scope.w2sAnnualSalary > 0 &&
            (($scope.w2sBillRate - $scope.w2sAnnualSalary / 1920) / ($scope.w2sAnnualSalary / 1920) * 100) || 0;

    }
});