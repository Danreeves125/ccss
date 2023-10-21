<?php
$bg = bgColour($field['background_colour']);
?>
<section class="imageTextBlock <?= ($field['flip_content']) ? 'imageTextBlock--flipped' : '' ?>" style="background: <?= $bg ?>">
    <div class="container">
        <?php if (!empty($field['section_title'])) : ?>
            <h2 class="h2 purple a-title mb-30"><?= $field['section_title'] ?></h2>
        <?php endif; ?>
        <div class="imageTextBlock__wrapper">
            <?php if ($field['image']) : ?>
                <div class="imageTextBlock__image">
                    <img src=<?= $field['image']['sizes']['image-text-image'] ?> alt="">
                </div>
            <?php endif; ?>
            <div class="imageTextBlock__content imageTextBlock__content--<?= $field['content_position'] ?>">
                <?php if (!empty($field['title'])) : ?>
                    <h2 class="h2 purple"><?= $field['title'] ?></h2>
                <?php endif; ?>
                <?php if (!empty($field['tagline'])) : ?>
                    <h3 class="tagline"><?= $field['tagline'] ?></h3>
                <?php endif; ?>
                <div class="imageTextBlock__text">
                    <p><?= $field['text'] ?></p>
                </div>
                <? if ($field['button_url']) : ?>
                    <div class="imageTextBlock__step--button">

                        <a href="<?= $field['button_url'] ?>" class="button">
                            <?= $field['button_text'] ?>

                            <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                                <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                            </svg>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>