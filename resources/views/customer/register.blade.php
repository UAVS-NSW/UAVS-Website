@extends('customer.layout')
@section('title', "Trang chủ")

@section('css')

@endsection()

@section('body') 
	<div class="I-member">
		<div class="member-header">
			<div class="wrapper">
				<h3>Membership</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
			</div>
		</div>	
		<div class="member-content">
			<div class="wrapper">
				<div class="component-title"><span>MEMBERSHIP EXCLUSIVE PROGRAMS</span></div>
				<div class="content-wrapper">
					<div class="content-layout">
						<div class="layout-header">Why do we use it?</div>
						<p class="layout-description">
							 the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but als
						</p>
						<p class="layout-description">
							ered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good a
						</p>
						<p class="layout-description">
							se a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum gen
						</p>
						<p class="layout-description">
							 is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like reada
						</p>
					</div>
					<div class="content-layout" style="width: 30%;">
						<div class="image-wrapper" style="background-image: url('assets/images/about.png');"></div>
					</div>
				</div> 
				<div class="component-title"><span>WHAT PEOPLE SAY</span></div>
				<div class="people-wrapper">
					<div class="people-item">
						<div class="layout-header">ATHENA</div>
						<p class="layout-description">
							 I attended the Inter-varsity Tech Literacy Series, Workshop 2, in collaboration with Salesforce. The event was really insightful as I was able to gain a better understanding of Salesforce, and the things you can do it with it. 
						</p>
					</div>
					<div class="people-item">
						<div class="layout-header">ATHENA</div>
						<p class="layout-description">
							 I attended the Inter-varsity Tech Literacy Series, Workshop 2, in collaboration with Salesforce. The event was really insightful as I was able to gain a better understanding of Salesforce, and the things you can do it with it. 
						</p>
					</div>
					<div class="people-item">
						<div class="layout-header">ATHENA</div>
						<p class="layout-description">
							 I attended the Inter-varsity Tech Literacy Series, Workshop 2, in collaboration with Salesforce. The event was really insightful as I was able to gain a better understanding of Salesforce, and the things you can do it with it. 
						</p>
					</div>
				</div> 
			</div>
		</div>
	</div>
@endsection()

@section('js') 
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script> 
@endsection()