@extends('layout.base')

@section('body')
<div ng-controller="captionController">
    <div style="width: 700px">
        <magiccard template-url="app/home/templates/templateTag.html" src="image" callback="callback"></magiccard>
    </div>
    <div ng-repeat="point in points track by $index">
        <h3>@{{ $index+1 }}-@{{ point.name }} - @{{ point.price }} - <a href="#" ng-click="deletepoint($index)" class="text-muted">Delete</a></h3>
    </div>
    <button id="tagButton">Click to tag</button>
</div>
@stop