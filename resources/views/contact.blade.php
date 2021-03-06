@extends('layout')
@section('content')
    <!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://cdn57.androidauthority.net/wp-content/uploads/2015/11/00-best-backgrounds-and-wallpaper-apps-for-android.jpg );;">
		<h2 class="l-text2 t-center">
			Liên Hệ Với Chúng Tôi
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
                        <div id="googleMap" style="width: 550px; height: 450px;">Google Map</div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
                <form class="leave-comment" action="{{route('buyer-postadd')}}" method="POST" enctype="multipart/form-data">
						<h4 class="m-text26 p-b-36 p-t-15">
							Thông tin khách hàng
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Họ và tên">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Số điện thoại">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email ">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Ghi chú"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Gửi
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
    </section>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    var gmap = new google.maps.LatLng(10.7715391, 106.7682027);
    var marker;
    function initialize()
    {
        var mapProp = {
            center:new google.maps.LatLng(10.7715391, 106.7682027),
            zoom:16,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
    
        var map=new google.maps.Map(document.getElementById("googleMap")
        ,mapProp);
 
        var styles = [
            {
            featureType: 'road.arterial',
            elementType: 'all',
            stylers: [
                { hue: '#fff' },
                { saturation: 100 },
                { lightness: -48 },
                { visibility: 'on' }
            ]
            },{
            featureType: 'road',
            elementType: 'all',
            stylers: [
        
            ]
            },
            {
                featureType: 'water',
                elementType: 'geometry.fill',
                stylers: [
                    { color: '#adc9b8' }
                ]
            },{
                featureType: 'landscape.natural',
                elementType: 'all',
                stylers: [
                    { hue: '#809f80' },
                    { lightness: -35 }
                ]
            }
        ];
        
        var styledMapType = new google.maps.StyledMapType(styles);
        map.mapTypes.set('Styled', styledMapType);
        
        marker = new google.maps.Marker({
            map:map,
            draggable:true,
            animation: google.maps.Animation.DROP,
            position: gmap
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
        }
        
        function toggleBounce() {
        
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
        }
        
            google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection