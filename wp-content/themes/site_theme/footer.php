    <section class="footer__newsletter">
        <div class="container">
            <div class="footer__newsletter-wrapper">
                <div class="text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73">
                        <path data-name="Free popular templates [TAG:H3]" d="M50.187 35.359v-2.284a1.14 1.14 0 0 0-1.141-1.141H23.953a1.14 1.14 0 0 0-1.141 1.141v2.281a1.14 1.14 0 0 0 1.141 1.141h25.094a1.14 1.14 0 0 0 1.14-1.138Zm-26.234-7.984h25.094a1.14 1.14 0 0 0 1.141-1.141v-2.281a1.14 1.14 0 0 0-1.141-1.141H23.953a1.14 1.14 0 0 0-1.141 1.141v2.281a1.14 1.14 0 0 0 1.141 1.141Zm46.564-3.918c-.282-.232-3.164-2.553-6.643-5.351v-4.419a4.563 4.563 0 0 0-4.562-4.562h-6.625c-.589-.472-1.1-.878-1.454-1.161C48.082 5.445 42.694 0 36.5 0 30.339 0 25 5.378 21.766 7.964l-1.454 1.161h-6.625a4.563 4.563 0 0 0-4.562 4.562v4.417c-3.5 2.81-6.38 5.134-6.627 5.337A6.824 6.824 0 0 0 0 28.727v37.429A6.844 6.844 0 0 0 6.844 73h59.312A6.844 6.844 0 0 0 73 66.156V28.731a6.84 6.84 0 0 0-2.482-5.274ZM36.5 4.563c3.1 0 6.365 2.384 9 4.562h-18c2.645-2.177 5.909-4.562 9-4.562Zm-22.813 9.125h45.625v24.716a3356.982 3356.982 0 0 1-12.345 9.886c-2.4 1.915-7.156 6.513-10.467 6.46-3.309.054-8.064-4.545-10.467-6.462a3548.39 3548.39 0 0 1-12.346-9.886ZM4.562 28.727a2.275 2.275 0 0 1 .838-1.763c.177-.146 1.657-1.337 3.73-3.006V34.73c-1.644-1.323-3.209-2.585-4.562-3.676Zm63.875 37.429a2.284 2.284 0 0 1-2.281 2.281H6.844a2.284 2.284 0 0 1-2.282-2.281V36.915c6.1 4.91 14.159 11.395 18.632 14.945 2.921 2.332 8.09 7.49 13.305 7.451 5.2.037 10.3-5.056 13.3-7.451 4.478-3.555 12.537-10.036 18.634-14.946Zm0-35.1-4.562 3.677v-10.77c2.059 1.657 3.536 2.847 3.736 3.011a2.272 2.272 0 0 1 .827 1.758Z" fill="#fff" />
                    </svg>

                    <p>
                        <strong>Stay in touch</strong> Subscribe to our Newsletter
                    </p>
                </div>
                <button class="button button--white">
                    Subscribe
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <?php
    $menuLocations = get_nav_menu_locations();

    ?>
    <footer class="footer">
        <div class="container">
            <div class="footer__columns">
                <div class="footer__column">
                    <div class="footer__title">Support</div>
                    <ul class="footer__links">
                        <li class="footer__link"><a href="#">Support At Court</a></li>
                        <li class="footer__link"><a href="#">National Helpline</a></li>
                        <li class="footer__link"><a href="#">Telephone Support Service</a></li>
                        <li class="footer__link"><a href="#">Where We Support</a></li>
                        <li class="footer__link"><a href="#">Login</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Donate</div>
                    <ul class="footer__links">
                        <li class="footer__link"><a href="#">Ways to Donate</a></li>
                        <li class="footer__link"><a href="#">The Two Toms!</a></li>
                        <li class="footer__link"><a href="#">Legacies & Donations</a></li>
                        <li class="footer__link"><a href="#">Donate in Memory</a></li>
                        <li class="footer__link"><a href="#">Give As You Live</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Useful Links</div>
                    <ul class="footer__links">
                        <li class="footer__link"><a href="">Useful Links & Organisations</a></li>
                        <li class="footer__link"><a href="">FAQs</a></li>
                        <li class="footer__link"><a href="<?= get_site_url() ?>/for-practitioners/">For Practioners</a></li>
                        <li class="footer__link"><a href="">News</a></li>
                        <li class="footer__link"><a href="">Privacy Statement</a></li>
                        <li class="footer__link"><a href="">Quality Policy Statement</a></li>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">About CCSS</div>
                    <?php

                    $menuID = $menuLocations['about-ccss'];

                    $aboutLinks = wp_get_nav_menu_items($menuID);
                    ?>
                    <ul class="footer__links">
                        <?php foreach ($aboutLinks as $navItem) : ?>
                            <div class="footer__link">

                                <a href="<?= $navItem->url ?>" title="<?= $navItem->title ?>">
                                    <span> <?= $navItem->title ?></span>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="footer__column">
                    <div class="footer__title">Get Involved</div>
                    <ul class="footer__links">
                        <li class="footer__link"><a href="">Job & Volunteer Vacancies</a></li>
                        <li class="footer__link"><a href="">Fundraising Ideas</a></li>
                        <li class="footer__link"><a href="">BBC Radio 4 Appeal</a></li>
                        <li class="footer__link"><a href="">User Feedback</a></li>
                        <li class="footer__link"><a href="">Complaints, Concerns and Feedback</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer__middle">
                <div class="footer__logo">
                    <img src="<?= wp_get_attachment_image_url(get_field('logo_alt', 'option'), '') ?>" alt="">
                </div>
                <ul class="social">
                    <li class="social__item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13.925" height="26" viewBox="0 0 13.925 26">
                                <path id="Terms_of_Service_STYLE:STYLE2_TAG:UI_S_" data-name="Terms of Service [STYLE:STYLE2][TAG:UI_S]" d="M-2.075-8.125l.722-4.705H-5.868v-3.053a2.353,2.353,0,0,1,2.653-2.542h2.053v-4.006a25.032,25.032,0,0,0-3.644-.318c-3.718,0-6.149,2.254-6.149,6.333v3.586h-4.133v4.705h4.133V3.25h5.087V-8.125Z" transform="translate(15.088 22.75)" fill="#fff" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="21.117" viewBox="0 0 26 21.117">
                                <path id="Terms_of_Service_STYLE:STYLE2_TAG:UI_S_" data-name="Terms of Service [STYLE:STYLE2][TAG:UI_S]" d="M-2.673-15.046A11.454,11.454,0,0,0,0-17.8a10.683,10.683,0,0,1-3.068.825A5.314,5.314,0,0,0-.726-19.912a10.491,10.491,0,0,1-3.382,1.287A5.316,5.316,0,0,0-8-20.308,5.326,5.326,0,0,0-13.33-14.98a6.015,6.015,0,0,0,.132,1.221,15.146,15.146,0,0,1-10.987-5.576,5.288,5.288,0,0,0-.726,2.689,5.325,5.325,0,0,0,2.376,4.438,5.366,5.366,0,0,1-2.409-.676v.066a5.329,5.329,0,0,0,4.273,5.23,5.634,5.634,0,0,1-1.4.181A6.716,6.716,0,0,1-23.08-7.49a5.338,5.338,0,0,0,4.982,3.7,10.672,10.672,0,0,1-6.615,2.277A11.028,11.028,0,0,1-26-1.584,15.058,15.058,0,0,0-17.817.808,15.057,15.057,0,0,0-2.656-14.353C-2.656-14.584-2.656-14.815-2.673-15.046Z" transform="translate(26 20.308)" fill="#fff" />
                            </svg>

                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="27.733" height="19.5" viewBox="0 0 27.733 19.5">
                                <path id="Terms_of_Service_STYLE:STYLE2_TAG:UI_S_" data-name="Terms of Service [STYLE:STYLE2][TAG:UI_S]" d="M-1.338-16.449A3.485,3.485,0,0,0-3.79-18.917C-5.953-19.5-14.625-19.5-14.625-19.5s-8.672,0-10.835.583a3.485,3.485,0,0,0-2.452,2.468,36.556,36.556,0,0,0-.58,6.719,36.556,36.556,0,0,0,.58,6.719A3.433,3.433,0,0,0-25.46-.583C-23.3,0-14.625,0-14.625,0S-5.953,0-3.79-.583A3.433,3.433,0,0,0-1.338-3.012,36.556,36.556,0,0,0-.758-9.73,36.556,36.556,0,0,0-1.338-16.449ZM-17.461-5.607v-8.247l7.248,4.124Z" transform="translate(28.492 19.5)" fill="#fff" />
                            </svg>
                        </a>
                    </li>
                    <li class="social__item">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22.763" height="22.757" viewBox="0 0 22.763 22.757">
                                <path id="Terms_of_Service_STYLE:STYLE2_TAG:UI_S_" data-name="Terms of Service [STYLE:STYLE2][TAG:UI_S]" d="M-11.37-15.59A5.825,5.825,0,0,0-17.2-9.755,5.825,5.825,0,0,0-11.37-3.92,5.825,5.825,0,0,0-5.535-9.755,5.826,5.826,0,0,0-11.37-15.59Zm0,9.628a3.8,3.8,0,0,1-3.793-3.793,3.8,3.8,0,0,1,3.793-3.793A3.8,3.8,0,0,1-7.577-9.755,3.8,3.8,0,0,1-11.37-5.962Zm7.434-9.867A1.361,1.361,0,0,0-5.3-17.189a1.361,1.361,0,0,0-1.361,1.361A1.358,1.358,0,0,0-5.3-14.468,1.358,1.358,0,0,0-3.936-15.828Zm3.864,1.381a6.735,6.735,0,0,0-1.838-4.768,6.779,6.779,0,0,0-4.768-1.838c-1.879-.107-7.511-.107-9.389,0a6.769,6.769,0,0,0-4.768,1.833,6.757,6.757,0,0,0-1.838,4.768c-.107,1.879-.107,7.51,0,9.389A6.735,6.735,0,0,0-20.836-.295a6.788,6.788,0,0,0,4.768,1.838c1.879.107,7.511.107,9.389,0A6.735,6.735,0,0,0-1.909-.295,6.779,6.779,0,0,0-.071-5.063C.036-6.942.036-12.568-.071-14.447ZM-2.5-3.047A3.84,3.84,0,0,1-4.662-.884c-1.5.594-5.053.457-6.708.457s-5.215.132-6.708-.457a3.84,3.84,0,0,1-2.163-2.163c-.594-1.5-.457-5.053-.457-6.708s-.132-5.215.457-6.708a3.84,3.84,0,0,1,2.163-2.163c1.5-.594,5.053-.457,6.708-.457s5.215-.132,6.708.457A3.84,3.84,0,0,1-2.5-16.463c.594,1.5.457,5.053.457,6.708S-1.9-4.54-2.5-3.047Z" transform="translate(22.754 21.134)" fill="#fff" />
                            </svg>
                        </a>
                    </li>
                </ul>

                <?php
                $logos = get_field('footer_logos', 'option');
                ?>

                <div class="footer__logos">
                    <div class="swiper slider__footer-logos">
                        <div class="swiper-wrapper">
                            <?php foreach ($logos as $logo) : ?>
                                <div class="swiper-slide">
                                    <div class="image">
                                        <img src="<?= wp_get_attachment_image_url($logo, '') ?>" alt="">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer__bottom">
                <p>
                    <strong>&copy; <?= date('Y') ?> Coroners’ Courts Support Service.</strong> All Rights Reserved.
                </p>
                <p>
                    <strong>Registered Address:</strong> <?= get_field('address', 'option') ?>
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>