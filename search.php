<?php
/**
 * 搜索页面
 *
 *
 * @package custom
 */
?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="am-g">
  <div class="am-u-sm-12"></div>
  <div class="am-u-sm-12"></div>

	<div id="search">
		<div class="am-alert">
  以下为您展示的是包含您输入的搜索的结果，如果列表为空，表示不存在
		</div>
		<?php while($this->next()): ?>
 
 		
 		<ul class="am-list am-list-static am-list-border search">
  		<li id="search-info"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>  			<hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
</span>&nbsp;</a>
  			<span><?php $this->date('F j, Y'); ?>&nbsp;&nbsp;On &nbsp;&nbsp;<?php $this->category(','); ?></span>
  		</li>
		
		</ul>

 		 <?php endwhile; ?>
 		  		<?php $this->pageNav(); ?>					
	</div>
</div>
</div>
</div>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>