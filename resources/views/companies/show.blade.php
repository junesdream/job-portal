<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company->name }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $company->name }}</h1>

        <p>{{ $company->description }}</p>

        <table class="table table-bordered table-hover">
            <tbody>
                <tr>
                    <th>Location</th>
                    <td>{{ $company->location }}</td>
                </tr>
                <tr>
                    <th>Industry</th>
                    <td>{{ $company->industry }}</td>
                </tr>
                <tr>
                    <th>Founded</th>
                    <td>{{ $company->founded_at }}</td>
                </tr>
                <tr>
                    <th>Website</th>
                    <td><a href="{{ $company->website }}">{{ $company->website }}</a></td>
                </tr>
            </tbody>
        </table>

        <div class="mt-3">
            <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('companies.destroy', $company->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>