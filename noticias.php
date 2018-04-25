<section id="ultima_noticia" class="b" 
	style="background-image:url(<?php echo site_url()."/"; ?>wp-content/uploads/2016/04/cidade.png),url(<?php echo get_template_directory_uri(); ?>/assets/dash2.png);">
	<div class="wrap">
		<?php 
		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		$query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => $offset, 'order' => 'ASC'));
		if($query->have_posts()=="1"){
			while ( $query->have_posts() ) : $query->the_post();
			$do_not_duplicate = $post->ID;
			echo '
					<p class="b">'.get_the_date().'</p>
					<h1 class="b">'.get_the_title().'</h1>
					<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.substr(get_the_content(), 0, 280).'...</a></p>
					<br/>
					<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">Leia Mais</a></p>
				';
		endwhile; 
		wp_reset_query();   
		}	else {
			echo "<p>Nenhuma notícia encontrada :-(</p>";
		}
		?>
	</div>
</section>
<div id="noticias" class="b">
	<ul class="flex">
		<?php 
			$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		  	$custom_args = array(
		      'post_type' => 'post',
		      'posts_per_page' => 3,
		      'paged' => $paged, 
		      'order' => 'ASC',
		      'post__not_in' => array($do_not_duplicate)
		    );
		    $custom_query = new WP_Query( $custom_args );
		    if($custom_query->have_posts()=="1"){
			    if ( $custom_query->have_posts() ) :
				    while ( $custom_query->have_posts() ) : $custom_query->the_post();
						echo '<li class="flex100 flex">
							<div class="flex30" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
							<div class="flex70">
								<h1 class="b c"><p>'.substr(get_the_title(), 0, 17).'...</p><p>'.get_the_date().'</p></h1>
								<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.substr(get_the_content(), 0, 140).'...</a></p>
								<br/>
								<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">Leia Mais</a></p>
							</div>
						</li>';
					endwhile;
				    wp_reset_postdata();
			    endif;
			} else {
				echo '
					<div class="news-response">
						<p class="b">Não foram encontradas mais notícias. :-(</p>
					</div>
				';
			}
		?>	
	</ul>	
</div>
<?php 
			if (function_exists(custom_pagination)) {
		    	custom_pagination($custom_query->max_num_pages,"",$paged);
		    }
?>

