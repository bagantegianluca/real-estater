@extends('layouts.app')

@section('content')

<h1>{{$property->code}}</h1>
<div>
    <p>{{$property->description}}</p>
    <img src="{{$property->img}}" alt="{{$property->img}}">
</div>
<a class="btn btn-primary" href="{{route('properties.index')}}">Back to list</a>

@endsection