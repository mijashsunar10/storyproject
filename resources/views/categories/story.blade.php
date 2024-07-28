<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>{{ $story->title }}</title>
    <style>
        .chapter-list {
            margin-top: 20px;
        }
        .chapter-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .chapter-item a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">{{ $story->title }}</h2>
    <p class="text-center">{{ $story->description }}</p>
    <div class="chapter-list">
        @foreach($story->chapters as $index => $chapter)
            <div class="chapter-item">
                <span>Chapter {{ $index + 1 }}: {{ $chapter->title }}</span>
                <a href="{{ route('categories.chapter', ['story_id' => $story->id, 'chapter_id' => $chapter->id]) }}">Read Chapter</a>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
