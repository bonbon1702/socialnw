/**
 * Created by tuan on 11/1/2014.
 */
(function(angular) {
    angular.module('MyApp')
        .controller('homeController', homeController);

    homeController.$inject = ['$scope'];

    function homeController($scope) {
        googleMap.init();
    }
})(angular);
