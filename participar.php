      <?php
        $query = new WP_Query( array( 'post_type' => 'participe', 'order' => 'ASC') );
        if($query->have_posts()=="1"){
          echo '
          <section class="b">
            <div class="flex">';
              while ( $query->have_posts() ) : $query->the_post();
                echo '
                  <div class="section-header flex100">
                    <div class="wrap flex">
                      <div class="flex70">
                        <h1 class="b">'.get_the_title().'</h1>
                        <p class="b">'.get_the_content().'</p>
                      </div>
                      <div class="flex30"><img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'" /></div>
                    </div>
                  </div>';
                  switch (get_the_id()) {
                    case 92:
                      echo '
                      <div class="flex100">
                        <div class="wrap">'; 
                      echo do_shortcode('[contact-form-7 id="107" title="Instituição"]');
                      break;
                    case 95:
                      echo '
                      <div id="'.get_the_id().'" class="flex100">
                        <div class="wrap">'; 
                      echo do_shortcode('[contact-form-7 id="108" title="Contribuição"]');
                      break;
                    default:
                      # code...
                      break;
                  }
                  echo '</div>
                  </div>';
              endwhile; 
              wp_reset_query(); 
            echo '</div>
          </section>
          '; 
        }
      ?>