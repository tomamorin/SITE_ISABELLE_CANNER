<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <img src="" alt="">
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 no-padding"  >
                <div id="map-canvas" class="img" ></div>
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
                <p>Adresse : 46 avenue du Docteur HECKEL
                    <br>13011 MARSEILLE
                </p>

                <p>Téléphone : 07 82 25 32 10</p>
                <hr>
                <p>Les Rendez-vous se font du lundi au samedi.
                    L’entretien préalable est gratuit</p>
            </div>
        </div>
        </div>

</div>


<?php get_footer(); ?>
