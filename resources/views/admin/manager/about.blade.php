@extends('admin.layout')
@section('title', 'Cộng đồng')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="about-group | about">
@endsection()


@section('css')

@endsection()


@section('body')

    
<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Thông tin</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="row m-t-25" id="popup-update">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-center">
                <h5 class="text-center m-0">Trang thông tin</h5>
            </div>
            <div class="card-body">
                <div class="d-flex align-items-center justify-content-between is-selected category-item tab-action" atr="Home">
                    Trang chủ
                    <span class="badge badge-pill badge-cyan total-count"></span>
                </div> 
                <div class="d-flex align-items-center justify-content-between category-item tab-action" atr="About">
                    Về chúng tôi
                    <span class="badge badge-pill badge-cyan total-count"></span>
                </div> 
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-success flex-right full-tab-action w-100 mb-2" atr="Confirm">Lưu lại</a>  
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
        <div class="data-custom-tab on-show" data-tab-name="Home"> 
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Đầu trang</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-header-1" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-header-2" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-header-3" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-header-4" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Về chúng tôi</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-about" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Con số nổi bật</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Số lượng sinh viên</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-num-01" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Hội sinh viên</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-num-02" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Năm hoạt động</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-num-03" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Sự kiện đã tổ chức</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-num-04" placeholder="">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Thông tin liên hệ</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Địa chỉ</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-detail-01" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Hotline</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-detail-02" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-detail-03" placeholder="">
                                </div>
                            </div> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Facebook</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-detail-04" placeholder="">
                                </div>
                            </div> 
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"> 
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label control-label">Linkedin</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control data-detail-05" placeholder="">
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Liên hệ</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-contact" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="data-custom-tab" data-tab-name="About" >
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4 class="m-0">Sứ mệnh</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-about-01" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-about-02" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3"> 
                            <div class="form-group row"> 
                                <div class="col-md-12">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input image-input data-image-about-03" id="customFile" accept="image/*">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div> 
                                    <div class="image-preview form-preview">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
 

@section('js')
    
    <script src="{{ asset('manager/assets/js/page/about.js') }}"></script>

@endsection()