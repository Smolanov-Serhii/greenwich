<?php

/**
 * Template Name: Поиск
 *
 */
get_header();
$post_id = get_the_ID();
?>
	<main id="search" class="search">
        <div class="search-container">
            <div class="faq-page">
                <div class="treners__header text-center">
                    <div class="move-under">
                        <span class="untitle-stroke"><?php echo the_field("tekst_v_zagolovok", 632);?></span>
                    </div>
                    <div class="move-header">
                        <h1><?php echo the_field("tekst_v_zagolovok", 632);?></h1>
                    </div>
                </div>
            </div>
            <div class="search-container__found">
                <?php if ( have_posts() ) : ?>
                    <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" class="search-field" name="s" placeholder="<?php echo the_field('nadpis_ya_ishhu', 'options')?>" value="<?php echo get_search_query(); ?>">
                        <input class="btn btn-primary" type="submit" value="<?php echo the_field('nadpis_na_knopke_najti', 'options')?>">
                    </form>
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content', 'search' );
                    endwhile;
                    the_posts_navigation();
                else :

                    ?>
                    <form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <input type="text" class="search-field" name="s" placeholder="<?php echo the_field('nadpis_ya_ishhu', 'options')?>" value="<?php echo get_search_query(); ?>">
                        <input class="btn btn-primary" type="submit" value="<?php echo the_field('nadpis_na_knopke_najti', 'options')?>">
                    </form>
                    <p class="no-found"><?php echo the_field('nadpis_izvinite_po_zaprosu', 'options')?> <strong>"<?php echo get_search_query(); ?>"</strong> <?php echo the_field('nadpis_nichego_ne_najdeno', 'options')?></p>
                <?php

                endif;
                ?>
            </div>
        </div>


        <div class="section sec8 bg-white seo-block">
            <div class="seo-block__container content-container" data-mcs-theme="3d-dark">
                <div class="col-12 seo-block__title">
                    <div data-aos="fade-up">
                        <h3 class="title text-lightgray"><?php echo the_field('zagolovok_bloka_seo', 632); ?></h3>
                    </div>
                </div>
                <div class="seo-block__content" data-mcs-theme="dark"  data-aos="fade-up">
                    <div class="col-lg-6 text-lightgray seo-block__item">
                        <?php echo the_field('levyj_blok_seo', 632); ?>
                    </div>
                    <div class="col-lg-6 text-lightgray seo-block__item">
                        <?php echo the_field('pravyj_blok_seo', 632); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php get_template_part('inc/words-carusel'); ?>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
