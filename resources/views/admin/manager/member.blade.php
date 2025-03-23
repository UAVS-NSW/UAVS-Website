@extends('admin.layout')
@section('title', 'Member')
@section('menu-data')
<input type="hidden" name="" class="menu-data" value="member-group | member">
@endsection()


@section('css')

@endsection()


@section('body')


<div class="page-header no-gutters has-tab">
    <div class="d-md-flex m-b-15 align-items-center justify-content-between notification relative" id="notification">
        <div class="media align-center justify-content-between m-b-15 w-100">
            <div class="m-l-15">
                <h4 class="m-b-0">Member</h4>
            </div>
            @include('admin.alert')
        </div>
    </div>
</div>
<div class="card data-custom-tab on-show" data-tab-name="Table">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-12 col-md-6">

            </div>
            <div class="col-sm-12 col-md-6">
                <div class="align-justify-center">
                    <a href="#" class="btn btn-default btn-sm flex-right tab-action" atr="Create">Create<i class="fas fa-plus m-l-5"></i></a>
                </div>
            </div>
        </div>
        <div class="m-t-25">
            <table id="data-table" class="table"> </table>
        </div>
    </div>
</div>

<div class="layout-tab-create">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <div class="error-log">

                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Hình ảnh</label>
                                            <div class="col-md-8">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input image-input data-image" id="customFile" accept="image/*">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                                <div class="image-preview form-preview">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Họ và tên</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-name" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Năm sinh</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-yob" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Ngành học</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-major" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Trường đại học</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-school" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Giải thưởng, thành tích</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-achievement" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Link Linkedin</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-linkedin" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Chức vụ hội</label>
                                            <div class="col-md-8 position-relative">
                                                <select class="form-control data-sort" name="sort">
                                                    <option value="">Chọn cấp bậc</option>
                                                    <option value="1">President</option>
                                                    <option value="2">Vice president</option>
                                                    <option value="3">Head</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row details-group" style="display: none;">
                                            <label class="col-sm-4 col-form-label control-label">Chi tiết</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-position" name="position" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-4 col-form-label control-label">Năm công tác</label>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control data-year number-type" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Cancel</button>
                        <button class="btn btn-primary full-tab-action" atr="Confirm">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="layout-tab-delete">
    <input type="hidden" class="form-control data-id">
    <div class="row">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-body">
                    <h3>Remote record</h3>
                    <div class="form-group text-right">
                        <button class="btn btn-defauld mr-2 tab-action" atr="Table">Cancel</button>
                        <button class="btn btn-primary full-tab-action" atr="Delete">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-custom-tab" data-tab-name="Create" id="popup-create"> </div>
<div class="data-custom-tab" data-tab-name="Update" id="popup-update"> </div>
<div class="data-custom-tab" data-tab-name="Delete" id="popup-delete"> </div>

@endsection()


@section('js')

    <script src="{{ asset('manager/assets/js/page/member.js') }}"></script>

@endsection()
