
<div class="breadcrumb-wrapper 
<?php if(is_single() || is_page('complete')){
  echo "breadcrumb-wrapper--mt";
} ?>">
  <div class="inner inner--middle">
    <div class="breadcrumb">
      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }
      ?>
    </div><!-- /.breadcrumb -->
  </div><!-- /.inner inner--middle -->
</div><!-- /.breadcrumb-wrapper -->