<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Empoyee Data</title>
</head>
<body>
    <h1>Update Employee List</h1>

<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $data['id'] }}">
    <input type="text" name="name" value="{{ $data['name'] }}"><br>
    <span style="color: red">@error('name'){{ $message }}@enderror</span><br>
    <input type="text" name="email" value="{{ $data['email'] }}"><br>
    <span style="color: red">@error('name'){{ $message }}@enderror</span><br>
    <input type="text" name="address" value="{{ $data['address'] }}"><br>
    <span style="color: red">@error('name'){{ $message }}@enderror</span><br>
    <input type="text" name="contact" value="{{ $data['contact'] }}"><br>
    <span style="color: red">@error('name'){{ $message }}@enderror</span><br>
    <button type="submit">Update</button>
</form>
</body>
</html>