<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://www.aihouyuan.com}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Keeping 1.0
 */
?>
<?php 
get_header();?><!-- 引进头部 -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?> <!-- 文章循环开始 -->
		<div class="article">
		<div class="articlebody">
			<h2 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
				<!-- Post Content -->
				<?php the_content('阅读全文...'); ?>
			</div><!-- articlebody end -->
				<div class="articlebar">
					<span class="date">发布：<?php the_time('Y年n月j日') ?></span>
					<span class="review">12次阅读</span>
					<span class="like">5次</span>
					<span class="discuss"><?php comments_popup_link('0 条评论', '1 条评论', '% 条评论', '', '评论已关闭'); ?></span>
					<span class="tags"><?php the_tags('标签：', ', ', ''); ?></span>
				</div>
		</div><!-- article end -->
			<?php endwhile; ?>
			<?php else : ?>
			    输出找不到文章提示
			<?php endif; ?><!-- 文章循环结束 -->
<!-- 		<span>3</span>
			<span>4</span>
			<span>5</span>
			<span>前一页</span>
			<span>后一页</span> -->
		<!-- 分页 -->
		<p class="page"><?php previous_posts_link('&lt;&lt; 上页', 0); ?> 
			<span class="float right"><?php next_posts_link('下页 &gt;&gt;', 0); ?></span>
		</p>

<?php get_footer(); ?><!-- 引进footer -->