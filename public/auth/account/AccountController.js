app.controller('AccountController', ['$scope', '$http', '$location', 'authService','$rootScope', function ($scope, $http, $location, authService,$rootScope) {

    if(authService.isLogged() === 'false'){
        $location.path('/');
    }
    $scope.logout = function () {
        authService.logout();
    }

}]);