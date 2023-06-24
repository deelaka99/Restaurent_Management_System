<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
        <div class="container-scroller">
            @include("admin.navbar")
            <div style="position:relative; top:60px;">
                <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title</label>
                        <input style="color:blue" type="text" name="title" placeholder="Write a title" required>
                    </div>
                    <div>
                        <label>Price</label>
                        <input style="color:blue" type="number" name="price" placeholder="Price" required>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <label>Description</label>
                        <input style="color:blue" type="text" name="description" placeholder="Description" required>
                    </div> 
                    <div>
                        <input style="background:grey" type="submit" value="Save">
                    </div>  
                </form>
                <!--Form ends from hre-->
                <!--Deleting foods-->
                <div>
                    <table bgcolor="black" class="table">
                        <tr>
                            <th style="padding:30px">Food Name</th>
                            <th style="padding:30px">Price</th>
                            <th style="padding:30px">Description</th>
                            <th style="padding:30px">Image</th>
                            <th style="padding:30px">Action1</th>
                            <th style="padding:30px">Action2</th>
                        </tr>
                        @foreach($data as $data)
                        <tr align="center">
                            <td>{{$data->title}}</td>
                            <td>Rs.{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td><img src="/foodimage/{{$data->image}}"></td>
                            <td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
                            <td><a href="{{url('/updateview',$data->id)}}">Update</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>