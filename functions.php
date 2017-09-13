<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

/* 后台设置 */
function themeConfig($form) {
	
	echo '<p style="font-size:14px;" id="use-intro"><span style="display: block;margin-bottom: 10px;    margin-top: 10px;font-size: 16px;">感谢您使用 H-Code 主题</span></p>';
	
	//Favicon
	$favicon = new Typecho_Widget_Helper_Form_Element_Text('favicon', null, null, _t('Favicon 地址'), _t('博客 Favicon 的地址, 默认则使用主题自带'));
    $form->addInput($favicon);
	//Logo
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点Logo地址'), _t('Logo图片URL地址, 推荐218x68, 默认则使用主题自带'));
	$form->addInput($logoUrl->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	//Home
	$Homeflag = new Typecho_Widget_Helper_Form_Element_Radio('Homeflag',
        array(
            '1' => _t('显示首页指定大图'),
            '2' => _t('显示首页随机大图'),
            '3' => _t('关闭首页大图'),
        ),'1', _t('首页大图模式'), _t('随机图使用360壁纸API，不支持强制ssl')
    );
    $form->addInput($Homeflag);

    $bgpic = new Typecho_Widget_Helper_Form_Element_Text('bgpic', null, null, _t('首页背景大图链接'), _t('留空时为主题自带图片'));
    $form->addInput($bgpic);
	
	$bgtext = new Typecho_Widget_Helper_Form_Element_Textarea('bgtext', null, null, _t('首页欢迎语'), _t('使用首页大图模式时的欢迎语，留空时为主题自带<br/>如想开启多行，请使用 &lt;/b&gt; &lt;b class=&quot;main-font text-large font-weight-400&quot;&gt; 分割'));
    $form->addInput($bgtext);
	
	//Index
	$index_flag = new Typecho_Widget_Helper_Form_Element_Radio('index_flag',
        array('three'=>_t('三栏'),'four'=>_t('四栏'),'full'=>_t('四栏全宽'),'right'=>_t('右侧边栏'),'left'=>_t('左侧边栏'),'word'=>_t('全宽无图')),
        'four',
        _t("首页样式选择"),
        _t("默认全宽无图")
        );
    $form->addInput($index_flag);
	//Archive
	$archive_flag = new Typecho_Widget_Helper_Form_Element_Radio('archive_flag',
        array('three'=>_t('三栏'),'four'=>_t('四栏'),'full'=>_t('四栏全宽'),'right'=>_t('右侧边栏'),'left'=>_t('左侧边栏'),'word'=>_t('全宽无图')),
        'four',
        _t("列表页样式选择"),
        _t("默认全宽无图")
        );
    $form->addInput($archive_flag);
	
	//Post
	$sidebarlr = new Typecho_Widget_Helper_Form_Element_Radio('sidebarlr',
        array('left' => _t('左边栏'),
            'right' => _t('右边栏'),
			'full' => _t('无边栏'),
        ),
        'right', _t('文章页侧边栏设置'), _t('默认右边栏'));
    $form->addInput($sidebarlr);
	//Sidebar
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowComments' => _t('最近回复'),
    'ShowGuidang' => _t('归档目录'),
    'ShowRecent' => _t('最新文章'),
	'ShowCategory' => _t('分类目录'),
	'ShowTags' => _t('标签云')),
    array('ShowComments', 'ShowGuidang', 'ShowRecent', 'ShowCategory', 'ShowTags'), _t('侧边栏显示'));    
    $form->addInput($sidebarBlock->multiMode());
		
	//社交
    $socialweixin = new Typecho_Widget_Helper_Form_Element_Text('socialweixin', NULL, NULL, _t('<p style="color:green;">↓↓↓以下为页脚社交图标部分，框内留空则不输出图标</p>微信二维码链接'), _t('在这里输入微信二维码链接,图片格式,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialweixin->addRule('xssCheck', _t('请不要在图片链接中使用特殊字符')));
	$socialweibo = new Typecho_Widget_Helper_Form_Element_Text('socialweibo', NULL, NULL, _t('输入微博链接'), _t('在这里输入微博链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialweibo->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $socialtwitter = new Typecho_Widget_Helper_Form_Element_Text('socialtwitter', NULL, NULL, _t('输入Twitter链接'), _t('在这里输入twitter链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialtwitter->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	$socialfacebook = new Typecho_Widget_Helper_Form_Element_Text('socialfacebook', NULL, NULL, _t('输入Facebook链接'), _t('在这里输入Facebook链接,支持 http:// 或 https:// 或 //'));
    $form->addInput($socialfacebook->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	$socialrss = new Typecho_Widget_Helper_Form_Element_Text('socialrss', NULL, NULL, _t('输入RSS链接'), _t('在这里输入rss链接,留空不输出，站点原版请输入off,支持 http:// 或 https:// 或 //<p style="color:green;"><b>↑↑↑以上为页脚社交图标部分，框内留空则不输出图标</b></p>'));
    $form->addInput($socialrss->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
		
	//图片CDN
    $srcAddress = new Typecho_Widget_Helper_Form_Element_Text('src_add', NULL, NULL, _t('图片CDN替换前地址'), _t('即你的附件存放链接，一般为http://www.yourblog.com/usr/uploads/'));
    $form->addInput($srcAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
    $cdnAddress = new Typecho_Widget_Helper_Form_Element_Text('cdn_add', NULL, NULL, _t('图片CDN替换后地址'), _t('即你的七牛云存储域名，一般为http://yourblog.qiniudn.com/，可能也支持其他有镜像功能的CDN服务'));
    $form->addInput($cdnAddress->addRule('xssCheck', _t('请不要在链接中使用特殊字符')));
	
	$footlink = new Typecho_Widget_Helper_Form_Element_Textarea('footlink', null, null, _t('页脚链接'), _t('页脚处链接列表，可以用来放置友情链接，留空时为页面列表<br/>请按 &lt;li&gt;&lt;a href=&quot;https://go-to.html&quot;&gt;You words&lt;/a&gt;&lt;/li&gt; 格式添加，可以填写多个'));
    $form->addInput($footlink);
    
	

}



/**
 * 解析内容以实现附件加速
 * @access public
 * @param string $content 文章正文
 * @param Widget_Abstract_Contents $obj
 */
function parseContent($obj) {
    $options = Typecho_Widget::widget('Widget_Options');
    if (!empty($options->src_add) && !empty($options->cdn_add)) {
        $obj->content = str_ireplace($options->src_add, $options->cdn_add, $obj->content);
    }
    echo trim($obj->content);
}


/*文章阅读次数统计*/
function get_post_view($archive) {
    $cid = $archive->cid;
    $db = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
        $views = Typecho_Cookie::get('extend_contents_views');
        if (empty($views)) {
            $views = array();
        } else {
            $views = explode(',', $views);
        }
        if (!in_array($cid, $views)) {
            $db->query($db->update('table.contents')->rows(array('views' => (int)$row['views'] + 1))->where('cid = ?', $cid));
            array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
            
        }
    }
    echo $row['views'];
}



//缩略图调用
function showThumb($obj,$link=false){
    preg_match_all( "/<[img|IMG].*?src=[\'|\"](.*?)[\'|\"].*?[\/]?>/", $obj->content, $matches );
    $thumb = '';
    $attach = $obj->attachments(1)->attachment; 
    if (isset($attach->isImage) && $attach->isImage == 1){
        $thumb = $attach->url;   //附件是图片 输出附件
    }elseif(isset($matches[1][0])){
        $thumb = $matches[1][0];  //文章内容中抓到了图片 输出链接
    }
    $thumb = empty($thumb) ? 'https://uploadbeta.com/api/pictures/random/?key=%E7%BE%8E&random='.rand(1,100) : $thumb;
	//空的话输出随机图
	//$thumb = empty($thumb) ? 'https://unsplash.it/800/500/?random' : $thumb;
	//随机图2
	//$thumb = empty($thumb) ? 'https://api.elll.cc/mei' : $thumb;
	//随机图3
	//$thumb = empty($thumb) ? 'https://api.elll.cc/girl/?r=go' : $thumb;
	///* 图3 r=go 302跳转原图 r=img 直接输出图片 r=json 返回360API原json串 r=url 返回原图链接 */
	
    if($link){
        return $thumb;
    }
	else{
		$thumb='<img src="'.$thumb.'">';
		return $thumb;
	}
	
}

?>
