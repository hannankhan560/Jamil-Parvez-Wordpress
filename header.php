<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="icon" />
	<link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous" rel="stylesheet">
	
</head>
<body <?php body_class(); ?>>

<div class="mobile-nav">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="#" class="mobile-close" aria-label="Close">&times;</a>
				<ul class="menu">
					<?php
						wp_nav_menu( array(
							'menu'       => 'primary',
							'container'  => false,
							'items_wrap' => '%3$s',
						));
					?>
				</ul>
				<form class="form-inline" action="/" method="get">
					<input class="form-control" type="text" name="s" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" />
				</form>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</div><!-- /mobile-nav -->