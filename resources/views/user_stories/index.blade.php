<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>My Stories</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .card-body {
            text-align: center;
        }
        .card-body p {
            margin-bottom: 10px;
        }
        .card-body a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 5px;
        }
        .btn-edit {
            background-color: #007bff;
        }
        .btn-delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">My Stories</h2>
    <div class="row">
        @foreach($stories as $story)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $story->title }}</h5>
                        <p class="card-text">{{ $story->description }}</p>
                        <a href="{{ route('user.stories.edit', $story->id) }}" class="btn-edit">Edit</a>
                        <form action="{{ route('user.stories.destroy', $story->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                        <a href="{{ route('user.chapters.index', $story->id) }}" class="btn-edit">View Chapters</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
