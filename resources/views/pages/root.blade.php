@extends('layouts.app')
@section('title', '首页')

@section('content')
    <h1>这里是首页</h1>
    {!! QrCode::size(100)->margin(1)->generate('http://www.baidu.com'); !!}
@stop
