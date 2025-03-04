@extends('customer.layout')
@section('title', "Trang chủ")

@section('css')
@endsection()

@section('body')
    <div class="I-page-about">
        <div class="about-header">
            <div class="wrapper">
                <h3>Who we are</h3>
            </div>
        </div>
        <div class="about-content">
            <div class="wrapper">
                <div class="description-wrapper">
                    <div class="logo-content">
                        <img src="assets/images/logo.png" alt="">
                    </div>
                    <p class="description-detail">
                        UAVS NSW is the Vietnamese Student Association in New South Wales, established for the first time with the support of 7 student associations at major universities in NSW, Australia.
                    </p>
                    <p class="description-detail">
                        UAVS was founded to support Vietnamese students in their academic pursuits, career development, and foster connections within the community.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Board of Management Section -->
    <div class="I-members">
        <div class="wrapper">
            <div class="member-wrapper">
                <div class="members-header">
                    <span>Board of Management</span>
                </div>
                <div class="member-list-item">
                    <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                        <div class="person">
                            <div class="avatar-president">
                                <img src="assets/images/MUS01433.JPG" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Vu Khac Gia Bao</h3>
                                <p class="position">President</p>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                        <div class="person">
                            <div class="avatar-vice-president">
                                <img src="assets/images/hoangNguyen.jpg" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Chu Hoang Nguyen</h3>
                                <p class="position">Vice President</p>
                            </div>
                        </div>
                        <div class="person">
                            <div class="avatar-vice-president">
                                <img src="assets/images/MUS01268.JPG" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Dam Thi Kim Ngan</h3>
                                <p class="position">Vice President</p>
                            </div>
                        </div>
                        <div class="person">
                            <div class="avatar-vice-president">
                                <img src="assets/images/MUS01395.JPG" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Vuong Minh Anh</h3>
                                <p class="position">Vice President</p>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="display: flex; justify-content: center; margin-bottom: 20px">
                        <div class="person">
                            <div class="avatar">
                                <img src="assets/images/toan.JPG" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Nguyen Phuc Toan</h3>
                                <p class="position">Head of Business Development</p>
                            </div>
                        </div>
                        <div class="person">
                            <div class="avatar">
                                <img src="assets/images/binhMinh.jpg" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Tran Binh Minh</h3>
                                <p class="position">Head of Media-Design</p>
                            </div>
                        </div>
                        <div class="person">
                            <div class="avatar">
                                <img src="assets/images/MUS01342.JPG" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Le Ha Vy</h3>
                                <p class="position">Head of Internal Affairs</p>
                            </div>
                        </div>
                        <div class="person">
                            <div class="avatar">
                                <img src="assets/images/vyNguyen.jpg" alt="Nguyen Phuc Toan">
                            </div>
                            <div class="info">
                                <h3 class="name">Nguyen Ha Vy</h3>
                                <p class="position">Head of Public Relations</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Affiliated Schools Section (Moved Below) -->
    <div class="partner-content">
        <div class="wrapper">
            <div class="component-title">
                <span>Affiliated Schools</span>
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
@endsection()

@section('js')
    <script type="text/javascript" src="{{ asset("customer/assets/js/page/hotel-detail.js") }}"></script>
@endsection()
