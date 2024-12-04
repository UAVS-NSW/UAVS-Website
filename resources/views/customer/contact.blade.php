@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body') 
		<div class="I-page-contact">
			<div class="contact-header">
				<div class="wrapper">
					<h3>Contact to us.</h3>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</div>
			</div>
			<div class="contact-content">
				<div class="wrapper">
					<a href="" class="email-content">UAVS@gmail.com</a> 
					<div class="form-wrapper">
						<div class="form-item"> 
							<input type="text" class="form-input" placeholder="Name">
						</div>
						<div class="form-item"> 
							<input type="text" class="form-input" placeholder="Email">
						</div>
					</div>
					<div class="form-wrapper">
						<div class="form-item"> 
							<input type="text" class="form-input" placeholder="Subject">
						</div>
						<div class="form-item"> 
							<input type="text" class="form-input" placeholder="Phone">
						</div>
					</div>
					<div class="form-wrapper">
						<div class="form-item area">
							<textarea class="form-input " rows="10" placeholder="Type your message here"></textarea>
						</div> 
					</div>
					<div class="form-submit">
						<a href="" class="linked-link">Send your message</a>
					</div>
				</div>
			</div>
		</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script> 
@endsection()