<!DOCTYPE html>
<html lang="en">

  <head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li>

                            <li class="scroll-to-section"><a href="#reservation">
                                @auth
                                    <a href="{{url('/showcart',Auth::user()->id)}}">   
                                        Cart[{{$count}}]</a></li>
                                    </a> 
                                @endauth
                                @guest
                                    Cart[0]
                                @endguest
                            <li>
                                @if (Route::has('login'))
                                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                    <li>
                                        <x-app-layout></x-app-layout>
                                    </li>
                                @else
                                    <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                                @endif
                                    @endauth
                                    </div>
                                @endif
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <!--<span>Menu</span>-->
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div id="top" align="center">
        <div>
            <h1 class="h1 text-primary">Food cart</h1>
        </div>
        <table class="table table-dark table-hover table-bordered" style="width:60%">
            <tr align="center" style="background-color:black">
                <th scope="col"  style="padding:30px;color:white">Food name</th>
                <th scope="col" style="padding:30px;color:white">Price</th>
                <th scope="col" style="padding:30px;color:white">Quantity</th>
                <th scope="col" style="padding:30px;color:white">Action</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{$data->title}}</td>
                <td>{{$data->price}}</td>
                <td>{{$data->quantity}}</td>  
                <td><a href="{{url('/remove',$data->id)}}" class="btn btn-warning">Remove</a></td>              
            </tr>
            @endforeach
        </table>
        <div style="padding:30px">
            <button class="btn btn-primary" id="order">Order now</button>
        </div>
        <div class="container form bg-light rounded-lg border border-dark border-5" id="appear" style="width:40%;padding:30px;display:none">
            <div style="padding:10px"> 
                <h1 class="h2">Add your order details here!</h1>
            </div>
            <div style="padding:10px" class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <input class="form-control col-sm-10" type="text" name="name" placeholder="Name">
            </div>
            <div style="padding:10px" class="form-group row">
                <label class="col-sm-2 col-form-label">Phone</label>
                <input class="form-control col-sm-10" type="number" name="name" placeholder="Phone">
            </div>
            <div style="padding:10px" class="form-group row">
                <label class="col-sm-2 col-form-label">Address</label>
                <input class="form-control col-sm-10" type="text" name="name" placeholder="Address">
            </div>
            <div style="padding:10px">
                <input style="color:black" class="btn btn-success" type="submit" value="Confirm Order">
                <button id="close" class="btn btn-danger">Close</button>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $("#order").click(
            function(){
                $("#appear").show();
            }
        );

        $("#close").click(
            function(){
                $("#appear").hide();
            }
        );
    </script>
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>