<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simple Crud System</title>
</head>
<body>
    <h1 style="margin-left: 35%">SIMPLE CRUD SYSTEM</h1>

    <div>
        <h5>Click on the add link to add an employee</h5>
        <a href="users">Add</a>
    </div>

    {{-- Read of CRUD --}}
    <div>
        <h1>Employee List</h1>

        <div>
            <table border="4">
                <tr>
                    <td>Id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Contact</td>
                    {{-- add operation column for update and delete properties --}}
                    <td>Operation</td>
                </tr>

                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['address'] }}</td>
                    <td>{{ $user['contact'] }}</td>
                    <td><a href="{{ 'edit/'. $user['id'] }}">Edit</a></td>
                    <td><a href="{{ 'delete/'. $user['id'] }}">Delete</a></td>
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</body>
</html>