var UserInfoModule = angular.module('UserInfoModule', ['ngMessages']);
UserInfoModule.controller('userInfoController', function($scope) {
    $scope.userInfo = {
        // username: 'Gao',
        // email: "961853825@qq.com",
        // password: 'gjalgjaelhgoirgh',
        // autoLogin: true
    };
    $scope.getFormData = function() {
        console.log($scope.userInfo);
    };
    $scope.setFormData = function() {
        $scope.userInfo = {
            username: 'LuLu',
            email: "hudgag@qq.com",
            password: '325235',
            autoLogin: false
        };
    };
    $scope.restFormData = function() {
        $scope.userInfo = {
            username: 'Gao',
            email: "961853825@qq.com",
            password: 'gjalgjaelhgoirgh',
            autoLogin: true
        };
    };
});

UserInfoModule.controller('registerController', function($scope) {
    $scope.userInfo = {
        username: 'Gao',
        email: "961853825@qq.com",
        password: 'gjalgjaelhgoirgh',
        autoLogin: true
    };
});