<?php
/*
Template Name: Our Patrons
*/

get_header();

?>
<main class="page">
    <section class="page__section page__section--pb">
        <div class="container">
            <?php get_template_part('template-parts/breadcrumbs') ?>
            <h1 class="a-title"><?= the_title() ?></h1>
            <div class="page__text-top dynamic">
                <?= the_content(); ?>
            </div>

            <?php
            $team = get_field('our_patrons');
            ?>
            <div class="team__blocks team__blocks--two">
                <?php foreach ($team as $person) : ?>
                    <div class="team__block">
                        <div class="team__image">
                            <div class="team__text" style="transform: translate3d(100%, 0, 0);">
                                <div class="team-text">
                                    <div class="text">
                                        <?= $person['text'] ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $image =  wp_get_attachment_image_src($person['image'], 'team-image');
                            ?>
                            <?php if ($person['image']) : ?>
                                <img src="<?= $image[0] ?>" alt="">
                            <?php else : ?>
                                <img src="<?= get_stylesheet_directory_uri() ?>/images/static/team-placeholder.jpg" alt="">
                            <?php endif; ?>
                        </div>
                        <p><?= $person['name'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php get_template_part('template-parts/global_cta') ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>