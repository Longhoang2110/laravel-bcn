@extends('layout')
@section('content')
<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <div class="slick1">
                @foreach($displays as $item)
            {{-- <div class="item-slick1 item1-slick1" style="background-image: url();">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
                        Chất lượng đỉnh cao
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                        BẠT MÁI CHO THƯƠNG HIỆU CÔNG PHI
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                        <!-- Button -->
                        <a href="{!!route('product')!!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Mua ngay!
                        </a>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="item-slick1 item2-slick1" style="background-image: url(https://www.maichephatdat.com/sites/default/files/field/image/products/11041080_395632410619044_2705156409013219530_n-1.jpg);">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
                        Chất lượng đỉnh cao
                    </span>

                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                        BẠT MÁI CHO THƯƠNG HIỆU CÔNG PHI                        
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                        <!-- Button -->
                        <a href="{!!route('product')!!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Mua ngay!
                        </a>
                    </div>
                </div>
            </div> --}}
            <div class="item-slick1 item3-slick1" style="background-image: url(images/img/{{$item->thumbnail}})">
                <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                    <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
                        {{$item->name}}
                    </span>
                    <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            {{$item->description}}
                    </h2>

                    <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                        <!-- Button -->
                        <a href="{!!route('product')!!}" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                            Mua ngay!
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Shipping -->
<section class="shipping bgwhite p-t-62 p-b-46">
    <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center">
            Điều tạo ra khác biệt
        </h3>
    </div>
    <div class="flex-w p-l-15 p-r-15">
        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="t-center"><img src="https://cdn3.iconfinder.com/data/icons/business-finance-40/512/14-128.png" alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Lắp Đặt Tại Nhà
            </h4>

            <span class="s-text11 t-center">
                    Ngay từ những ngày đầu, chúng tôi đã tập trung vào sự phong phú trong mùi vị. 
                    Hương thơm của 5 loại cafe khác nhau cùng hoà quyện làm cho mùi vị cafe espresso của chúng tôi thật đặc biệt.
                    Khác hẳn so với những dòng cafe thông thường bạn mua ngoài thị trường.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
            <h4 class="t-center"><img src="https://cdn3.iconfinder.com/data/icons/status/100/check_shield-128.png" alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Bảo Hành Trọn Đời
            </h4>

            <span class="s-text11 t-center">
                    Dựa trên kích cỡ – độ ẩm – màu sắc – tỷ lệ sâu vỡ mốc – tạp chất mà người ta chia cafe thành cafe xuất khẩu loại 1, 2, 3, 4, 5. 
                    Trong đó loại 1 là loại tốt nhất. Và chúng tôi chỉ dùng cafe nhân chất lượng loại 1.
                    Không những vậy, chúng tôi còn nhặt tay một lần nữa để loại bỏ tạp chất – sâu vỡ mốc tới mức tối đa.
            </span>
        </div>

        <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
            <h4 class="t-center"><img src="https://cdn2.iconfinder.com/data/icons/miscellaneous-7/100/Speed-128.png" alt="IMG-PRODUCT"></span></h4>
            <h4 class="m-text12 t-center">
                Nhanh Chóng - Tiện Lợi
            </h4>

            <span class="s-text11 t-center">
                    Chúng tôi rang cafe dựa trên kiến thức quốc tế – đặc biệt là của Ý – và những nghiên cứu không ngừng về các loại hạt cafe chúng tôi đang sử dụng. Chúng tôi học hỏi và nghiên cứu mỗi ngày. 
                    Đó không chỉ đơn thuần là công việc. Mà là đam mê. Là cuộc sống. Không chỉ cafe nhân ngon nhất mà còn phải có trình độ rang tốt nhất.
            </span>
        </div>
    </div>
</section>

<!-- New Product -->
<section class="newproduct bgwhite p-t-45 p-b-105" style="padding-bottom: 50px;">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Sản phẩm của chúng tôi
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                @foreach($coffees as $item)
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            <img src="images/img/{{$item->thumbnail}}" style="width:270;height:270px" alt="{{$item->alt}}">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <a href="{{route('buyer-getadd',$item->id)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1">
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
                Những Lựa Chọn Cho Bạn
            </h3>
        </div>

        <div class="row">
            @foreach($blogs as $item)
                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="{{route('blog-detail',$item->id)}}" class="block3-img dis-block hov-img-zoom">
                            <img src="images/img/{{$item->thumbnail}}" style="width:720px;height:539px" alt="IMG-BLOG">
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
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
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
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
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
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
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
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
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
                        Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
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