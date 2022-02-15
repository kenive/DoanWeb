@extends('layouts.main')
@section('content')


<form method="POST" action="{{ route('updateInvoice') }}" enctype="multipart/form-data">
  @csrf
 
  <div class="card-body">
    
    <div class="form-group">
        <label >Trạng Thái</label><br>
        <br>
        <select name="status" class="form-control">
            
            <option value="1">Chờ xác nhận</option>
            <option value="2">Đã lấy hàng</option>
            <option value="3">Đã Giao</option>
            <option value="4">Đã Hủy</option>
        </select>
        
      </div>
    
      
    </div>
   {{--  <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
 
  <!-- /.card-body -->

  <div class="card-footer">
    <input type="hidden" value="{{ $invoi->id}}" name="id">
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
  </div>
</form>

@endsection