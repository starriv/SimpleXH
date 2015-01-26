
<div id="sidebar-right" class="am-offcanvas" style="float: right;">
  <div id="sidebar_right" class="am-offcanvas-bar am-offcanvas-bar-flip">
    <div class="am-offcanvas-content am-animation-slide-right">
<?PHP
include("conf.php");
?>
<div class="am-panel am-panel-default am-panel-primary">
     <div id="github-info">
     	<p>Github</p>
     </div>
     <div id="github">
     	
      <div class="github-widget-user" data-user="<?php
      echo GITHUB;
      ?>"></div>
      
      </div>
      
      <div id="weibo-info">
     	<p>Weibo</p>
     </div>
     
     <div id="weibo">
     	<?php
      echo WEIBO;
      ?>
    </div>

    </div>
  </div>
</div>
</div>