const View = {
    table: {
        __generateDTRow(data){ 
            return [
                `<div class="id-order">${data.id}</div>`,
                `<img src="/${data.image}" style="width:100px" alt="">`,  
                data.description, 
                `<div class="view-data tab-action" atr="Edit" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-edit"></i></div>
                <div class="view-data tab-action" atr="Delete" style="cursor: pointer" data-id="${data.id}"><i class="anticon anticon-delete"></i></div>`
            ]
        },
        init(){
            var row_table = [ 
                { title: 'ID', name: 'id', orderable: true, width: '10%', },
                { title: 'Image', name: 'image', orderable: true, },  
                { title: 'Description', name: 'name', orderable: true, width: '40%', },  
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
        Create: { 
            setVal(resource, data){
                
            },
            getVal(resource){ 
                var fd = new FormData();
                var required_data = [];
                var onPushData = true;
                const noTag = /(<([^>]+)>)/ig;
                const noScript = /(<\s*script[^>]*>(.*?)<\s*\/\s*script>)/ig;
 
                var data_description    = $(`${resource}`).find('.data-description').val();  
                var data_image          = $(`${resource}`).find('.data-image')[0].files;
                var data_infor    = $(`${resource}`).find('.data-infor').val();  
                var data_carrers    = $(`${resource}`).find('.data-carrers').val();  

                // --Required Value  
                if (data_description == '') { required_data.push('Description valid.'); onPushData = false } 
                if (data_infor == '') { required_data.push('Infor valid.'); onPushData = false } 
                if (data_carrers == '') { required_data.push('Carrers valid.'); onPushData = false }   

                if (onPushData) { 
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_description', data_description);  
                    fd.append('data_infor', data_infor);  
                    fd.append('data_carrers', data_carrers);  

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
            }
        },
        Update: { 
            setVal(resource, data){
                $(`${resource}`).find('.data-id').val(data.id);
                $(`${resource}`).find('.data-description').val(data.description);
                $(`${resource}`).find('.data-carrers').val(data.carrers);
                $(`${resource}`).find('.data-infor').val(data.infor);
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
                var data_description    = $(`${resource}`).find('.data-description').val();  
                var data_infor    = $(`${resource}`).find('.data-infor').val();  
                var data_carrers    = $(`${resource}`).find('.data-carrers').val();  

                // --Required Value  
                if (data_description == '') { required_data.push('Description valid.'); onPushData = false } 
                if (data_infor == '') { required_data.push('Infor valid.'); onPushData = false } 
                if (data_carrers == '') { required_data.push('Carrers valid.'); onPushData = false }   

                if (onPushData) {
                    fd.append('data_id', data_id); 
                    fd.append('data_image', data_image[0] ?? "null"); 
                    fd.append('data_description', data_description);  
                    fd.append('data_infor', data_infor);  
                    fd.append('data_carrers', data_carrers);  

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
            Api.Sponsor.Store(fd)
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
        Api.Sponsor.getOne(id)
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
            Api.Sponsor.Update(fd)
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
        Api.Sponsor.Delete($("#popup-delete").find('.data-id').val())
            .done(res => { 
                IndexView.helper.showToastSuccess('Success', 'Success');
                getData();
            })
            .fail(err => { IndexView.helper.showToastError('Error', 'Error'); })
            .always(() => { });
    })

 
    function getData(){
        Api.Sponsor.GetAll()
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
