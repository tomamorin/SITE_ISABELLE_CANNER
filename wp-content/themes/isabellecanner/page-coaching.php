<?php
/*
    Template Name: Coaching
*/
?>

<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="background-coach">
                <h4 class="coach">Le Coaching <br>pour faire le bon choix professionnel</h4>
            </div>
        </div>
    </div>
    <div class="container description-coaching">
        <div class="row">
            <div class="col-md-12">
                <?php $my_query = new WP_Query(array('post_type' => 'coaching', 'post__in' => array('64'))); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 contenu-enne"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <div class="container description-coaching">
        <div class="row">
            <div class="col-md-12">
                <?php $my_query = new WP_Query(array('post_type' => 'coaching', 'post__in' => array('65'))); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 contenu-enne"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>