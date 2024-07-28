{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chapter Details</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .card-img-top {
            object-fit: cover;
            height: 300px;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            text-align: center;
        }
        .card-body p {
            margin-bottom: 10px;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
        }
        .nav-buttons a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-previous {
            background-color: #6c757d;
        }
        .btn-next {
            background-color: #007bff;
        }
        .chapter-list {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .chapter-list a {
            margin: 5px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #f8f9fa;
            text-decoration: none;
            color: #000;
        }
        .chapter-list a.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $chapter->title }}</h3>
                    <p class="card-text">{{ $chapter->content }}</p>
                    @if($chapter->image)
                        <img src="{{ asset('chapters/' . $chapter->image) }}" class="card-img-top" alt="Chapter Image">
                    @endif
                    <div class="nav-buttons mt-4">
                        @if($previousChapter)
                            <a href="{{ route('chapters.show', $previousChapter->id) }}" class="btn-previous">Previous</a>
                        @else
                            <span></span>
                        @endif

                        @if($nextChapter)
                            <a href="{{ route('chapters.show', $nextChapter->id) }}" class="btn-next">Next</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                    <div class="chapter-list mt-4">
                        @foreach($allChapters as $chap)
                            <a href="{{ route('chapters.show', $chap->id) }}" class="{{ $chap->id == $chapter->id ? 'active' : '' }}">{{ $chap->id }}</a>
                        @endforeach
                    </div>
                    <a href="{{ route('chapters.index', $chapter->storydetails_id) }}" class="btn btn-primary mt-3">Back to Chapters</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chapter Details</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .card-img-top {
            object-fit: cover;
            height: 300px;
            width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .card-body {
            text-align: center;
        }
        .card-body p {
            margin-bottom: 10px;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
        }
        .nav-buttons a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .btn-previous {
            background-color: #6c757d;
        }
        .btn-next {
            background-color: #007bff;
        }
        .chapter-list {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .chapter-list a {
            margin: 5px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: #f8f9fa;
            text-decoration: none;
            color: #000;
        }
        .chapter-list a.active {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $chapter->title }}</h3>
                    <p class="card-text">{{ $chapter->content }}</p>
                    @if($chapter->image)
                        <img src="{{ asset('chapters/' . $chapter->image) }}" class="card-img-top" alt="Chapter Image">
                    @endif
                    <div class="nav-buttons mt-4">
                        @if($previousChapter)
                            <a href="{{ route('chapters.show', $previousChapter->id) }}" class="btn-previous">Previous</a>
                        @else
                            <span></span>
                        @endif

                        @if($nextChapter)
                            <a href="{{ route('chapters.show', $nextChapter->id) }}" class="btn-next">Next</a>
                        @else
                            <span></span>
                        @endif
                    </div>
                    <div class="chapter-list mt-4">
                        @foreach($allChapters as $chap)
                            <a href="{{ route('chapters.show', $chap->id) }}" class="{{ $chap->id == $chapter->id ? 'active' : '' }}">{{ $chap->id }}</a>
                        @endforeach
                    </div>
                    <a href="{{ route('chapters.index', $chapter->storydetails_id) }}" class="btn btn-primary mt-3">Back to Chapters</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

