<?php

/**
 * Template Name: Контакты
 *
 */
get_header();
$post_id = get_the_ID();
?>

<section class="section sec0 py-0 main-title-paralax"
         style="background-image: url(<?php echo the_field('izobrazhenie_dlya_banera', $post_id) ?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="bg-video">
        <video autoplay="" muted="" loop="" id="myVideo">
            <source src="<?php echo the_field('videofajl_dlya_banera', $post_id) ?>" type="video/mp4">
        </video>
    </div>
    <div class="container main-title-paralax__content">
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <div class="main-title-paralax__header">
                    <div class="logo">
                        <?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?>
                    </div>

                    <h1 class="text-white mb-0"><?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?>
                        <?php
                        if (get_field('podzagolovok_v_banner', $post_id)) {
                            ?>
                            <span
                                    class="d-block"><?php echo the_field('podzagolovok_v_banner', $post_id) ?>
                                </span>
                            <?php
                        }
                        ?>

                    </h1>
                </div>
                <div class="btn-main" data-aos="fade-up">
                    <div class="js-<?php echo the_field('rol_knopki', $post_id); ?> btn btn-secondary btn-lg text-primary">
                        <span><?php echo the_field('nadpis_na_knopke_banera', $post_id) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="contacts-content content-container">
    <div class="contacts-content__desc">
        <div class="contacts-content__find" data-aos="fade-up">
            <h5 class="strong mb-1 mt-4 text-primary contacts-content__title">
                <strong>
                    <?php echo the_field('nadpis_kak_nas_najti', 'options'); ?>
                </strong>
            </h5>
            <div class="find-wrapper">
                <?php echo the_field('tekst_v_blok_kak_nas_najti', 'options'); ?>
            </div>
        </div>
        <div class="contacts-content__adress" data-aos="fade-up">
            <h5 class="strong mb-1 mt-4 text-primary contacts-content__title">
                <strong>
                    <?php echo the_field('adres', 'options'); ?>
                </strong>
            </h5>
            <p class="leader mb-1">
                <?php echo the_field('adress', 'options'); ?>
            </p>
        </div>
        <div class="contacts-content__work">
            <h5 class="strong mb-1 mt-4 text-primary contacts-content__title">
                <strong>
                    <?php echo the_field('grafik_raboty', 'options'); ?>
                </strong>
            </h5>
            <p class="leader mb-1">
                <strong>
                    <?php echo the_field('pn_-_pt', 'options'); ?>
                </strong>
                <?php echo the_field('pn_-_pt_vremya_raboty', 'options'); ?>
            </p>
            <p class="leader mb-1">
                <strong>
                    <?php echo the_field('sb', 'options'); ?>
                </strong>
                <?php echo the_field('sb_vremya_raboty', 'options'); ?>
            </p>
            <p class="leader mb-1">
                <strong>
                    <?php echo the_field('vs', 'options'); ?>
                </strong>
                <?php echo the_field('vs_vremya_raboty', 'options'); ?>
            </p>
        </div>
        <div class="contacts-content__contacts">
            <h5 class="strong mb-1 mt-4 text-primary contacts-content__title">
                <strong>
                    <?php echo the_field('nadpis_kontakty', 'options'); ?>
                </strong>
            </h5>
            <p class="leader mb-1">
                <strong>
                    <?php echo the_field('nomer_telefona_n', 'options'); ?>
                </strong>
                <?php echo the_field('nomer_telefona', 'options'); ?>
            </p>
            <p class="leader mb-1">
                <strong>
                    <?php echo the_field('e-mail-n', 'options'); ?>
                </strong>
                <?php echo the_field('e-mail', 'options'); ?>
            </p>
            <div class="map-buttons" data-aos="fade-up">
                <a href="https://www.google.com/maps"
                   class="btn btn-outline-primary">
                    <span><?php echo the_field('prolozhit_marshrut', 'options'); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="contacts-map" id="map"></div>
<div class="about__buttons content-container">
    <div class="btn btn-outline-primary js-exursion">
        <span><?php echo the_field('ekskursiya', 'options'); ?></span>
    </div>
    <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>">
        <span><?php echo the_field('raspisanie', 'options'); ?></span>
    </a>
</div>
<?php get_template_part('inc/seo-section'); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
