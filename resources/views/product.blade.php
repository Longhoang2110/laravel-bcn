@extends('layout')
@section('content')
    <section class="bgwhite p-t-55 p-b-65">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                    <div class="leftbar p-r-20 p-r-0-sm">
                        <h4 class="m-text14 p-b-7">
                            Danh mục sản phẩm
                        </h4>

                        <ul class="p-b-54">
                                @foreach($category as $item)
                            <li class="p-t-4">
                                 <a href="{{route('category-coffee',$item->id)}}" class="m-text11">
                                        {{$item->name}}
                            </li>
                            @endforeach
                        </ul>
                        <h4 class="m-text14 p-b-32">
							Sản phẩm mới nhất
                        </h4>
                        <ul class="p-b-54">
                        @foreach($coffees as $item)
                            <li class="flex-w p-b-20">
                                <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="images/img/{{$item->thumbnail}}" style="width:90px;height:120px" alt="IMG-PRODUCT">
                                </a>

                                <div class="w-size23 p-t-5">
                                    <a href="{{route('coffee-detail',$item->id)}}" class="s-text20">
                                        {{$item->name}}
                                    </a>

                                    <span class="dis-block s-text17 p-t-6">
                                        {{$item->price}} vnd
                                    </span>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                    <!-- Product -->
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

                    <!-- Pagination -->
                    {{-- <div class="pagination flex-m flex-w p-t-26">
                        <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                        <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
