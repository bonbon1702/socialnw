/**
 * Created by tuan on 12/30/2014.
 */
(function(angular){
    angular.module('MyApp')
        .controller('editorController', editorController);

    editorController.$inject = ['$scope'];

    function editorController($scope){
        Caman("#photoCanvas", "assets/images/test.jpg", function () {
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
                var image = this.toBase64();
                console.log(image)
            });
        }
    }
})(angular);