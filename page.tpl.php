<?php
// Copyright 2010 (c) Pratul Kalia
?>
<!DOCTYPE html>
<html lang="<?php print $language->language ?>">
<head>
  <?php print $head ?>
  <title><?php print $head_title ?></title>
  <?php print $styles ?>
  <?php print $scripts ?>
</head>
<body>
  <div id="chhota">
    <div id="maincontent">

      <div id="headerbutinfooter">
        <a href="<?php print $front_page ?>"><span id="sitename"><?php print check_plain($site_name) ?></span><br/>
        <span id="siteslogan"><?php print check_plain($site_slogan) ?></span></a>
      </div> <!-- END headerbutinfooter -->

      <div id="centercontent">
        <div id="priseclinx">
          <?php if (isset($primary_links)) : ?>
            <?php print theme('links', $primary_links, array('class' => 'links primary-links')) ?>
          <?php endif; ?>
          <?php if (isset($secondary_links)) : ?>
            <?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
          <?php endif; ?>
          <div id="feedyurself"><a href="?q=rss.xml"><img src="<?php print $directory ?>/feed14.png"/></a></div>
        </div>
        
        <?php if ($tabs): print '<ul class="tabs primary">'. $tabs .'</ul></div>'; endif; ?>
        <?php if ($tabs2): print '<ul class="tabs secondary">'. $tabs2 .'</ul>'; endif; ?>
        <?php if ($show_messages && $messages): print $messages; endif; ?>
        <?php print $help; ?>
        
        <?php print $content ?>
      </div>  <!-- END centercontent -->

      <?php if ($rsidebar): ?>
        <div id="sidecontent">
          <?php print $rsidebar ?>
        </div> <!-- END sidecontent -->
      <?php endif; ?>

    </div> <!-- END maincontent -->

    <div id="footer">
      <?php if ($rfooter): print $rfooter; endif; ?>
      <?php print $footer_message . $footer ?>
    </div> <!-- END footer -->

  </div>  
  </div>
  <?php print $closure; // Close my eyes and make sing, ding ding ding. ?>
</body>
</html>
  