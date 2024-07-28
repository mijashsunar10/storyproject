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
                        {{-- <span>{{$storydetails->category_id}}</span> --}}
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
                            <a href="">
                            <div class="comment">
                                    <i class="fa fa-comments"></i> 11
                            </div>
                            </a>
                            <a href="">
                            <div class="view"><i class="fa fa-eye"></i> 9141</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>{{ $storydetails->title }}</h3>
                                <h2>
                                    <span> {{ $storydetails->title }}</span>
                                </h2>
                            </div>
                            <p>{{ $storydetails->description }}</p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Story ID:</span> {{ $storydetails->id }}</li>
                                            <li><span>Main Character:</span> {{ $storydetails->main_characters }}</li>
                                            <li><span>Author:</span> {{ $storydetails->author }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Audience:</span> {{ $storydetails->audience }}</li>
                                            <li><span>Language:</span> {{ $storydetails->language }}</li>
                                            <li><span>Copyright:</span> {{ $storydetails->copyright }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="{{'edit_storydetails',$storydetails->id}}" class="follow-btn">Edit details</a>
                                <a href="{{url('storyreading')}}" class="watch-btn"><span>Start Reading</span> <i class="fa fa-angle-right"></i></a>
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
