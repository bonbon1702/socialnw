/**
 * Created by tuan on 12/30/2014.
 */
(function(angular){
    angular.module('MyApp')
        .controller('editorController', editorController);

    editorController.$inject = ['$scope','editorService','$window'];

    function editorController($scope, editorService, $location){
        Caman("#photoCanvas", function () {
            this.render();
        });

        $scope.editor = function(method){
            Caman("#photoCanvas", function(){
                this.revert(false);
                this[method]();
                this.render();
            });
        };

        $scope.submit = function() {
            Caman("#photoCanvas", function () {
                var photo = angular.element(this.image);
                var image = this.toBase64();
                var data = {
                    img: image,
                    name: photo.attr('name')
                }
                editorService.save(data)
                    .success(function(data) {
                        document.location.href = photo.data('href');
                    })
                    .error(function(data) {
                        console.log(data);
                    });
            });
        }
    }
})(angular);