<?php get_header(); ?>
<main id="container" class="page">
	<section class="page-inner">
		<div id="blog-container">
			<div class="inner flex">
				<article class="blog-main">
					<div class="single-post">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="post-item">
									<div class="blog-meta">
										<?php the_category(); ?>
										<p class="date"><?php echo get_post_time('Y.m.d'); ?> 更新</p>
									</div>
									<!--- #post-meta --->
									<span class="blog-title">
										<?php the_title(); ?>
									</span>

									<div class="post-content">
										<?php the_content(); ?>
									</div>
								</div>
								<!--"post-item-->
							<?php endwhile; ?>
						<?php else : ?>
							<h3>記事がありません</h3>
							<p>表示する記事はありませんでした。</p>
						<?php endif; ?>
					</div>

					<div class="pagination raleway">
						<div class="prev">
							<?php previous_post_link('%link', '<i class="fas fa-caret-left"></i>前へ'); ?>
						</div>
						<div class="next">
							<?php next_post_link('%link', '次へ<i class="fas fa-caret-right"></i>'); ?>
						</div>
					</div>
					<!----------- .pagination ------------>
				</article>
				<!--- blog-main --->
				<?php get_sidebar(); ?>
			</div>
			<!---- blog-container" ----->
		</div>
	</section>
	<!---- page-inner ---->
</main>
<!--------------- #container ----------------->

<?php get_footer(); ?>
