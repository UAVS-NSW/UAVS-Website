@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')
    .member-tree {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
    }

    /* Style for each member (President + Team) */
    .member {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    position: relative;
    margin-bottom: 20px;
    }

    /* The circular image (Node) */
    .node {
    width: 100px;
    height: 100px;
    background-color: white;
    border-radius: 50%;
    border: 2px solid red;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    }

    .node img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 50%;
    }

    /* Name and position */
    h3 {
    font-size: 16px;
    font-weight: bold;
    margin-top: 5px;
    }

    p {
    font-size: 14px;
    color: #666;
    }

    /* Row for Vice President, Secretary, Treasurer */
    .member-row {
    display: flex;
    justify-content: center;
    gap: 50px;
    position: relative;
    }

    /* Horizontal line connecting President to Vice President, Secretary, Treasurer */
    .tree-line {
    width: 250px;
    height: 2px;
    background-color: red;
    position: relative;
    margin-bottom: 10px;
    }

    /* Vertical lines connecting President to child nodes */
    .tree-line::before {
    content: "";
    position: absolute;
    width: 2px;
    height: 20px;
    background-color: red;
    top: -20px;
    left: 50%;
    }

    .tree-line::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    background-color: red;
    top: 0;
    left: 0;
    }

    /* Vertical lines from horizontal line to child nodes */
    .member-row .member::before {
    content: "";
    position: absolute;
    width: 2px;
    height: 20px;
    background-color: red;
    top: -20px;
    left: 50%;
    }
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
                    <div class="member-tree">
                        <!-- President Node -->
                        <div class="member president">
                            <div class="node">
                                <img src="assets/images/president.jpg" alt="President">
                            </div>
                            <h3>President</h3>
                            <p>Leader</p>
                        </div>

                        <!-- Line connecting to child nodes -->
                        <div class="tree-line"></div>

                        <!-- Child Nodes -->
                        <div class="member-row">
                            <div class="member">
                                <div class="node">
                                    <img src="assets/images/vice-president.jpg" alt="Vice President">
                                </div>
                                <h3>Vice President</h3>
                                <p>Operations</p>
                            </div>
                            <div class="member">
                                <div class="node">
                                    <img src="assets/images/secretary.jpg" alt="Secretary">
                                </div>
                                <h3>Secretary</h3>
                                <p>Documentation</p>
                            </div>
                            <div class="member">
                                <div class="node">
                                    <img src="assets/images/treasurer.jpg" alt="Treasurer">
                                </div>
                                <h3>Treasurer</h3>
                                <p>Finance</p>
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
