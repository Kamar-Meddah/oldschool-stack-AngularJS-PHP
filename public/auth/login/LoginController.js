app.controller('LoginController', ['$scope','authService',function($scope,authService){
    if(authService.isLogged() === 'true'){
        $location.path('#!/account');
    }

    $scope.username='';
    $scope.password='';

    $scope.login=function(){
        authService.login($scope.username,$scope.password);
    }
}]);