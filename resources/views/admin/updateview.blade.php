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
            <div style="padding:30px">
              <div class="card">
                <div class="card-header text-center">
                  <h1 align="center" class="h1">Update Current Foods</h1>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                  <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Title</label>
                        <div class="col-sm-9">
                          <input class="form-control" style="color:lightgreen" type="text" name="title" value="{{$data->title}}" placeholder="Write a title" required>
                        </div>
                    </div >
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                          <input class="form-control" style="color:lightgreen" type="number" name="price" value="{{$data->price}}" placeholder="Price" required>
                        </div>
                    </div>              
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Old Image</label>
                        <div class="col-sm-9">
                          <img height="200" width="200" src="/foodimage/{{$data->image}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">New Image</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="file" name="image" required>
                        </div>
                      </div>
                      <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Description</label>                        
                          <div class="col-sm-9">
                            <input class="form-control" style="color:lightgreen" type="text" name="description" value="{{$data->description}}" placeholder="Description" required>
                          </div>
                      </div> 
                      <div class="form-group row">
                          <div class="col-sm-9">
                            <input type="submit" value="Update food" class="btn btn-primary">
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