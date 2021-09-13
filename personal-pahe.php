<?php

/**
 * Template Name: Персонал
 *
 */
get_header();
$post_id = get_the_ID();
?>

<div class="banner-text">
    <div class="container">
        <div class="row">
            <div class="">
                <div class="">
                    <?php echo the_field('zagolovok_shapka_tekst', $post_id) ?>
                </div>
                <h1 class=""><?php echo the_field('zagolovok_shapka_tekst', $post_id) ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="type-trening">
    <div class="type-trening__container content-container">
        <div class="type-trening__item">
            <?php
            $groupimg = get_field('kartinka_dlya_gruppovye_trenirovki', 11);
            ?>
            <div class="type-trening__img">
                <img src="<?php echo esc_url($groupimg['url']); ?>" alt="<?php echo esc_attr($groupimg['alt']); ?>">
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="calc(100% - 1px)" height="100%" stroke="#FFFFFF"/>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_gruppovye_trenirovki', 11); ?>
                </h3>
                <a href="<?php echo site_url() . '/gruppovye-trenirovki/'; ?>"
                   class="type-trening__lnk btn btn-outline-primary">
                    <?php echo the_field('podrobnee', 'options'); ?>
                </a>
            </div>
        </div>
        <div class="type-trening__item">
            <?php
            $indimg = get_field('kartinka_dlya_individualnye_trenirovki', 11);
            ?>
            <div class="type-trening__img">
                <img src="<?php echo esc_url($indimg['url']); ?>" alt="<?php echo esc_attr($indimg['alt']); ?>">
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="779" height="515" stroke="#FFFFFF"/>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', 11); ?>
                </h3>
                <a href="<?php echo site_url() . '/individualnye-trenirovki/'; ?>"
                   class="type-trening__lnk btn btn-outline-primary">
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
get_template_part('inc/words-carusel');
?>

<?php get_footer(); ?>
