@extends('layout.base')

@section('body')
    <div id='content' ng-app='MyApp' ng-controller='MainController'>
        @{{understand}}
        @if ($user)
            <p>{{ $user->first_name }}</p>
        @else
            <p>Sir Nobody</p>
        @endif
    </div>
@stop