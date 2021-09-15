<?php

get_header();
$post_id = get_the_ID();
?>
<div class="treners">
    <div class="treners__container content-container">
        <div class="treners__header">
            <div class="move-under">
                <span class="untitle-stroke"><?php echo the_field("imya_speczialista", $post_id);?> <?php echo the_field("familiya_speczialista", $post_id); ?></span>
            </div>
            <div class="move-header">
                <h1><?php echo the_field("imya_speczialista", $post_id);?> <?php echo the_field("familiya_speczialista", $post_id); ?></h1>
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
                    $services = get_the_terms( $postpers_id, 'trenirovki' );

                    if (is_array($services)) {
                        foreach ($services as $service) {
                            echo '<span>' . $service->name . '</span>';
                        }
                    }
                    ?>
                </div>
                <div class="treners__desc-socials">
                    <?php
                    if (have_rows('ssylki_na_soczseti_speczialista', $post_id)): ?>
                        <?php while (have_rows('ssylki_na_soczseti_speczialista', $post_id)): the_row();
                            $image = get_sub_field('ikonka_soczseti');
                            $lnk = get_sub_field('ssylka_na_soczset');
                            $alt = get_sub_field('opisanie_soczseti'); ?>
                            <a href="<?php echo $lnk; ?>" class="socials-item">
                                <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                            </a>
                        <?php endwhile;
                        ?>
                    <?php endif; ?>
                </div>
                <div class="treners__desc-sert">
                    <h2 class="treners__desc-title"><?php echo the_field('nadpis_nagrad', $post_id); ?></h2>
                    <?php
                    if (have_rows('fotografii_nagrad', $post_id)): ?>
                        <?php while (have_rows('fotografii_nagrad', $post_id)): the_row();
                            $image = get_sub_field('izobrazhenie_nagrady');
                            $alt = get_sub_field('opisanie_nagrady'); ?>
                            <div href="<?php echo $image; ?>" class="sert-item fresco">
                                <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>">
                            </div>
                        <?php endwhile;
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="send-wanted js-zapisatsa btn btn-primary">
                <?php echo the_field('zapisatsya_na_trenirovku', 'options') ?>
            </div>
        <div class="treners__similar">

        </div>
    </div>
</div>
<div class="">
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
<script>
    if ($(".treners__content").length) {
        var TrenerSlider = new Swiper(".treners__photo-cotainer", {
            loop: true,
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
</script>
