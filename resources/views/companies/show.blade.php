<!DOCTYPE html>
<html>
<head>
    <title>{{ $company->name }}</title>
</head>
<body>
    <h1>{{ $company->name }}</h1>

    <p>{{ $company->description }}</p>

    <h2>Location</h2>
    <p>{{ $company->location }}</p>

    <h2>Industry</h2>
    <p>{{ $company->industry }}</p>

    <h2>Founded</h2>
    <p>{{ $company->founded_at }}</p>

    <h2>Website</h2>
    <p><a href="{{ $company->website }}">{{ $company->website }}</a></p>
</body>
</html>
