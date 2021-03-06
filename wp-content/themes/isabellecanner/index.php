<?php
/*
    Template Name: Accueil
*/
?>

<?php get_header(); ?>
<div class="container-fluid no-padding">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="5000" data-pause="false">
        <div class="overlay text-center">
            <div class="vcenter">
                <h1 class="caption-title"><span>Isabelle Chabran<!--<img src="<?php bloginfo('template_directory') ?>/library/img/logowhite.png" alt="..." class="img-responsive">--></span></h1>
                <br>
                <h2>Accompagnement au Changement</h2>
                <h2>- NANTES -</h2>
            </div>

        </div>
        <div class="arrow col-md-12 col-sm-12 col-xs-12">
            <a class="js-scrollTo" href="#therapeute">
                <img src="<?php bloginfo('template_directory') ?>/library/img/down-arrow.png" alt="flèche indiquant le scroll vers la bas" class="img-responsive center-block animated bounce infinite fleche">
            </a>
        </div>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory') ?>/library/img/background-5-compressor.jpeg" alt="groupe de personnes en haut d'une montagne" class="img-responsive height-img">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/library/img/background-8-min.jpeg" alt="groupe de personnes marchant dans la nature" class="img-responsive height-img">
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory') ?>/library/img/background-6-min.jpeg" alt="groupe de personnes marchant vers le soleil" class="img-responsive height-img">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
</div>
<div id="therapeute">
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
                        <div class="col-md-5"><?php the_post_thumbnail('',array('class'=>'img-responsive center-block')); ?></div>
                        <div class="col-md-7 contenu mrg-50"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php $my_query = new WP_Query(array('post_type' => 'accueil', 'post__in' => array('74'))); ?>
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                <div class="row">
                    <div class="col-md-12 contenu"><?php the_content(); ?></div>
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
                                        <img src="<?php bloginfo('template_directory')?>/library/img/icon.png" alt="icone enneagramme" class="icone-service">
                                        <h5><?php the_title(); ?></h5>
                                    </div>
                                <div class="presentation-service-texte"><?php the_content(); ?></div>
                                <a href="enneagramme"><div class="btn btn-contact">En savoir plus</div></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <div class="col-md-6">
                        <?php $my_query = new WP_Query(array('post_type' => 'accueil', 'post__in' => array('44'))); ?>
                        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <div class="presentation-service-bloc">
                                    <div class="presentation-service-img">
                                        <img src="<?php bloginfo('template_directory')?>/library/img/circle-between-hands.png" alt="icone coaching" class="icone-service">
                                        <h5><?php the_title(); ?></h5>
                                    </div>
                                <div class="presentation-service-texte"><?php the_content(); ?></div>
                                <a href="coaching"><div class="btn btn-contact">En savoir plus</div></a>
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
