@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-info">
        <div class="inner">
          <h3>{{ $tongsp }}</h3>

          <p>Tổng sản phẩm đang bán</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-success">
        <div class="inner">
          <h3>{{ $tonghd }}</sup></h3>

          <p>Tổng số hóa đơn đã giao</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
       
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-warning">
        <div class="inner">
          <h3>{{ $tonguser }}</h3>

          <p>Tổng số tài khoản đăng kí</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-danger">
        <div class="inner">
          <h3>{{ number_format($t) }} VNĐ</h3>

          <p>Tổng tiền bán hàng</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
      
      </div>
    </div>
    <!-- ./col -->
  </div>

@endsection