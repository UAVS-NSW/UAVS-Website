const View = {
    table: {
        __generateDTRow(data){
            return [
                `<div class="id-order">${data.id}</div>`,
                `<img src="/${data.image}" style="width:100px" alt="">`,
                data.name,
                data.yob,
                data.major,
                data.school,
                data.position,
                data.achievement,
                data.year,
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [
                { title: 'ID', name: 'id', orderable: true, width: '10%', },
                { title: 'Image', name: 'image', orderable: true, },
                { title: 'Name', name: 'name', orderable: true, },
                { title: 'Year of birth', name: 'yob', orderable: true, },
                { title: 'Major', name: 'major', orderable: true, },
                { title: 'School', name: 'school', orderable: true, },
                { title: 'Position', name: 'name', orderable: true, },
                { title: 'Achievement', name: 'Achievement', orderable: true, },
                { title: 'Year', name: 'name', orderable: true, },
                { title: 'Action', name: 'action', orderable: true, width: '10%', },
            ];
            IndexView.table.init("#data-table", row_table);
        }
    },
    Layout: {
        FormCreate: "",
        FormUpdate: "",
        FormDelete: "",
        init(){
            View.Layout.FormCreate = $(".layout-tab-create").html();
            View.Layout.FormUpdate = $(".layout-tab-create").html();
            View.Layout.FormDelete = $(".layout-tab-delete").html();
            $(".layout-tab-create").remove();
            $(".layout-tab-delete").remove();
        }
    },
    FullTab: {
        // Common function for dropdown behavior
        setupDropdownBehavior(container) {
            const $sortSelect = $(container).find('.data-sort');
            const $detailsGroup = $(container).find('.details-group');
            const $positionInput = $(container).find('.data-position');

            $sortSelect.on('change', function () {
                const selectedValue = $(this).val();

                $positionInput.val('');
                $detailsGroup.hide();

                switch (selectedValue) {
                    case '1':
                        $positionInput.val('President');
                        break;
                    case '2':
                        $positionInput.val('Vice President');
                        break;
                    case '3':
                        $detailsGroup.show();
                        $positionInput.val('');
                        break;
                    default:
                        break;
                }
            });

            // Trigger change on load to reflect initial value (for Update form)
            $sortSelect.trigger('change');
        },
        Create: {
            setVal(resource, data){

            },
            getVal(resource){
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name    = $(`${resource}`).find('.data-name').val();
                var data_yob    = $(`${resource}`).find('.data-yob').val();
                var data_major    = $(`${resource}`).find('.data-major').val();
                var data_school    = $(`${resource}`).find('.data-school').val();
                var data_linkedin    = $(`${resource}`).find('.data-linkedin').val();
                var data_position    = $(`${resource}`).find('.data-position').val();
                var data_other_position    = $(`${resource}`).find('.data-other_position').val();
                var data_sort    = $(`${resource}`).find('.data-sort').val();
                var data_achievement    = $(`${resource}`).find('.data-achievement').val();
                var data_year    = $(`${resource}`).find('.data-year').val();

                // --Required Value
                // if (data_name == '') { required_data.push('Name valid.'); onPushData = false }
                // if (data_name == '') { required_data.push('Yob valid.'); onPushData = false }
                // if (data_name == '') { required_data.push('Major valid.'); onPushData = false }
                // if (data_name == '') { required_data.push('School valid.'); onPushData = false }
                // if (data_name == '') { required_data.push('Achievement valid.'); onPushData = false }
                // if (data_position == '') { required_data.push('Position valid.'); onPushData = false }
                // if (data_year == '') { required_data.push('Year valid.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_name', data_name);
                    fd.append('data_yob', data_yob);
                    fd.append('data_major', data_major);
                    fd.append('data_school', data_school);

                    fd.append('data_linkedin', data_linkedin);
                    fd.append('data_position', data_position);
                    fd.append('data_other_position', data_other_position);
                    fd.append('data_sort', data_sort);
                    fd.append('data_achievement', data_achievement);
                    fd.append('data_year', data_year);

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate)
                IndexView.summerNote.init(".summernote", "", 300);
                View.FullTab.setupDropdownBehavior(`[data-tab-name=${name}]`);
            }
        },
        Update: {
            setVal(resource, data){
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-name').val(data.name);
                $(`${resource}`).find('.data-yob').val(data.yob);
                $(`${resource}`).find('.data-major').val(data.major);
                $(`${resource}`).find('.data-school').val(data.school);
                $(`${resource}`).find('.data-linkedin').val(data.linkined);
                $(`${resource}`).find('.data-position').val(data.position);
                $(`${resource}`).find('.data-sort').val(data['sort']);
                $(`${resource}`).find('.data-achievement').val(data.achievement);
                $(`${resource}`).find('.data-year').val(data.year);
                $(`${resource}`).find('.data-other_position').val(data.other_position);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.image ?? 'icon/noimage.png'}')`
                })
            },
            getVal(resource){
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;

                var data_id             = $(`${resource}`).find('.data-id').val().replaceAll(noTag, "");
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_name    = $(`${resource}`).find('.data-name').val();
                var data_yob    = $(`${resource}`).find('.data-yob').val();
                var data_major    = $(`${resource}`).find('.data-major').val();
                var data_school    = $(`${resource}`).find('.data-school').val();
                var data_linkedin    = $(`${resource}`).find('.data-linkedin').val();
                var data_position    = $(`${resource}`).find('.data-position').val();
                var data_other_position    = $(`${resource}`).find('.data-other_position').val();
                var data_sort    = $(`${resource}`).find('.data-sort').val();
                var data_achievement    = $(`${resource}`).find('.data-achievement').val();
                var data_year    = $(`${resource}`).find('.data-year').val();

                // --Required Value
                // if (data_name == '') { required_data.push('Name valid.'); onPushData = false }
                // if (data_yob == '') { required_data.push('Yob valid.'); onPushData = false }
                // if (data_major == '') { required_data.push('Major valid.'); onPushData = false }
                // if (data_school == '') { required_data.push('School valid.'); onPushData = false }
                // if (data_linkedin == '') { required_data.push('Linkedin valid.'); onPushData = false }
                // if (data_position == '') { required_data.push('Position valid.'); onPushData = false }
                // if (data_sort == '') { required_data.push('Sort valid.'); onPushData = false }
                // if (data_achievement == '') { required_data.push('Achievement valid.'); onPushData = false }
                // if (data_year == '') { required_data.push('Year valid.'); onPushData = false }


                if (onPushData) {
                    fd.append('data_id', data_id);
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_name', data_name);
                    fd.append('data_yob', data_yob);
                    fd.append('data_major', data_major);
                    fd.append('data_school', data_school);
                    fd.append('data_linkedin', data_linkedin);
                    fd.append('data_position', data_position);
                    fd.append('data_other_position', data_other_position);
                    fd.append('data_sort', data_sort);
                    fd.append('data_achievement', data_achievement);
                    fd.append('data_year', data_year);

                    return fd;
                }else{
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = ``;
                    for (var i = 0; i < required_data.length; i++) { required_noti += `<li class="error">${required_data[i]}</li>`; }
                    $(`${resource}`).find('.error-log').prepend(` <ul class="js-errors">${required_noti}</ul> `)
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate)
                IndexView.summerNote.init(".summernote", "", 300);
                View.FullTab.setupDropdownBehavior(`[data-tab-name=${name}]`);
            }
        },
        Delete: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id)
            },
            getVal(resource){
                $(resource).find('.data-id').val()
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDelete)
            }
        },
        onPush(name, resource, callback){
            $(document).on('click', `${resource} .full-tab-action`, function() {
                $(this).attr('atr').trim()
                if($(this).attr('atr').trim() == name) {
                    callback();
                }
            });
        },
        default(name){
            $(`[data-tab-name=${name}]`).html("");
        },
        doShow(name){
            $(".data-custom-tab").removeClass("on-show");
            $(`.data-custom-tab[data-tab-name=${name}]`).addClass("on-show");
        },
        onShow(name, callback){
            $(document).on('click', `.tab-action`, function() {
                if($(this).attr('atr').trim() == name) {
                    var id = $(this).attr("data-id");
                    callback(id);
                }
            });
        },
    },
    init(){
        View.Layout.init();
        View.table.init();
    }
};
(() => {
    View.init();
    function init(){
        getData();
    }

    // Table
    View.FullTab.onShow("Table", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        View.FullTab.default("Delete");
        getData();
    })

    // Create
    View.FullTab.onShow("Create", () => {
        View.FullTab.doShow("Create");
        View.FullTab.Create.init("Create");
    })
    View.FullTab.onPush("Confirm", "#popup-create", () => {
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Processing');
            Api.Member.Store(fd)
                .done(res => {
                    IndexView.helper.showToastSuccess('Success', 'Success');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
                .always(() => { });
        }
    })


    // Update
    View.FullTab.onShow("Edit", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        IndexView.helper.showToastProcessing('Process', 'Processing');
        Api.Member.getOne(id)
            .done(res => {
                View.FullTab.Update.setVal("#popup-update", res.data)
                IndexView.helper.showToastSuccess('Success', 'Processing');
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
            .always(() => { });
    })
    View.FullTab.onPush("Confirm", "#popup-update", () => {
        var fd = View.FullTab.Update.getVal("#popup-update");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default();
            IndexView.helper.showToastProcessing('Process', 'Processing');
            Api.Member.Update(fd)
                .done(res => {
                    IndexView.helper.showToastSuccess('Success', 'Success');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
                .always(() => { });
        }
    })

    // Delete
    View.FullTab.onShow("Delete", (id) => {
        View.FullTab.doShow("Delete");
        View.FullTab.Delete.init("Delete");
        View.FullTab.Delete.setVal("#popup-delete", id)
    })
    View.FullTab.onPush("Delete", "#popup-delete", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default();
        IndexView.helper.showToastProcessing('Process', 'Processing');
        Api.Member.Delete($("#popup-delete").find('.data-id').val())
            .done(res => {
                IndexView.helper.showToastSuccess('Success', 'Success');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
            .always(() => { });
    })


    function getData(){
        Api.Member.GetAll()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.table.__generateDTRow(v));
                    IndexView.table.render();
                })
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
            .always(() => { });
    }

    function debounce(f, timeout) {
        let isLock = false;
        let timeoutID = null;
        return function(item) {
            if(!isLock) {
                f(item);
                isLock = true;
            }
            clearTimeout(timeoutID);
            timeoutID = setTimeout(function() {
                isLock = false;
            }, timeout);
        }
    }
    init();
})();
