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
        .form
        {
            display: flex;
            align-items: center;
            justify-content: center;

        }
        .container-fluid
        {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .table_teg
        {
            text-align: center;
            margin: auto;
            border: 2px solid yellowgreen;
            margin-top: 50px;
        }

        th 
        {
            background-color:rgb(104, 184, 215) ;
            padding:15px 100px;
            font-size:20px;
            font-weight: bold;
            color: white

        }

        td
        {
            padding: 15px;
            color: white;
            border: 1px solid rgb(36, 105, 133)

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

            <div class="div_beg">

          
                <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <div class="form">
                        <input type="text" name="category">
                
                        <input type="submit" class="btn btn-primary" value="Add Category">
                    </div>
                </form>

            </div>

            <div>
                <table class="table_teg">
                    <tr>
                        <th>Category Name</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>

                    <tr>
                        <th>Lord</th>
                        
                    </tr>
                    {{-- @foreach ($data as $d)
                        
                    
                    <tr>
                        <td>{{$d->category_name}}</td>
                        <td>
                            <a onclick="confirmation(ev)" href="{{url('delete_category',$d->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                        <td>
                            <a class="btn btn-success" href="{{url('edit_category',$d->id)}}">Edit</a>
                        </td>
                    </tr>

                    @endforeach --}}

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

    
    @include('admin/javascript')
   
  </body>
</html>