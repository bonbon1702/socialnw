/**
 * Created by tuan on 11/6/2014.
 */
angular.module('myService', [])

    .factory('googleMap', function($http) {
        return {
            get : function() {
                return $http.get('home');
            },
            save : function(dataPosition) {
                return $http({
                    method: 'POST',
                    url: 'home',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(dataPosition)
                });
            }
        }
    });