<?php
  /* print the variables if needed to allow for 
  individual field theming or breaking them up. */
 //drupal_flush_all_caches();
?>
<div class="col-md-5 col-md-offset-3 panel">
<div class="panel-heading"><div class="logologin">
        <a href="<?php print $GLOBALS['base_url'] ?>">
            <img src="<?php print $GLOBALS['base_url']."/".path_to_theme() ?>/assets/images/mobinnet-logo.png" height="50" width="160">
        </a>
    </div><!-- logopanel --></div>
    <div class="panel-body">
    <?php print drupal_render_children($form) ?>
 
    </div>
</div>