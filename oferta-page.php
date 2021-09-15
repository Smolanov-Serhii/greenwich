<?php

/**
 * Template Name: Оферта
 *
 */
get_header();
$post_id = get_the_ID();
?>
<div class="faq-page content-container">
    <div class="treners__header text-center">
        <div class="move-under">
            <span class="untitle-stroke"><?php echo the_field("zagolovok_straniczy", $post_id);?></span>
        </div>
        <div class="move-header">
            <h1><?php echo the_field("zagolovok_straniczy", $post_id);?></h1>
        </div>
    </div>

</div>
<div class="oferta">
    <div class="oferta__container content-container">
        <div class="oferta__nav">
            <?php if (have_rows('kontent_s_opisaniem', $post_id)): ?>
                <?php
                $counter = 1;
                while (have_rows('kontent_s_opisaniem', $post_id)): the_row();
                    $title = get_sub_field('zagolovok');
                    ?>
                    <a href="#<?php echo 'data_' . $counter?>"><?php echo $title ?></a>

                    <?php
                    $counter++;
                endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="oferta__description">
            <?php if (have_rows('kontent_s_opisaniem', $post_id)): ?>
                <?php
                $counter = 1;
                while (have_rows('kontent_s_opisaniem', $post_id)): the_row();
                    $content = get_sub_field('blok_s_opisaniem');
                    $title = get_sub_field('zagolovok');
                    ?>
                    <div class="oferta__description-item" id="<?php echo 'data_' . $counter?>">
                        <h3><?php echo $title ?></h3>
                        <?php echo $content ?>
                    </div>
                <?php
                    $counter++;
                endwhile; ?>
            <?php endif; ?>
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
