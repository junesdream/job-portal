<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>
</head>
<body>
    <h1>Job Listings</h1>

    <ul>
        @foreach ($jobs as $job)
            
            <li>
                {{ $job->title }} - 
                {{ $job->description }} - 
                {{ $job->salary }} - 
                {{ $job->location }} - 
                {{ $job->company_id }} - 
                {{ $job->category_id }} - 
                {{ \Carbon\Carbon::parse($job->posted_at)->format('d.m.Y') }}
            </li>
            
        @endforeach
    </ul>
</body>
</html>
