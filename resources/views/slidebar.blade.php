<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link">
    {{-- <img src={{ asset("Admin/dist/img/AdminLTELogo.png") }} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
    <span class="brand-text font-weight-light">Trang Chủ</span>
  </a>

  <!-- Sidebar -->
  
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
  

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      
      
      
      <a href="{{ route('viewproduct') }}" class="nav-link">    
        <p>
         Sản Phẩm
        </p>
      </a>
      <a href="{{ route('viewproducttype') }}" class="nav-link">  
        <p>
          Loại Sản Phẩm
        </p>
      </a>
      <a href="{{ route('viewinvoice') }}" class="nav-link">
            
        <p>
          Hóa Đơn
        </p>
      </a>
    </a>
 {{--    <a href="home" class="nav-link">
          
      <p>
        Tài Khoản
      </p>
    </a>
     --}}
    
    </nav>
    
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>