<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php echo bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="yurist-bfl.ru">
    <meta property="og:title" content="title">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:image" content="<?php echo get_template_directory_uri(). '/assets/src/images/logo.png'; ?>">
    <link rel="canonical" href="<?php ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Forum">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <?php wp_head(); ?>
</head>
<body class="bubu">
<div class="container">
	<div class="row header">
		<div class="col-1">
            <div itemscope itemtype="http://schema.org/Organization">
                <a itemprop="url" href="<?php echo get_home_url(); ?>"></a>
                <img  class="logo" itemprop="logo" src="<?php echo get_template_directory_uri(). '/assets/src/images/logo.png'; ?>" />
            </div>
		</div>
		<div class="col-11">
			<nav class="navbar navbar-expand-lg">
				<div class="container-fluid">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Main navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <?php
                            wp_nav_menu([
                                'theme_location' => 'menu_header',
                                'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
                                'container' => false
                            ]);
                        ?>
						<ul class="navbar-nav right-list">
							<li class="nav-item">
<!--                                --><?php
//                                    if(is_active_sidebar('nocredits_header')) {
//                                        dynamic_sidebar('nocredits_header');
//                                    }
//                                ?>
								<a class="nav-link tel" href="tel:79190088811">
                                    <?php
                                        if ( is_active_sidebar( 'nocredits_menu_phone' ) ) {
                                            dynamic_sidebar( 'nocredits_menu_phone' );
                                        }
                                    ?>
                                </a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="/contacts/">Контакты</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>
</div>