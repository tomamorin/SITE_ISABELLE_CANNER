<footer>

</footer>

<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.min.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap.min.js" ></script>

<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            var state = 0;
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    if (state == 0){
                        $('#menu-item-56').css("display","inline-block").fadeIn(2000);
                        $('#menu-item-56').css("margin","0 1%").fadeIn(2000);
                        $('.transparent').css("background-color", 'black');
                        console.log("animate");
                        state = 1;
                    }
                } else {
                    if (state == 1){
                        $('#menu-item-56').css("display","none").fadeOut(2000);
                        $('#menu-item-56').css("margin","0 0%").fadeOut(2000);
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