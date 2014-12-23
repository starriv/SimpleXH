<?php
/**
 * 这是 Typecho 0.9 系统的一套默认皮肤
 * 
 * @package Typecho SimpleXH Theme 
 * @author starriv
 * @version 1.0.0
 * @link http://starriv.com
 */
 
 
 
 if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
 
 
 
 <div class="am-g">
  <div class="am-u-lg-12">
  	<!--
   <div id="index-post" class="am-animation-slide-right" data-am-scrollspy="{animation: 'fade' delay: 300}"> -->
   	<div id="index-post" class="LightSpeedIn">
   <?php while($this->next()): ?>
  
   <div id="post">
   	<script>
   	</script>
   	<h2 class="post-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>   	
   	<hr data-am-widget="divider" style="" class="am-divider am-divider-default"
/>
   	<div class="am-article-title post-text">
   	<span class="am-article-meta">
<?php $this->excerpt(400, '...')?>

   	</span>

<div id="button">
<button type="button"  id="check" class="am-btn am-btn-primary btn-loading-example"><a href="<?php $this->permalink() ?>">查看原文</a></button></div>
   	</div>
  
  </div>
   <?php endwhile; ?>

   <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>

   </div>
  </div>
</div>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>