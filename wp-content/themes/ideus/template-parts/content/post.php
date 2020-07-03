<section class="l-post">
  <div class="b-post -type_archive">

    <?php if ( has_post_thumbnail() ) : ?>

      <a class="b-post__thumbLink" href="<?php the_permalink(); ?>">
        <img class="b-post__thumb" src="<?php the_post_thumbnail_url( array( 770, 425 ) ); ?>" srcset="<?php the_post_thumbnail_url( array( 1540, 850 ) ); ?> 2x" alt="<?php the_title_attribute(); ?>" />
      </a>

    <?php endif; ?>

    <h2 class="b-post__title"><?php the_title(); ?></h2>

    <div class="b-post__content b-text">

      <?php if ( is_single() ) : ?>

        <?php the_content(); ?>

      <?php else : ?>

        <?php the_excerpt(); ?>

      <?php endif; ?>

    </div>

    <div class="b-readMore">
      <a class="b-readMore__link" href="<?php the_permalink(); ?>">Читать дальше</a>
    </div>

    <ul class="b-postMeta">
      <li class="b-postMeta__item -type_date"><?php the_time( 'j F Y' ); ?></li>
      <li class="b-postMeta__item -type_author">Igor Zenich</li>
      <li class="b-postMeta__item -type_comments">
        <a class="b-postMeta__link" href="<?php the_permalink(); ?>#comments">0</a>
      </li>
    </ul>

    <div class="b-share">
      <div class="b-share__title">Поделиться:</div>
      <div class="b-share__content">
        <img src="<?php echo get_theme_file_uri( 'assets/img/temp-share.png' ); ?>" alt="" />
      </div>
    </div>
  </div>
</section>
