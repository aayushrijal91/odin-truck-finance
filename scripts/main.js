// AOS.init({ duration: 1500 });

$(() => {
    $("#cta").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: "220px",
        speed: 2000,
        cssEase: "linear",
        autoplay: true,
        autoplaySpeed: 0,
        draggable: false,
        arrows: false,
        touchMove: false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    centerPadding: "20px",
                    slidesToShow: 2,
                }
            },
            {
            breakpoint: 540,
            settings: {
                centerPadding: "20px",
                slidesToShow: 1,
            }
        }]
    });

    let initialWidth = $('ul.loans-slider-nav li.active').outerWidth();
    $('.loans-slider-wrapper ul li.slide').width($('ul.loans-slider-nav li.active').width());

    $('.loan-slider-btn').on('click', function () {
        let slideTarget = $(this).attr('slideTarget');
        slideTarget = parseInt(slideTarget);

        $(this).parents('ul').find('li').removeClass("active");
        $(this).parents('ul').find(`li:nth-child(${slideTarget + 1})`).addClass('active');

        $('.loans-slider-wrapper ul li ~ .slide').css('left', initialWidth * slideTarget);
    });

    $(".accordion-head").on('click', function () {
        $(".accordion-head").removeClass("active");
        $('.accordion-card').css('background', 'linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, rgba(237, 237, 237, 0.3) 100%)');
        $(this).addClass('active').parents('.accordion-card').css('background', "#F9A51A");

        if ($('.accordion-body').is(':visible')) {
            $(".accordion-body").slideUp(300);
            $(".plusminus").html('+');
        }
        if ($(this).next(".accordion-body").is(':visible')) {
            $(this).next(".accordion-body").slideUp(300);
            $(this).find(".plusminus").html('|');
        } else {
            $(this).next(".accordion-body").slideDown(300);
            $(this).find(".plusminus").html('|');
        }
    });

    $(".testimonial-slider").slick({
        slidesToShow: 3,
        arrows: false,
        dots: true,
        autoplay: true,

        responsive: [
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.testimonials .accordion .tabs').on('click', function (e) {
        e.preventDefault();
        $('.testimonials .accordion .tabs').removeClass('active');
        $(this).addClass('active');
    });     
});

let formSlick = $("#multi-step-form-slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    draggable: false,
    dots: true,
    appendDots: $('.slick-slider-dots'),
});

let currentTab = 0;
showTab(currentTab);

function showTab(n) {
    formSlick.slick('slickGoTo', n);

    let x = document.getElementsByClassName("tab");

    if (n == 0) {
        $("#prevBtn").css('display', 'none');
        $("#nextBtn").removeClass('border-white').removeClass('text-white').addClass('btn-white').addClass('text-primary');
        $("#nextBtn").html('Get Started');
    } else if (n == (x.length)) {
        $('.buttons').removeClass('d-flex').addClass('d-none');
    } else if (n == (x.length - 1)) {
        $("#nextBtn").removeClass('border-white').removeClass('text-white').addClass('btn-white').addClass('text-primary');
        $("#nextBtn").html('Submit');
    } else {
        $("#nextBtn").html('Next');
        $("#nextBtn").removeClass('btn-white').removeClass('text-primary').addClass('border-white').addClass('text-white');
        $("#prevBtn").css('display', 'inline');
        $('.form .title').removeClass('d-none').addClass('d-block');
        $('.buttons').removeClass('d-none').addClass('d-flex');
    }
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");

    if (n == 1 && !validateForm()) return false;
    currentTab = currentTab + n;

    if (currentTab >= x.length) {
        document.getElementById("slider-form").submit();

        return false;
    }

    showTab(currentTab);
}

function validateForm() {
    var x, y, i, valid = true;

    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByClassName('form-control required');

    for (i = 0; i < y.length; i++) {
        if (y[i].value == "") {
            $(y[i]).removeClass('invalid');
            y[i].className += " invalid";
            $(y[i]).next('.invalid-feedback').remove();
            $(y[i]).after('<div class="invalid-feedback d-block">Please fill in this field.</div>');
            valid = false;
        }
        else {
            $(y[i]).removeClass('invalid');
            $(y[i]).next('.invalid-feedback').remove();
        }
    }

    return valid;
}

document.querySelectorAll('a[href="#form"], a[href="#about-us"], a[href="#truck-finance"], a[href="#loans"], a[href="#why-us"], a[href="#how-does-it-work"], a[href="#things-to-know"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});