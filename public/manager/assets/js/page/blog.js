const View = {
    table: {
        __generateDTRow(data){
            const date = new Date(data.publish_date);
            const formattedDate = `${date.getDate().toString().padStart(2, '0')}/${(date.getMonth() + 1).toString().padStart(2, '0')}/${date.getFullYear()}`;

            return [
                `<div class="id-order">${data.id}</div>`,
                `<img src="/${data.image}" style="width:100px" alt="">`,
                data.title,
                data.description.substring(0, 50) + '...',
                formattedDate,
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [
                { title: 'ID', name: 'id', orderable: true, width: '5%' },
                { title: 'Image', name: 'image', orderable: false },
                { title: 'Title', name: 'title', orderable: true },
                { title: 'Description', name: 'description', orderable: true },
                { title: 'Publish Date', name: 'publish_date', orderable: true },
                { title: 'Action', name: 'action', orderable: false, width: '10%' },
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
        Create: {
            setVal(resource, data){},
            getVal(resource){
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;

                var data_image = $(`${resource}`).find('.data-image')[0].files;
                var data_title = $(`${resource}`).find('.data-title').val();
                var data_description = $(`${resource}`).find('.data-description').val();
                var data_content = $(`${resource}`).find('.data-content').summernote('code');
                var data_publish_date = $(`${resource}`).find('.data-publish_date').val();

                if (!data_title) { required_data.push('Title is required.'); onPushData = false }
                if (!data_description) { required_data.push('Description is required.'); onPushData = false }
                if (!data_content) { required_data.push('Content is required.'); onPushData = false }
                if (!data_publish_date) { required_data.push('Publish date is required.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_title', data_title);
                    fd.append('data_description', data_description);
                    fd.append('data_content', data_content);
                    fd.append('data_publish_date', data_publish_date);
                    return fd;
                } else {
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = required_data.map(item => `<li class="error">${item}</li>`).join('');
                    $(`${resource}`).find('.error-log').prepend(`<ul class="js-errors">${required_noti}</ul>`);
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormCreate);
                IndexView.summerNote.init(".summernote", "", 300);
            }
        },
        Update: {
            setVal(resource, data){
                const date = new Date(data.publish_date);
                const formattedDate = `${date.getFullYear()}-${(date.getMonth() + 1).toString().padStart(2, '0')}-${date.getDate().toString().padStart(2, '0')}`;

                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-title').val(data.title);
                $(`${resource}`).find('.data-description').val(data.description);
                // Set Summernote content after initialization
                $(`${resource}`).find('.data-content').summernote('code', data.content);
                $(`${resource}`).find('.data-publish_date').val(formattedDate);
                $(`${resource}`).find('.image-preview').css({
                    'background-image': `url('/${data.image ?? 'icon/noimage.png'}')`
                });
            },
            getVal(resource){
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;

                var data_id = $(`${resource}`).find('.data-id').val();
                var data_image = $(`${resource}`).find('.data-image')[0].files;
                var data_title = $(`${resource}`).find('.data-title').val();
                var data_description = $(`${resource}`).find('.data-description').val();
                var data_content = $(`${resource}`).find('.data-content').summernote('code');
                var data_publish_date = $(`${resource}`).find('.data-publish_date').val();

                if (!data_title) { required_data.push('Title is required.'); onPushData = false }
                if (!data_description) { required_data.push('Description is required.'); onPushData = false }
                if (!data_content) { required_data.push('Content is required.'); onPushData = false }
                if (!data_publish_date) { required_data.push('Publish date is required.'); onPushData = false }

                if (onPushData) {
                    fd.append('data_id', data_id);
                    fd.append('data_image', data_image[0] ?? "null");
                    fd.append('data_title', data_title);
                    fd.append('data_description', data_description);
                    fd.append('data_content', data_content);
                    fd.append('data_publish_date', data_publish_date);
                    return fd;
                } else {
                    $(`${resource}`).find('.error-log .js-errors').remove();
                    var required_noti = required_data.map(item => `<li class="error">${item}</li>`).join('');
                    $(`${resource}`).find('.error-log').prepend(`<ul class="js-errors">${required_noti}</ul>`);
                    return false;
                }
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormUpdate);
                IndexView.summerNote.init(".summernote", "", 300);
                // Note: setVal should be called after this initialization in the event handler
            }
        },
        Delete: {
            setVal(resource, id){
                $(resource).find('.data-id').val(id);
            },
            getVal(resource){
                return $(resource).find('.data-id').val();
            },
            init(name){
                $(`[data-tab-name=${name}]`).html(View.Layout.FormDelete);
            }
        },
        onPush(name, resource, callback){
            $(document).on('click', `${resource} .full-tab-action`, function() {
                if($(this).attr('atr').trim() === name) {
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
                if($(this).attr('atr').trim() === name) {
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

    View.FullTab.onShow("Table", () => {
        View.FullTab.doShow("Table");
        View.FullTab.default("Create");
        View.FullTab.default("Update");
        View.FullTab.default("Delete");
        getData();
    });

    View.FullTab.onShow("Create", () => {
        View.FullTab.doShow("Create");
        View.FullTab.Create.init("Create");
    });
    View.FullTab.onPush("Confirm", "#popup-create", () => {
        var fd = View.FullTab.Create.getVal("#popup-create");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default("Create");
            IndexView.helper.showToastProcessing('Process', 'Processing');
            Api.Blogs.Store(fd)
                .done(res => {
                    IndexView.helper.showToastSuccess('Success', 'Blog created successfully');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Error creating blog'); })
                .always(() => { });
        }
    });

    View.FullTab.onShow("Edit", (id) => {
        View.FullTab.doShow("Update");
        View.FullTab.Update.init("Update");
        IndexView.helper.showToastProcessing('Process', 'Processing');
        Api.Blogs.getOne(id)
            .done(res => {
                View.FullTab.Update.setVal("#popup-update", res.data);
                IndexView.helper.showToastSuccess('Success', 'Blog loaded successfully');
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error loading blog'); })
            .always(() => { });
    });
    View.FullTab.onPush("Confirm", "#popup-update", () => {
        var fd = View.FullTab.Update.getVal("#popup-update");
        if (fd) {
            View.FullTab.doShow("Table");
            View.FullTab.default("Update");
            IndexView.helper.showToastProcessing('Process', 'Processing');
            Api.Blogs.Update(fd)
                .done(res => {
                    IndexView.helper.showToastSuccess('Success', 'Blog updated successfully');
                    getData();
                })
                .fail(err => { IndexView.helper.showToastError('Error', 'Error updating blog'); })
                .always(() => { });
        }
    });

    View.FullTab.onShow("Delete", (id) => {
        console.log(id);
        View.FullTab.doShow("Delete");
        View.FullTab.Delete.init("Delete");
        View.FullTab.Delete.setVal("#popup-delete", id);
    });
    View.FullTab.onPush("Delete", "#popup-delete", () => {
        const deleteId = View.FullTab.Delete.getVal("#popup-delete");
        if (!deleteId) {
            IndexView.helper.showToastError('Error', 'No blog ID specified for deletion');
            return;
        }
        View.FullTab.doShow("Table");
        View.FullTab.default("Delete");
        IndexView.helper.showToastProcessing('Process', 'Processing');
        Api.Blogs.Delete(deleteId)
            .done(res => {
                IndexView.helper.showToastSuccess('Success', 'Blog deleted successfully');
                getData();
            })
            .fail(err => {
                IndexView.helper.showToastError('Error', 'Error deleting blog: ' + (err.responseJSON?.message || 'Unknown error'));
            })
            .always(() => { });
    });

    function getData(){
        Api.Blogs.GetAll()
            .done(res => {
                IndexView.table.clearRows();
                Object.values(res.data).map(v => {
                    IndexView.table.insertRow(View.table.__generateDTRow(v));
                });
                IndexView.table.render();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error loading blogs'); })
            .always(() => { });
    }

    init();
})();
