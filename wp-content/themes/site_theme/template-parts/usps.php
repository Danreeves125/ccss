<?php
    $usps = get_field('usps', 'option');
?>
<div class="home__usps">
    <button id="usp-prev" class="slider__arrow slider__arrow--prev" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="8.512" height="15.683" viewBox="0 0 8.512 15.683">
            <path id="Path_658" data-name="Path 658"
                d="M-.616.968-.368.719a.422.422,0,0,0,0-.6L-7.24-6.75l6.873-6.873a.422.422,0,0,0,0-.6l-.249-.249a.422.422,0,0,0-.6,0l-7.42,7.42a.422.422,0,0,0,0,.6l7.42,7.42A.422.422,0,0,0-.616.968Z"
                transform="translate(8.756 14.592)" fill="#909599" />
        </svg>
    </button>
    <div class="swiper slider__usps">
        <div class="swiper-wrapper">
            <?php foreach($usps as $usp) : ?>
            <div class="swiper-slide">
                <?php if($usp['icon']) : ?>
                <div class="icon">
                    <img src="<?= wp_get_attachment_image_url($usp['icon'], '')?> " alt="">
                </div>
                <?php endif; ?>
                <p>
                    <?=$usp['text']?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <button id="usp-next" class="slider__arrow slider__arrow--prev" type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="8.512" height="15.683" viewBox="0 0 8.512 15.683">
            <path id="Path_659" data-name="Path 659"
                d="M-8.384-14.468l-.249.249a.422.422,0,0,0,0,.6L-1.76-6.75-8.632.123a.422.422,0,0,0,0,.6l.249.249a.422.422,0,0,0,.6,0l7.42-7.42a.422.422,0,0,0,0-.6l-7.42-7.42A.422.422,0,0,0-8.384-14.468Z"
                transform="translate(8.756 14.592)" fill="#909599" />
        </svg>
    </button>

</div>