<div class="welcome-column">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="img-container text-center">
      <?php echo get_the_post_thumbnail( $post_id, 'homepage-loop' ); ?>
      <!-- <img class="img-fluid" src="https://source.unsplash.com/1200x800/?woman,water" alt=""> -->
    </div>
    <div class="article-info">
      <div class="entry-meta">
        <?php
        the_title(
          sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
          '</a></h4>'
        );
        ?>
        <div class="posted-info">
          <?php understrap_posted_on(); ?>
        </div>
        <div class="entry-content">

          <?php the_excerpt(); ?>

        </div><!-- .entry-content -->
      </div><!-- .entry-meta -->
    </div>
  </article>
</div>