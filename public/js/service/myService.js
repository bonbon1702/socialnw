/**
 * Created by tuan on 11/6/2014.
 */
(function(angular) {
    angular.module('MyApp')

    .factory('googleMap', googleMap);

    function googleMap() {
        return {
            createMarker: createMarker
        }
    }

    function createMarker(map, icon, position) {
        icon = icon || null;
        var marker = new google.maps.Marker({
            position: position,
            icon: icon,
            map: map
        });
        return marker;
    }
})(angular);
