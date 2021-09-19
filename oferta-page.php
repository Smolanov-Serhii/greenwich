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
<?php get_template_part( 'inc/seo-section' ); ?>
<?php get_template_part('inc/words-carusel'); ?>

<?php get_footer(); ?>
