/**
 * Created by tuan on 11/1/2014.
 */
(function (angular) {
    angular.module('mainCtrl', [])
        .controller('mainController', function ($scope, $http) {


        })
        .controller('MapController', function ($scope) {

            /**
                --------- Initiation Google Map
            */
            var mapOptions = {
                zoom: 14,
                center: new google.maps.LatLng(21.0249399, 105.8457613),
            }

            var markers = [];

            $scope.map = new google.maps.Map(document.getElementById('map'), mapOptions);

            /**
            ----------------end----------------------
            */

            /**
            -------------- Create button find user location-------------
            */

            var homeControlDiv = document.createElement('div');
            var homeControl = new HomeControl(homeControlDiv, $scope.map);

            homeControlDiv.index = 1;
            $scope.map.controls[google.maps.ControlPosition.BOTTOM_LEFT].push(homeControlDiv);


            $scope.getLocation = function () {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
            }

            function showPosition(position) {
                var lat = position.coords.latitude;
                var lng = position.coords.longitude;
                var myLatlng = new google.maps.LatLng(lat, lng);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    title: 'Hello World!'
                });
                var mapOptions = {
                    zoom: 14,
                    center: myLatlng
                }
                $scope.map.panTo(myLatlng);
                marker.setMap($scope.map);
            }

            function HomeControl(controlDiv, map) {

                // Set CSS styles for the DIV containing the control
                // Setting padding to 5 px will offset the control
                // from the edge of the map
                controlDiv.style.padding = '20px';

                // Set CSS for the control border
                var controlUI = document.createElement('div');
                controlUI.style.backgroundColor = 'white';
                controlUI.style.borderStyle = 'solid';
                controlUI.style.borderWidth = '2px';
                controlUI.style.cursor = 'pointer';
                controlUI.style.textAlign = 'center';
                controlUI.title = 'Click to set the map to Home';
                controlDiv.appendChild(controlUI);

                // Set CSS for the control interior
                var controlText = document.createElement('div');
                controlText.style.fontFamily = 'Arial,sans-serif';
                controlText.style.fontSize = '12px';
                controlText.style.paddingLeft = '20px';
                controlText.style.paddingRight = '20px';
                controlText.innerHTML = '<b>Home</b>';
                controlUI.appendChild(controlText);

                // Setup the click event listeners: simply set the map to
                google.maps.event.addDomListener(controlUI, 'click', function() {
                    $scope.getLocation();
                });
            }

            /**
            ---------------end-------------------
            */


            /**
                create search box Google Map
            */
            
            // Create the search box and link it to the UI element.
            var input = /** @type {HTMLInputElement} */(
                document.getElementById('pac-input'));
            $scope.map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            var searchBox = new google.maps.places.SearchBox(
                /** @type {HTMLInputElement} */(input));

            // Listen for the event fired when the user selects an item from the
            // pick list. Retrieve the matching places for that item.
            google.maps.event.addListener(searchBox, 'places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                for (var i = 0, marker; marker = markers[i]; i++) {
                    marker.setMap(null);
                }

                // For each place, get the icon, place name, and location.
                markers = [];
                var bounds = new google.maps.LatLngBounds();
                for (var i = 0, place; place = places[i]; i++) {
                    var image = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    var marker = new google.maps.Marker({
                        map: $scope.map,
                        icon: image,
                        title: place.name,
                        position: place.geometry.location
                    });

                    markers.push(marker);

                    bounds.extend(place.geometry.location);
                }

                $scope.map.fitBounds(bounds);
                $scope.map.setZoom(18);
            });

            // Bias the SearchBox results towards places that are within the bounds of the
            // current map's viewport.
            google.maps.event.addListener(map, 'bounds_changed', function() {
                var bounds = $scope.map.getBounds();
                searchBox.setBounds(bounds);
            });

            /**
            ------end----------
            */

        });

})(angular);