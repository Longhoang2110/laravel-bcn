@extends('admin.layoutAdmin')
@section('contentAdmin')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Thư viện</h2>
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
                <form class="form-horizontal style-form">
                    <div class="form-group">
                        <label class="col-sm-2 col-sm-2 control-label">Thư viện</label>
                        <div class="col-sm-10">
                            <textarea class="form-control ckeditor" style="height:0px" id="gallery" name="content" placeholder="Nội dung"></textarea>
                        </div>
                    </div>
                </form>               
              </div>
              <!-- /form-panel -->
            </div>
            <!-- /col-lg-12 -->
          </div>
          <style>
            .cke_bottom {
                display : none !important
            }
            .cke_reset {
                /* display : none !important */
            }
          </style>
          <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
          <script>
            //CKEDITOR.replace( 'Des-ckeditor' );
              CKEDITOR.replace( 'gallery', {
                filebrowserBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html') }}",
                filebrowserImageBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Images') }}",
                filebrowserFlashBrowseUrl: "{{ asset('vendor/unisharp/ckfinder/ckfinder.html?type=Flash') }}",
                filebrowserUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
                filebrowserImageUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
                filebrowserFlashUploadUrl: "{{ asset('vendor/unisharp/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
                // toolbar : [{ name: 'insert', groups: [ 'insert' ] }]
            } );

            CKEDITOR.config.toolbar = [
            ['Image']
            ] ;

            // CKEDITOR.editorConfig = function( config ) {
            //     config.toolbarGroups = [
            //         { name: 'insert', groups: [ 'insert' ] },
            //     ];
            //     config.removeButtons = 'Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Cut,Copy,Paste,Undo,Redo,Save,Source,NewPage,Preview,Print,Templates,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Button,Select,ImageButton,HiddenField,Italic,Bold,Underline,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Styles,Format,Font,FontSize,TextColor,BGColor,Maximize,ShowBlocks,About,PasteText,PasteFromWord';
            // };
          </script>
@endsection
