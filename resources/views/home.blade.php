@extends('layout')
@section('content')
<!-- Slide1 -->
<section class="container slide1">
    <div class="row">
        <div class="col-md-3">
            <h4 id="hinder" class="m-text11" style="background-color: #ed9f48;text-align: center;line-height: 3;margin-bottom:1px;margin-top: 10px;">
                <i class="fa fa-list" aria-hidden="true"></i>&nbsp Danh mục sản phẩm
            </h4>       
            {{-- <script>
                $(document).ready(function(){
                    $("#hinder").click(function(){
                        $("#an").toggle(500);
                    })
                })
            </script> --}}
            <div class="left">
            <ul id="an" class="p-b-54">
                <li class="p-t-4 p-b-8 bo7">
                    <div style="padding:5px">
                        <a href="{{route('product')}}" class="m-text11">
                                Tất cả sản phẩm
                        </a>
                        
                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                </li>
                @foreach($category_product as $item)
                <li class="p-t-4 p-b-8 bo7">
                    <div style="padding:5px">
                        <a href="{{route('category-coffee',['categoryname'=>$item->name,'id'=>$item->id])}}" class="m-text11">
                                {{$item->name}}
                                <ul class="sub_menu">
                                    @foreach($category_blog as $item)
                                    <li class="p-t-4 p-b-8 bo7">
                                        <a href="{{route('category-blog',$item->id)}}" class="m-text11">
                                                {{$item->name}}
                                                <ul class="sub_menu"style="padding-top:5px;">
                                                    @foreach($category_blog as $item)
                                                    <li class="p-t-4 p-b-8 bo7">
                                                        <a href="{{route('category-blog',$item->id)}}" class="m-text11">
                                                                {{$item->name}}
           
                                                        </a>
            
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </a>

                                    </li>
                                @endforeach
                            </ul>
                        </a>
                        <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
        </div>
        <div class="col-md-9">
            <div class="wrap-slick1">
                <div class="slick1">
                    @foreach($displays as $item)
                    <div class="item-slick1 item3-slick1"
                        style="background-image: url(images/img/{{$item->thumbnail}})">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15" style="height:400px">
                            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                                data-appear="rotateInDownLeft">
                                {{$item->name}}
                            </span>
                            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                                data-appear="rotateInUpRight">
                                {{$item->description}}
                            </h2>

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                                <!-- Button -->
                                <a href="{!!route('product')!!}"
                                    class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Mua ngay!
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shipping -->
<section class="container shipping bgwhite p-b-46">
    <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center">
            Điều tạo ra khác biệt
        </h3>
    </div>
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="t-center"><img src="https://image.flaticon.com/icons/svg/1884/1884278.svg" style="width: 128px;"
                    alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Lắp Đặt Tại Nhà
            </h4>

            <span class="s-text11 t-center">
                    luôn hướng đến việc nâng tầm chất lượng sản phẩm; 
                    đồng thời luôn đưa ra những mẫu thiết kế bắt kịp xu hướng hiện đại
                    nhằm tư vấn cho khách hàng những lựa chọn tối ưu nhất.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="t-center"><img src="https://image.flaticon.com/icons/svg/1909/1909239.svg" style="width: 128px;"
                    alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Bảo Hành Trọn Đời
            </h4>

            <span class="s-text11 t-center">
                    đều được lắp đặt từ nguyên liệu nhập khẩu
                    cao cấp có khả năng chịu được điều kiện thời tiết khắc nghiệt
                    với độ bền sử dụng lên đến 15-20 năm.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="t-center"><img src="https://image.flaticon.com/icons/svg/1241/1241596.svg" style="width: 128px;"
                    alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Nhanh Chóng - Tiện Lợi
            </h4>

            <span class="s-text11 t-center">
                    chuyên thiết kế, thi công, lắp đặt hệ thống mái che bạt kéo căng cho Quý Khách Hàng
                    là : Trung Tâm Thương Mại, Khu Du Lịch, Khu Vui Chơi – Giải Trí, Khách Sạn, Hồ Bơi,
                    Nhà Hàng, Sky Bar, Quán Cà Phê, Bãi Đỗ Xe, Công Trình Dân Dụng…
            </span>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105" style="padding-bottom: 50px;">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                {{$category1->name}}
                
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($coffee1 as $item)
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="images/img/{{$item->thumbnail}}" style="width:270;height:270px"
                                alt="{{$item->alt}}">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <a href="{{route('buyer-getadd',$item->id)}}"
                                        class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1">
                                        Mua ngay!
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="{{route('coffee-detail',$item->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                {{$item->name}}
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                {{$item->price}} vnd
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                {{$category2->name}}                
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($coffee2 as $item)
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="images/img/{{$item->thumbnail}}" style="width:270;height:270px"
                                alt="{{$item->alt}}">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <a href="{{route('buyer-getadd',$item->id)}}"
                                        class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1">
                                        Mua ngay!
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="{{route('coffee-detail',$item->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                {{$item->name}}
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                {{$item->price}} vnd
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                {{$category3->name}}
                
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($coffee3 as $item)
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="images/img/{{$item->thumbnail}}" style="width:270;height:270px"
                                alt="{{$item->alt}}">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <a href="{{route('buyer-getadd',$item->id)}}"
                                        class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1">
                                        Mua ngay!
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="{{route('coffee-detail',$item->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                {{$item->name}}
                            </a>

                            <span class="block2-price m-text6 p-r-5">
                                {{$item->price}} vnd
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="blog bgwhite p-t-94 p-b-65" style="padding-top:50px">
    <div class="container">
        <div class="sec-title p-b-52">
            <h3 class="m-text5 t-center">
                Thông tin hữu ích cho bạn
            </h3>
        </div>

        <div class="row">
            @foreach($blogs as $item)
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                <!-- Block3 -->
                <div class="block3">
                    <a href="{{route('blog-detail',$item->id)}}" class="block3-img dis-block hov-img-zoom">
                        <img src="images/img/{{$item->thumbnail}}" style="width:720px;height:300px" alt="IMG-BLOG">
                    </a>

                    <div class="block3-txt p-t-14">
                        <h4 class="p-b-7">
                            <a href="{{route('blog-detail',$item->id)}}" class="m-text11">
                                {{$item->name}}
                            </a>
                        </h4>
                        <span class="s-text6">By</span> <span class="s-text7">Admin</span>
                        {{-- <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span> --}}

                        <p class="s-text8 p-t-16">
                            {{$item->description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Instagram -->
<section class="instagram p-t-20">
    <div class="sec-title p-b-52 p-l-15 p-r-15">
        <h3 class="m-text5 t-center">
            Một số hình ảnh của chúng tôi
        </h3>
    </div>

    <div class="flex-w">
        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="asset_custom/images/gallery-07.jpg" alt="IMG-INSTAGRAM">
            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                    <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                    <span class="p-t-2">39</span>
                </span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in
                        tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus
                        elit.
                    </p>

                    <span class="s-text9">
                        Photo by @nancyward
                    </span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="asset_custom/images/gallery-07.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                    <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                    <span class="p-t-2">39</span>
                </span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in
                        tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus
                        elit.
                    </p>

                    <span class="s-text9">
                        Photo by @nancyward
                    </span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="asset_custom/images/gallery-09.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                    <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                    <span class="p-t-2">39</span>
                </span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in
                        tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus
                        elit.
                    </p>

                    <span class="s-text9">
                        Photo by @nancyward
                    </span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="asset_custom/images/gallery-13.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                    <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                    <span class="p-t-2">39</span>
                </span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in
                        tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus
                        elit.
                    </p>

                    <span class="s-text9">
                        Photo by @nancyward
                    </span>
                </div>
            </a>
        </div>

        <!-- Block4 -->
        <div class="block4 wrap-pic-w">
            <img src="asset_custom/images/gallery-15.jpg" alt="IMG-INSTAGRAM">

            <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
                <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
                    <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
                    <span class="p-t-2">39</span>
                </span>

                <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                    <p class="s-text10 m-b-15 h-size1 of-hidden">
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in
                        tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus
                        elit.
                    </p>

                    <span class="s-text9">
                        Photo by @nancyward
                    </span>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection