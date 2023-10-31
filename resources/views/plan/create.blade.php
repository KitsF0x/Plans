@extends('layout')
@section('content')
    <form action="{{route('plan.store')}}" method="POST">
        @csrf
        @method('POST')
        <span>Plan title</span>
        <input type="text" name="title">
        <button type="submit">Create</button>
    </form>
@endsection