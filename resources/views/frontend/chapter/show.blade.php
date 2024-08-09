

{{-- 
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chapter Details</title>
    <style>
        body {
            background-color: #121212;
            color: #f8f9fa;
        }
        .card {
            margin-top: 30px;
            border: none;
            background-color: #1f1f1f;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            border-radius: 15px;
            overflow: hidden;
        }
        .card-img-top {
            object-fit: cover;
            height: 300px;
            width: 100%;
        }
        .card-body {
            text-align: center;
            padding: 30px;
        }
        .card-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #f8f9fa;
        }
        .card-text {
            font-size: 1rem;
            color: #d1d1d1;
        }
        .nav-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn-previous {
            background-color: #6c757d;
        }
        .btn-previous:hover {
            background-color: #5a6268;
        }
        .btn-next {
            background-color: #007bff;
        }
        .btn-next:hover {
            background-color: #0056b3;
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
            background-color: #343a40;
            text-decoration: none;
            color: #f8f9fa;
            transition: background-color 0.3s ease;
        }
        .chapter-list a.active, .chapter-list a:hover {
            background-color: #007bff;
            color: white;
        }
        .back-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #0056b3;
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
                    <p><strong>Story:</strong> {{ $storydetails->title }}</p>
                    <p><strong>Category:</strong> {{ $category->name }}</p>
                    <p class="card-text">{{ $chapter->content }}</p>
                    @if($chapter->image)
                        <img src="{{ asset('chapters/' . $chapter->image) }}" class="card-img-top" alt="Chapter Image">
                    @endif
                    <div class="nav-buttons">
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
                    <div class="chapter-list">
                        @foreach($allChapters as $index => $chap)
                            <a href="{{ route('chapters.show', $chap->id) }}" class="{{ $chap->id == $chapter->id ? 'active' : '' }}">
                                {{ $index + 1 }}
                            </a>
                        @endforeach
                    </div>
                    <a href="{{ route('storydetails.show', $chapter->storydetails_id) }}" class="back-btn">Back to Story Details</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



--}}


                            
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Chapter Details</title>
    <style>
        /* .card {
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
        /* /* 
       /*  */
       .action-buttons {
            display: flex;
            justify-content:space-around;
            gap: 20px;
            margin-top: 30px;
            margin-bottom: 50px;
        }
        .back-btn, .index-btn {
            display: inline-block;
            padding: 15px 30px;
            border-radius: 30px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover, .index-btn:hover {
            background-color: #ff4500;
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
        .chapter-list a:hover {
            margin: 5px;
            padding: 10px 15px;
            border-radius: 5px;
            background-color: blueviolet;
            text-decoration: none;
            color:whitesmoke;
        }
        .chapter-list a.active {
            background-color: red;
            color: white;
        } 
        
    </style>
    @include('layouts.head')
    </head>
<body>
    @include('Layouts.header')

    <section class="blog-details spad">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8">
                    <div class="blog__details__title">
                        <h6>{{ $category->category }} <span>{{$chapter->created_at->format('Y-m-d')}}</span></h6>
                        <h3>{{ $storydetails->title }}</h3>
                       
                       
                        <h4>
                            Chapter {{ $currentChapterIndex + 1 }}

                             : {{ $chapter->title }}</h4>
                        
                    </div>
                </div>
                            <div class="col-lg-10">
                    <div class="blog__details__content">
                        
                        
                        <div class="blog__details__item__text">

                         
                            @if($chapter->image)
                            <img src="{{ asset('chapter/' . $chapter->image) }}" class="card-img-top" alt="Chapter Image">
                        @endif

                            <p class="" style="text-indent: 100px; ;color:white;padding:2rem">
                                {{ $chapter->content }}
                            </p>

                           
                        
                        </div>
                        
                       
                        <div class="blog__details__btns">
                            <div class="row">
                                @if($previousChapter)
                                <div class="col-lg-6">
                                    <div class="blog__details__btns__item">
                                        <h5><a href="{{ route('chapters.show', $previousChapter->id) }}"><i class="fa-solid fa-arrow-left"></i> Previous Chapter</a>
                                        </h5>
                                    </div>
                                </div>
                                @else
                                     <div class="col-lg-6"></div>
                                @endif

                                @if($nextChapter)
                                    <div class="col-lg-6">
                                    <div class="blog__details__btns__item next__btn">
                                        <h4><a href="{{ route('chapters.show', $nextChapter->id) }}">Continue to Next Chapter <i class="fa-solid fa-arrow-right"></i> </a></h4>
                                        </div>
                                    </div>
                                </div>
                                @else
                                     <div class="col-lg-6"></div>
                                @endif
                            </div>

                            <div class="chapter-list">
                                @foreach($allChapters as $index => $chap)
                                    <a href="{{ route('chapters.show', $chap->id) }}" class="{{ $chap->id == $chapter->id ? 'active' : '' }}">
                                        {{ $index + 1 }}
                                    </a>
                                @endforeach
                            </div>

                            <div class="action-buttons">
                                <a href="{{ route('storydetails.show', $chapter->storydetails_id) }}" class="back-btn">Back to Story Details</a>
                                <a href="{{ route('chapters.index',$storydetails->id) }}" class="index-btn">Back to Table of Content</a>
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
                            {{-- <div class="blog__details__comment">
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
                                </div> --}}
                                {{-- <div class="blog__details__comment__item blog__details__comment__item--reply">
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
                                </div> --}}
                                {{-- <div class="blog__details__comment__item">
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
                            </div> --}}
                            {{-- <div class="blog__details__form">
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
                            </div> --}}
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