@extends('layout')
@section('content')
<section class="bgwhite p-t-25 p-b-65">
    <div class="container">
        <div class="row">

            <div id="nav" class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <h4 id="hinder" class="m-text11"
                        style="background-color: #ed9f48;text-align: center;line-height: 3;margin-bottom: 5px;color:white">
                        <i aria-hidden="true"></i>&nbsp Danh mục sản phẩm
                    </h4>
                    <script>
                    $(document).ready(function() {
                        $("#hinder").click(function() {
                            $("#an").toggle(200);
                        })
                    })
                    </script>
                    <div class="left">
                        <ul id="an" class="p-b-1">
                            <li class="p-t-4 p-b-8 ">
                                <div style="padding:5px">
                                    <a href="{{route('product-list')}}" class="m-text11" style="color:white">
                                                Tất cả sản phẩm
                                        </a>
                                        
                                        <span class=" pull-right"><i class="fa fa-angle-right" style="color:#fff;"
                                            aria-hidden="true"></i></span>
                                </div>
                            </li>
                            @foreach($category_product as $item)
                            <li class="p-t-4 " style="border-top:1px solid #fff;">
                                <div style="padding:5px">
                                    <a href="{{route('category-product',['categoryname'=>$item->name,'id'=>$item->id])}}"
                                        class="m-text11" style="color:white">
                                        {{$item->name}}
                                    </a>
                                    <span onclick="test({{$item->id}})" class="pull-right "><i class="fa fa-angle-right"
                                            style="color:#fff;" aria-hidden="true"></i></span>

                                </div>
                                <ul id="{{$item->id}}" style="display:none;">
                                    @foreach($group as $itemChild)
                                    @if($itemChild->group == $item->id)
                                    <li class="p-t-4  "
                                        style="border-top:1px solid #fff;padding:5px;padding-left: 15px; background-color:#f4be84;">
                                        <a href="{{route('group_product-coffee',['group_productname'=>$itemChild->name,'id'=>$itemChild->id])}}"
                                            class="m-text11" style="color:white;font-size: 14px;">
                                            {{$itemChild->name}}
                                        </a>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                            <script>
                            function test(id) {
                                $("#" + id).toggle(200);
                            }
                            </script>

                        </ul>
                    </div>
                    <div class="d-none d-sm-block">
                        <h4 id="hinder2" data-target="#an2" class="m-text11"
                            style="background-color: #ed9f48;text-align: center;line-height: 3;margin-bottom: 5px;color:white">
                            <i class="fa fa-book" aria-hidden="true"></i>&nbsp Bài viết quan tâm
                        </h4>
                        <script>
                        $(document).ready(function() {
                            $("#hinder2").click(function() {
                                $("#an2").toggle(200);
                            })
                        })
                        </script>
                        <ul id="an2" class="p-b-54" style="background-color: #fff ; !important">
                            @foreach($blog as $item)
                            <li class="flex-w p-b-20">
                                <a href="{{route('blog-detail',$item->id)}}"
                                    class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="images/img/{{$item->thumbnail}}" style="width:90px;height:90px"
                                        alt="{{$item->alt}}">
                                </a>

                                <div class="w-size23 p-t-5">
                                    <a href="{{route('blog-detail',$item->id)}}" class="s-text20">
                                        {{$item->name}}
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                <div class="text-center">
                    <span class="m-text14">{{$nameCate}}</span>
                </div>
                <div class="row">
                    @foreach($coffees as $item)

                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                        <!-- Block2 -->
                        <div class="block2">
                            {{-- <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew"> --}}
                            @if($item->discount < $item->price && $item->discount != 0)
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                 @else
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                            @endif
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
                                            class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Mua ngay
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="{{route('product-detail',['id'=>$item->id])}}"
                                    class="block2-name dis-block s-text3 p-b-5">
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
                                    @else
                            <span class="block2-price m-text6 p-r-5"style="text-transform: unset;">
                                    Giá NY: {{$item->price}} VND
                            </span>
                                @endif
                            <br>
                            @if($item->discount < $item->price && $item->discount != 0)
                            <span class="block2-price m-text8 p-r-5"style="text-transform: unset;">
                                Giá Sale: @convert($item->discount) VND
                            </span>
                            @endif
                            <br>
                            @if($item->discount < $item->price && $item->discount != 0)
                                <div class="s-text8 flex-w flex-m p-b-21">
                                        <span class="block2-price m-text6 p-r-5"style="font-family: Montserrat-bold;color:#e60808">
                                         Sale Up:&nbsp{{$item->discount_up}} %
                                        </span>
                                </div>
                            @endif    
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</section>
@endsection