<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <?php 
        _e('<h2>404 NOT FOUND</h2>','blog');
        _e('<p>The articles you are looking for not found,but maybe try looking again!</p>','blog');
        get_search_form();
        _e('<h3>Content Categories</h3>','blog');
        echo '<div class="404-cat-list">';
            wp_list_categories(array('title_li'=>''));
        echo '</div>';
        _e('Tag Cloud','blog');
        wp_tag_cloud();
        ?>

    </div>
    <div id="sidebar">
        <?php get_sidebar();?>
    </div>
</div>
<?php get_footer(); ?>