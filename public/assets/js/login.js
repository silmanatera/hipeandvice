(function($) {
    $(document).ready(function() {
        $('.list-inline li > a').click(function() {
            var activeForm = $(this).attr('href') + ' > form';
            //console.log(activeForm);
            $(activeForm).addClass('animated fadeIn');
            //set timer to 1 seconds, after that, unload the animate animation
            setTimeout(function() {
                $(activeForm).removeClass('animated fadeIn');
            }, 1000);
        });
    });
})(jQuery);