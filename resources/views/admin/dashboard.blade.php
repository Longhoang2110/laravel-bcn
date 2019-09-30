@extends('admin.layoutAdmin')
@section('contentAdmin')
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <h4><i class="fa fa-angle-right"></i> Danh sách đặt hàng </h4>
          <hr>
          {{-- <a class="btn btn-success" href="{{route('coffee-add')}}"> Thêm loại cafe</a> --}}
          <thead>
            <tr>
              <th><i class="fa fa-bullhorn"></i> Tên khách hàng</th>
              <th><i class="fa fa-bookmark"></i> Sản phẩm</th>
              <th class="hidden-phone"><i class="fa fa-question-circle"></i>Số điện thoại</th>
              <th><i class="fa fa-bookmark"></i> Email</th>
              <th><i class=" fa fa-edit"></i> Địa chỉ</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach($buyer as $item)
                <tr>
                <td>
                    {{$item->name}}
                </td>
                <td>{{$item->coffeename}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
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