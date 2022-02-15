@extends('layouts.main')
@section('content')

<form method="POST" action="{{ route('updateProduct') }}" enctype="multipart/form-data">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label >Tên sản phẩm</label>
      <input type="text" class="form-control" name="name" value="{{ $sp->name }}">
    </div>
    <div style="color: red">@if ($errors->has('name')){{ $errors->first('name') }} <br> @endif</div>
    <div class="form-group">
        <label >Số Lượng</label>
        <input type="number" class="form-control" name="stock" value="{{ $sp->stock }}">
      </div>
      <div style="color: red">@if ($errors->has('stock')){{ $errors->first('stock') }} <br> @endif</div>
      <div class="form-group">
        <label >Giá Tiền</label>
        <input type="number" class="form-control" name="price" value="{{ $sp->price }}">
      </div>
      <div style="color: red">@if ($errors->has('price')){{ $errors->first('price') }} <br> @endif</div>
      <div class="form-group">
        <label >Chọn Loại Sản Phẩm</label><br>
        <select name="productTypeid">
            <option>Chọn loại</option>
            @foreach ($loai as $l )
            <option value="{{ $l->id }}" @if ($l->id==$sp->productTypeid) selected
                
            @endif>{{ $l->name }}</option>
                
            @endforeach
        </select>
      </div>
    <div class="form-group">
      <label >Ảnh sản phẩm</label><br>
      <img style="width:200px;max-height:200px;object-fit: contain" src="/storage/{{ $sp->image }}">
          <input type="file" class="form-controller" name="image">
    </div>
    {{-- <div style="color: red">@if ($errors->has('image')){{ $errors->first('image') }} <br> @endif</div> --}}
    <div class="form-group">
        <label >Mô tả</label><br>
            <textarea style="width:500px;height:200px" class="form-controller" name="description" >{{ $sp->description }}</textarea>
      </div>
      <div style="color: red">@if ($errors->has('description')){{ $errors->first('description') }} <br> @endif</div>

    <div class="form-group">
      <label >Tình trạng</label>
      @if ($sp->new==1)
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value=1 checked>
        <label class="form-check-label">Mới</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="0" name="radio1" >
        <label class="form-check-label">Củ</label>
      </div>
      @else
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio1" value=1  >
        <label class="form-check-label">Mới</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value="0" name="radio1"checked >
        <label class="form-check-label">Củ</label>
    </div>
      @endif
    </div>
      
    
    <div class="form-group">
        <label >Trạng Thái</label>
        @if ($sp->status==0)
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio2" value=0 checked>
        <label class="form-check-label">Kích Hoạt</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value=1 name="radio2"  >
        <label class="form-check-label">Không kích hoạt</label>
      </div>
      @else
      <div class="form-check">
        <input class="form-check-input" type="radio" name="radio2" value=0 >
        <label class="form-check-label">Kích Hoạt</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" value=1 name="radio2"checked >
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
    <input type="hidden" value="{{ $sp->id }} " name="id">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

@endsection