<!-- resources/views/jobs/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
</head>
<body>
    <h1>Job Listings</h1>

    <ul>
        @foreach ($jobs as $job)
            <li>{{ $job->title }} - {{ $job->location }}</li>
        @endforeach
    </ul>
</body>
</html>
