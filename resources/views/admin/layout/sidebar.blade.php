 <!-- Main Sidebar Container -->
 <aside class="main-sidebar text-light sidebar-dark-indigo elevation-4">
   <!-- Brand Logo -->
   <a href="{{ url('/adminpanel') }}" class="brand-link nav-pills">
      <img src="{{ asset('admin/images/bracIED.jpg') }}" alt="BracIED LOGO" class="brand-image img-circle elevation-3" style="opacity: 1">
      <span class="brand-text font-weight-light">Brac IED E-commerce </span>
    </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('admin/images/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ url('/adminpanel') }}" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item menu-open">
            <a href="{{ url('/adminpanel') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
         
     
         
          <li class="nav-item">
          <a href="{{ url('/adminpanel/users') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Users 
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ url('/adminpanel/product-category') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Product Category 
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{ url('/adminpanel/products') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
              Products 
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>