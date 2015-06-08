<?php
include("lang/prepend.php");
$_SESSION['active'] = "home";
/*
Template Name: home
*/
?>

<?php get_header(); ?>
<body class="home">
<?php get_template_part('header-part') ?>
<div class="main wrapper clearfix">
    <section class="content clearfix">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post();  ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif;?>
    </section>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>
</body>
</html>