@extends('layout.base')

@section('body')
<div ng-controller="MapController">
	<input id="pac-input" class="controls" type="text" placeholder="Search Box" />
    <div id="map"></div>
</div>
@stop

