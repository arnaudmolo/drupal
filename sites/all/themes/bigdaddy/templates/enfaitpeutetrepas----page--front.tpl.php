<!-- begin GLOBAL -->
<div id="global">
  <!-- begin HEADER -->
  <?php print render($page['header']); ?>
  <!-- end HEADER -->
  <!-- begin MIDDLE -->
  <div id="middle" class="clearfix">
    <!-- begin MIDDLE CONTENT -->
    <div id="middle-content" role="main">  
      <?php print $messages; ?>
      <?php if (isset($tabs['#primary'][0]) || isset($tabs['#secondary'][0])): ?>
        <nav class="tabs"><?php print render($tabs); ?></nav>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content_top']); ?>
      <?php print render($page['content']); ?>
      <?php print render($page['content_bottom']); ?>
    </div>
    <!-- end MIDDLE CONTENT -->
    <?php if ($page['sidebar_second']): ?>
    <!-- begin SIDEBAR SECOND -->
    <aside id="sidebar-second" role="complementary">
      <?php print render($page['sidebar_second']); ?>
    </aside>
    <!-- end SIDEBAR SECOND -->
    <?php endif; ?>
  </div>
  <!-- end MIDDLE -->
  <?php if ($page['footer']): ?>
  <!-- begin FOOTER -->
  <footer id="site-footer" role="contentinfo" class="clearfix">
    <?php print render($page['footer']); ?>
  </footer>
  <!-- end FOOTER -->
  <?php endif; ?>
</div>
<!-- end GLOBAL -->   