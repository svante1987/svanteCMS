<?php
$text = get_field('text');
?>

<section id="last-page">
    <div>
        <?php
        if ($text) : ?>
            <p><?php echo nl2br($text); ?></>
            <?php endif; ?>
    </div>
</section>