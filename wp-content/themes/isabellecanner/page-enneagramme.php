<?php
/*
    Template Name: Enneagramme
*/
?>

<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="background-enne">
            <h2 class="vcentertitle">L'Enneagramme <br>pour mieux se comprendre soi-même</h2>
        </div>
    </div>
</div>
<div class="container def-enne">
    <div class="row">
        <div class="col-md-12">
            <?php $my_query = new WP_Query(array('post_type' => 'enneagramme', 'post__in' => array('56'))); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 contenu"><?php the_content(); ?></div>
                    <div class="col-md-7 img-enne"><?php the_post_thumbnail('',array('class'=>'img-responsive center-block')); ?></div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<div class="transition-enne-img">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <?php $my_query = new WP_Query(array('post_type' => 'enneagramme', 'post__in' => array('61'))); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 contenu-enne"><?php the_content(); ?></div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<div class="container-fluid no-padding">
    <div class="col-md-12 transition-enne">
        <div class="row match-my-cols">
            <?php $my_query = new WP_Query(array('post_type' => 'inscription', 'posts_per_page' => '-1','meta_key'	=> 'date',
                'orderby'	=> 'meta_value_num',
                'order'		=> 'ASC')); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                <div class="col-md-3 col-sm-6 col-xs-6 evenement sameheight">
                    <a href="<?php the_permalink()?>">
                        <h2 class="title-evenement"><?php the_title(); ?> <?php the_field('date') ?></h2>
                        <br>
                        <?php the_field('lieux')?>
                        <?php the_content(); ?>
                        <?php the_content(); ?><br>
                        <a href="<?php the_permalink()?>"><button class="btn-inscription btn raised">Inscription</button></a>
                    </a>
                </div>

            <?php endwhile; ?>
        </div>

    </div>
</div>

<div class="container margin-b">
    <div class="row">
        <div class="col-md-12">
            <?php $my_query = new WP_Query(array('post_type' => 'enneagramme', 'post__in' => array('62'))); ?>
            <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="row">
                    <div class="col-md-12">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 contenu-enne"><?php the_content(); ?></div>
            <?php endwhile; ?>
                    <?php $my_query = new WP_Query(array('post_type' => 'enneagramme', 'post__in' => array('95'))); ?>
                    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-6 contenu-enne"><?php the_content(); ?></div>
                    <?php endwhile; ?>
                </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>