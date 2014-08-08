<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/08/14
 * Time: 10:36
 */?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('content', 'page'); ?>
<?php endwhile; // end of the loop. ?>
