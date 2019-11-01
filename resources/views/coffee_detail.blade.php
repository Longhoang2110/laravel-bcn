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
                            <div class="s-text8 flex-w flex-m p-b-21">
                                {{$coffee->description}}
                            </h4>
                            </div>


                            <div class="s-text8 flex-w flex-m p-b-21">
                                <span>
                                    By Admin
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    28 Dec, 2019
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    Build,Installation
                                    <span class="m-l-3 m-r-6">|</span>
                                </span>

                                <span>
                                    8 Comments
                                </span>
                            </div>

                            <div>
                                {!!$coffee->content!!}
                            </div>
                        </div>
                    </div>

                    <!-- Leave a comment -->
                    
                </div>
</div>

            <div class="col-md-4 col-lg-3 p-b-75">
                <div class="rightbar">
                    <div>
                        
                </div>
                </div>
        </div>
    </div>
</section>
@endsection