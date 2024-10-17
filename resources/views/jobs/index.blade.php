<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: #ddd;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        .card {
            background-color: #444;
            border: none;
            color: #ddd;
            margin-bottom: 20px;
        }
        .card-header {
            font-weight: bold;
        }
    </style>
</head>
<body>
   <div class="container">
        <h1 class="text-center mb-5">Job Listings</h1>
        <div class="row">
            @foreach ($jobs as $job)
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            {{ $job->title }}
                        </div>
                        <div class="card-body">
                            <p><strong>Description:</strong> {{ $job->description }}</p>
                            <p><strong>Salary:</strong> {{ $job->salary }}</p>
                            <p><strong>Location:</strong> {{ $job->location }}</p>
                            <p><strong>Company:</strong> {{ $job->company->name }}</p>
                            <p><strong>Category:</strong> {{ $job->category->name }}</p>
                            <p><strong>Posted at:</strong> {{ \Carbon\Carbon::parse($job->posted_at)->format('d.m.Y') }}</p>
                            <a href="{{ route('jobs.show', $job->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
