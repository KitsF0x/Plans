@extends('layout')
@section('content')
    <ul>
    @foreach ($plans as $plan)
        <li>
            {{$plan->title}}
            <a href="{{route('plan.edit', $plan->id)}}"><button>Edit</button></a>
            <form action="{{route('plan.destroy', $plan->id)}}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </li>
    @endforeach
    </ul>

    <a href="{{route('plan.create')}}"><button>Create</button></a>
@endsection