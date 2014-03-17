
jQuery(document).ready(function($) {

    var windowWidth = $(window).width();
    var windowHeight = $(window).height();

    /*! 
     * Full screen section
     */
    $('.screen').width(windowWidth)
            .height(windowHeight);

    /*! 
     * Handle viewport resizing
     */
    $(window).resize(function() {
        //
    });

    /*! 
     * Horizontal scrolling
     */
    $('html, body').mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 50);
        if(delta < 0){
            $('#sidebar').removeClass('open');
        }
    });

    /*! 
     * Aside toggle
     */
    $('.toggle-sidebar').click(function(event) {
        $('#sidebar').toggleClass('open');
        event.preventDefault();
    });

    /*! 
     * Scroll to inner anchor
     */
    $('a').click(function(event) {
        var target = $(this).attr('href');
        if (target[0] === '#') {
            $('html, body').stop().animate({
                scrollLeft: $(target).offset().left
            }, 300);
            event.preventDefault();
        }
    });

    $('#budget-slider').slider({
        range: true,
        min: 60,
        max: 3000,
        values: [200, 1200],
        slide: function(event, ui) {
        }
    });

});
