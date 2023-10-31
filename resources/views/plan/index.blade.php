<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
</body>
</html>