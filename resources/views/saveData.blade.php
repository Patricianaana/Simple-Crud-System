<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saving Data In Database</title>
</head>
<body>
    <h1>Saving Employees Data In The Database</h1>
    <form action="users" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Enter full name here">
        <br>
        <span style="color: red">@error('name'){{ $message }}@enderror</span>
        {{-- the span tag is to validate the user's input --}}
        <br>
        <input type="text" name="email" placeholder="Enter email here">
        <br>
        <span style="color: red">@error ('email'){{ $message }}@enderror</span>
        <br>
        <input type="text" name="address" placeholder="Enter address here">
        <br>
        <span style="color: red">@error('address'){{ $message }}@enderror</span>
        <br>
        <input type="text" name="contact" placeholder="Enter contact here">
        <br>
        <span style="color: red">@error('contact'){{ $message }}@enderror</span>
        <br>
        <button type="submit">Add Employee</button>
    </form>
</body>
</html>