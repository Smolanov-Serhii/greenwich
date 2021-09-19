<?php

/**
 * Template Name: Главная
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
                <div class="btn-main">
                    <div class="js-<?php echo the_field('rol_knopki', $post_id); ?> btn btn-secondary btn-lg text-primary">
                        <span><?php echo the_field('nadpis_na_knopke_banera', $post_id) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section about-slider">
    <div class="about-slider__container content-container">
        <div class="about-slider__list">
            <div class="about-slider__item about-img-slider">
                <div data-aos="fade-up">
                    <div class="about-photo-slider">
                        <div class="ramka">
                            <svg class="img-fluid" width="609" height="916" viewBox="0 0 609 916" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <rect x="1" y="1" width="608" height="915"></rect>
                            </svg>
                        </div>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('levyj_slader_o_nas', $post_id)): ?>
                                    <?php while (have_rows('levyj_slader_o_nas', $post_id)): the_row();
                                        $image = get_sub_field('fotografiya_dlya_slajda');
                                        $alt = get_sub_field('opisanie_dlya_sajta_seo');
                                        ?>
                                        <div class="swiper-slide">
                                            <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>"
                                                 class="img-fluid">
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="controls row mt-1">
                        <div class="col-4">
                            <button class="carousel-control-prev btn" type="button"
                                    data-bs-target="#carouselMainSlider" data-bs-slide="prev">
                                <svg width="19" height="11" viewBox="0 0 19 11" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="img-fluid">
                                    <path d="M5.21122 11L6.05754 10.1067L2.29143 6.13165L19.0002 6.13165L19.0002 4.86831L2.29143 4.86831L6.05753 0.893307L5.21122 1.20547e-06L0.00024366 5.50002L5.21122 11Z"
                                          fill="#1D8FBD"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="col-4 text-center">
                            <p class="text-primary lead mb-0"></p>
                        </div>
                        <div class="col-4 text-right">
                            <button class="carousel-control-next  btn" type="button"
                                    data-bs-target="#carouselMainSlider" data-bs-slide="next">
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

            <div class="about-slider__item">
                <div data-aos="fade-up">
                    <h2 class="title text-primary"><?php echo the_field('zagolovok_bloka_o_nas', $post_id); ?></h2>
                </div>
                <div data-aos="fade-up">
                    <p class="mb-5"><?php echo the_field('opisanie_pod_blokom_o_nas', $post_id); ?></p>
                </div>
                <div class="video-slider mt-5 m-down" data-aos="fade-up">
                    <div id="carouselVideoSlider">
<!--                        <div class="ramka">-->
<!--                            <svg class="img-fluid" width="910" height="510" viewBox="0 0 910 510" fill="none"-->
<!--                                 xmlns="http://www.w3.org/2000/svg">-->
<!--                                <rect x="1" y="1" width="909" height="509"></rect>-->
<!--                            </svg>-->
<!--                        </div>-->
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php if (have_rows('slajder_s_video', $post_id)): ?>
                                    <?php while (have_rows('slajder_s_video', $post_id)): the_row();
                                        $image = get_sub_field('kartinka_oblozhki');
                                        $lnk = get_sub_field('ssylka_na_video_yutub');
                                        $alt = get_sub_field('opisanie_dlya_oblozhki_seo');
                                        ?>
                                        <div class="swiper-slide active fresco" href="<?php echo $lnk; ?>">
                                            <img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>"
                                                 class="img-fluid">
                                            <svg width="50" height="64" viewBox="0 0 50 64" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M49 31.9997L0 64L0.211252 0L49 31.9997Z" fill="#1D8FBD"/>
                                            </svg>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                        </div>
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

        </div>
    </div>
</div>

<div class="section sec2 bg-white">
    <div class="content-container tabs-content">
        <div class="row justify-content-between">
            <div class="col-lg-6">
                <div data-aos="fade-up">
                    <h2 class="title text-primary"><?php echo the_field('zagolovok_bloka_pochemu_greenwich', $post_id); ?></h2>
                </div>
                <ul class="sp item__list">
                    <?php
                    if (have_rows('perechen_punktov', $post_id)): ?>
                        <?php while (have_rows('perechen_punktov', $post_id)): the_row();
                            $title = get_sub_field('zagolovok_na_punkt'); ?>
                            <li class="lead"><span data-aos="fade-up"><?php echo $title; ?></span></li>
                        <?php endwhile;
                        ?>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-5">
                <div data-aos="fade-up">
                    <div class="ramka">
                        <svg class="img-fluid" width="609" height="910" viewBox="0 0 610 910" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <rect x="1" y="1" width="608" height="909"></rect>
                        </svg>
                    </div>
                    <?php
                    $counter = 1;
                    if (have_rows('perechen_punktov', $post_id)): ?>
                        <?php while (have_rows('perechen_punktov', $post_id)): the_row();
                            $title = get_sub_field('zagolovok_na_punkt');
                            $img = get_sub_field('izobrazheniya_dlya_punkta');
                            if ($counter > 1) {
                                $val = "display: none;";
                            } else {
                                $val = "";
                            }
                            ?>
                            <div class="item-content" style="<?php echo $val; ?>">
                                <img src="<?php echo $img; ?>" alt="<?php echo $title; ?>" class="img-fluid">
                            </div>
                            <?php $counter++; endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec3 pb-0 bg-white apps-section"
     style="overflow: hidden; background-image: url(<?php echo the_field('fon_dlya_bloka_prilozheniya', $post_id); ?>); background-size: cover; background-repeat: no-repeat; background-position: 0% 100%; padding-top: 0">
    <div class="content-container mt-5">
        <div class="row justify-content-between pt-5 apps-section__list">
            <div class="col-lg-7">
                <div class="text-right pt-5 phone-img-container" data-aos="fade-up">
                    <?php
                    $leftimg = get_field('levaya_kartinka', $post_id);
                    $rightimg = get_field('pravaya_kartinka', $post_id);
                    ?>
                    <img src="<?php echo esc_url($leftimg['url']); ?>" alt="<?php echo esc_attr($leftimg['alt']); ?>"
                         class="left-phone-img img-fluid">
                    <img src="<?php echo esc_url($rightimg['url']); ?>" alt="<?php echo esc_attr($rightimg['alt']); ?>"
                         class="right-phone-img img-fluid" style="position: relative;">
                </div>
            </div>
            <div class="col-lg-5 text-white text-part">
                <div class="title" data-aos="fade-up">
                    <h2 class="pb-5 title"><?php echo the_field('zagolovok_bloka_prilozheniya', $post_id); ?></h2>
                </div>

                <div class="content" data-aos="fade-up">
                    <p><?php echo the_field('opisanie_bloka_prilozheniya', $post_id); ?></p>
                </div>

                <div class="button-all" data-aos="fade-up">
                    <p class="pt-4">
                        <a href="http://g.tomorrowheads.com/#" class="btn btn-primary">
                            <span><?php echo the_field('nadpis_na_knopke_zagruzit_prilozhenie', $post_id); ?></span>
                        </a>
                    </p>
                </div>

                <div data-aos="fade-up">
                    <div class="btn-group mt-5 d-block d-lg-flex">
                        <?php
                        $appimage = get_field('ikonka_appstore', 'options');
                        $googleimage = get_field('ikonka_googleplay', 'options');
                        ?>
                        <a href="<?php echo the_field('ssylka_appstore', 'options'); ?>"><img
                                    src="<?php echo esc_url($appimage['url']); ?>"
                                    alt="<?php echo esc_attr($appimage['alt']); ?>"></a>
                        <a href="<?php echo the_field('ssylka_googleplay', 'options'); ?>" class="mx-4"><img
                                    src="<?php echo esc_url($googleimage['url']); ?>"
                                    alt="<?php echo esc_attr($googleimage['alt']); ?>"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec4 bg-white reviewes">
    <div class="content-container">
        <div class="row justify-content-between reviewes__header">
            <div class="col-lg-6">
                <div data-aos="fade-up">
                    <h2 class="text-primary title mb-0"><?php echo the_field('zagolovok_bloka_otzyvy', $post_id); ?>
                        <small class="count-sliders px-5"><span class="count_review">1</span>/<span
                                    class="slides_reviews">3</span></small></h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="controls row justify-content-end" data-aos="fade-up">
                    <div class="col-auto">
                        <button class="carousel-control-prev btn" type="button" data-bs-target="#carouselReview"
                                data-bs-slide="prev">
                            <svg class="img-fluid" width="47" height="27" viewBox="0 0 47 27" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.8903 27L14.9838 24.8073L5.66768 15.0504L47 15.0504L47 11.9495L5.66768 11.9495L14.9838 2.19266L12.8903 -8.32733e-07L2.63449e-06 13.5001L12.8903 27Z"
                                      fill="#1D8FBD"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="col-auto">
                        <button class="carousel-control-next btn" type="button" data-bs-target="#carouselReview"
                                data-bs-slide="next">
                            <svg class="img-fluid" width="46" height="27" viewBox="0 0 46 27" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.384 0L31.335 2.19266L40.4529 11.9496H0V15.0505H40.4529L31.335 24.8073L33.384 27L46 13.4999L33.384 0Z"
                                      fill="#1D8FBD"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up">
        <div id="carouselReview" class="reviewes__slider swiper-container content-container">
            <div class="reviewes__wrapper swiper-wrapper">
                <?php echo do_shortcode('[testimonial_view id="1"]'); ?>
            </div>
        </div>
    </div>

    <div class="col-12 text-center py-5 mt-5 left-reviewes">
        <div data-aos="fade-up">
            <a href="<?php echo the_field('ssylka_na_resurs_dlya_otzyva', $post_id); ?>"
               class="btn btn-outline-primary"><?php echo the_field('nadpis_na_knopke_ostavit_otzyv', $post_id); ?></a>
        </div>
    </div>

</div>


<div class="section sec6 bg-white py-0 main-map" style="overflow: hidden;">
    <div class="container-fluid p-0">
        <div class="row g-0 justify-content-between main-map__container">
            <div class="col-lg-6 desc-block"
                 style="background-image: url(<?php echo the_field('kartinka_na_fon_bloka_kontakty', $post_id); ?>); background-size: cover; background-repeat: no-repeat; background-position: 0% 0%;">
                <div class="main-map__desc">
                    <div data-aos="fade-up">
                        <h2 class="title text-white" style="text-align: left"><?php echo the_field('zagolovok_dlya_kontakty', $post_id); ?></h2>
                    </div>
                    <div class="text-white pb-5" style="text-align: left" data-aos="fade-up">
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('adres', 'options'); ?>
                            </strong>
                            <?php echo the_field('adress', 'options'); ?>
                        </p>
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('nomer_telefona_n', 'options'); ?>
                            </strong>
                            <?php echo the_field('nomer_telefona', 'options'); ?>
                        </p>
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('e-mail-n', 'options'); ?>
                            </strong>
                            <?php echo the_field('e-mail', 'options'); ?>
                        </p>
                        <p class="strong mb-1 mt-4">
                            <strong>
                                <?php echo the_field('grafik_raboty', 'options'); ?>
                            </strong>
                        </p>
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('pn_-_pt', 'options'); ?>
                            </strong>
                            <?php echo the_field('pn_-_pt_vremya_raboty', 'options'); ?>
                        </p>
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('sb', 'options'); ?>
                            </strong>
                            <?php echo the_field('sb_vremya_raboty', 'options'); ?>
                        </p>
                        <p class="leader mb-1">
                            <strong>
                                <?php echo the_field('vs', 'options'); ?>
                            </strong>
                            <?php echo the_field('vs_vremya_raboty', 'options'); ?>
                        </p>
                    </div>
                    <div class="map-buttons" data-aos="fade-up"
                    >
                        <a href="https://www.google.com/maps" class="btn btn-outline-secondary"><?php echo the_field('prolozhit_marshrut', 'options'); ?></a>
                        <a href="http://g.tomorrowheads.com/#222" class="btn text-white"><?php echo the_field('dobavit_v_kontakty', 'options'); ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 maps">
                <div id="map">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section sec7 bg-white btn-ekskurs">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div data-aos="fade-up">
                    <div class="btn btn-primary js-exursion">
                        <span><?php echo the_field('ekskursiya', 'options'); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'inc/seo-section' ); ?>

<?php get_template_part( 'inc/words-carusel' ); ?>


<?php get_footer(); ?>

