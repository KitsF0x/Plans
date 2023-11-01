@extends('layout')
@section('content')
    <form action="{{route('plan.update', $plan->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <span>Change title</span>
        <input type="text" value="{{$plan->title}}" name="title">
        <button type="submit">Edit</button>
    </form>
@endsection
