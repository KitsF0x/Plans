@extends('layout')
@section('content')
    @if(count($plans) == 0) 
        <p class=text-lg>No plans found ;(</p>
    @else
        <table class="table">
        <thead>
            <tr>
            <th scope="col" class="col-4">Plan title</th>
            <th scope="col" class="col-1">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>
                            <p>{{$plan->title}}</p>
                        </td>
                        <td>
                            <a href="{{route('plan.show', $plan->id)}}"><button class="btn btn-success">Show</button></a>
                            <a href="{{route('plan.edit', $plan->id)}}"><button class="btn btn-warning">Edit</button></a>
                            <form action="{{route('plan.destroy', $plan->id)}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        <a href="{{route('plan.create')}}"><button class="btn btn-primary">Create</button></a>
@endsection
