<?php if(!defined( '__TYPECHO_ROOT_DIR__'))exit;?>
<!DOCTYPE HTML>
<html class="no-js" lang="en">
    <head>
        <title><?php $this->archiveTitle(array('category'=>_t(' %s '),'search'=>_t(' %s '),'tag'=>_t(' %s '),'author'=>_t(' %s ')),'',' - ');?><?php $this->options->title();?></title>
        <meta charset="utf-8">
        <!-- dns prefetch -->
        <meta http-equiv="x-dns-prefetch-control" content="on">

        <!-- Meta & Info -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1, user-scalable=no">
        <meta name="author" content="<?php $this->options->title(); ?>">
        <meta name="description" itemprop="description" content="<?php $this->options->description(); ?>">
        <meta name="keywords" content="<?php $this->options->keywords(); ?>">
        <!-- favicon -->
        <link rel="shortcut icon" href="<?php empty($this->options->favicon)?$this->options->themeUrl('images/favicon.png'):$this->options->favicon; ?>">
        <link rel="icon" sizes="192x192" href="<?php empty($this->options->favicon)?$this->options->themeUrl('images/favicon.png'):$this->options->favicon; ?>">
        <link rel="apple-touch-icon" href="<?php empty($this->options->favicon)?$this->options->themeUrl('images/favicon.png'):$this->options->favicon; ?>">
		
        <!--iOS -->
        <meta name="apple-mobile-web-app-title" content="Title">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="480">
		
        <!-- The Open Graph protocol -->
        <?php if($this->is('post')||$this->is('page')): ?>
        <meta property="og:url" content="<?php $this->permalink(); ?>" />
        <meta property="og:type" content="blog" />
        <meta property="og:release_date" content="<?php $this->date('Y-m-j'); ?>" />
        <meta property="og:title" content="<?php $this->options->title(); ?>" />
        <meta property="og:image" content="<?php echo showThumb($this,true); ?>" />
        <meta property="og:description" content="<?php $this->description() ?>" />
        <meta property="og:author" content="<?php $this->author(); ?>" />
        <meta property="article:published_time" content="<?php $this->date('Y-m-j'); ?>" />
        <meta property="article:modified_time" content="<?php $this->date('Y-m-j'); ?>" />
        <?php endif; ?>
	
        <link href="https://cdn.bootcss.com/pace/1.0.2/themes/black/pace-theme-minimal.min.css" rel="stylesheet">
        <script> paceOptions = { elements: {selectors: ['#thend']}};</script>
        <script src="https://cdn.bootcss.com/pace/1.0.2/pace.min.js"></script>	
		
		
        <!-- animation --> 
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/animate.css'); ?>" />
        <!-- bootstrap --> 
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/extralayers.css'); ?>" />
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/settings.css'); ?>" />
        <!-- magnific popup -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/magnific-popup.css'); ?>" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/owl.carousel.css'); ?>" />
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/owl.transitions.css'); ?>" />
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/full-slider.css'); ?>" />
        <!-- text animation -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/text-effect.css'); ?>" />
        <!-- hamburger menu  -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/menu-hamburger.css'); ?>" />
        <!-- common -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>" />
        <!-- responsive -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/responsive.css'); ?>" />
        <!--[if IE]>
            <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style-ie.css'); ?>" />
        <![endif]-->
        <!--[if IE]>
            <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- navigation panel -->
        <nav class="navbar navbar-default navbar-fixed-top nav-transparent overlay-nav sticky-nav nav-border-bottom <?php if (($this->is('index')) && ($this->_currentPage == 1) && !($this->options->Homeflag=='3')): ?><?php //echo 'nav-white'; /*使用深色背景图时去掉注释 */?><?php else: ?>bg-white<?php endif; ?>" role="navigation">
            <div class="container">
                <div class="row">
                    <!-- logo -->
                    <div class="col-md-2 pull-left"><a class="logo-light" href="<?php $this->options ->siteUrl(); ?>"><img alt="" src="<?php echo empty($this->options->logoUrl)?$this->options->themeUrl.'/images/logo.png':$this->options->logoUrl; ?>" class="logo" /></a><a class="logo-dark" href="<?php $this->options ->siteUrl(); ?>"><img alt="" src="<?php echo empty($this->options->logoUrl)?$this->options->themeUrl.'/images/logo.png':$this->options->logoUrl; ?>" class="logo" /></a></div>
                    <!-- end logo -->
                    <!-- search and cart  -->
                    <div class="col-md-2 no-padding-left search-cart-header pull-right">
                        <div id="top-search">
                            <!-- nav search -->
                            <a href="#search-header" class="header-search-form"><i class="fa fa-search search-button"></i></a>
                            <!-- end nav search -->
                        </div>
                        <!-- search input-->
                        <form id="search-header" method="post" action="<?php $this->options ->siteUrl(); ?>" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fa fa-search close-search search-button"></button>
                                <input type="text" name="s" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                        <!-- end search input -->
                        <div class="top-cart">
                            <!-- nav shopping bag -->
                            <a href="#" class="shopping-cart">
                                <i class="fa fa-cogs"></i>
                                <div class="subtitle">用户中心</div>
                            </a>
                            <!-- end nav shopping bag -->
                            <!-- shopping bag content -->
                            <div class="cart-content">
                                <p class="buttons">
                                    <?php if($this->user->hasLogin()): ?><a href="<?php $this->options->adminUrl(); ?>" class="btn btn-very-small-white margin-seven btn-block"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a><a href="<?php $this->options->logoutUrl(); ?>" class="btn btn-very-small-white margin-seven btn-block"><?php _e('退出'); ?></a><?php else: ?><a href="<?php $this->options->adminUrl('login.php'); ?>" class="btn btn-very-small-white margin-seven btn-block"><?php _e('登录'); ?></a><?php endif; ?>
                                </p>
                            </div>
                            <!-- end shopping bag content -->
                        </div>
                    </div>
                    <!-- end search and cart  -->
                    <!-- toggle navigation -->
                    <div class="navbar-header col-sm-8 col-xs-2 pull-right">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <!-- toggle navigation end -->
                    <!-- main menu -->
                    <div class="col-md-8 no-padding-right accordion-menu text-right">
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="<?php $this->options ->siteUrl(); ?>" class="inner-link  <?php if ($this->is('index')) echo 'active'; ?>">首页</a> </li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?><li><a href="<?php $pages->permalink(); ?>"  class="inner-link <?php if ($this->is('page') && ($this->slug == $pages->slug)) echo 'active'; ?>"><?php $pages->title(); ?></a></li>
								<?php endwhile; ?>
								<!-- menu item -->
                                <li class="dropdown panel simple-dropdown simple-dropdown-menu menu-first-level">
                                    <a href="#category" data-redirect-url="#" class="dropdown-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-hover="dropdown">分类</a>
                                    <a href="#category" class="dropdown-toggle collapsed megamenu-right-icon" data-toggle="collapse"><i class="fa fa-angle-down megamenu-mobile-icon"></i></a>
                                    <!-- sub menu -->
                                    <ul id="category" class="dropdown-menu panel-collapse collapse" role="menu">
                                        <?php $this->widget('Widget_Metas_Category_List')->to($cats); ?><?php while ($cats->next()): ?><li class="sub-menu"><a href="<?php $cats->permalink()?>"><?php $cats->name()?><i class="fa fa-angle-right"></i></a></li>
										<?php endwhile; ?>
                                    </ul>
                                    <!-- end sub menu -->
                                </li>
                                <!-- end menu item -->
                            </ul>
						</div>
                    </div>
                    <!-- end main menu -->
                </div>
            </div>
        </nav>
        <!--end navigation panel --> 