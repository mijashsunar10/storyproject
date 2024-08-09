{{-- <!doctype html>
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

<body class="bg-dark bg-gradient ">
  {{-- <form action="{{route('storywriting.store')}}" method="POST" class="row" enctype="multipart/form-data"> --}}
  {{-- <form action="{{route('chapters.store', $storydetails_id)}}" method="POST" class="row" enctype="multipart/form-data">
    @csrf
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="d-flex align-items-center">
        <a href="{{('storydetails.show',$storydetails_id)}}">
        <button class="btn btn-outline-secondary me-2 btn-dark text-white " type="button">&lt;</button>
      </a>
        <div class="m-0">
          <small class="text-muted d-block">Title Name:</small>
          <h5 class="navbar-brand">{{$storydetails->title}}</h5>
        </div>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav"> --}}
        {{-- <div>
          <button class="btn btn-outline-secondary me-2" type="button">Cancel</button>
          <button class="btn btn-dark" type="submit">Submit</button>
        </div> --}}
        {{-- <div class="navbar-buttons">
          
          <button class="btn btn-outline-secondary btn-long" type="reset">Reset</button>
         
      </div>
      </div>
    </div>
  </nav> --}}

  
    {{-- <section class="p-3 p-md-4 p-xl-5">
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

                    function resetImage() {
                                                var coverImage = document.getElementById('coverImage');
                                                var coverImagePreview = document.getElementById('coverImagePreview');
                                                var addCoverText = document.getElementById('addCoverText');
                                                coverImage.value = ''; // Reset file input
                                                coverImagePreview.src = ''; // Clear preview image
                                                addCoverText.style.display = 'block'; // Show text
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
              <textarea name="title" id="" cols="50" rows="1" class=" texta1 fs-1 border-0 mb-0" placeholder="Untitled:Part 1"></textarea>
                  <hr class="m-0">
                  <textarea name="content" id="" cols="100" rows="20" class="texta2 fs-5 border-0" placeholder="Please start your story here...."></textarea> 
              </div>
  
              </div>
              <div class="button-container">
                <button class="btn btn-dark btn-medium" type="submit">Submit</button>
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

</html> --}} 

{{--  --}}



    <!DOCTYPE html>
    <html lang="zxx">
    
    @include('layouts.head')
    
    <body >
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>
    
        <!-- Header Section Begin -->
       @include('layouts.header')
        <!-- Header End -->
    
        <!-- Blog Details Section Begin -->
        <section class="blog-details spad">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog__details__title">
                            <h6>Action, Magic <span>-March 08, 2020</span></h6>
                            <h3>Fate Stay NIght : Unlimited Blade</h3>
                            <h3>Chapter 1</h3>
                            
                        </div>
                    </div>
                    
                    <div class="col-lg-10">
                        <div class="blog__details__content">
                            
                            
                            <div class="blog__details__item__text">
                                {{-- <h4>Chapter 1</h4> --}}
                                <img src="img/blog/details/bd-item-1.jpg" alt="">
    
                                <p class="" style="text-indent: 100px; ;color:white;padding:2rem">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae, quo?
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vel, iste non, ratione repellat eum, autem in alias vitae velit molestias deserunt quia recusandae possimus labore voluptate. Ducimus accusantium aperiam impedit animi atque in vitae cupiditate, molestias autem quas, sint consequuntur placeat libero voluptatum, nemo doloremque doloribus explicabo quod eaque numquam. Laborum magni inventore reiciendis, asperiores ullam maiores soluta a id impedit perferendis laboriosam placeat ex, fugiat incidunt, commodi porro quos voluptatum! Consequatur ratione natus deleniti culpa facilis vitae ut. Officiis est qui tenetur omnis adipisci ab dolores repudiandae, perspiciatis iste, corporis eum possimus natus dignissimos culpa laborum impedit delectus. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos rem natus, alias illo veritatis ducimus dolor provident incidunt autem explicabo iure reprehenderit sint repudiandae modi, dicta magni voluptate? Quaerat vero quae labore libero? Omnis veritatis fugit incidunt ipsa est nulla, beatae enim similique animi architecto minima sint distinctio placeat neque quia sequi excepturi consequatur! Fuga repellat corrupti blanditiis quam tenetur, aliquam autem recusandae molestias ab sint dolores. Vitae sed enim culpa, laudantium, aliquam quibusdam itaque molestias provident voluptate omnis est fugiat qui minima, velit aliquid? Quam quos voluptas soluta aliquam ipsam, nemo quo accusantium temporibus amet et labore ipsa laboriosam.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed animi amet deleniti tempore blanditiis? Atque est ratione, a assumenda eligendi tenetur blanditiis mollitia culpa nobis iste repellendus eius! Perferendis ad alias aperiam dolorum quibusdam eaque vitae ex. Pariatur, earum minima minus optio, harum quo maxime rerum blanditiis et libero ratione mollitia. Aliquid velit, optio dicta explicabo maxime dolor commodi aliquam deserunt facilis expedita ipsa quaerat molestias consectetur culpa. Odit culpa et id doloribus quidem? Provident itaque iure obcaecati eos minus maxime, a omnis! Distinctio provident labore officiis, sed nihil quidem commodi, pariatur expedita odit repellat, amet consectetur nobis perferendis soluta minus totam temporibus! Debitis, dolorem. Magnam nesciunt doloremque placeat officia doloribus odio cupiditate totam voluptas, ducimus perferendis voluptatem enim nostrum modi eum expedita at corrupti nihil! Est quo expedita in, earum esse cupiditate similique delectus. A, tempore esse! Aliquam explicabo veniam quod? Vel nam adipisci quasi dolor mollitia magni culpa voluptate enim dolore distinctio repudiandae voluptatum perferendis optio est eos totam quia quibusdam nihil, aperiam praesentium a! Aspernatur facere distinctio natus non porro dolore recusandae quisquam ipsum eaque doloribus, reiciendis vero exercitationem et tempore facilis commodi voluptatibus labore sunt officia illum voluptas. Odit, blanditiis molestiae aspernatur odio facilis aliquam, cumque repudiandae sint eaque eveniet officiis harum quam eligendi vitae laborum minima quos ad placeat molestias! Ipsum, culpa libero? Laborum sit harum molestias nihil dignissimos totam, quidem suscipit distinctio? Nihil ullam quas fugit facere, minima repellat deleniti explicabo? Exercitationem a voluptates repudiandae harum, ratione ab nihil ipsam earum voluptas laudantium impedit provident perspiciatis inventore molestias. Sed, mollitia eius veritatis soluta, corporis dolores eveniet, magni fugiat quibusdam minus molestias inventore repellat repudiandae porro fuga iusto cumque praesentium tempora aut laboriosam nesciunt laudantium libero dolor. Corrupti, eaque laudantium? Quasi minus veritatis alias delectus! Sunt ullam optio rerum asperiores? Aliquam exercitationem ducimus ab? Quisquam provident iste ut. Placeat expedita sunt atque aspernatur quo porro animi minima aperiam delectus, iste ea voluptatem, cupiditate eum earum incidunt provident! Ullam totam sit nisi, iste rerum sequi nihil esse perferendis assumenda, aperiam suscipit eaque obcaecati atque voluptas iusto doloremque. Atque magnam vero dolorum reprehenderit cum maxime iure dolores obcaecati modi, nesciunt laudantium nulla mollitia recusandae, deleniti debitis commodi aut ipsam, nemo ratione. Architecto est ipsa eveniet blanditiis iure tempora quasi adipisci facilis expedita fugit illum sint fuga a dolore assumenda porro nemo illo nam pariatur asperiores, accusamus odio delectus eaque maxime? Voluptatibus porro sed, doloremque dolorem nemo sunt totam quas? Esse tempore architecto laborum accusamus voluptates impedit quod at consequatur, dicta sequi nemo! Cum quos qui sint ad assumenda iste quisquam, fuga, voluptates est culpa maiores ipsum eveniet illum voluptas, optio nostrum itaque nesciunt quasi earum et doloribus veritatis nemo quaerat. Minima quod blanditiis officia ut, sint eum explicabo qui voluptatibus suscipit. Dolor molestias sed veniam reiciendis, blanditiis excepturi vitae, debitis eum minima dolorum neque quae, eligendi enim iure et expedita dignissimos necessitatibus iste sit ea? Natus sapiente quaerat qui fuga suscipit aliquid exercitationem eos magnam iure architecto similique saepe, autem, voluptatem rerum totam possimus, fugit voluptates tenetur?
                                </p>
    
                                {{-- <p style="text-indent: 100px; background:white;color:black">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et, culpa.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis officia voluptatibus, quidem explicabo rem dicta nemo saepe! Aliquid explicabo praesentium, excepturi error omnis accusamus animi eveniet voluptatibus repudiandae ea blanditiis, nulla voluptatem debitis provident itaque eligendi ipsum ipsa recusandae fuga consequuntur labore quisquam. Nihil ea autem facilis fugit accusamus, suscipit amet? Veritatis dolore magnam possimus laborum cumque esse labore assumenda itaque praesentium distinctio, id et doloremque nemo? Eum ipsa eaque dignissimos, sequi est dolorem nam aliquam laboriosam voluptatibus nobis laudantium. Veritatis, rerum molestias? At, nostrum perspiciatis eveniet porro ab voluptatibus. Beatae porro delectus eveniet earum, vero dolorum assumenda quisquam laboriosam.
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure laborum consectetur aliquid reprehenderit ipsa, nesciunt eligendi repudiandae placeat iste tempora cum sint fugiat. Molestias officiis quod atque veritatis, non deserunt vel eos pariatur recusandae, saepe perspiciatis. Facilis provident sint vero voluptates laudantium reprehenderit possimus, eos odio quos asperiores quidem natus eum amet temporibus eius, id omnis nulla totam. Nulla, molestiae illum ipsam, quos officia cum aspernatur odit commodi voluptatibus, necessitatibus reiciendis ad. Culpa maiores fugit eaque asperiores officia ducimus, sit nesciunt dolorum nam optio magni enim, porro magnam quasi iste architecto quas minus vel iusto dolorem. Dolore qui architecto soluta.
                                </p> --}}
                            
                            </div>
                            
                           
                            <div class="blog__details__btns">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog__details__btns__item">
                                            <h5><a href="#"><span class="arrow_left"></span> Previous Chapter</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blog__details__btns__item next__btn">
                                            <h5><a href="#">Continue to Next Chapter <span
                                                class="arrow_right"></span></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row d-flex justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="blog__details__title">
                                            
                                            <div class="blog__details__social">
                                                <a href="#" class="facebook fw-bold"><i class="fa fa-facebook-square"></i> Facebook</a>
                                                <a href="#" class="pinterest"><i class="fa fa-instagram"></i> Instagram</a>
                                                <a href="#" class="linkedin"><i class="fa fa-linkedin-square"></i> Linkedin</a>
                                                <a href="#" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__details__comment">
                                    <h4>3 Comments</h4>
                                    <div class="blog__details__comment__item">
                                        <div class="blog__details__comment__item__pic">
                                            <img src="img/blog/details/comment-1.png" alt="">
                                        </div>
                                        <div class="blog__details__comment__item__text">
                                            <span>Sep 08, 2020</span>
                                            <h5>John Smith</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi</p>
                                            <a href="#">Like</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="blog__details__comment__item blog__details__comment__item--reply">
                                        <div class="blog__details__comment__item__pic">
                                            <img src="img/blog/details/comment-2.png" alt="">
                                        </div>
                                        <div class="blog__details__comment__item__text">
                                            <span>Sep 08, 2020</span>
                                            <h5>Elizabeth Perry</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi</p>
                                            <a href="#">Like</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <div class="blog__details__comment__item">
                                        <div class="blog__details__comment__item__pic">
                                            <img src="img/blog/details/comment-3.png" alt="">
                                        </div>
                                        <div class="blog__details__comment__item__text">
                                            <span>Sep 08, 2020</span>
                                            <h5>Adrian Coleman</h5>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                            adipisci velit, sed quia non numquam eius modi</p>
                                            <a href="#">Like</a>
                                            <a href="#">Reply</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__details__form">
                                    <h4>Leave A Commnet</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <input type="text" placeholder="Name">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <input type="text" placeholder="Email">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="Message"></textarea>
                                                <button type="submit" class="site-btn">Send Message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Blog Details Section End -->
    
                      <!-- Search model Begin -->
                      <div class="search-model">
                        <div class="h-100 d-flex align-items-center justify-content-center">
                            <div class="search-close-switch"><i class="icon_close"></i></div>
                            <form class="search-model-form">
                                <input type="text" id="search-input" placeholder="Search here.....">
                            </form>
                        </div>
                    </div>
                    <!-- Search model end -->
    
            <!-- Footer Section Begin -->
            @include('layouts.footer')
              <!-- Footer Section End -->
    
    
    
            <!-- Js Plugins -->
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/player.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/mixitup.min.js"></script>
            <script src="js/jquery.slicknav.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/main.js"></script>
    
        </body>
    
        </html>

        <div class="card-body">
          <h3 class="card-title">{{ $chapter->title }}</h3>
          <h3 class="card-title">{{ $storydetails->title }}</h3>
          <h3 class="card-title">{{ $category->category }}</h3>
          <p class="card-text">{{ $chapter->content }}</p>
          @if($chapter->image)
              <img src="{{ asset('chapter/' . $chapter->image) }}" class="card-img-top" alt="Chapter Image">
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
                  <a href="{{ route('chapters.show', $chap->id) }}" class="{{ $chap->id == $chapter->id ? 'active' : '' }}">
                      {{ $chap->sequence_number }}
                  </a>
              @endforeach
          </div>
          <a href="{{ route('storydetails.show', $chapter->storydetails_id) }}" class="btn btn-primary mt-3">Back to Story Details</a>
      </div>
  </div>
</div>
</div>