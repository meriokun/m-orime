<?php
get_header();
?>

<?php get_template_part('frontpage/hero'); ?>

<main>
    <div class="ct-container">    
        <?php the_content(); ?>
    </div>
</main>

<?php
get_footer();
?>
