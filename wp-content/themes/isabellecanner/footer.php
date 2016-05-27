<footer>

</footer>

<script src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap.min.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/modernizr.custom.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.min.js" ></script>

<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            var state = 0;
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    if (state == 0){
                        //$('.transparent').animate({backgroundColor: "black"});
                        $('.transparent').css("background-color", 'black');
                        console.log("animate");
                        state = 1;
                    }
                } else {
                    if (state == 1){
                        $('.transparent').css('background-color', 'inherit').fadeIn(1000);
                        console.log("transparent");
                        state = 0;
                    }

                }
            });
        });
    })(jQuery);
</script>

<?php wp_footer(); ?>

</body>
</html>