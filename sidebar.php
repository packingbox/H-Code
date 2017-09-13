<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?><!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt"><?php _e('分类'); ?></h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="category-list">
									<?php $this->widget('Widget_Metas_Category_List')->to($cats);?>
									<?php while ($cats->next()): ?><li><a href="<?php $cats->permalink()?>"><?php $cats->name()?><span><?php $cats->count()?></span></a></li><?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  --><?php endif; ?>
                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecent', $this->options->sidebarBlock)): ?><!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt">最新文章</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="widget-posts">
                                    <?php $this->widget('Widget_Contents_Post_Recent','pageSize=8')->to($post); ?><?php while($post->next()): ?>
									<li class="clearfix">
                                        <div class="widget-posts-details"><a href="<?php $post->permalink(); ?>"><?php $post->title(22,'...'); ?></a> <?php $post->author(); ?> - <?php $post->date('m-d'); ?></div>
                                    </li><?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  --><?php endif; ?>
                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowTags', $this->options->sidebarBlock)): ?><!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt"><?php _e('标签云'); ?></h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body tags">
								<?php $this->widget('Widget_Metas_Tag_Cloud', 'ignoreZeroCount=1&limit=10')->to($tags); ?>
								<?php while($tags->next()): ?><a href="<?php $tags->permalink(); ?>"><?php $tags->name(); ?></a><?php endwhile; ?>
                            </div>
                        </div>
                        <!-- end widget  --><?php endif; ?>
                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowComments', $this->options->sidebarBlock)): ?><!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt"><?php _e('最近回复'); ?></h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="widget-posts">
									<?php $this->widget('Widget_Comments_Recent','pageSize=6')->to($comments); ?>
									<?php while($comments->next()): ?><li class="clearfix">
                                        <div class="widget-posts-details"><a href="<?php $comments->permalink(); ?>"><?php $comments->excerpt(22, '...'); ?></a> <?php $comments->author(false); ?> - <?php $comments->date('m-d'); ?></div>
                                    </li><?php endwhile; ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  --><?php endif; ?>
                        <!-- widget  -->
                        <div class="widget" style="display:none;">
                            <h5 class="widget-title font-alt">GG</h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <p></p>
                            </div>
                        </div>
                        <!-- end widget  -->
                        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowGuidang', $this->options->sidebarBlock)): ?><!-- widget  -->
                        <div class="widget">
                            <h5 class="widget-title font-alt"><?php _e('归档'); ?></h5>
                            <div class="thin-separator-line bg-dark-gray no-margin-lr"></div>
                            <div class="widget-body">
                                <ul class="category-list">
                                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y-m')->parse('<li><a href="{permalink}">{date}<span>{count}</span></a></li>'); ?>
                                </ul>
                            </div>
                        </div>
                        <!-- end widget  --><?php endif; ?>
