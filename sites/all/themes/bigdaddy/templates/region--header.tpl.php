<header>
  <div class="container_12">
    <div id="logo">
      <a href="/" class="logo">
        <img src="<?php print theme_get_setting('logo'); ?>" alt="<?php print variable_get('site_name'); ?>" />
      </a>
    </div>
    <nav>
      <ul class="main-menu">
      <?php $menu = menu_tree_all_data('main-menu'); ?>
      <?php foreach ($menu as $key => $menu_item): ?>
        <?php $menu_item = $menu_item['link'] ?>
        <?php if ($menu_item['access_callback'] === 'views_access'): ?>
          <li>
            <a href="/drupal/<?php echo str_replace('/node', '', $menu_item['link_path']) ?>">
              <?php echo $menu_item['link_title'] ?>
            </a>
          </li>
        <?php endif ?>
      <?php endforeach ?>
      </ul>
    </nav>
    <div class="search">
      <a href="#">
        <img src="img/icons/icon_search.png" alt="search" />
      </a>
    </div>
  </div>
</header>