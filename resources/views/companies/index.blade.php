<!DOCTYPE html>
<html>
<head>
    <title>Company Listings</title>
</head>
<body>
    <h1>Company Listings</h1>

    <ul>
        @foreach ($companies as $company)
            <li>{{ $company->name }} - {{ $company->location }} - {{ $company->industry }} - Gegründet: {{ $company->founded_at }} - 
        Webseite: <a href="{{ $company->website }}">{{ $company->website }}</a>
   </li>
        @endforeach
    </ul>
</body>
</html>
