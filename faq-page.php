<?php

/**
 * Template Name: FAQ
 *
 */
get_header();
$post_id = get_the_ID();
?>
<div class="faq-page content-container">
    <div class="treners__header text-center">
        <div class="move-under">
            <span class="untitle-stroke"><?php echo the_field("zagolovok_straniczy_faq", $post_id);?></span>
        </div>
        <div class="move-header">
            <h1><?php echo the_field("zagolovok_straniczy_faq", $post_id);?></h1>
        </div>
    </div>
    <div class="subscription">
        <div class="subscription__container content-container">
            <?php
            $counter = 1;
            $dec = 0;
            $args = array(
                'post_type' => 'faq',
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
                    $services = get_field('napravlenie', $postpers_id);
                    ?>
                    <div class="subscription__group">
                        <div class="subscription__header">
                            <span class="counter"><?php echo $dec . $counter;?></span>
                            <h3 class="subscription__title"><?php the_title(); ?></h3>
                            <svg width="46" height="27" viewBox="0 0 46 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M33.384 0L31.335 2.19266L40.4529 11.9496H0V15.0505H40.4529L31.335 24.8073L33.384 27L46 13.4999L33.384 0Z" fill="#1D8FBD"/>
                            </svg>
                        </div>
                        <div class="subscription__list" style="display: none">
                            <div class="faq-page__item">
                                <div class="faq-page__item-content">
                                    <?php the_content();?>
                                </div>
                            </div>
                            <?php $counter++;
                            if($counter > 10){
                                $dec++;
                            }
                            ?>
                        </div>
                    </div>
                <?php }
            }
            wp_reset_query(); ?>
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
