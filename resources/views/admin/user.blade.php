<x-app-layout></x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    @include("admin.admincss")
</head>
<body>
    <div class="container-scroller">
        @include("admin.navbar")
        <div style="padding:30px">
            <div style="padding:10px">
                <h1 align="center" class="h1">Registered Users</h1>
            </div>
            <table class="table table-dark table-hover">
                <tr class="bg-success">
                    <th style="padding:30px;color:white">Name</th>
                    <th style="padding:30px;color:white">Email</th>
                    <th style="padding:30px;color:white">Action</th>
                </tr>

                @foreach($data as $data)
                <tr align="center">
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