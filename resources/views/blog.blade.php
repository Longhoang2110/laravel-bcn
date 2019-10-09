@extends('layout')
@section('content')

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://cdn57.androidauthority.net/wp-content/uploads/2015/11/00-best-backgrounds-and-wallpaper-apps-for-android.jpg );">
    <h2 class="l-text2 t-center">
        Kiến thức sản phẩm
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-60">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-9 p-b-75">
                <div class="p-r-50 p-r-0-lg">
                    @foreach($blogs as $item)
                        <div class="item-blog p-b-80">
                            <a href="{{route('blog-detail',$item->id)}}" class="item-blog-img pos-relative dis-block hov-img-zoom">
                                <img src="images/img/{{$item->thumbnail}}" alt="IMG-BLOG">
                            </a>

                            <div class="item-blog-txt p-t-33">
                                <h4 class="p-b-11">
                                    <a href="{{route('blog-detail',$item->id)}}" class="m-text24">
                                        {{$item->name}}
                                    </a>
                                </h4>

                                <div class="s-text8 flex-w flex-m p-b-21">
                                    <span>
                                        By Admin
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>

                                    <span>
                                        installation
                                        <span class="m-l-3 m-r-6">|</span>
                                    </span>

                                    <span>
                                        8 Bình luận
                                    </span>
                                </div>

                                <p class="p-b-12">
                                    {{$item->description}}
                                </p>

                                <a href="{{route('blog-detail',$item->id)}}" class="s-text20">
                                    Đọc tiếp
                                    <i class="fa fa-long-arrow-right m-l-8" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4 col-lg-3 p-b-75">
            <div class="rightbar">
                <div>
                    <h4 id="hinder" type="button"class="m-text11" style="background-color: #e65540;text-align: center;line-height: 3;">
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
                </div>
                    <div>
                    <h4 id="hinder2" type="button"class="m-text11" style="background-color: #e65540;text-align: center;line-height:3;">
                        <i class="fa fa-list" aria-hidden="true"></i>&nbsp Danh mục sản phẩm
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
                                <a href="product-detail.html" class="dis-block wrap-pic-w w-size22 m-r-20 trans-0-4 hov4">
                                    <img src="images/img/{{$item->thumbnail}}" style="width:90px;height:90px" alt="IMG-PRODUCT">
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
            </div>
        </div>
    </div>
</section>
@endsection
