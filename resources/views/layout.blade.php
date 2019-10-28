<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<base href="{{asset('')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="https://batchongnang.herokuapp.com/asset_custom/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/fonts/font-awesome-4.7.0/css/font-awesome.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=https://batchongnang.herokuapp.com/asset_custom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="asset_custom/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://batchongnang.herokuapp.com/asset_custom/css/main.css">
	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</head>
<body class="animsition">

	<!-- Header -->
	<header class="header1"> 
		<!-- Header desktop -->
		<div class="container-menu-header">
			<div class="topbar">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<span class="topbar-child1">
					Chất lượng - Uy Tín  hàng đầu!
				</span>
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{!! route('home') !!}" class="logo">
					<img src="asset_custom/images/web2.png" style="max-height: 55px" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{!! route('home') !!}">Trang chủ</a>
							</li>

							<li>
								<a href="{{route('content','1')}}">Giới thiệu</a>
							</li>

							<li>
								<a href="{!!route('product')!!}">Sản phẩm</a>
								<ul class="sub_menu">
										@foreach($category_product as $item)
										<li class="p-t-4 p-b-8 bo7">
												<a href="{{route('category-coffee',['categoryname'=>$item->name,'id'=>$item->id])}}" class="m-text11">
														{{$item->name}}														
															<ul class="sub_menu">
																@foreach($group as $itemChild)
																	@if($itemChild->group == $item->id)
																<li class="p-t-4 p-b-8 bo7">
																	<a href="{{route('group_product-coffee',['group_productname'=>$itemChild->name,'id'=>$itemChild->id])}}" class="m-text11">
																			{{$itemChild->name}}
																	</a>
																</li>
																	@endif
																@endforeach
															</ul>														
												</a>
										</li>
										@endforeach
								</ul>
							</li>

							<li>
								<a href="{!! route('blog') !!}">Bài viết</a>
								<ul class="sub_menu">
										@foreach($category_blog as $item)
										<li class="p-t-4 p-b-8 bo7">
											<a href="{{route('category-blog',$item->id)}}" class="m-text11">
													{{$item->name}}
													
											</a>

										</li>
									@endforeach
								</ul>
							</li>

							<li>
								<a href="{!! route('contact') !!}">Liên hệ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="{!! route('home') !!}" class="logo-mobile">
				<img src="asset_custom/images/web1.png" style="max-height: 55px" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<!-- <div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="https://batchongnang.herokuapp.com/asset_custom/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x $19.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="https://batchongnang.herokuapp.com/asset_custom/images/item-cart-02.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x $39.00
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="https://batchongnang.herokuapp.com/asset_custom/images/item-cart-03.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x $17.00
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

		<!-- Menu Mobile -->
		<div class="wrap-side-menu" >
			<nav class="side-menu">
				<ul class="main-menu">
					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
                            Chất lượng - Uy Tín  hàng đầu!
						</span>
					</li>

					<li class="item-topbar-mobile p-l-10">
						<div class="topbar-social-mobile">
							<a href="#" class="topbar-social-item fa fa-facebook"></a>
							<a href="#" class="topbar-social-item fa fa-instagram"></a>
							<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
							<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
							<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
						</div>
					</li>

					<li class="item-menu-mobile">
                        <a href="{!! route('home') !!}">Trang chủ</a>
					</li>

					<li class="item-menu-mobile">
                        <a href="{{route('content','1')}}">Giới thiệu</a>
                    </li>

                    <li class="item-menu-mobile">
						<a href="{!!route('product')!!}">Sản phẩm</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="{!! route('blog') !!}">Bài viết</a>
                    </li>

                    {{-- <li>
                        <a href="blog.html">Blog</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="about.html">About</a>
                    </li> --}}

                    <li class="item-menu-mobile">
                        <a href="{!! route('contact') !!}">Liên hệ</a>
                    </li>
				</ul>
			</nav>
		</div>
    </header>

		@yield('content')


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45"style="border-top: solid; border-color: #f1b26b;background-color: #e4e4e4;">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					CÔNG TY MÁI HIÊN DI ĐỘNG HỮU CÔNG
				</h4>

				<div>
						@foreach($address as $item)
					<p class="s-text7 w-size27">
						{{$item->address}}
					</p>
						@endforeach

				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<a href="{{route('content','1')}}" class="s-text12 p-b-30">
					THÔNG TIN
				</a>

				<ul>
					<li class="p-b-9">
						<a href="{{route('content','2')}}" class="s-text7">
							Hệ thông phân phối
						</a>
					</li>
					<li class="p-b-9">
						<a href="{{route('content','3')}}" class="s-text7">
							Lắp đặt
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<a href="{{route('content','1')}}" class="s-text12 p-b-30">
					 KHÁCH HÀNG
				</a>

				<ul>
					<li class="p-b-9">
							<a href="{{route('content','4')}}" class="s-text7">
							Sửa chữa
						</a>
					</li>

					<li class="p-b-9">
							<a href="{{route('content','5')}}" class="s-text7">
							Bảo hành
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<a  href="{{route('content','1')}}" class="s-text12 p-b-30">
					HỖ TRỢ
				</a>

				<ul>
					<li class="p-b-9">
						<a href="{{route('content','1')}}" class="s-text7">
							Tư vấn
						</a>
					</li>
					<li class="p-b-9">
						<a href="{{route('content','1')}}" class="s-text7">
							Khuyến mãi
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<a href="{{route('content','1')}}" class="s-text12 p-b-30">
					LIÊN HỆ
				</a>
					<li class="p-b-9">
						<a href="{{route('content','1')}}" class="s-text7">
							Liên hệ
						</a>
					</li>
					<li class="p-b-9">
						<a href="{{route('content','1')}}" class="s-text7">
							Dịch vụ khác
						</a>
					</li>
				<div class="flex-m p-t-30">
					<a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
					<a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
				</div>
				<form>
					<div class="effect1 w-size9">
						<input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
						<span class="effect1-line"></span>
					</div>

					<div class="w-size2 p-t-20">
						<!-- Button -->
						<button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
							FANPAGE
						</button>
					</div>
					<div class="hotline-phone-ring-wrap">
						<div class="hotline-phone-ring">
							<div class="hotline-phone-ring-circle"></div>
							<div class="hotline-phone-ring-circle-fill"></div>
							<div class="hotline-phone-ring-img-circle">
							<a href="tel:0943515789" class="pps-btn-img">
								<img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
							</a>
							</div>
						</div>
						<div class="hotline-bar">
							<a href="tel:0943515789">
								<span class="text-hotline">0943515789</span>
							</a>
						</div>
					</div>
					<!-- Load Facebook SDK for JavaScript -->
					<!-- <div class="zalo-chat-widget" data-oaid="579745863508352884" data-welcome-message="Rất vui khi được hỗ trợ bạn!" data-autopopup="0" data-width="350" data-height="420"></div> -->

					<!-- <script src="https://sp.zalo.me/plugins/sdk.js"></script> -->

					<!-- Your customer chat code -->
					<div class="fb-customerchat"
					  attribution=setup_tool
					  page_id="111917390208718">
					</div>

				</form>

			</div>
		</div>

		<div class="t-center p-l-15 p-r-15">
			<a href="#">
				<img class="h-size2" src="https://batchongnang.herokuapp.com/asset_custom/images/icons/paypal.png" alt="IMG-PAYPAL">
			</a>

			<a href="#">
				<img class="h-size2" src="https://batchongnang.herokuapp.com/asset_custom/images/icons/visa.png" alt="IMG-VISA">
			</a>

			<a href="#">
				<img class="h-size2" src="https://batchongnang.herokuapp.com/asset_custom/images/icons/mastercard.png" alt="IMG-MASTERCARD">
			</a>

			<a href="#">
				<img class="h-size2" src="https://batchongnang.herokuapp.com/asset_custom/images/icons/express.png" alt="IMG-EXPRESS">
			</a>

			<a href="#">
				<img class="h-size2" src="https://batchongnang.herokuapp.com/asset_custom/images/icons/discover.png" alt="IMG-DISCOVER">
			</a>

			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="https://batchongnang.herokuapp.com/asset_custom/vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script src="https://batchongnang.herokuapp.com/asset_custom/js/main.js"></script>

</body>
</html>
