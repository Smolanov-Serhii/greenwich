$( document ).ready(function() {

    if ($(".slide-carusel").length){
        $('.slide-carusel').marquee({
            duration: 7000,
            startVisible: true,
            duplicated: true
        });
    };


    function parallax(){
        var scrolled = $(window).scrollTop();
        var headerHeight = $('header').height();
        $( window ).resize(function() {
            headerHeight = $('header').height();
        });
        $('.bg-video video').css('top', '' + (scrolled*0.4 - headerHeight)+'px');
        $('.main-title-paralax').css('background-position', 'center 0' + (scrolled*0.4 - headerHeight*0.4)+'px');
        $('.main-title-paralax__content').css('top', '' + (scrolled*0.2)+'px');
    }
    $(window).scroll(function(e){
        parallax();
    });


    if ($(".about-photo-slider").length){
        var AboutSlider = new Swiper(".about-photo-slider .swiper-container", {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".about-photo-slider .text-primary",
                type: "fraction",
            },
            navigation: {
                nextEl: ".about-photo-slider .carousel-control-next",
                prevEl: ".about-photo-slider .carousel-control-prev",
            },
        });

        var AboutVideoSlider = new Swiper("#carouselVideoSlider .swiper-container", {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: "#carouselVideoSlider  .text-primary",
                type: "fraction",
            },
            navigation: {
                nextEl: "#carouselVideoSlider .carousel-control-next",
                prevEl: "#carouselVideoSlider .carousel-control-prev",
            },
        });
    }
    if ($(".tabs-content").length){
        $(".item__content").not(":first").hide();
        $(".item__list li").click( function(e) {
            $(".item__list li").removeClass("current").eq($(this).index()).addClass("current");
            $(".item-content").hide().eq($(this).index()).fadeIn();
        }).eq(0).addClass("current");
    }

    if ($(".subscription").length){
        $(".subscription__header").click( function(e) {
            $(this).toggleClass('open');
            $(this).closest('.subscription__group').find('.subscription__list').fadeToggle(300);
        });
    }

    if ($("#carouselReview").length){
        var AboutVideoSlider = new Swiper("#carouselReview", {
            loop: true,
            spaceBetween: 88,
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".reviewes  .count-sliders",
                type: "fraction",
            },
            navigation: {
                nextEl: ".reviewes .carousel-control-next",
                prevEl: ".reviewes .carousel-control-prev",
            },
        });
    }


    var ticking

    let wh = window.innerHeight
    let n = 0
    let el_t

    $( ".btn-burger" ).click(function() {
        $('#collapseExample').fadeToggle(300);
        if( $(window).width() < 1001 ) {
            $('body').toggleClass('locked');
        }
    });

    function doSomething(scroll_pos) {
        //$('body').css('transform', 'translateY(-' + scroll_pos / 20 + '%)')
        // console.log('scroll')

        $('.motion').each( function (e) {

            if ( $(this).offset().top + $(this).height() > ( scroll_pos + wh - 250 ) && $(this).offset().top  < ( scroll_pos + wh - 150 ) ) {

                $(this).addClass('show')

            }

        })

    }

    window.addEventListener('scroll', function(e) {

        let last_known_scroll_position = window.scrollY

        if (!ticking) {
            window.requestAnimationFrame( function() {
                doSomething(last_known_scroll_position)
                ticking = false
            });

            ticking = true
        }
    })

    document.addEventListener('DOMContentLoaded', () => {

        //

    })

    var initializeContactsMap;

    initializeContactsMap = function() {
        var canvasMap, location, locationMarker, options, x, y;
        if ($('#map').length) {
            x = 55.787506;
            y = 37.635698;
            location = new google.maps.LatLng(x, y);
            options = {
                center: location,
                zoom: 16,
                mapTypeControl: false,
                scrollwheel: false
            };

            var markerImage = new google.maps.MarkerImage(
                new google.maps.Size(0,150),
                new google.maps.Point(0,0),
                new google.maps.Point(37,110)
            );


            canvasMap = new google.maps.Map(document.getElementById('map'), options);
            locationMarker = new google.maps.Marker({
                position: location
            });

            return locationMarker.setMap(canvasMap);
        }
    };
    $(document).ready(initializeContactsMap);
});


