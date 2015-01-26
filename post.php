<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('post-header.php'); ?>

<div class="am-g">   
<article class="article-bd page">
    <div class="am-u-lg-12 am-u-md-12 am-u-sm-12 Breadcrumb">
    	<ol class="am-breadcrumb">
  <li><a href="<?php $this->options->siteUrl(); ?>" class="am-icon-home">首页</a></li>
  <li><?php $this->category(','); ?></li>
  <li class="am-active">内容</li>
			</ol>
<p class="am-article-hd page-info">
<span class="am-icon-calendar"> </span>&nbsp;<?php $this->date('F j, Y'); ?>  <?php $this->category(','); ?>. By <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a>
   	</p>
	</div>


<hr data-am-widget="divider" style="" class="am-divider am-divider-default"
/>
   	<div class="am-article-bd page-text" id="page-text">
   		<p>		
   			<?php $this->content(); ?>
   		</p>
   	</div> 	
 <hr data-am-widget="divider" style="" class="am-divider am-divider-default"/>
 <div id="posttag">
 	文章关键词:<?php $this->tags('', true, ''); ?>
 </div>   	  
   </article>

</div>
<div class="comments">
	<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>
