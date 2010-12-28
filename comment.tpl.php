<?php
// Copyright 2010 (c) Pratul Kalia
// print "<pre>";
// print_r($comment);
// print "</pre>";
if ($comment->homepage) {
  $url = $comment->homepage;
}
if ($comment->uid == 1) {
  $u = " self";
}
?>
<div class="comment<?php print ($comment->new) ? ' comment-new' : ''; print ' '. $status; print ' '. $zebra;?><?php print $u ?>">

    <div class="clear-block">
    <?php if ($submitted): ?>
      <div class="submitted">On <?php print $date ?>, 
        <?php if ($comment->homepage): ?>
          <a href="<?php print $comment->homepage ?>">
        <?php endif; ?>
          <?php print $comment->name ?>
        <?php if ($comment->homepage): print "</a>"; endif;?> said…</div>
    <?php endif; ?>

  <?php if ($comment->new) : ?>
    <span class="new"><?php print drupal_ucfirst($new) ?></span>
  <?php endif; ?>


    <div class="content">
      <?php print $content ?>
      <?php if ($signature): ?>
      <div class="clear-block">
        <div>—</div>
        <?php print $signature ?>
      </div>
      <?php endif; ?>
    </div>
  </div>

  <?php if ($links): ?>
    <div class="links"><?php print $links ?></div>
  <?php endif; ?>
</div>