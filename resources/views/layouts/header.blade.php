<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                   
                    <a href="{{route('storyindex')}}" >
                        <span class="text-light fs-4 fw-bold " style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif6"><i class="fa-solid fa-book-open-reader gap  pr-2"></i>SIMTHESIS</span>
                    </a>
                    
                </div>
            </div>
            <div class="col-lg-8">
                <div class="header__nav">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="{{route('storyindex')}}">Home</a></li>
                            <li><a href="{{url('fourlayer')}}">Categories<span class="arrow_carrot-down"></span></a>
                                <ul class="dropdown">
                                    <li><a href="{{url('fourlayer')}}">Science Fiction</a></li>
                                    <li><a href="{{url('fourlayer')}}">Comedy</a></li>
                                    <li><a href="{{url('fourlayer')}}">Love</a></li>                                 
                                     
                                    <li><a href="{{url('fourlayer')}}">Fantasy</a></li>                                  
                                    
                                    <li><a href="{{url('signup')}}">Sign Up</a></li>
                                    <li><a href="{{url('fourlayer')}}">Mystery</a></li>
                                    <li><a href="{{url('fourlayer')}}">Mythology</a></li>
                                    <li><a href="{{url('fourlayer')}}">Legend</a></li>
                                    <li><a href="{{url('fourlayer')}}">Fairy Tale</a></li>
                                    <li><a href="{{url('fourlayer')}}">Historical</a></li>
                                    <li><a href="{{url('fourlayer')}}">Drama</a></li>
                                    <li><a href="{{url('fourlayer')}}">Fable</a></li>
                                </ul>

                              

                            </li>
                            
                            {{-- <li><a href="{{route('storydetails.create')}}">Write</a></li> --}}
                            <li><a href="{{url('fourlayer')}}">Read</a></li>
                            {{-- <li><a href="{{route('storydetails.create')}}">Write</a></li> --}}
                            <li><a href="{{route('storydetails_create')}}">Write</a></li>
                           <li> <a href="{{ route('categories.index') }}">View Categories</a> </li>
                        </ul>
                    </nav>
                </div>
            </div>  
            <div class="col-lg-2">
                <div class="header__right">
                    {{-- <a href="#" class="search-switch " styrl><span><i class="fa-solid fa-magnifying-glass"></i></span></a> --}}
                    {{-- <a href="{{route('profile')}}"><span ><i class="fa-regular fa-user"></i></span></a> --}}

                    {{-- <a class="nav-link" href="{{ route('user.stories.index') }}" ><span ><i class="fa-regular fa-user"></i></span></a> --}}

                    <a href="#" class="search-switch"><span class=""></span><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="{{route('user.stories.index') }}"><span class=""><i class="fa-regular fa-user"></i></span></a>

                    {{-- <a href="#" class="search-switch"><span class="icon_search"></span></a>
                    <a href="{{route('register')}}"><span class="icon_profile"></span></a> --}}
                </div>
            </div>
        </div>
        <div id="mobile-menu-wrap"></div>
    </div>
</header>