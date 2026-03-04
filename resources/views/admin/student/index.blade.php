<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->full_name }}</td>
            <td>{{ $student->birth_date }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->email }}</td>
            <td>
                <a href="/admin/student/{{ $student->id }}/edit">Edit</a>
                <form action="/admin/student/{{ $student->id }}" method="POST">
                    @csrf 
                    @method('DELETE')
                    <button type="submit">Delete</button> 
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>