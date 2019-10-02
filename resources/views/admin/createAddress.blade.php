@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm địa chỉ</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Thêm thất bại</strong> Vui lòng nhập đầy đủ thông tin<br><br>           
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt">
            <div class="col-lg-12">
              <div class="form-panel">
                <form action="{{route('address-add')}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control" placeholder="Tên ">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>  
                    </div>                     
                </form>
              </div>
              <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          {{-- <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
              CKEDITOR.replace( 'summary-ckeditor' );
          </script> --}}
@endsection