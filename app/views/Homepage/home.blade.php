@extends('layout.base')

@section('body')
<div ng-controller="homeController">
	<input id="pac-input" class="controls" type="text" placeholder="Search Box" />
    <div id="map"></div>
</div>
@stop

