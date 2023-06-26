<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
        <div class="container-scroller">
            @include("admin.navbar")
            <div style="padding:30px">
                <div>
                    <h1 class="h1" align="center">Current orders</h1>
                </div>
                <div style="padding:10px">
                    <form action="{{url('/search')}}" method="get">
                        @csrf
                        <input class="rounded border border-primary border-3 text-dark" type="text" name="search" placeholder="Search here...">
                        <button class="btn btn-success" type="submit"><i class="mdi mdi-book-search mdi-36px"></i></button>
                    </form>
                </div>
                <table class="table table-dark table-hover">
                    <tr>
                        <th style="padding:30px;color:white">Name</th>
                        <th style="padding:30px;color:white">Phone</th>
                        <th style="padding:30px;color:white">Address</th>
                        <th style="padding:30px;color:white">Food name</th>
                        <th style="padding:30px;color:white">Price</th>
                        <th style="padding:30px;color:white">Quantity</th>
                        <th style="padding:30px;color:white">Total price</th>
                    </tr>
                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->foodname}}</td>
                        <td>Rs.{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>Rs.{{$data->price * $data->quantity}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    @include("admin.adminscript")
  </body>
</html>