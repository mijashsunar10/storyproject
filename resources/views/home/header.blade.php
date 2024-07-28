<header class="header_section">
    <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="{{route('home')}}">
        <span>
            <img width="100" height="50" src="{{asset('/home/images/WhatsApp Image 2024-05-08 at 18.01.56_ed8f10a8.jpg')}}" alt="">
        SImthesis
        
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class=""></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav  ">
          <li class="nav-item active">
            <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/home/shop.html')}}">
              Shop
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/home/why.html')}}">
              Why Us
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/home/testimonial.html')}}">
              Testimonial
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{asset('/home/contact.html')}}">Contact Us</a>
          </li>
        </ul>
        <div class="user_option">
          <a href="{{route('login')}}">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>
              Login
            </span>
          </a>
          <a href="">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          </a>
          <form class="form-inline ">
            <button class="btn nav_search-btn" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>

          <form action="{{route('logout')}}" method="POST">
            @csrf
            <input type="submit" name="logout">
          </form>

          
        </div>
      </div>
    </nav>
  </header>