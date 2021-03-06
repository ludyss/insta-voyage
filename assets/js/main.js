
jQuery(document).ready(function($) {

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    /*! 
     * Full screen section
     */
    $('.screen').width(windowWidth)
            .height(windowHeight);

    var thumbs = $('#sejours .thumbnail-container .thumbnail');
    $('#sejours').width($(thumbs[0]).innerWidth() * thumbs.length);

    if (windowHeight > windowWidth) {
        $('section > video').css({
            'width': 'auto',
            'height': '100%'
        });
    } else {
        $('section > video').css({
            'width': '100%',
            'height': 'auto'
        });
    }

    /*! 
     * Handle viewport resizing
     */
    $(window).resize(function() {
        //
    });

    /*! 
     * Horizontal scrolling
     */
    $("html, body").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30);
    });

    /*! 
     * Aside toggle
     */
    $('.toggle-sidebar').click(function(event) {
        $('#sidebar').toggleClass('open');
        //$('.navbar-brand').toggleClass('active');
        event.preventDefault();
    });

    $('.toggle-lang-bar').click(function(event) {
        $('#lang-bar').toggleClass('open');
        event.preventDefault();
    });

    $('#find').click(function(event) {
        $("html, body").stop().animate({
            scrollLeft: $('#sejours').offset().left
        }, 300);
        event.preventDefault();
    });

    $('#budget-slider').slider({
        range: true,
        min: 60,
        max: 3000,
        values: [200, 1200],
        slide: function(event, ui) {
            $("#lower-price").html(ui.values[ 0 ] + " €");
            $("#high-price").html(ui.values[ 1 ] + " €");
        }
    });

    $("#lower-price").html($("#budget-slider").slider("values", 0) + " €");
    $("#high-price").html($("#budget-slider").slider("values", 1) + " €");


    var bg_video = $.ajax({
        method: 'post',
        url: '/video',
        success: function(response) {
            var list = eval('(' + response + ')');
            var video = Math.round((Math.random() * (list.length - 1)) + 0);
            $('video source').attr('src', 'assets/video/' + list[video]);
            $("video").load().play();
        }
    });


    /*! 
     * Load page to inner anchor
     */
    $('.navbar-nav a').click(function(event) {
        var target = $(this).attr('href');
        if (target[0] === '#' && target != undefined) {
            $("html, body").stop().animate({
                scrollLeft: $(target).offset().left
            }, 300);
        } else {
            var navbar = "<ul class='nav navbar-nav animated slideInDown'><li><a href='/'><i class='fa fa-home'></i> </a></li><li><a href='#contact'>Contact</a></li></ul>";
            $.ajax({
                method: 'post',
                url: target,
                success: function(response) {
                    $("#navbar-collapse").html(navbar);
                    $(".ajax-container").html(response);
                    $("html, body").stop().animate({
                        scrollLeft: $("#section-contact-map").offset().left
                    }, 300);
                }
            });
        }
        event.preventDefault();
    });
    $('input:radio[name=formulType]').click(function() {
        $('#typeFormule').value = this.value;
    });
    $('#nextstep').click(function() {
        $("html, body").stop().animate({
            scrollLeft: $("#section-reserve-formules").offset().left
        }, 300);
    });
    $('#backstep').click(function() {
        $("html, body").stop().animate({
            scrollLeft: $("#section-reserve-img").offset().left
        }, 300);
    });
    $('#section-reserve-img').click(function() {
        $('#cover-img').toggleClass('click');
    });
});
