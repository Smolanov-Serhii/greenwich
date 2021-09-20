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

<section class="about__content content-container single-trener">
    <div class="about__cases">
        <?
                $image = get_field('kartinka_dlya_bloka', $post_id);
                $exerpt = get_field('korotkoe_opisanie', $post_id);
                $fullcontent = get_field('polnoe_opisanie', $post_id);
                $title = get_field('zagolovok_bloka', $post_id);
                $alt = get_field('zagolovok_bloka', $post_id);
                $absolute = get_field('nadpis_dlya_zadnego_plata', $post_id);
                ?>
                <div class="about__item">
                    <div class="about__text-part">
                        <div class="about__text-part-absolute">
                            <?php echo $absolute; ?>
                        </div>
                        <h3 class="about__item-title text-primary">
                            <?php echo $title; ?>
                        </h3>
                        <div class="about__item-exerpt">
                            <?php echo $exerpt; ?>
                        </div>
                        <div class="about__item-full" style="display: none;">
                            <div class="about__item-full-container">
                                <div class="close-item-about">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="15.3867" y="4.89569" width="0.989092" height="14.8364" transform="rotate(45 15.3867 4.89569)" fill="#191919"></rect>
                                        <rect x="16.0859" y="15.3867" width="0.989092" height="14.8364" transform="rotate(135 16.0859 15.3867)" fill="#191919"></rect>
                                    </svg>
                                </div>
                                <div class="about__item-full-wrapper">
                                <?php echo $fullcontent; ?>
                                </div>
                            </div>
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
</section>
<section class="our-treners">
    <div class="content-container">
        <h2 class="title text-primary"><?php echo the_field('zagolovok_dlya_svyaannyh_trenerov'); ?></h2>
        <div class="specialists__list">
            <?php
            $post_objects = get_field('trenera');
            if( $post_objects ): ?>
                <?php foreach( $post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <?php
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
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif;

            ?>
        </div>
    </div>
</section>
<section class="similar-trening">
    <div class="content-container">
        <div class="similar-trening__header">
            <h2 class="title text-primary text-white"><?php echo the_field('zagolovok_dlya_bloka_similar-treining'); ?></h2>
            <div class="controls row justify-content-end" data-aos="fade-up">
                <div class="col-auto">
                    <button class="carousel-control-prev btn" type="button">
                        <svg class="img-fluid" width="47" height="27" viewBox="0 0 47 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.8903 27L14.9838 24.8073L5.66768 15.0504L47 15.0504L47 11.9495L5.66768 11.9495L14.9838 2.19266L12.8903 -8.32733e-07L2.63449e-06 13.5001L12.8903 27Z" fill="#FFFFFF"></path>
                        </svg>
                    </button>
                </div>
                <div class="col-auto">
                    <button class="carousel-control-next btn" type="button">
                        <svg class="img-fluid" width="46" height="27" viewBox="0 0 46 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.384 0L31.335 2.19266L40.4529 11.9496H0V15.0505H40.4529L31.335 24.8073L33.384 27L46 13.4999L33.384 0Z" fill="#FFFFFF"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="similar-trening__list swiper-container">
            <div class="similar-trening__wrapper swiper-wrapper">
                <?php
                $post_objects = get_field('pohozhie_trenirovki_list');
                if( $post_objects ): ?>
                    <?php foreach( $post_objects as $post): ?>
                        <?php setup_postdata($post); ?>
                        <?php
                        $postpers_id = get_the_ID();
                        $image = get_field('kartinka_dlya_straniczi_vseh_trenirovok', $postpers_id);
                        $services = get_the_terms( $postpers_id, 'trenirovkitype' );
                        ?>

                        <a href="<?php the_permalink();?>" class="similar-trening__item swiper-slide">
                            <div class="similar-trening__item-image">
                                <img src="<?php echo $image;?>">
                            </div>
                            <span class="similar-trening__item-content">
                                <h3 class="similar-trening__item-name">
                                <?php the_title();?>
                            </h3>
                            <div class="similar-trening__item-service">
                                <?php
                                if( is_array( $services ) ){
                                    foreach( $services as $service ){
                                        echo '<span>' . $service->name . '</span>';
                                    }
                                }
                                ?>
                            </div>
                            </span>
                        </a>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
                <?php endif;
                ?>
            </div>
        </div>
    </div>
</section>
<div class="about__buttons content-container">
    <div class="btn btn-outline-primary js-exursion">
        <span><?php echo the_field('ekskursiya', 'options'); ?></span>
    </div>
    <a class="btn btn-primary" href="<?php echo the_field('raspisanie', 'options'); ?>">
        <span><?php echo the_field('raspisanie', 'options'); ?></span>
    </a>
</div>

<?php get_template_part( 'inc/seo-section' ); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
