<div class="type-trening">
    <div class="type-trening__container content-container">
        <div class="type-trening__item" data-aos="fade-up">
            <?php
            $groupimg = get_field('kartinka_dlya_gruppovye_trenirovki', $post_id);
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
                    <?php echo the_field('zagolovok_dlya_gruppovye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/gruppovye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <span><?php echo the_field('podrobnee', 'options'); ?></span>
                </a>
            </div>
        </div>
        <div class="type-trening__item" data-aos="fade-up">
            <?php
            $indimg = get_field('kartinka_dlya_individualnye_trenirovki', $post_id);
            ?>
            <div class="type-trening__img">
                <img src="<?php echo esc_url($indimg['url']); ?>" alt="<?php echo esc_attr($indimg['alt']); ?>">
                <div class="ramka">
                    <svg width="100%" height="100%" viewBox="0 0 100% 100%" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="100%" height="100%" stroke="#FFFFFF"></rect>
                    </svg>
                </div>
            </div>
            <div class="type-trening__content" data-aos="fade-up">
                <h3 class="type-trening__title">
                    <?php echo the_field('zagolovok_dlya_individualnye_trenirovki', $post_id); ?>
                </h3>
                <a href="<?php echo site_url().'/individualnye-trenirovki/'; ?>" class="type-trening__lnk btn btn-outline-primary">
                    <span><?php echo the_field('podrobnee', 'options'); ?></span>
                </a>
            </div>
        </div>
    </div>
</div>