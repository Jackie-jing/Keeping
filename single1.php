<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<div id="wrap">
		<header>
			<section class="logo">
				<img id="logoimg" src="images/logo.png" alt="logo">
				<p style="color:#f1f1f1">我的精神之源</p>
			</section>
			<nav>
				<ul class="nav">
					<li>首页</li>
					<li>技术</li>
					<li>静静</li>
					<li>文章</li>
					<li>诗歌</li>
					<li>关于我们</li>
				</ul>
			</nav>
		</header>
		<div class="article">
		<div class="articlebody">
			<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p>wordpress主题开发过程中有些模板文件是必须的，有些事非必须的。每一种模板文件所对应的页面内省wordpress已经有一套总体的结构。现在整理如下。</p>
			<p><br /><br /><br />一.必需类

				必须类即是主题必须包含的文件，只有两大类style.css和index.php。

				a/ style.css :所有的样式以及主题说明文件。

				b/ index.php：通用文件，比如首页、分类页、存档页、文章页、页面、404、搜索结果页面、附件页<br /><br /><br />

				二 .非必需类

				a/  home.php 首页

				b/ 404.php 404页面

				c/ search.php 搜索结果页面

				d/ category.php 分类页

				e/ tag.php 标签页

				f/ author.php 作者存档页

				g/ date.php 时间存档页

				h/ archive.php 标签页、分类页、自定义分类页和存档页

				i/ attachment.php 附件页

				j/ single.php 文章页、通用文件附件页

				k/ page.php 页面

				l/ function.php 主题函数文件

				m/ taxonomy.php 自定义分类页

				h/ comment.php</p>
			</div><!-- articlebody end -->
				<div class="articlebar">
					<span class="date">2016年8月26日</span>
					<span class="review">12次阅读</span>
					<span class="like">5次</span>
					<span class="tags">wordpress 安装 技术</span>
				</div>
		</div><!-- article end -->
		<div class="page">
			<span>前一页</span>
			<span>后一页</span>
		</div>
		<div class="comment">
			<h2>发表评论</h2>
			<br>
			<textarea class="commentText" placeholder="shuru">
zheshiyige
			</textarea>
			<br>
			<input type="submit">
		</div>
		<footer>
			<span>
				Copyright © 2016 后园 All Rights Reserved
				Powered by WordPress 4.4.2 | Author by Jing
			</span>
		</footer>
	</div>
</body>
</html>