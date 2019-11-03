@extends('layout')
@section('content')
<!-- breadcrumb -->
{{-- <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="index.html" class="s-text16">
        Home
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <a href="blog.html" class="s-text16">
        Blog
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    
</div> --}}

<!-- content page -->
<section class="bgwhite p-t-60 p-b-25">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-80">
                <div class="p-r-50 p-r-0-lg">
                    <div class="p-b-40">
                        <div class="blog-detail-img wrap-pic-w">
                            <img src="images/img/{{$coffee->thumbnail}}" alt="{{$coffee->alt}}">
                        </div>

                        <div class="blog-detail-txt p-t-33">
                            <h4 class="p-b-11 m-text24">
                                {{$coffee->name}}
                            </h4>
                                @if($coffee->discount < $coffee->price && $coffee->discount != 0)
                                <span class="block2-price m-text6 p-r-5"style="text-decoration: line-through;font-family: Montserrat-bold;">
                                        Giá NY: @convert($coffee->price) VND
                                </span>
                                        @else
                                <div class="s-text8 flex-w flex-m p-b-21">
                                <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                        Giá NY: @convert($coffee->price) VND
                                </span>
                                </div>
                                    @endif
                                <br>
                                @if($coffee->discount < $coffee->price && $coffee->discount != 0)
                                <span class="block2-price m-text8 p-r-5"style="font-family: Montserrat-bold;;color:#e60808">
                                    Giá Sale: @convert($coffee->discount) VND
                                </span>
                                @endif
                                @if($coffee->discount < $coffee->price && $coffee->discount != 0)
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;color:#e60808">
                                         Sale Up:&nbsp{{$coffee->discount_up}} %
                                        </span>
                                </div>
                                @endif
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <i class="fa fa-check-square-o" aria-hidden="true"style="font-size: x-large;color:#e60808;">&nbsp</i>
                                    <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                        Hãng sản xuất:&nbsp{{$coffee->producer}} 
                                    </span>
                                </div>
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <i class="fa fa-check-square-o" aria-hidden="true"style="font-size: x-large;color:#e60808;">&nbsp</i>
                                    <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                        Mã sản phẩm:&nbsp{{$coffee->product_code}} 
                                    </span>
                                </div>
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <i class="fa fa-check-square-o" aria-hidden="true"style="font-size: x-large;color:#e60808;">&nbsp</i>
                                    <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                        Chế độ bảo hành:&nbsp{{$coffee->product_guarantee}} 
                                    </span>
                                </div>
                                @if($coffee->product_status == 1)
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <i class="fa fa-check-square-o" aria-hidden="true"style="font-size: x-large;color:#e60808;">&nbsp</i>
                                        <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                            Tình trạng sản phẩm:&nbsp Còn hàng
                                        </span>
                                </div>
                                    @else
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <i class="fa fa-check-square-o" aria-hidden="true"style="font-size: x-large;color:#e60808;">&nbsp</i>
                                        <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;">
                                            Tình trạng sảm phẩm:&nbsp Hết hàng
                                        </span>
                                </div>
                                @endif
                            <div class="s-text8 flex-w flex-m p-b-21">
                                {{$coffee->description}}
                            </h4>
                            </div>
                            <div class="s-text8 flex-w flex-m p-b-21">
                                    <i class="fa fa-calendar" aria-hidden="true">&nbsp</i>
                                    <span>
                                        By Admin
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>
                                    <span>
                                        Build,Installation
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>
    
                                    <span>
                                        {{$coffee->cout_view}}  lượt xem
                                    </span>
                            </div>
                            <div>
                                {!!$coffee->content!!}
                            </div>
                        </div>
                    </div>

                    <!-- Leave a comment -->
                    <form class="leave-comment" style="pointer-events: none;">
                        <h4 class="m-text25 p-b-14">
                            Đánh giá sản phẩm
                        </h4>

                        <p class="s-text8 p-b-40">
                            Email của bạn *
                        </p>

                        <textarea class="dis-block s-text7 size18 bo12 p-l-18 p-r-18 p-t-13 m-b-20" name="comment" placeholder="Comment..."></textarea>

                        <div class="bo12 of-hidden size19 m-b-20">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="name" placeholder="Tên *">
                        </div>

                        <div class="bo12 of-hidden size19 m-b-20">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="email" placeholder="Email *">
                        </div>

                        <div class="bo12 of-hidden size19 m-b-30">
                            <input class="sizefull s-text7 p-l-18 p-r-18" type="text" name="website" placeholder="Website">
                        </div>

                        <div class="w-size24">
                            <!-- Button -->
                            <button class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                Đăng bình luận
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-75">
                <div class="rightbar">
                    {{-- <div>
                        <h4 id="hinder"class="m-text11" style="background-color: #ed9f48;text-align: center;line-height: 3;margin-bottom: 5px;">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp Danh mục bài viết
                        </h4>
                        <script>
                            $(document).ready(function(){
                                $("#hinder").click(function(){
                                    $("#an").toggle(500);
                                })
                            })
                        </script>
                        <div class="left">
                            <ul id= "an">
                                @foreach($category_blog as $item)
                                    <li class="p-t-4 p-b-8 bo7">
                                    <div style="padding:5px">
                                        <a href="{{route('category-blog',$item->id)}}" class="m-text11">
                                                {{$item->name}}
                                        </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> --}}
                        <div>
                        <h4 id="hinder2"class="m-text11" style="background-color: #ed9f48;text-align: center;line-height:3;margin-bottom: 5px;color:#fff;">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp Sản phẩm tương tự
                        </h4>
                        <script>
                            $(document).ready(function(){
                                $("#hinder2").click(function(){
                                    $("#an2").toggle(500);
                                })
                            })
                        </script>
                            <ul id="an2" class="bgwhite">
                            @foreach($coffees as $item)
                                <li class="flex-w p-b-20">
                                    <a href="{{route('product-detail',['id'=>$item->id])}}" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="images/img/{{$item->thumbnail}}" style="width:90px;height:90px" alt="{{$item->alt}}">
                                    </a>
    
                                    <div class="w-size23 p-t-5">
                                        <a href="{{route('product-detail',$item->id)}}" class="s-text20">
                                            {{$item->name}}
                                        </a>
                                        @if($item->discount < $item->price && $item->discount != 0)
                                        <span class="block2-price m-text6 p-r-5"style="text-transform: unset;text-decoration: line-through;">
                                                Giá NY: @convert($item->price) VND
                                        </span>
                                                @else
                                        <span class="block2-price m-text6 p-r-5"style="text-transform: unset;">
                                                Giá NY: @convert($item->price) VND
                                        </span>
                                            @endif
                                        <br>
                                        @if($item->discount < $item->price && $item->discount != 0)
                                        <span class="block2-price m-text8 p-r-5"style="text-transform: unset;">
                                            Giá Sale: @convert($item->discount) VND
                                        </span>
                                        @endif                                    
                                    </div>
                                </li>
                            @endforeach
                            </ul>
                        </div>   
                </div>
        </div>
    </div>
</section>
@endsection
