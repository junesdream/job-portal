<!DOCTYPE html>
<html>
<head>
    <title>Category Listings</title>
</head>
<body>
    <h1>Category Listings</h1>

    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->name }} - {{ $category->description }}</li>
        @endforeach
    </ul>
</body>
</html>
