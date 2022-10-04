@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-profile">
      <div class="ulogo">
        <a href="index.html">
          <div class="d-flex align-items-center justify-content-center">					 	
            <img src="../images/logo-dark.png" alt="">
            <h3><b>Easy</b> Admin</h3>
          </div>
        </a>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">  
          <li class="{{ ($route == 'dashboard')?'active':'' }}">
            <a href="{{ route('dashboard') }}">
              <i data-feather="pie-chart"></i>
              <span>Dashboard</span>
            </a>
          </li>  
      
          <li class="treeview {{ ($prefix == '/users')?'active':'' }}" >
            <a href="#">
              <i data-feather="message-circle"></i>
              <span>Manage User</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('user.view') }}"><i class="ti-more"></i>view User</a></li>
              <li><a href="{{ route('user.add') }}"><i class="ti-more"></i>Add User</a></li>
            </ul>
          </li> 

          <li class="treeview {{ ($prefix == '/profiles')?'active':'' }}">
            <a href="#">
              <i data-feather="mail"></i> <span>Manage Profile</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('profile.view') }}"><i class="ti-more"></i>Your Profile</a></li>
              <li><a href="{{ route('password.view') }}"><i class="ti-more"></i>Change Password</a></li>
            </ul>
          </li>

          <li class="treeview {{ ($prefix == '/setups')?'active':'' }}">
            <a href="#">
              <i data-feather="credit-card"></i> <span>Setup Management</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('student.class.view') }}"><i class="ti-more"></i>Student Class</a></li>
              <li><a href="{{ route('student.year.view') }}"><i class="ti-more"></i>Student Year</a></li>
            </ul>
          </li>

          <li class="header nav-small-cap">User Interface</li>

          <li class="treeview">
            <a href="#">
              <i data-feather="grid"></i>
              <span>Components</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
              <li><a href="components_badges.html"><i class="ti-more"></i>Badge</a></li>
              <li><a href="components_buttons.html"><i class="ti-more"></i>Buttons</a></li>
              <li><a href="components_sliders.html"><i class="ti-more"></i>Sliders</a></li>
              <li><a href="components_dropdown.html"><i class="ti-more"></i>Dropdown</a></li>
              <li><a href="components_modals.html"><i class="ti-more"></i>Modal</a></li>
              <li><a href="components_nestable.html"><i class="ti-more"></i>Nestable</a></li>
              <li><a href="components_progress_bars.html"><i class="ti-more"></i>Progress Bars</a></li>
            </ul>
          </li>
    </ul>
  </section>
</aside>