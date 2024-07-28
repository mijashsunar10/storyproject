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

        input[type="search"] {
          width: 500px;
          height: 50px;
          margin-left: 50 px; 


        }

    </style>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> --}}
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
          <div class="container-fluiwd">

            <form action="{{url('search_product')}}" method="GET">
              @csrf
              <input type="serach" name="search">
              <input type="submit" class="btn btn-secondary" value="Search">
            </form>
          

            <table class="table">
                <thead>
                    <tr>
                        
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Delete</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $d)
                    <tr>
                        <td>{{$d->title}}</td>
                        <td>{{$d->description}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{$d->quantity}}</td>
                        <td>{{$d->category}}</td>
                        <td>
                            <img height="50" width="50" src="uploads/{{$d->image}}" alt="">
                        </td>
                        <td>
                          <a href="{{url('delete_product',$d->id)}}">
                            <button class="btn btn-danger">Delete</button>
                          </a>
                        </td>

                        
                        
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

            {{-- {{$data->link()}} --}}
        

       
    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    @include('admin/javascript')
   
  </body>
</html>