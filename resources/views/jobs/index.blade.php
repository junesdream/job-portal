<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
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
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="text-center">Job Listings</h1>
            <a href="{{ route('jobs.create') }}" class="btn btn-success">Create Job</a>
        </div>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Salary</th>
                    <th>Location</th>
                    <th>Company</th>
                    <th>Category</th>
                    <th>Posted at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->title }}</td>
                        <td>{{ $job->description }}</td>
                        <td>{{ $job->salary }}</td>
                        <td>{{ $job->location }}</td>
                        <td>{{ $job->company->name }}</td>
                        <td>{{ $job->category->name }}</td>
                        <td>{{ \Carbon\Carbon::parse($job->posted_at)->format('d.m.Y') }}</td>
                        <td>
                            <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary btn-sm">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>