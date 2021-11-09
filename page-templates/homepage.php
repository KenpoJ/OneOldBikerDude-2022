<?php
/**
 * Template Name: Homepage
 *
 * Template for displaying the homepage
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<?php wp_reset_query(); ?>

<?php query_posts( 'posts_per_page=2' ); ?>

<div class="<?php echo $container; ?> content content-home">

  <section id="welcome">
    <div class="row justify-content-between">

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'loop-templates/content', 'home' ); ?>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>

      <?php endwhile; // end of the loop. ?>

      <div class="welcome-column donations">
        <div class="donations-container">

          <div>
            <img alt="" src="wp-content/uploads/2021/05/jason-and-lynda-web.jpg" class="img-fluid rounded">
          </div>
          <div>
            <h3 class="text-center">Make a Donation</h3>
            <p>Every day the freedom to walk, talk, run and play is taken from kids and adults with neuromuscular disease. Including my wife. By making a donation you can help change that. Your donation is tax deductible and WILL transform lives.</p>
          </div>

        </div>
        <div class="text-center">
          <a class="btn btn-lg btn-primary" href="/causes/" title="Make a Donation">Donate Today!</a>
        </div>
      </div>

    </div>

    <div class="row">
      <div class="col-sm-8 text-center">
        <a class="btn btn-primary" href="category/rides/">Explore All Rides</a>
        <a class="btn btn-primary" href="blog">Explore All Blog Posts</a>
      </div>
    </div>

  </section>

  <section id="shop-home">
    <div class="container">
      <h3 class="shop-home-heading">Shop All One Old Biker Dude Products</h3>
      <p class="shop-home-text">A portion of all sales will be donated to the MDA</p>
      <?php echo do_shortcode('[product_categories ids="27, 25, 26, 29" number="0" parent="0"]'); ?>
      <?php //echo do_shortcode('[products limit="4" columns="4" visibility="featured" order_by="popularity" ]'); ?>
      <div class="text-center">
        <a class="btn btn-lg btn-secondary" href="/shop" title="Shop All Categories">Shop All Categories</a>
      </div>
    </div>
  </section>

</div>

<?php get_footer(); ?>
