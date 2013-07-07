<?php
/**
 * The default template for displaying content
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" style="background-image:url(http://lorempixel.com/200/200);">
    <a href="<?php the_permalink() ?>">
        <div class="article-header">
            <div class="h2"><?php the_title(); ?></div>
        </div> <!-- end article header -->

        <time><?php
            $mylimit= 3 * 86400; //days * seconds per day
            $post_age = date('U') - get_post_time('U');
            the_time('d M y'); ?>
        </time>
        <?php
        if ($post_age <= $mylimit) { ?>
            <span class="new">New!</span>
        <?php } ?>
        <?php // comments_template(); // uncomment if you want to use them ?>
    </a>
</article> <!-- end article -->