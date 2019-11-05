<article id="post-<?php the_ID();?>" <?php post_class();?>>
    <div class="entry-thumbnail">
        <?php blogWP_thumbnail('large');?>
    </div>
    <div class="entry-header">
        <?php blogWP_entry_header();?>
        <?php 
            $attachment = get_children(array('post-parent'=>$post->ID));
            $attachment_number = count($attachment);
            printf(__('This image post contain %1$s photo','blog'),$attachment_number);
        ?>
    </div>
    <div class="entry-content">
        <?php blogWP_entry_content();?>
        <?php (is_single() ? blogWP_entry_tag : '');?>
    </div>
</article>