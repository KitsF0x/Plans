@extends('layout')
@section('content')
    <form action="{{route('plan.store')}}" method="POST">
    @csrf
    @method('POST')
    <div class="d-flex justify-content-center ">
        <div class="col-6">
            <div class="text-center">
                <h2>Change plan</h2>
            </div>
            <div class="row align-items-start">
                <div class="col-sm-2">
                    <p class="text-md-start">Task title</p>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="title" value="{{$plan->title}}">
                </div>
                <div class="col-1">
                    <button type="submit" class="btn btn-primary col">Update</button>
                </div>
            </div>
        </div>
    </div>
@endsection