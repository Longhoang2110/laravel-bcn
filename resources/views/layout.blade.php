<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<base href="{{asset('')}}">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="asset_custom/images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/css/util.css">
	<link rel="stylesheet" type="text/css" href="http://batchongnang.herokuapp.com/asset_custom/css/main.css">
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

				{{-- <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>VN</option>
							<option>EN</option>
						</select>
					</div>
				</div> --}}
			</div>

			<div class="wrap_header">
				<!-- Logo -->
				<a href="{!! route('home') !!}" class="logo">
					<img src="https://scontent.fsgn2-3.fna.fbcdn.net/v/t1.0-9/71050667_2381092098800049_1524538846904057856_n.jpg?_nc_cat=106&_nc_oc=AQkcZWwWOSkCQAGdQ66shznw_4BfRA3MvAdspi7E1ZtgLvGBj1stOu3LiiYxp0ehg0c&_nc_ht=scontent.fsgn2-3.fna&oh=fba438c505ab5cf66cf0c059508dccce&oe=5E31FFA8" style="max-height: 55px" alt="IMG-LOGO">
				</a>

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{!! route('home') !!}">Trang chủ</a>
								{{-- <ul class="sub_menu">
									<li><a href="index.html">Homepage V1</a></li>
									<li><a href="home-02.html">Homepage V2</a></li>
									<li><a href="home-03.html">Homepage V3</a></li>
								</ul> --}}
							</li>

							<li>
								<a href="{!! route('introduce') !!}">Giới thiệu</a>
							</li>

							<li>
								<a href="{!!route('product')!!}">Sản phẩm</a>
							</li>

							<li>
								<a href="{!! route('blog') !!}">Blog</a>
							</li>

							{{-- <li>
								<a href="blog.html">Blog</a>
							</li>

							<li>
								<a href="about.html">About</a>
							</li> --}}

							<li>
								<a href="{!! route('contact') !!}">Liên hệ</a>
							</li>
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				{{-- <div class="header-icons">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
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
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.html" class="logo-mobile">
				<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/logo.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="https://batchongnang.herokuapp.com/asset_custom/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
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
									<!-- Button -->
									<a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

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
							Free shipping for standard order over $100
						</span>
					</li>

					<li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

							<div class="topbar-language rs1-select2">
								<select class="selection-1" name="time">
									<option>USD</option>
									<option>EUR</option>
								</select>
							</div>
						</div>
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
						<a href="index.html">Home</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Shop</a>
					</li>

					<li class="item-menu-mobile">
						<a href="product.html">Sale</a>
					</li>

					<li class="item-menu-mobile">
						<a href="cart.html">Features</a>
					</li>

					<li class="item-menu-mobile">
						<a href="blog.html">Blog</a>
					</li>

					<li class="item-menu-mobile">
						<a href="about.html">About</a>
					</li>

					<li class="item-menu-mobile">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
    </header>

		@yield('content')


	<!-- Footer -->
	<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
		<div class="flex-w p-b-90">
			<div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					CÔNG TY MÁI HIÊN DI ĐỘNG HỮU CÔNG
				</h4>

				<div>
					<p class="s-text7 w-size27">
						Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
					</p>
					<div id="map" style="width:200px;height:200px;">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!
						1d3723.8977453149246!2d105.83245751424809!3d21.036777085994046!
						2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!
						1s0x3135aba15ec15d17%3A0x620e85c2cfe14d4c!2zTMSDbmcgSOG7kyBDaMOtIE1pbmg!
						5e0!3m2!1svi!2sus!4v1501056274257" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>

					
				</div>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					THÔNG TIN
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Hệ thông phân phối
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sản phẩm
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Bài viết
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Lắp đặt
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					 KHÁCH HÀNG
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Lắp đặt
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Sửa chữa
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Bảo hành
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Dịch vụ khác
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
				<h4 class="s-text12 p-b-30">
					HỖ TRỢ
				</h4>

				<ul>
					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tư vấn lắp đặt
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Tư vấn sửa chữa
						</a>
					</li>

					<li class="p-b-9">
						<a href="#" class="s-text7">
							Khuyến mãi
						</a>
					</li>
				</ul>
			</div>

			<div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
				<h4 class="s-text12 p-b-30">
					LIÊN HỆ 
				</h4>
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
							<a href="tel:0987654321" class="pps-btn-img">
								<img src="https://nguyenhung.net/wp-content/uploads/2019/05/icon-call-nh.png" alt="Gọi điện thoại" width="50">
							</a>
							</div>
						</div>
						<div class="hotline-bar">
							<a href="tel:0962283727">
								<span class="text-hotline">0962283727</span>
							</a>
						</div>
					</div>
					<!-- Load Facebook SDK for JavaScript -->
					<div id="fb-root"></div>
					<script>
					  window.fbAsyncInit = function() {
						FB.init({
						  appId            : '1386617178176018',
						  xfbml            : true,
						  version          : 'v4.0'
						});
					  };
			  
					  (function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
			  
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
