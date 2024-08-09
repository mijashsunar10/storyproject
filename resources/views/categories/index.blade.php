{{--  --}}


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
   
    
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Simthesis</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a1d8eeb7ff.js" crossorigin="anonymous"></script>


    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/plyr.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <style>
         .d-flex
        {
            height: 100vh;
            width: 100%;
        }
        .btn-rounded 
        {
            border-radius: 50px;
        }


      
.card {
    border-radius: 15px;
    overflow: hidden;
    /* font-family: 'Arial', sans-serif; */
}

.card img {
    height: 100%;
    object-fit: cover;
}

.card-title {
    font-weight: bold;
    font-size: 1.5rem;
}

.card-text {
    color: #555;
}

.card-text .text-muted {
    font-size: 0.9rem;
}

.badge.bg-secondary {
    background-color: #6c757d;
}

.badge.bg-success {
    background-color: #28a745;
}

.btn-dark {
    background-color: #343a40;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    font-size: 0.8rem;
    font-weight: bold
}

.btn-dark:hover {
    background-color: #23272b;
}

.more-details {
    display: inline-block;
    margin-top: 10px;
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
}

.more-details:hover {
    text-decoration: underline;
}

.modal-content {
    border-radius: 15px;
}

.modal-header {
    border-bottom: none;
}

.modal-footer {
    border-top: none;
}

    </style>

<style>
    .product__item__text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        height: 100%;
    }
    .product__item__text ul li 
    {
        /* padding: rem ; */
        margin: 0rem 1rem;
        font-size: 1rem;
    }

    .product__item {
            margin-bottom: 30px;
        }
        .product__item__pic {
            height: 300px;
            background-size: cover;
            background-position: center;
            object-fit: cover
            cursor: pointer;
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

    <!-- Product Section Begin -->



    



       
        
      
       

    


    

    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending__product">
                        @foreach ($categories as $category)
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8">
                                    <div class="section-title">
                                        <h4>{{ $category->category}}</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4">
                                    <div class="btn__all">
                                        <a href="{{route('categories.show',$category->id)}}" class="primary-btn">View All <span><i class="fa-solid fa-arrow-right"></i> </span></a>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                @forelse ($category->stories as $story)
                                    <div class="col-lg-3 col-md-6 col-sm-12">
                                        <div class="product__item">
                                            @if ($story->image)
                                                <div class="product__item__pic" style="background-image: url('{{ asset('storydetails/' . $story->image) }}');"
                                                     data-toggle="modal" data-target="#storyModal{{ $story->id }}">
                                                    {{-- <div class="ep">18 / 18</div>
                                                    <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                                    <div class="view"><i class="fa fa-eye"></i> 9141</div> --}}
                                                </div>
                                            @endif
                                            <div class="product__item__text">
                                                {{-- <ul>
                                                    <li>Active</li>
                                                    <li>Story</li>
                                                </ul> --}}
                                                <h5 class="mb-3"><a href="#">{{ $story->title }}</a></h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <!-- Modal -->
                                    <div class="modal fade" id="storyModal{{ $story->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $story->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content" style="background:whitesmoke">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel{{ $story->id }}">{{ $story->title }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="card shadow-sm">
                                                        <div class="row g-0">
                                                            <div class="col-md-4">
                                                                <img src="{{ asset('storydetails/' . $story->image) }}  " class="img-fluid rounded-start" alt="Story Image">
                                                            </div>
                                                            <div class="col-md-8">
                                                                <div class="card-body mb-0 p-1">
                                                                    <h5 class="card-title">{{ $story->title }}</h5>
                                                                    <p class="card-text"><strong>Main Characters: </strong>{{ $story->main_characters }}</p>
                                                                    <p class="card-text"><strong>Author: </strong>{{ $story->author }}</p>
                                                                    <p class="card-text"><strong>Audience: </strong>{{ $story->audience }}</p>
                                                                    <p class="card-text"><strong>Language: </strong>{{ $story->language }}</p>
                                                                    <p class="card-text"><strong>Copyright: </strong>{{ $story->copyright }}</p>
                                                                    <p class="card-text">{{ $story->description }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a href="{{ url('stroyintro') }}" class="btn btn-danger">Read Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <p style="color: white; font-weight:bold; margin-bottom:2rem; font-size:1.5rem;padding-left:5rem">No stories available in this category.</p>
                                @endforelse
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- Modal -->
    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="page-up">
            <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer__nav">
                        <ul>
                            <li class="active"><a href="./index.html">Homepage</a></li>
                            <li><a href="./categories.html">Categories</a></li>
                            <li><a href="./blog.html">Our Blog</a></li>
                            <li><a href="#">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/player.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html> 