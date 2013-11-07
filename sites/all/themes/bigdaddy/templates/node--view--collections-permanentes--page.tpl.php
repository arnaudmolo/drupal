<div class="blockCol">
  <a href="<?php print $node_url ?>" title="<?php print $title ?>">
    <?php $image = $node->field_cover['und'][0]['uri']; ?>
    <?php if ($image): ?>
    <img src="<?php echo image_style_url('medium', $image); ?>" alt="">
    <?php endif ?>
    <div class="captionBkOne">
      <?php print $title ?>
    </div>
  </a>
</div>