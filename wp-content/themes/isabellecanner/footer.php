<footer>
    <div class="mentions">Copyright © 2016. Site crée par Thomas MORIN & Sacha BOBINET & Thomas LUPU.</div>
</footer>
</body>



<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.min.js" ></script>
<script src="<?php bloginfo('template_directory'); ?>/library/js/bootstrap.min.js" ></script>
<!--GOOGLE MAP-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDlAmzR49jqVCtpdBjL4cceQkiyvDHZ-2Q&callback=initMap">
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory')?>/library/js/googlemap.js"></script>

<script type="text/javascript">
    (function($) {
        $(document).ready(function(){
            var state = 0;
            $(window).scroll(function(){
                if ($(this).scrollTop() > 100) {
                    if (state == 0){
                        $('#menu-item-38').css("display","inline-block").fadeIn(2000);
                        $('#menu-item-38').css("margin","0 1%").fadeIn(2000);
                        $('.transparent').css("background-color", 'rgba(255,255,255, 0.9)');
                        console.log("animate");
                        state = 1;
                    }
                } else {
                    if (state == 1){
                        $('#menu-item-38').css("display","none").fadeOut(2000);
                        $('#menu-item-38').css("margin","0 0%").fadeOut(2000);
                        $('.transparent').css('background-color', 'inherit').fadeIn(1000);
                        console.log("transparent");
                        state = 0;
                    }

                }
            });
        });
    })(jQuery);
</script>
<script>
    var cf7input = $( ".wpcf7-form-control" );
    if ( cf7input.parent().is( "span" ) ) {
        cf7input.unwrap();
    } else {
        cf7input.wrap( "<div></div>" );
    }
    jQuery('.form-group br').remove();

    jQuery('.form-control').focusout(function(){
        var text_value=jQuery(this).val();
        if(text_value!='')
        {

//  alert(1);
            jQuery(this).addClass("wariya");
        }else{jQuery(this).removeClass("wariya");}
    });
</script>

<?php wp_footer(); ?>

</body>
</html>