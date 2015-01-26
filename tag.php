<?php
/**
 * 	TAG页面
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
		<?php while($this->next()): ?>
 
 		
 		<ul class="am-list am-list-static am-list-border search">
  		<li id="search-info"><span class="page-link-title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></span></a>  			<hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
</span>&nbsp;</a>
  			<span><?php $this->date('F j, Y'); ?>&nbsp;&nbsp;On &nbsp;&nbsp;<span class="page-link"><?php $this->category(','); ?></span>
  				
  			</span></span>
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