<script type="text/javascript">
	featuredcontentglider.init({
		gliderid: "glidercontent",
		contentclass: "glidecontent",
		togglerid: "togglebox",
		remotecontent: "", 
		selected: 0,
		persiststate: true,
		speed: 500,
		direction: "leftright", 
		autorotate: true, 
		autorotateconfig: [10000, 1] //if auto rotate enabled, set [milliseconds_btw_rotations, cycles_before_stopping]
	})
</script>
<div id="glidercontent" class="glidecontentwrapper">
	<div id="togglebox" class="glidecontenttoggler"> 
		<a href="#" class="prev"></a> 
		<a href="#" class="next"></a>
	</div>
	<?php 
		$my_query = new WP_Query('category_name=glidecat&showposts=3');
		while ($my_query->have_posts()) : $my_query->the_post();$do_not_duplicate = $post->ID;
	?>
	<div class="glidecontent">
		<h2><?php the_title(); ?></h2>
		<?php the_content();  ?>
	</div><!-- glidecontent FIM -->
	<?php endwhile; ?>
</div><!-- glidercontent FIM -->
<div class="glidebot"></div>
<div class="clear"></div>