<?php

$get_image = get_field('image');
$image = $get_image['sizes']['large'];
?>

<section id="image-page">
    <div>
        <?php
        if ($image) : ?>
            <div class="img-container">
                <img src="<?php echo $image; ?>">
            </div>
        <?php endif; ?>
    </div>
</section>