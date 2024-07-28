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
    
    /* text-area  */

    textarea:focus { 
    outline: none;
    border:none;
    /* overflow: hidden;  */
    /* resize:none; */
    }

    .text_area
    {
        width: 90%;
        max-width: 1000px;
    }
    .texta2,.texta1 {
    width: 100%;
    height: auto; /* Allow height to adjust based on content */
    padding: 10px;
    border: none; /* Remove border */
    border-radius: 5px;
    /* font-size: 1.25rem; Equivalent to fs-5 */
    resize: none; /* Prevents manual resizing */
    box-sizing: border-box; /* Ensures padding and width are included in the element's total width */
    overflow: hidden; /* Hides the scrollbar */
    background-color: #fff;
        }

        /* Responsive adjustments */
        @media (min-width: 600px) {
            .texta2 {
                font-size: 1.5rem; /* Larger font size on medium screens */
            }
        }

        @media (min-width: 768px) {
            .texta2 {
                font-size: 1.75rem; /* Larger font size on large screens */
            }
        }

        @media (min-width: 1024px) {
            .texta2 {
                font-size: 2rem; /* Even larger font size on extra large screens */
            }
        }

        /* text area */

     .btn-rounded
     {
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

  </style>
</head>

<body class="bg-dark bg-gradient ">
  {{-- <form action="{{route('storywriting.store')}}" method="POST" class="row" enctype="multipart/form-data"> --}}
  <form action="" method="POST" class="row" enctype="multipart/form-data">
    @csrf
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <a href="{{url('/')}}">
        <button class="btn btn-outline-secondary me-2 btn-dark text-white " type="button">&lt;</button>
      </a>
        <div class="m-0">
          <small class="text-muted d-block">Add Story Name</small>
          <h5 class="navbar-brand">Untitled Story</h5>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div>
          <button class="btn btn-outline-secondary me-2" type="button">Cancel</button>
          <button class="btn btn-dark" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </nav>

  
    <section class="p-3 p-md-4 p-xl-5">
      <div class="container">
        <div class="card border-light-subtle shadow-sm  ">
          
          <div class="col g-0 d-flex flex-column align-items-center justify-content-center">
            <div class="col-12 col-md-6 text-bg-primary">
              <div class="d-flex align-items-center justify-content-center h-100">
                <div class="col-10 col-xl-8 py-3">
  
                 
                  <div class="container">
                    <div class="d-flex justify-content-center">
                      <div class="card" style="width: 13rem; height: 13rem; position: relative; background-color: #f2f2f2; border: 1px solid #ddd; border-radius: 5px;">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                          <i id="imageIcon" class="fas fa-image" style="font-size: 48px; color: #aaa;" onclick="triggerFileInput();"></i>
                          <img id="coverImagePreview" name="image" src="#" alt="Selected Image" />
                          <p id="addCoverText" class="mt-2" onclick="triggerFileInput();">Add a cover</p>
                          <input type="file" class="form-control-file position-absolute" id="coverImage" style="width: 100%; height: 100%; opacity: 0; top: 0; left: 0; cursor: pointer;" onchange="previewImage(event);">
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
                  </script>

                
                  <hr>
                  
                </div>
              </div>
             </div>
             <div class="text_area">
              <textarea name="title" id="" cols="50" rows="1" class=" texta1 fs-1 border-0 mb-0" placeholder="Untitled:Part 1"></textarea>
                  <hr class="m-0">
                  <textarea name="content" id="" cols="100" rows="20" class="texta2 fs-5 border-0" placeholder="Please start your story here...."></textarea> 
              </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </section>



    
   
  </form>
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
  <script src="js/taxtarea.js"></script>
</body>

</html>