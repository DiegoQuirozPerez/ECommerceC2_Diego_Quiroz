<?php
	/*==================================================================================
						Configurar Child Theme
	==================================================================================*/
	add_action( 'wp_enqueue_scripts', 'next_flight_enqueue_styles' );
	function next_flight_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'travel-agency-companion-public-style', get_stylesheet_directory_uri() . '/css/travel-agency-companion-public.css' );
		wp_enqueue_style( 'loader-style', get_stylesheet_directory_uri() . '/css/loader.css' );
		wp_enqueue_script( 'modal', get_stylesheet_directory_uri() . '/js/modal.js', array( 'jquery' ), '1.0', true ); 
	} 
	/*==================================================================================
		   					Reorganizar hoks
	==================================================================================*/
	//=========================== Header ==============================================
	//-------------------------- Agregar loader en el header---------------------------
	add_action('wp_head', 'loader');
	function loader() {
    ?>
	    <div class="loader-container">
	   		<div class="loader">
				<div class="inner one"></div>
				<div class="inner two"></div>
				<div class="inner three"></div>
				<div class="inner text">Loading destinations</div>
			</div>
		</div>
    <?php
	}
	?>
	<?php 
	//=========================== Despues del contenido =================================
	//-------------------------- Agregar formulario de vuelos --------------------------
	add_action('travel_agency_after_content', 'show_fligths',10);
	function show_fligths(){
		?>
		<section class="search-form" style="background-color:#1773b9 !important">
			<div class="container">
				<div class="text">
            		<h2 class="section-title">Choose your destiny</h2>
        		</div>
    		</div>
    		<div class="form">
			<div class="travel-form">
					 <script charset="utf-8" src="//www.travelpayouts.com/widgets/e156ff21c09256ec00e311b4da6d07d4.js?v=1300" async></script>
				</div>
        	</div>
		</section>	
	<?php
	}
	?>
	<?php 
	//-------------------------- Agregar Hook con Rutas del mapa  --------------------------
	add_action('travel_agency_after_content', 'rutas_mapa',20);
	function rutas_mapa() {
	?>
	<section id="scroll-rutas" class="our-features" style="background:url(http://localhost/nextflight/wp-content/themes/nextflight/images/img13.jpg) no-repeat">
		
        <header class="section-header wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
			<h2 class="section-title">Map Flight Routes</h2>
			<div class="section-content">
			<p>Check availables flights close to your location</p>
			</div>            
		</header>
   		<div class="features-holder wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
	   		<div class="container">
    			<div class="form">
					<h2 class="load-map">Cargando Mapa...</h2>
	            	<?php
             		echo do_shortcode('[tp_map_widget  width=100% height=500 direct=true subid=""]');
            		?>
        		</div>
    		</div>
		</div>   
	</section>
	<?php
	}
	?>	

	<?php 
	//-------------------------- Agregar Hook con ofertas de vuelos --------------------------
	add_action('travel_agency_after_content', 'ofertas',30);
	function ofertas() {
	?>
	<section class="activities" id="scroll-ofertas" style="background:url('http://localhost/nextflight/wp-content/themes/nextflight/images/img20.jpg') no-repeat bottom; background-size: cover">
	    <header class="section-header">        
        	<div class="holder">
    			<h2 class="section-title">
					Check the offers we have for you
				</h2>
				<div class="section-content" title="Shift-click to edit this element.">
					<p> Check the best prices close to your location</p>
					<button class="btn-more title toggle" id="map-routes"><span>Show</span> Offers</button>
				</div>
				<div class="form toggler" style="display: none;">
					<?php
						echo do_shortcode('[tp_ducklett_widget responsive=true limit=6 type=brickwork filter=1  subid=""]');
					?>
        		</div>
    		</div>
   		</header>		
    </section>
	<?php
	}
	?>

	<?php
	//=========================== Antes del footer =================================
	//----------- Agregar el mapa con las oficinas de Next Flight ------------------
		add_action( 'travel_agency_after_content', 'agregar_mapa',90);
		function agregar_mapa(){
			echo do_shortcode('[intergeo id="AjM"][/intergeo]');
		};
	?>
	<?php 
	//====================Agregar mapas en el footer ================================
	function travel_agency_footer_top(){    
		?>
		<div class="footer-t">
			<div class="row">
				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Argentina</h2>
						<div class="textwidget custom-html-widget">
							<p>
								Av. Callao 531, C1022AAR CABA, Argentina
							</p>
						</div>
						<?php echo do_shortcode('[intergeo id="IzN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Brasil</h2>
						<div class="textwidget custom-html-widget">
							<p>
								Rua Miquerinos, 1, edificio Golden Tower, 
								sala 514 - Brasil
							</p>
						</div>
						<?php echo do_shortcode('[intergeo id="EzN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Chile</h2>
						<div class="textwidget custom-html-widget">
						<p>
							Merced 349, depto. 901,
							Región Metropolitana, Chile
							</p>
						</div>
						<?php echo do_shortcode('[intergeo id="QzN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Colombia</h2>
						<div class="textwidget custom-html-widget">
						<p>
							Av. Colombia No. 5 oeste-305,
							Cali, Valle del Cauca, Colombia
						</p>
						</div>
						<?php echo do_shortcode('[intergeo id="YzN"][/intergeo]');?>
					</section>
				</div>


				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Ecuador</h2>
						<div class="textwidget custom-html-widget">
						<p>
							Aguirre, Guayaquil 090313,
							Ecuador
						</p>
						</div>
						<?php echo do_shortcode('[intergeo id="czN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Miami</h2>
						<div class="textwidget custom-html-widget">
						<p>
							110401 Northwest 87th Avenue,
							Doral, Florida, EE. UU.
						</p>
						</div>
						<?php echo do_shortcode('[intergeo id="MzN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
						<h2 class="widget-title">Branch Perú</h2>
						<div class="textwidget custom-html-widget">
							<p>
								Av. Alfredo Benavides 291-220, Miraflores, Peru
							</p>
						</div>
						<?php echo do_shortcode('[intergeo id="UzN"][/intergeo]');?>
					</section>
				</div>

				<div class="column">
					<section  class="widget_text widget widget_custom_html">
					</section>
				</div>
			</div>		
			<div class="row">
			<?php
			if( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) || is_active_sidebar( 'footer-four' ) ){	
				 if( is_active_sidebar( 'footer-one' ) ){ ?>
				<div class="column">
				   <?php dynamic_sidebar( 'footer-one' ); ?>	
				</div>
            <?php } ?>
			
            <?php if( is_active_sidebar( 'footer-two' ) ){ ?>
                <div class="column">
				   <?php dynamic_sidebar( 'footer-two' ); ?>	
				</div>
            <?php } ?>
            
            <?php if( is_active_sidebar( 'footer-three' ) ){ ?>
                <div class="column">
				   <?php dynamic_sidebar( 'footer-three' ); ?>	
				</div>
            <?php } ?>
            
            <?php if( is_active_sidebar( 'footer-four' ) ){ ?>
                <div class="column">
				   <?php dynamic_sidebar( 'footer-four' ); ?>	
				</div>
            <?php } ?>
		</div>
	</div>
    <?php 
    }   
}
add_action( 'travel_agency_footer', 'travel_agency_footer_top', 30 );

?>

	<?php 
	//============== Editar la información al final de la sección footer ===============
		function travel_agency_footer_bottom(){ ?>
			<div class="footer-b">
				<div class="site-info">
					<?php
						travel_agency_get_footer_copyright();
						
						echo 'Travel Agency'. esc_html__( ' by Rara Theme modified by.', 'travel-agency' ). '<a href="https://behance.net/ljmarquezg">Luis Marquez</a>';
						
						printf( esc_html__( ' Powered by %s', 'travel-agency' ), '<a href="'. esc_url( __( 'https://wordpress.org/', 'travel-agency' ) ) .'" target="_blank">WordPress</a> .' );                        
						 
					?>                              
				</div>
				
				<nav class="footer-navigation">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'fallback_cb'    => false,
						) );
					?>
				</nav><!-- .footer-navigation -->
			</div>
			<?php
		}
		add_action( 'travel_agency_footer', 'travel_agency_footer_bottom', 40 );
	
	?>
<?php
	function travel_agency_header(){     
    $phone       = get_theme_mod( 'phone', __( '(888) 123-45678', 'travel-agency' ) );
    $phone_label = get_theme_mod( 'phone_label', __( 'Call us, we are open 24/7', 'travel-agency' ) );
    $ed_social   = get_theme_mod( 'ed_social_links', true );
    $ed_search   = get_theme_mod( 'ed_search', true ); 
    ?>
    <header class="site-header">
        <div class="header-holder">			
            <?php if( $ed_social || $ed_search ){ ?>
            <div class="header-t">
				<div class="container">
				<div class="flex-header">
					<?php if( $ed_social )
							echo'<div class="flex-content">';
							travel_agency_social_links(); 
							echo '</div>';?>

					<?php
						echo'<div class="flex-content contact">';
    						if( $phone_label ) echo '<span class="phone-label">' . esc_html( travel_agency_get_phone_label() ) . '</span>';
							if( $phone ) echo ' - <a href="' . esc_url( 'tel:' . preg_replace( '/\D/', '', $phone ) ) . '" class="tel-link"><span class="phone">' . esc_html( travel_agency_get_header_phone() ) . '</span></a>';
							echo '</div>';
                        ?>
					<div class="tools">
						<?php if( $ed_search ) echo'<div class="flex-content">'; travel_agency_get_header_search(); echo '</div>'; ?>						
					</div>                     
				</div>
				</div>
			</div> <!-- header-t ends -->
            <?php } ?>
            
            <div class="header-b">
				<div class="container">
					<div class="site-branding">
					<a href="http://localhost/nextflight/" class="custom-logo-link" rel="home" itemprop="url"><img src="http://localhost/nextflight/wp-content/uploads/cropped-logo-nextflight.png" class="custom-logo" alt="Next Flight" itemprop="logo" srcset="http://localhost/nextflight/wp-content/uploads/cropped-logo-nextflight.png 1632w, http://localhost/nextflight/wp-content/uploads/cropped-logo-nextflight-300x160.png 300w, http://localhost/nextflight/wp-content/uploads/cropped-logo-nextflight-768x409.png 768w, http://localhost/nextflight/wp-content/uploads/cropped-logo-nextflight-1024x545.png 1024w">
					</a>
                        <div class="text-logo">
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        </div>
            		</div><!-- .site-branding -->
                    <?php
                			$description = get_bloginfo( 'description', 'display' );
                			if ( $description || is_customize_preview() ) : ?>
                				<p class="site-description"><?php echo esc_html( $description ); /* WPCS: xss ok. */ ?></p>
                			<?php
                			endif; ?>
                    <?php if( $phone_label || $phone ){ ?>
                    <div class="right">
					<!-- <div class="nav-holder">
			<div class="container">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="home-link"><i class="fa fa-home"></i></a>
                <div id="primary-toggle-button"><?php esc_html_e( 'MENU', 'travel-agency' );?><i class="fa fa-bars"></i></div>
                <nav id="site-navigation" class="main-navigation">
        			<?php/*
        				wp_nav_menu( array(
        					'theme_location' => 'primary',
        					'menu_id'        => 'primary-menu',
                            'fallback_cb'    => 'travel_agency_primary_menu_fallback',
        				) );*/
        			?>
        		</nav>#site-navigation
			</div>
		</div> nav-holder ends -->
                    </div>
                    <?php } ?>
                    
				</div>
			</div> <!-- header-b ends -->
                        
		</div> <!-- header-holder ends -->
	
	</header> <!-- header ends -->
    <?php
}
add_action( 'travel_agency_header', 'travel_agency_header', 20 );
	 