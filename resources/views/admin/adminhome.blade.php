<x-app-layout></x-app-layout> 
<!DOCTYPE html>
<html lang="en">
  <head>
    @include("admin.admincss")
  </head>
  <body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div class="" align="center" style="padding:30px">
          <h1 class="h1"><i class="mdi mdi-emoticon mdi-36px text-warning"></i> Welcome to the Admin dashboard!!!</h1>
        </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include("admin.adminscript")
  </body>
</html>