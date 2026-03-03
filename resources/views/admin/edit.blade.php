<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Student Page</h1>
    <form action="/student/{{ $student->id }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Full Name</label>
        <input type="text" name="full_name" placeholder="masukkan nama" value="{{ $student->full_name }}"> <br>
        <label for="">Birth Date</label>
        <input type="text" name="birth_date" placeholder="masukkan tanggal lahir" value="{{ $student->birth_date }}"> <br>
        <label for="">Gender</label>
        <input type="text" name="gender" placeholder="gender kamu" value="{{ $student->gender }}"> <br>
        <label for="">Address</label>
        <input type="text" name="address" placeholder="masukkan alamat" value="{{ $student->address }}"> <br>
        <label for="">Phone</label>
        <input type="text" name="phone" placeholder="masukkan nomor telpon" value="{{ $student->phone }}"> <br>
        <label for="">Email</label>
        <input type="text" name="email" placeholder="masukkan email" value="{{ $student->email }}"> <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>