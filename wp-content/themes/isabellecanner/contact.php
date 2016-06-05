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
                <p>Adresse : 4 rue Allaire
                    <br>44400 REZE
                </p>
                <p>Téléphone : 06 03 49 08 61</p>
                <p>Mail : isabelle.chabran@wanadoo.fr </p>

                <p>Prix :</p>
                <p>•	240 euros par module de 2  jours pour les particuliers
                    <br>•	300  euros  Consultants/ Professions libérales
                    <br>•	600  euros  si prise en charge formation par l’entreprise
                </p>
            </div>
        </div>
        </div>

</div>


<?php get_footer(); ?>
