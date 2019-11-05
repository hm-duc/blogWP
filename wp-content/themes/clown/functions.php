css<?php

// declare cont
define('THEME_URL',get_stylesheet_directory());
define('CORE', THEME_URL ."/core");

$default_backgourd = array(
    'dafault-color' => 'e8e8e8'
);

//call init.php
require_once( CORE . "/init.php");

//setting content witdh
if(!isset($content_width)){
    $content_width = 620;
}

//declare function theme_setup
if(!function_exists('theme_setup')){
    function theme_setup(){

        //setup textdomain
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('blog',$language_folder);

        //auto add link RSS to <head>
        add_theme_support('automatic-feed-links');

        //add post thumbail
        add_theme_support('post-thumbnails');

        //add post format
        add_theme_support('post-formats',array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));

        //add tittle-tag
        add_theme_support('title-tag');

        //add custom-backgourd
        $defalt_backgound = array('default-color' => 'e8e8e8');
        add_theme_support('custom-background',$defalt_backgound);

        //add menu
        register_nav_menu('primary-menu',__('Peimary Menu','blog'));

        //add sidebar
        $sidebar = array(
            'name' =>  __('Main Sidebar','blog'),
            'id' => 'main-sidebar',
            'descripion' => __('Default Sidebar'),
            // 'class' => 'main-sidebar',
            'before-tittle' => '<h3 class="widetittle">',
            'after-tittle' => '</h3>'
        );
        register_sidebar($sidebar);
    }
    add_action('init','theme_setup');
}


/*
TEMPLATE FUNCTIONS
*/

if(!function_exists('blogWP_header')){
    function blogWP_header(){ ?>
        <div class="site-name">
            <?php
                if(is_home()){
                    printf('<h1><a href="%2$s" title="%2$s">%3$s</a></h1>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                }
                else {
                    printf('<p><a href="%2$s" title="%2$s">%3$s</a></p>',
                    get_bloginfo('url'),
                    get_bloginfo('description'),
                    get_bloginfo('sitename'));
                }
            ?>
        </div>
        
        <div class="site-description"><?php bloginfo('description');?></div><?php
    }
}


/*
Show menu
*/
if(!function_exists('blogWP_menu')){
    function blogWP_menu($menu){
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu
        );
        wp_nav_menu($menu);
    }
}

/*
Paginate post
*/
if(!function_exists('blogWP_pagination')){
    function blogWP_pagination(){
        if( $GLOBALS['wp_query']->max_num_pages <2 ){
            return '';
        }   ?>
        <nav class="pagination" role="navigation">
            <?php if(get_next_posts_link()):?>
                <span class="prev"><?php next_post_link(__('Older Posts','blog'));?></span>
            <?php endif; ?>
            <?php if(get_previous_posts_link()):?>
                <span class="next"><?php previous_posts_link(__('Newest Posts','blog'));?></span>
            <?php endif; ?>
        </nav>
    <?php }
}

/*
Thumbnail of post
*/
if(!function_exists('blogWP_thumbnail')){
    function blogWP_thumbnail($size){
        if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail($size);?></figure>
        <?php endif;?> 
        <?php }
}

/*
show title of post
*/
if(!function_exists('blogWP_entry_header')){
    function blogWP_entry_header(){ ?>
        <?php if(is_single()):?>
            <h1 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_tttle();?>"><?php the_title();?></a></h1>
        <?php else:?>
            <h2 class="entry-title"><a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
        <?php endif;?>
    <?php }
}

/*
entry_meta
*/
if(!function_exists('blogWP_entry_meta')){
    function blogWP_entry_meta(){ ?>
        <?php if(!is_page()):?>
            <div class="entry-meta">
                <?php 
                printf(__('<span class="author"> Post By %1$s ','blog'),get_the_author());
                printf(__('<span class="date_published">At %1$s ','blog'),get_the_date());
                printf(__('<span class="catelory">In %1$s ','blog'),get_the_category_list(','));
                if(comments_open()):
                    echo '<span class="meta-reply">';
                    comments_popup_link(__('Leave a comment','blog'),
                                        __('One comment','blog'),
                                        __('% comment','blog'),
                                        __('Read all comment','blog'));
                    echo '</span>';
                endif;
                ?>
            </div>
        <?php endif;?>
    <?php }
}


/*
entry_content
*/
if(!function_exists('blogWP_entry_content')){
    function blogWP_entry_content(){
        if(!is_single() && !is_page()){
            the_excerpt();
        }
        else{
            the_content();
            //pagination in single
            $link_page =array(
                'before'=>__('<p>Page','blog'),
                'after'=>'</p>',
                'nextpagelink'=>__('Next Page','blog'),
                'previouspagelink'=>__('Previous Page','blog')
            );
            wp_link_pages($link_page);
        }
    }
}

function readmore(){
    return '<a class="read-more" href="'.get_permalink(get_the_ID()).'">'.__('...[Đọc thêm]','blog').'</a>';
}
add_filter('excerpt_more','readmore');


/*
Show tag for post
*/
if(!function_exists('blogWP_entry_tag')){
    function blogWP_entry_tag(){
        if(has_tag()):
            echo '<div class="entry-tag">';
            printf(__('Tagged in %1$s','blog'),get_the_tag_list('',''));
            echo '</div>';
        endif;
    }
}

/*
    FILE STYLE.CSS
*/ 
function blogWP_style(){
    wp_register_style('css-style',get_template_directory_uri()."/css/style.css", 'all');
    wp_enqueue_style('css-style');
    wp_register_style('css1-style',get_template_directory_uri()."/css/font-awesome.min.css", 'all');
    wp_enqueue_style('css1-style');
    wp_register_style('css2-style',get_template_directory_uri()."/vendors/line-icon/css/simple-line-icons.css", 'all');
    wp_enqueue_style('css2-style');
    wp_register_style('css3-style',get_template_directory_uri()."/vendors/elegant-icon/style.css", 'all');
    wp_enqueue_style('css3-style');
    // wp_register_style('css4-style',get_template_directory_uri()."https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", 'all');
    // wp_enqueue_style('css4-style');
    wp_register_style('css5-style',get_template_directory_uri()."/vendors/revolution/css/settings.css", 'all');
    wp_enqueue_style('css5-style');
    wp_register_style('css6-style',get_template_directory_uri()."/vendors/revolution/css/layers.css", 'all');
    wp_enqueue_style('css6-style');
    wp_register_style('css7-style',get_template_directory_uri()."/vendors/revolution/css/navigation.css", 'all');
    wp_enqueue_style('css7-style');
    wp_register_style('css8-style',get_template_directory_uri()."/vendors/owl-carousel/owl.carousel.min.css", 'all');
    wp_enqueue_style('css8-style');
    wp_register_style('css9-style',get_template_directory_uri()."/vendors/bootstrap-selector/css/bootstrap-select.min.css", 'all');
    wp_enqueue_style('css9-style');
    wp_register_style('css0-style',get_template_directory_uri()."/vendors/full-page/jquery.fullpage.min.css", 'all');
    wp_enqueue_style('css0-style');
    wp_register_style('css11-style',get_template_directory_uri()."/vendors/magnify-popup/magnific-popup.css", 'all');
    wp_enqueue_style('css11-style');
    wp_register_style('css12-style',get_template_directory_uri()."/css/responsive.css", 'all');
    wp_enqueue_style('css12-style');
}
add_action("wp_enqueue_scripts",'blogWP_style');
