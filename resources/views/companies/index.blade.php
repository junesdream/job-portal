<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unternehmensliste</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5"> 
        <h1 class="text-center">Companylist</h1>
<a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
</div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Industry</th>
                    <th>Founded</th>
                    <th>Webseite</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->location }}</td>
                    <td>{{ $company->industry }}</td>
                    <td>{{ $company->founded_at }}</td>
                    <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                     <td>
                        <a href="{{ route('companies.show', $company->id) }}" class="btn btn-primary">Details</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>