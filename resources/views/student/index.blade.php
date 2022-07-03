<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Present Address</th>
            <th>Remarks</th>
            <th>Create Time</th>
            <th>Action</th>
        </tr>
    
    @foreach ($allstudent as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->paddress }}</td>
            <td>{{ $student->remarks }}</td>
            <td>{{ $student->created_at }}</td>
            <td> EDIT | DELETE</td>
        </tr>
    @endforeach
</table>
</body>
</html>