{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Chapter</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Create Chapter for {{ $storydetails->title }}</div>
                <div class="card-body">
                    <form action="{{ route('chapters.store', $storydetails->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Create Chapter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> --}}



{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Chapter</title>
    <style>
        .card {
            margin-top: 20px;
            border-radius: 10px;
        }
        .form-group {
            margin-bottom: 15px;
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
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Create Chapter</h3>
                    <form action="{{ route('chapters.store', $storydetails_id) }}" method="POST" enctype="multipart/form-data">
                        @csrf --}}
                        {{-- <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button> --}}

                        
                    {{-- </form>
                    <a href="{{ route('chapters.index', $storydetails_id) }}" class="back-btn">Back to Chapters</a>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Write</title>
    <script src="https://kit.fontawesome.com/2c3dd3b477.js" crossorigin="anonymous"></script>
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

        /* text-area  */

        textarea:focus {
            outline: none;
        }

        .text_area {
            width: 90%;
            max-width: 1000px;
        }

        .texta2,
        .texta1 {
            width: 100%;
            height: auto;
            padding: 10px;
            border: none;
            border-radius: 5px;
            resize: vertical;
            box-sizing: border-box;
            background-color: #fff;
            overflow: auto;
        }

        /* Responsive adjustments */
        @media (min-width: 600px) {
            .texta2 {
                font-size: 1.5rem;
            }
        }

        @media (min-width: 768px) {
            .texta2 {
                font-size: 1.75rem;
            }
        }

        @media (min-width: 1024px) {
            .texta2 {
                font-size: 2rem;
            }
        }

        .btn-rounded {
            border-radius: 50px;
        }

        .card-body {
            position: relative;
        }

        #coverImagePreview {
            display: none;
            max-width: 100%;
            max-height: 100%;
            border-radius: 5px;
        }

        .button-container {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            margin: 20px;
        }

        .navbar-buttons {
            display: flex;
            gap: 10px;
        }

        .btn-long {
            min-width: 120px;
        }
        .btn-medium
        {
            min-width:700px;
            padding: 0.5rem;
            font-weight: bold;

        }
    </style>
</head>

<body class="bg-dark bg-gradient">
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <a href="{{route('storydetails.show',$storydetails_id)}}">
                        <button class="btn btn-outline-secondary me-2 btn-dark text-white" type="button">&lt;</button>
                    </a>
                    <div class="m-0">
                        <small class="text-muted d-block">Title Name:</small>
                        <h5 class="navbar-brand">{{$storydetails->title}}</h5>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <div class="navbar-buttons">
                        {{-- <a href="{{route('storydetails.show', $storydetails_id)}}"  class="btn btn-outline-secondary btn-long">
                            Cancel
                        </a> --}}
                        <button class="btn btn-outline-secondary btn-long" type="reset">Reset</button>
                        {{-- <button class="btn btn-dark btn-long" type="submit">Submit</button> --}}
                    </div>
                </div>
            </div>
        </nav>

        <section class="p-3 p-md-4 p-xl-5">
            <form action="{{route('chapters.store', $storydetails_id)}}" method="POST" class="row" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="card border-light-subtle shadow-sm">
                        <div class="col g-0 d-flex flex-column align-items-center justify-content-center">
                            <div class="col-12 col-md-6 text-bg-primary">
                                <div class="d-flex align-items-center justify-content-center h-100">
                                    <div class="col-10 col-xl-8 py-3">
                                        <div class="container">
                                            <div class="d-flex justify-content-center">
                                                <div class="card" style="width: 13rem; height: 13rem; position: relative; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px;">
                                                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                                                        <i id="imageIcon" class="fas fa-image" style="font-size: 48px; color: #aaa;" onclick="triggerFileInput();"></i>
                                                        <img id="coverImagePreview" name="image" src="#" alt="Selected Image" style="display: none;"/>
                                                        <p id="addCoverText" class="mt-2" onclick="triggerFileInput();">Add a cover</p>
                                                        <input type="file" class="form-control-file position-absolute" id="coverImage" name="image" style="width: 100%; height: 100%; opacity: 0; top: 0; left: 0; cursor: pointer;" onchange="previewImage(event);">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            function triggerFileInput() {
                                                document.getElementById('coverImage').click();
                                            }
        
                                            function previewImage(event) {
                                                var reader = new FileReader();
                                                reader.onload = function() {
                                                    var output = document.getElementById('coverImagePreview');
                                                    var imageIcon = document.getElementById('imageIcon');
                                                    var addCoverText = document.getElementById('addCoverText');
                                                    output.src = reader.result;
                                                    output.style.display = 'block';
                                                    imageIcon.style.display = 'none';
                                                    addCoverText.style.display = 'none';
                                                }
                                                reader.readAsDataURL(event.target.files[0]);
                                            }
        
                                            function resetImage() {
                                                var coverImage = document.getElementById('coverImage');
                                                var coverImagePreview = document.getElementById('coverImagePreview');
                                                var addCoverText = document.getElementById('addCoverText');
                                                coverImage.value = ''; // Reset file input
                                                coverImagePreview.src = ''; // Clear preview image
                                                coverImagePreview.style.display = 'none';
                                                addCoverText.style.display = 'block'; // Show text
                                                imageIcon.style.display = 'block'; // Show icon
                                            }
        
                                            document.querySelector('button[type="reset"]').addEventListener('click', function () {
                                                resetImage();
                                            });
                                        </script>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="text_area">
                                <textarea name="title" cols="50" rows="1" class="texta1 fs-1 border-0 mb-0" placeholder="Untitled:Part 1"></textarea>
                                <hr class="m-0">
                                <textarea name="content" cols="100" rows="20" class="texta2 fs-5 border-0" placeholder="Please start your story here...."></textarea>
                            </div>
                        </div>
                        <div class="button-container">
                            <button class="btn btn-dark btn-medium" type="submit">Submit</button>
                        </div>
                    </div>
                   
                </div>
               
            </form>
        </section>
        

       <footer class="py-3 footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
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



