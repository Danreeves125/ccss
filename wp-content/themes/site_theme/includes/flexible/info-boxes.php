<section class="infoBoxes">
    <div class="container">
        <div class="infoBoxes__items">
            <?php foreach ($field['boxes'] as $item) : ?>
                <div class="infoBoxes__item">
                    <div class="infoBoxes__image">
                        <img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>">
                    </div>
                    <div class="infoBoxes__text">
                        <h3 class="h3 purple mb-15">
                            <?= $item['title'] ?>
                        </h3>
                        <div class="dynamic">
                            <?= $item['text'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>