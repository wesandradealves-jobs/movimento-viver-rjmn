<?php 
	echo '<section class="b section-header">
		<div class="wrap">
			<h1 class="b">'.get_the_title().'</h1>
			<p class="b">'.get_the_content().'</p>
		</div>
	</section>
	<section id="contato" class="b">
		<div class="wrap flex">
			<div class="flex100 flex">
				<div class="flex50">
					<i class="ic-contato"><!-- --></i>
					<h4><a href="mailto:'.get_theme_mod( 'email' ).'" title="'.get_theme_mod( 'email' ).'">'.get_theme_mod( 'email' ).'</a></h4>
				</div>
				<div class="flex50">
					<i class="ic-telefone"><!-- --></i>
					<h4>'.get_theme_mod( 'telefone' ).'</h4>
				</div>
			</div>
			<div class="flex100">
				<p>'.get_theme_mod( 'endereco' ).'</p>
			</div>
		</div>
	</section>
	';
?>