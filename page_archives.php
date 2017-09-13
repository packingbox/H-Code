<?php
/**
 * 页面存档
 *
 * @package custom
 */
 if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
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
                        <div class="blog-details-text margin-left-right-one">
                            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);
$year=0; $mon=0; $i=0; $j=0;
$output = '<!-- toggle --><div class="panel-group toggles margin-five">';
while($archives->next()):
$year_tmp = date('Y',$archives->created);
$mon_tmp = date('m',$archives->created);
$y=$year; $m=$mon;
if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></div></div></div><!-- end toggle item -->';
if ($year != $year_tmp && $year > 0) $output .= '';
if ($year != $year_tmp) {$year = $year_tmp;}
if ($mon != $mon_tmp) {
$mon = $mon_tmp;
$index=($i==0)?' id="collapse-one"':'';
$output .= '<!-- toggle item --><div class="panel panel-default"'.$index.'><div role="tablist" id="type1-headingOne" class="panel-heading"><a data-toggle="collapse" data-parent="#collapse-one" href="#l-'. $year . $mon .'" class="collapsed"><h4 class="panel-title">'. $year . '年' . $mon .' 月<span class="pull-right"><i class="fa fa-plus"></i></span></h4></a></div>
<div id="l-'. $year . $mon .'" class="panel-collapse collapse" style="height: 0px;"><div class="panel-body"><ul class="flat-list text-med">'; //输出月份
$i=1;
}
$output .= '<li><time>'.date('d日: ',$archives->created).'</time><a href="'.$archives->permalink .'">'. $archives->title .'</a></li>'; //输出文章日期和标题
endwhile;
$output .= '</div><!-- end toggle  -->';
echo $output;
?>
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
<?php $this->need('footer.php'); ?>