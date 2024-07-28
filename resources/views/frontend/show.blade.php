{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Story Details</title>
    <style>
        .card {
            background-color: #f8f9fa;
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

        .edit-btn {
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="h3 mb-4 text-center">Story Details</h2>
                <div class="card">
                    @if($storydetails->image)
                    <img src="{{ asset('storydetails/' . $storydetails->image) }}" class="card-img-top" alt="Cover Image">
                    {{-- {{-- @endif --}}
                    {{-- <div class="card-body">
                        <h5 class="card-title">{{ $storydetails->title }}</h5>
                        <p class="card-text">{{ $storydetails->description }}</p>
                        <p><strong>Main Character:</strong> {{ $storydetails->main_characters }}</p>
                        <p><strong>Author:</strong> {{ $storydetails->author }}</p>
                        <p><strong>Category:</strong> {{($storydetails->category_id)}}</p>
                        <p><strong>Audience:</strong> {{ $storydetails->audience }}</p>
                        <p><strong>Language:</strong> {{ $storydetails->language }}</p>
                        <p><strong>Copyright:</strong> {{ $storydetails->copyright }}</p>
                        <a href="{{'edit_storydetails',$storydetails->id}}" class="btn btn-primary edit-btn mt-3">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>



 --}} 

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Story Details</title>
    @include('layouts.head')

    <style>
        .card {
            background-color: #f8f9fa;
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

        .edit-btn {
            font-size: 1rem;
        }

        .anime__details__widget ul li {
            font-size: 18px; /* Increase font size */
            padding: 10px 0; /* Increase padding */
        }
        .anime__details__widget ul {
            list-style-type: none; /* Remove list bullets */
            padding-left: 0; /* Remove default padding */
        }

        .anime__details__widget ul li {
            font-size: 18px; /* Increase font size */
            padding: 10px 0; /* Increase padding */
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts.header')
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./categories.html">Categories</a>
                        <a href="">
                            <span>{{$storydetails->category->category}}</span>
                            {{-- <span> {{ $storydetails->category ? $storydetails->category->name : 'N/A' }}</span> --}}
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="{{asset('storydetails/' . $storydetails->image) }}">
                            {{-- <a href="">
                            <div class="comment">
                                    <i class="fa fa-comments"></i> 11
                            </div>
                            </a>
                            <a href="">
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $storydetails->title }}</h3>
                               
                            </div>
                            <p>{{ $storydetails->description }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Username:</span> {{ $storydetails->user ? $storydetails->user->name : 'N/A' }}</li>
                                            <li><span>Story ID:</span> {{ $storydetails->id }}</li>
                                            <li><span>Category:</span>{{$storydetails->category->category}}</li>
                                            <li><span>Main Character:</span> {{ $storydetails->main_characters }}</li>
                                           
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Author:</span> {{ $storydetails->author }}</li>
                                            <li><span>Audience:</span> {{ $storydetails->audience }}</li>
                                            <li><span>Language:</span> {{ $storydetails->language }}</li>
                                            <li><span>Copyright:</span> {{ $storydetails->copyright }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="{{ route('storydetails.edit', $storydetails->id) }}" class="follow-btn">Edit details</a>
                                <a href="{{route('chapters.create', $storydetails->id) }}" class="watch-btn"><span>Start Writing</span> <i class="fa fa-angle-right"></i></a>
                                {{-- <a href="{{ route('chapters.create', $storydetails->id) }}" class="btn btn-primary edit-btn mt-3">Add Chapter</a> --}}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Anime Section End -->

        <!-- Footer Section Begin -->
        @include('layouts.footer')
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/player.js')}}"></script>
        <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
        <script src="{{asset('js/mixitup.min.js')}}"></script>
        <script src="{{asset('js/jquery.slicknav.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
