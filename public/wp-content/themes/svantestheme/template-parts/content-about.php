<?php

$title = get_field('title');
$description = get_field('description');
?>

<section id="about">
    <div>
        <?php
        if ($title) : ?>
            <h1><?php echo $title; ?></h1>
        <?php endif;
        if ($description) : ?>
            <p><?php echo nl2br($description); ?></>
            <?php endif; ?>
    </div>
</section>