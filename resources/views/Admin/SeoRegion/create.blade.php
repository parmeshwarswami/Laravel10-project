<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create or Update SEO Region</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Create or Update SEO Region</h2>
        <form action="/submit" method="POST">
            @csrf
            <!-- Code -->
            <div class="form-group">
                <label for="code">Code:</label>
                <input type="text" class="form-control" id="code" name="code">
            </div>
            <!-- Name -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <!-- URL Slug -->
            <div class="form-group">
                <label for="url_slug">URL Slug:</label>
                <input type="text" class="form-control" id="url_slug" name="url_slug">
            </div>
            <!-- Active -->
            <div class="form-group">
                <label for="active">Active:</label>
                <input type="checkbox" id="active" name="active" value="1">
            </div>
            <!-- Other Fields -->
            <!-- Add more fields as needed -->

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
