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
            <strong>Thêm thất bại!!</strong> Vui lòng nhập đầy đủ thông tin.<br><br>
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
                            <input type="file" name="fImage">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tên ảnh</label>
                        <div class="col-sm-10">
                            <input type="text" name="alt" class="form-control" placeholder="Tên ảnh">
                        </div>
                    </div>
                    <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Danh mục</label>
                            <div class="col-sm-10">
                                <select name="type" id="type">
                            @foreach($category as $item)

                                    <option value="{{$item->id}}">
                                    {{$item->name}}
                                    </option>
                            @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="form-group">

                            <label class="col-sm-2 col-sm-2 control-label">Danh mục con</label>
                            <div class="col-sm-10">
                                <select name="code" id="code">
                            @foreach($group as $item)

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
                            <textarea class="form-control ckeditor" style="height:150px" id="ckeditor_add" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Giá NY</label>
                        <div class="col-sm-10">
                            <input type="number" name="price" class="form-control" placeholder="Giá NY">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Giá Sale</label>
                        <div class="col-sm-10">
                            <input type="number" name="discount" class="form-control" placeholder="Giảm Sale">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Hãng sản xuất</label>
                        <div class="col-sm-10">
                            <input type="text" name="producer" class="form-control" placeholder="Tên hãng ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Mã sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_code" class="form-control" placeholder="Mã sản phẩm ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Chế độ bảo hành</label>
                        <div class="col-sm-10">
                            <input type="text" name="product_guarantee" class="form-control" placeholder="Chế độ bảo hành ">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Tình trạng hàng</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                    <input name="product_status" value="1" checked type="radio">Còn hàng
                            </label>
                            <label class="radio-inline">
                                <input name="product_status" value="2" type="radio">Hết hàng
                            </label>
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
              CKEDITOR.replace( 'ckeditor_add', {
                filebrowserBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html') }}",
                filebrowserImageBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Images') }}",
                filebrowserFlashBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Flash') }}",
                filebrowserUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
                filebrowserImageUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
                filebrowserFlashUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}"
            } );
          </script>
         
@endsection

@section('script')
    <script>

       $( document ).ready(function() {
           $("#type").change(function(){
               var idcategory = $("#type").val();
               $.get("ajax/group/"+idcategory,function(data){
                    $("#code").html(data);
               });
           });
        });
        
    </script>
@endsection
