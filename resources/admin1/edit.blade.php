<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

    <style type="text/css">
        input[type="text"]
         {
            height: 35px;
            width: 400px;

        }
        .div_beg 
        {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .update 
        {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
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
            <div class="update">

            <h1>Update Category</h1>
            <div class="div_deg">
            <form action="{{url('update_category',$data->id)}}" method="POST">
                @csrf
                <input type="text" name="category" value="{{$data->category_name}}">
                <input type="submit" class="btn btn-primary" value="Update Category">
            </form>

            </div>
        </div>

           



       

            </div>

        </div>
      </div>

  
    

    
    @include('admin/javascript')
   
  </body>
</html>