<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')
    
    <style>
        .div_beg
        {
            display: flex;
            align-items: center;

            justify-content: center;
            margin-top: 60px;
        }

        h1 
        {
            color:white;
            margin: auto;

        }

        label
        {
            display: inline-block;
            width: 200px;
            font-size: 15px;
            color: white;

        }

        input[type='text']
        {
            width: 350px;
            height: 50px;

        }
        textarea
        {
            width: 400px;
            height: 80px;
        }
        .input_deb
        {
            padding: 15px;

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

            <h1>
                Add Product
            </h1>
            <div class="div_beg">
               
                <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">  
                    @csrf
                        <div class="input_deb">
                        <label for="">Product Title</label>
                        <input type="text" name="title" id="">
                    </div>

                    <div class="input_deb">
                        <label for="">Description</label>
                       <textarea name="description" required></textarea>
                    </div>

                    <div>
                        <label for="">Price</label>
                        <input type="text" name="price" id="">
                    </div>

                    <div class="input_deb">
                        <label for="">Quantity</label>
                        <input type="number" name="qty" id="">
                    </div>

                    <div class="input_deb">
                        <label for="">Product Category</label>
                        <select name="category" id="">
                            <option value="">Select an option</option>
                            @foreach($data as $category)
                            {
                                <option value="{{$category->category_name}}" style="color: black">{{$category->category_name}}</option>
                            }
                            @endforeach

                        </select>   
                       
                    </div>
                    
                    <div class="input_deb">
                        <label for="">Product Image</label>
                        <input type="file" name="image" id="">
                    </div>

                    <div class="input_deb">
                        <input class="btn btn-success" type="submit" value="Add Product">
                    </div>
                </form>
            </div>



    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    @include('admin/javascript')
   
  </body>
</html>