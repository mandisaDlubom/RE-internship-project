$(document).ready(function () {
    /* Variables */
    var menuTrigger = $(".menu-trigger");
    var navContainer = $(".nav-container");
    var nav = $(".nav");
    setNavigation();


    /*
    *
    * Nav
    *
    * */

// Hide Header on on scroll down
    var didScroll;
    var lastScrollTop = 0;
    var delta = 250;
    var navbarHeight = $('.nav').outerHeight();

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if (Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $('.nav').removeClass('nav-down').addClass('nav-up');
        } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
                $('.nav').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }

    /* Menu toggle */
    menuTrigger.on("click", function () {
        $(this).toggleClass("active");
        $('body').toggleClass('overflow--hidden');
        $('.slider').toggleClass('visibility-none');
        nav.toggleClass("mobile-view");
        navContainer.slideToggle();
        navContainer.toggleClass("mobile-active");
    });

    $('.lang-item').on('click', function () {
        $('.lang-item').removeClass('active');
        $(this).addClass('active');
    });

    $('.project-link').on('click', function () {
        $('.project-link').removeClass('active');
        $(this).addClass('active');
    });

    $('.fav').on('click', function () {
        $(this).toggleClass('active');
    });

    $('.nav-link').on('click', function () {
        $('.nav-link').removeClass('active');
        $(this).addClass('active');
    });

    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $(".nav-link").each(function () {
            var href = $(this).attr('href');
            if (path.substring(0, href.length) === href) {
                $(this).addClass('active');
            }
        });
    }


    /*
   *
   * Home slider
   *
   * */
    $(".slides").slick({
        asNavFor: '.captions, .slider-heading',
        infinite: false,
        autoplay: true,
        speed: 200,
        arrows: false
    });

    $(".captions").slick({
        asNavFor: '.slides, .slider-heading',
        infinite: false,
        speed: 200,
        fade: true,
        appendArrows: $('.pagination'),
        prevArrow: '<div class="pagination__button"><i class="material-icons">keyboard_arrow_left</i></div>',
        nextArrow: '<div class="pagination__button"><i class="material-icons">keyboard_arrow_right</i></div>'
    });

    $('.slider-heading').slick({
        asNavFor: '.slides',
        infinite: false,
        speed: 200,
        fade: true,
        arrows: false
    });

    /*
    *
    * About page slider
    *
    * */
    $('.about-slider').slick({
        centerMode: true,
        autoplay: true,
        centerPadding: '60px',
        slidesToShow: 3,
        prevArrow: '.prev',
        nextArrow: '.next',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    /*
    *
    * Projects filter
    *
    * */

    /* Search active */
    $('.search__trigger').on('click', function () {
        $('.quickSearch').toggleClass('active');
        $(this).toggleClass('active');
    });

    // quick search regex
    var qsRegex;

    // use value of search field to filter
    var $quickSearch = $('.quickSearch').keyup(debounce(function () {
        qsRegex = new RegExp($quickSearch.val(), 'gi');
        /*g --> global match and i --> ignore case  */
        $grid.isotope();
    }, 200));


    /* Init isotope */
    var $grid = $('.filter-grid').isotope({
        itemSelector: '.artist',
        layoutMode: 'fitRows',
        filter: function () {
            return qsRegex ? $(this).text().match(qsRegex) : true;
        }
    });

    $('.project-link').on('click', function () {
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });


// debounce so filtering doesn't happen every millisecond
    function debounce(fn, threshold) {
        var timeout;
        threshold = threshold || 100;
        return function debounced() {
            clearTimeout(timeout);
            var args = arguments;
            var _this = this;

            function delayed() {
                fn.apply(_this, args);
            }

            timeout = setTimeout(delayed, threshold);
        };
    }


    /*
   *
   * Contact Form
   *
   * */

    function solid() {
        function cback(e) {
            var t = [];
            for (var n = inputs.length; n--;) {
                if (!inputs[n].value.length) t.push(inputs[n]);
            }
            var r = t.length;
            var i = inputs.length;
            var s = document.querySelectorAll(".top");
            for (var o = s.length; o--;) {
                s[o].style.width = 100 - r / i * 100 + "%";
            }
        }

        var forms = document.querySelectorAll(".contact-form"),
            inputs = [];
        for (var i = forms.length; i--;) {
            var els = forms[i].querySelectorAll("input, textarea, select");
            for (var j = els.length; j--;) {
                if (els[j].type != "button" && els[j].type != "submit") {
                    inputs.push(els[j]);
                    els[j].addEventListener("input", cback, false);
                }
            }
        }
    }

    function flash() {
        function cback(e) {
            var t = [];
            for (var n = inputs.length; n--;) {
                if (!inputs[n].value.length) t.push(inputs[n]);
            }
            var r = t.length;
            var i = inputs.length;
            var s = document.querySelectorAll(".top");
            for (var o = s.length; o--;) {
                s[o].style.width = 100 - r / i * 100 + "%";
                s[o].style.background = cols[i - r - 1];
            }
        }

        var forms = document.querySelectorAll(".contact-form"),
            inputs = [];
        for (var i = forms.length; i--;) {
            var els = forms[i].querySelectorAll("input, textarea, select");
            for (var j = els.length; j--;) {
                if (els[j].type != "button" && els[j].type != "submit") {
                    inputs.push(els[j]);
                    els[j].addEventListener("input", cback, false);
                }
            }
        }

        var cols = ["#1ABC9C", "#EC7063", "#3498DB"];
    }

    function gradient() {
        function cback(e) {
            var t = [];
            for (var n = inputs.length; n--;) {
                if (!inputs[n].value.length) t.push(inputs[n]);
            }
            var r = t.length;
            var i = inputs.length;
            var s = document.querySelectorAll(".top");
            for (var o = s.length; o--;) {
                s[o].style.width = 100 - r / i * 100 + "%";
            }
        }

        var forms = document.querySelectorAll(".contact-form"),
            inputs = [];
        for (var i = forms.length; i--;) {
            var els = forms[i].querySelectorAll("input, textarea, select");
            for (var j = els.length; j--;) {
                if (els[j].type != "button" && els[j].type != "submit") {
                    inputs.push(els[j]);
                    els[j].addEventListener("input", cback, false);
                }
            }
        }
    }

    function sections() {
        function cback(e) {
            var t = [];
            for (var n = inputs.length; n--;) {
                if (!inputs[n].value.length) t.push(inputs[n]);
            }
            var r = t.length;
            var i = inputs.length;
            var s = document.querySelectorAll(".top");
            for (var o = s.length; o--;) {
                s[o].style.width = 100 - r / i * 100 + "%";
            }
        }

        var forms = document.querySelectorAll(".contact-form"),
            inputs = [];
        for (var i = forms.length; i--;) {
            var els = forms[i].querySelectorAll("input, textarea, select");
            for (var j = els.length; j--;) {
                if (els[j].type != "button" && els[j].type != "submit") {
                    inputs.push(els[j]);
                    els[j].addEventListener("input", cback, false);
                }
            }
        }


        function generateCSSGradient(colours) {
            var l = colours.length,
                i;
            for (i = 0; i < l; i++) colours[i] = colours[i].join(" ");
            return "linear-gradient( to right, " + colours.join(", ") + ")";
        }

        //Edit your colors here. Enter the color twice.
        var cols = [
            ["#1ABC9C", "0%"],
            ["#1ABC9C", "33.3%"],
            ["#EC7063", "33.3%"],
            ["#EC7063", "66.6%"],
            ["#3498DB", "66.6%"],
            ["#3498DB", "100%"]
        ];
        document.getElementsByClassName('top').innerHTML = '<div class="colors"></div>';
        document.querySelector(".colors").style.background = generateCSSGradient(cols);

        var window_width = window.innerWidth + "px";
        document.querySelector(".colors").style.width = window_width;
    };


    solid();

});