<?php
/*
Template Name: Contact Us
*/

get_header();

?>

<main class="page">
    <?php get_template_part('template-parts/banner') ?>
    <section class="page__section page__section--pb">
        <div class="container">
            <?php get_template_part('template-parts/breadcrumbs') ?>

            <h1 class="a-title"><?= the_title(); ?></h1>

            <div class="page__text-top">
                <?= the_content(); ?>
            </div>

            <div class="page__blocks">
                <div class="page__block">
                    <div class="page__block-inner" style="background: url('<?= get_stylesheet_directory_uri() ?>/images/block-bg.jpg') bottom right / cover">
                        <h2 class="h2">Call Our National Helpline <br>For Support <a href="tel:03001112141">0300 111 2141</a></h2>

                        <ul class="page__contact-details">
                            <li>
                                <div class="title">Opening hours for the Helpline are:</div>
                                <?= get_field('open_hours', 'option') ?>
                            </li>
                            <li>
                                <div class="title">Alternatively you can e-mail our team</div>
                                <?php
                                $emails = get_field('alternative_emails', 'option');
                                ?>
                                <ul>
                                    <?php foreach ($emails as $email) : ?>
                                        <li>
                                            <a href="tel:<?= $email['email'] ?>"><?= $email['email']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <div class="title">Our office contact number is </div>
                                <a href="tel:<?= get_field('helpline_number', 'option') ?>"><?= get_field('helpline_number', 'option') ?></a>

                                <a href="" class="button button--purple-outline button--icon-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="14" viewBox="0 0 16.002 14">
                                        <path id="Label" d="M-3.5-7.5a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0-3.5-7.5ZM0-7.5a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,0-7.5Zm3.5,0a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,3.5-7.5ZM0-13c-4.419,0-8,2.909-8,6.5A5.745,5.745,0,0,0-6.347-2.553,7.93,7.93,0,0,1-7.8-.266a.75.75,0,0,0-.144.813A.752.752,0,0,0-7.25,1,7.582,7.582,0,0,0-2.9-.447,9.652,9.652,0,0,0,0,0C4.419,0,8-2.909,8-6.5S4.419-13,0-13ZM0-1.5a8.121,8.121,0,0,1-2.45-.378L-3.159-2.1l-.609.431a6.721,6.721,0,0,1-1.8.906,7.838,7.838,0,0,0,.622-1.256l.331-.878-.644-.681A4.3,4.3,0,0,1-6.5-6.5c0-2.756,2.916-5,6.5-5s6.5,2.244,6.5,5S3.584-1.5,0-1.5Z" transform="translate(8.002 13)" fill="#782181" />
                                    </svg>
                                    Chat with us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="page__block">
                    <div class="page__block-inner page__block-inner--box-shadow">
                        <h2>Enquiry Form</h2>
                        <?= do_shortcode('[contact-form-7 id="189" title="Contact form"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>