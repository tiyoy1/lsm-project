<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/webp" href="{{ asset('img/logo.webp') }}?v=20260305">
</head>
<body>
    <h1>Student Page</h1>
    <form action="/register_student" method="POST">
        @csrf
        <label for="">Full Name</label>
        <input type="text" name="full_name" plac    eholder="masukkan nama"> <br>
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
</body>
</html>
