(function($) {
    "use strict";
    var ClientCarousel = function() {
        $('.flat-row').each(function() {
            if ($().owlCarousel) {
                $(this).find('.flat-carousel').owlCarousel({
                    loop: true,
                    nav: true,
                    dots: $('.flat-carousel').data('dots'),
                    autoplay: $('.flat-carousel').data('auto'),
                    margin: 30,
                    responsive: {
                        0: {
                            items: 1
                        },
                        320: {
                            items: 2
                        },
                        480: {
                            items: 3
                        },
                        767: {
                            items: 3
                        },
                        991: {
                            items: 4
                        },
                        1200: {
                            items: $('.flat-carousel').data('item')
                        }
                    }
                });
            }
        });
    };
    if ($('.loader-wrapper').length) {
        $('.loader-wrapper').on('click', function() {
            $(this).fadeOut();
        });
    }
    if ($('.flexslider').length) {
        $('.flexslider').flexslider({
            animation: "fade"
        });
    }
    if ($('.logo-slides').length) {
        $(".logo-slides").owlCarousel({
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
            margin: 10,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                767: {
                    items: 3
                },
                991: {
                    items: 4
                },
                1199: {
                    items: 5
                }
            }
        });
    }
    if ($('.news-slides').length) {
        $(".news-slides").owlCarousel({
            autoplay: true,
            autoplayTimeout: 8000,
            loop: true,
            margin: 10,
            nav: false,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                767: {
                    items: 3
                },
                991: {
                    items: 3
                },
                1199: {
                    items: 3
                }
            }
        });
    }
    if ($('#skills').length) {
        var skillsDiv = $('#skills');
        $(window).on('scroll', function() {
            var winT = $(window).scrollTop(),
                winH = $(window).height(),
                skillsT = skillsDiv.offset().top;
            if (winT + winH > skillsT) {
                $('.skillbar').each(function() {
                    $(this).find('.skillbar-bar').animate({
                        width: $(this).attr('data-percent')
                    }, 2000);
                });
            }
        });
    }
    var captcha = function() {
        $("#change_captcha").click(function() {
            $("#as_captcha").attr("src", "captcha.php?" + (new Date()).getTime());
            $("#captchahide").attr("src", "captcha.php?" + (new Date()).getTime());
        });
    };
    if ($('.service-slider').length) {
        $('.service-slider').flexslider({
            animation: "slide",
            controlNav: false,
            directionNav: true,
            touch: true
        });
    }
    if ($('.blog-slide').length) {
        $('.blog-slide').flexslider({
            controlNav: false,
            animation: "slide"
        });
    }
    if ($('.counter').length) {
        $('.counter').counterUp({
            delay: 10,
            time: 1500
        });
    }
    $(document).ready(function() {
        $(".button a").click(function() {
            $(".full-menu").slideToggle(500);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.full-menu').on('click', function() {
        $(".full-menu").slideToggle(500);
        $(".button a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
    $(window).load(function() {
        if ($('.loader-wrapper').length) {
            $('.loader-wrapper').fadeOut();
        }
    });
	  var pagination = function() {
        var maxRows = 10;
        $('.paginated-table').each(function() {
            var cTable = $(this);
            var cRows = cTable.find('tr:gt(0)');
            var cRowCount = cRows.size();
            if (cRowCount < maxRows) {
                return;
            }
            cRows.each(function(i) {
                $(this).find('td:first').text(function(j, val) {
                    return (i + 1);
                });
            });
            cRows.filter(':gt(' + (maxRows - 1) + ')').hide();
            var cPrev = cTable.siblings('.prev');
            var cNext = cTable.siblings('.next');
            cPrev.addClass('disabled');
            cPrev.click(function() {
                var cFirstVisible = cRows.index(cRows.filter(':visible'));
                if (cPrev.hasClass('disabled')) {
                    return false;
                }
                cRows.hide();
                if (cFirstVisible - maxRows - 1 > 0) {
                    cRows.filter(':lt(' + cFirstVisible + '):gt(' + (cFirstVisible - maxRows - 1) + ')').show();
                } else {
                    cRows.filter(':lt(' + cFirstVisible + ')').show();
                }
                if (cFirstVisible - maxRows <= 0) {
                    cPrev.addClass('disabled');
                }
                cNext.removeClass('disabled');
                return false;
            });
            cNext.click(function() {
                var cFirstVisible = cRows.index(cRows.filter(':visible'));
                if (cNext.hasClass('disabled')) {
                    return false;
                }
                cRows.hide();
                cRows.filter(':lt(' + (cFirstVisible + 2 * maxRows) + '):gt(' + (cFirstVisible + maxRows - 1) + ')').show();
                if (cFirstVisible + 2 * maxRows >= cRows.size()) {
                    cNext.addClass('disabled');
                }
                cPrev.removeClass('disabled');
                return false;
            });
        });
    };
    $(function() {
        captcha();
		 pagination();
    });
})(jQuery);