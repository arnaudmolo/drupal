<?php 
global $base_url;
?>
<div class="<?php print $classes; ?> clearfix contentPageCollecDetails"<?php print $attributes; ?>>
  <?php if(property_exists($node, 'field_cover') && !count($node->field_cover) === 0): ?>
      <?php $image = $node->field_cover['und'][0]['uri']; ?>
      <?php if ($image): ?>
      <img src="<?php echo image_style_url('medium', $image); ?>" alt="">
      <?php endif ?>
  <?php endif ?>
  <?php if ($title): ?>
    <div class="top-page-details">
      <h2 class="titre-page-details"> <a href="/drupal/node/<?php echo $node->vid;; ?>"> <?php echo $title; ?> </a></h2>
    </div>
    <div class="clear"></div>
    <section>
      <div class="dividerDetails"></div>
      <div id="contenuColDetails">
        <?php print render($content['body']); ?>
      </div>
    </section>
  <?php endif ?>
</div>