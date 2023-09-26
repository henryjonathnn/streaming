(function($) {
    "use strict";
	
	
    $(".tp-menu-bar").on("click", function () {
		$(".tpoffcanvas").addClass("opened");
		$(".body-overlay").addClass("apply");
	});
	$(".close-btn").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	$(".body-overlay").on("click", function () {
		$(".tpoffcanvas").removeClass("opened");
		$(".body-overlay").removeClass("apply");
	});
	

    $(function () {
        $('#theme-serach-box_Inner').removeClass('toggled');

        $('.theme-search-custom-iconn').on('click', function (e) {
            e.stopPropagation();
            $('#theme-serach-box_Inner').toggleClass('toggled');
            $("#popup-search").focus();
        });

        $('#theme-serach-box_Inner input').on('click', function (e) {
            e.stopPropagation();
        });

        $('#theme-serach-box_Inner, body').on('click', function () {
            $('#theme-serach-box_Inner').removeClass('toggled');
        });
    });
	

    $(window).ready(function () {
        //$("#preloader").delay(100).fadeOut("fade");
        $("#preloader").fadeOut();
    });


    /*----------------------------------------
        Scroll to top
    ----------------------------------------*/

    function BackToTop() {
        $('.scrolltotop').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 600) {
            $('.scrolltotop').fadeIn();
        } else {
            $('.scrolltotop').fadeOut();
        }
    });

    $(document).scroll(function () {
        var m = $(this).scrollTop();
        if (m > 400) {
            $('.chat-popup').fadeIn();
        } else {
            $('.chat-popup').fadeOut();
        }
    });
}
BackToTop();



        var siteMenuClone = function () {

            $('.theme-navigation-wrap').each(function () {
                var $this = $(this);
                $this.clone().attr('class', 'site-nav-wrap').appendTo('.canvas-nav-menu-wrapper');
            });

            setTimeout(function () {

                var counter = 0;
                $('.mobile-canvas-content .has-children').each(function () {
                    var $this = $(this);

                    $this.prepend('<span class="arrow-collapse collapsed">');

                    $this.find('.arrow-collapse').attr({
                        'data-bs-toggle': 'collapse',
                        'data-bs-target': '#collapseItem' + counter,
                    });

                    $this.find('> ul').attr({
                        'class': 'collapse',
                        'id': 'collapseItem' + counter,
                    });

                    counter++;

                });

            }, 1000);


        };
        siteMenuClone();



	
})(jQuery);