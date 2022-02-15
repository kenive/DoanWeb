@extends('layouts.main')

@section('content')
<br>
<div class="row justify-content-center">
  <a  class="btn btn-primary " href="{{ route('addproducttype') }}"><i class="fas fa-plus"></i> Thêm Sản Phẩm</a>
</div>
<br>
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col"class="text-center">ID</th>
        <th scope="col"class="text-center">Tên Loại Sản Phẩm</th>
        <th scope="col"class="text-center">Hình Ảnh</th>
        <th scope="col"class="text-center">Trạng Thái</th>
        
        <th scope="col" class="text-right">Chức Năng</th>
      </tr>
    </thead>
    @foreach ($loaisp as $loai )
    <tbody>
      <tr>
        <td class="text-center">{{ $loai->id  }}</td>
        <td class="text-center">{{ $loai->name  }}</td>
        
        <td class="text-center"><img style="width:100px;max-height:100px;object-fit: contain" src="{{ $loai->imageUrl }}"></td>
        <td class="text-center">@if ($loai->status==0)
          <span class="badge badge-danger">Khóa</span>
          
        @else
        <span class="badge badge-success">Mở</span>
        @endif
        
        
        </td>
        {{-- <td>{{ $loai->imageUrl  }}</td> --}}
        <td class="text-right">
          <a href="{{ route('editproducttype',[$loai->id]) }}">
          <button class="btn btn-primary btn-sm "><i class="fa fa-edit"></i></button></a>
          <a class="" href="{{ route('deleteproducttype',[$loai->id]) }}">
            <button class="btn btn-danger btn-sm"><i class="fa fa-trash-alt"></i></button></a>
          
        
        </td>
        
      </tr>
      
    </tbody>
    @endforeach
  </table>

  <div>{{ $loaisp->appends(request()->all())->links() }}</div>
@endsection