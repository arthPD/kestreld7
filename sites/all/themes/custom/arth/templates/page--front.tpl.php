<style>
  body{
    /* background-color: #292929; */
  }
  h2.block-title{
    display: none;
  }
</style>
<?php include(path_to_theme('arth').'/templates/header.tpl.php'); ?>
<div class="bg">
</div>
<div class="projects">
  
</div>
<div class="main-container <?php print $container_class; ?>">

  <header role="banner" id="page-header">
    <?php if (!empty($site_slogan)): ?>
      <p class="lead"><?php print $site_slogan; ?></p>
    <?php endif; ?>

    <?php print render($page['header']); ?>
  </header> <!-- /#page-header -->
  
  <div class="row">
    <section<?php print $content_column_class; ?>>
      <?php if (!empty($page['highlighted'])): ?>
        <div class="highlighted jumbotron"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>
      <?php if (!empty($breadcrumb)): print $breadcrumb; endif;?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
      <?php endif; ?>
      <?php if (!empty($page['help'])): ?>
        <?php print render($page['help']); ?>
      <?php endif; ?>
      <?php if (!empty($action_links)): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
    </section>
  </div>
</div>
<div>
  <?php
    if(drupal_is_front_page()){
      unset($page['content']['system_main']['default_message']);
    }
    print render($page['content']); 
    ?>
</div>
<?php
  
?>
<!-- <script>console.log(< ?php echo json_encode($page); ?>)</script>
< ?php if (!empty($page['footer'])): ?>
  <footer class="footer < ?php print $container_class; ?>">
    < ?php print render($page['footer']); ?>
  </footer>
< ?php endif; ?> -->
