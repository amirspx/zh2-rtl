<?php get_header(); ?>

		<h2><?php the_title(); ?></h2>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post">

			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

		</div> <!-- /end .post -->

		<h5><?php edit_post_link('Edit', '<p>', '</p>'); ?></h5>

		<div class="home_bottom">

		</div> <!-- /end .home_bottom -->

		<br/>

		<br/>

		<div class="navigation">
			<?php if (get_adjacent_post(false, '', true)): // if there are older posts ?>
    			<p><strong>نوشته شده در</strong>: <?php the_date('Y٫m٫d'); ?> توسط: <?php $author = get_the_author(); ?> </p>
			<p><strong>قبلی</strong>: <?php previous_post_link('%link'); ?></p>
			<?php endif; ?>

			<?php if (get_adjacent_post(false, '', false)): // if there are newer posts ?>
    			<p><strong>بعدی</strong>: <?php next_post_link('%link'); ?></p>
			<?php endif; ?>
			<div class="all_posts"><a href="/archives">فهرست مطالب</a>
			</div>

		</div> <!-- /end .navigation -->

		<?php endwhile; else: ?>

			<p>ببخشید؛ پست دیگری نیست!</p>

		<?php endif; ?>

		<?php if(comments_open()) : ?>  
			<?php comments_template(); ?>
		<?php else : ?>  
		<?php endif; ?> 

<?php get_footer(); ?>
