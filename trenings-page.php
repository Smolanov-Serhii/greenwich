<?php

/**
 * Template Name: Тренировки
 *
 */
get_header();
$post_id = get_the_ID();
?>

<div class="section sec0 py-0"
     style="background-image: url(<?php echo the_field('izobrazhenie_dlya_banera', $post_id) ?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <div class="bg-video">
        <video autoplay="" muted="" loop="" id="myVideo">
            <source src="<?php echo the_field('videofajl_dlya_banera', $post_id) ?>" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col text-center">
                <div class="logo">
                    <?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?>
                </div>

                <h1 class="text-white mb-0"><?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?><span
                        class="d-block"><?php echo the_field('podzagolovok_v_banner', $post_id) ?></span></h1>
                <div class="btn-main">
                    <div class="js-<?php echo the_field('rol_knopki', $post_id); ?> btn btn-secondary btn-lg text-primary"><?php echo the_field('nadpis_na_knopke_banera', $post_id) ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="trening-icon">
    <div class="trening-icon__container content-container">
        <div class="trening-icon__list">
            <div class="trening-icon__item">

            </div>
        </div>
    </div>
</div>
<div class="about-seo section sec8 bg-white py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="motion">
                    <h3 class="title text-lightgray"><?php echo the_field('zagolovok_bloka_seo', $post_id); ?></h3>
                </div>
            </div>
            <div class="col-lg-6 text-lightgray">
                <?php echo the_field('levyj_blok_seo', $post_id); ?>
            </div>
            <div class="col-lg-6 text-lightgray">
                <?php echo the_field('pravyj_blok_seo', $post_id); ?>
            </div>
        </div>
    </div>
</div>
<?php
get_template_part( 'inc/words-carusel' );
?>

<?php get_footer(); ?>
