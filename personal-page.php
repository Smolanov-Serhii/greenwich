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
<div class="specialists">
    <div class="specialists__container content-container">
        <div class="specialists__filter">

        </div>
        <div class="specialists__list">
            <?php
            $args = array(
                'post_type' => 'treners',
                'showposts' => "-1", //сколько показать статей
                'orderby' => "menu_order", //сортировка по дате
                'caller_get_posts' => 1);
            $my_query = new wp_query($args);
            if ($my_query->have_posts()) {
                while ($my_query->have_posts()) {
                    $my_query->the_post();
                    $postpers_id = get_the_ID();
                    $image = get_field('fotografiya_dlya_straniczy_vseh_trenerov', $postpers_id);
                    $name = get_field('imya_speczialista', $postpers_id);
                    $services = get_field('napravlenie', $postpers_id);
                    ?>
                    <a href="<?php the_permalink();?>" class="specialists__item">
                        <div class="specialists__item-image">
                            <img src="<?php echo $image;?>">
                        </div>
                        <h3 class="specialists__item-name">
                            <?php echo $name;?>
                        </h3>
                        <div class="specialists__item-service">
                            <?php
                                foreach ($services['napravlenie_vybor'] as $service) {
                                echo '<span>' . $service . '</span>';
                            }
                            ?>
                        </div>
                    </a>

                <?php }
            }
            wp_reset_query(); ?>
        </div>
    </div>
    <div class="about__buttons">
        <a class="btn btn-outline-primary" href="<?php echo the_field('ekskursiya', 'options'); ?>"><?php echo the_field('ekskursiya', 'options'); ?></a>
        <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>"><?php echo the_field('raspisanie', 'options'); ?></a>
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
