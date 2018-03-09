<?php get_header(); ?>

<section class="showcase">
    <div class="container">
        <h1>
            <?php echo get_theme_mod('showcase_heading','CustomM Wordpress THemee') ;?>
        </h1>
        <p>
            <?php echo get_theme_mod('showcase_text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
             sapiente tempore, tenetur. Aut ipsam laborum provident.') ;?>
        </p>
        <a href="<?php echo get_theme_mod('btn_url', 'http://google.com/') ;?>"
           target="_blank"
           class="btn btn-primary btn-lg">
            <?php echo get_theme_mod('btn_text', 'Go To Google')  ;?>
        </a>
    </div>
</section>
<section class="boxes">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <?php if(is_active_sidebar('box1')) :?>
                        <?php dynamic_sidebar('box1'); ?>
                    <?php endif ;?>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box">
                    <?php if(is_active_sidebar('box2')) :?>
                        <?php dynamic_sidebar('box2'); ?>
                    <?php endif ;?>
                </div>

            </div>
            <div class="col-md-4">
                <div class="box">
                    <?php if(is_active_sidebar('box3')) :?>
                        <?php dynamic_sidebar('box3'); ?>
                    <?php endif ;?>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
