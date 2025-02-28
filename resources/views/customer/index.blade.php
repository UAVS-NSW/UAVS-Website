@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')
		<div class="I-banner" style="background-image: url('assets/images/uavs-banner.png');">
			<div class="wrapper">
				<div class="banner-wrapper">

				</div>
			</div>
		</div>
		<div class="I-about">
			<div class="wrapper">
				<div class="about-content">
					<div class="content-descriotion-wrapper">
						<div>
{{--							<p class="top-content">UAVS</p>--}}
							<h1 class="main-content">The United Associations of <span>Vietnamese Students</span> in NSW</h1>
							<p class="description-detail">UAVS - The United Associations of Vietnamese Students in NSW  | UAVS NSW is the Vietnamese Student Association in New South Wales, established for the first time with the support of 7 student associations at major universities in the NSW state of Australia - Macquarie University, University of New South Wales, University of Sydney, University of Wollongong, University of Technology Sydney, Western Sydney University, and University of Newcastle.</p>
							<p class="description-detail"> UAVS was founded with the aim of advising and assisting the Vietnamese student community in their academic pursuits, career development, as well as fostering connections and elevating the activities of Vietnamese students in NSW, Australia.</p>
							<div class="button-list">
								<a href="/about">About Us</a>
								<a href="" class="join">Join UAVS</a>
							</div>
						</div>
					</div>
					<div class="content-image-wrapper">
						<div class="bg-circle-01"> </div>
						<div class="bg-circle-02"> </div>
						<div class="image-wrapper">
							<div class="image-large" style="background-image: url('assets/images/home-01.JPG');"></div>
							<div class="image-list">
								<div class="image-small" style="background-image: url('assets/images/home-03.jpg');"></div>
								<div class="image-small" style="background-image: url('assets/images/home-04.jpg');"></div>
							</div>
							<div class="image-large" style="background-image: url('assets/images/home-02.jpg');"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="I-signigicant">
			<div class="signigicant-item">
				<div class="item-value">10.1K</div>
				<div class="item-name">Members</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">12k</div>
				<div class="item-name">Facebook Followers</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">1,273</div>
				<div class="item-name">Instagram Follower</div>
			</div>
			<div class="signigicant-item">
				<div class="item-value">11K</div>
				<div class="item-name">Facebook Like</div>
			</div>
		</div>
		<div class="I-event">
			<div id="dynamic-bg" class="dynamic-bg event-bg" style="background-image: url('assets/images/event-bg.png');">
			   <ul class="bg-bubbles">
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		            <li></li>
		        </ul>
			</div>
			<div class="wrapper">
				<div class="component-description">EVENTS, MERCH AND MORE.</div>
				<div class="component-title">
					<span>What do we do</span>
				</div>
				<div class="event-description-wrapper">
					<p>UAVS is dedicated to empowering Vietnamese students in New South Wales by organizing a wide range of engaging activities, exciting competitions, and impactful events to support career development and enhance leadership skills. Additionally, we strive to foster a sense of belonging and create a strong network within the Vietnamese student community. </p>
				</div>
				<div class="event-join-wrapper">
					<div class="join-wrapper uavs">
						<div class="card-title">
							Events
						</div>
						<div class="card-image" style="background-image: url('assets/images/event-01.JPG');"></div>
						<div class="card-description">
							We organise activities that revolve around social and professional events, such as the UAVS Start-up Challenge competition, UAVS Business Case Competition, and UAVS Career Fair, which are open to the Vietnamese student community. Our projects also include network and engaging opportunities with the Vietnamese culture.
						</div>
						<a href="" class="event-link">View Events</a>
					</div>
					<div class="join-wrapper student">
						<div class="card-title">
							Associated Events
						</div>
						<div class="card-image" style="background-image: url('assets/images/event-01.JPG');"></div>
						<div class="card-description">
							 In New South Wales, we collaborate with various Vietnamese communities and societies from different universities, providing a networking platform and organizing events such as career workshops and welcome events for incoming international students, including MOV, VGONG, VISUS, etc.
						</div>
						<a href="" class="event-link">View Associated Events</a>
					</div>
				</div>
			</div>
		</div>
		<div class="I-linked">
			<div class="wrapper">
				<div class="component-description">GET FORTNIGHTLY ACCESS TO</div>
				<div class="component-title">
					<span>Exclusive design NEWSLETTER</span>
				</div>
 				<div class="linked-wrapper">
 					<div class="linked-item">
 						<p class="linked-description">
 							Get ready for a monthly dose of awesomeness! Our UAVS newsletter is your VIP pass to the latest updates, exclusive content, community highlights, and upcoming events. Stay connected, stay informed, and let's make your journey in Australia more amazing together!
 						</p>
						<a href="" class="linked-link">Join UAVS</a>
 					</div>
 					<div class="linked-item">
 						<div class="card-image" style="background-image: url('assets/images/lettle.jpg');"></div>
 					</div>
 				</div>
			</div>
		</div>
		<div class="I-social">
			<div class="social-item">
				<a href="https://www.facebook.com/uavsnsw?mibextid=LQQJ4d"><img src="assets/images/facebook-logo.svg" alt=""></a>
			</div>
			<div class="social-item">
				<a href="https://instagram.com/uavs.nsw?igshid=MzMyNGUyNmU2YQ=="><img src="assets/images/instagram.svg" alt=""></a>
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/linkedin.svg" alt=""></a>
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/discord.svg" alt=""></a>
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/medium.svg" alt=""></a>
			</div>
			<div class="social-item">
				<a href="#"><img src="assets/images/tik-tok.svg" alt=""></a>
			</div>
		</div>
		<div class="I-sponsors">
			<div class="wrapper">
				<div class="component-title">
					<span>Proudly sponsored by</span>
				</div>
				<div class="sponsors-list" style="display: flex; flex-direction: row; justify-content: center">
					<?php foreach ($sponsor as $key => $value): ?>
						<div class="sponsore-item">
							<img src="/{{$value->image}}" alt="">
						</div>
					<?php endforeach ?>


                    {{----------------------chen anh tam thoi, sau se luu vao db--}}
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/axegal.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/cubecorp.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/nsw.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/logo.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/vietjet.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/pwc.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    <div class="sponsore-item" style="width: 150px; height: 100px; background-image: url('assets/images/Hashtax.png'); background-size: contain; background-position: center; background-repeat: no-repeat;">
                    </div>
                    {{-- ------------------------------------------------------------------------------               --}}

				</div>

				<div class="button-list">
					<a href="/sponsor">More Sponsors</a>
					<a href="" class="join">Contact Us</a>
				</div>
			</div>
		</div>
@endsection()

@section('js')
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script>
@endsection()
