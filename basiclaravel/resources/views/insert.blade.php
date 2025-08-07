<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing laravel</title>
</head>
<body>
    <form action="{{ route('try') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name"><br>
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="text" name="age" placeholder="Enter Age"><br>
        <input type="text" name="contact_no" placeholder="Enter Contact number"><br>
        <input type="submit" value="Submit">
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Contact No</th>
            </tr>
        </thead>
        <tbody>
            @php
                $students = \App\Models\Students::all();
            @endphp
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->age }}</td>
                    <td>{{ $student->contact_no }}</td>
                </tr>
            @endforeach
    </table>
</body>
</html>