<section class="testimonial__section testimonial__section--latest">
    <img class="hand hand--top" src="<?= get_stylesheet_directory_uri() ?>/dist/images/hand-top.svg" alt="">
    <div class="container">

        <div class="testimonial__inner">
            <div class="testimonial__left">
                <div class="title">What People Have Said About Us After Receiving Our Support At Court</div>

                <a href="#" class="button">
                    Read More

                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                    </svg>
                </a>
            </div>


            <?php
            $args = array(
                'post_type' => 'site_testimonials',
                'limit' => 5,
            );

            $testimonials = get_posts($args);

            ?>
            <div class="testimonial__right">
                <div class="slider__wrapper">
                    <button id="testimonial-prev" class="slider__arrow slider__arrow--prev" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.512" height="15.683" viewBox="0 0 8.512 15.683">
                            <path id="Path_658" data-name="Path 658" d="M-.616.968-.368.719a.422.422,0,0,0,0-.6L-7.24-6.75l6.873-6.873a.422.422,0,0,0,0-.6l-.249-.249a.422.422,0,0,0-.6,0l-7.42,7.42a.422.422,0,0,0,0,.6l7.42,7.42A.422.422,0,0,0-.616.968Z" transform="translate(8.756 14.592)" fill="#909599" />
                        </svg>
                    </button>

                    <div class="swiper slider__testimonials">
                        <div class="swiper-wrapper">
                            <?php foreach ($testimonials as $item) : ?>
                                <div class="swiper-slide">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40.6" height="27.7" viewBox="0 0 40.6 27.7">
                                        <path id="Path_4" data-name="Path 4" d="M25.15-77.2c0-.4-.3-.8-1.3-.8-12.5,0-18.8,10.8-18.8,18.9,0,4.8,2.3,8.8,6.9,8.8,5.4,0,9.8-5.6,9.8-10.7,0-3.7-2.3-6.9-6.1-7.1v-.6c0-2.8,4.3-7.7,9-7.7C24.85-76.4,25.15-76.8,25.15-77.2Zm-20.4,0c0-.4-.3-.8-1.3-.8-12.6,0-18.9,10.8-18.9,18.9,0,4.8,2.3,8.8,6.9,8.8,5.4,0,9.8-5.6,9.8-10.7,0-3.7-2.3-6.9-6-7.1a1.268,1.268,0,0,1-.1-.6c0-2.8,4.3-7.7,9.1-7.7A1.009,1.009,0,0,0,4.75-77.2Z" transform="translate(15.45 78)" fill="#782181" />
                                    </svg>


                                    <div class="text">
                                        <?= $item->post_content ?>
                                    </div>

                                    <div class="name">
                                        <?= $tem->post_title ?>
                                    </div>
                                </div>
                            <?php endforeach;
                            wp_reset_postdata(); ?>
                        </div>
                    </div>

                    <button id="testimonial-next" class="slider__arrow slider__arrow--next" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.512" height="15.683" viewBox="0 0 8.512 15.683">
                            <path id="Path_659" data-name="Path 659" d="M-8.384-14.468l-.249.249a.422.422,0,0,0,0,.6L-1.76-6.75-8.632.123a.422.422,0,0,0,0,.6l.249.249a.422.422,0,0,0,.6,0l7.42-7.42a.422.422,0,0,0,0-.6l-7.42-7.42A.422.422,0,0,0-8.384-14.468Z" transform="translate(8.756 14.592)" fill="#909599" />
                        </svg>
                    </button>
                </div>

                <div class="slider__dots"></div>
            </div>

            <div class="testimonial__mobile-button">
                <a href="#" class="button">
                    Read More

                    <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                        <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <img class="hand hand--bottom" src="<?= get_stylesheet_directory_uri() ?>/dist/images/hand-bottom.svg" alt="">
</section>