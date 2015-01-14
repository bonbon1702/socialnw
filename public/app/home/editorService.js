/**
 * Created by tuan on 12/30/2014.
 */
(function(angular){
    angular.module('MyApp')
        .factory('editorService', editorService);

    editorService.$inject = ['$http'];
    function editorService($http){
        return {
            save : function(data) {
                return $http({
                    method: 'POST',
                    url: 'api/upload',
                    //headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: data
                });
            }
        }
    }
})(angular);
