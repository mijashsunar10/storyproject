<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

    <style>
        table{
            border: 2px solid gray;
            text-align: center;

        }
        th
        {
            background-color: skyblue;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: white;
        }
        td {
            color: white;
            padding: 10px;
            border: 1px solid gray;
        }
        .table_center
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
            margin-bottom: 30px;


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

            <div class="table_center">      
                <table>
                <tr>
                    <th>Customer Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product Title</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Order Statuse</th>
                </tr>

        

       {{-- @include('admin.body') --}}
        @foreach($data as $data)

       

                <tr>
                    <td>{{$data->name}}</td>
                    <td>{{$data->rec_address}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->product->title}}</td>
                     <td>{{$data->product->price}}</td>
                    <td>
                        <img width="100" src="/uploads/{{$data->product->image}}" alt="">
                        
                    </td> 

                    
                    <td>
                        @if($data->status == 'in progress')
                        <span style="color:red">{{$data->status}}</span>

                        @elseif($data->status == 'Delivered')
                        <span style="color:yellow">{{$data->status}}</span>

                        @else 
                        <span style="color:skyblue">{{$data->status}}</span>
                        @endif
                    </td>
                    <td>
                        <a class="btn btn-danger btn-sm " href="{{url('on_the_way',$data->id)}}" role="button">On the way </a>
                        <a class="btn btn-success btn-sm " href="{{url('delivered',$data->id)}}" role="button">Delivered </a>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
 


    </div>
    <!-- JavaScript files-->

    </div>
    </div>

    @include('admin/javascript')
   
  </body>
</html>