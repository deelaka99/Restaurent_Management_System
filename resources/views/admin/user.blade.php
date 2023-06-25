<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="position:relative; top:60px; right:-150px">
            <div>
                <h1 align="center">Registered Users</h1>
            </div>
            <table border="1" class="table table-secondary table-hover">
                <tr bgcolor="darkgrey">
                    <th style="padding:20px;color:black">Name</th>
                    <th style="padding:20px;color:black">Email</th>
                    <th style="padding:20px;color:black">Action</th>
                </tr>

                @foreach($data as $data)
                <tr align="center" bgcolor="black">
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    @if($data->userType=="0")
                        <td><button class="btn btn-danger"><a style="text-decoration:none;color:white" href="{{url('/deleteuser',$data->id)}}">Delete</a></button></td>
                    @else
                        <td><a>Not Allowed</a></td>
                    @endif 
                </tr>
                @endforeach

            </table>
        </div>
    </div>
    @include("admin.adminscript")
</body>
</html>