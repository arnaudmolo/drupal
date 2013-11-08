<!-- begin GLOBAL -->
<div>
  <!-- begin HEADER -->
  <?php print render($page['header']); ?>
  <!-- end HEADER -->
  <!-- begin MIDDLE -->
  <div id="pageWrapper">
    <div class="container_12">
      <div id="content">
        <div id="sidebar">
          <div class="sideBlockLiens">
            <ul class="sideLiens">
              <?php if ($page['sidebar_second']): ?>
              <?php print render($page['sidebar_second']); ?>
              <?php endif; ?>
            </ul>
          </div>
          <div class="sideBlockInfo">

          </div><!--sideBlockInfo-->
        </div>
        <div class="contentPage">
          <div id="top-page">
            <div class="divider"></div>
            <h2 class="titre-page">
              <?php echo drupal_get_title(); ?>
            </h2>
            <div class="divider"></div>
          </div>
          <?php print $messages; ?>
          <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
            <nav class="tabs"><?php print render($tabs); ?></nav>
          <?php endif; ?>
          <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
          <?php endif; ?>
          <section>
            <?php print render($page['content_top']); ?>
            <?php print render($page['content']); ?>
            <?php print render($page['content_bottom']); ?>
          </section>
        </div>
      </div>
    </div>
  </div>
  <?php if ($page['footer']): ?>
  <!-- begin FOOTER -->
  <footer id="site-footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']); ?>
  </footer>
  <!-- end FOOTER -->
  <?php endif; ?>
</div>