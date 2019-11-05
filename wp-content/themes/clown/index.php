<?php get_header(); ?>

<!-- <section class="full_page_area">
    <section id="fullpage" class="full_page_inner">
        <div class="section soda_can active" style="background: url(img/home-parallax/parallax-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
            <div class="paper_inner">
                <div class="parallax_style_one">
                    <?php if(have_posts()):while(have_posts()):the_post();?>
                    <?php get_template_part('content',get_post_format());?>
                    <?php endwhile?>
                    <?php blogWP_pagination();?>
                    <?php else:?>
                    <?php get_template_part('content','none');?>
                    <?php endif;?>
                </div>
                <div id="sidebar">
                    <?php get_sidebar();?>
                </div>
            </div>
        </div>

    </section>
</section> -->

<!--================Full Page Area =================-->
<section class="full_page_area">
        <section id="fullpage" class="full_page_inner">
            <div class="section soda_can active" style="background: url(wp-content/themes/clown/img/home-parallax/parallax-1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                <div class="paper_inner">
                    <div class="parallax_style_one">
                        <h4>The A - Z Guide Of Fashion</h4>
                        <h3>Fashion Shortcuts - The Easy Way</h3>
                        <a class="add_cart_btn" href="#">view collection</a>
                    </div>
                </div>
            </div>
            <div class="section" style="background: url(wp-content/themes/clown/img/home-parallax/parallax-2.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                <div class="paper_inner">
                    <div class="parallax_style_two">
                        <h3>OFFBEAT</h3>
                        <h4>Everyday Collection</h4>
                        <a class="discover_btn" href="#">view collection</a>
                    </div>
                </div>
            </div>
            <div class="section" style="background: url(wp-content/themes/clown/img/home-parallax/parallax-3.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                <div class="paper_inner ice_creem">
                    <div class="parallax_style_two">
                        <h3>UNIQUE</h3>
                        <h4>Everyday Collection</h4>
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=RdtHX15sXiU"><i class="fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="section" style="background: url(wp-content/themes/clown/img/home-parallax/parallax-4.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;">
                <div class="paper_inner">
                    <div class="parallax_style_one">
                        <h4>Top 10 Tips With Fashion</h4>
                        <h3>Fashion Shortcuts</h3>
                        <a class="discover_btn" href="#">view collection</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--================End Full Page Area =================-->


<?php get_footer(); ?>