@extends('layout')
@section('content')
    <span>Title </span>{{$plan->title}}
    <a href="{{route('plan.index')}}"><button class="btn btn-primary">List of plans</button></a>
@endsection