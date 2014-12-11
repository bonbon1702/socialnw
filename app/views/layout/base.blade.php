<!DOCTYPE html>
<html ng-app='MyApp'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

    <title>Home Page</title>
    <!-- Bootstrap -->
    <link href="assets/css/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/css.css" rel="stylesheet">
    <link href="assets/css/libs/ngDialog.min.css" rel="stylesheet">
    <link href="assets/css/libs/ngDialog-theme-plain.min.css" rel="stylesheet">
</head>
<body>
    {{--Header--}}
    @include('layout.header')

    {{--Body--}}
    @yield('body')

    {{--footer--}}
    @include('layout.footer')

    <!-- load libs -->
    <script src="assets/js/libs/jquery-1.10.2.js"></script>
   	<script src="assets/js/libs/angular.js"></script>
    <script src="assets/js/libs/angular-ui-router.min.js"></script>
    <script src="assets/js/libs/angular-mocks.js"></script>
    <script src="assets/css/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/libs/ngDialog.min.js"></script>
    <script src="assets/js/googleMap.js"></script>

    <!-- load angularjs file -->
    <script src="app/app.js"></script> <!-- load our application -->
    <script src="app/home/homeController.js"></script>
    <script src="app/home/homeService.js"></script>
</body>
</html>