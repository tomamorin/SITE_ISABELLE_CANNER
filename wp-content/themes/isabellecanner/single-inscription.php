<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>
<div class="container-fluid no-padding">
        <div class="transition-enneins col-md-12">
            <h3 class="titleinscription">INSCRIPTION</h3>
        </div>
</div>

<div class="clearfix"></div>
<div class="container no-padding ">
    <div class="row">
        <div class="col-md-12 dcontact">
            <div class="col-md-7">
                <h3 class="contact"><?php the_title()?>  <?php the_field('lieux')?></h3>
                <?php echo do_shortcode("[contact-form-7 id=\"104\" title=\"Inscription\"]")?>
            </div>
            <div class="col-md-5 informations">
                <h2 class="subtitle">Informations</h2>
                <div>
                    <p><?php the_field('adresse')?></p>
                    <p><?php the_field('lieux')?></p>

                </div>
                <p>Téléphone : 06 03 49 08 61</p>

                <p>Prix :<?php the_field('prix')?>€</p>



            </div>
        </div>
    </div>

</div>


<?php get_footer(); ?>
