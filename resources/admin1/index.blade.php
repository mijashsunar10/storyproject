<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

  </head>
  <body>


    <!-- Header-->
    @include('admin.header')
  
    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

        

        @include('admin.body')

    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    @include('admin/javascript')
   
  </body>
</html>