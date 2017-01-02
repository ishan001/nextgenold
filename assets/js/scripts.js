(function () {

    var pageWrap = document.getElementById('pagewrap'),
            pages = [].slice.call(pageWrap.querySelectorAll('div.container')),
            currentPage = 0,
            loader = new SVGLoader(document.getElementById('loader'), {speedIn: 400, easingIn: mina.easeinout});

    function init() {

        loader.show();
        // after some time hide loader
        setTimeout(function () {
            loader.hide();

            classie.removeClass(pages[ currentPage ], 'show');
            // update..
            currentPage = 0;
            classie.addClass(pages[ currentPage ], 'show');

        }, 2000);
    }

    init();
    $('.footer-social li a, .social li a, .nav-socials li a').tooltip();
    function navigation() {
        var list = $(".portfolio .filters ul");
        var li = list.children();
        var lengthMinusOne = li.length - 1;
        var index = 0;
        var num = $(".portfolio .filters ul li").length;

        // Next category
        $(".navfilter .next").click(function (event) {
            event.preventDefault();

            index = list.find('li').index(list.find('li.active')) + 1;
            if (index > lengthMinusOne)
                index = 0;

            var nextFilter = $(li[index]).find('a').data('filter');

            $(li[index]).find('a').closest('li').siblings().removeClass('lineclear').end().addClass('lineclear').prev().addClass('lineclear');
            // Add Class to Filter
            $(li[index]).find('a').closest('li').siblings().removeClass('active').end().addClass('active');
            // Filter by category
            $(".portfolio .items").isotope({filter: nextFilter});

        });

        // Previus category
        $(".navfilter .prev").click(function (event) {
            event.preventDefault();

            index = list.find('li').index(list.find('li.active')) - 1;
            if (index < 0)
                index = lengthMinusOne;

            var nextFilter = $(li[index]).find('a').data('filter');

            $(li[index]).find('a').closest('li').siblings().removeClass('lineclear').end().addClass('lineclear').prev().addClass('lineclear');
            // Add Class to Filter
            $(li[index]).find('a').closest('li').siblings().removeClass('active').end().addClass('active');
            // Filter by category
            $(".portfolio .items").isotope({filter: nextFilter});
        });

    }
    navigation();
    $('.portfolio').each(function () {

        if ($.fn.imagesLoaded && $.fn.isotope) {

            $('.items', this).imagesLoaded(function () {
                $(this).isotope({
                    itemSelector: '.item',
                    transitionDuration: '0.5s'
                }).closest('.portfolio').addClass('loaded');
            });
        }
    });
    $('.portfolio .filters a[data-filter]').on('click', function () {
        $(this)
                .closest('li')
                .siblings()
                .removeClass('lineclear')
                .end()
                .addClass('lineclear')
                .prev()
                .addClass('lineclear');

        $(this)
                .closest('li')
                .siblings()
                .removeClass('active')
                .end()
                .addClass('active')
                .closest('.portfolio')
                .find('.items')
                .isotope({filter: $(this).data('filter')})
                .end().end()
                .closest('.filter')
                .find('.active')
                .html(this.innerHTML);

    });
    // Memebers
    $(".members").owlCarousel({
        navigation: false, // Show next and prev buttons
        pagination: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 5000,
        singleItem: true
    });

    // Testimonials
    $(".testimonials").owlCarousel({
        navigation: false, // Show next and prev buttons
        pagination: true,
        slideSpeed: 300,
        paginationSpeed: 400,
        autoPlay: 5000,
        singleItem: true
    });

    var revapi;
    revapi = jQuery('.tp-banner').revolution({
        delay: 5000,
        startwidth: 1170,
        startheight: 400,
        hideThumbs: 10,
        fullWidth: "on",
        forceFullWidth: "on"
    });

    "use strict";
    var $container = $('.portfolio'),
            $items = $container.find('.item'),
            portfolioLayout = 'masonry';

    $container.isotope({
        filter: '*',
        animationEngine: 'best-available',
        layoutMode: portfolioLayout,
        animationOptions: {
            duration: 750,
            easing: 'linear',
            queue: false
        },
        masonry: {
        }
    }, refreshWaypoints());

    function refreshWaypoints() {
        setTimeout(function () {
        }, 1000);
    }

    $('.filters a').on('click', function () {
        var selector = $(this).attr('data-filter');
        //$container.isotope({filter: selector}, refreshWaypoints());
        $('.filters a').removeClass('active');
        $(this).addClass('active');
        return false;
    });

    function getColumnNumber() {
        var winWidth = $(window).width(),
                columnNumber = 1;

        if (winWidth > 1200) {
            columnNumber = 5;
        } else if (winWidth > 950) {
            columnNumber = 4;
        } else if (winWidth > 600) {
            columnNumber = 3;
        } else if (winWidth > 400) {
            columnNumber = 2;
        } else if (winWidth > 250) {
            columnNumber = 1;
        }
        return columnNumber;
    }

    function setColumns() {
        var winWidth = $(window).width(),
                columnNumber = getColumnNumber(),
                itemWidth = Math.floor(winWidth / columnNumber);

        $container.find('.item').each(function () {
            $(this).css({
                width: itemWidth + 'px'
            });
        });
    }

    function setPortfolio() {
        setColumns();
        $container.isotope('reLayout');
    }

    $(window).on('resize', function () {
        setPortfolio();
    });

    if ($.fn.magnificPopup) {

        // Each Image
        $.each({
            '.portfolio': 'a.mfp-zoom',
            '.portfolio-one': 'a.mfp-zoom',
            '.portfolio-two': 'a.mfp-zoom',
            '.portfolio-three': 'a.mfp-zoom'
        }, function (selector, delegate) {
            $(selector).each(function () {
                var type = $(this).find(delegate).data('type');
                type == 'video' ? type = 'iframe' : type = 'image';

                $(this).magnificPopup({
                    delegate: delegate,
                    type: type,
                    gallery: delegate ? {enabled: true} : false
                });
            });
        });
    }


})();
// DM Menu
jQuery('.header').affix({
    offset: {top: $('.header').offset().top}
});
$('#home').removeClass();
$('#about-us').removeClass();
$('#offers').removeClass();
$('#contact-us').removeClass();

var url = document.URL;
var result= url.split('/');
var param = result[result.length-1];
if(param==="")
{
    $('#home').addClass('active');
}
else
{
    $('#'+param).addClass('active');
}