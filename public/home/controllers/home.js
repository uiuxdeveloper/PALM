'use strict';

angular.module('pam.home').controller('HomeController', ['$scope', 'Global', function ($scope, Global) {
	$scope.global = Global.get();
    $scope.random = Math.floor((Math.random()*1000)+1);
}]);