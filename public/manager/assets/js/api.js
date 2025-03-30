const Api = {
    Image: {},
    Sponsor: {},
    School: {},
    Member: {},
    Event: {},
    Blogs: {}
};
(() => {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content'),
        },
        crossDomain: true
    });
})();



// Image
(() => {
    Api.Image.Create = (data) => $.ajax({
        url: `/apip/post-image`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
})();

//Event
(() => {
    Api.Event.GetAll = () => $.ajax({
        url: `/apip/event/get`,
        method: 'GET',
    });
    Api.Event.Store = (data) => $.ajax({
        url: `/apip/event/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Event.getOne = (id) => $.ajax({
        url: `/apip/event/get-one/${id}`,
        method: 'GET',
    });
    Api.Event.Update = (data) => $.ajax({
        url: `/apip/event/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Event.Delete = (id) => $.ajax({
        url: `/apip/event/delete/${id}`,
        method: 'GET',
    });
})();

//Sponsor
(() => {
    Api.Sponsor.GetAll = () => $.ajax({
        url: `/apip/sponsor/get`,
        method: 'GET',
    });
    Api.Sponsor.Store = (data) => $.ajax({
        url: `/apip/sponsor/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Sponsor.getOne = (id) => $.ajax({
        url: `/apip/sponsor/get-one/${id}`,
        method: 'GET',
    });
    Api.Sponsor.Update = (data) => $.ajax({
        url: `/apip/sponsor/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Sponsor.Delete = (id) => $.ajax({
        url: `/apip/sponsor/delete/${id}`,
        method: 'GET',
    });
})();


//School
(() => {
    Api.School.GetAll = () => $.ajax({
        url: `/apip/school/get`,
        method: 'GET',
    });
    Api.School.Store = (data) => $.ajax({
        url: `/apip/school/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.School.getOne = (id) => $.ajax({
        url: `/apip/school/get-one/${id}`,
        method: 'GET',
    });
    Api.School.Update = (data) => $.ajax({
        url: `/apip/school/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.School.Delete = (id) => $.ajax({
        url: `/apip/school/delete/${id}`,
        method: 'GET',
    });
})();

//Member
(() => {
    Api.Member.GetAll = () => $.ajax({
        url: `/apip/member/get`,
        method: 'GET',
    });
    Api.Member.Store = (data) => $.ajax({
        url: `/apip/member/store`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Member.getOne = (id) => $.ajax({
        url: `/apip/member/get-one/${id}`,
        method: 'GET',
    });
    Api.Member.Update = (data) => $.ajax({
        url: `/apip/member/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });
    Api.Member.Delete = (id) => $.ajax({
        url: `/apip/member/delete/${id}`,
        method: 'GET',
    });
})();

// Blogs
(() => {
    Api.Blogs.GetAll = () => $.ajax({
        url: `/api/blogs`,
        method: 'GET',
    });

    Api.Blogs.Store = (data) => $.ajax({
        url: `/api/blogs`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });

    Api.Blogs.getOne = (id) => $.ajax({
        url: `/api/blogs/${id}`,
        method: 'GET',
    });

    Api.Blogs.Update = (data) => $.ajax({
        url: `/api/blogs/update`,
        method: 'POST',
        data: data,
        contentType: false,
        processData: false,
    });

    Api.Blogs.Delete = (id) => $.ajax({
        url: `/api/blogs/${id}`,
        method: 'DELETE',
    });
})();
