@extends('layouts.main')

@section('content')
<br>
<form  action="" class="form-inline" role="form">
  <div class="form-group">
    <input class="form-control" name="key" placeholder="Tìm Theo Tên">
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>

  </button>
</form>
<br>
<div class="row justify-content-center">
  <a  class="btn btn-primary " href="{{ route('addproduct')}}"><i class="fas fa-plus"></i> Thêm Sản Phẩm</a>
</div>

<br>
<table class="table table-hover" >
    <thead>
      <tr style="font-size: 14px">
       
        <th scope="col" class="text-center" >ID</th>
        <th scope="col" class="text-center">Tên Sản Phẩm</th>
        <th scope="col" class="text-center">Tên Loại</th>
        <th scope="col" class="text-center">Hình Ảnh</th>
        
        <th scope="col" class="text-center">Số Lượng</th>
        <th scope="col" class="text-center">Đơn Giá</th>
        {{-- <th scope="col">Loai sản phẩm</th> --}}
        {{-- <th class="text-center">Mô Tả</th> --}}
        <th scope="col" class="text-center">Tình Trạng</th>
        <th scope="col" class="text-center">Trạng Thái</th>
        <th scope="col" class="text-center">Ngày Tạo</th>
        <th scope="col" class="text-center">Ngày Update</th>
        <th class="text-center">Chức Năng</th>
      </tr>
    </thead>
    @foreach ($lstsp as $sp )
    <tbody>
      <tr class="text-center">
      
        <td>{{ $sp->id  }}</td>
        <td>{{ $sp->name  }}</td>
        {{-- <td>{{ $sp->productTypeid }}</td> --}}
        <td>@foreach ($loai as $l )
          @if ($sp->productTypeid==$l->id)
          {{ $l->name }}
          @break
          @endif 
        @endforeach</td>
        <td><img style="width:100px;max-height:100px;object-fit: contain" src="{{ $sp->image }}"></td>
        {{-- <td>{{ $loai->imageUrl  }}</td> --}}
        
            <td>{{ $sp->stock  }}</td>
            <td>{{number_format($sp->price)}} VND </td>
            <td>@if ($sp->new==1)
              <span class="badge badge-success">Mới</span>
              
            @else
            <span class="badge badge-danger">Cũ</span>
            @endif</td>
            <td>@if ($sp->status==0)
              <span class="badge badge-success">Mở</span>
              
            @else
            <span class="badge badge-danger">Khóa</span>
            @endif</td>
            {{-- <td style="font-size: 15px;">{{ $sp->description  }}</td> --}}
            <td>{{ $sp->created_at }}</td>
            <td>{{ $sp->updated_at }}</td>
            {{-- <td>{{ $sp->productTypeid }}</td> --}}
        <td>
            
          <a href="{{ route('editproduct',[$sp->id]) }}" class="btn btn-primary btn-sm ">
          <i class="fa fa-edit"></i></a>
          <a class="btn btn-danger btn-sm " href="{{ route('deleteproduct',[$sp->id]) }}">
            <i class="fa fa-trash-alt"></i></a>
          
        
        </td>
        
      </tr>
      
    </tbody>
    @endforeach
  </table>

  <div>{{ $lstsp->appends(request()->all())->links() }}</div>
@endsection