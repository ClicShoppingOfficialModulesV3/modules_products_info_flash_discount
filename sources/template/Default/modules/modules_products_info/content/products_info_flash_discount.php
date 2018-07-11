<?php
  use ClicShopping\OM\CLICSHOPPING;
?>
<div class="<?php echo $text_position; ?> col-md-<?php echo $content_width; ?>">
  <div class="separator"></div>
  <div style="float: <?php echo MODULE_PRODUCTS_INFO_FLASH_DISCOUNT_POSITION; ?>;">
    <div class="moduleProductsInfoFlashDiscount">
      <span class="moduleProductsInfoFlashDiscount"><?php echo CLICSHOPPING::getDef('text_flash_discount') . '<br/>' . $products_flash_discount; ?></span>
    </div>
  </div>
</div>