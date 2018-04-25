  <?php get_header(); ?>
  <main>
  	<?php if ( have_posts () ) : while (have_posts()):the_post();?>
  		<?php
  			echo '<section id="breadcrumb" class="b">
				<div class="wrap">
					<ul>
						<li><a href="'.site_url().'" title="'.get_bloginfo('name').'">Início</a></li>
						<li><a href="'.site_url().'/noticias/" title="Notícias">Notícias</a>
						<li>'.get_the_title().'</li>
					</ul>
				</div>
  			</section>
			<section id="noticia" class="b">
				<div class="wrap flex">
					<div class="flex70">
						<div class="section-header">
							<h1 class="flex">
								<span class="flex70">'.get_the_title().'</span>
								<span class="flex30">'.get_the_date().'</span>
							</h1>
							<div class="flex">
								<div class="flex70"><h4 class="b">'.substr(get_the_excerpt(), 0, 70).'...</h4></div>
								<div class="flex30 sharing"><p class="b">Compartilhe:</p>'.do_shortcode("[wp_social_sharing social_options='facebook,twitter' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t' show_icons='1']").'</div>
							</div>
						</div>
						<img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'" class="b" width="100%" />
						<p class="b">'.get_the_content().'</p>
						<div class="sharing"><p class="b">Compartilhe:</p>'.do_shortcode("[wp_social_sharing social_options='facebook,twitter' twitter_username='arjun077' facebook_text='' twitter_text='' icon_order='f,t' show_icons='1']").'</div>
					</div>
					<div class="flex30">
						<div id="leia" class="b">
							<h2 class="b">Leia Mais</h2>
							<ul class="b">';
			                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
			                $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => array($post->ID), 'offset' => 1, 'order' => 'ASC'));
			                if($query->have_posts()=="1"){
			                  echo '<ul class="flex">';
			                  while ( $query->have_posts() ) : $query->the_post();
			                    echo '<li onclick="document.location='."'".get_the_permalink()."'".';return false;">
			                    	<h4 class="b">'.get_the_title().'</h4>
			                    	<p class="b">'.get_the_date().'</p>
			                    	<p class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.substr(get_the_content(), 0, 140).'...</a></p>
			                    </li>';
			                  endwhile; 
			                  wp_reset_query();   
			                  echo '</ul>';
			                } 
							echo '</ul>
						</div>
					</div>
				</div>
			</section>
  			'
  		?>
  	<?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>