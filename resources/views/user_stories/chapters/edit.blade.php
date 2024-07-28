<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Chapter</title>
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Edit Chapter</h2>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('user.chapters.update', $chapter->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $chapter->title }}" required>
                </div>
                <div class="form-group mt-3">
                    <label for="content">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" required>{{ $chapter->content }}</textarea>
                </div>
                <div class="form-group mt-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Update Chapter</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
