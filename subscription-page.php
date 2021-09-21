<?php

/**
 * Template Name: Абонементы
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
<div class="create-subscription">
    <div class="create-subscription__button btn btn-primary">
            <span>
                <?php echo the_field('nadpis_sozdaj_svoj_abonement', 'options')?>
            </span>
    </div>
</div>
<div class="subscription">
    <div class="subscription__container content-container">
        <?php
        //НАЧАЛО СПИСКА
        $counter = 1;
        $dec = 0;
        $arg_cat = array(
            'orderby' => 'name',
            'order' => 'ASC',
            'hide_empty' => 1,
            'exclude' => '',
            'include' => '',
        );
        $categories = get_categories($arg_cat);

        if ($categories) {
            foreach ($categories as $cat) {
                $arg_posts = array(
                    'posts_per_page' => -1,
                    'cat' => $cat->cat_ID,
                );
                $query = new WP_Query($arg_posts);

                if ($query->have_posts()) : ?>
                <div class="subscription__group">
                    <div class="subscription__header">
                        <span class="counter"><?php echo $dec . $counter;?></span>
                        <h3 class="subscription__title"><?php echo $cat->name; ?></h3>
                        <svg width="46" height="27" viewBox="0 0 46 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M33.384 0L31.335 2.19266L40.4529 11.9496H0V15.0505H40.4529L31.335 24.8073L33.384 27L46 13.4999L33.384 0Z" fill="#1D8FBD"/>
                        </svg>
                    </div>
                    <div class="subscription__list" style="display: none">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="subscription__item">
                                <h3 class="subscription__item-title" style="background-color: <?php echo the_field('vydelyat_element') ?>"><?php the_title(); ?></h3>
                                <div class="subscription__item-content">
                                    <?php $abscount = get_field('chislo_na_fone_kartochki');
                                    if ($abscount > 9){
                                        $docclass = "more-move";
                                    } else {
                                        $docclass = "";
                                    }
                                    ?>

                                    <div class="subscription__item-absolute <?php echo $docclass;?>">
                                        <?php echo $abscount; ?>
                                    </div>
                                    <div class="dlit"><?php echo the_field('kol-vo_zanyatij') ?></div>
                                    <div class="srok"><?php echo the_field('srok_abonementa') ?></div>
                                    <div class="price">
                                        <?php
                                        $today = date("d.m.Y");
                                        if(get_field('data_okonchaniya_skidki')){
                                            ?>
                                            <div class="expired">
                                                <?php
                                                echo the_field('dejstvuet_do', 'options')
                                                ?>
                                                <span><?php echo the_field('data_okonchaniya_skidki') ?></span>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                            if(get_field('czena_do_skidki')){
                                                ?>
                                                    <div class="sale">
                                                        <?php
                                                            echo the_field('czena_do_skidki');
                                                        ?>
                                                        <span><?php echo the_field('valyuta', 'options') ?></span>
                                                    </div>
                                                <?php
                                            }
                                        ?>
                                        <div class="normal">
                                            <?php echo the_field('czena_abonementa') ?>
                                            <span>
                                            <?php echo the_field('valyuta', 'options') ?>
                                        </span>
                                        </div>
                                    </div>
                                    <div class="subscription__item-by btn btn-primary">
                                        <span><?php echo the_field('nadpis_kupit', 'options'); ?></span>
                                    </div>
                                </div>

                            </div>
                            <?php $counter++;
                            if($counter > 10){
                                $dec++;
                            }
                            ?>

                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php endif;
            }
        }

        // КОНЕЦ
        ?>
    </div>
</div>
<section class="about__content content-container">
    <div class="about__cases">
        <div class="about__item">
            <div class="about__text-part">
                <h3 class="about__item-title text-primary">
                    <?php echo the_field('zagolovok_blok_dlya_kontenta', $post_id); ?>
                </h3>
                <div class="about__item-exerpt">
                    <?php echo the_field('korotkoe_opisanie_zagolovok_blok_dlya_kontenta', $post_id); ?>
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
                            <?php echo the_field('polnoe_opisanie_blok_dlya_kontenta', $post_id); ?>
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
                <img src="<?php echo the_field('kartinka_dlya_blok_dlya_kontenta', $post_id); ?>" alt="<?php echo the_field('zagolovok_blok_dlya_kontenta', $post_id); ?>"/>
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 780 516" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="779" height="515" stroke="#1D8FBD"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
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
                    <svg width="100%" height="100%" viewBox="0 0 100% 100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="100%" height="100%" stroke="#FFFFFF"></rect>
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
<?php get_template_part( 'inc/seo-section' ); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
