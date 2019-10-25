@extends('admin.layoutAdmin')
@section('contentAdmin')
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Danh sách sản phẩm  </h4>
          <hr>
          @if(Session::has('message'))
                <h5 class="alert alert-success">{{Session::get('message')}}</h5>
          @endif
          {{-- <a class="btn btn-success" href="{{route('coffee-add')}}"> Thêm loại cafe</a> --}}
          <thead>
            <tr>
              <th style="width: 200px;"><i class="fa fa-list-alt"></i>  Nhóm sản phẩm</th>
              <th style="width: 200px;"><i class="fa fa-address-book"></i>  Loại sản phẩm</th>
              <th style="width: 200px;"><i class="fa fa-address-book-o"></i>  Tên sản phẩm</th>
              <th style="width: 100px;"><i class="fa fa-id-card-o"></i>  Lượt xem</th>
              <th style="width: 100px;"><i class="fa fa-sort"></i>  Thứ tự đăng</th>
              {{-- <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th> --}}
              <th style="width: 100px;"><i class="fa fa-money"></i> Giá</th>
              <th style="width: 100px;"><i class=" fa fa-edit"></i> Trạng thái</th>
              <th style="width: 150px;"><i class="fa fa-tasks"></i>  Chức năng</th>
            </tr>
          </thead>
          <tbody>
            @foreach($coffees as $item)
                <tr>
                  <td>
                        <a href="basic_table.html#">{{$item->namecate}}</a>
                  </td>
                  <td>
                      <a href="basic_table.html#">{{$item->nameg}}</a>
                </td>
                  <td>
                      <a href="basic_table.html#">{{$item->name}}</a>
                  </td>
                  <td>{{$item->cout_view}}</td>
                  <td>{{$item->order}}</td>
                  {{-- <td class="hidden-phone">{{$item->description}}</td> --}}
                  <td>{{$item->price}} vnd</td>
                  <td>{{$item->is_active == 1 ?'Hoạt động':'Đang khóa'}}</td>
                  <td>
                      {{-- <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button> --}}
                      <i class="fa fa-trash-o  fa-fw"></i><a href="{{route('coffee-delete',$item->id)}}"> Xóa</a>
                      <i class="fa fa-pencil fa-fw"></i> <a href="{{route('coffee-update',$item->id)}}">Chỉnh sửa</a>
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
