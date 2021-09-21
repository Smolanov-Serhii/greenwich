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
<!--            <div class="filter-header">-->
<!--                <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">-->
<!--                    <path d="M0.693449 4.14286H17.9742V4.83334C17.9742 5.38271 18.1934 5.90959 18.5835 6.29806C18.9736 6.68653 19.5028 6.90477 20.0545 6.90477H22.8283C23.3801 6.90477 23.9092 6.68653 24.2994 6.29806C24.6895 5.90959 24.9087 5.38271 24.9087 4.83334V4.14286H28.1401C28.3241 4.14286 28.5004 4.07011 28.6305 3.94062C28.7605 3.81113 28.8336 3.63551 28.8336 3.45238C28.8336 3.26926 28.7605 3.09363 28.6305 2.96414C28.5004 2.83465 28.3241 2.76191 28.1401 2.76191H24.9087V2.07143C24.9087 1.52205 24.6895 0.995176 24.2994 0.606708C23.9092 0.218239 23.3801 0 22.8283 0H20.0545C19.5028 0 18.9736 0.218239 18.5835 0.606708C18.1934 0.995176 17.9742 1.52205 17.9742 2.07143V2.76191H0.693449C0.509535 2.76191 0.333153 2.83465 0.203107 2.96414C0.0730597 3.09363 0 3.26926 0 3.45238C0 3.63551 0.0730597 3.81113 0.203107 3.94062C0.333153 4.07011 0.509535 4.14286 0.693449 4.14286Z" fill="#1D8FBD"/>-->
<!--                    <path d="M28.2372 24.8571H22.1349V24.1667C22.1349 23.6173 21.9157 23.0904 21.5256 22.7019C21.1354 22.3135 20.6063 22.0952 20.0546 22.0952H17.2808C16.729 22.0952 16.1999 22.3135 15.8097 22.7019C15.4196 23.0904 15.2004 23.6173 15.2004 24.1667V24.8571H0.707336C0.523422 24.8571 0.347041 24.9299 0.216994 25.0594C0.0869475 25.1889 0.0138878 25.3645 0.0138878 25.5476C0.0138878 25.7307 0.0869475 25.9064 0.216994 26.0359C0.347041 26.1653 0.523422 26.2381 0.707336 26.2381H15.2004V26.9286C15.2004 27.4779 15.4196 28.0048 15.8097 28.3933C16.1999 28.7818 16.729 29 17.2808 29H20.0546C20.6063 29 21.1354 28.7818 21.5256 28.3933C21.9157 28.0048 22.1349 27.4779 22.1349 26.9286V26.2381H28.2372C28.4212 26.2381 28.5975 26.1653 28.7276 26.0359C28.8576 25.9064 28.9307 25.7307 28.9307 25.5476C28.9307 25.3645 28.8576 25.1889 28.7276 25.0594C28.5975 24.9299 28.4212 24.8571 28.2372 24.8571Z" fill="#1D8FBD"/>-->
<!--                    <path d="M8.95934 17.9524H11.7331C12.2849 17.9524 12.814 17.7341 13.2042 17.3457C13.5943 16.9572 13.8135 16.4303 13.8135 15.881V15.1905H28.3066C28.4905 15.1905 28.6668 15.1177 28.7969 14.9882C28.9269 14.8588 29 14.6831 29 14.5C29 14.3169 28.9269 14.1412 28.7969 14.0118C28.6668 13.8823 28.4905 13.8095 28.3066 13.8095H13.8135V13.119C13.8135 12.5697 13.5943 12.0428 13.2042 11.6543C12.814 11.2659 12.2849 11.0476 11.7331 11.0476H8.95934C8.40759 11.0476 7.87845 11.2659 7.48831 11.6543C7.09817 12.0428 6.87899 12.5697 6.87899 13.119V13.8095H0.776643C0.592729 13.8095 0.416348 13.8823 0.286301 14.0118C0.156254 14.1412 0.0831946 14.3169 0.0831946 14.5C0.0831946 14.6831 0.156254 14.8588 0.286301 14.9882C0.416348 15.1177 0.592729 15.1905 0.776643 15.1905H6.87899V15.881C6.87899 16.4303 7.09817 16.9572 7.48831 17.3457C7.87845 17.7341 8.40759 17.9524 8.95934 17.9524Z" fill="#1D8FBD"/>-->
<!--                </svg>-->
<!--                <span class="title">--><?php //echo the_field('nadpis_sortirovka', 'options'); ?><!--</span>-->
<!--            </div>-->
            <?php echo do_shortcode('[searchandfilter id="653"]')?>
        </div>
        <div class="specialists__list" id="result">
            <?php
            $args = array(
                'post_type' => 'treners',
                'relation' => 'OR',
                'showposts' => "-1", //сколько показать статей
                'search_filter_id' => 653, //сколько показать статей
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
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', 11); ?>
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
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', 11); ?>
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
<script>
    $( document ).ready(function() {
        if( $(window).width() < 1100 ) {
            $( ".specialists__filter h4" ).click(function() {
                $(this).toggleClass('showed');
                $(this).closest('li').find('ul').fadeToggle(300);
            });
        }
    });
</script>