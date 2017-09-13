<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <!-- content section -->
<?php if (!empty($this->options->sidebarlr) && ('full'== $this->options->sidebarlr)): ?>
        <section class="wow fadeIn blog-single-full-width-text">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 blog-image center-col bg-white margin-eight no-margin-bottom">
						<!-- post title  -->
                        <h2 class="blog-details-headline text-black text-center"><?php $this->title(); ?></h2>
                        <!-- end post title  -->
                        <!-- post date and categories  -->
                        <div class="blog-date no-padding-top text-center"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 | <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                        <!-- end date and categories   -->
                        <!-- post details text -->
                        <div class="blog-details-text">
                            <p><?php parseContent($this); ?></p>
                            <div class="blog-date no-padding-top margin-eight no-margin-bottom  text-center">
                                <!-- post tags -->
                                <h5 class="widget-title margin-one no-margin-top">标签</h5>
                                <?php $this->tags(',', true, '<a>没有标签</a>'); ?></div>
                            <!-- end post tags -->
                        </div>
                        <!-- end post details text -->
                        <!-- about author -->
                        <div class="text-center margin-eight no-margin-bottom about-author text-left bg-gray">
                            <div class="blog-comment text-left clearfix no-margin">
                                <!-- author text -->
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top">&copy 著作权归作者所有</p>
                                    <p class="about-author-text no-margin">本文由 <?php $this->options->title();?> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可，本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名。</p>
                                </div>
                                <!-- end author text -->
                            </div>
                        </div>
                        <!-- end about author -->
                        <!-- social icon -->
                        <div class="text-center border-bottom margin-ten padding-four no-margin-top">
							<a href="#weixin" class="btn social-icon social-icon-large button modal-popup" data-tooltip="分享至微信"><i class="fa fa-weixin"></i></a>
							<a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&amp;appkey=<?php $this->options->title();?>/&amp;title=<?php $this->title() ?>&amp;pic=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至新浪微博"><i class="fa fa-weibo"></i></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button" target="_blank" data-tooltip="分享至QQ好友"><i class="fa fa-qq"></i></a>
							<a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;site=<?php $this->options->title();?>/&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至QQ空间"><i class="fa fa-star"></i></a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至谷歌"><i class="fa fa-google-plus"></i></a>
							<!-- modal popup -->
							<div id="weixin" class="white-popup-block mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-white text-center modal-popup-main">
                            <span class="slider-subtitle5 black-text no-margin-bottom">微信扫一扫查看</span>
                            <p class="margin-four"><img src="//pan.baidu.com/share/qrcode?w=500&h=500&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"></p>
                            <a class="highlight-button btn btn-very-small button popup-modal-dismiss no-margin" href="#">关闭</a>
							</div>
							<!-- end modal popup -->
                        </div>
                        <!-- end social icon -->
                        <!-- comments  -->
						<?php $this->need('comments.php'); ?>
						<!-- end comments  -->
                    </div>
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->sidebarlr) && ('right'==$this->options->sidebarlr)): ?>
		<section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- content  -->
                    <div class="col-md-8 col-sm-8">
                        <!-- post title  -->
                        <h2 class="blog-details-headline text-black"><?php $this->title(); ?></h2>
                        <!-- end post title  -->
                        <!-- post date and categories  -->
                        <div class="blog-date no-padding-top"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 | <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                        <!-- end date and categories   -->
                        <!-- post details text -->
                        <div class="blog-details-text">
                            <p><?php $this->content(); ?></p>
                            <div class="blog-date no-padding-top margin-eight no-margin-bottom">
                                <!-- post tags -->
                                <h5 class="widget-title margin-one no-margin-top">标签</h5>
                                <?php $this->tags(',', true, '<a>没有标签</a>'); ?></div>
                            <!-- end post tags -->
                        </div>
                        <!-- end post details text -->
                        <!-- about author -->
                        <div class="text-center margin-eight no-margin-bottom about-author text-left bg-gray">
                            <div class="blog-comment text-left clearfix no-margin">
                                <!-- author text -->
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top">&copy 著作权归作者所有</p>
                                    <p class="about-author-text no-margin">本文由 <?php $this->options->title();?> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可，本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名。</p>
                                </div>
                                <!-- end author text -->
                            </div>
                        </div>
                        <!-- end about author -->
                        <!-- social icon -->
                        <div class="text-center border-bottom margin-ten padding-four no-margin-top">
							<a href="#weixin" class="btn social-icon social-icon-large button modal-popup" data-tooltip="分享至微信"><i class="fa fa-weixin"></i></a>
							<a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&amp;appkey=<?php $this->options->title();?>/&amp;title=<?php $this->title() ?>&amp;pic=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至新浪微博"><i class="fa fa-weibo"></i></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button" target="_blank" data-tooltip="分享至QQ好友"><i class="fa fa-qq"></i></a>
							<a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;site=<?php $this->options->title();?>/&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至QQ空间"><i class="fa fa-star"></i></a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至谷歌"><i class="fa fa-google-plus"></i></a>
							<!-- modal popup -->
							<div id="weixin" class="white-popup-block mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-white text-center modal-popup-main">
                            <span class="slider-subtitle5 black-text no-margin-bottom">微信扫一扫查看</span>
                            <p class="margin-four"><img src="//pan.baidu.com/share/qrcode?w=500&h=500&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"></p>
                            <a class="highlight-button btn btn-very-small button popup-modal-dismiss no-margin" href="#">关闭</a>
							</div>
							<!-- end modal popup -->
                        </div>
                        <!-- end social icon -->
                        <!-- comments  -->
						<?php $this->need('comments.php'); ?>
						<!-- end comments  -->
                    </div>
                    <!-- end content  -->
                    <!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 col-md-offset-1 xs-margin-top-ten sidebar">
                    <?php $this->need('sidebar.php'); ?>
					</div>
                    <!-- end sidebar  -->
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->sidebarlr) && ('left'==$this->options->sidebarlr)): ?>
		<section class="wow fadeIn">
            <div class="container">
                <div class="row">
					<!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 sidebar">
                    <?php $this->need('sidebar.php'); ?>
					</div>
                    <!-- end sidebar  -->
					<!-- content  -->
                    <div class="col-md-8 col-sm-8 col-md-offset-1 ">
                        <!-- post title  -->
                        <h2 class="blog-details-headline text-black"><?php $this->title(); ?></h2>
                        <!-- end post title  -->
                        <!-- post date and categories  -->
                        <div class="blog-date no-padding-top"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 | <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                        <!-- end date and categories   -->
                        <!-- post details text -->
                        <div class="blog-details-text">
                            <p><?php $this->content(); ?></p>
                            <div class="blog-date no-padding-top margin-eight no-margin-bottom">
                                <!-- post tags -->
                                <h5 class="widget-title margin-one no-margin-top">标签</h5>
                                <?php $this->tags(',', true, '<a>没有标签</a>'); ?></div>
                            <!-- end post tags -->
                        </div>
                        <!-- end post details text -->
                        <!-- about author -->
                        <div class="text-center margin-eight no-margin-bottom about-author text-left bg-gray">
                            <div class="blog-comment text-left clearfix no-margin">
                                <!-- author text -->
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top">&copy 著作权归作者所有</p>
                                    <p class="about-author-text no-margin">本文由 <?php $this->options->title();?> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可，本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名。</p>
                                </div>
                                <!-- end author text -->
                            </div>
                        </div>
                        <!-- end about author -->
                        <!-- social icon -->
                        <div class="text-center border-bottom margin-ten padding-four no-margin-top">
							<a href="#weixin" class="btn social-icon social-icon-large button modal-popup" data-tooltip="分享至微信"><i class="fa fa-weixin"></i></a>
							<a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&amp;appkey=<?php $this->options->title();?>/&amp;title=<?php $this->title() ?>&amp;pic=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至新浪微博"><i class="fa fa-weibo"></i></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button" target="_blank" data-tooltip="分享至QQ好友"><i class="fa fa-qq"></i></a>
							<a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;site=<?php $this->options->title();?>/&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至QQ空间"><i class="fa fa-star"></i></a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至谷歌"><i class="fa fa-google-plus"></i></a>
							<!-- modal popup -->
							<div id="weixin" class="white-popup-block mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-white text-center modal-popup-main">
                            <span class="slider-subtitle5 black-text no-margin-bottom">微信扫一扫查看</span>
                            <p class="margin-four"><img src="//pan.baidu.com/share/qrcode?w=500&h=500&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"></p>
                            <a class="highlight-button btn btn-very-small button popup-modal-dismiss no-margin" href="#">关闭</a>
							</div>
							<!-- end modal popup -->
                        </div>
                        <!-- end social icon -->
                        <!-- comments  -->
						<?php $this->need('comments.php'); ?>
						<!-- end comments  -->
                    </div>
                    <!-- end content  -->
                </div>
            </div>
        </section>
<?php else:?>
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- content  -->
                    <div class="col-md-8 col-sm-8">
                        <!-- post title  -->
                        <h2 class="blog-details-headline text-black"><?php $this->title(); ?></h2>
                        <!-- end post title  -->
                        <!-- post date and categories  -->
                        <div class="blog-date no-padding-top"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布 | <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                        <!-- end date and categories   -->
                        <!-- post details text -->
                        <div class="blog-details-text">
                            <p><?php $this->content(); ?></p>
                            <div class="blog-date no-padding-top margin-eight no-margin-bottom">
                                <!-- post tags -->
                                <h5 class="widget-title margin-one no-margin-top">标签</h5>
                                <?php $this->tags(',', true, '<a>没有标签</a>'); ?></div>
                            <!-- end post tags -->
                        </div>
                        <!-- end post details text -->
                        <!-- about author -->
                        <div class="text-center margin-eight no-margin-bottom about-author text-left bg-gray">
                            <div class="blog-comment text-left clearfix no-margin">
                                <!-- author text -->
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top">&copy 著作权归作者所有</p>
                                    <p class="about-author-text no-margin">本文由 <?php $this->options->title();?> 创作，采用 <a href="https://creativecommons.org/licenses/by/4.0/" target="_blank" rel="external nofollow">知识共享署名4.0</a> 国际许可协议进行许可，本站文章除注明转载/出处外，均为本站原创或翻译，转载前请务必署名。</p>
                                </div>
                                <!-- end author text -->
                            </div>
                        </div>
                        <!-- end about author -->
                        <!-- social icon -->
                        <div class="text-center border-bottom margin-ten padding-four no-margin-top">
							<a href="#weixin" class="btn social-icon social-icon-large button modal-popup" data-tooltip="分享至微信"><i class="fa fa-weixin"></i></a>
							<a target="_blank" href="http://service.weibo.com/share/share.php?url=<?php $this->permalink() ?>&amp;appkey=<?php $this->options->title();?>/&amp;title=<?php $this->title() ?>&amp;pic=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至新浪微博"><i class="fa fa-weibo"></i></a>
							<a href="http://connect.qq.com/widget/shareqq/index.html?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button" target="_blank" data-tooltip="分享至QQ好友"><i class="fa fa-qq"></i></a>
							<a target="_blank" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=<?php $this->permalink() ?>&amp;title=<?php $this->title() ?>&amp;site=<?php $this->options->title();?>/&amp;pics=<?php echo showThumb($this,true); ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至QQ空间"><i class="fa fa-star"></i></a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php $this->permalink() ?>" class="btn social-icon social-icon-large button"  data-tooltip="分享至谷歌"><i class="fa fa-google-plus"></i></a>
							<!-- modal popup -->
							<div id="weixin" class="white-popup-block mfp-hide col-lg-3 col-md-6 col-sm-7 col-xs-11 center-col bg-white text-center modal-popup-main">
                            <span class="slider-subtitle5 black-text no-margin-bottom">微信扫一扫查看</span>
                            <p class="margin-four"><img src="//pan.baidu.com/share/qrcode?w=500&h=500&url=<?php $this->permalink() ?>" alt="<?php $this->title() ?>"></p>
                            <a class="highlight-button btn btn-very-small button popup-modal-dismiss no-margin" href="#">关闭</a>
							</div>
							<!-- end modal popup -->
                        </div>
                        <!-- end social icon -->
                        <!-- comments  -->
						<?php $this->need('comments.php'); ?>
						<!-- end comments  -->
                    </div>
                    <!-- end content  -->
                    <!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 col-md-offset-1 xs-margin-top-ten sidebar">
                    <?php $this->need('sidebar.php'); ?>
					</div>
                    <!-- end sidebar  -->
                </div>
            </div>
        </section>
<?php endif; ?>
        <!-- end content section -->
<?php $this->need('footer.php'); ?>