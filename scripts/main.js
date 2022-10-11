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
        touchMove: false
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
    }else if (n == (x.length - 1)) {
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

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
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