<?php

get_header();

$title = get_field('title');
$description = get_field('description');

?>
  <section id="frontpage">
    <div>
        <h1><?php the_title();?></h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; else: endif; ?>

    <?php
    if($title): ?>
        <h1><?php echo $title; ?></h1>
    <?php endif;

    if($description): ?>
    <p><?php echo nl2br($description); ?></>
    <?php endif; ?>
    </div>
   </section>
<?php
get_footer(); ?>