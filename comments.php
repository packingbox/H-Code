<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php
function threadedComments($comments, $options) {
    $commentClass = 'commentlist';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';

    if ($comments->url) {
        $author = '<a href="' . $comments->url . '" target="_blank"' . ' rel="external nofollow">' . $comments->author . '</a>';
    } else {
        $author = $comments->author;
    }
?>
<?php
    $host = 'https://secure.gravatar.com';
    $url = '/avatar/';
    $size = '50';
    $rating = Helper::options()->commentsAvatarRating;
    $hash = md5(strtolower($comments->mail));
    $avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=';
?>
							<!-- post comment -->
							<div class="blog-comment<?php if ($comments->levels > 0) echo ' clearfix';?>">
                                <a class="comment-avtar"><img src="<?php echo $avatar ?>" alt=""></a>
                                <div class="comment-text overflow-hidden position-relative">
                                    <p class="blog-date no-padding-top"><?php echo $comments->author; ?>, <?php $comments->date('Y-m-d'); ?> <a class="comment-reply-link comment-reply " href="<?php echo substr($comments->permalink, 0, - strlen($comments->theId) - 1) . '?replyTo=' . $comments->coid .'#' . $comments->parameter->respondId . '" rel="nofollow" onclick="return TypechoComment.reply(\'' .$comments->theId . '\', ' . $comments->coid . ');'?>">回复</a></p>
                                    <p><?php $comments->content(); ?></p>
                                </div>
                                <?php if ($comments->children) { ?><?php $comments->threadedComments($options); ?><!-- .children --><?php } ?>
                            </div>
							<!-- end post comment -->
<?php } ?>
						<?php $this->comments()->to($comments); ?>
						<?php if ($comments->have()) : ?>
						<div id="<?php $this->respondId(); ?>" class="blog-comment-main xs-no-padding-top">
                            <h5 class="widget-title">吐槽列表</h5>
							<?php $comments->listComments(array('before' =>  '','after'  =>  '')); ?>
							<div class="col-md-12 col-sm-12 col-xs-12 wow">
							<!-- pagination -->
							<?php $comments->pageNav('<i class="fa fa-arrow-left"></i>', '<i class="fa fa-arrow-right"></i>', 1, '', array('wrapTag' => 'div', 'wrapClass' => 'pagination', 'itemTag' => '', 'textTag' => '', 'currentClass' => 'active', 'prevClass' => 'prev', 'nextClass' => 'next')); ?>
							<!-- end pagination -->
							</div>
						</div>
						<?php endif; ?>
                        <!-- end post comment -->

                        <!-- comment form -->
						<?php if($this->allow('comment')): ?>
                        <div id="addcomment" class="blog-comment-form-main">
                            <h5 class="widget-title margin-five no-margin-top">吐槽一下吧</h5>
							<p class="blog-date no-padding-top">
							<?php if($this->user->hasLogin()): ?><span class="active"><?php $this->user->screenName(); ?></span> 欢迎回来.
							<?php endif; ?><?php $replyId = $comments->request->filter('int')->replyTo;
							echo '<a id="cancel-comment-reply-link" class="comment-reply inner-link" href="' . $comments->parameter->parentContent['permalink'] . '#'. $this->respondId .'" rel="nofollow"' . ($replyId ? '' : ' style="display:none"') . ' onclick="return TypechoComment.cancelReply();">取消回复</a>'; ?></p>
                            <div class="blog-comment-form">
                                <form action="<?php $this->commentUrl() ?>" method="post" role="form">
                                    <?php if(!$this->user->hasLogin()): ?><!-- input -->
                                    <input type="text" name="author" placeholder="昵称 *" value="<?php $this->remember('author'); ?>" required="">
                                    <!-- end input -->
                                    <!-- input  -->
                                    <input type="text" name="mail" placeholder="邮箱 *" value="<?php $this->remember('mail'); ?>" required="">
                                    <!-- end input -->
                                    <!-- input  -->
                                    <input type="text" name="url" placeholder="网址" value="<?php $this->remember('url'); ?>">
                                    <!-- end input -->
									<?php endif; ?>
                                    <!-- textarea  -->
                                    <textarea name="text" placeholder="您的吐槽"></textarea>
                                    <!-- end textarea  -->
                                    <!-- required  -->
                                    <span class="required">*选项为必填</span>
                                    <!-- end required  -->
                                    <!-- button  -->
                                    <input type="submit" value="提交" class="highlight-button-dark btn btn-small no-margin-bottom">
                                    <!-- end button  -->
									<!-- Security -->
									<?php $security = $this->widget('Widget_Security'); ?>
									<input type="hidden" name="_" value="<?php echo $security->getToken($this->request->getReferer())?>"></p>
                                </form>
                            </div>
                        </div>
						<?php else: ?>	
						<div id="addcomment" class="blog-comment-form-main">
                            <h5 class="widget-title margin-five no-margin-top">评论关闭</h5>
                        </div>
						<?php endif; ?>
                        <!-- end comment form -->
