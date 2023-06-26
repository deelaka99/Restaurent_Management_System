<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="">
        <div class="container-scroller bg-dark">
            @include("admin.navbar")
              <div class="card bg-dark" style="padding:20px">
                <div class="card-header text-center">
                  <h1 align="center" class="h1">Adding New Chefs</h1>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0 rounded" style="background-color:black">
                  <form action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Name</label>
                        <div class="col-sm-8">
                          <input class="form-control" style="color:lightgreen" type="text" name="name" placeholder="Enter name" required>
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Speciality</label>
                        <div class="col-sm-8">
                          <input class="form-control" style="color:lightgreen" type="text" name="speciality" placeholder="Enter speciality" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Image</label>
                        <div class="col-sm-8">
                          <input class="form-control" type="file" name="image" required>
                        </div>
                      </div>      
                      <div class="form-group row">
                          <div class="col-sm-8">
                            <input type="submit" value="Add Chef" class="btn btn-primary">
                          </div>
                      </div>  
                    </form>
                  </blockquote>
                </div>
              </div>
                <div style="padding:20px">
                    <div>
                      <h1 align="center">Currently added Chefs</h1>
                    </div>
                    <table border="1" class="table table-hover" style="background-color:black">
                        <tr>
                            <th scope="col" style="padding:30px;color:white">Chef Name</th>
                            <th scope="col" style="padding:30px;color:white">Speciality</th>
                            <th scope="col" style="padding:30px;color:white">Image</th>
                            <th scope="col" style="padding:30px;color:white">Action1</th>
                            <th scope="col" style="padding:30px;color:white">Action2</th>
                        </tr>
                        @foreach($data as $data)
                            <tr align="center">
                                <td>{{$data->name}}</td>
                                <td>{{$data->speciality}}</td>
                                <td><img src="/chefimage/{{$data->image}}" height="100" width="100"></td>
                                <td><button class="btn btn-success"><a style="text-decoration:none;color:white" href="{{url('/updatechef',$data->id)}}">Update</a></button></td>
                                <td><button class="btn btn-danger"><a style="text-decoration:none;color:white" href="{{url('/deletechef',$data->id)}}">Delete</a></button></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>