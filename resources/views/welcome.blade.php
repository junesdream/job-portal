<!DOCTYPE html>
<html>
<head>
    <title>Welcome to JobHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Happy Job Portal</h1>
        <p>Here is you see Joblist form our big Job Poertal.<br/>  Click the button below to view the job listings.</p>
        <a href="{{ route('jobs.index') }}" class="btn btn-primary">Job Listings</a>
    </div>
</body>
</html>