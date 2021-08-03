@extends('layouts.app')



@section('content')

    @foreach($conver as $conv)
    <h1><a href="/conversation/{{$conv->id}}">{{$conv->title}}</a> </h1>

    @endforeach



    @stop
