<?php
/*
Template Name: FAQ
*/

get_header();
$banner = get_field('banner');
?>

<main class="page">
    <section class="faq__banner" role="banner" style="background: linear-gradient(90deg, rgba(120,33,129,0.89) 0%, rgba(120,33,129,0.89) 100%), url('<?= wp_get_attachment_url($banner['image'], '') ?>') 50% 50% / cover">
        <div class="faq__banner-inner">
            <h1 class="a-title a-title--white a-title--no-dash">How Can We Help?</h1>
            <input id="faq-question" type="text" name="faq_question" class="faq__input form__input" value="" placeholder="Describe your question">
        </div>
    </section>
    <section class="page__section page__section--pb">
        <div class="container">
            <?php get_template_part('template-parts/breadcrumbs') ?>

            <div class="page__text-top">
                <p>
                    Explore a series of questions that are commonly asked by customers.
                </p>
            </div>
            <div class="faq__bottom-text">
                <?= the_content(); ?>
            </div>

        </div>
    </section>
</main>


<?php get_footer(); ?>