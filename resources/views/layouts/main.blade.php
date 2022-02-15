  
<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
      
        <a class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" href="#">
          
          {{ session()->get('acc_name')}}
        </a>
        <div class="dropdown-menu">
          <a href="{{ route('logout') }}" class="dropdown-item">
            Đăng Xuất
           
          </a>
         
       
            <!-- Message End -->
         
      </li>
      <!-- Notifications Dropdown Menu -->
      
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('slidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">{{ $title }}</h3>
                
              </div>
              @yield('content')
              
            
            </div>
            <!-- /.card -->
            
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
            

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
</div>
<!-- ./wrapper -->

<!-- jQuery -->
@include('partials.footer')
</body>
</html>


