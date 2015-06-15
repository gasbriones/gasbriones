<header id="header" class="clearfix">
        <div class="wrapper clearfix">
            <div class="logo-wrapper">
                <a class="logo" href="#" title="gas briones">
                    <img title="gasbriones diseño web" alt="gasbriones" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
                    <div class="left">
                        <h1>
                            <span class="logo-name">gb</span>
                        </h1>
                        <h2 class="logo-tag-line">WEB - DSÑ & DEV </h2>
                    </div>
                </a>
            </div>
            <div class="menu-wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'header-menu' ) ); ?>
            </div>
            <div class="social-wrapper">
                <ul class="social">
                    <li>
                        <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                    </li>
                </ul>
            </div>
        </div>
</header>