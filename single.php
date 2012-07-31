<?php get_header(); ?>
<div id="content">
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="single" id="post-<?php the_ID(); ?>">
		<div class="title">
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<div class="cover">
			<div class="entry">
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<div class="clear"></div>
			</div>
		</div><!-- cover FIM -->
	</div><!-- single FIM -->
	<div class="clear"> </div>
	<?php endwhile; else: ?>
	<?php endif; ?>
</div><!-- content FIM -->
<?php get_footer(); ?>