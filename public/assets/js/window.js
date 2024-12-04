// View
const IndexView = {
    Carousel:{ 
        banner: {  
            init(){ 
                $('#clients-carousel').owlCarousel({
                    loop: true,
                    nav: true,
                    // dots: true,
                    // autoplay: true,
                    // autoplayTimeout: 7000,
                    autoWidth: false, 
                    lazyLoad: false,
                    margin: 24,
                    stagePadding: 100,
                    responsive:{
                        0:{
                            items: 1, 
                        }, 
                        767:{
                            items: 2, 
                        },
                        991:{
                            items: 2, 
                        },
                        1279:{
                            items: 3,
                        },
                        1280:{
                            items: 4
                        }
                    }
                })
            }
        }, 
    },
    init(){ 
        IndexView.Carousel.banner.init(); 
    }
};

// Controller
(() => {
    IndexView.init(); 
 
    $(document).on('click', '.nav-control', function() { 
        $(`.nav-wrapper`).toggleClass('is-open'); 
    });
    $(document).mouseup(function(e) {
        var container = $("header");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            $('.nav-wrapper').removeClass('is-open');
        }
    });
    $(".owl-carousel").owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    // let length = $(".I-carousel .page-wrapper").length
    // let delay = 3000 

    // function delay(delayInms) {
    //     return new Promise(resolve => {
    //         setTimeout(() => {
    //             resolve(2);
    //         }, delayInms);
    //     });
    // } 
    // async function run() {
    //     while(true){
    //         console.log(123); 
    //         await delay(delay);
    //     }
    // }
    // run()
})();