
<!DOCTYPE html>
<html>
  <head> 

    @include('profile.css')

  </head>
  <body>


    <!-- Header-->
    @include('profile.header')
  
    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
      @include('profile.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

        

        {{-- @include('admin.body') --}}

    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    @include('aprofilejavascript')
   
  </body>
</html>



<form method="POST" action="{{ route('logout') }}">
    @csrf

   <input type="submit" name="logout">
</form>