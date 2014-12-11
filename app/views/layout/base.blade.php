<!DOCTYPE html>
<html ng-app='MyApp'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

    <title>Home Page</title>
    <!-- Bootstrap -->
    <link href="css/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/libs/ngDialog.min.css" rel="stylesheet">
    <link href="css/libs/ngDialog-theme-plain.min.css" rel="stylesheet">
</head>
<body ng-controller='mainController'>
    {{--Header--}}
    @include('layout.header')

    {{--Body--}}
    @yield('body')

    {{--footer--}}
    @include('layout.footer')

    <!-- load libs -->
    <script src="js/libs/jquery-1.10.2.js"></script>
   	<script src="js/libs/angular.js"></script>
    <script src="js/libs/angular-ui-router.min.js"></script>
    <script src="js/libs/angular-mocks.js"></script>
    <script src="css/dist/js/bootstrap.min.js"></script>
    <script src="js/libs/ngDialog.min.js"></script>

    <!-- load angularjs file -->
    <script src="js/app.js"></script> <!-- load our application -->
    <script src="js/controller/maincontroller.js"></script> <!-- load our controller -->
    <script src="js/service/myService.js"></script> <!-- load our service -->
</body>
</html>