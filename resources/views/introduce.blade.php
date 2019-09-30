@extends('layout')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://cdn57.androidauthority.net/wp-content/uploads/2015/11/00-best-backgrounds-and-wallpaper-apps-for-android.jpg );;">
    <h2 class="l-text2 t-center">
        Giới Thiệu
    </h2>
</section>
<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			{!!$page[0]->content!!}
		</div>
    </section>
@endsection
