@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')
@endsection()


@section('body')
		<div class="I-page-about">
			<div class="about-header">
				<div class="wrapper">
					<h3>Who we are</h3>
					{{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
				</div>
			</div>
			<div class="about-content">
				<div class="wrapper">
					<div class="description-wrapper">
						<div class="logo-content">
							<img src="assets/images/logo.png" alt="">
						</div>
						<p class="description-detail">
							UAVS NSW is the Vietnamese Student Association in New South Wales, established for the first time with the support of 7 student associations at major universities in the NSW state of Australia - Macquarie University, University of New South Wales, University of Sydney, University of Wollongong, and University of Technology Sydney, Western Sydney University, and University of Newcastle.
						</p>
						<p class="description-detail">
							UAVS was founded with the aim of advising and assisting the Vietnamese student community in their academic pursuits, career development, as well as fostering connections and elevating the activities of Vietnamese students in NSW, Australia.
						</p>
					</div>
				</div>
			</div>
			<div class="partner-content">
				<div class="wrapper">
					<div class="component-title">
						<span>Affiliated school</span>
					</div>
					<div class="partner-list">
						<?php foreach ($school as $key => $value): ?>
							<div class="partner-item">
								<div class="item-image" style="background-image: url('{{ $value->image  }}');"> </div>
								<div class="item-description">
									<h3>{{ $value->name  }}</h3>
									<p><i class="fas fa-envelope"></i>: {{ $value->email  }}</p>
									<p><i class="fas fa-globe"></i>: {{ $value->website  }}</p>
									<p><i class="fas fa-address-card"></i>: {{ $value->address  }}</p>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="I-members">
			<div class="wrapper">
				<div class="member-wrapper">
					<div class="members-header">
						<span>Members</span>
					</div>
					<div class="members-list">
						<div class="member-item active">
							2019
						</div>
						<div class="member-item">
							2020
						</div>
						<div class="member-item">
							2021
						</div>
						<div class="member-item">
							2022
						</div>
						<div class="member-item">
							2023
						</div>
						<div class="member-item">
							2024
						</div>
					</div>
					<div class="member-list-item">
                        <div class="container president" style="display: flex; justify-content: center; margin-bottom: 20px">
                            <div class="person">
                                <div class="avatar">
                                    <img src="assets/images/user.jpg" alt="User Name">
                                </div>
                                <div class="info">
                                    <h3>User Name</h3>
                                    <div class="links">
                                        <a href="https://linkedin.com/in/username" target="_blank">
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                        <a href="mailto:user@gmail.com">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container vice-president" style="display: flex; justify-content: center; margin-bottom: 20px">
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                        </div>
						<div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                            <div class="item">
                                <div class="item-image">
                                    <img src="assets/images/nsw.png" alt="Member 1">
                                    <div class="linkedin-link">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                            <div class="item">
                                <div class="item-image">
                                    <div class="linkedin-link">
                                    </div>
                                </div>
                                <h3>Hehe</h3>
                                <p>hehehe</p>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
@endsection()

@section('js')
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script>
@endsection()
