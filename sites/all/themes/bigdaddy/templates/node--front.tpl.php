<a class="blockHome" href="/drupal/node/<?php echo $vid; ?>">
  <div class="contentPageCollecDetails"  class="captionBkOne">
    <?php if ($title): ?>
      <div class="top-page-details">
        <h3><?php if (strlen($title)>29){
          echo substr($title, 0, 28); ?>...<?php
        }else{
          echo $title;
        }?></h3>
      </div>
      <div class="clear"></div>
      <section>
      </section>
    <?php endif ?>
  </div>
  <?php if (property_exists($node, 'field_cover')): ?>
    <?php if (isset($node->field_cover['und'])): ?>
      <?php $image = $node->field_cover['und'][0]['uri']; ?>
      <img src="<?php echo image_style_url('medium', $image); ?>" alt="">
    <?php endif ?>
  <?php endif ?>
</a>