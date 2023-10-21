<section class="flyerDownload">
    <div class="container">
        <div class="flyerDownload__wrapper" style='background: linear-gradient(90deg, rgba(255,255,255,1) 30%, rgba(255,255,255,0.7914565484396884) 50%, rgba(255,255,255,0) 100%), url(<?= $field['background_image']['url'] ?>) 50% 50% / cover'>
            <div class="flyerDownload__content">
                <h3 class="purple"><?= $field['title'] ?></h3>
                <p><?= $field['text'] ?></p>
                <ul>
                    <li><a href="/fundrasing-ideas" class="button">Fundrasing Ideas</a></li>
                    <li><a href="<?= $field['flyer_download']['url'] ?>" class="button button--dark-grey" download>Download Flyer</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>