@extends('layout.base')

@section('body')
    <div class="container" ng-controller="editorController">
        <div class="process">
            <div class="process-row">
                <div class="process-step">
                    <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i
                                class="fa fa-user fa-3x"></i></button>
                    <p>Editor picture</p>
                </div>
                <div class="process-step">
                    <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i
                                class="fa fa-comments-o fa-3x"></i></button>
                    <p>Caption</p>
                </div>
            </div>
        </div>
        <div id="photo">
            <canvas id="photoCanvas" width="500" height="500"></canvas>
        </div>
        <div>
            <button ng-click="editor('vintage')">Vintage</button>
            <button ng-click="editor('lomo')">Lomo</button>
            <button ng-click="editor('clarity')">Clarity</button>
            <button ng-click="editor('sinCity')">Sin city</button>
            <button ng-click="editor('sinCity')">Sin city</button>
            <button ng-click="editor('sunrise')">Sunrise</button>
            <button ng-click="editor('crossProcess')">Cross Process</button>
            <button ng-click="editor('orangePeel')">Orange Peel</button>
            <button ng-click="editor('love')">Love</button>
            <button ng-click="submit()">Submit</button>
        </div>
    </div>

@stop