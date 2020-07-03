<?php get_header(); ?>

<main class="l-contentText" role="main">

  <?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content/post' ); ?>

    <?php endwhile; ?>

    <?php nc_pagenavi(); ?>

  <?php else : ?>

    <p>Nothing found</p>

  <?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
