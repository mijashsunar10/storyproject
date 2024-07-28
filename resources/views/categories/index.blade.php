<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Categories</title>
    <style>
        .card {
            margin-top: 20px;
        }
        .story-card {
            margin-top: 10px;
        }
        .story-card img {
            height: 100px;
            object-fit: cover;
            width: 100%;
        }
        .view-all {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Categories</h2>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $category->name }}</h5>
                        <div class="stories">
                            @foreach($category->stories as $story)
                                <div class="story-card card">
                                    @if($story->image)
                                        <img src="{{ asset('storydetails/' . $story->image) }}" alt="{{ $story->title }}">
                                    @endif
                                    <div class="card-body">
                                        <h6 class="card-title">{{ $story->title }}</h6>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="view-all">
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">View All Stories</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
