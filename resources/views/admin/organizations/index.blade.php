<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Organizations</h1>

<a href="{{ route('organizations.create') }}">Add Organization</a>

@foreach($organizations as $org)
    <div>
        <h3>{{ $org->name }}</h3>
        <p>{{ $org->description }}</p>

        <a href="{{ route('organizations.edit', $org->id) }}">Edit</a>

        <form action="{{ route('organizations.destroy', $org->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
</body>
</html>