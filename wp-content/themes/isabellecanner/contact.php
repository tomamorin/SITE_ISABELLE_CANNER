<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 no-padding"  >
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
<div class="container no-padding">
    <div class="row">
        <div class="col-md-12 dcontact">
            <div class="col-md-7">
                <h3 class="contact"><?php the_title()?></h3>
                <?php echo do_shortcode("[contact-form-7 id=\"53\" title=\"Contact\"]")?>
            </div>
            <div class="col-md-5 informations">
                <h2 class="subtitle">Informations et Rendez-vous</h2>
                <div>
                    <?php $my_query = new WP_Query(array('post_type' => 'Page Contact', 'post__in' => array('70'))); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <p>Téléphone : 06 03 49 08 61</p>

                <p>Prix :</p>
                <div>
                    <?php $my_query = new WP_Query(array('post_type' => 'Page Contact', 'post__in' => array('69'))); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>


            </div>
        </div>
        </div>

</div>


<?php get_footer(); ?>
