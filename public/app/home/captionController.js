/**
 * Created by tuan on 12/30/2014.
 */
(function (angular) {
    angular.module('MyApp')
        .controller('captionController', captionController);

    captionController.$inject = ['$scope'];

    function captionController($scope) {
        $scope.image = 'http://dwaynepreed.files.wordpress.com/2014/10/beautiful-girl-3.jpg';
        $scope.points = [];
        $scope.callback = function (point) {
            var number = $scope.points.length + 1;
            var po = {
                no: number,
                top: point.top,
                left: point.left,
                name: point.info.name,
                price: point.info.price
            }
            $scope.points.push(po);
            var point = angular.element(
                '<div class="magiccard" id="' + number + '">' +
                '<div class="item-tag-1">' +
                '<span class="item-tag-label">' + number + '</span>' +
                '</div></div>');
            var position = {
                top: po.top,
                left: po.left
            }
            angular.element(document).find('.has-magiccard').append(point.css(position));

        }
        $scope.deletepoint = function (no) {
            $scope.points.splice(no, 1);
            var number = no + 1;
            angular.element(document).find('.magiccard').each(function () {
                var id = $(this).attr('id');
                if (id > number) {
                    $(this).find('.item-tag-label').text($(this).find('.item-tag-label').text() - 1);
                    $(this).attr('id', id - 1);
                }
            });

            angular.element(document).find('.magiccard#' + number).remove();

        }
        $scope.movies = [
            {
                'name' : "Lord of the Rings",
                'address' : '32 Lac trung',
                'link': 'facebook'
            },
            {
                'name' : "Drive",
                'address' : '25 drive'
            },
            {
                'name' : "Science of Sleep",
                'address' : '64 Science'
            },
            {
                'name' : "Back to the Future",
                'address' : '15 back'
            },
            {
                'name' : "Oldboy",
                'address' : '11 Oldboy'
            }];
    }
})(angular);
