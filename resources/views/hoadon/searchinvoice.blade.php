@extends('layouts.main')

@section('content')
<br>
<form method="POST" action="{{ route('searchInvoice') }}" class="form-inline" role="form">
  @csrf 
  <div class="form-group">
    Từ Ngày  
    <input type="date" class="form-control" name="fromdate" id="fromdate" >
  </div>
  <div class="form-group">
    Đến Ngày  
    <input type="date" class="form-control" name="todate" id="todate">
  </div>
    
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>

  </button>


</form>
<br>

<table class="table table-hover">
    <thead>
      <tr>
       
        <th scope="col" class="text-center" >ID</th>
        <th scope="col" class="text-center">Ngày Lập</th>
        <th scope="col" class="text-center">Tên Người Nhận</th>
        
        <th scope="col" class="text-center">Địa Chỉ Nhận </th>
        <th scope="col" class="text-center">Số Điện Thoại</th>
        {{-- <th scope="col">Loai sản phẩm</th> --}}
        {{-- <th class="text-center">Mô Tả</th> --}}
        <th scope="col" class="text-center">Tổng Tiền</th>
        <th scope="col" class="text-center">Trạng Thái</th>
        <th scope="col" class="text-center">Ngày Tạo</th>
        <th scope="col" class="text-center">Ngày Update</th>
        <th class="text-center">Chức Năng</th>
      </tr>
    </thead>
    @foreach ($invoi as $a )
    <tbody>
      <tr class="text-center">
      
        <td>{{ $a->id  }}</td>
        <td>{{ $a->issuedDate  }}</td>
        
        {{-- <td>{{ $loai->imageUrl  }}</td> --}}
        
            <td>{{ $a->nameShopping  }}</td>
            <td>{{ $a->addressShoping  }}</td>
            <td>{{ $a->phoneShoping  }}</td>
            <td>{{number_format($a->total)}} VND </td>
            
            <td >
                @if ($a->status==1)
                <span class="badge badge-warning">Chờ Xác Nhận</span>
                
              @elseif ($a->status==2)
              <span class="badge badge-primary">Đã Lấy Hàng</span>
              @elseif ($a->status==3)
              <span class="badge badge-success">Đã Giao</span>
              @else
              <span class="badge badge-danger">Đã Hủy</span>
              @endif
            </td>
            {{-- <td style="font-size: 15px;">{{ $sp->description  }}</td> --}}
            <td>{{ $a->created_at }}</td>
            <td>{{ $a->updated_at }}</td>
            {{-- <td>{{ $sp->productTypeid }}</td> --}}
        <td>
            
          <a href="{{ route('editInvoice',[$a->id]) }}" class="btn btn-primary btn-sm ">
          <i class="fa fa-edit"></i></a>
          <a href="{{ route('detailInvoive',[$a->id]) }}" class="btn btn-success btn-sm ">
            <i class="fas fa-eye"></i></a>
          
        </td>
        
      </tr>
      
    </tbody>
    @endforeach
  </table>

@endsection