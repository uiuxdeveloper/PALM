'use strict';

//Global service for global variables
angular.module('wasabiblade.system')
.factory('Global', ['$resource', function($resource) {
    return $resource('/login/authenticated');
}])