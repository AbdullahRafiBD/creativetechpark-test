<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="mb-4">{{ $post->title }}</h1>
                <p class="text-muted">{{ $post->created_at->format('M d, Y') }}</p>
                <img src="{{ $post->image }}" alt="{{ $post->title }}" class="img-fluid mb-4">
                <p>{{ $post->description }}</p>
                <hr>
                {{-- <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a> --}}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
