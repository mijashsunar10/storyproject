<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->

  @include('home.css')
  
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <!-- slider section -->

   @include('home.slider')

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

 @include('home.body')

  <!-- end shop section -->


  <!-- contact section -->

  @include('home.contact')

  <br><br><br>

  <!-- end contact section -->

   

  <!-- info section -->

 @include('home.footer')

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </script>
  <script src="js/custom.js"></script>

</body>

</html>