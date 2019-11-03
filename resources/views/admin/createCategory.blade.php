@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm danh mục</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Thêm thất bại</strong> vui lòng nhập đầy đủ thông tin.<br><br>
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
                <form action="{{route('category-add')}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên danh mục </label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Nhóm sản phẩm">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Code </label>
                        <div class="col-sm-10">
                            <input type="text" name="code" class="form-control" placeholder="Code ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Loại bài đăng </label>
                        <div class="col-sm-10">
                            <select name="type">
                                <option value="0">Bài viết</option>
                                <option value="1">Sản phẩm</option>
                            </select>
                            {{-- <input type="text" name="pype" class="form-control" placeholder="Type "> --}}
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
                        <label class="col-sm-2 col-sm-2 control-label">Hiện trang chủ</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="category_home" value="1" checked type="radio">Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="category_home" value="2" type="radio">Ẩn
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label"> Thứ tự hiện trang chủ</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="category_home_order" value="1" checked type="radio">Hiện thứ 1
                            </label>
                            <label class="radio-inline">
                                <input name="category_home_order" value="2" type="radio">Hiện thứ 2
                            </label>
                            <label class="radio-inline">
                                <input name="category_home_order" value="3" type="radio">Hiện thứ 3
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
          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
            //CKEDITOR.replace( 'Des-ckeditor' );
              CKEDITOR.replace( 'Content-ckeditor');
          </script>
@endsection
