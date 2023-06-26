<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller bg-dark">
            @include("admin.navbar")
            <div style="padding:30px" >
            <div class="card">
                <div class="card-header text-center">
                  <h1 align="center" class="h1">Update Current Foods</h1>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                          <input class="form-control" style="color:lightgreen" type="text" name="name" value="{{$data->name}}" placeholder="Enter new name" required>
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Speciality</label>
                        <div class="col-sm-9">
                          <input class="form-control" style="color:lightgreen" type="text" name="speciality" value="{{$data->speciality}}" placeholder="Enter speciality" required>
                        </div>
                    </div>              
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Old Image</label>
                        <div class="col-sm-9">
                          <img height="70" width="70" src="/chefimage/{{$data->image}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Image</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="file" name="image" required>
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="submit" value="Update chef" class="btn btn-primary">
                          </div>
                      </div>  
                    </form>
                  </blockquote>
                </div>
              </div>
                <!--Form ends from hre-->
            </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>