<div class="contentPageCollecDetails">
  <?php $image = $node->field_cover['und'][0]['uri']; ?>
  <?php if ($image): ?>
  <img src="<?php echo image_style_url('medium', $image); ?>" alt="">
  <?php endif ?>
  <?php if ($title): ?>
    <div class="top-page-details">
      <h2 class="titre-page-details"><?php echo $title; ?></h2>
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