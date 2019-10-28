@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thêm bài viết</h2>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>thêm thất bại</strong>vui lòng nhập đầy đủ <br><br>
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
                <form action="{{route('blog-add')}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên Bài viết</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" placeholder="Tên bài viết ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hình đại diện</label>
                        <div class="col-sm-10">
                            <input type="file" name="fImage">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên ảnh</label>
                        <div class="col-sm-10">
                            <input type="text" name="alt" class="form-control" placeholder="Tên">
                        </div>
                    </div> -->
                    <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Loại bài viết</label>
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
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height:150px" id="Des-ckeditor" name="description" placeholder="Mô tả"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control ckeditor" style="height:150px" id="Content-ckeditor" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" style="height:150px" name="description" placeholder="Nội dung"></textarea>
                        </div>
                    </div> --}}
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
                            <label class="col-sm-2 col-sm-2 control-label">Thứ tự xuất hiện</label>
                            <div class="col-sm-10">
                                <input type="number" name="order" class="form-control" placeholder="thứ tự xuất hiện">
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
              document.getElementById("Content-ckeditor").value = document.getElementById("hidInfo").value;
          </script>
@endsection
