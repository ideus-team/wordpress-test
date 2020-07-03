<!doctype html>
<html class="l-html no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    @-ms-viewport {
      width: device-width;
    }
    @viewport {
      width: device-width;
    }
  </style>

  <?php if ( ! has_site_icon() ) : ?>

    <link rel="shortcut icon" href="<?php echo home_url( '/favicon.ico' ); ?>">
    <link rel="manifest" href="<?php echo home_url( '/site.webmanifest' ); ?>">
    <link rel="apple-touch-icon" href="<?php echo home_url( '/icon.png' ); ?>">

  <?php endif; ?>

  <!--<meta name="theme-color" content="#ed1c24">-->

  <?php wp_head(); ?>
  <?php get_template_part( 'template-parts/scripts/header' ); ?>
</head>
<body <?php body_class(); ?>>

  <?php get_template_part( 'template-parts/scripts/body' ); ?>

  <div class="l-wrapper">
    <header class="l-siteHeader" role="banner">
      <div class="b-siteHeader">
        <div class="l-siteLogo">
          <?php
          $siteLogo__tag  = ( is_front_page() && ! is_paged() ) ? 'h1' : 'div';
          $siteLogo__link = ( is_front_page() && ! is_paged() ) ? '' : ' href="' . home_url() . '"';
          ?>
          <<?php echo $siteLogo__tag; ?> class="b-siteLogo" itemscope itemtype="http://schema.org/Organization">
            <a class="b-siteLogo__link"<?php echo $siteLogo__link; ?> itemprop="url">
              <img class="b-siteLogo__icon" src="<?php echo get_theme_file_uri( 'assets/img/blocks/siteLogo/siteLogo-logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" itemprop="logo">
            </a>
          </<?php echo $siteLogo__tag; ?>>
        </div>

        <div class="b-siteInfo">
          <a class="b-siteInfo__link"<?php echo $siteLogo__link; ?>>
            <img class="b-siteInfo__logo" src="<?php echo get_theme_file_uri( 'assets/img/siteInfo__logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
          </a>
          <?php if ( is_front_page() ) : ?>
            <h1 class="b-siteInfo__title"><?php bloginfo( 'name' ); ?></h1>
            <div class="b-siteInfo__descr"><?php bloginfo( 'description' ); ?></div>
          <?php endif; ?>
        </div>

        <?php get_search_form(); ?>

      </div>

      <div class="l-siteSubHeader">
        <div class="b-siteSubHeader">
          <?php if ( ! is_singular( 'post' ) ) : ?>
            <?php $tag = ( ! is_front_page() ) ? 'h1' : 'div'; ?>
            <<?php echo $tag; ?> class="b-siteSubHeader__title"><?php the_title(); ?></<?php echo $tag; ?>>
          <?php endif; ?>

          <ul class="b-socialMenu -style_header">
            <li class="b-socialMenu__item -type_fb">
              <a href="https://www.facebook.com/ideus.interactive" class="b-socialMenu__link">Facebook</a>
            </li>
            <li class="b-socialMenu__item -type_twitter">
              <a href="https://twitter.com/iDeus_team" class="b-socialMenu__link">Twitter</a>
            </li>
            <li class="b-socialMenu__item -type_github">
              <a href="https://github.com/ideus-team" class="b-socialMenu__link">GitHub</a>
            </li>
          </ul>

          <?php if ( has_nav_menu( 'header' ) ) : ?>

            <nav class="l-mainNavigation">
              <?php
              wp_nav_menu( array(
                'theme_location' => 'header',
                'container'      => false,
                'menu_class'     => 'b-mainNavigation',
                'fallback_cb'    => false,
                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                'depth'          => 1,
                'walker'         => new nc_Walker_Nav_Menu,
              ) );
              ?>
            </nav>

          <?php endif; ?>

        </div>
      </div>
    </header>

    <div class="l-content">
