<?php
/*
Template Name: For Practitioners
*/

get_header();

?>

<main class="page">
    <?php get_template_part('template-parts/banner') ?>
    <section class="page__section page__section--pb">
        <div class="container">
            <?php get_template_part('template-parts/breadcrumbs') ?>

            <h1 class="a-title"><?= the_title(); ?></h1>

            <div class="page__text-top page__text-top--large">
                <?= the_content(); ?>
            </div>

            <div class="page__blocks">
                <div class="page__block">
                    <div class="page__block-inner page__block-inner--box-shadow">
                        <h2>CCSS Referral Form</h2>
                        <?= do_shortcode('[contact-form-7 id="206" title="For Practitioners"]') ?>
                    </div>
                </div>
                <?php
                $block = get_field('block_one');
                $download = get_field('download_block');
                ?>
                <div class="page__block">
                    <div class="page__block-inner" style="background: url('<?= get_stylesheet_directory_uri() ?>/images/block-bg-2.jpg') bottom right / cover">
                        <h2 class="h2"><?= $block['title'] ?></h2>

                        <div class="text">
                            <?= $block['text'] ?>
                        </div>

                        <div class="column">
                            <a class="button button--purple-outline" href="<?= $block['button_link'] ?>" target="_blank">
                                <?= $block['button_text'] ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                                    <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#782181" />
                                </svg>
                            </a>

                            <img src="<?= wp_get_attachment_url($block['image'], '') ?>" alt="">
                        </div>
                    </div>

                    <div class="page__download-block">
                        <span>Coroners Court Support Service</span>
                        <p class="h2"><?= $download['title'] ?></p>

                        <a class="button button--white-outline" href="<?= $download['pdf']['url'] ?>" target="_blank">
                            Download
                            <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                                <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>