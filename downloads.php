<?php 
	echo '<section class="b section-header">
		<div class="wrap">
			<h1 class="b">'.get_the_title().'</h1>
			<p class="b">'.get_the_content().'</p>
		</div>
	</section>
	<section id="downloads" class="b">
		<div class="wrap">';
	$query = new WP_Query( array( 'post_type' => 'download', 'order' => 'ASC') );
	if($query->have_posts()=="1"){
		echo "<ul>";
		while ( $query->have_posts() ) : $query->the_post();
			echo '<li>
				<h4 class="b"><a href="'.get_field('arquivo').'" title="'.get_the_title().'">'.get_the_title().'</a></h4>
				<p class="b">'.get_the_date().'</p>
			</li>';
		endwhile; 
		wp_reset_query();   
		echo "</ul>";
	} else {
		echo "<p>Nenhum download encontrado</p>";
	}
	echo "</div>
			</section>";
?>