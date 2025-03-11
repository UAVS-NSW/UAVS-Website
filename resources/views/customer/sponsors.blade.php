@extends('customer.layout')
@section('title', "Trang chủ")


@section('css')

@endsection()


@section('body')
	<div class="I-page-sponsors">
		<div class="sponsors-header">
			<div class="wrapper">
				<h3>Our industry partners.</h3>
{{--				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>--}}
			</div>
		</div>
		<div class="I-sponsor-list">
			<div class="wrapper">
				<div class="sponsor-list-header">
					<span>Annual sponsors</span>
				</div>
                <div class="sponsor-list-item">
                    <?php
                    // Danh sách sponsor tĩnh
                    $staticSponsors = [
                        ['image' => 'assets/images/axegal.png', 'description' => 'Axegal', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/cubecorp.png', 'description' => 'CubeCorp', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/nsw.png', 'description' => 'NSW', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/logo.png', 'description' => 'Logo Company', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/vietjet.png', 'description' => 'VietJet', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/pwc.png', 'description' => 'PWC', 'infor' => '#', 'carrers' => '#'],
                        ['image' => 'assets/images/Hashtax.png', 'description' => 'Hashtax', 'infor' => '#', 'carrers' => '#']
                    ];

                    // Kết hợp danh sách sponsor từ database và danh sách tĩnh
//                    $allSponsors = array_merge($sponsor, $staticSponsors);
                    ?>

                    @foreach ($staticSponsors as $value)
                        <div class="item">
                            <div class="sponsor-image" style="background-image: url('/{{$value['image']}}')"> </div>
                            <div class="sponsor-content">
                                {{$value['description']}}
                            </div>
                            <div class="sponsor-social">
                                <div class="button-list">
                                    <a href="{{$value['infor']}}"><i class="fas fa-link"></i> More info</a>
                                    <a href="{{$value['carrers']}}" class="join"><i class="fas fa-briefcase"></i> Carrers</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
			</div>
		</div>
	</div>
@endsection()

@section('js')
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script>
@endsection()
