<!DOCTYPE html>
<html lang="zh-cn">
<head>
<title>
	<?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?>
</title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><!-- pingback -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有文章" href="<?php echo get_bloginfo('rss2_url'); ?>" /><!-- 订阅 -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - 所有评论" href="<?php bloginfo('comments_rss2_url'); ?>" /><!-- 订阅 -->
	<?php wp_head(); ?>
</head>
<body>
	<div id="wrap">
		<header>
			<section class="logo">
				<img id="logoimg" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="logo">
				<p style="color:#f1f1f1">我的精神之源</p>
			</section>
			<nav>
				<!-- <ul class="nav">
					<li>首页</li>
					<li>技术</li>
					<li>静静</li>
					<li>文章</li>
					<li>诗歌</li>
					<li>关于我们</li>
				</ul> -->
				<ul class="nav">
					<li<?php if (is_home()) { echo ' class="current-cat"';} ?>><a title="Home" href="/">博客主页</a></li>
					<?php
					$currentcategory = '';

					// 以下这行代码用于在导航栏添加分类列表，
					// 如果你不想添加分类到导航中，
					// 请删除 6 - 14 行代码
					if  (is_category() || is_single()) {
					    $catsy = get_the_category();
					    $myCat = $catsy[0]->cat_ID;
					    $currentcategory = '&current_category='.$myCat;
					}
					wp_list_categories('depth=1&title_li=&show_count=0&hide_empty=0&child_of=0'.$currentcategory);

					// 以下这行代码用于在导航栏添加页面列表
					// 如果你不想添加页面到导航中，
					// 请删除16 - 19行代码
					wp_list_pages('depth=1&title_li=&sort_column=menu_order');

					?>
				</ul>
			</nav>
		</header>