<?php

/**
 * Template Name: О клубе
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
<section class="about__content content-container">
    <h2 class="about__title text-primary">
        <?php echo the_field('zagolovok_vseh_kejsov', $post_id) ?>
    </h2>
    <div class="about__cases">
        <?php if (have_rows('kejsy', $post_id)): ?>
            <?php while (have_rows('kejsy', $post_id)): the_row();
                $image = get_sub_field('izobrazhenie_dlya_kejsa');
                $exerpt = get_sub_field('kratkoe_opisanie_kejsa');
                $fullcontent = get_sub_field('polnoe_opisanie_kejsa');
                $title = get_sub_field('zagolovok_dlya_odnogo_kejsa');
                $alt = get_sub_field('seo_opisanie_dlya_kartinki');
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
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    <div class="about__buttons">
        <a class="btn btn-outline-primary" href="<?php echo the_field('ekskursiya', 'options'); ?>"><?php echo the_field('ekskursiya', 'options'); ?></a>
        <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>"><?php echo the_field('raspisanie', 'options'); ?></a>
    </div>
</section>
<section class="partners">
    <h2 class="partners__title title text-primary">
        <?php echo the_field('zagolovok_nashi_partnyory', $post_id) ?>
    </h2>
    <div class="section sec9 bg-white">
        <div class="container-fluid position-absolute ">
            <div class="row bg-white align-items-center">
                <?php
                if (have_rows('karusel_logotipov', $post_id)): ?>
                    <?php while (have_rows('karusel_logotipov', $post_id)): the_row();
                        $image = get_sub_field('logotip_partnyora');
                        $title = get_sub_field('opisanie_partnyora_seo'); ?>
                        <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>" class="img-fluid">
                    <?php endwhile;
                    ?>
                <?php endif; ?>
                <div class="col-auto">

                </div>
            </div>
        </div>
    </div>
</section>
<div class="type-trening">
    <div class="type-trening__container content-container">
        <div class="type-trening__item">
            <?php
            $groupimg = get_field('kartinka_dlya_gruppovye_trenirovki', $post_id);
            ?>
            <div class="type-trening__img">
                <img src="<?php echo esc_url($groupimg['url']); ?>" alt="<?php echo esc_attr($groupimg['alt']); ?>">
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="calc(100% - 1px)" height="100%" stroke="#FFFFFF"/>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_gruppovye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/gruppovye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <?php echo the_field('podrobnee', 'options'); ?>
                </a>
            </div>
        </div>
        <div class="type-trening__item">
            <?php
            $indimg = get_field('kartinka_dlya_individualnye_trenirovki', $post_id);
            ?>
            <div class="type-trening__img">
                <img src="<?php echo esc_url($indimg['url']); ?>" alt="<?php echo esc_attr($indimg['alt']); ?>">
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="779" height="515" stroke="#FFFFFF"/>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/individualnye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <?php echo the_field('podrobnee', 'options'); ?>
                </a>
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
