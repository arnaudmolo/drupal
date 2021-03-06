<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>  
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
  
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
    <a href="#middle-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  <?php print $scripts; ?>
  
</body>
</html>