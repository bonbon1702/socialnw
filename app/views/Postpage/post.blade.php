@extends('layout.base')

@section('body')
<div ng-controller="postController">
    <div style="width: 700px">
        <hovercard src="image" data="points"></hovercard>
    </div>
</div>
@stop