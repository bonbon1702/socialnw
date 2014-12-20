/**
 * Created by tuan on 11/1/2014.
 */
(function(angular) {
    angular.module('MyApp')
        .controller('homeController', homeController);

    homeController.$inject = ['$scope'];

    function homeController($scope) {
        //googleMap.init();
        //$scope.movies = [
        //    {
        //        'name' : "Lord of the Rings",
        //        'address' : '32 Lac trung',
        //        'link': 'facebook'
        //    },
        //    {
        //        'name' : "Drive",
        //        'address' : '25 drive'
        //    },
        //    {
        //        'name' : "Science of Sleep",
        //        'address' : '64 Science'
        //    },
        //    {
        //        'name' : "Back to the Future",
        //        'address' : '15 back'
        //    },
        //    {
        //        'name' : "Oldboy",
        //        'address' : '11 Oldboy'
        //    }];
        //$scope.updateMovies = function(text){
        //    console.log(text);
        //}
        //
        //$scope.templateBox ='app/home/templates/templateBox.html';
        //$scope.image = 'http://dwaynepreed.files.wordpress.com/2014/10/beautiful-girl-3.jpg';
        //$scope.points = [
        //    {
        //        name: 'ao thoi trang',
        //        top: "241",
        //        left: "358"
        //    },
        //    {
        //        name: 'quan thoi trang',
        //        top: "181",
        //        left: "312"
        //    }
        //];
        //$scope.callback = function(point){
        //    var point = {
        //        name: point[2],
        //        top: point[0],
        //        left: point[1]
        //    };
        //    $scope.points.push(point);
        //    $scope.$apply();
        //    console.log(point);
        //}

    }
})(angular);
