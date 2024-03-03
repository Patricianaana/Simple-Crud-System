<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employees Schools</title>
</head>
<body>
    <div>
        <h1 style="text-align: center">Employee school list</h1>
    </div>
  
        <table border="5">
            <tr style="align-contents: center">
                {{-- <td style="font-weight: bold">ID</td> --}}
                {{-- <td>Employee ID</td> --}}
                <td style="font-weight: bold">Elementary School</td>
                <td style="font-weight: bold">Middle School</td>
                <td style="font-weight: bold">High School</td>
                <td style="font-weight: bold">College</td>
            </tr>

            @foreach ($data as $worker)
                <tr>
                    {{-- <td>{{ $worker['id'] }}</td> --}}
                    <td>{{ $worker['elementary'] }}</td>
                    <td>{{ $worker['middle_school'] }}</td>
                    <td>{{ $worker['high_school'] }}</td>
                    <td>{{ $worker['college'] }}</td>
                </tr>         
            @endforeach
        </table>
    </div>

    <div>
        <h5>Navigate back to employees page</h5>
        <a href="/">Back</a>
    </div>
</body>
</html>