<?php
$notice = get_field('notice', 'option');
?>
<section class="cta">
    <div class="container">
        <div class="cta__content">
            <div class="cta__title"><?= $notice['title'] ?></div>
            <div class="cta__text">
                <p>
                    <?= $notice['text'] ?>
                </p>
            </div>
        </div>

        <div class="cta__button">
            <a href="<?= $notice['button_link'] ?>" class="button button--white">
                <?= $notice['button_text'] ?>

                <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                    <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#782181" />
                </svg>

            </a>
        </div>
    </div>
</section>