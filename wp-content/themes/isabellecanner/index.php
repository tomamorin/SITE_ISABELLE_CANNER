<?php
/*
    Template Name: Accueil
*/
?>

<?php get_header(); ?>
<!--CAROUSSEL-->
<div class="container-fluid caroussel">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php bloginfo('template_directory')?>/library/img/301h.jpg" alt="Château Laborde">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="<?php bloginfo('template_directory')?>/library/img/301h.jpg" alt="Château Laborde">
                <div class="carousel-caption">

                </div>
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
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="presentation-service">
                <div class="row">
                    <div class="col-md-12">
                        <h3>SERVICES</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="presentation-service-bloc">
                            <a href="enneagramme">
                                <div class="presentation-service-img">
                                    <i class="fa fa-star fa-4x" aria-hidden="true"></i>
                                    <h5>Enneagramme</h5>
                                </div>
                            </a>
                            <p class="presentation-service-texte">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="presentation-service-bloc">
                            <a href="coaching">
                                <div class="presentation-service-img">
                                    <i class="fa fa-star fa-4x" aria-hidden="true"></i>
                                    <h5>Coaching</h5>
                                </div>
                            </a>
                            <p class="presentation-service-texte">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate
                            </p>
                        </div>
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
