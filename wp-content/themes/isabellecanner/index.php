<?php
/*
    Template Name: Accueil
*/
?>

<?php get_header(); ?>

<div id="accueil-background">
    <div class="titre-background">
        <h1>Isabelle Canner</h1>
        <h2>Enneagramme - Coaching Orientation Professionnelle</h2>
        <h2>NANTES</h2>
    </div>
</div>
<div class="presentation-intro">
    <?php

    $id = 26;
    $bouton = get_post($id);
    $title = $bouton->post_title;
    $contenu = $bouton->post_content;
    $contenu = apply_filters('the_content', $contenu);
    $contenu = str_replace(']]>', ']]&gt;', $contenu);
    ?>
    <?php echo "<h3>$title</h3>"; ?>
    <?php echo"<p>$contenu</p>"; ?>
</div>
<div class="presentation-therapeute">
    <?php

    $id = 25;
    $bouton = get_post($id);
    $title = $bouton->post_title;
    $contenu = $bouton->post_content;
    $contenu = apply_filters('the_content', $contenu);
    $contenu = str_replace(']]>', ']]&gt;', $contenu);
    ?>
    <?php echo "<h3>$title</h3>"; ?>
    <?php echo"<p>$contenu</p>"; ?>
</div>
<div class="presentation-service">
    <?php

    $id = 27;
    $bouton = get_post($id);
    $title = $bouton->post_title;
    $contenu = $bouton->post_content;
    $contenu = apply_filters('the_content', $contenu);
    $contenu = str_replace(']]>', ']]&gt;', $contenu);
    ?>
    <?php echo "<h3>$title</h3>"; ?>
    <?php echo"<p>$contenu</p>"; ?>
    <p style="text-align: center;">
        Lorem ipsum dolor sit amet, consectetur adipisicing
        elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis
        nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat.
    </p>
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
<div class="appel-contact">
    <div class="pattern">
        <h4>CONTACT</h4>
        <a href="contact"><div class="btn-div-contact">Contactez-moi</div></a>
    </div>
</div>

<?php get_footer(); ?>
