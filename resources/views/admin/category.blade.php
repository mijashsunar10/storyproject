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
                    <form action="{{route('add_category')}}" method="POST" class="custom-form">
                        @csrf
                        <div class="form-group">
                            <label for="category_name">Category</label>
                            <input type="text" name="category_name" class="form-control" id="category_name" placeholder="Enter category">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="40" rows="2" placeholder="Enter description"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-custom btn-block" value="Add Category"></input>
                        </div>
                    </form>
                </div>

            </div>

            <div>
                <div class="container mt-5">
                    <table class="table table-dark-custom table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                
                            </tr>
                        </thead>

                        @foreach($data as $datas)
                        <tbody>
                            <tr>

                                <th>{{$datas->id}}</th>

                                <td>{{$datas->category}}</td>
                                <td>{{$datas->description}}</td>
                                <td>
                                    <a href="{{route('delete_category',$datas->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{route('edit_category',$datas->id)}}">Edit</a>
                                </td>
                               
                            </tr>
                           
                        </tbody>
                        @endforeach
                    </table>
                   
                </div>
                  

                </table>
            </div>
        


       

    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    <script type="text/javascript">
    function confirmation(ev)
    {
        ev.prventDefault();
        val urlToRedirect = ev.currentTarget.getAttribute('href');
        console.log(urlToRedirect);

        swal 
        ({
            title:"Are you sure you want to delete This",
            text:"This delete will be permanent",
            icon:"warning"
            buttons:true,
            dangerMode:true,
        })

        .then((willCancel)=>
        {
            if(willCancel)
        {
            window.location.href = urlToRedirect;  
        }

        }
        )
    
    }
   
    </script>

    
    @include('admin.javascript')
   
  </body>
</html>