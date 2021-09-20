$( document ).ready(function() {
    AOS.init({
        // Global settings:
        disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
        startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
        initClassName: 'aos-init', // class applied after initialization
        animatedClassName: 'aos-animate', // class applied on animation
        useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
        disableMutationObserver: false, // disables automatic mutations' detections (advanced)
        debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
        throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
        // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
        offset: 100, // offset (in px) from the original trigger point
        delay: 0, // values from 0 to 3000, with step 50ms
        duration: 800, // values from 0 to 3000, with step 50ms
        easing: 'ease', // default easing for AOS animations
        once: false, // whether animation should happen only once - while scrolling down
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
    if ($(".treners__similar-list").length){
        var SimilarSlider = new Swiper(".treners__similar-list", {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".treners__similar .carousel-control-next",
                prevEl: ".treners__similar .carousel-control-prev",
            },
            breakpoints: {
                500: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    };

    if ($(".words-carusel").length){
        var SimilarSlider = new Swiper(".words-carusel__container", {
            loop: true,
            autoplay: {
                delay: 800,
                disableOnInteraction: false,
            },
            breakpoints: {
                500: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
            },
        });
    };

    if ($(".slide-carusel").length){
        $('.slide-carusel').marquee({
            duration: 7000,
            startVisible: true,
            duplicated: true
        });
    };

    if ($(".js-search-popup").length){
        $(".subscription__item-by").click( function(e) {
            var CurrentAbonement = $(this).closest('.subscription__item').find('.subscription__item-title').html();
            var CurrentRubrika = $(this).closest('.subscription__group').find('.subscription__title').html();
            console.log(CurrentAbonement);
            $('input.zakaz').val(CurrentAbonement);
            $('input.rubrika').val(CurrentRubrika);
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-abonement').fadeIn(300);
        });
        $(".close-abonement").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-abonement').fadeOut(300);
        });

        $(".js-search-popup").click( function(e) {
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-search').fadeIn(300);
        });
        $(".close-search").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-search').fadeOut(300);
        });

        $(".js-exursion").click( function(e) {
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-ekskursia').fadeIn(300);
        });
        $(".close-ekskursia").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-ekskursia').fadeOut(300);
        });

        $(".js-trenerovka").click( function(e) {
            $('body').addClass('locked');
            $('.popup-fade').fadeIn(300);
            $('.popup-trenerovka').fadeIn(300);
        });
        $(".close-trenerovka").click( function(e) {
            $('body').removeClass('locked');
            $('.popup-fade').fadeOut(300);
            $('.popup-trenerovka').fadeOut(300);
        });
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            console.log('sended');
            $('body').removeClass('locked');
            $('.popup-fade > div').fadeOut(300);
            $('.popup-fade').fadeOut(300);
            $('.wpcf7-response-output').empty();
            setTimeout(function (){
                $('#success-send').removeClass('active-popup');
            }, 2000);
        }, false );
    };

    if ($(".about__item-full").length){
        $(".js-show-case-item").click( function(e) {
            $('.popup-fade').fadeIn(300);
            $('body').addClass('locked');
            $(this).closest('.about__text-part').find('.about__item-full').fadeIn(300);
        });
        $(".close-item-about").click( function(e) {
            $('.popup-fade').fadeOut(300);
            $('body').removeClass('locked');
            $(this).closest('.about__text-part').find('.about__item-full').fadeOut(300);
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
        var AboutSlider = new Swiper(".about-img-slider .swiper-container", {
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".about-img-slider .text-primary",
                type: "fraction",
            },
            navigation: {
                nextEl: ".about-img-slider .carousel-control-next",
                prevEl: ".about-img-sliderr .carousel-control-prev",
            },
        });

        var AboutVideoSlider = new Swiper("#carouselVideoSlider .swiper-container", {
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".video-slider  .text-primary",
                type: "fraction",
            },
            navigation: {
                nextEl: ".video-slider .carousel-control-next",
                prevEl: ".video-slider .carousel-control-prev",
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
            autoHeight: true, //enable auto height
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

    if ($(".similar-trening__list").length){
        var ASimilarTreining = new Swiper(".similar-trening__list", {
            slidesPerView: 4,
            spaceBetween: 6,
            autoHeight: true, //enable auto height
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".similar-trening .carousel-control-next",
                prevEl: ".similar-trening .carousel-control-prev",
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                    spaceBetween: 6,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 6,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 6,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 6,
                },
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
            if ( $(window).width() > 768 ) {
                var scrollParam = 150;
            } else {
                var scrollParam = 20;
            }
            if ( $(this).offset().top + $(this).height() > ( scroll_pos + wh - scrollParam ) && $(this).offset().top  < ( scroll_pos + wh - scrollParam ) ) {

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

// var mySVG = document.getElementById('svg');
// mySVG.setAttribute("viewBox", "0 0 100 100");


