<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top container bg-white">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/klassy-logo.png" align="klassy cafe html template"></a>
          <p class="text-dark bold" style="padding:10px;">Admin Dashboard</p>
        </div>
        <ul class="nav">          
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-account mdi-24px"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/foodmenu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-food mdi-24px"></i>
              </span>
              <span class="menu-title">FoodMenu</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewchef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chef-hat mdi-24px"></i>
              </span>
              <span class="menu-title">Chefs</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/viewreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-book mdi-24px"></i>
              </span>
              <span class="menu-title">Reservations</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/orders')}}">
              <span class="menu-icon">
                <i class="mdi mdi-note mdi-24px"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>
        </ul>
      </nav>