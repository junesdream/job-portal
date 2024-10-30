<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: #ddd;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .table {
            background-color: #444;
            color: #ddd;
        }
        .table th, .table td {
            border-color: #555;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">{{ $category->name }}</h1>
        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <th>Name</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ $category->description }}</td>
                </tr>
                <tr>
                    <th>Created at</th>
                    <td>{{ $category->created_at->format('d.m.Y') }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mt-3">
            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>