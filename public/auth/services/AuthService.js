app.factory('authService', function ($http, $location) {
    authService = {
        logout: function () {
            return $http.post('/backend/logout.php').then(function (response) {
                $location.path('/login');
            })
        },

        login: function (username, password) {
            return $http.post('/backend/login.php', {username: username, password: password}).then(function (response) {
                if(response === 'true'){
                    $location.path('#!/account');
                }else{
                    alert('wrong password')
                }
            })
        },

        isLogged: function () {
            return $http.post('/backend/logged.php').then(function (response) {
                return response;
            })
        }

    };
    return authService;
});