<?php
/*
    Template Name: Contact
*/
?>

<?php get_header(); ?>
<div class="content">
    <div id="main-content">
        <div class="contact-info">
            <h4 Địa chỉ liên lạc:></h4>
            <p>123 Nguyễn Trãi</p>
            <p>011.223.4444</p>
        </div>  
        <div class="contact-info">
            <?php echo do_shortcode('[contact-form-7 id="1387" title="Contact form 1"]');?>
        </div>      
    </div>
    <div id="sidebar">
        <?php get_sidebar();?>
    </div>
</div>
<?php get_footer(); ?>