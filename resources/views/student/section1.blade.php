@extends('layouts')
{{--@extends('../layouts')--}}

@section('header')
    header
@stop

@section('sidebar')
    @parent <!--继承父模板中的内容-->
    new sidebar
@stop

@section('content')
    @parent <!--继承父模板中的内容-->
    new content
@stop
