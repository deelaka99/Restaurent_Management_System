<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller bg-dark">
      @include("admin.navbar")
      <div style="padding:20px">
        <div class="" align="center" style="padding:30px">
          <h1 class="h1"><i class="mdi mdi-emoticon mdi-36px text-warning"></i> Welcome to the Admin dashboard!!!</h1>
        </div>
        <!--users-->
        <div class="row" style="padding:10px">
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:blue">
              <div class="card-body">
                <h5 class="card-title text-center">Users Count</h5>
                <h1 class="card-text display-1 text-center">{{$userCount}}</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:green">
              <div class="card-body">
                <h5 class="card-title text-center">Admin Count</h5>
                <h1 class="card-text display-1 text-center">{{$adminCount}}</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:purple">
              <div class="card-body">
                <h5 class="card-title text-center">Current Chef Count</h5>
                <h1 class="card-text display-1 text-center">{{$chefCount}}</h1>
              </div>
            </div>
          </div>
        </div>
        <!--food-->
        <div class="row" style="padding:10px">
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:pink">
              <div class="card-body">
                <h5 class="card-title text-center">Food Count</h5>
                <h1 class="card-text display-1 text-center">{{$foodCount}}</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:brown">
              <div class="card-body">
                <h5 class="card-title text-center">Order Count</h5>
                <h1 class="card-text display-1 text-center">{{$orderCount}}</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card d-flex justify-content-center align-items-center" style="background-color:orange">
              <div class="card-body">
                <h5 class="card-title text-center">Reservtion Count</h5>
                <h1 class="card-text display-1 text-center">{{$reservationCount}}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include("admin.adminscript")
  </body>
</html>