@extends('admin.layoutAdmin')
@section('contentAdmin')
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Danh sách Địa Chỉ</h4>
          <hr>
          @if(Session::has('message'))
                <h5 class="alert alert-success">{{Session::get('message')}}</h5>
          @endif
          {{-- <a class="btn btn-success" href="{{route('coffee-add')}}"> Thêm loại cafe</a> --}}
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn">Địa chỉ</i></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($address as $item)
                <tr>
                <td>
                    <a href="basic_table.html#">{{$item->address}}</a>
                </td>
                <td>
                     <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                     <i class="fa fa-trash-o  fa-fw"></i><a href="{{route('address-delete',$item->id)}}"> Xóa</a>
                     <i class="fa fa-pencil fa-fw"></i> <a href="{{route('address-update',$item->id)}}">Chỉnh sửa</a>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
 
@endsection