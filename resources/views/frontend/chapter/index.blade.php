{{-- 

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
        .back-btn {
            background-color: #6c757d;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
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
                            <a href="{{ route('chapters.show', $chapter->id) }}">Read Chapter {{ $index + 1 }}</a>
                        </div>
                    @endforeach
                @endif
            </div>
            <a href="{{ route('chapters.create', $storydetails->id) }}" class="add-btn">+</a>
            <a href="{{ route('storydetails.show', $storydetails->id) }}" class="back-btn">Back to Story Details</a>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


--}}

        {{-- <!doctype html>
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
                .back-btn {
                    background-color: #6c757d;
                    color: white;
                    padding: 10px 20px;
                    border-radius: 5px;
                    text-decoration: none;
                    display: inline-block;
                    margin-top: 20px;
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
                                    <span>Chapter {{ $index + 1 }}: {{$chapter->title}} </span>
                                    <a href="{{ route('chapters.show', $chapter->id) }}">Read Chapter {{ $index + 1 }}</a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <a href="{{ route('chapters.create', $storydetails->id) }}" class="add-btn">+</a>
                    <a href="{{ route('storydetails.show', $storydetails->id) }}" class="back-btn">Back to Story Details</a>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title>Write</title>
  <script src="https://kit.fontawesome.com/2c3dd3b477.js" crossorigin="anonymous"> </script>
  <style>
    .form-control:hover {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .card {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    .footer a {
      color: black;
      text-decoration: none;
      margin-right: 15px;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .footer .separator {
      color: black;
      margin: 0 10px;
    }
    .hover_item 
    {
      transform .3s;
    }
    .hover_item a:hover
    {
       text-decoration: underline;
       transform: scale(1.1);
       /* transition-delay: 1ms; */
    }
    .part:hover
    {
        background-color: #eff1f3
    }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active 
        {
            color: #495057;
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
            border-bottom: 2px solid orange;
        }
        .part {
            border: 1px solid #dee2e6;
            border-radius: 0.25rem;
            margin-bottom: 10px;
            padding: 10px;
        }
        .part .icon {
            font-size: 24px;
        }
        .part-details div {
            margin-bottom: 5px;
        }
        .options {
            font-size: 24px;
            cursor: pointer;
            margin-left: 20px;  
        }
        a {
            text-decoration: none;
            color: black;
        }
        .chapter-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .options {
            cursor: pointer;
            margin-left: 20px; /* Add gap between buttons and the list icon */
        }

        .edit-delete-buttons {
            display: none;
            gap: 10px; /* Add gap between edit and delete buttons */
        }

        .chapter-options.show-buttons .edit-delete-buttons {
            display: flex;
        }
  </style>
</head>

<body class="bg-dark bg-gradient ">

{{-- @include('layouts.nav'); --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a href="{{route('storydetails.show', $storydetails->id) }}">
            <button class="btn btn-outline-secondary me-2 btn-dark text-white " type="button">&lt;</button>
        </a>
            <div class="m-0">
            <small class="text-muted d-block">Story Title</small>
            <h5 class="navbar-brand">{{$storydetails->title}}</h5>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <div>`
            <a href="{{route('storydetails.show', $storydetails->id) }}">
            <button class="btn btn-outline-secondary me-2" type="button">Cancel</button>
            </a>
            <a href="">
            <button class="btn btn-dark" type="button">Submit</button>
            </a>
            </div>
        </div>
        </div>
  </nav>


  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
        <div class="card border-light-subtle shadow-sm">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid d-flex flex-row justify-content-around">
                    <div class="hover_item">
                        <a class="btn btn-light btn-sm fs-5 fw-bold" href="" role="button">Table of Contents: List of all the chapters of your story</a>
                    </div>
                </div>
            </nav>

            <div class="card-body p-md-4 p-xl-5">
                <a href="{{ route('chapters.create', $storydetails->id) }}" class="btn btn-danger btn-block mt-0 fw-bold" style="padding:0.5rem 2rem;">+ New Part</a>

                @if($chapters->isEmpty())
                <p>No chapters available.</p>
                @else
                @foreach($chapters as $index => $chapter)

                {{-- $chapters: This is the collection of chapters retrieved from the database, usually using an Eloquent model query. --}}
                {{-- $index: This variable holds the current loop index, starting from 0.
                $chapter: This variable holds the current item (a single Chapter model instance) in the loop. --}}
                
                    <div class="part mt-3">
                        <div class="d-flex align-items-center justify-content-between px-3">
                            <a href="{{ route('chapters.show', $chapter->id) }}">
                            <div class="d-flex gap-5 align-items-center">
                                <div class="icon mr-2 fs-5 fw-bold">Chapter {{ $index + 1 }}</div>
                                <div class="flex-grow-1">
                                    <div class="fs-5 fw-bold">{{$chapter->title}}</div>
                                    <div class="fs-6" style="color:black">Created at - {{$chapter->created_at->format('Y-m-d') }}</div>
                                </div>
                            </div>
                        </a>
                           
                            <div class="chapter-options">
                                <div class="edit-delete-buttons">
                                    <a href="{{route('chapters.edit',$chapter->id)}}">
                                    <button class="btn btn-primary btn-sm">Edit</button>
                                    </a>
                                    <form action="{{ route('chapters.destroy', $chapter->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                                <div class="options fs-5" onclick="toggleOptions(this)"><i class="fa-solid fa-list"></i></div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>

<script>
    function toggleOptions(element) {
        const chapterOptions = element.closest('.chapter-options');
        chapterOptions.classList.toggle('show-buttons');
    }
</script>





  <footer class="py-3 footer">
    <div class="container text-center">
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="text-dark mx-2">Simthesis</a> -->
          <a href="#" class="text-light mx-2">Try Premium</a>
          <a href="#" class="text-light mx-2">Get the App</a>
          <a href="#" class="text-light mx-2">Language</a>
          <a href="#" class="text-light mx-2">Writers</a>
          <span class="separator text-light">|</span>
          <a href="#" class="text-light mx-2">Brand Partnerships</a>
          <a href="#" class="text-light mx-2">Jobs</a>
          <a href="#" class="text-light mx-2">Press</a>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <a href="#" class="text-light mx-2">Terms</a>
          <a href="#" class="text-light mx-2">Privacy</a>
          <a href="#" class="text-light mx-2">Payment Policy</a>
          <a href="#" class="text-light mx-2">Accessibility</a>
          <a href="#" class="text-light mx-2">Help</a>
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <small class="text-dark">&copy; 2024 Simthesis</small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>

{{-- <!doctype html>
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
</html> --}}