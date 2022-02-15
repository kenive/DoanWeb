@extends('layouts.main')

@section('content')

{{-- <form  action="" class="form-inline" role="form">
  <div class="form-group">
    <input class="form-control" name="key" placeholder="Tìm Theo Tên">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>

  </button>


</form> --}}


<table class="table table-hover">
    <thead>
      <tr>
       
        <th scope="col" class="text-center" >Tên sản phẩm</th>
        <th scope="col" class="text-center">Hình ảnh</th>
        <th scope="col" class="text-center">Số lượng</th>
        
        <th scope="col" class="text-center">Đơn Giá </th>
        <th scope="col" class="text-center">Thành Tiền</th>
        {{-- <th scope="col">Loai sản phẩm</th> --}}
        {{-- <th class="text-center">Mô Tả</th> --}}
        {{-- <th scope="col" class="text-center">Tổng Tiền</th>
        <th scope="col" class="text-center">Trạng Thái</th>
        <th scope="col" class="text-center">Ngày Tạo</th>
        <th scope="col" class="text-center">Ngày Update</th>
        <th class="text-center">Chức Năng</th> --}}
      </tr>
    </thead>
    @foreach ($detail as $a )
    <tbody>
      <tr class="text-center">
      
        <td>{{ $a->name  }}</td>
        <td><img style="width:100px;max-height:100px;object-fit: contain" src="/storage/{{ $a->image }}"></td>
            <td>{{ $a->quantily  }}</td>
            <td>{{ number_format($a->price)}} VNĐ</td>
            <td>{{ number_format($a->price*$a->quantily)}} VNĐ</td>
           
        
      </tr>
      
    </tbody>
    @endforeach
  </table>
  {{-- <hr>
  //<div>{{ $invoi->appends(request()->all())->links() }}</div> --}}
@endsection