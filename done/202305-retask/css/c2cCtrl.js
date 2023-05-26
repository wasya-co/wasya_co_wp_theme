app.controller('c2cCtrl', function($scope) {
    $scope.c2cBillRate = 0;
    $scope.c2cClientDiscountPercent = 0;
    $scope.c2cClientDiscountValue = 0;
    $scope.c2cPassthruPercent = 0;
    $scope.c2cPassthruValue = 0;
    $scope.c2cNetBillRate = 0;
    $scope.c2cPayRate = 0;
    $scope.c2cAdministrationCost = 0;
    $scope.c2cNetPayRate = 0;
    $scope.c2cOtherCost = 0;
    $scope.c2cNetProfitPercent = 0;
    $scope.c2cNetProfitValue = 0;
    $scope.c2cMarkup = 0;

    $scope.calculateC2C = calculateC2C;

    $scope.$on('updateClientDiscount', function(event, data) {
        $scope.c2cClientDiscountPercent = parseFloat(data.clientDiscount);
        $scope.calculateC2C();
    });
    $scope.$on('updateCountry', function(event, data) {
        $scope.c2cAdministrationCost = data.c2cLoad && parseFloat(data.c2cLoad) || 0;
        $scope.calculateC2C();
    });

    function calculateC2C() {

        $scope.c2cClientDiscountValue = parseFloat($scope.c2cBillRate * $scope.c2cClientDiscountPercent / 100);

        $scope.c2cPassthruValue = parseFloat($scope.c2cBillRate * $scope.c2cPassthruPercent / 100);

        $scope.c2cNetBillRate = $scope.c2cBillRate - $scope.c2cClientDiscountValue - $scope.c2cPassthruValue;

        $scope.c2cNetPayRate = parseFloat($scope.c2cPayRate) + (parseFloat($scope.c2cPayRate) * $scope.c2cAdministrationCost / 100);

        $scope.c2cNetProfitValue = parseFloat($scope.c2cNetBillRate) - $scope.c2cNetPayRate - parseFloat($scope.c2cOtherCost);

        $scope.c2cNetProfitPercent = $scope.c2cBillRate > 0 && parseFloat($scope.c2cNetProfitValue * 100 / $scope.c2cBillRate) || '0';

        $scope.c2cMarkup = $scope.c2cPayRate > 0 && parseFloat(($scope.c2cBillRate - $scope.c2cPayRate) / ($scope.c2cPayRate / 100)) || '0';

    }
});