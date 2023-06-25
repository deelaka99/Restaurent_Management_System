<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
        <div class="container-scroller">
            @include("admin.navbar")
            <div style="position:relative; top:60px;">
              <div class="card">
                <div class="card-header text-center">
                  <h1 align="center">Adding New Foods</h1>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input class="form-control" style="color:lightgreen" type="text" name="title" placeholder="Write a title" required>
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Price</label>
                        <div class="col-sm-10">
                          <input class="form-control" style="color:lightgreen" type="number" name="price" placeholder="Price" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" name="image" required>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Description</label>                        
                          <div class="col-sm-10">
                            <input class="form-control" style="color:lightgreen" type="text" name="description" placeholder="Description" required>
                          </div>
                      </div> 
                      <div class="form-group row">
                          <div class="col-sm-10">
                            <input type="submit" value="Save" class="btn btn-primary">
                          </div>
                      </div>  
                    </form>
                  </blockquote>
                </div>
              </div>        
                <!--Form ends from hre-->
                <!--Deleting foods-->
                <div>
                  <div>
                    <h1 align="center">Currently added Foods</h1>
                  </div>
                    <table class="table table-dark table-hover">
                      <thead>
                        <tr scope="">
                            <th scope="col" style="padding:30px;color:white">Food Name</th>
                            <th scope="col" style="padding:30px;color:white">Price</th>
                            <th scope="col" style="padding:30px;color:white">Description</th>
                            <th scope="col" style="padding:30px;color:white">Image</th>
                            <th scope="col" style="padding:30px;color:white">Action1</th>
                            <th scope="col" style="padding:30px;color:white">Action2</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr align="center">
                            <td scope="row">{{$data->title}}</td>
                            <td>Rs.{{$data->price}}</td>
                            <td>{{$data->description}}</td>
                            <td><img src="/foodimage/{{$data->image}}"></td>
                            <td><button class="btn btn-danger"><a style="text-decoration:none;color:white" href="{{url('/deletemenu',$data->id)}}">Delete</a><button></td>
                            <td><button class="btn btn-success"><a style="text-decoration:none;color:white" href="{{url('/updateview',$data->id)}}">Update</a></button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
            
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>