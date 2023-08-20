<!-- ***** Menu Area Starts ***** -->
<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of foods with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                @foreach($data as $data)
                    <div class="item">
                        <div style="background-image: url('/foodimage/{{$data->image}}');" class='card'>
                            <div class="price"><h6>Rs.{{$data->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$data->title}}</h1>
                              <p class='description'>{{$data->description}}</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>                            
                        </div>
                        <div class="container" style="padding:10px; background-color: #EFDB30">
                            <form class="text-center"action="{{url('/addcart',$data->id)}}" method="post" style="width:70%;">
                            @csrf
                                <input type="number" name="quantity" min="1" value="1"  class="form-control text-center">
                                <input style="color:black;" type="submit" value="Add To Cart" class="btn btn-success form-control">
                            </form>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->