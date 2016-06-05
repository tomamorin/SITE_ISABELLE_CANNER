<?php
/*
    Template Name: Accueil
*/
?>

<?php get_header(); ?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
    <div class="overlay text-center">
        <h1>Isabelle Caner</h1>
        <br>
        <h2>Accompagnement Personnel</h2>
        <h2>- NANTES -</h2>
    </div>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php bloginfo('template_directory') ?>/library/img/158H-compressor.jpg" alt="..." class="height-img">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_directory') ?>/library/img/60H-compressor.jpg" alt="..." class="height-img">
            <div class="carousel-caption">
            </div>
        </div>
        <div class="item">
            <img src="<?php bloginfo('template_directory') ?>/library/img/215H-compressor.jpg" alt="..." class="height-img">
            <div class="carousel-caption">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="presentation-therapeute">
                <?php $my_query = new WP_Query(array('post_type' => 'accueil', 'post__in' => array('25'))); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="row">
                        <div class="col-md-12">
                            <h3><?php the_title(); ?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><?php the_post_thumbnail('',array('class'=>'img-responsive')); ?></div>
                        <div class="col-md-8"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid no-padding">
    <div class="background-transition">
        <div class="background-rgba">
            <div class="citation">" Se connaître soi-même n'appartient qu'à l'homme sage. "</div>
            <div class="auteur">Platon</div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="presentation-service">
                <div class="row">
                    <div class="col-md-12">
                        <h3>VOTRE FORMATION</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php $my_query = new WP_Query(array('post_type' => 'accueil', 'post__in' => array('42'))); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="presentation-service-bloc">
                                    <div class="presentation-service-img">
                                        <img src="<?php bloginfo('template_directory')?>/library/img/icon.png" alt="enneagramme" class="icone-service">
                                        <h5><?php the_title(); ?></h5>
                                    </div>
                                <div class="presentation-service-texte"><?php the_content(); ?></div>
                                <a href="enneagramme"><div class="btn-service">En savoir plus</div></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-6">
                        <?php $my_query = new WP_Query(array('post_type' => 'accueil', 'post__in' => array('44'))); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="presentation-service-bloc">
                                    <div class="presentation-service-img">
                                        <img src="<?php bloginfo('template_directory')?>/library/img/circle-between-hands.png" alt="coaching" class="icone-service">
                                        <h5><?php the_title(); ?></h5>
                                    </div>
                                <div class="presentation-service-texte"><?php the_content(); ?></div>
                                <a href="coaching"><div class="btn-service">En savoir plus</div></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="appel-contact">
    <div class="pattern">
        <h4>CONTACT</h4>
        <a href="contact"><div class="btn-div-contact">Contactez-moi</div></a>
    </div>
</div>

<?php get_footer(); ?>
