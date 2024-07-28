

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $category->name }} - Stories</title>
    <style>
        .card {
            margin-top: 20px;
        }
        .story-card {
            margin-top: 10px;
        }
        .story-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">{{ $category->name }}</h2>
    <div class="row">
        @foreach($category->stories as $story)
            <div class="col-md-4">
                <div class="card story-card">
                    @if($story->image)
                        <img src="{{ asset('storydetails/' . $story->image) }}" class="card-img-top" alt="{{ $story->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $story->title }}</h5>
                        <p class="card-text">{{ Str::limit($story->description, 100) }}</p>
                        <a href="{{ route('storydetails.show', $story->id) }}" class="btn btn-primary">Read Story</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Back to Categories</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
