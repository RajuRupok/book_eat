(function ($) {
    //(plugin name wow plugins)
    new WOW().init();
    //Nicescroll
    $("body").niceScroll({
        cursorcolor: "#f8730a",
        cursorwidth: "12px",
        cursorborderradius: 0,
        cursorborder: "1px solid #f8730a",

    });



    $('.rating').click(function () {
        $('.rating input').val();
        return false;
    })

    /*============================================= slider_area =============================================*/
    $('.slider_area .owl-carousel').owlCarousel({
        margin: 26,
        loop: true,
        autoplay: true,
        navText: false,
        nav: true,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    });
    /*============================================= nice selected =============================================*/
    $('select').niceSelect();
    /*============================================= Data-Background =============================================*/
    $("[data-background]").each(function () {
        $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
    })


    //
    /*============================================= Work file =============================================*/
    var $grid = $('.grid').isotope({
        // options
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
    });
    var $buttonGroup = $('.filters');
    $buttonGroup.on('click', 'li', function (event) {
        $buttonGroup.find('.is-checked').removeClass('is-checked');
        var $button = $(event.currentTarget);
        $button.addClass('is-checked');
        var filterValue = $button.attr('data-filter');
        $grid.isotope({
            filter: filterValue
        });
    });
    //more content

    $('.details_coupon_content .m1').click(function () {
        $('.more_content').slideToggle(500);
        return false;
    })

    $('.dt1 .m1').click(function () {
        $('.more_content').slideToggle(500);
        return false;
    })

    /*============================================= magnificPopup =============================================*/

    $('.gallery-item').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    //    //(Testimonials owl-caroselplugins)
    //    $('.testimonials .owl-carousel').owlCarousel({
    //        margin: 0,
    //        loop: true,
    //        autoplay: true,
    //        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    //        nav: true,
    //        responsive: {
    //            0: {
    //                items: 1
    //            },
    //            600: {
    //                items: 1
    //            },
    //            1000: {
    //                items: 1
    //            }
    //        }
    //    });
    //
    //    //(services owl-caroselplugins)
    //    $('.services .owl-carousel').owlCarousel({
    //        margin: 20,
    //        loop: true,
    //        autoplay: true,
    //        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
    //        nav: true,
    //        responsive: {
    //            0: {
    //                items: 1
    //            },
    //            600: {
    //                items: 2
    //            },
    //            1000: {
    //                items: 3
    //            }
    //        }
    //    });
    //    // smoth scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
        header: null, // Selector for fixed headers (must be a valid CSS selector)
        speed: 2000,
        offset: 50,
        easing: 'easeInOutCubic',
        customEasing: function (time) {
            return time < 0.5 ? 2 * time * time : -1 + (4 - 2 * time) * time;
        },
    });

})(jQuery);