<!DOCTYPE html>
<html ng-app="MyApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>

    <title>Home Page</title>
    <!-- Bootstrap -->
    {{ HTML::style('assets/css/dist/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/dist/css/font-awesome.min.css') }}
    {{ HTML::style('assets/css/dist/css/glyphicons_filetypes.css') }}
    {{ HTML::style('assets/css/dist/css/glyphicons_regular.css') }}
    {{ HTML::style('assets/css/dist/css/glyphicons_social.css') }}
    {{ HTML::style('assets/css/dist/css/picto.css') }}
    {{ HTML::style('assets/css/css.css') }}
    {{ HTML::style('assets/css/libs/ngDialog.min.css') }}
    {{ HTML::style('assets/css/libs/ngDialog-theme-plain.min.css') }}
    {{ HTML::style('assets/css/autocomplete.css') }}
    {{ HTML::style('assets/css/magiccard.css') }}
    {{ HTML::style('assets/css/libs/animations.css') }}
    {{ HTML::style('assets/css/libs/jquery-ui.min.css') }}
    {{ HTML::style('assets/css/libs/loading-bar.min.css') }}
    {{ HTML::style('assets/css/libs/animate.min.css') }}
    {{ HTML::style('assets/css/libs/jquery.easy-pie-chart.css') }}
    {{ HTML::style('assets/css/libs/bootstrap-select.css') }}
    {{ HTML::style('assets/css/libs/bootstrap-switch.css') }}
    {{ HTML::style('assets/css/libs/fileupload.css') }}
    {{ HTML::style('assets/css/libs/multi-select.css') }}
    {{ HTML::style('assets/css/libs/dropzone.css') }}
    {{ HTML::style('assets/css/libs/jquery.plupload.queue.css') }}
    {{ HTML::style('assets/css/libs/blueimp-gallery.min.css') }}
    {{ HTML::style('assets/css/libs/jquery.gritter.css') }}
    {{ HTML::style('assets/css/libs/jquery.notyfy.css') }}
    {{ HTML::style('assets/css/libs/notyfy.theme.default.css') }}
</head>
<body>

    {{--Header--}}
    @include('layout.header')

    {{--Body--}}
    @yield('body')

    {{--footer--}}
    @include('layout.footer')

    <!-- load libs -->
    {{ HTML::script('assets/js/libs/jquery.js') }}
    {{ HTML::script('assets/js/libs/jquery-ui.min.js') }}
   	{{ HTML::script('assets/js/libs/angular.js') }}
    {{ HTML::script('assets/css/dist/js/bootstrap.min.js') }}
    {{ HTML::script('assets/js/libs/ngDialog.min.js') }}
    {{ HTML::script('assets/js/googleMap.js') }}
    {{ HTML::script('assets/js/core.init.js') }}
    {{ HTML::script('assets/js/magicSearch.js') }}
    {{ HTML::script('assets/js/magiccard_ver2.js') }}
    {{ HTML::script('assets/js/libs/accounting.min.js') }}
    {{ HTML::script('assets/js/js.js') }}
    {{ HTML::script('assets/js/autocomplete.js') }}
    {{ HTML::script('assets/js/lazyloading_v2.js') }}
    {{ HTML::script('assets/js/libs/loading-bar.min.js') }}
    {{ HTML::script('assets/js/libs/jquery.easypiechart.min.js') }}
    {{ HTML::script('assets/js/libs/bootstrap-select.js') }}
    {{ HTML::script('assets/js/libs/bootstrap-switch.js') }}
    {{ HTML::script('assets/js/libs/bootstrap-fileupload.js') }}
    {{ HTML::script('assets/js/libs/jquery.multi-select.js') }}
    {{ HTML::script('assets/js/libs/dropzone.min.js') }}
    {{ HTML::script('assets/js/libs/jquery.plupload.queue.js') }}
    {{ HTML::script('assets/js/libs/blueimp-gallery.min.js') }}
    {{ HTML::script('assets/js/libs/blueimp-gallery-fullscreen.js') }}
    {{ HTML::script('assets/js/libs/blueimp-gallery-indicator.js') }}
    {{ HTML::script('assets/js/libs/blueimp-gallery-video.js') }}
    {{ HTML::script('assets/js/libs/blueimp-helper.js') }}
    {{ HTML::script('assets/js/libs/jquery.blueimp-gallery.min.js') }}
    {{ HTML::script('assets/js/libs/jquery.gritter.min.js') }}
    {{ HTML::script('assets/js/libs/jquery.notyfy.js') }}


    <!-- load angularjs file -->
    {{ HTML::script('app/app.js') }} <!-- load our application -->

    {{--home--}}
    {{ HTML::script('app/home/homeController.js') }}
    {{ HTML::script('app/home/homeService.js') }}

    {{--user--}}
    {{ HTML::script('app/user/userController.js') }}
    {{ HTML::script('app/user/userService.js') }}

    {{--shop--}}
    {{ HTML::script('app/shop/shopController.js') }}
    {{ HTML::script('app/shop/shopService.js') }}

    {{--caption--}}
    {{ HTML::script('app/home/captionController.js') }}
    {{ HTML::script('app/home/captionService.js') }}

    {{--editor--}}
    {{ HTML::script('app/home/editorController.js') }}
    {{ HTML::script('app/home/editorService.js') }}

    {{--post--}}
    {{ HTML::script('app/post/postController.js') }}
    {{ HTML::script('app/post/postService.js') }}
</body>
</html>
