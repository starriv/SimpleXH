<?PHP
include("conf.php");
?>
<div id="sidebar-left" class="am-offcanvas">
  <div class="am-offcanvas-bar">
    <nav class="open am-animation-slide-left">
    <div id="photo">
      <img src="<?php
      $this->options->themeUrl('img/head.jpg');
      ?>">
    </div>
   
    <div id="author-info">
		<span id="starriv">
			<?php
      echo NAME;
      ?>
		</span>
      <a href="mailto:<?php echo MAIL;?>">
      <?php
      echo MAIL;
      ?></a>
    </div>
    <div id= "nav" class="am-offcanvas-content">
    <div id="list">
   <a href="<?php $this->options->siteUrl(); ?>"> <span id="ico" class="am-icon-home"></span>  &nbsp;&nbsp;&nbsp;主页</a>
   <?php 
  foreach($mainlinks as $x=>$x_value) {
  echo '<a href="';
  echo $this->options->siteUrl();
  echo $x_value;
  echo '"><span id="ico" class="am-icon-angle-right"></span>  &nbsp;&nbsp;&nbsp;'.$x;
  echo "</a>";
}?>
  <div class="am-dropdown am-dropdown-up" data-am-dropdown>
  <button class="am-btn am-btn-danger am-dropdown-toggle shangla" data-am-dropdown-toggle><span id="ico" class="am-icon-angle-right"></span>&nbsp;&nbsp;分类&nbsp;&nbsp;<span class="am-icon-caret-up"></span></button> <ul class="am-dropdown-content shangla">
  <?php 
  foreach($categorylinks as $x=>$x_value) {
  echo '<li class="am-active"><a href="';
  echo $this->options->siteUrl();
  echo $x_value;
  echo '">'.$x;
  echo "</a></li>";
}
  ?>
  </ul>
		</div>
      </div>
    </div>
        		<form class="form" id="search-form">
      <input type="text" name="s" class="search-input" id="search" required="true" placeholder="Search...">
			</form>
        </nav>

              <div id="menu" class=""><span class="meuns">Menu</span></span></div>
    </div> 
  </div>
</div>
