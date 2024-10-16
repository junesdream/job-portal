<!-- resources/views/jobs/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Detail</title>
</head>
<body>
    <h1>{{ $job->title }}</h1>
    <p>Description: {{ $job->description }}</p>
    <p>Location: {{ $job->location }}</p>
    <p>Salary: {{ $job->salary }}</p>
<p>Posted at: {{ \Carbon\Carbon::parse($job->posted_at)->format('d.m.Y') }}</p>   
    <p>Company: {{ $job->company->name }}</p>
    <p>Category: {{ $job->category->name }}</p>
</body>
</html>
