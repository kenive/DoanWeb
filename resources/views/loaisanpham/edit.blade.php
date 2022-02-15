@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('updateProducttype') }}" enctype="multipart/form-data">
  @csrf
 
  <div class="card-body">
    <div class="form-group">
      <label >Tên loại sản phẩm</label>
      <input type="text" class="form-control" name="name" value="{{ $loaisp->name }}">
    </div>
    
    <div class="form-group">
      <label >Ảnh loại sản phẩm</label><br>
      <img style="width:100px;max-height:100px;object-fit: contain" src="/storage/{{ $loaisp->imageUrl }}">
      <input type="file" name="imageUrl"><br>
      
    </div>
    <div class="form-group">
      <label >Trạng Thái</label>
      @if ($loaisp->status==0)
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value=1>
        <label class="form-check-label">Kích Hoạt</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value={{ $loaisp->status }} name="radio1" checked >
        <label class="form-check-label">Không kích hoạt</label>
      </div>
      @else
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value={{ $loaisp->status }} checked>
        <label class="form-check-label">Kích Hoạt</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value=0 name="radio1" >
        <label class="form-check-label">Không kích hoạt</label>
      </div>
      @endif
      
    </div>
   {{--  <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <input type="hidden" value="{{ $loaisp->id }} " name="id">
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
</form>

@endsection