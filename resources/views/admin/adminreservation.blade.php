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
                <div>
                  <h1 align="center" class="h1 display-3">Reservations</h1>
                </div>
                <table class="table table-hover" style="background-color:black">
                    <tr>
                        <th style="padding:30px;color:white">Name</th>
                        <th style="padding:30px;color:white">Email</th>
                        <th style="padding:30px;color:white">Phone</th>
                        <th style="padding:30px;color:white">Date</th>
                        <th style="padding:30px;color:white">Time</th>
                        <th style="padding:30px;color:white">Message</th>
                    </tr>
                    @foreach($data as $data)
                    <tr align="center">
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->date}}</td>
                        <td>{{$data->time}}</td>
                        <td>{{$data->message}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
      <!-- page-body-wrapper ends -->
    @include("admin.adminscript")
  </body>
</html>