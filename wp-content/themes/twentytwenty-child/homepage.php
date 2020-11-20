<?php
/**
 * Template by : Agus Andri Putra
 * Template Name: Homepage
 * @link http://andriputra.com
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main" class="fullpage">
    <div class="shadow-overlay"></div>
    <div class="homepage">
        <div class="wrapper">
            <div class="content">
                <div class="image-home-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/yorulogo.png" class="img-responsive"/>
                </div>
                <div class="text-name">
                    <h2>#BLACKTHATMATTERS</h2>
                </div>
                <?php if (have_rows('button_cta')) :
                    echo '<div class="home-content">';
                    while (have_rows('button_cta')) : the_row();
                        $cta_img = get_sub_field('image_logo');
                        $cta_button = get_sub_field('link_button');
                        $cta_name_button = get_sub_field('button_name');
                        echo '<div class="content-list-item">';
                            echo '<a href="' . $cta_button . '">';
                                echo '<div class="item-image">';
                                    echo '<img src="' . $cta_img . '" class="img-responsive"/>';
                                echo '</div>';
                            echo '</a>';
                            echo '<div class="item-button">';
                                echo '<a href="' . $cta_button . '">' . $cta_name_button . '</a>';
                            echo '</div>';
                        echo '</div>';
                    endwhile;
                    echo '</div>';
                endif; ?>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main><!-- #site-content -->
<div class="footer">
    <div class="wrapper">
        <div class="social-list">
            <a class="social fb" href="<?php echo get_field('facebook_link');?>"><i class="fab fa-facebook-f"></i></a>
            <a class="social tw" href="<?php echo get_field('twitter_link');?>"><i class="fab fa-twitter"></i></a>
            <a class="social ig" href="<?php echo get_field('instagram_link');?>"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</div>
<?php get_footer(); ?>
