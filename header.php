<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <meta name="google-site-verification" content="L3_QIznOx5qhLtuz-8YA4Fm455dIgDmY21TOYQjlbxU" />
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />


  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />
  <meta name="keywords" content="Movimento Viver, Viver, Igreja, Jesus Cristo, Evangélico, Cristão, Projeto Viver, Movimento Viver RJ" />

  <meta name="author" content="Wesley Andrade" />
  <meta name="copyright" content="Movimento Viver" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/css/default.css?v='.rand(5, 15); ?>" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
  <script src="http://bxslider.com/lib/jquery.bxslider.js" type="text/javascript"></script>
  
  <script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.js" type="text/javascript"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/iframeheight.js" type="text/javascript"></script>

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-75413813-2', 'auto');
    ga('send', 'pageview');
  </script>

  <?php wp_head(); ?>
</head>
<body <?php
    $offset = 0;
    global $post;
    if (is_front_page() || is_home()) {
      echo 'class="pg-home"';
    } else if(is_archive()){
      echo 'class="pg-interna pg-archive page_id_'.$post->ID.'"';
    } else if(is_single()){
      echo 'class="pg-interna pg-single page_id_'.$post->ID.'"';
    } else {
      echo 'class="pg-interna page_id_'.$post->ID.'"';
    }
  ?>>
  <style type="text/css">
  #intro{
      background-image: url(<?php echo site_url()."/wp-content/uploads/2016/04/waves.png" ?>);
  }
  #intro > .wrap{
      background-image: url(<?php echo site_url()."/wp-content/uploads/2016/04/hashtag.png" ?>),
                        url( <?php echo site_url()."/wp-content/uploads/2016/04/girl.png" ?> );  
  }
  .pg-interna header{
    background-image: url(<?php echo site_url()."/wp-content/uploads/2016/04/waves.png" ?>);
    background-position: center -8px;
    background-repeat: repeat-x;
  }
  @font-face {
    font-family: 'icomoon';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/icomoon.eot');
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/icomoon.eot?#iefix') format('embedded-opentype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/icomoon.woff') format('woff'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/icomoon.ttf') format('truetype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/icomoon.svg#bryant_probold') format('svg');
    font-weight: normal;
    font-style: normal;
  }
  </style>
  <div id="wrap">
    <nav id="mobileMenu">
      <ul>
        <?php
          echo '<li><a href="'.site_url().'" title="'.get_bloginfo('name').'">Home</a></li>';
          wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) );
          $query = new WP_Query( array( 'post_type' => 'participe', 'order' => 'ASC') );
          if($query->have_posts()=="1"){
            while ( $query->have_posts() ) : $query->the_post();
            echo '<li><a href="'.site_url().'/participar/#'.get_the_id().'" title"'.get_the_title().'">'.get_the_title().'</a></li>';
            endwhile; 
            wp_reset_query(); 
          }
          wp_nav_menu( array( 'container' => false, 'menu' => 'mais', 'items_wrap' => '%3$s' ) );
        ?>
      </ul>
    </nav>
    <header id="nav" class="b">
      <div class="wrap">
        <nav class="flex">
          <div class="flex40">
            <?php if ( get_theme_mod( 'logo' ) ) : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
            <?php else : ?>
              <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a>
            <?php endif; ?> 
          </div>
          <div class="flex60">
              <ul id="menu" class="flex">
                <?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
                <li>
                  <a href="javascript:void(0)" title="Mais">Mais</a>
                  <ul>
                    <?php wp_nav_menu( array( 'container' => false, 'menu' => 'mais', 'items_wrap' => '%3$s' ) ); ?>
                  </ul>
                </li>
                <li>
                  <a href="javascript:void(0)" title="Participe">
                    <span>Participe</span>
                    <span class="icon-ic_drawer_open"></span>
                  </a>
                </li>
              </ul>
          </div>
        </nav>
      </div>
       <!-- Participe -->
      <?php
      $query = new WP_Query( array( 'post_type' => 'participe', 'order' => 'ASC') );
      if($query->have_posts()=="1"){
        echo '
        <div id="participe">
          <div class="wrap flex">
            <div class="flex50"><ul class="flex">';
              while ( $query->have_posts() ) : $query->the_post();
              echo '<li class="flex flex100" onclick="document.location='."'".site_url()."/participar/#".get_the_id()."'".';return false;">
              <div class="flex50">
                <h2 class="b">'.get_the_title().'</h2>
                <p class="b">'.get_the_content().'</p>
              </div>
              <div class="flex50"><img src="'.wp_get_attachment_url(get_post_thumbnail_id($post->ID)).'" alt="'.get_the_title().'" /></div>
            </li>';
            endwhile; 
            wp_reset_query(); 
            echo '
          </ul></div>
        </div>
      </div>
      '; 
      }
      ?>
      <!--  -->  
    </header>