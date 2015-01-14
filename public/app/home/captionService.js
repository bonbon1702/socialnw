/**
 * Created by tuan on 12/30/2014.
 */
(function(angular){
    angular.module('MyApp')
        .factory('captionService', captionService);

    captionService.$inject = ['$http'];
    function captionService($http){
        return {
            save : function(data) {
                return $http({
                    method: 'POST',
                    url: 'api/post',
                    //headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: data
                });
            }
        }
    }
})(angular);
