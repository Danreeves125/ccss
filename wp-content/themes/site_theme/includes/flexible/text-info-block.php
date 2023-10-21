<section class="textBlock">
    <div class="container">
        <div class="textBlock__text">
            <?= $field['text'] ?>
        </div>

        <?php 
            $info = $field['info_block']
        ?>
        <div class="textBlock__info">
            <p class="title"><?=$info['title']?></p>
            <div class="text">
                <?=$info['text']?>
            </div>
            <!-- <?=$info['url_or_file']?> -->
            <a href="<?=$info['download']['url']?>" class="button" download>
                <?=$info['download_title']?>

                <svg xmlns="http://www.w3.org/2000/svg" width="10.5" height="10.379" viewBox="0 0 10.5 10.379">
                    <path id="Label" d="M-.138-9.607-.6-9.143a.281.281,0,0,0,0,.4L3.034-5.109h-8a.281.281,0,0,0-.281.281v.656a.281.281,0,0,0,.281.281h8L-.6-.255a.281.281,0,0,0,0,.4l.464.464a.281.281,0,0,0,.4,0L5.168-4.3a.281.281,0,0,0,0-.4L.259-9.607A.281.281,0,0,0-.138-9.607Z" transform="translate(5.25 9.689)" fill="#fff" />
                </svg>
            </a>
        </div>
    </div>
</section>