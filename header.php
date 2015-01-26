<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/x-return-top.min.js'); ?>"></script>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
   <?php  //<!-- 使用url函数转换相关路径 --> ?>
    <link rel="stylesheet" href="http://cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php $this->options->themeUrl('assets/css/amazeui.min.css'); ?>"/>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/animator.min.css'); ?>"/>
	
    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <?php //<!-- 通过自有函数输出HTML头部信息 --> ?>
    <?php $this->header(); ?>
</head>
<script type="text/javascript">
	            $.AMUI.progress.start();

</script>
<body>
	<div class="header" style="background-image:url('<?php $this->options->themeUrl('img/header'.rand(1,5).".jpg"); ?>')">
		<div class="am-g">
  		<div class="am-u-lg-12 am-u-sm-12">

<span class="left-cl">	
<button class="am-btn am-btn-success" data-am-offcanvas="{target: '#sidebar-left', effect: 'push'}"><span  class="am-icon-bars am-icon-md header-icon"></span></button>
</span>
<span class="right-cl">
<button class="am-btn am-btn-success" data-am-offcanvas="{target: '#sidebar-right', effect: 'push'}"><span class="am-icon-github am-icon-lg header-icon"></button>
</span>

<div id="header-text">
	<h1 class="title amz-container am-scrollspy-init am-scrollspy-inview am-animation-scale-up"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>	

	<p class="description amz-container am-scrollspy-init am-scrollspy-inview am-animation-scale-up"><?php $this->options->description() ?></p>
</div>


 		 </div>
 		 </div>
 	</div>
