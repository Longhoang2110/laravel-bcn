@extends('layout')
@section('content')
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(http://2.bp.blogspot.com/-3K5uwPmn0vI/UkVMjed_51I/AAAAAAAADoA/Wmbe1NgrOAE/s1600/230_coffee_facebook_cover.jpg);">
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
