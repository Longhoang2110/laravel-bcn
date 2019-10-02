@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sửa {{$category->name}}</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Sửa Không Thành Công!!</strong> Vui lòng nhập đầy đủ thông tin.<br><br>     
            
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
                <form action="{{route('category-update',$category->id)}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{$category->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Code</label>
                        <div class="col-sm-10">
                            <input type="text" name="code" class="form-control" value="{{$category->code}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <select name="type">
                                <option value="0" {{$category->type == 0? 'selected':''}}>Bài viết</option>
                                <option value="1" {{$category->type == 1? 'selected':''}}>Sản phẩm</option>
                                <option value="2" {{$category->type == 2? 'selected':''}}>Bài Post</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="rdoState" value="1" checked type="radio">Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoState" value="2" type="radio">Ẩn
                            </label>
                        </div>
                    {{-- <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Hình hiện tại</label>
                            <div class="col-sm-10">
                                <img src="images/img/{{$category->thumbnail}}" alt="" width="70" height="50">
                            </div>                            
                        </div> --}}
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hình ảnh</label>
                        <div class="col-sm-10">
                            <input type="file" name="fImage">
                        </div>                       
                    </div> --}}
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-10">
                            {{-- <textarea class="ckeditor form-control" rows="3" id="txtInfo" name="txtInfo"></textarea> --}}
                            {{-- <textarea class="form-control" id="txtdescription" style="height:150px" name="description">{{$category->description}}</textarea>
                        </div>
                    </div> --}} 
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="hidInfo" name="hidInfo" value="{{$category->content}}">
                            <textarea class="form-control ckeditor" style="height:150px" id="Content-ckeditor" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div> --}}
                    {{-- <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Trạng thái</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="rdoState" value="1" checked type="radio">Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoState" value="2" type="radio">Ẩn
                            </label>
                        </div>
                    </div> --}}
                    <div class="form-group">
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>  
                    </div>                     
                </form>
              </div>
              <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          {{-- <div>
                {!!$displays->description!!}
          </div> --}}
          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
            //CKEDITOR.replace( 'Des-ckeditor' );
              CKEDITOR.replace( 'Content-ckeditor');
              document.getElementById("Content-ckeditor").value = document.getElementById("hidInfo").value;
          </script>
          
@endsection