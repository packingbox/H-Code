<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
        <!-- head section -->
        <section class="content-top-margin page-title page-title-small border-bottom-light border-top-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="black-text"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end head section -->

        <!-- content section -->
<?php if (!empty($this->options->archive_flag) && ('three'==$this->options->archive_flag)): ?>
        <section id="features" class="wow fadeIn">
            <div class="container" >
                <div class="row blog-masonry blog-masonry-3col no-transition">
					<?php if($this->have()):?><?php $i=1;?><?php while($this->next()): ?>
					<div class="col-md-4 col-sm-6 col-xs-6 blog-listing wow"<?php if($i<=3){
						$j=$i*300; echo ' data-wow-duration="'.$j.'ms"';} $i=$i+1;?> >
                        <div class="blog-image"><a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,true); ?>" alt=""/></a></div>
                        <div class="blog-date"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布| <?php $this->date('Y-m-d'); ?></div>
                        <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(26); ?></a></div>
                        <div class="blog-short-description"><?php $this->excerpt(90, '...'); ?></div>
                        <div class="separator-line bg-black no-margin-lr"></div>
                        <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                    </div><?php endwhile; ?><?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow">
                        <!-- pagination -->
						<?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->archive_flag) && ('four'==$this->options->archive_flag)): ?>
        <section id="features" class="wow fadeIn">
            <div class="container">
                <div class="row blog-masonry blog-masonry-4col no-transition">
                    <?php if($this->have()):?><?php while($this->next()): ?><!-- post item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 blog-listing">
                        <div class="blog-image"><a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,true); ?>" alt=""/></a></div>
                        <div class="blog-details">
                            <div class="blog-date"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布| <?php $this->date('Y-m-d'); ?></div>
                            <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(22); ?></a></div>
                            <div class="blog-short-description"><?php $this->excerpt(90, '...'); ?></div>
                            <div class="separator-line bg-black no-margin-lr"></div>
                            <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                        </div>
                    </div>
                    <!-- end post item --><?php endwhile; ?><?php endif; ?>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow">
                        <!-- pagination -->
                        <?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->archive_flag) && ('full'==$this->options->archive_flag)): ?>
        <section id="features" class="wow fadeIn">
            <div class="container-fuild">
                <div class="row blog-masonry blog-masonry-4col no-transition no-margin">
                    <?php if($this->have()):?><?php while($this->next()): ?><!-- post item -->
                    <div class="col-md-3 col-sm-6 col-xs-6 blog-listing">
                        <div class="blog-image"><a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,true); ?>" alt=""/></a></div>
                        <div class="blog-details">
                            <div class="blog-date"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布| <?php $this->date('Y-m-d'); ?></div>
                            <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(22); ?></a></div>
                            <div class="blog-short-description"><?php $this->excerpt(90, '...'); ?></div>
                            <div class="separator-line bg-black no-margin-lr"></div>
                            <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                        </div>
                    </div>
                    <!-- end post item --><?php endwhile; ?><?php endif; ?>
                </div>
                <div class="row no-margin">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <!-- pagination -->
                        <?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->archive_flag) && ('right'==$this->options->archive_flag)): ?>
		<section id="features" class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- content  -->
                    <div class="col-md-8 col-sm-8">
                        <?php if($this->have()):?><?php while($this->next()): ?><!-- post item -->
                        <div class="blog-listing blog-listing-classic wow fadeIn">
                            <!-- post image -->
                            <div class="blog-image"><a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,true); ?>" alt=""/></a></div>
                            <!-- end post image -->
                            <div class="blog-details">
                                <div class="blog-date"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布| <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                                <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(55); ?></a></div>
                                <div><?php $this->excerpt(200, '...'); ?></div>
                                <div class="separator-line bg-black no-margin-lr margin-four"></div>
                                <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                                <a class="highlight-button btn btn-small xs-no-margin-bottom" href="<?php $this->permalink(); ?>">继续浏览</a>
                            </div>
                        </div>
                        <!-- end post item --><?php endwhile; ?><?php endif; ?>
                    </div>
                    <!-- end content  -->
					<!-- sidebar  -->
					<div class="col-md-3 col-sm-4 col-md-offset-1 xs-margin-top-ten sidebar">
                    <?php $this->need('sidebar.php'); ?>
					</div>
                    <!-- end sidebar  -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow">
                        <!-- pagination -->
						<?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php elseif (!empty($this->options->archive_flag) && ('left'==$this->options->archive_flag)): ?>
		<section id="features" class="wow fadeIn">
            <div class="container">
                <div class="row">
					<!-- sidebar  -->
                    <div class="col-md-3 col-sm-4 sidebar">
                    <?php $this->need('sidebar.php'); ?>
					</div>
                    <!-- end sidebar  -->
                    <!-- content  -->
                    <div class="col-md-8 col-sm-8 col-md-offset-1 ">
                        <?php if($this->have()):?><?php while($this->next()): ?><!-- post item -->
                        <div class="blog-listing blog-listing-classic wow fadeIn">
                            <!-- post image -->
                            <div class="blog-image"><a href="<?php $this->permalink(); ?>"><img src="<?php echo showThumb($this,true); ?>" alt=""/></a></div>
                            <!-- end post image -->
                            <div class="blog-details">
                                <div class="blog-date"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布| <?php $this->date('Y-m-d'); ?> | <?php $this->category(','); ?> </div>
                                <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(55); ?></a></div>
                                <div><?php $this->excerpt(200, '...'); ?></div>
                                <div class="separator-line bg-black no-margin-lr margin-four"></div>
                                <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                                <a class="highlight-button btn btn-small xs-no-margin-bottom" href="<?php $this->permalink(); ?>">继续浏览</a>
                            </div>
                        </div>
                        <!-- end post item --><?php endwhile; ?><?php endif; ?>
                    </div>
                    <!-- end content  -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow">
                        <!-- pagination -->
						<?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php else:?>
        <section id="features" class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- content  -->
                    <?php if($this->have()):?><?php while($this->next()): ?><!-- post item -->
                    <div class="blog-listing blog-listing-classic blog-listing-full wow fadeIn">
                        <div class="col-md-2 col-sm-2 col-xs-5 clearfix text-center no-padding-right xs-padding-right">
							<div class="blog-date no-padding-top"><?php $this->category(' '); ?></div>
                            <!-- post by -->
                            <div class="blog-date-right no-padding-bottom"><?php $this->date('Y-m-d'); ?></div>							
                            <div class="blog-date-right"><a href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a> 发布</div>
                            <!-- end post by -->
                            <div class="separator-line bg-black no-margin-lr no-margin xs-margin-bottom-ten"></div>
                        </div>
                        <div class="col-md-10 col-sm-10 col-xs-12 no-padding-left xs-padding-left">
                            <div class="blog-details">
                                <div class="blog-title"><a href="<?php $this->permalink(); ?>"><?php $this->title(60); ?></a></div>
                                <div><a href="<?php $this->permalink(); ?>" class="blog-like"><i class="fa fa-eye"></i> <?php get_post_view($this); ?> 浏览</a><a href="<?php $this->permalink(); ?>#respond" class="comment"><i class="fa fa-comment-o"></i> <?php $this->commentsNum('0', '1', '%d'); ?> 回复</a></div>
                                <div class="separator-line bg-black no-margin-lr margin-four"></div>
                                <div><?php $this->excerpt(200, '...'); ?></div>
                                <a class="highlight-button-black-border btn btn-medium margin-five no-margin-bottom" href="blog-single-full-width.html">继续浏览</a>
                            </div>
                        </div>
                    </div>
                    <!-- end post item --><?php endwhile; ?><?php endif; ?>

                    <!-- end content  -->
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                        <!-- pagination -->
                        <?php $this->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
                        <!-- end pagination -->
                    </div>
                </div>
            </div>
        </section>
<?php endif; ?>
        <!-- end content section -->
<?php $this->need('footer.php'); ?>