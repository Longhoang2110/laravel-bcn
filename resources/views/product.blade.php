@extends('layout')
@section('content')
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
            
                <div id="nav"class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <h4 id="hinder" type="button"class="m-text11" style="background-color: #2a8dd2;text-align: center;line-height: 3;margin-bottom: 15px;">
                            <i class="fa fa-list" aria-hidden="true"></i>&nbsp Danh mục sản phẩm
                        </h4>       
                        <script>
                            $(document).ready(function(){
                                $("#hinder").click(function(){
                                    $("#an").toggle(500);
                                })
                            })
                        </script>
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
                                    </a>
                                    <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                        <h4 id="hinder2" type="button"class="m-text11" style="background-color: #2a8dd2;text-align: center;line-height: 3;margin-bottom: 15px;">
                            <i  class="fa fa-book" aria-hidden="true"></i>&nbsp Bài viết quan tâm
                        </h4>
                        <script>
                            $(document).ready(function(){
                                $("#hinder2").click(function(){
                                    $("#an2").toggle(500);
                                })
                            })
                        </script>
                        <ul id="an2"class="p-b-54" style="background-color: #fff ; !important">
                        @foreach($blog as $item)
                            <li class="flex-w p-b-20">
                                <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="images/img/{{$item->thumbnail}}" style="width:90px;height:90px" alt="IMG-PRODUCT">
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

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!-- Product -->
                    <div class="text-center p-b-65">
                        <span class="m-text14">{{$nameCate}}</span>
                    </div>
                    <div class="row">
                        @foreach($coffees as $item)

                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/img/{{$item->thumbnail}}" style="width:270;height:270px" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <a href="{{route('buyer-getadd',$item->id)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Mua ngay
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
        </div>
    </section>
@endsection
