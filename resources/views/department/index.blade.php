<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    @foreach ($all as $d)
        <h3>Department Name: {{ $d->name}} </h3>
        <p>Department Details: {{$d->description}}</p>
        <p>Phone: {{$d->phone}}</p>
        <p><a href="{{ route("departments.show",$d->id) }}">Link</a></p>
        <hr>
    @endforeach
    <hr>
    {{ $all->links() }}
</body>
</html>