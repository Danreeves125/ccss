<?php
/*
Template Name: Flexible Page
*/

get_header();

?>

<main class="page">
    <?php get_template_part('template-parts/banner') ?>
    <section class="page__section page__section--top">
        <div class="container">
            <?php get_template_part('template-parts/breadcrumbs') ?>

            <h1 class="a-title"><?= (!empty(get_field('page_title')) ? get_field('page_title') :  the_title()) ?></h1>

            <?php if (!empty(get_field('text_top'))) : ?>
                <div class="page__text-top">
                    <?= get_field('text_top') ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if (get_field('flexible')) : ?>
        <?php foreach (get_field('flexible') as $field) : ?>
            <?php
            switch ($field['acf_fc_layout']) {
                case 'text_info_block':
                    include get_stylesheet_directory() . '/includes/flexible/text-info-block.php';
                    break;
                case 'steps_block':
                    include get_stylesheet_directory() . '/includes/flexible/steps-block.php';
                    break;
                case 'latest_testimonials':
                    include get_stylesheet_directory() . '/includes/flexible/latest-testimonials.php';
                    break;
                case 'image_&_text_block':
                    include get_stylesheet_directory() . '/includes/flexible/image-text-block.php';
                    break;
                case 'flyer_download':
                    include get_stylesheet_directory() . '/includes/flexible/flyer-download.php';
                    break;
                case 'latest_news':
                    include get_stylesheet_directory() . '/includes/flexible/latest-news.php';
                    break;
                case 'info_boxes':
                    include get_stylesheet_directory() . '/includes/flexible/info-boxes.php';
                    break;
                case 'slider':
                    include get_stylesheet_directory() . '/includes/flexible/slider.php';
                    break;
            }
            ?>
        <?php endforeach; ?>
    <?php endif; ?>

</main>


<?php get_footer(); ?>