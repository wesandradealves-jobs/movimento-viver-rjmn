<section id="intro" class="b" data-0="background-position:center 0%;" data-500="background-position:center 30%;">
  <div class="wrap" data-0="background-position:center 35%, left 100%;" data-500="background-position:center 25%, left 150%;">
    <div id="webdoor" class="flex">
      <div class="flex50 flex">
        <div class="flex90">
          <h1 class="b">Escolha a Vida</h1>
          <p class="b"><?php bloginfo('description'); ?></p>
          <img src="<?php echo site_url()."/wp-content/uploads/2016/04/realizacao.png" ?>" alt="<?php echo get_bloginfo('description'); ?>" class="b" />

          <!-- Notícias -->
          <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1, 'offset' => $offset, 'order' => 'DESC') );
            echo '
            <div id="floatingNews" class="b">
              <div>
                <h2 class="b c"><span>Notícias</span> <a href="javascript:void(0)" class="b r floatingSwitcher icon-ic_agenda"> Agenda</a></h2>';
                if($query->have_posts()=="1"){
                while ( $query->have_posts() ) : $query->the_post();
                // última notícia
                echo '
                  <div id="mainNews" class="flex" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');">
                    <div class="flex100">    
                      <h4 class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h4>
                      <p class="b">'.get_the_date().'</p>
                    </div>
                  </div>';
                  endwhile; 
                  wp_reset_query(); 
                  echo '</ul>';
                  // mais notícias
                  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                  $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 2, 'offset' => 1, 'order' => 'DESC') );
                  if($query->have_posts()=="1"){
                    echo '<ul class="flex">';
                    while ( $query->have_posts() ) : $query->the_post();
                    echo '<li class="flex100 flex">
                    <div class="flex35"><img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'" /></div>
                    <div class="flex65">
                      <h4 class="b"><a href="'.get_the_permalink().'" title="'.get_the_title().'">'.substr(get_the_title(), 0, -29).'...</a></h4>
                      <p class="b">'.get_the_date().'</p>
                    </div>
                  </li>';
                  endwhile; 
                  wp_reset_query();  
                  echo '</ul>';
                  }
                } else {
                  echo "<div class='news-response'><p>Nenhuma notícia encontrada :-(</p></div>";
                }
                // agenda
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $query = new WP_Query( array( 'post_type' => 'agenda', 'posts_per_page' => 3, 'offset' => $offset, 'order' => 'DESC') );
                if($query->have_posts()=="1"){
                  echo '<ul id="agenda" class="flex">';
                  while ( $query->have_posts() ) : $query->the_post();
                  echo '<li class="flex100 flex">
                  <div class="flex30">';
                    $data = get_field('data', false, false);
                    $data = new DateTime($data);
                    echo "<h2 class='agenda_data'>".date_i18n("j", strtotime(get_field('data')))."<span class='b'>de ".date_i18n("F", strtotime(get_field('data')))."</span></h2>";
                    echo '</div>
                    <div class="flex70">
                      <h4 class="b">'.get_the_title().'</h4>
                      <p class="b">'.get_the_content().'</p>
                    </div>
                  </li>';
                  endwhile; 
                  wp_reset_query();   
                  echo '</ul>';    
                }
            echo '
            </div>
          </div>';  
        ?>
        <!--  -->













        </div>
      </div>
    </div>
  </div>   
</section>
<?php 
$query = new WP_Query( array( 'post_type' => 'page', 'post__in' => array(14,12,10), 'order' => 'ASC') );
if($query->have_posts()=="1"){
  while ( $query->have_posts() ) : $query->the_post();
    echo '
    <section id="pg-'.strtolower(remove_accents(str_replace(' ', '_', get_the_title()))).'" class="b pg-'.strtolower(remove_accents(str_replace(' ', '_', get_the_title()))).' pg-'.get_the_id().'" style="background-image:';
    if(get_the_id()==14){
      echo "url(".site_url()."/wp-content/uploads/2016/04/waves.png),";
    }
    echo '
      url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');
    ">
      <div class="wrap flex">
        <div class="flex40">
          <h1 class="b">'.get_the_title().'</h1>
          <p class="b">'.get_the_content().'</p>
        </div>
      </div>
    </section>';
  endwhile; 
  wp_reset_query();   
}
$query = new WP_Query( array( 'post_type' => 'depoimento', 'order' => 'ASC') );
if($query->have_posts()=="1"){
  echo '
    <section id="depoimentos" class="b" style="background-image:url('.site_url().'/wp-content/uploads/2016/04/depoimentos.png);">
      <div class="wrap flex">
        <div class="flex100">
          <div class="depoimentos">
            <ul class="bxslider">';
              while ( $query->have_posts() ) : $query->the_post();
              echo '
              <li>
                <div class="flex">
                  <div class="flex100 flex">
                    <div class="flex30">
                      <div class="b depoimento_avatar" style="background-image:url('.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).');"><!-- --></div>
                    </div>
                    <div class="flex70 flex">
                      <div class="flex100 depoimento_balao">
                        <p class="b">'.substr(get_the_content(), 0, 300).'</p>
                        <p class="b"><strong>'.get_the_title().'</strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              ';
              endwhile; 
              wp_reset_query(); 
  echo '
            </ul>
          </div>
        </div>
      </div>
    </section>';
}
?>
<section id="redes-sociais" class="b">
  <div class="wrap">
    <h1 class="b">Redes Sociais</h1>
    <div id="midias">
      <iframe id="social_wall" src="<?php echo get_template_directory_uri(); ?>/social_wall/index.php" frameborder="0" scrolling="no" width="100%"></iframe>
    </div>
  </div>
</section>

