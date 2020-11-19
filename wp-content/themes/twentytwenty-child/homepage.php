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
    <div class="homepage">
        <div class="wrapper">
            <div class="content">
                <div class="image-home-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" class="img-responsive"/>
                </div>
                <div class="image-home-logo-name">
                    <h4>@yoruproject.id</h4>
                </div>
                <?php if (have_rows('button_cta')) :
                    echo '<div class="home-content">';
                    while (have_rows('button_cta')) : the_row();
                        $cta_img = get_sub_field('image_logo');
                        $cta_button = get_sub_field('link_button');
                        $cta_name_button = get_sub_field('button_name');
                        echo '<div class="content-list-item">';
                            echo '<div class="item-image">';
                                echo '<img src="' . $cta_img . '" class="img-responsive"/>';
                            echo '</div>';
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
<?php get_footer(); ?>
