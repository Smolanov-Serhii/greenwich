<?php $post_id = get_the_ID();
$first = get_field('levyj_blok_seo', $post_id);
$second = get_field('pravyj_blok_seo', $post_id);
if($first > "" || $second > ""){
    ?>
    <div class="section sec8 bg-white seo-block">
        <div class="seo-block__container content-container" data-mcs-theme="3d-dark">
            <div class="col-12 seo-block__title">
                <div data-aos="fade-up">
                    <h3 class="title text-lightgray"><?php echo the_field('zagolovok_bloka_seo', $post_id); ?></h3>
                </div>
            </div>
            <div class="seo-block__content" data-mcs-theme="dark"  data-aos="fade-up">
                <div class="col-lg-6 text-lightgray seo-block__item">
                    <?php echo $first; ?>
                </div>
                <div class="col-lg-6 text-lightgray seo-block__item">
                    <?php echo $second; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
