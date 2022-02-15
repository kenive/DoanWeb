@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('storeproduct') }}" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label >Tên sản phẩm</label>
      <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>
    
    <div style="color: red">@if ($errors->has('name')){{ $errors->first('name') }} <br> @endif</div>
    <div class="form-group">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="stock" value="{{ old('stock') }}">
      </div>
      <div style="color: red">@if ($errors->has('stock')){{ $errors->first('stock') }} <br> @endif</div>
      <div class="form-group">
        <label >Giá Tiền</label>
        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
      </div>
      <div style="color: red">@if ($errors->has('price')){{ $errors->first('price') }} <br> @endif</div>
      <div class="form-group">
        <label >Chọn Loại Sản Phẩm</label><br>
        <select name="productTypeid" >
           {{--  <option>Chọn loại</option> --}}
            @foreach ($loaisp as $loai )
            <option value="{{ $loai->id }}">{{ $loai->name }}</option>
                
            @endforeach
        </select>
      </div>
      <div style="color: red">@if ($errors->has('productTypeid')){{ $errors->first('productTypeid') }} <br> @endif</div>
    <div class="form-group">
      <label >Ảnh sản phẩm</label><br>
          <input type="file" class="form-controller" name="image">
    </div>
    <div style="color: red">@if ($errors->has('image')){{ $errors->first('image') }} <br> @endif</div>
    <div class="form-group">
        <label >Mô tả</label><br>
            <textarea style="width:500px;height:200px" class="form-controller" name="description" value="{{ old('description') }}"></textarea>
      </div>
      <div style="color: red">@if ($errors->has('description')){{ $errors->first('description') }} <br> @endif</div>
    <div class="form-group">
      <label >Tình trạng</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value=1 checked>
        <label class="form-check-label">Mới</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="0" name="radio1" >
        <label class="form-check-label">Củ</label>
      </div>
    </div>
    <div class="form-group">
        <label >Trạng Thái</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="radio2" value="0" checked>
          <label class="form-check-label">Kích hoạt</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" value="1" name="radio2" >
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