@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('storeproducttype') }}" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label >Tên loại sản phẩm</label>
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
    <div style="color: red">@if ($errors->has('name')){{ $errors->first('name') }} <br> @endif</div>
    
    <div class="form-group">
      <label >Ảnh loại sản phẩm</label><br>
          <input type="file" class="form-controller" name="imageUrl">
    </div>
    <div style="color: red">@if ($errors->has('imageUrl')){{ $errors->first('imageUrl') }} <br> @endif</div>
    <div class="form-group">
      <label >Trạng Thái</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value=1 checked>
        <label class="form-check-label">Kích Hoạt</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="0" name="radio1" >
        <label class="form-check-label">Không kích hoạt</label>
      </div>
    </div>
   {{--  <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection