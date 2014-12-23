<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
/**
 * 作者页面
 *
 *
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>
<div class="am-g">
<div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
	
	

<div id="author">
<img src="http://amui.qiniudn.com/bw-2014-06-19.jpg" alt="" style="margin-top: 2em;"/>

<div class="am-panel am-panel-default">
    <div class="am-panel-bd">
    	<span id="author-name">
	<p><?php $this->author(); ?></p>
		</span>
	</div>
</div>

<div class="am-panel am-panel-default">
    <div class="am-panel-bd">
    	<div class="" id="author-sns">
<a href="" class="am-icon-btn am-icon-weibo"></a>
<a href="" class="am-icon-btn am-icon-qq"></a>
<a href="" class="am-icon-btn am-icon-weixin"></a>
<a href="" class="am-icon-btn am-icon-envelope-o"></a>
		</div>
	</div>
</div>

<pre>
	
	
</pre>



<ul class="am-list am-list-static">
  <li></li>
</ul>

</div>
</div>	
</div>
<?php $this->need('sidebar-left.php'); ?>
<?php $this->need('sidebar-right.php'); ?>
<?php $this->need('footer.php'); ?>