@extends('layout')
@section('content')
    <body>
        <span>Title </span>{{$plan->title}}
        <a href="{{route('plan.index')}}"><button>List of plans</button></a>
    </body>
@endsection