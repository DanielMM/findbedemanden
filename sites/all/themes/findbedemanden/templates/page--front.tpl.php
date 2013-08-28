<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar row"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><h1><?php print $linked_logo; ?></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php if ($top_bar_secondary_menu) :?>
              <?php print $top_bar_secondary_menu; ?>
            <?php endif; ?>
            <?php if ($top_bar_main_menu) :?>
              <?php print $top_bar_main_menu; ?>
            <?php endif; ?>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

    <!-- Title, slogan and menu -->
    <?php if ($alt_header): ?>
    <section class="row <?php print $alt_header_classes; ?>">
      <?php if ($site_slogan): ?>
        <h2 title="<?php print $site_slogan; ?>" class="site-slogan"><?php print $site_slogan; ?></h2>
      <?php endif; ?>

      <?php if ($alt_main_menu): ?>
        <nav id="main-menu" class="navigation" role="navigation">
          <?php print ($alt_main_menu); ?>
        </nav> <!-- /#main-menu -->
      <?php endif; ?>

      <?php if ($alt_secondary_menu): ?>
        <nav id="secondary-menu" class="navigation" role="navigation">
          <?php print $alt_secondary_menu; ?>
        </nav> <!-- /#secondary-menu -->
      <?php endif; ?>

    </section>
    <?php endif; ?>
    <!-- End title, slogan and menu -->

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
    <section class="l-messages row">
      <div class="large-12 columns">
        <?php if ($messages): print $messages; endif; ?>
      </div>
    </section>
    <!--/.l-messages -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>

  <div class="main-wrapper">
    <main role="main" class="row l-main">
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight panel callout">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>

        <a id="main-content"></a>

        <?php //print render($page['content']); ?>
        <!--Main CTA-->
          <section class="main-cta">
            <div class="row">
              <div class="large-6 large-offset-1 columns content">
                <h1>Modtag tilbud fra 3 bedemand</h1>
                <h2>Vi hjaelper dig med at finde 3 tilbud fra lokale bedemand - Gratis og uforpilgtende.</h2>
                <a href="#" class="button primary radius large-7">Start her</a>
                <p>Udfyld formularen med dine onsker, sa har du 3 tilbud i din mailindbakke, inden 24 timer.</p>
              </div>
            </div>
          </section>
        <!--/Main CTA-->
      </div>
      <!--/.main region -->

    </main>
    <!--/.main-->
  </div>

  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <div class="triptych-wrapper">
      <section class="l-triptych row">
        <h1>Hvorfor bruge FindBedemanden ?</h1>
        <div class="triptych-first large-4 columns">
          <?php print render($page['triptych_first']); ?>
        </div>
        <div class="triptych-middle large-4 columns">
          <?php print render($page['triptych_middle']); ?>
        </div>
        <div class="triptych-last large-4 columns">
          <?php print render($page['triptych_last']); ?>
        </div>
      </section>
    </div>
    <!--/.triptych -->
  <?php endif; ?>
  <!--Steps 123-->
    <section class="steps">
      <div class="row">
        <h3>Sadan fungerer FindBedemanden</h3>
        <div class="step step1 large-4 columns">
          <img src="http://localhost/fib/sites/default/files/dummy/step1.jpg" width="177" heigh="177" alt="" />
          <p class="step-description">Udfyld formularen med de ydelser du gerne vil have</p>
        </div>
        <div class="step step2 large-4 columns">
          <img src="http://localhost/fib/sites/default/files/dummy/step2.jpg" width="177" heigh="177" alt="" />
          <p class="step-description">Modtag dine 3 tilbud og vaelg  den tilbud  du onsker</p>
        </div>
        <div class="step step3 large-4 columns">
          <img src="http://localhost/fib/sites/default/files/dummy/step3.jpg" width="177" heigh="177" alt="" />
          <p class="step-description">Bliv kontaktet af bedemanden</p>
        </div>
      </div>
      <!--Second CTA-->
        <div class="large-4 large-centered columns second-cta">
          <a href="#" class="button primary radius large-8">Start her</a>
          <p>Udfyld formularen med dine onsker, sa har du 3 tilbud i din mailindbakke, inden 24 timer.</p>
        </div>
      <!--/Second CTA-->
    </section>
  <!--/Steps 123-->

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <div class="footer-columns-wrapper">
      <section class="row l-footer-columns">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first large-4 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second large-4 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
          <div class="footer-third large-4 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
      </section>
    </div>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if (!$site_name) :?>
      <div class="copyright large-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
