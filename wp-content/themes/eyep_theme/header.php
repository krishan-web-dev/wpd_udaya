<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

	<?php wp_head(); ?>		
</head>


<body>
	
		<!-- header -->
		<header id="header_main">			

			<div class="header_nav_container">

				<div class="header_logo">
					<?php echo get_bloginfo( 'name' ); ?>					
				</div>	

				<div class="main_menu">

					<div class="menu-toggle-wrapper">
						<a class="mobile-menu-toggle" href="#"></a>
					</div>

					<div class="menu">
					<?php 
						wp_nav_menu(
							array(						        
						        'menu'            => '',
						        'container'       => 'div',
						        'container_class' => 'menu-{menu slug}-container',
						        'container_id'    => '',
						        'menu_class'      => 'menu',
						        'menu_id'         => '',
						        'echo'            => true,
						        'fallback_cb'     => 'wp_page_menu',
						        'before'          => '',
						        'after'           => '',
						        'link_before'     => '',
						        'link_after'      => '',
						        'items_wrap'      => '<ul>%3$s</ul>',
						        'depth'           => 0,
						        'walker'          => ''
					        )
						);
					?>					
					</div>

				</div>
				
			</div>

		</header>
		<!-- /header -->	

	<div class="page_container">