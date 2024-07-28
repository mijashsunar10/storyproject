



<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

    <style type="text/css">
        input[type="text"]
         {
            height: 40px;
            width: 400px;

        }
         .div_beg 
        {
            display: flex;
            align-items: center;
            justify-content: center
        } 
        
       
      body {
            /* background-color: #000; */
            color: #fff;
        }
        .table-dark-custom {
            /* background-color: #1a1a1a; */
        }
        .table-dark-custom th,
        .table-dark-custom td {
            border-color: #444;
            color: #fff;
        }
        .table-dark-custom thead th {
            background-color: #333;
        }
        .table-dark-custom tbody tr:nth-of-type(odd) {
            background-color: #2a2a2a;
        }
        .table-dark-custom tbody tr:hover {
            background-color: #444;
        }

        .custom-form {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 50px auto;
            max-width: 500px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .form-control {
            /* background-color: #333; */
            border: 1px solid #444;
            color: #000; /* Text color set to black */
        }
    </style>

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

            <div class="div_beg ">

          
                <div class="container">
                    <form action="{{route('update_category',$data->id)}}" method="POST" class="custom-form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category</label>
                            <input type="text" name="category_name" class="form-control" id="category_name" value="{{$data->category}}" >
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="40" rows="2" value="{{$data->description}}" ></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-custom btn-block" value="Update Category"></input>
                        </div>
                    </form>
                </div>

            </div>

          


       

    </div>
    <!-- JavaScript files-->

    </div>
    </div>


    
    @include('admin.javascript')
   
  </body>
</html>