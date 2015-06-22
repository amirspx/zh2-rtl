<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	
		<div class="post">

			<?php the_content('&raquo; More &raquo;'); ?>

		</div> <!-- /end .post -->

		<br/>
		
		<!-- <div class="all_posts"><a href="/">بازگشت</a>-->
		<!--</div> -->
		

		<?php endwhile; ?>

		<?php else : ?>

		<h2 class="center">پیدا نشد!</h2>
		<p class="center">ظاهراً به کاهدان زده‌اید! اینجا چیزی که می‌خواهید پیدا نمی‌شود.</p>

		<?php endif; ?>

<?php get_footer(); ?>
