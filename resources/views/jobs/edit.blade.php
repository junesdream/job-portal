<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <!-- Bootstrap CSS einbinden -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #333;
            color: #ddd;
            font-family: Arial, sans-serif;
            padding: 20px;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            max-width: 700px;
            width: 100%;
            background-color: #444;
            padding: 30px;
            border-radius: 8px;
        }
        label {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Edit Job</h2>
        <form action="{{ route('jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $job->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $job->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Salary:</label>
                <input type="number" class="form-control" id="salary" name="salary" value="{{ $job->salary }}" required>
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Location:</label>
                <input type="text" class="form-control" id="location" name="location" value="{{ $job->location }}" required>
            </div>

            <div class="mb-3">
                <label for="company_id" class="form-label">Company:</label>
                <select class="form-select" id="company_id" name="company_id" required>
                    @foreach($companies as $company)
                        <option value="{{ $company->id }}" {{ $job->company_id == $company->id ? 'selected' : '' }}>{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category:</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $job->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100 mt-3">Update Job</button>
        </form>
    </div>
    <!-- Bootstrap JS und Popper.js einbinden -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
