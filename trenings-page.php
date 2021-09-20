<?php

/**
 * Template Name: Тренировки (все)
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
                    <div class="logo" style="line-height: 110%;">
                        <?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?>
                    </div>

                    <h1 class="text-white mb-0" style="max-width: none; line-height: 110%;"><?php echo the_field('zagolovok_v_bloke_h1', $post_id) ?>
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
<div class="trening-select">
    <div class="trening-select__container content-container">
        <div class="trening-select__list">
            <?php
            $post_objects = get_field('vid_trenirovok');
            if( $post_objects ): ?>
                <?php foreach( $post_objects as $post): ?>
                    <?php setup_postdata($post); ?>
                    <?php
                    $postpers_id = get_the_ID();
                    $image = get_field('kartinka_dlya_straniczi_vseh_trenirovok', $postpers_id);
                    $name = get_field('imya_speczialista', $postpers_id);
                    $services = get_the_terms( $postpers_id, 'trenirovkitype' );
                    ?>

                    <a href="<?php the_permalink();?>" class="trening-select__item">
                        <div class="trening-select__item-image">
                            <img src="<?php echo $image;?>">
                        </div>
                        <div class="trening-select__item-content">
                            <h3 class="trening-select__item-name">
                            <?php the_title();?>
                            </h3>
                            <div class="trening-select__item-service">
                                <?php
                                if( is_array( $services ) ){
                                    foreach( $services as $service ){
                                        echo '<span>' . $service->name . '</span>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif;

            ?>
        </div>
    </div>
</div>
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
