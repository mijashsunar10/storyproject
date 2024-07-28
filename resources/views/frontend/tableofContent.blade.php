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
        }
  </style>
</head>

<body class="bg-dark bg-gradient ">

@include('layouts.nav');


  <section class="p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="card border-light-subtle shadow-sm">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
          <div class="container-fluid  d-flex flex-row justify-content-around ">
              <div class="hover_item">
               <a class="btn btn-light btn-sm fs-5 fw-bold" href="{{url('storydetails')}}" role="button " style="">Story Details </a>
              </div>
              {{-- <nav class="nav">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link" href="#">Link</a>
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </nav> --}}
              <div class="hover_item">
               <a class="btn btn-light btn-sm fs-5 fw-bold" href="" role="button"> Table of Contents</a>
              </div>
              <div class="hover_item">
                <a class="btn btn-light btn-sm fs-5 fw-bold" href="#" role="button"> Story Notes</a>
              </div>
          </div>
        </nav>
        <div class="card-body  p-md-4 p-xl-5">
            <button class="btn btn-danger btn-block mt-0 fw-bold " style="padding:0.5rem 2rem;">+ New Part</button>
            <?php 
            for($i=0;$i<10;$i++)
            {
                ?>
           

            <div class="part mt-3">
                <div class="d-flex align-items-center justify-content-between px-3">
                    <div class="d-flex gap-5 align-items-center">
                        <div class="icon mr-2 fs-5 fw-bold"><i class="fa-solid fa-bars"></i></div>
                        <div class="flex-grow-1">
                            <div class="fs-5 fw-bold">Untitled Story</div>
                            <div>Draft - Jun 08, 2024</div>
                        </div>
                    </div>
                    <!-- <div class="d-flex align-items-center mr-3 justify-content-between"> -->
                        <div class="d-flex align-items-center mr-3">
                            <span class="ml-1 gap-2">
                                <i class="fa-solid fa-eye "></i>  
                                <span class="m-2 fw-bold">1</span>
                            </span>
                            
                        </div>
                        <div class="d-flex align-items-center mr-3">
                            <span class="ml-1"><i class="fa-solid fa-star"></i>
                                <span class="m-2 fw-bold">1</span>
                            </span>

                        </div>
                        <div class="d-flex align-items-center">
                           <span class="ml-1"><i class="fa-solid fa-message"></i>
                            <span class="m-2 fw-bold">1</span>
                        </span>
                        </div>
                    <!-- </div> -->
                    <div class="options fs-5"><i class="fa-solid fa-list"></i></div>
                </div>
            </div>
        <?php 

            }

            ?>
        </div>
  </div>
       
      </div>
    </div>
  </section>





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