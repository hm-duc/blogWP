<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <div class="entry-thumbnail">
        <?php blogWP_thumbnail('medium');?>
    </div>
    <div class="entry-header">
        <?php blogWP_entry_header();?>
        <?php blogWP_entry_meta();?>
    </div>
    <div class="entry-content">
        <?php blogWP_entry_content();?>
        <?php (is_single() ? blogWP_entry_tag() : '');?>
    </div>
</article>