<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chapters List</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .add-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: #28a745;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: white;
            text-decoration: none;
        }
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
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-center">Chapters for {{ $storydetails->title }}</h2>
            <div class="chapter-list">
                @if($chapters->isEmpty())
                    <p>No chapters available.</p>
                @else
                    @foreach($chapters as $index => $chapter)
                        <div class="chapter-item">
                            <span>Chapter {{ $index + 1 }}</span>
                            <div>
                                <a href="{{ route('user.chapters.edit', $chapter->id) }}">Edit</a>
                                <form action="{{ route('user.chapters.destroy', $chapter->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="color: #dc3545; border: none; background: none; padding: 0; margin: 0;">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <a href="{{ route('user.chapters.create', $storydetails->id) }}" class="add-btn">+</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
