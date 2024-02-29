<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Schools</title>
</head>
<body>
    <div>
        <h1 style="text-align: center">Welcome to Profile!</h1>
    </div>
    <div>
        <table border="5">
            <tr>
                <td>ID</td>
                <td>Employee's Name</td>
                <td>Elementary School</td>
                <td>Middle School</td>
                <td>High School</td>
                <td>College</td>
            </tr>

            {{-- @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['elementary']}}</td>
                <td>{{$user['middle_school']}}</td>
                <td>{{$user['high_school']}}</td>
                <td>{{$user['college']}}</td>  
            </tr>
            @endforeach --}}
        </table>
    </div>
</body>
</html>