<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
            <div class="card">
                <div class="card-header text-center">
                  <h1 align="center">Update Current Foods</h1>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <form action="{{url('/updatefoodchef',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input class="form-control" style="color:lightgreen" type="text" name="name" value="{{$data->name}}" placeholder="Enter new name" required>
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Speciality</label>
                        <div class="col-sm-10">
                          <input class="form-control" style="color:lightgreen" type="text" name="speciality" value="{{$data->speciality}}" placeholder="Enter speciality" required>
                        </div>
                    </div>              
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Old Image</label>
                        <div class="col-sm-10">
                          <img height="200" width="200" src="/chefimage/{{$data->image}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">New Image</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" name="image" required>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Description</label>                        
                          <div class="col-sm-10">
                            <input class="form-control" style="color:lightgreen" type="text" name="description" value="{{$data->description}}" placeholder="Description" required>
                          </div>
                      </div> 
                      <div class="form-group row">
                          <div class="col-sm-10">
                            <input type="submit" value="Update chef" class="btn btn-primary">
                          </div>
                      </div>  
                    </form>
                  </blockquote>
                </div>
              </div>
                <!--Form ends from hre-->
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>