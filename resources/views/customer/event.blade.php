@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body') 
	<div class="I-page-event">
		<div class="event-header">
			<div class="wrapper">
				<h3>We're always doing new things.</h3>
				<p>Every year, UAVS hosts a variety of events, spanning from warm welcomes and team-building activities to engaging academic pursuits. Our aim is to create a vibrant hub where students can build connections, stay engaged, and enjoy memorable moments throughout their journey in Australia. Join us in making your study experience an unforgettable adventure!</p>
			</div>
		</div>
		<div class="wrapper">
			<div class="event-main">
				<a href="#" class="event-item" style="background-image: url('{{ asset("assets/images/event.jpg")  }}');">
					<div class="item-title">
						UAVS Events
					</div>
				</a>
				<a href="#" class="event-item" style="background-image: url('{{ asset("assets/images/event.jpg")  }}');">
					<div class="item-title">
						Student Events
					</div>
				</a> 
			</div>
		</div>
	</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script> 
@endsection()