{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>User Stories</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .add-btn {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .story-list {
            margin-top: 20px;
        }
        .story-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .story-item a {
            text-decoration: none;
            color: #007bff;
        }
        .btn-edit {
            background-color: #ffc107;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .btn-delete {
            background-color: #dc3545;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">My Stories</h2>
            <div class="story-list">
                @if($stories->isEmpty())
                    <p>No stories available.</p>
                @else
                    @foreach($stories as $story)
                        <div class="story-item">
                            <div>
                                <h5>{{ $story->title }}</h5>
                                <p>{{ $story->description }}</p>
                            </div>
                            <div>
                                <a href="{{ route('storydetails.show', $story->id) }}" class="btn btn-primary">View</a>
                                <a href="{{ route('chapters.index', $story->id) }}" class="btn btn-secondary">Manage Chapters</a>
                                <a href="{{ route('storydetails.edit', $story->id) }}" class="btn-edit">Edit Story</a>
                                <form action="{{ route('storydetails.destroy', $story->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">Delete Story</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <a href="{{ route('storydetails.create') }}" class="add-btn mt-4">Add New Story</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}
