<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Student Page</h1>
    <form action="/student" method="POST">
        @csrf
        <label for="">Full Name</label>
        <input type="text" name="full_name" placeholder="masukkan nama"> <br>
        <label for="">Birth Date</label>
        <input type="text" name="birth_date" placeholder="masukkan tanggal lahir"> <br>
        <label for="">Gender</label>
        <input type="text" name="gender" placeholder="gender kamu"> <br>
        <label for="">Address</label>
        <input type="text" name="address" placeholder="masukkan alamat"> <br>
        <label for="">Phone</label>
        <input type="text" name="phone" placeholder="masukkan nomor telpon"> <br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="masukkan email"> <br>
        <button type="submit">Simpan</button>
    </form>

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
                <a href="/student/{{ $student->id }}/edit">Edit</a>
                <form action="/student/{{ $student->id }}" method="POST">
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