<?php
// Copyright 2010 (c) Pratul Kalia
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">
  
  <div class="ntitle"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></div>
  
  <div class="nodesubmitinfo"><?php print $date; ?></div>
  
  <div class="nodecontent">
    <?php print $content ?>
  </div>
  
  <div class="clear-block">
    <?php if ($links): ?>
      <div class="links bottom-links"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

  <div class="cutmehere">
    ———————————— ✄————————————
  </div>
</div>
