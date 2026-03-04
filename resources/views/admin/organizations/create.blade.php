<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('admin.organizations.store') }}" 
      method="POST" 
      enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <textarea name="description"></textarea>

    <input type="file" name="logo">

    <button type="submit">Save</button>
</form>
</body>
</html>
