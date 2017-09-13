<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
    <!-- footer -->
        <footer>
            <div class=" bg-gray footer-top">
                <div class="container">
                    <div class="row margin-three">
                    <div class="col-md-6 col-sm-12 sm-text-center">
                        <!-- link -->
                        <ul class="list-inline footer-link text-uppercase">
                            <?php if ($this->options->footlink): ?>
							<?php echo $this->options->footlink; ?>
							<?php else : ?>
							<li><a target="_blank" href="http://typecho.org/">Typecho</a></li>
                            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?><?php while($pages->next()): ?><li><a href="<?php $pages->permalink(); ?>"  class="inner-link"><?php $pages->title(); ?></a></li>
							<?php endwhile; ?><?php endif; ?>
                        </ul>
                        <!-- end link -->
                    </div>
                    <div class="col-md-6 col-sm-12 footer-social text-right sm-text-center">
                        <!-- social media link -->
                        <?php if ($this->options->socialweixin): ?><a class="modal-popup" href="#weixin_foot"><i class="fa fa-weixin"></i></a><?php endif; ?>
						<?php if ($this->options->socialweibo): ?><a target="_blank" rel="external nofollow" href="<?php $this->options->socialweibo(); ?>"><i class="fa fa-weibo"></i></a><?php endif; ?>
                        <?php if ($this->options->socialtwitter): ?><a target="_blank" rel="external nofollow" href="<?php $this->options->socialtwitter(); ?>"><i class="fa fa-twitter"></i></a><?php endif; ?>
						<?php if ($this->options->socialfacebook): ?><a target="_blank" rel="external nofollow" href="<?php $this->options->socialfacebook(); ?>"><i class="fa fa-facebook"></i></a><?php endif; ?>
						<?php if ($this->options->socialrss): ?><a target="_blank" href="<?php if ($this->options->socialrss == 'off'): ?><?php $this->options ->siteUrl(); ?>feed/"><?php else: ?><?php $this->options->socialrss(); ?><?php endif; ?><i class="fa fa-rss"></i></a><?php endif; ?>
						<!-- modal popup -->
							<div id="weixin_foot" class="white-popup-block mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-white text-center modal-popup-main">
                            <span class="slider-subtitle5 black-text no-margin-bottom">微信扫一扫查看</span>
                            <p class="margin-four"><img src="<?php $this->options->socialweixin(); ?>" alt="<?php $this->title() ?>"></p>
                            <a class="highlight-button btn btn-very-small button popup-modal-dismiss no-margin" href="#">关闭</a>
							</div>
						<!-- end modal popup -->
                        <!-- end social media link -->
                    </div>
                </div>
                </div>
            </div>
            <div class="container-fluid bg-dark-gray footer-bottom">
                <div class="container">
                    <div class="row margin-three">
                        <!-- copyright -->
                        <div class="col-md-6 col-sm-6 col-xs-12 copyright text-left letter-spacing-1 xs-text-center xs-margin-bottom-one">
                            &copy; <?php echo date("Y"); ?> <?php $this->options->title();?>. 自豪的采用Typecho驱动。
                        </div>
                        <!-- end copyright -->
                        <!-- logo -->
                        <div class="col-md-6 col-sm-6 col-xs-12 footer-logo text-right xs-text-center">
                            <a href="<?php $this->options ->siteUrl(); ?>"><img src="<?php echo empty($this->options->logoUrl)?$this->options->themeUrl.'/images/logo-light-gray.png':$this->options->logoUrl; ?>" alt=""/></a>
                        </div>
                        <!-- end logo -->
                    </div>
                </div>
            </div>
            <!-- scroll to top --> 
            <a href="javascript:;" class="scrollToTop"><i class="fa fa-angle-up"></i></a> 
            <!-- scroll to top End... --> 
        </footer>
        <!-- end footer -->

        <!-- javascript libraries / javascript files set #1 --> 
        <script type="text/javascript" src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/modernizr.js'); ?>"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/bootstrap.js'); ?>"></script> 
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/bootstrap-hover-dropdown.js'); ?>"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.easing.1.3.js'); ?>"></script> 
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/skrollr.min.js'); ?>"></script>  
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/smooth-scroll.js'); ?>"></script>
         <!-- jquery appear -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.appear.js'); ?>"></script>
        <!-- animation -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/wow.min.js'); ?>"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/page-scroll.js'); ?>"></script>
        <!-- easy piechart-->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.easypiechart.js'); ?>"></script>
        <!-- parallax -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.parallax-1.1.3.js'); ?>"></script>
        <!--portfolio with shorting tab --> 
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.isotope.min.js'); ?>"></script> 
        <!-- owl slider  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/owl.carousel.min.js'); ?>"></script>
        <!-- magnific popup  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.magnific-popup.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/popup-gallery.js'); ?>"></script>
        <!-- text effect  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/text-effect.js'); ?>"></script>
        <!-- revolution slider  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.tools.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.revolution.js'); ?>"></script>
        <!-- counter  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/counter.js'); ?>"></script>
         <!-- countTo -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.countTo.js'); ?>"></script>
        <!-- fit videos  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/jquery.fitvids.js'); ?>"></script>
        <!-- imagesloaded  -->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/imagesloaded.pkgd.min.js'); ?>"></script>
        <!-- hamburger menu-->
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/classie.js'); ?>"></script>
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/hamburger-menu.js'); ?>"></script>
        <!-- setting --> 
        <script type="text/javascript" src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
    <div id="thend" class="row"></div></body>
</html>