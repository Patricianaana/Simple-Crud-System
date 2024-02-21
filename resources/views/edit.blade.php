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
    <div class="" style="margin-bottom: 10px">
        <input type="text" name="name" value="{{ $data['name'] }}"><br>
        @error('name')
            <span style="color: red">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="" style="margin-bottom: 10px">
        <input type="text" name="email" value="{{ $data['email'] }}"><br>
        @error('email')
            <span style="color: red">
                {{ $message }}
            </span>
        @enderror
    </div>    
    <div class="" style="margin-bottom: 10px">
        <input type="text" name="address" value="{{ $data['address'] }}"><br>
        @error('address')
            <span style="color: red">
                {{ $message }}
            </span>
        @enderror
    </div>
    <div class="" style="margin-bottom: 10px">
        <input type="text" name="contact" value="{{ $data['contact'] }}"><br>
        @error('contact')
            <span style="color: red">
                {{ $message }}
            </span>
        @enderror
    </div>
    <button type="submit">Update</button>
</form>
</body>
</html>