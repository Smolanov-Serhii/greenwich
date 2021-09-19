<?php

get_header();
$post_id = get_the_ID();
?>
<div class="treners">
    <div class="treners__container content-container">
        <div class="treners__header">
            <div class="move-under">
                <span class="untitle-stroke"><?php echo the_field("imya_speczialista", $post_id); ?> <?php echo the_field("familiya_speczialista", $post_id); ?></span>
            </div>
            <div class="move-header">
                <h1><?php echo the_field("imya_speczialista", $post_id); ?> <?php echo the_field("familiya_speczialista", $post_id); ?></h1>
            </div>
        </div>
        <div class="treners__content">
            <div class="treners__photo">
                <div class="treners__photo-cotainer swiper-container">
                    <div class="swiper-wrapper">
                        <?php
                        if (have_rows('fotografiya_speczialista', $post_id)): ?>
                            <?php while (have_rows('fotografiya_speczialista', $post_id)): the_row();
                                $image = get_sub_field('fotografiya_speczialista');
                                $alt = get_sub_field('opisanie_fotografii_speczialista_seo'); ?>
                                <div class="treners_slide swiper-slide">
                                    <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                                </div>
                            <?php endwhile;
                            ?>
                        <?php endif; ?>
                    </div>
                    <div class="controls row">
                        <div class="col">
                            <button class="carousel-control-prev btn" type="button"
                                    data-bs-target="#carouselVideoSlider" data-bs-slide="prev">
                                <svg width="19" height="11" viewBox="0 0 19 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="img-fluid">
                                    <path d="M5.21122 11L6.05754 10.1067L2.29143 6.13165L19.0002 6.13165L19.0002 4.86831L2.29143 4.86831L6.05753 0.893307L5.21122 1.20547e-06L0.00024366 5.50002L5.21122 11Z"
                                          fill="#1D8FBD"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <p class="text-primary lead mb-0">1/4</p>
                        </div>
                        <div class="col text-right">
                            <button class="carousel-control-next btn" type="button"
                                    data-bs-target="#carouselVideoSlider" data-bs-slide="next">
                                <svg width="19" height="11" viewBox="0 0 19 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.789 0L12.9427 0.893305L16.7088 4.86835H0V6.13169H16.7088L12.9427 10.1067L13.789 11L19 5.49998L13.789 0Z"
                                          fill="#1D8FBD"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="treners__desc">
                <h2 class="treners__desc-title title text-primary"><?php echo the_field('nadpis_nad_opisaniem', $post_id); ?></h2>
                <div class="treners__desc-content">
                    <?php echo the_field('opisanie_korotkoe_pro_speczialista', $post_id); ?>
                </div>
                <div class="about__show-item js-show-case-item text-primary">
                    Подробнее
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 0.838313L9.1879 -3.54978e-08L5.57423 3.73048L5.00002 4.33171L4.42574 3.73048L0.812097 -4.01616e-07L-3.66438e-08 0.838313L5.00002 6L10 0.838313Z"
                              fill="#1D8FBD"></path>
                    </svg>
                </div>
                <div class="treners__desc-tags">
                    <?php
                    $postpers_id = get_the_ID();
                    $services = get_the_terms($postpers_id, 'trenirovki');

                    if (is_array($services)) {
                        foreach ($services as $service) {
                            echo '<span>' . $service->name . '</span>';
                        }
                    }
                    ?>
                </div>

                <?php
                if (have_rows('ssylki_na_soczseti_speczialista', $post_id)):
                    $check = get_field( 'ssylki_na_soczseti_speczialista', $post_id);
                    $firstrow = $check[0];
                    $first_row_img = $firstrow[ 'ikonka_soczseti' ];
                    ?>

                        <?php
                        if ($first_row_img){
                            ?>
                            <div class="treners__desc-socials">
                            <?php
                        };
                        ?>
                        <?php while (have_rows('ssylki_na_soczseti_speczialista', $post_id)): the_row();
                            $image = get_sub_field('ikonka_soczseti');
                            $lnk = get_sub_field('ssylka_na_soczset');
                            $alt = get_sub_field('opisanie_soczseti'); ?>
                            <a href="<?php echo $lnk; ?>" class="socials-item">
                                <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                            </a>
                        <?php endwhile;
                        ?>
                                <?php
                                if ($first_row_img){
                                ?>
                                    </div>
                                    <?php
                                    };
                                    ?>

                <?php endif; ?>
                <?php if (have_rows('fotografii_nagrad', $post_id)):
                    $check = get_field( 'fotografii_nagrad', $post_id);
                    $firstrow = $check[0];
                    $first_row_img = $firstrow[ 'izobrazhenie_nagrady' ];
                    ?>
                    <div class="treners__desc-sert">
                        <?php
                        if ($first_row_img){
                            ?>
                            <h2 class="treners__desc-title"><?php echo the_field('nadpis_nagrad', $post_id); ?></h2>
                            <?php
                        };
                        ?>
                        <?php while (have_rows('fotografii_nagrad', $post_id)): the_row();
                            $image = get_sub_field('izobrazhenie_nagrady');
                            $alt = get_sub_field('opisanie_nagrady'); ?>
                            <div href="<?php echo $image; ?>" class="sert-item fresco">
                                <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                            </div>
                        <?php endwhile;
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="send-wanted js-zapisatsa btn btn-primary">
                <?php echo the_field('zapisatsya_na_trenirovku', 'options') ?>
            </div>
            <div class="treners__similar">
                <div class="treners__similar-header">
                    <h2 class="treners__similar-title about__title text-primary">
                        <?php echo the_field('nadpis_vas_mogut_zainteresovat', 'options') ?>
                    </h2>
                    <div class="controls row justify-content-end motion">
                        <div class="col-auto">
                            <button class="carousel-control-prev btn" type="button" data-bs-target="#carouselReview" data-bs-slide="prev" tabindex="0" aria-label="Previous slide" aria-controls="swiper-wrapper-82f69b58f2705bb5">
                                <svg class="img-fluid" width="47" height="27" viewBox="0 0 47 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.8903 27L14.9838 24.8073L5.66768 15.0504L47 15.0504L47 11.9495L5.66768 11.9495L14.9838 2.19266L12.8903 -8.32733e-07L2.63449e-06 13.5001L12.8903 27Z" fill="#1D8FBD"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="col-auto">
                            <button class="carousel-control-next btn" type="button" data-bs-target="#carouselReview" data-bs-slide="next" tabindex="0" aria-label="Next slide" aria-controls="swiper-wrapper-82f69b58f2705bb5">
                                <svg class="img-fluid" width="46" height="27" viewBox="0 0 46 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M33.384 0L31.335 2.19266L40.4529 11.9496H0V15.0505H40.4529L31.335 24.8073L33.384 27L46 13.4999L33.384 0Z" fill="#1D8FBD"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="treners__similar-list swiper-container">
                    <div class="treners__similar-wrapper swiper-wrapper">
                        <?php
                        $post_objects = get_field('pohozhie_speczialisty');
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

                                    <a href="<?php the_permalink();?>" class="treners__similar-item swiper-slide">
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
            </div>
        </div>
    </div>

    <?php get_template_part( 'inc/seo-section' ); ?>
    <?php get_template_part('inc/words-carusel'); ?>

    <?php get_footer(); ?>
    <script>
        $("document").ready(function(){
            if ($(".treners__content").length) {
                var TrenerSlider = new Swiper(".treners__photo-cotainer", {
                    loop: true,
                    autoHeight: true,
                    effect: 'fade',
                    fadeEffect: {
                        crossFade: true
                    },
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    pagination: {
                        el: ".treners__photo-cotainer .text-primary",
                        type: "fraction",
                    },
                    navigation: {
                        nextEl: ".treners__photo-cotainer .carousel-control-next",
                        prevEl: ".treners__photo-cotainer .carousel-control-prev",
                    },
                });
            }

        });

    </script>
