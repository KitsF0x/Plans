<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <span>Title </span>{{$plan->title}}
    <a href="{{route('plan.index')}}"><button>List of plans</button></a>
</body>
</html>