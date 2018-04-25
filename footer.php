			<footer>
				<div class="wrap flex">
					<div class="flex100 flex">
						<div class="flex50 flex">
							<ul class="flex33 menu">
								<li><p><strong>Home</strong></p></li>
								<?php wp_nav_menu( array( 'container' => false, 'menu' => 'header', 'items_wrap' => '%3$s' ) ); ?>
							</ul>
							<ul class="flex33">
								<li><p><strong>Participe</strong></p></li>
							      <?php
							        $query = new WP_Query( array( 'post_type' => 'participe', 'order' => 'ASC') );
							        if($query->have_posts()=="1"){
							        	while ( $query->have_posts() ) : $query->the_post();
							        	echo '<li><a href="'.site_url().'/participar/#'.get_the_id().'" title"'.get_the_title().'">'.get_the_title().'</a></li>';
							        endwhile; 
							        wp_reset_query(); 
							        }
							      ?>
							</ul>
							<ul class="flex33">
								<li><p><strong>Mais</strong></p></li>
								<?php wp_nav_menu( array( 'container' => false, 'menu' => 'mais', 'items_wrap' => '%3$s' ) ); ?>
							</ul>
						</div>
						<div class="flex50 flex">
							<div class="flex40">
								<ul class="social">
									<?php wp_nav_menu( array( 'container' => false, 'menu' => 'social', 'items_wrap' => '%3$s' ) ); ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="flex100 flex">
						<div class="flex30">
							<p class="b"><?php echo get_theme_mod( 'copyright' )." ".get_bloginfo('name').", ".date('Y'); ?></p>
						</div>
						<div class="flex70 flex">
							<ul id="apoio" class="flex45">
								<li><img src="<?php echo site_url()."/wp-content/uploads/2016/04/cristolandia_logo.png"; ?>" alt="Cristolândia" /></li>
								<li><img src="<?php echo site_url()."/wp-content/uploads/2016/04/missoes-1.png"; ?>" alt="Missões Nacionais" /></li>
								<li><img src="<?php echo site_url()."/wp-content/uploads/2016/04/convencao.png"; ?>" alt="Convenção Batista Brasileira" /></li>						
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
        <div id="fb-root"></div>
        <?php wp_footer(); ?> 
		<script type="text/javascript">
		    jQuery(document).ready(function(){
			   $('#social_wall').iframeHeight({
			        resizeMaxTry         : 2,  
			        resizeWaitTime       : 300,    
			        minimumHeight        : 100, 
			        defaultHeight        : 500,   
			        heightOffset         : 90,    
			        exceptPages          : "",  
			        debugMode            : false,
			        visibilitybeforeload : true,
			        blockCrossDomain     : true,
			        externalHeightName   : "bodyHeight",
			        onMessageFunctionName: "getHeight",
			        domainName           : "*",
			        watcher              : true,
			        watcherTime          : 400
			    });
			    if ($(window).width() <= 990) {
			      var fHeight = $("#floatingNews > div").outerHeight();
			      $("#floatingNews").outerHeight(fHeight);
			      $(".pg-home main > section#pg-quem_somos:not(#intro) .wrap").css("padding-top",fHeight+"px");
			    } else {
			      $(".pg-home main > section#pg-quem_somos:not(#intro) .wrap").css("padding-top","180px");
			    }
			    $( window ).resize(function() {
			      var fHeight = $("#floatingNews > div").outerHeight();
			      if ($(window).width() <= 990) {
			        $("#floatingNews").outerHeight(fHeight);
			        $(".pg-home main > section#pg-quem_somos:not(#intro) .wrap").css("padding-top",fHeight+"px");
			      } else {
			        $(".pg-home main > section#pg-quem_somos:not(#intro) .wrap").css("padding-top","180px");
			      }
			    });
			    <?php 
			      echo '
			          $(".pg-interna footer .menu > li:not(:first-child) > a,.pg-interna #mobileMenu ul li:nth-child(1) a,.pg-interna #mobileMenu ul li:nth-child(2) a,.pg-interna #mobileMenu ul li:nth-child(3) a,.pg-interna #mobileMenu ul li:nth-child(4) a,.pg-interna #menu > li:not(:last-child):not(:nth-last-child(2)) > a").each(function() {
			            $(this).attr("href", "'.site_url().'" + "/" + $(this).attr("href"));
			          });
			        ';  
			    ?>
		    	$('header .flex60').on( "click", function() {
		    		if ($(window).width() <= 990) {
		    			$("#mobileMenu").toggle();
		    			$("header").toggleClass("on");
		    			$(this).toggleClass("on");
		    		}
		    	});
		    	// var lastScrollTop = 0;
		    	// $(window).scroll(function(event){
		    	// 	var st = $(this).scrollTop();
		    	// 	if (st > lastScrollTop){
		    	// 		$(".on").removeClass("on");
		    	// 		$("#mobileMenu").hide();
		    	// 	}
		    	// 	lastScrollTop = st;
		    	// });
				$('[title="Mais"]').click(function() {
					$(this).parent().find("ul").toggle();
				});
				$('[title="Participe"]').click(function() {
					$(this).toggleClass("participe_on");
					if($("[title='Participe']").hasClass("participe_on")){
						$("#participe").fadeIn();
						$(this).find("span:first-of-type").text("Fechar");
						$("body").css("overflow","hidden");
						$('[title="Mais"]').parent().find("ul:visible").toggle();
					} else {
						$("#participe").fadeOut();
						$(this).find("span:first-of-type").text("Participe");
						$("body").css("overflow","initial");
					}
				});
				$('.bxslider').bxSlider({
				  minSlides: 1,
				  maxSlides: 1,
				  slideWidth: 700,
				  mode:'fade',
				  controls:false,
				  adaptiveHeight:true,
				  prevText:"",
				  nextText:"",
				  slideMargin: 0
				});
				$( ".social li a" ).each(function() {
					var getClass = $(this).text().toLowerCase();
					$(this).addClass("icon-ic_social_"+getClass);
				});
				$('.floatingSwitcher').click(function() {
					if($(this).hasClass("icon-ic_agenda")){
						$(this).parent().find("span").text("Agenda");
						$(this).text("Notícias").addClass("icon-ic_noticias").removeClass("icon-ic_agenda");
						$("#mainNews,#mainNews + ul").fadeOut();
						$(".news-response").hide();
						$("#agenda").fadeIn().addClass("flex");
					} else {
						$(this).parent().find("span").text("Notícias");
						$(this).text("Agenda").addClass("icon-ic_agenda").removeClass("icon-ic_noticias");
						$("#mainNews,#mainNews + ul").fadeIn().addClass("flex");
						$(".news-response").show();
						$("#agenda").fadeOut();
					}
				});
				$('#menu a,footer .menu a').click(function() {
					var href = $(this).attr("href").replace('#','');
					$('html, body').stop(true, false).animate({
						scrollTop: $("[id='"+href+"']").offset().top 
					}, 500);	
				});

				$(function () {
				  // initialize skrollr if the window width is large enough
				  if ($(window).width() >= 990) {
				    skrollr.init({
						forceHeight: false,
						smoothScrolling: false,
						mobileDeceleration: 0.004,
						skrollrBody: 'skrollr-body'
					});
				  }

				  // disable skrollr if the window is resized below 768px wide
				  $(window).on('resize', function () {
				    if ($(window).width() <= 990) {
				      skrollr.init().destroy(); // skrollr.init() returns the singleton created above
				    } else {
					    skrollr.init({
							forceHeight: false,
							smoothScrolling: false,
							mobileDeceleration: 0.004,
							skrollrBody: 'skrollr-body'
						});				    	
				    }
				  });
				});

			    $(window).on('resize', function () {
		    		$(".on").removeClass("on");
		    		$("#mobileMenu").hide();
			    });
		    });
		</script>
    </body>
</html>