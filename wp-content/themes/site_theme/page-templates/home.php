<?php
/*
Template Name: Homepage
*/

get_header();

?>

<main class="home">
    <?php
    $banner = get_field('banner');
    ?>
    <section class="home__banner" role="banner" style="background: linear-gradient(90deg, rgba(0,0,0,0.35) 0%, rgba(0,0,0,0.35) 100%), url('<?= wp_get_attachment_image_url($banner['image'], '') ?>') 50% 50% / cover">
        <div class="home__hero-content">
            <img src="<?= wp_get_attachment_image_url($banner['queens_award'], '') ?>" alt="">
            <p>
                <?= $banner['text_line_one'] ?>
            </p>
            <p>
                <?= $banner['text_line_two'] ?>
            </p>
            <p>
                <?= $banner['text_line_three'] ?>
            </p>

            <a href="<?= get_site_url() ?>/contact-us" class="button button--white-outline">
                Contact Us
                <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                    <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                </svg>
            </a>
        </div>
    </section>
    <section class="home__section home__section--usps">
        <div class="container">
            <?php get_template_part('template-parts/usps') ?>
        </div>
    </section>
    <section class="home__section home__section--services">
        <div class="container">
            <?php
            $services = array(
                'Inquests',
                'Bereavement',
                'Practitoners',
                'Volunteers',
            )
            ?>
            <div class="home__services">
                <?php foreach ($services as $service) : ?>
                    <div class="home__service">
                        <div class="home__service-text">
                            <div class="title"><?= $service ?></div>
                            <div class="text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque dolorem exercitationem
                                    illo porro possimus provident quo recusandae, sed sequi, sunt tempore tenetur velit.
                                    Dolore dolorum ipsa officia reprehenderit sapiente vitae.
                                </p>
                            </div>
                            <a href="#" class="button button--white-outline">
                                Read More
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                                    <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                                </svg>
                            </a>
                        </div>
                        <div class="home__service-image">
                            <img src="<?= get_stylesheet_directory_uri() ?>/src/images/<?= strtolower($service) ?>-bg.jpg" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="home__section home__section--cta">
        <?php
        $cta = get_field('call_to_action');
        ?>
        <div class="container">
            <div class="home__cta">
                <p><?= $cta['text_field_one'] ?></p>
                <p><?= $cta['text_field_two'] ?></p>
            </div>
        </div>
    </section>

    <?php
    $mission = get_field('our_mission');
    ?>
    <section class="home__section home__section--mission" style="background-image: url('<?= wp_get_attachment_image_url($mission['mission_background'], '') ?>')">
        <div class="container">
            <div class="home__mission">
                <div class="home__mission-left">
                    <div class="title"><?= $mission['title'] ?></div>
                    <ul class="home__principles">
                        <?php foreach ($mission['principles'] as $principle) : ?>
                            <li><?= $principle['text'] ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="text">
                        <?= $mission['text'] ?>
                    </div>
                    <ul class="home__points">
                        <?php foreach ($mission['points'] as $point) : ?>
                            <li class="home__point">
                                <div class="icon">
                                    <img src="<?= wp_get_attachment_image_url($point['icon'], '') ?>" alt="">
                                </div>
                                <div class="text">
                                    <?= $point['text'] ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?= $notice['button_link'] ?>" class="button">
                        Find Out More
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                            <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                        </svg>
                    </a>
                </div>

                <div class="home__mission-right">
                    <div class="swiper slider__mission-images">
                        <div class="swiper-wrapper">
                            <?php foreach ($mission['images'] as $image) : ?>
                                <div class="swiper-slide">
                                    <img src="<?= wp_get_attachment_image_url($image['image'], '') ?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="home__mission-video">
                        <video controls poster="<?= wp_get_attachment_image_url($mission['video_poster'], '') ?>">
                            <source src="<?= $mission['video']['url'] ?>" type="video/mp4">
                        </video>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <?= get_template_part('template-parts/cta-notice'); ?>
    <?= include get_stylesheet_directory() . '/includes/flexible/latest-testimonials.php';  ?>

    <?php
    $map = get_field('map');
    ?>

    <section class="home__section home__section--locations">
        <div class="container">
            <h2 class="a-title a-title--black"><?= $map['title'] ?></h2>
            <div class="text">
                <p>
                    <?= $map['text'] ?>
                </p>
            </div>
            <div class="home__map-wrapper">
                <div id="map" class="home__map">
                    <img src="<?= get_stylesheet_directory_uri() ?>/src/images/map-placeholder.png" alt="">
                </div>

                <div class="home__map-locations">

                    <div id="home-countries" class="home__counties">
                        <ul>
                            <li>Test 1</li>
                            <li>Test 2</li>
                            <li>Test 3</li>
                            <li>Test 4</li>
                            <li>Test 5</li>
                            <li>Test 6</li>
                            <li>Test 7</li>
                            <li>Test 8</li>
                            <li>Test 9</li>
                            <li>Test 10</li>
                        </ul>
                    </div>

                    <a href="#" class="button">
                        View All Locations
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                            <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="home__areas">
                <ul class="areas">
                    <li>
                        <div class="icon" style="background-color: #54255F;"></div>
                        <p>Areas we operate</p>
                    </li>
                    <li>
                        <div class="icon" style="background-color: #894E98;"></div>
                        <p>New areas we aim to operate in</p>
                    </li>
                    <li>
                        <div class="icon" style="background-color: #CCCCCC;"></div>
                        <p>Areas we are planning to set up in</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php
    $donate = get_field('donate');
    ?>

    <section class="home__section home__section--donate" style="background: linear-gradient(90deg, rgba(120,33,129,0.89) 0%, rgba(120,33,129,0.89) 100%), url(<?= wp_get_attachment_image_url($donate['background_image'], '') ?>) 50% 50% / cover;">
        <div class="container">
            <div class="home__donate-content">
                <h2 class="a-title a-title--left a-title--white"><?= get_field('donate')['title'] ?></h2>
                <div class="text">
                    <p>
                        <?= $donate['text'] ?>
                    </p>
                </div>
                <a href="" class="button button--white-outline">
                    Find out more

                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                    </svg>
                </a>
            </div>
            <!--            https://donate.giveasyoulive.com/donate?cid=452183&utm_campaign=JoinPageDonateButton&utm_content=452183&utm_source=onlinejoinpage&utm_medium=donatebutton&amount=50-->
            <form action="" class="form form--donate">
                <div class="form__donate-select">
                    <span>Choose an amount to donate</span>

                    <input id="amount-one" hidden type="radio" name="select-amount" value="15">
                    <label for="amount-one">
                        £15
                    </label>

                    <input id="amount-two" hidden type="radio" name="select-amount" value="30">
                    <label for="amount-two">
                        £30
                    </label>

                    <input id="amount-three" hidden type="radio" name="select-amount" value="50">
                    <label for="amount-three">
                        £50
                    </label>

                    <input id="amount-four" hidden type="radio" name="select-amount" value="100">
                    <label for="amount-four">
                        £100
                    </label>
                </div>
                <div class="form__donate-amount">
                    <label class="label">
                        Or specify an amount
                        <span>Minimum donation: £1</span>
                    </label>
                    <input style="background-image: url('<?= get_stylesheet_directory_uri() ?>/src/images/pound.svg')" type="number" value="" placeholder="Specify amount" min="1">
                </div>
                <button type="submit" class="button button--white">
                    Donate
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#7DBEA1" />
                    </svg>
                </button>
            </form>
        </div>
    </section>



</main>



<?php get_footer(); ?>