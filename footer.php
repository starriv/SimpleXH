<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id="backtop" data-am-smooth-scroll class="am-btn am-btn-success"><span class="am-icon-chevron-up am-icon-lg"></span></div>
<footer class="footer" role="contentinfo" id="footer-sns">
	<span class="am-icon-twitter" data-am-popover="{content: '@Starrivs', trigger: 'hover'}"> </span>
	<span class="am-icon-envelope" data-am-popover="{content: 'starriv.993@gmail.com', trigger: 'hover'}"></span>
		<a href="<?php $this->options->feedUrl(); ?>"><span class="am-icon-rss"></span></a>
		
	</span>
	<p class="footer">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.All Rights Reserved.&nbsp;/  THEME Design and Coding BY <a href="http://weibo.com">Starriv</a></p> 
</footer>
<?php $this->footer(); ?>
<script>$.AMUI.progress.start(0.4);</script>
<script src="<?php $this->options->themeUrl('js/caozuo.js'); ?>" type="text/javascript" charset="utf-8"></script>
<script src="<?php $this->options->themeUrl('assets/js/amazeui.min.js'); ?>" type="text/javascript" charset="utf-8"></script>
<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('js/jquery-github-user-widget.js'); ?>" type="text/javascript" charset="utf-8"></script>
</body>
</html>
