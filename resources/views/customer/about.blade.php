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
		</div>
		<div class="I-members">
			<div class="wrapper">
				<div class="member-wrapper">
					<div class="members-header">
						<span>Board of Management</span>
					</div>
					<div class="member-list-item">
                        @php
                            $presidents = $members->where('sort', 1);
                            $vicePresidents = $members->where('sort', 2);
                            $heads = $members->where('sort', 3);
                        @endphp

                            <!-- Presidents -->
                        @if($presidents->isNotEmpty())
                            <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                                @foreach($presidents as $member)
                                    <div class="person" >
                                        <div class="avatar-president" data-member-id="{{ $member->id }}">
                                            <img src="{{ $member->image ? asset($member->image) : 'assets/images/default-avatar.jpg' }}" alt="{{ $member->name }}">
                                        </div>
                                        <div class="info">
                                            <h3 class="name">{{ $member->name }}</h3>
                                            <p class="position">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Vice Presidents -->
                        @if($vicePresidents->isNotEmpty())
                            <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                                @foreach($vicePresidents as $member)
                                    <div class="person" >
                                        <div class="avatar-vice-president" data-member-id="{{ $member->id }}">
                                            <img src="{{ $member->image ? asset($member->image) : 'assets/images/default-avatar.jpg' }}" alt="{{ $member->name }}">
                                        </div>
                                        <div class="info">
                                            <h3 class="name">{{ $member->name }}</h3>
                                            <p class="position">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        <!-- Heads -->
                        @if($heads->isNotEmpty())
                            <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                                @foreach($heads as $member)
                                    <div class="person" >
                                        <div class="avatar" data-member-id="{{ $member->id }}">
                                            <img src="{{ $member->image ? asset($member->image) : 'assets/images/default-avatar.jpg' }}" alt="{{ $member->name }}">
                                        </div>
                                        <div class="info">
                                            <h3 class="name">{{ $member->name }}</h3>
                                            <p class="position">{{ $member->position }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
					</div>
				</div>
			</div>
		</div>

        <!-- Modal Structure -->
        <div id="memberModal" class="modal">
            <div class="modal-content">
                <div class="modal-image">
                    <img id="modalImage" src="" alt="">
                </div>
                <div class="modal-details">
                    <h3 id="modalName"></h3>
                    <p id="modalPosition"></p>
                    <p id="modalYob"></p>
                    <p id="modalMajor"></p>
                    <p id="modalSchool"></p>
                    <p id="modalAchievement"></p>
                    <p id="modalLinkedin"></p>
                    <p id="modalYear"></p>
                    <p id="modalOtherPosition"></p>
                </div>
            </div>
        </div>

        <div class="I-page-about">
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
                        {{--                        ---------------------------------------}}
                        <!-- Fixed Partner 1 -->
                        <div class="partner-item">
                            <div class="item-image" style="background-image: url('assets/images/western.png');"> </div>
                            <div class="item-description">
                                <h3>Vietnamese International Student Association at WSU </h3>
                                <p><i class="fas fa-envelope"></i> : </p>
                                {{--                                <p><i class="fas fa-globe"></i> : <a href="https://www.sydney.edu.au" target="_blank">sydney.edu.au</a></p>--}}
                                <p><i class="fas fa-address-card"></i> : Sydney, NSW, Australia</p>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="item-image" style="background-image: url('assets/images/visuss.png');"> </div>
                            <div class="item-description">
                                <h3>Vietnamese International Students at the University of Sydney</h3>
                                <p><i class="fas fa-envelope"></i> : info.vsus@gmail.com</p>
                                {{--                                <p><i class="fas fa-globe"></i> : <a href="https://www.sydney.edu.au" target="_blank">sydney.edu.au</a></p>--}}
                                <p><i class="fas fa-address-card"></i> : Sydney, NSW, Australia</p>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="item-image" style="background-image: url('assets/images/sovis.png');"> </div>
                            <div class="item-description">
                                <h3> Society of Vietnamese International Students at UNSW</h3>
                                <p><i class="fas fa-envelope"></i> : sovisunsw@gmail.com</p>
{{--                                <p><i class="fas fa-globe"></i> : <a href="https://www.sydney.edu.au" target="_blank">sydney.edu.au</a></p>--}}
                                <p><i class="fas fa-address-card"></i> : Sydney, NSW, Australia</p>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="item-image" style="background-image: url('assets/images/vsun.png');"> </div>
                            <div class="item-description">
                                <h3>Vietnamese Students at the University of Newcastle, Australia</h3>
                                <p><i class="fas fa-envelope"></i> : vsun2603@gmail.com</p>
{{--                                <p><i class="fas fa-globe"></i> : <a href="https://www.sydney.edu.au" target="_blank">sydney.edu.au</a></p>--}}
                                <p><i class="fas fa-address-card"></i> : Sydney, NSW, Australia</p>
                            </div>
                        </div>

                        <div class="partner-item">
                            <div class="item-image" style="background-image: url('assets/images/mov.png');"> </div>
                            <div class="item-description">
                                <h3>MOV Macquarie University </h3>
                                <p><i class="fas fa-envelope"></i> : enquiries.mov@gmail.com</p>
{{--                                <p><i class="fas fa-globe"></i> : <a href="https://www.sydney.edu.au" target="_blank">sydney.edu.au</a></p>--}}
                                <p><i class="fas fa-address-card"></i> : Sydney, NSW, Australia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection()

@section('js')
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const avatars = document.querySelectorAll(".avatar, .avatar-president, .avatar-vice-president");
        const modal = document.getElementById("memberModal");

        // Add close button dynamically
        const modalDetails = document.querySelector('.modal-details');
        const closeBtn = document.createElement('button');
        closeBtn.className = 'close-btn';
        closeBtn.innerHTML = '×';
        modalDetails.appendChild(closeBtn);

        const members = @json($members);

        avatars.forEach(avatar => {
            avatar.addEventListener("click", function (e) {
                e.stopPropagation();
                const memberId = this.getAttribute('data-member-id');
                const member = members.find(m => m.id == memberId);

                if (member) {
                    document.getElementById("modalImage").src = member.image ? `{{ asset('') }}${member.image}` : 'assets/images/default-avatar.jpg';
                    document.getElementById("modalName").textContent = member.name || 'N/A';
                    document.getElementById("modalPosition").innerHTML = `<strong>Position:</strong> ${member.position || 'N/A'}`;
                    document.getElementById("modalYob").innerHTML = `<strong>Year of Birth:</strong> ${member.yob || 'N/A'}`;
                    document.getElementById("modalMajor").innerHTML = `<strong>Major:</strong> ${member.major || 'N/A'}`;
                    document.getElementById("modalSchool").innerHTML = `<strong>School:</strong> ${member.school || 'N/A'}`;
                    document.getElementById("modalAchievement").innerHTML = `<strong>Achievement:</strong> ${member.achievement || 'N/A'}`;
                    document.getElementById("modalLinkedin").innerHTML = `<strong>LinkedIn:</strong> ${member.linkined || 'N/A'}`;
                    document.getElementById("modalYear").innerHTML = `<strong>Year:</strong> ${member.year || 'N/A'}`;
                    document.getElementById("modalOtherPosition").innerHTML = `<strong>Other position:</strong> ${member.other_position || 'N/A'}`;
                    modal.style.display = 'flex';
                }
            });
        });

        // Close modal on outside click
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Close modal on button click
        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });
    });
</script>
<script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script>
@endsection()
