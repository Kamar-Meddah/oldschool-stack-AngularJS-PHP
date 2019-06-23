var app = angular.module('tpweb',['ngRoute','ngSanitize']);

app.config(function ($routeProvider){
    $routeProvider
        .when(`/login`,{
            templateUrl:'/auth/login/login.html',
            controller:'LoginController'
        })
        .when(`/account`,{
            templateUrl: `/auth/account/account.html`,
            controller: `AccountController`
        })
        .otherwise({
            redirectTo: '/login/'
        });
});

