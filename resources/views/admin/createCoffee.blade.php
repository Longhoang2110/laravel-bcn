@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm sản phẩm</h2>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                <form action="{{route('coffee-add')}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Tên ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hình đại diện</label>
                        <div class="col-sm-10">
                            <input type="file" name="BlogImage">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên ảnh</label>
                        <div class="col-sm-10">
                            <input type="text" name="alt" class="form-control" placeholder="Tên">
                        </div>
                    </div>
                    <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Loại sản phẩm</label>
                            <div class="col-sm-10">
                                <select name="type">
                            @foreach($category as $item)

                                    <option value="{{$item->id}}">
                                    {{$item->name}}
                                    </option>
                            @endforeach

                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control ckeditor" style="height:150px" id="summary-ckeditor" name="description" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Nội dung"></textarea>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Giá</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" placeholder="Giá">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="rdoState" value="1" checked type="radio">Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoState" value="2" type="radio">Ẩn
                            </label>
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
