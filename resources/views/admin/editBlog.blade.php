@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Chỉnh sửa {{$blog->name}}</h2>
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
                <form action="{{route('blog-update',$blog->id)}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên bài viết</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{$blog->name}}">
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Hình hiện tại</label>
                            <div class="col-sm-10">
                                <img src="images/img/{{$blog->thumbnail}}" alt="" width="70" height="50">
                            </div>                            
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hình ảnh</label>{{$blog->alt}}
                        <div class="col-sm-10">
                            <input type="file" name="fImage">
                        </div>                       
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên ảnh</label>
                        <div class="col-sm-10">
                            <input type="text" name="alt" class="form-control" value="{{$coffee->alt}}">
                        </div>
                    </div>
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
                            {{-- <textarea class="ckeditor form-control" rows="3" id="txtInfo" name="txtInfo"></textarea> --}}
                            <textarea class="form-control" id="txtdescription" style="height:150px" name="description">{{$blog->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="hidInfo" name="hidInfo" value="{{$blog->content}}">
                            {{-- <textarea class="ckeditor form-control" rows="3" id="txtInfo" name="txtInfo"></textarea> --}}
                            <textarea class="form-control ckeditor" style="height:150px" id="Content-ckeditor" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Trạng thái</label>
                    <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="rdoState" value="1"  type="radio" {{$blog->is_active == 1? 'checked':''}}>Hiện
                            </label>
                            <label class="radio-inline">
                                <input name="rdoState" value="2" type="radio" {{$blog->is_active == 2? 'checked':''}}>Ẩn
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Thứ tự xuất hiện</label>
                            <div class="col-sm-10">
                                <input type="number" name="order" class="form-control" placeholder="thứ tự xuất hiện" value="{{$blog->order}}">
                            </div>
                    </div>
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
                {!!$blog->description!!}
          </div> --}}
          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
            //CKEDITOR.replace( 'Des-ckeditor' );
              CKEDITOR.replace( 'Content-ckeditor', {
                filebrowserBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html') }}",
                filebrowserImageBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Images') }}",
                filebrowserFlashBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Flash') }}",
                filebrowserUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
                filebrowserImageUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
                filebrowserFlashUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
            } );
              document.getElementById("Content-ckeditor").value = document.getElementById("hidInfo").value;
          </script>
          
@endsection