<?php
$banner = get_field('banner');
?>
<section class="banner" role="banner" style="background: url('<?= wp_get_attachment_url($banner['image'], '') ?>') 50% 50% / cover"></section>