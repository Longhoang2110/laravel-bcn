@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Sửa {{$content->name}}</h2>
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
                <form action="{{route('content-update',$content->id)}}" class="form-horizontal style-form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        </div>
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Nội dung</label>
                        <div class="col-sm-10">
                            <input type="hidden" id="hidInfo" name="hidInfo" value="{{$content->content}}">
                            <textarea class="form-control ckeditor" style="height:150px" id="Content-ckeditor" name="content" placeholder="Nội dung"></textarea>
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
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>  
                    </div>                     
                </form>
              </div>
            </div>
          </div>
          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
            //CKEDITOR.replace( 'Des-ckeditor' );
              CKEDITOR.replace( 'Content-ckeditor');
              document.getElementById("Content-ckeditor").value = document.getElementById("hidInfo").value;
          </script>
          
@endsection