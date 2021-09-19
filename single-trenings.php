<?php

/**
 * Template Name: О клубе
 *
 */
get_header();
$post_id = get_the_ID();
?>

<div class="section sec0 py-0 main-title-paralax"
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
                        if(get_field('podzagolovok_v_banner', $post_id)){
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
</div>
<div class="type-icons">
    <div class="type-icons__container content-container">
        <div class="type-icons__list">
            <?php
            $postpers_id = get_the_ID();
            $trentypes = get_the_terms( $postpers_id, 'trenirovkitype' );
            if (is_array($trentypes)) {
                foreach ($trentypes as $trentype) {
                    $terms = wp_get_object_terms( $post->ID, 'trenirovkitype');
                    $bg = get_field( 'ikonka_dlya_tipa_trenirovki', 'trenirovkitype_' . $trentype->term_id);
                    ?>
                    <div class="type-icons__item">
                        <div class="type-icons__img">
                            <img class="import-svg" src="<?php echo $bg;?>" alt="<?php echo $trentype->name?>">
                        </div>
                        <h2 class="type-icons__title">
                            <?php echo $trentype->name?>
                        </h2>
                    </div>

                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<section class="about__content content-container">
    <div class="about__cases">
        <?
                $image = get_field('kartinka_dlya_bloka', $post_id);
                $exerpt = get_field('korotkoe_opisanie', $post_id);
                $fullcontent = get_field('polnoe_opisanie', $post_id);
                $title = get_field('zagolovok_bloka', $post_id);
                $alt = get_field('zagolovok_bloka', $post_id);
                ?>
                <div class="about__item">
                    <div class="about__text-part">
                        <h3 class="about__item-title text-primary">
                            <?php echo $title; ?>
                        </h3>
                        <div class="about__item-exerpt">
                            <?php echo $exerpt; ?>
                        </div>
                        <div class="about__item-full" style="display: none;">
                            <?php echo $fullcontent; ?>
                        </div>
                        <div class="about__show-item js-show-case-item text-primary">
                            <?php echo the_field('podrobnee', 'options'); ?>
                            <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 0.838313L9.1879 -3.54978e-08L5.57423 3.73048L5.00002 4.33171L4.42574 3.73048L0.812097 -4.01616e-07L-3.66438e-08 0.838313L5.00002 6L10 0.838313Z" fill="#1D8FBD"/>
                            </svg>
                        </div>
                    </div>
                    <div class="about__img-part">
                        <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                        <div class="ramka">
                            <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="0.5" y="0.5" width="779" height="515" stroke="#1D8FBD"/>
                            </svg>
                        </div>
                    </div>
                </div>
        <?php ?>
    </div>
    <div class="about__buttons">
        <div class="btn btn-outline-primary js-exursion"><?php echo the_field('ekskursiya', 'options'); ?></div>
        <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>"><?php echo the_field('raspisanie', 'options'); ?></a>
    </div>
</section>

<?php get_template_part( 'inc/seo-section' ); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
