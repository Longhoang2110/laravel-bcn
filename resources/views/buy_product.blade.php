@extends('layout')
@section('content')
<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">            
            <div class="col-md-12 p-b-30">
                <form class="leave-comment" action="{{route('buyer-postadd')}}" method="POST" enctype="multipart/form-data">
                @csrf    
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Thông tin mua hàng
                    </h4>
                <input style="visibility: hidden;" name="coffeeid" value="{{$coffeeid}}">
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Họ tên">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Số điện thoại">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email">
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="address" placeholder="Địa chỉ"></textarea>

                    <div class="w-size25">
                        <!-- Button -->
                        <button type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Đặt mua
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection