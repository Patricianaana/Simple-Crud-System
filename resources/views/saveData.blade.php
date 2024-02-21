<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saving Data In Database</title>
</head>
<body>
    {{-- FOR CREATE --}}
    <h1>Saving Employees Data In The Database</h1>
    <form action="users" method="POST">
        @csrf
        <div class="" style="margin-bottom: 10px">
            <input type="text" name="name" placeholder="Enter your full name"><br>
            @error('name')
                <span style="color: red">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="" style="margin-bottom: 10px">
            <input type="text" name="email" placeholder="Enter your email"><br>
            @error('email')
                <span style="color: red">
                    {{ $message }}
                </span>
            @enderror
        </div>    
        <div class="" style="margin-bottom: 10px">
            <input type="text" name="address" placeholder="Enter your address"><br>
            @error('address')
                <span style="color: red">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="" style="margin-bottom: 10px">
            <input type="text" name="contact" placeholder="Enter your contact here"><br>
            @error('contact')
                <span style="color: red">
                    {{ $message }}
                </span>
            @enderror
        </div> <button type="submit">Add Employee</button>
    </form>
</body>
</html>