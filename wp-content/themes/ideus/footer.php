    </div><!--content-->

    <footer class="l-siteFooter" role="contentinfo">
      <div class="b-siteFooter">
        <address class="l-siteCopyright vcard" itemscope itemtype="http://schema.org/Organization">
          <div class="b-siteCopyright">© <?php echo date( 'Y' ); ?>, <a rel="me" itemprop="name" class="b-siteCopyright__link fn n org url work" href="<?php echo home_url(); ?>">iDeus</a></div>
        </address>
      </div>
    </footer>
  </div><!--wrapper-->

  <?php wp_footer(); ?>
  <?php get_template_part( 'template-parts/scripts/footer' ); ?>

</body>
</html>
