@extends('layout.base')

@section('body')
<div ng-controller="captionController">
    <div class="container">
        <div class="process">
            <div class="process-row">
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle-post" disabled="disabled"><i class="fa fa-user fa-3x"></i></button>
                    <p>Editor picture</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-success btn-circle-post" disabled="disabled"><i class="fa fa-comments-o fa-3x"></i></button>
                    <p>Caption</p>
                </div>
            </div>
        </div>
        <div style="width: 500px">
            <magiccard template-url="../app/home/templates/templateTag.html" src="{{ asset($upload->image_url_editor) }}" callback="callback" data="shop" update="update"></magiccard>
        </div>
        <input ng-model="caption" type="text"/>
        <div ng-repeat="point in points track by $index">
            <h3>@{{ $index+1 }}-@{{ point.name }} - @{{ point.price }} - @{{ point.address }} - <a href="#" ng-click="deletepoint($index)" class="text-muted">Delete</a></h3>
        </div>
        <button id="tagButton">Click to tag</button>
        <button ng-click="submit('{{ $upload->id }}')">Submit</button>
    </div>
</div>
@stop