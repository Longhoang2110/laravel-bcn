@extends('admin.layoutAdmin')
@section('contentAdmin')
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Danh sách  </h4>
          <hr>
          @if(Session::has('message'))
                <h5 class="alert alert-success">{{Session::get('message')}}</h5>
          @endif
          {{-- <a class="btn btn-success" href="{{route('coffee-add')}}"> Thêm loại cafe</a> --}}
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Tên </th>
              <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th>
              {{-- <th><i class="fa fa-bookmark"></i> Lượt xem</th> --}}
              <th><i class=" fa fa-edit"></i> Trạng thái</th>
              <th style="width: 150px;"><i class="fa fa-tasks"></i>  Chức năng</th>
            </tr>
          </thead>
          <tbody>
            @foreach($displays as $item)
                <tr>
                <td>
                    <a>{{$item->name}}</a>
                </td>
                <td class="hidden-phone">{{$item->description}}</td>
                {{-- <td>{{$item->views}}</td> --}}
                <td>{{$item->is_active == 1 ?'Hoạt động':'Đang khóa'}}</td>
                <td>

                    {{-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> --}}
                    <i class="fa fa-trash-o  fa-fw"></i><a href="{{route('display-delete',$item->id)}}"> Xóa</a>
                    <i class="fa fa-pencil fa-fw"></i><a href="{{route('display-update',$item->id)}}">Chỉnh sửa</a>
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