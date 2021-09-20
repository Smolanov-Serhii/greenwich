<?php

/**
 * Template Name: Персонал
 *
 */
get_header();
$post_id = get_the_ID();
?>
<div class="faq-page content-container">
    <div class="treners__header text-center">
        <div class="move-under">
            <span class="untitle-stroke"><?php echo the_field("zagolovok_shapka_tekst", $post_id);?></span>
        </div>
        <div class="move-header">
            <h1><?php echo the_field("zagolovok_shapka_tekst", $post_id);?></h1>
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
                    $services = get_the_terms( $postpers_id, 'trenirovki' );
                    $dopimg = get_field( 'fotografiya_speczialista' );
                    $secondimg = $dopimg[0]["fotografiya_speczialista"];
                    ?>

                    <a href="<?php the_permalink();?>" class="specialists__item">
                        <div class="specialists__item-image">
                            <img src="<?php echo $image;?>">
                            <div class="img hover-img">
                                <img src="<?php echo $secondimg?>">
                            </div>


                        </div>
                        <h3 class="specialists__item-name">
                            <?php echo $name;?>
                        </h3>
                        <div class="specialists__item-service">
                            <?php
                            if( is_array( $services ) ){
                                foreach( $services as $service ){
                                    echo '<span>' . $service->name . '</span>';
                                }
                            }
                            ?>
                        </div>
                    </a>

                <?php }
            }
            wp_reset_query(); ?>
        </div>
    </div>
    <div class="about__buttons content-container">
        <a class="btn btn-outline-primary" href="<?php echo the_field('ekskursiya', 'options'); ?>">
            <?php echo the_field('ekskursiya', 'options'); ?>
        </a>
        <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>">
            <span><?php echo the_field('raspisanie', 'options'); ?></span>
        </a>
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
                    <svg width="100%" height="100%" viewBox="0 0 100% 100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="100%" height="100%" stroke="#FFFFFF"></rect>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content" data-aos="fade-up">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/individualnye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <span><?php echo the_field('podrobnee', 'options'); ?></span>
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
                    <svg width="100%" height="100%" viewBox="0 0 100% 100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="100%" height="100%" stroke="#FFFFFF"></rect>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content" data-aos="fade-up">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/individualnye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <span><?php echo the_field('podrobnee', 'options'); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'inc/seo-section' ); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
