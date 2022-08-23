<?php

get_header();

$title = get_field('title');
$description = get_field('description');
$link = get_field('link');
$get_image = get_field('image');
$image = $get_image['sizes']['large'];

?>
  <section id="frontpage">
    <div>

    <?php
    if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif;

    if($link) : ?>
    <a href="<?php echo $link['url']; ?>" >LINK LINK LINK</a>
    <?php endif;

    if($image) : ?>
    <div class="img-container">
      <img src="<?php echo $image; ?>">
    </div>
    <?php endif;

    if($description): ?>
    <p><?php echo nl2br($description); ?></>
    <?php endif; ?>
    
      
    </div>
   </section>
<?php
get_footer(); ?>